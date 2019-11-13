<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {
        if($this->admin->logged_id())
        {
            $this->load->view("template/template");
            $this->load->view("vhome");         

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function report()
    {
        if($this->admin->logged_id())
        {
            $this->load->view('template/template');
            $this->load->view('vreport');    

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }

        public function master()
    {
        if($this->admin->logged_id())
        {
            $this->load->view('template/template');
            $this->load->view('vmaster');

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }
        public function home($id)
    {
        if($this->admin->logged_id())
        {
            if(is_null($id) || $id == ""){
                $data['id_kain'] = '';
            }else{
                $data['id_kain'] = $id;
                $this->load->view('template/template');
                $this->load->view('vhome',$data); 
            }   

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }
    public function view_data($id)
    {
        if($this->admin->logged_id())
        {
            if(is_null($id) || $id == ""){
                $data['id_kain'] = '';
            }else{
                $data['id_kain'] = $id;
                $this->load->view('template/template');
                $this->load->view('vhome2',$data); 
            }   

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }

    public function addkain()
    {
        if($this->admin->logged_id())
        {
            $this->load->view('template/template');
            $this->load->view('vkain');    

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }
    public function data_hpp()
    {
        if($this->admin->logged_id())
        {
            $this->load->view('template/template');
            $this->load->view('v_data');    

        }else{

            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("login");
        }
    }
}