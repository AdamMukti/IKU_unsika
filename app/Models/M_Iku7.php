<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class M_iku7 extends Model
{
    protected $table = 'iku_7';
    public $db;
    public $builder;

    public function get_iku3_a($id = false)
    {
        if($id === false){
            return $this->table('iku_7')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('iku_7')
                        ->where('id', $id)
                        ->get()
                        ->getRowArray();
        }  
    }

    public function save_iku3_a($data)
    {
        $query = $this->db->table('iku_7')->insert($data);
        return $query;
    }

    public function update_iku3_a($data, $id)
    {
        $query = $this->db->table('iku_7')->update($data, array('id' => $id));
        return $query;
    }

    public function delete_iku3_a($id)
    {
        $query = $this->db->table('iku_7')->delete(array('id' => $id));
        return $query;
    }
}