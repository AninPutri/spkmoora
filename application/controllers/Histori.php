<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Histori extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url', 'form');
            $this->load->model('M_log');
           $this->load->model('user_model');
        }

        public function index()
        {
            
            $user = $this->user_model->get_user();
            $riwayat = $this->M_log->histori_admin();
            $data = [
                'user' => $user,
                'riwayat'=>$riwayat
            ];
            $this->load->view('partials/header');
            $this->load->view('histori_admin', $data);
            $this->load->view('partials/footer');
            
        }
        public function histori_user()
        {
            
            $user = $this->user_model->get_user();
            $riwayat = $this->M_log->histori_admin();
            $data = [
                'user' => $user,
                'riwayat'=>$riwayat
            ];
            $this->load->view('partials/headermember');
            $this->load->view('histori_admin', $data);
            $this->load->view('partials/footer');
            
        }
        // public function riwayat_user()
        // {
        //     $id_user = $this->session->userdata('id_user');
        //     $data['riwayat'] = $this->User_model->getRiwayat($id_user);
        //     $this->load->view('sippko/historiorder', $data);
        // }

    }
    
    /* End of file .php */
