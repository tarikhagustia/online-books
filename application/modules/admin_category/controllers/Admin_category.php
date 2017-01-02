<?php
class Admin_category extends AdminController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('category_m');
    $this->load->library(['form_validation', 'format']);
  }
  public function index()
  {
    $data['content'] = 'admin_category/category_list';
    $data['list'] = $this->category_m->get_categories();
    $this->templates->get_admin_templates($data);
  }
  public function new()
  {
    $data['content'] = 'admin_category/category_new';
    $data['list'] = $this->category_m->get_categories();
    $this->templates->get_admin_templates($data);
  }
  public function save_category()
  {
    $category_name = $this->input->post('category_name');
    $this->form_validation->set_rules('category_name' , 'Nama Kategori', 'required|trim|callback_check_category_name');
    if($this->form_validation->run($this) == FALSE):
      $this->index();
    else:
      $data = [
        'category_name' => $category_name,
        'category_url' => $this->format->seoUrl($category_name),
        'created_at' => date('Y-m-d H:i:s'),
        'is_active' => true
      ];
      $this->db->insert('category', $data);
      $this->session->set_flashdata('success' , 'Berhasil menambah kategory');
      redirect('myadmin/category');
    endif;

  }
  public function check_category_name($category_name)
  {
    $get = $this->db->get_where('category', ['category_name' => $category_name]);
    if(count($get->result()) > 0):
      $this->form_validation->set_message('check_category_name', 'Nama Kategory <strong>' . $category_name . '</strong> sudah ada. Coba nama lain');
      return false;
    else:
      return true;
    endif;
  }
  public function hapus($category_id)
  {
    $this->db->delete('category' , ['category_id' => $category_id]);
    $this->session->set_flashdata('success' , 'Berhasil menghapus Kategori');
    redirect('myadmin/category');
  }
  public function edit_form($category_id)
  {
    $data['content'] = 'admin_category/category_edit';
    $data['category'] = $this->db->get_where('category' , ['category_id' => $category_id])->row();
    $this->templates->get_admin_templates($data);
  }
  public function edit_save()
  {
    $category_id = $this->input->post('category_id');
    $category_name = $this->input->post('category_name');
    $data = [
      'category_name' => $category_name
    ];
    $this->db->where('category_id' , $category_id);
    $this->db->update('category' , $data);
    $this->session->set_flashdata('success', 'Berhasil mengupdate data');
    redirect('myadmin/category');
  }
}
