<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UserController extends Controller {

    public function __construct(){
        parent::__construct();
        $this->call->model('User_model');
        $this->call->library('Lauth');
    }

    public function index() {
        //
    }

    
    public function register(){
        if($this->form_validation->submitted())
        {
            $this->form_validation
                ->name('username')->required()
                ->min_length(5)
                ->max_length(15)
                ->name('password')->required()
                ->name('email')->required()
                ->valid_email();

            if ($this->form_validation->run()) {
                // Generate email token
                $email_token = md5(uniqid(rand(), true)); // Example token generation

                // Register using Lauth class
                $registration_success = $this->Lauth->register(
                    $this->io->post('username'),
                    $this->io->post('email'),
                    $this->io->post('password'),
                    $email_token
                );

                if ($registration_success) {
                    // Handle successful registration, e.g., sending verification email
                } else {
                    echo "Registration failed.";
                }

            } else {
                echo $this->form_validation->errors();
            }
        }


        $this->call->view('register');
    }


    public function signin(){
        $this->call->view('signin');
    }






	public function dashboard(){
        $this->call->view('admin/dashboard');
    }
    public function attendance(){
        $this->call->view('admin/attendance');
    }
    public function fines(){
        $this->call->view('admin/fines');
    }
    public function usg(){
        $this->call->view('admin/usg');
    }
    public function department(){
        $this->call->view('admin/department');
    }
    public function student(){
        $this->call->view('admin/student');
    }
    public function officer(){
        $this->call->view('admin/officer');
    }
    public function interface(){
        $this->call->view('user/interface');
    }
    public function checker(){
        $this->call->view('admin/checker');
    }
    
    public function css(){
        $this->call->view('admin/departments/css');
    }
    public function cas(){
        $this->call->view('admin/departments/cas');
    }
    public function cte(){
        $this->call->view('admin/departments/cte');
    }
    public function ccje(){
        $this->call->view('admin/departments/ccje');
    }
    public function cbm(){
        $this->call->view('admin/departments/cbm');
    }
    public function btvtedled(){
        $this->call->view('admin/departments/btvtedled');
    }
}
?>
