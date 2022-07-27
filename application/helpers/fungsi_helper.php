<?php 

function check_already_login(){
	$CI =& get_instance();
	$user_session = $CI->session->userdata('userid');
	if($user_session){
		redirect('dashboard');
	}
}

function check_not_login(){
	$CI =& get_instance();
	$user_session = $CI->session->userdata('userid');
	if(!$user_session){
		redirect('auth/login');
	}
}

function check_admin(){
	$CI =& get_instance();
	$CI->load->library('fungsi');
	if($CI->fungsi->user_login()->level != 1){
		redirect('dashboard');
	}

}

function indonesia_currency($nominal){
	$result = "Rp. " . number_format($nominal, 2, ', ', '.');
	return $result;
}

function indonesia_date($date){
	$d 	= substr($date,8,2);
	$m 	= substr($date,5,2);
	$y 	= substr($date,0,4);
	return $d.'/'.$m.'/'.$y;
}