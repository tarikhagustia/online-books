<?php
class Upload_buku extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->library('upload');
    $this->load->library('format');
  }
  public function index()
  {
    $data['page_title'] = 'Upload';
    $data['content'] = 'upload_buku/upload_v';
    $this->templates->get_main_templates($data);
  }
  public function save()
  {
    $upload_dir = './resource/';
    $book_name = $this->input->post('book_name');
    $book_sheet = $this->input->post('book_sheet');
    $book_url = $this->format->seoUrl($book_name);
    $category_id = $this->input->post('category_id');
    $book_sheet = $this->input->post('book_sheet');
    $book_description = $this->input->post('book_description');
    $this->form_validation->set_rules('book_name', 'Judul Buku' , 'required|trim|callback_check_name' ,
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
      echo "string";
      $this->index();
    else:
      // Upload cover
      $config['upload_path'] = $upload_dir;
      $config['allowed_types'] = 'jpg|png';
      $config['max_size']     = '600';

      // $this->load->library('upload', $config);

      // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload('book_cover'))
       {
               $this->session->set_flashdata('danger', $this->upload->display_errors());
               $cover_upload = false;
               redirect('dashboard/upload');
              //  $this->load->view('upload_form', $error);
       }
       else
       {
          $data = array('upload_data' => $this->upload->data());
          $cover_path = $upload_dir . $this->upload->data('file_name');
          $cover_upload = true;
       }

      //  Book Source
      $config['upload_path'] = $upload_dir . 'books/';
      $config['allowed_types'] = 'jpg|png';
      $config['file_name'] = $this->format->seoUrl($this->input->post('book_name'));
      // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload('book_source'))
       {
          $this->session->set_flashdata('danger', $this->upload->display_errors());
          $book_upload = false;
          redirect('dashboard/upload');
       }
       else
       {
          $data = array('upload_data' => $this->upload->data());
          $book_path = $upload_dir . 'book/' . $this->upload->data('file_name');
          $book_upload = true;
       }
       if($cover_upload == true && $book_upload == true):
         $data = [
           'book_name' => $book_name,
           'book_url' => $book_url,
           'book_sheet' => $book_sheet,
           'user_id' => $this->session->user_id,
           'category_id' => $category_id,
           'book_description' => $book_description,
           'book_images' => $cover_path,
           'book_source' => $book_path,
           'is_active' => true
         ];
         $this->db->insert('book' , $data);
         redirect('dashboard/upload/success/'.$book_url);
       else:

       endif;
    endif;
  }
  public function check_name($book_name)
  {
    $this->db->select('book_name')->from('book')
    ->where('book_name', $book_name);
    $get = $this->db->get();
    if(count($get->result()) > 0):
      $this->form_validation->set_message('check_name', 'Maaf, buku dengan nama <strong>'. $book_name . '</strong> sudah ada.');
      return false;
    else:
      return true;
    endif;
  }
  public function success_upload($book_name)
  {
    $data['page_title'] = 'Upload Success';
    $data['book_name'] = $book_name;
    $data['content'] = 'upload_buku/upload_success_v';
    $this->templates->get_main_templates($data);
  }
}

 ?>
