<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App_newsletter_model extends CI_Model{
	
	function __construct() {
        parent::__construct();
        
    }
	
	protected $tbl_Module = 'tbl_newsletter_subscribe';
	
	
	
	public function getNewsletterList(){
    $this->db->select('tbl_newsletter_subscribe.*,tbl_country.country_id,tbl_country.country_name,tbl_language.language_id,tbl_language.language_name,tbl_Category.id,tbl_Category.cate_name');
    $this->db->from('tbl_newsletter_subscribe');
    $this->db->join('tbl_country', 'tbl_country.country_id = tbl_newsletter_subscribe.country_id');
	$this->db->join('tbl_language', 'tbl_language.language_id = tbl_newsletter_subscribe.language_id');
	$this->db->join('tbl_Category', 'tbl_Category.id = tbl_newsletter_subscribe.category_id');
    $query = $this->db->get();
	if($query->num_rows()>0)
	    return $query->result_array($query);
	  else
	    return array(); 
	}
	
	
	public function checknewsletterExist($editId="") {
		$this->db->where('id', $editId);
		$this->db->from('tbl_newsletter_subscribe');
		$userStatus = $this->db->count_all_results();        
		if ($userStatus > 0) {
		return 1;
		} else {
		return 0;
		}
	}
	
	public function deletenewsletter($id){
		$this->db->where('id', $id);
		if ($this->db->delete('tbl_newsletter_subscribe')) {
		return 1;
		} else {
		return 0;
		}
	}
	
	public function status_active_inacive($status) {

        $staus = $status['status'];

        if ($staus == 1) {

            $sub_admin['is_active'] = '0';

            $this->db->where('id', $status['static_page_id']);

            $update_status = $this->db->update('tbl_newsletter_subscribe', $sub_admin);

            return 'inactive';

        } else {

            $sub_admin['is_active'] = '1';

            $this->db->where('id', $status['static_page_id']);

            $update_status = $this->db->update('tbl_newsletter_subscribe', $sub_admin);

            return 'active';

        }

    }
	
}
