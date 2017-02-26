<?php


class Model extends CI_Model {
    
    function simpan_data($data, $table){
        $this->db->insert($table,$data);
        return true;
    }
    
    function list_data($table, $limit, $start){
         return $query = $this->db->get($table, $limit, $start)->result();  
    }

    function list_data_all($table){
         return $query = $this->db->get($table);  
    }
    
    function hitung($param_id, $id, $table){
        return $this->db->get_where($table, array($param_id => $id))->num_rows();
    }
    
    function hapus($param_id, $id, $table){
        $this->db->delete($table, array($param_id => $id)); 
        return true;
    }
    
    function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }
    
    function update($param_id, $id, $table, $data){       
        $this->db->where($param_id, $id);
        $this->db->update($table, $data); 
        return true;
    }

    function autocomplete($table, $param_table, $id){
        //$this->db->order_by('id', 'DESC');
        $this->db->like($param_table, $id);
        $this->db->limit(5);
        return $this->db->get($table);
    }
	
	public function getProfile($nim)
	{	
		return $data = $this->db->select("*")
							->from("data_alumni")
							->join("data_alamat","data_alamat.nim = data_alumni.nim")
							->where("data_alumni.nim",$nim)
							->get();
	
	}
	
	public function getStatus($nim)
	{	
		return $data = $this->db->select("status")
							->from("data_alumni")
							->where("nim",$nim)
							->get();
	}
    
}