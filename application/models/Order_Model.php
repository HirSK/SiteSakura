<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 3/20/2018
 * Time: 5:31 PM
 */

class Order_Model extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }
//count the number of orders to deliver
    public function getCount(){

        $this->db->select("COUNT(*)as num_row");
        $this->db->order_by('id');
        $query = $this->db->get_where('order_details', array('isDelivered' => 0));
        $result = $query->result();
        return $result[0]->num_row;

    }

}