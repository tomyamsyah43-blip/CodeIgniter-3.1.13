<?php
class Kategori_model extends CI_Model {

    public function get_all(){
        return $this->db->get('kategori')->result();
    }

    public function insert($data){
        $this->db->insert('kategori', $data);
    }

    public function delete($id){
        $this->db->delete('kategori',['id'=>$id]);
    }

    public function get_by_id($id){
        return $this->db->get_where('kategori',['id'=>$id])->row();
    }

    public function update($id, $data){
        $this->db->update('kategori',$data,['id'=>$id]);
    }
}