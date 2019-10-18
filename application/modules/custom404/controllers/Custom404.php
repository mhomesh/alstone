<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CI_Controller {
	
	function __construct() {
        parent::__construct();
		$this->load->model('cmspages/Cmsmodel');
	}
	 

	public function index($id=False){
		$this->load->model('cms/App_cms_model');
		$cms_object = new App_cms_model();
		$data['cmsContent'] = $this->Cmsmodel->editBox('about');
		$data['fetchcountry'] = $this->App_cms_model->fetchcountry();
		$data['fetchnatinality'] = $this->App_cms_model->fetchnatinality();
		$this->load->model('visafilter/Visafiltermodel');
		$data['main_content'] = 'custom404/404';
		$this->load->view('front/layout', $data);
	}
	
}
