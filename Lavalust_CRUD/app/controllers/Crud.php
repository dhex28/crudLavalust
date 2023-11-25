<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Crud extends Controller
{
    public function display()
    {
        $this->call->view('products/home');
    }
    public function __construct()
    {
        parent::__construct();
        $this->call->model('Crud_model');
    }
    public function add()
    {
        $name = $this->io->post('name');
        $email = $this->io->post('email');
        $course = $this->io->post('course');
        $age = $this->io->post('age');
        $this->Crud_model->add($name, $email, $course, $age );
        redirect('/home');
    }
    public function read(){
        $data = $this->Crud_model->read();
        $this->call->view('products/table', $data);
    }
    public function delete($id){
        if($this->Crud_model->delete($id))
        redirect('/home');
    }
    public function edit($id){
        $data = $this->user->student_data($id);
        $this->call->view('products/edit', $data);
    }
    
}