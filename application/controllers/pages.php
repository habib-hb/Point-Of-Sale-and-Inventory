<?php
class Pages extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->userdata('log_in')) {
			$this->session->set_flashdata('errorMessage','<div class="alert alert-danger">Login Is Required</div>');
			redirect(base_url('login'));
		}
	}
	public function inventory () {
		$this->load->model('database');
		$data['items'] = $this->database->itemList();
		$data['page'] = 'inventory';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function sales () {
		$data['page'] = 'sales';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('sales_report_nav_view');
		$this->load->view('footer');
	}




	public function new_item() {
		$this->load->model('categories_model');
		$data['category'] = $this->categories_model->getCategoriesName();
		$data['page'] = 'new_item';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function categories() {
		$this->load->model('categories_model');
		$data['categoryList'] = $this->categories_model->getCategories();
		$data['page'] = 'categories';
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('main',$data);
		$this->load->view('footer');
	}

	public function accounts () {
		$data['page'] = 'accounts';
		$this->load->model('accounts_model');
		$data['accountsList'] = $this->accounts_model->display_accounts();
		$this->load->view('header',$data);
		$this->load->view('side_menu');
		$this->load->view('accounts_view',$data);
		$this->load->view('footer');
	}

	// public function dashboard() {
	// 	$data['page'] = 'dashboard';
	// 	$this->load->model('dashboard_model');
    //     $this->load->view('header', $data); // Load header view
	// 	$this->load->view('side_menu');
    //     $this->load->view('dashboard', $data); // Load dashboard view
    //     // $this->load->view('footer'); // Load footer view
    // }

	public function dashboard() {
		$this->load->model('dashboard_model');
		$data['total_items'] = $this->dashboard_model->getTotalItemsCount();
		$data['total_sales'] = $this->dashboard_model->getTotalSalesCount();
		$data['total_categories'] = $this->dashboard_model->getTotalCategoriesCount();
		$data['total_accounts'] = $this->dashboard_model->getTotalAccountsCount();
		$data['page'] = 'dashboard';
		
		$this->load->view('header', $data); // Load header view
		$this->load->view('side_menu');
		$this->load->view('dashboard', $data); // Load dashboard view
		// $this->load->view('footer'); // Load footer view
	}
	

	public function lagout () {
		echo 'lagout';
	}
}

?>
