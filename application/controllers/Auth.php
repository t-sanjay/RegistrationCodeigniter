<?php 

class Auth extends CI_Controller{
    public function register(){
        $this->load->library('form_validation');
        $this->load->model('Authmodel');
        if($this->Authmodel->authorize() == true){
			redirect(base_url().'index.php/Welcome/dashboard');
		}

        $this->form_validation->set_message('is_unique', 'Email addresss already exists, please use another email address.');
        $this->form_validation->set_message('exact_length','Phone number must be of 10 digits.');

        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('phnum', 'Phone Number', 'required|exact_length[10]');
        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[5]|max_length[16]');

        if($this->form_validation->run() === false)
        {
            //reload view
            $this->load->view('register');
        }else
        {
            // to save user data to db
            $this->load->model('Authmodel');
            $formArray = Array();
            $formArray['fname'] = $this->input->post('fname');
            $formArray['lname'] = $this->input->post('lname');
            $formArray['email'] = $this->input->post('email');
            $formArray['phnum'] = $this->input->post('phnum');
            $formArray['pass'] = password_hash($this->input->post('pass'), PASSWORD_BCRYPT);
            $formArray['created_at'] = date('Y-m-d H:i:s');
            $this->Authmodel->create($formArray);
            
            $this->session->set_flashdata('msg', 'Your account has been created successfully. Please  login to continue');
            redirect(base_url().'');
        }
    }
}