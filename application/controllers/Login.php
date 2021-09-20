  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->helper("form");
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function index()
    {
         $this->form_validation->set_rules('username', 'Username','trim|required');
         $this->form_validation->set_rules('password', 'Password','trim|required');

         if($this->form_validation->run() == false){
          
          $this->load->view('login');
         
         }else{

            $this-> _auth();

         }
         
    }

    private function _auth(){

        $userku = $this->input->post('username');
        $passku = $this->input->post('password');
        $levelku = $this->input->post('level');

       

                 if($userku == "admin" && $passku="admin"){
                        redirect('antrian/');
                    }elseif ($userku == "user" && $passku="user"){
                        redirect('antrian/');
                    }else{
                        $this->session->set_flashdata('pesan', 'Username atau Password yang Anda Masukan Salah !!');
                redirect('login/');
                    }

               
    }
    
    
        
    public function logout()
    {
         $this->session->sess_destroy();
         redirect('login/');
    }

}
