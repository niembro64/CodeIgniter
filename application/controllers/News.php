<?php
class News extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('news_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['news'] = $this->news_model->model_get_news_all();
    $data['title'] = 'News Archive';

    $this->load->view('templates/header', $data);
    $this->load->view('news/index', $data);
    $this->load->view('templates/footer');
  }

  public function view($slug = NULL)
  {
    $data['news_item'] = $this->news_model->model_get_news_one($slug);

    if (empty($data['news_item'])) {
      show_404();
    }

    $data['title'] = $data['news_item']['title'];

    $this->load->view('templates/header', $data);
    $this->load->view('news/view', $data);
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a News Item';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('news/create');
      $this->load->view('templates/footer');
    } else {
      $this->news_model->set_news_one();
      redirect('news');
    }
  }

  public function delete($id)
  {
    $this->news_model->model_delete_news_one_id($id);
    redirect('news');
  }

  public function delete_slug($slug)
  {
    $this->news_model->model_delete_news_one_slug($slug);
    redirect('news');
  }

  public function update($xxx)
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Update a News Item';
    $data['news_item'] = $this->news_model->model_get_news_one($xxx);

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('news/update', $data);
      $this->load->view('templates/footer');
    } else {
      $this->news_model->model_update_news($xxx);
      redirect('news');
    }
  }
}
