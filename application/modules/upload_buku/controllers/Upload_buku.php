<?php
class Upload_buku extends UserDashboard
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }
  public function index()
  {
    $data['page_title'] = 'Upload';
    $data['content'] = 'upload_buku/upload_v';
    $this->templates->get_main_templates($data);
  }
  public function save()
  {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";
    echo "<pre>";
    var_dump($_FILES['book_cover']);
    echo "</pre>";
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
      $this->index();
    else:
      // Upload cover
      $config['upload_path'] = 'resource/';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size']     = '600';

      $this->load->library('upload', $config);

      // Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload('book_cover'))
       {
               $error = array('error' => $this->upload->display_errors());

               print_r($error);
              //  $this->load->view('upload_form', $error);
       }
       else
       {
          $data = array('upload_data' => $this->upload->data());
          print_r($data);
       }
    endif;
  }
}

 ?>
