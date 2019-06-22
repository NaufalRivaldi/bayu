<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model { 
    public $nama;
    public $username;
    public $password;

    public function rules(){
        return [
            [
                'field' => 'username', 
                'label' => 'username',
                'rules' => 'required'
            ], 

            [
                'field' => 'password', 
                'label' => 'password',
                'rules' => 'required'
            ]
        ];
    }

    public function showData(){
        return $this->db->get('tb_user')->result();
    }

    public function delete($id){
        return $this->db->where('id_user', $id)->delete('tb_user');
    }

    // login
    public function login(){
        $post=$this->input->post();
        $username=$post['username'];
        $password=sha1($post['password']);
        $data=$this->db->where('username',$username)->where('password',$password)->get('tb_user')->row();
        if(!empty($data)){
            $array=array(
                "nama"=>$data->nama,
                "login"=>"oke"
            );
            $this->session->set_userdata($array);
            echo "bisa login";
        }

        else{
            redirect('home');
        }
    }

    public function cekLogin(){
        if(empty($this->session->userdata('login')) && $this->session->userdata('login') != 'ok'){
            redirect('home');
        }
    }
}
