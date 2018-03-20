<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 3/20/2018
 * Time: 5:05 PM
 */

class CustomerController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Customer_Model');
    }
//    getting customers
    public function viewCustomers(){
        $this->load->model('Customer_Model');

        $data["fetch_data"] = $this->Customer_Model->lord_customers();
        $this->load->view('admin/viewCustomers',$data);
    }
}