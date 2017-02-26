<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

	public function __construct(){
		parent::__construct();
	}

	public function getCustomers(){
		return $this->db->get('customer')->result();

	}

	public function addCustomer($data){
		$this->db->insert('customer', $data);
		return $this->db->affected_rows();
	}

	public function getCustomer($customerId){
		$this->db->where('id', $customerId);
		return $this->db->get('customer')->row();
	}

	public function updateCustomer($data){
		$this->db->where('id', $data['id']);
		$this->db->update('customer', $data);
		return $this->db->affected_rows();
	}

	public function deleteCustomer($customerId){
		$this->db->where('id', $customerId);
		$this->db->delete('customer');
		return $this->db->affected_rows();
	}

	public function searchCustomers($queryString){
		$this->db->like('name', $queryString);
		$this->db->or_like('email', $queryString);
		return $this->db->get('customer')->result();
		
	}
}