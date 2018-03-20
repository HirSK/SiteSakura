<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 3/20/2018
 * Time: 5:06 PM
 */

class Customer_Model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }
    public function lord_customers(){
        $query = $this->db->get('customer_registration');
        return $query;
    }
}