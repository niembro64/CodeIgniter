<?php
class News_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function model_get_news_all()
  {
    $query = $this->db->get('news');
    return $query->result_array();
  }

  public function model_get_news_one_by_slug($slug)
  {
    $query = $this->db->get_where('news', array('slug' => $slug));
    return $query->row_array();
  }

  public function model_set_news_one()
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

  public function model_delete_news_one_by_id($id)
  {
    $this->db->delete('news', array('id' => $id));
  }

  public function model_delete_news_one_by_slug($slug)
  {
    $this->db->delete('news', array('slug' => $slug));
  }

  public function model_update_news_by_id($id)
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
