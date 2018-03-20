<?php

class UserControll extends CI_Controller {

    public function registerUser(){
        $data['title']="Registration";
        $this->form_validation->set_rules('fname', 'First Name', 'trim|required');
        $this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email|is_unique[customer_registration.userName]');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|min_length[8]|max_length[10]');
        $this->form_validation->set_rules('cpwd', 'Password Confirmation', 'trim|matches[pwd]');

        if($this->form_validation->run() == FALSE){
            $this->load->view('pages/registration',$data);
        }else{
            $this->load->model('UserModel');
            $response = $this->UserModel->insertUserdata();

            if($response){
                $link=anchor('login','Login');

                $this->session->set_flashdata('msg','Registered successfully..Please '.$link.'');
                redirect('registration');
            }else{
                $this->session->set_flashdata('msg','Something went wrong');
                redirect('registration');
            }

        }

    }

    public function loginUser(){

        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
        $this->form_validation->set_rules('pwd', 'Password', 'trim|min_length[8]|max_length[10]');

        if($this->form_validation->run() == false){

            $this->load->view('pages/login');
        }else{

            $username = $this->input->post('email');
            $password = sha1($this->input->post('pwd'));

            $this->load->model('UserModel');

           $userInfo['username'] = $username;
           $userInfo['password'] = $password; 

            $response = $this->UserModel->loginUser($userInfo);

            if ($response){
                $user_data = array(
                    'user_id' => $response[0]->regId,
                    'fname' => $response[0]->firstName,
                    'lname' => $response[0]->lastName,
                    'email' => $response[0]->userName,                    
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($user_data);
                

               redirect('home');

            }else{
                $this->session->set_flashdata('errormsg','Invalid email or password');
                redirect('login');
            }

        }

    }

    public function logoutUser(){
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('fname');
        $this->session->unset_userdata('lname');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('logged_in');
        
        redirect('login');
    }
}
?>