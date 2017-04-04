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
	
	public function getProfileMhs($nim)
	{	
		return $data = $this->db->select("*")
							->from("mahasiswa")
							->join("data_alamat","mahasiswa.nim = data_alamat.nim")
							->where("mahasiswa.nim",$nim)
							->get();
	
	}
	
	public function getProdiAll()
	{	
		return $data = $this->db->select("nama")
							->from("prodi")
							->get();
	
	}
	
	public function getNamaMhs($email)
	{	
		return $data = $this->db->select("username")
							->from("mahasiswa")
							->where("email",$email)
							->get();
	
	}
	
	public function getNamaAdm($email)
	{	
		return $data = $this->db->select("username")
							->from("admin")
							->where("email",$email)
							->get();
	
	}
	
	public function getNim($email)
	{	
		return $data = $this->db->select("nim")
							->from("mahasiswa")
							->where("email",$email)
							->get();
	
	}
	
	public function getIdProdi($prodi)
	{	
		return $data = $this->db->select("id")
							->from("prodi")
							->where("nama",$prodi)
							->get();
	
	}
	
	public function getCounter($id_prodi)
	{	
		return $data = $this->db->select("counter")
							->from("lowongan_counter")
							->where("prodi",$id_prodi)
							->get();
	
	}

	
	public function getStatusAdm($email)
	{	
		return $data = $this->db->select("status")
							->from("admin")
							->where("email",$email)
							->get();
	}
    
}