<?php

    class Home extends Controller {
        public function index(){
            $members =$this->model('Members');
            $data['members'] = $members->get_members();
            $data['member'] = $members->get_member(2);
           $this->view('home/index',$data);
        }   
    }