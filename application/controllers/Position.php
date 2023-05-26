<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect(base_url().'login');
        }
    }

    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/add-position');
        $this->load->view('admin/footer');
    }

    public function manage_position()
    {
        $data['position']=$this->Position_model->select_position();
        $this->load->view('admin/header');
        $this->load->view('admin/manage-position',$data);
        $this->load->view('admin/footer');
    }

    public function insert()
    {
        $position=$this->input->post('txtposition');
        $data=$this->Position_model->insert_position(array('position_name'=>$position));
        if($data==true)
        {
            $this->session->set_flashdata('success', "New position Added Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, New position Adding Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update()
    {
        $id=$this->input->post('txtid');
        $position=$this->input->post('txtposition');
        $data=$this->Position_model->update_position(array('position_name'=>$position),$id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Position Updated Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Position Update Failed.");
        }
        redirect(base_url()."position/manage_position");
    }


    function edit($id)
    {
        $data['content']=$this->Position_model->select_position_byID($id);
        $this->load->view('admin/header');
        $this->load->view('admin/edit-position',$data);
        $this->load->view('admin/footer');
    }


    function delete($id)
    {
        $data=$this->Position_model->delete_position($id);
        if($this->db->affected_rows() > 0)
        {
            $this->session->set_flashdata('success', "Position Deleted Succesfully"); 
        }else{
            $this->session->set_flashdata('error', "Sorry, Position Delete Failed.");
        }
        redirect($_SERVER['HTTP_REFERER']);
    }



}
