<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_Controller extends CI_Controller {
public function __construct()
    {
        parent::__construct();
    }
	
	function Mypage($content,$data=NULL){
		 
		$data['headernya'] = $this->load->view('template/header',$data,TRUE);
		$data['isinya'] = $this->load->view($content,$data,TRUE);
		$data['footernya'] = $this->load->view('template/footer',$data,TRUE);
		$data['jsnya'] = $this->load->view('template/js',$data,TRUE);
		$this->load->view('template/index',$data);
	}


	

}
