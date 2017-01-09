<?php
class Article_m extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }
  public function get_article_list()
  {
    $this->db->select('*')->from('article');
    $this->db->order_by('updated_at' , 'DESC');
    $this->db->where('article_category', 'Article');
    $data = $this->db->get()->result();
    return $data;
  }
  public function get_article($article_url)
  {
    $this->db->select('*')->from('article');
    $this->db->order_by('updated_at' , 'DESC');
    $this->db->where('article_url' , $article_url);
    $data = $this->db->get()->row();
    return $data;
  }
}
