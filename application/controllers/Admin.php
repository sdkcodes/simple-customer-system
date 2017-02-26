<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index(){
		$this->load->view('index'); 
	}

	public function viewCustomers(){
		$data['customers'] = $this->admin_model->getCustomers();
		$this->load->view('view_customers', $data);
	}

	public function search(){
		$searchString = $this->input->get_post("query");
		$data['customers'] = $this->admin_model->searchCustomers($searchString);
		$this->load->view('view_customers', $data);
	}

	public function addCustomer(){
		$this->form_validation->set_rules('name', "Name", "required|trim");
		$this->form_validation->set_rules('email', "Email", "required|trim");
		$this->form_validation->set_rules('phone', "Phone", "required|trim");

		if ($this->form_validation->run() === FALSE){
			$this->load->view('add_customer');
		}
		else{
			$customer = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'customerType' => $this->input->post('type'),
				'street' => $this->input->post('street'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'country' => $this->input->post('country'));
			if ($this->admin_model->addCustomer($customer)){
				$this->session->set_flashdata('message', 'Customer added');

				$this->session->set_flashdata('alert-type', 'success');
				redirect(site_url('admin/viewCustomers'));
			}
			else{
				$this->session->set_flashdata('message', 'Unable to add Customer, Please try again');
				$this->session->set_flashdata('alert-type', 'danger');
				redirect(site_url('admin'));
			}
		}
	}

	public function editCustomer($customerId=NULL){
		if (!is_null($customerId)){
			$data['customer'] = $this->admin_model->getCustomer($customerId);
			$this->form_validation->set_rules('name', "Name", "required|trim");
			$this->form_validation->set_rules('email', "Email", "required|trim");
			$this->form_validation->set_rules('phone', "Phone", "required|trim");

			if ($this->form_validation->run() === FALSE){
				$this->load->view('edit_customer', $data);
			}
			else{
				$customer = array(
					'id' => $customerId,
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'customerType' => $this->input->post('type'),
				'street' => $this->input->post('street'),
				'city' => $this->input->post('city'),
				'state' => $this->input->post('state'),
				'country' => $this->input->post('country'));
			if ($this->admin_model->updateCustomer($customer)){
				$this->session->set_flashdata('message', 'Customer info has been updated');
				$this->session->set_flashdata('alert-type', 'success');
				redirect(site_url('admin/viewCustomers'));
				
			}
			else{
				$this->session->set_flashdata('message', 'Unable to update Customer info, Please try again');
				$this->session->set_flashdata('alert-type', 'danger');
				redirect(site_url('admin/viewCustomers'));
			}
			}
		}
	}
	

	public function deleteCustomer($customerId = NULL){
		if (!is_null($customerId)){
			if ($this->admin_model->deleteCustomer($customerId)){
				$this->session->set_flashdata('message', 'Unable to add Customer, Please try again');
				$this->session->set_flashdata('alert-type', 'danger');
				redirect(site_url('admin/viewCustomers'));
			}
		}
	}
}