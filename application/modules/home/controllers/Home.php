<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct() {
        parent::__construct();
	}

	public function index(){
		$this->load->model('cms/App_cms_model');
		$this->load->model('visafilter/Visafiltermodel');
		$cms_object = new App_cms_model();
		$data['fetchcountry'] = $this->App_cms_model->fetchcountry();
		$data['category_list'] = $this->Visafiltermodel->getCategoryList();
		$data['testimonials'] = $this->Visafiltermodel->getTestimonialList();
		$data['fetchnatinality'] = $this->App_cms_model->fetchnatinality();
		$this->load->model('home/App_home_model');
		$data['main_content'] = 'home/index';
		$this->load->view('front/layout', $data);
	}
}
