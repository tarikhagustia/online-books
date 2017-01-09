<?php
class Article extends UserController
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('article_m');
  }
  public function faqs()
  {
    $data['page_title'] = 'FAQs';
    $data['content'] = 'article/faqs_v';
    $data['faqs'] = $this->db->get_where('article' , ['article_category' => 'FAQs'])->result();
    $this->templates->get_main_templates($data);
  }
  public function article_list()
  {
    $data['page_title'] = 'Artikel';
    $data['content'] = 'article/article_v';
    $data['articles'] = $this->article_m->get_article_list();
    $this->templates->get_main_templates($data);
  }
  public function article_read($article_url)
  {
    $data['article'] = $this->article_m->get_article($article_url);
    $data['page_title'] = 'Artikel';
    $data['content'] = 'article/article_read_v';
    $this->templates->get_main_templates($data);
  }
}
