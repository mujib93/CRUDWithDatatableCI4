<?php namespace App\Models;

use CodeIgniter\Model;
use App\Entities\GroupProduct;

class M_GroupProducts extends Model{

    protected $table         = 'product_groups';
    protected $primaryKey    = 'productGroups_id';
    protected $allowedFields = ['productGroups_code', 'productGroups_name', 'productGroups_status', 'productGroups_createdat', 
                                'productGroups_createdby', 'productGroups_updatedat', 'productGroups_updatedby'];
    protected $returnType    = GroupProduct::class;
    protected $useTimestamps = false;

    public function getNumbering(){
        $db = db_connect();
        $builder = $db->table($this->table)
                ->select('productGroups_code')
                ->orderBy('productGroups_id', 'desc')
                ->limit('1')
                ->get();
        
        $result  = $builder->getResult();

        foreach($result as $result){         
            return $result->productGroups_code;
        }
    }

    public function getGroupProduct(){
        $db = db_connect();
        $builder = $db->table($this->table)
        ->select('*')
        ->get();

        return $builder->getResult();
    }

    public function getGroupProductCode($code){
     
        $db = db_connect();
        $builder = $db->table($this->table)
        ->select('productGroups_id, productGroups_code')
        ->where('productGroups_code', $code)
        ->get();
        $result  = $builder->getResult();
        foreach($result as $result){       
            return $result->productGroups_id;
        }
    }

    public function getGroupProductSortA(){
        $db = db_connect();
        $builder = $db->table($this->table)
        ->select('productGroups_id, productGroups_name, productGroups_status')
        ->where('productGroups_status', 'Active')
        ->orderBy('productGroups_name', 'ASC')
        ->get();

        return $builder->getResult();
    }

    public function getGroupProductId($id){
        $db = db_connect();
        $builder = $db->table($this->table)
        ->select('productGroups_id, productGroups_name, productGroups_status')
        ->where('productGroups_id', $id)
        ->get();

        return $builder->getResult();
    }

}