<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Position_model extends CI_Model {


    function insert_position($data)
    {
        $this->db->insert("position_tbl",$data);
        return $this->db->insert_id();
    }

    function select_positions()
    {
        $qry=$this->db->get('position_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }
    function select_position()
    {
        $qry=$this->db->get('position_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function select_position_byID($id)
    {

        $this->db->where('id',$id);
        $qry=$this->db->get('position_tbl');
        if($qry->num_rows()>0)
        {
            $result=$qry->result_array();
            return $result;
        }
    }

    function delete_position($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("position_tbl");
        $this->db->affected_rows();
    }

    

    function update_position($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('position_tbl',$data);
        $this->db->affected_rows();
    }

}
