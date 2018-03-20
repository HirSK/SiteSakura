<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 3/20/2018
 * Time: 5:30 PM
 */

class OrderController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('Order_Model');
    }

    public function ordersTodeliver(){
        $this->load->model('Order_Model');

        echo $this->Order_Model->getCount();
    }

}