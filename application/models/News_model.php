<?php
class News_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function get_news_all()
  {
    $query = $this->db->get('news');
    return $query->result_array();
  }

  public function get_news_one($slug)
  {
    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  public function set_news_one()
  {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), '-', TRUE);
    $data = array(
      'title' => $this->input->post('title'),
      'slug' => $slug,
      'text' => $this->input->post('text')
    );
    return $this->db->insert('news', $data);
  }

  public function model_delete_news_one_id($id)
  {
    $this->db->delete('news', array('id' => $id));
  }

  public function model_delete_news_one_slug($slug)
  {
    $this->db->delete('news', array('slug' => $slug));
  }

  public function model_update_news($id)
  {
    $this->load->helper('url');
    $slug = url_title($this->input->post('title'), '-', TRUE);
    $data = array(
      'title' => $this->input->post('title'),
      'slug' => $slug,
      'text' => $this->input->post('text')
    );
    $this->db->update('news', $data, array('id' => $id));
  }
}
