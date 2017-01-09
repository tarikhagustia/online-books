<?php
class Article extends UserController
{
  public function __construct()
  {
    parent::__construct();
  }
  public function faqs()
  {
    $data['page_title'] = 'FAQs';
    $data['content'] = 'article/faqs_v';
    $data['faqs'] = $this->db->get_where('article' , ['article_category' => 'FAQs'])->result();
    $this->templates->get_main_templates($data);
  }
}
