<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_model extends CI_Model {


    function insert_staff($data){
        $this->db->insert("staff_tbl",$data);
        return $this->db->insert_id();
    }
    function insert_staff_exp($data){
        $this->db->insert("workexp_tbl",$data);
        return $this->db->insert_id();
    }
    function insert_staff_educ($data){
        $this->db->insert("educational_bg",$data);
        return $this->db->insert_id();
    }
    function insert_staff_proj($data){
        $this->db->insert("project_tbl",$data);
        return $this->db->insert_id();
    }
    function select_staff(){
        $this->db->order_by('staff_tbl.id','DESC');
        $this->db->select("staff_tbl.*,department_tbl.department_name, position_tbl.position_name");
        $this->db->from("staff_tbl");
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $this->db->join("position_tbl",'position_tbl.id=staff_tbl.position');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_staff_byID($id)
    {
        $this->db->where('staff_tbl.id',$id);
        $this->db->select("staff_tbl.*,department_tbl.department_name");
        $this->db->from("staff_tbl");
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        // $this->db->join("workexp_tbl",'workexp_tbl.exp_id=staff_tbl.id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    function select_workexp_byID($id)
    {
        $this->db->where('staff_tbl.id',$id);
        $this->db->select("workexp_tbl.*,staff_tbl.id, workexp_tbl.id");
        $this->db->from("workexp_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=workexp_tbl.exp_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    function select_project_byID($id)
    {
        $this->db->where('staff_tbl.id',$id);
        $this->db->select("project_tbl.*,staff_tbl.id, project_tbl.id");
        $this->db->from("project_tbl");
        $this->db->join("staff_tbl",'staff_tbl.id=project_tbl.project_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    function select_educ_byID($id)
    {
        $this->db->where('staff_tbl.id',$id);
        $this->db->select("educational_bg.*,staff_tbl.id");
        $this->db->from("educational_bg");
        $this->db->join("staff_tbl",'staff_tbl.id=educational_bg.staff_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    

    function select_staff_byEmail($email)
    {

        $this->db->where('email',$email);
        $qry=$this->db->get('staff_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_staff_byDept($dpt)
    {
        $this->db->where('staff_tbl.department_id',$dpt);
        $this->db->select("staff_tbl.*,department_tbl.department_name");
        $this->db->from("staff_tbl");
        $this->db->join("department_tbl",'department_tbl.id=staff_tbl.department_id');
        $qry=$this->db->get();
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_all_staff($tbl, $tblid, $id)
    {
        for($i=0; $i < count($tbl); $i++){
            $this->db->where($tblid[$i], $id);
            $this->db->delete($tbl[$i]);
            $this->db->affected_rows();
        }
        
    }

    function delete_staff($id)
    {
        $this->del_all_staff('id', 'staff_tbl',  $id);
        $this->del_all_staff('id', 'login_tbl',  $id);
        $this->del_all_staff('id', 'workexp_tbl',  $id);
        $this->del_all_staff('id', 'project_tbl',  $id);
        $this->del_all_staff('staff_id', 'educational_bg',  $id);
    }
    function del_all_staff($table_id,$table_name,$id)
    {
            $this->db->where($table_id, $id);
            $this->db->delete($table_name);
            $this->db->affected_rows();
        
    }

    function update_all_staff($data, $table_name, $table_id, $id){
        $this->db->where($table_id, $id);
        $this->db->update($table_name, $data);
        $this->db->affected_rows();
    }
    function update_exp_staff($data, $id){
        $this->db->where('id', $id);
        $this->db->update('workexp_tbl', $data);
        $this->db->affected_rows();
    }
    function update_proj_staff($data, $id){
        $this->db->where('id', $id);
        $this->db->update('project_tbl', $data);
        $this->db->affected_rows();
    }
    function update_staff($personal, $educ, $id){
        $this->update_all_staff($personal,'staff_tbl', 'id',  $id);
        // $this->update_all_staff('workexp_tbl', 'exp_id', $exp, $id);
        $this->update_all_staff($educ,'educational_bg', 'staff_id', $id);
        // $this->update_all_staff('project_tbl', 'project_id', $project, $id);
        $this->db->affected_rows();
    }
}