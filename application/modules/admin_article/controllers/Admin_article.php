<?php
class Admin_article extends AdminController {
  public function __construct()
  {
    parent::__construct();
    $this->load->library(['format']);
  }
  public function new_article()
  {
    $data['content'] = 'admin_article/new_v';
    $this->templates->get_admin_templates($data);
  }
  public function save_article()
  {
    $data = [
      'article_url' => $this->format->seoUrl($this->input->post('article_name')),
      'article_name' => $this->input->post('article_name'),
      'created_at' => date('Y-m-d H:i:s'),
      'article_category' => $this->input->post('article_category'),
      'article_desc' => $this->input->post('article_desc')
    ];
    $this->db->insert('article', $data);
    $this->session->set_flashdata('success', 'Berhasil menambahkan Artikel baru');
    redirect('myadmin/article/list');
  }
  public function list()
  {
    $materis = $this->db->get('article')->result();
    $data['materis'] = $materis;
    $data['content'] = 'admin_article/list_v';
    $this->templates->get_admin_templates($data);
  }
  public function hapus($article_id)
  {
    $this->db->delete('article' , ['article_id' => $article_id]);
    $this->session->set_flashdata('success', 'Berhasil menghapus data');
    redirect('myadmin/article/list');
  }
  public function edit_view($article_id = null)
  {
    $data['content'] = 'admin_article/edit_v';
    $data['article'] = $this->db->get_where('article', ['article_id' =>  $article_id])->row();
    $this->templates->get_admin_templates($data);
  }

  public function edit_save()
  {
    $data = [
      'article_url' => $this->format->seoUrl($this->input->post('article_name')),
      'article_id' => $this->input->post('article_id'),
      'article_name' => $this->input->post('article_name'),
      'article_category' => $this->input->post('article_category'),
      'article_desc' => $this->input->post('article_desc')
    ];
    $this->db->replace('article', $data);
    $this->session->set_flashdata('success' , 'Sukses merubah artikel');
    redirect('myadmin/article/list');
  }
}
