<?php
class Admin_materi extends AdminController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('materi_m');
    $this->load->library(['format', 'form_validation', 'upload']);
  }
  public function view()
  {
    $data['materis'] = $this->materi_m->get_materi();
    $data['content'] = 'admin_materi/materi_v';
    $this->templates->get_admin_templates($data);
  }
  public function delete($book_id)
  {
    if($this->db->delete('book', ['book_id' => $book_id])):
      $this->session->set_flashdata('status', 'Sukses menghapus data');
      redirect('myadmin/materi');
      return true;
    else:
      $this->session->set_flashdata('status', 'Gagal menghapus data');
      redirect('myadmin/materi');
      return false;
    endif;
  }
  public function edit($book_id = null)
  {
    $data['materis'] = $this->materi_m->get_materi_edit($book_id);
    $data['content'] = 'admin_materi/edit_v';
    $this->templates->get_admin_templates($data);
  }
  public function edit_save()
  {
    $upload_dir = './resource/';
    $book_name = $this->input->post('book_name');
    $book_sheet = $this->input->post('book_sheet');
    $book_url = $this->format->seoUrl($book_name);
    $category_id = $this->input->post('category_id');
    $book_sheet = $this->input->post('book_sheet');
    $book_description = $this->input->post('book_description');
    $this->form_validation->set_rules('book_name', 'Judul Buku' , 'required|trim' ,
      ['required' => 'Kolom {field} tidak boleh kosong']
    );
    $this->form_validation->set_rules('category_id', 'Kategori Buku' , 'required' ,
      ['required' => 'Kolom {field} tidak boleh kosong']
    );
    $this->form_validation->set_rules('book_sheet', 'Jumlah halaman' , 'required|integer' ,
      [
        'integer' => 'Kolom {field} harus berisi angka',
        'required' => 'Kolom {field} harus disi'
      ]
    );
    $this->form_validation->set_rules('book_description', 'Keterangan' , 'required' ,
      ['required' => 'Kolom {field} harus diisi']
    );
    if($this->form_validation->run($this) == false):
      $this->edit($this->input->post('book_id'));
    else:
      // if(!empty($_FILES['book_cover']['error'] == 0)):
      //   // Upload cover
      //   $config['upload_path'] = $upload_dir;
      //   $config['allowed_types'] = 'jpg|png';
      //   $config['max_size']     = '600';
      //
      //   // $this->load->library('upload', $config);
      //
      //   // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
      //   $this->upload->initialize($config);
      //   if ( ! $this->upload->do_upload('book_cover'))
      //    {
      //            $this->session->set_flashdata('danger', $this->upload->display_errors());
      //            $cover_upload = false;
      //            redirect('myadmin/materi/edit/'. $this->input->post('book_id'));
      //           //  $this->load->view('upload_form', $error);
      //    }
      //    else
      //    {
      //       $data = array('upload_data' => $this->upload->data());
      //       $cover_path = $upload_dir . $this->upload->data('file_name');
      //       $data['book_images'] = $cover_path;
      //       $cover_upload = true;
      //    }
      // endif;
      $cover_upload = true;
      if(!empty($_FILES['book_source']['error'] == 0)):
        //  Book Source
        $config['upload_path'] = $upload_dir . 'books/';
        $config['allowed_types'] = 'pdf|doc|ppt';
        $config['file_name'] = $this->format->seoUrl($this->input->post('book_name'));
        // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('book_source'))
         {

            $this->session->set_flashdata('status', $this->upload->display_errors());
            $book_upload = false;
            // redirect('myadmin/materi/upload');
         }
         else
         {
            $data = array('upload_data' => $this->upload->data());
            $book_path = $upload_dir . 'book/' . $this->upload->data('file_name');
            $data['book_source'] = $book_path;
            $book_upload = true;
         }
      endif;
         if($this->input->post('is_free') == "on" ):
           $is_free = true;
         else:
           $is_free = false;
         endif;
         $data = [
           'book_name' => $book_name,
           'book_url' => $book_url,
           'book_sheet' => $book_sheet,
           'user_id' => $this->session->user_id,
           'category_id' => $category_id,
           'book_description' => $book_description,
           'is_free' => $is_free,
           'is_active' => true
         ];
         $this->db->where('book_id', $this->input->post('book_id'))
         ->update('book', $data);
         redirect('myadmin/materi');
    endif;
  }
}

 ?>
