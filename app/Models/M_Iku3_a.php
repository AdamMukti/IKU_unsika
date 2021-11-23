<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku3_a extends Model
{
    protected $table = 'iku_3_a';
    public $db;
    public $builder;

    public function get_iku3_a($id = false)
    {
        if($id === false){
            return $this->table('iku_3_a')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_3_a')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku3_a($data)
    {
        $query = $this->db->table('iku_3_a')->insert($data);
        return $query;
    }

    public function update_iku3_a($data, $id)
    {
        $query = $this->db->table('iku_3_a')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku3_a($id)
    {
        $query = $this->db->table('iku_3_a')->delete(array('id' => $id));
        return $query;
    }
}