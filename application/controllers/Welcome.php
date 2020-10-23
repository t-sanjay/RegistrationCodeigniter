<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this contrult controlleroller is set as the defa in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{     
		$this->load->library('form_validation');
		$this->load->model('Authmodel');
		if($this->Authmodel->authorize() == true){
			redirect(base_url().'index.php/Welcome/dashboard');
		}

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[5]|max_length[16]');

        if($this->form_validation->run())
        {
			$email = $this->input->post('email');
			$user = $this->Authmodel->checkUser($email);
			
			if(!empty($user)){
				$password = $this->input->post('pass');
				if(password_verify($password, $user['pass']) == true){
					$sessArray['id'] = $user['id'];
					$sessArray['fname'] = $user['fname'];
					$sessArray['lname'] = $user['lname'];
					$sessArray['email'] = $user['email'];
					$sessArray['phnum'] = $user['phnum'];
					
					$this->session->set_userdata('user', $sessArray);
					redirect(base_url().'index.php/Welcome/dashboard');
				}else{
					$this->session->set_flashdata('msg1', 'Email or Password is incorrect.');
					redirect(base_url().'index.php/Welcome/index');
				}
			}else{
				$this->session->set_flashdata('msg1', 'Email or Password is incorrect.');
				redirect(base_url().'index.php/Welcome/index');
			}

        }else{
            $this->load->view('welcome_message');
        }
	}
	function dashboard(){

		$this->load->model('Authmodel');
		if($this->Authmodel->authorize() == false){
			$this->session->set_flashdata('msg1', 'You\'ve logged out, please login again.');
			redirect(base_url().'index.php/Welcome/index');
		}
		$user = $this->session->userdata('user');
		$data['user'] = $user;
		$this->load->view('dashboard',$data);
	}
	function logout(){
		$this->session->unset_userdata('user');
		redirect(base_url().'index.php/Welcome/index');
	}
}
