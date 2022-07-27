<?php 

	Class Fungsi {
		protected $CI;
		public function __construct(){
		$this->CI =& get_instance();
	}

	function user_login(){
		$this->CI->load->model('user_m');
		$user_id 	= $this->CI->session->userdata('userid');
		$user_data 	= $this->CI->user_m->get($user_id)->row();
		return $user_data;
	}

	function PdfGenerator($html, $filename, $paper, $orientation){
		$dompdf = new Dompdf\Dompdf();
		$dompdf->loadHtml($html);
		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper($paper, $orientation);
		// Render the HTML as PDF
		$dompdf->render();
		// Output the generated PDF to Browser
		$dompdf->stream($filename, array('Attachment' => 0));
	}

	public function count_item(){
		$this->CI->load->model('item_m');
		return $this->CI->item_m->get()->num_rows();
	}

	public function count_supplier(){
		$this->CI->load->model('supplier_m');
		return $this->CI->supplier_m->get()->num_rows();
	}

	public function count_customer(){
		$this->CI->load->model('customer_m');
		return $this->CI->customer_m->get()->num_rows();
	}

	public function count_user(){
		$this->CI->load->model('user_m');
		return $this->CI->user_m->get()->num_rows();
	}
}