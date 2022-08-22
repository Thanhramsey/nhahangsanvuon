<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tintuc extends CI_Controller {
	// Hàm khởi tạo
    function __construct() {
        parent::__construct();
        $this->load->model('frontend/Mproduct');
        $this->load->model('frontend/Mcategory');
        $this->load->model('frontend/Mcontent');
        $this->data['com']='tintuc';
    }

	public function index(){
        $aurl= explode('/',uri_string());
		$catlink=$aurl[0];
		$this->load->library('phantrang');
		$limit=6;
		$current=$this->phantrang->PageCurrent();
		$first=$this->phantrang->PageFirst($limit, $current);
		$total=$this->Mcontent->content_count();
		$a = base_url()."tin-tuc";
		$this->data['strphantrang']=$this->phantrang->PagePer($total, $current, $limit, $url=$a);
        $this->data['list']=$this->Mcontent->content_list_home($limit,$first);
        $this->data['title']='Nhà hàng sân vườn';
		$this->data['view']='index';
		$this->load->view('frontend/components/tintuc/index',$this->data);
	}
	public function detail(){
		$aurl = explode('/', uri_string());
		$link = $aurl[1];
		$row = $this->Mcontent->content_get_detail($link);
		$this->data['row']=$row;
		$this->data['title']=$row['title'];
		$this->data['view']='detail';
		$this->load->view('frontend/components/tintuc/detail',$this->data);
	}
}
