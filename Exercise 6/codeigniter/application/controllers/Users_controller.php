<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Users_controller extends CI_Controller {
function __construct()
{
parent::__construct();
#$this->load->helper('url');
$this->load->model('Users_Model');
}
public function index(){
	$data['user_list'] = $this->Users_Model->get_all_users();
	$this->load->view('Users_view',$data);
	
}
public function add_form()
{
$this->load->view('Users_add');
}
public function insert_users_db()
{
	$udata['user_id'] = $this->input->post('user_id');
	$udata['complete_name'] = $this->input->post('complete_name');
	$udata['nick'] = $this->input->post('nick');
	$udata['eadd'] = $this->input->post('eadd');
	$udata['address'] = $this->input->post('address');
	$udata['sex'] = $this->input->post('sex');
	$udata['no'] = $this->input->post('no');
	$res = $this->Users_Model->insert_users_to_db($udata);
if($res){
header('location:'.base_url()."index.php/Users_controller/");
}
}
public function Users_edit(){
$user_id = $this->uri->segment(3);
 $data['users'] = $this->Users_Model->getById($user_id);
$this->load->view('Users_edit', $data);
}
public function update()
{
	$mdata['user_id'] = $this->input->post('user_id');
	$mdata['complete_name'] = $this->input->post('complete_name');
	$mdata['nick'] = $this->input->post('nick');
	$mdata['eadd'] = $this->input->post('eadd');
	$mdata['address'] = $this->input->post('address');
	$mdata['sex'] = $this->input->post('sex');
	$mdata['no'] = $this->input->post('no');
$res=$this->Users_Model->update_info($mdata, $_POST['user_id']);
if($res){
header('location:'.base_url()."index.php/Users_controller/");
}
}
public function delete($user_id)
{
$this->Users_Model->delete_a_user($user_id);
$this->index();
}
}