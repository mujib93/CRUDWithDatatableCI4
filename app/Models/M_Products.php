<?php namespace App\Models;

use CodeIgniter\Model;
use Config\Services;

class M_Products extends Model{

    protected $table         = 'products';
    protected $primaryKey    = 'products_id';
    protected $allowedFields = ['products_name'];
   // protected $returnType    = Bank::class;
    protected $useTimestamps = false;
    protected $column_order  = ['products_id', 'products_code', 'products_name', 'productGroups_name', 'products_status', 
                                'products_best', 'products_updatedat', 'products_updatedby'];
    protected $order         = ['products_id' => 'ASC'];

    public function getDataListproduct(){
        $db = db_connect();
        $request = Services::request();
        //search
        if($request->getPost('search')['value']){
            $search = $request->getPost('search')['value'];
            $where_search = "products_code LIKE '%$search%' OR products_name LIKE '%$search%' OR productGroups_name LIKE '%$search%' OR products_status LIKE '%$search%' OR products_updatedat LIKE '%$search%'";
        }else{
            $where_search = "products_id != ''";
        }
        //oder
        if($request->getPost('order')){
            $result_order = $this->column_order[$request->getPost('order')['0']['column']];
            $result_dir = $request->getPost('order')['0']['dir'];
        }else if($this->order){
            $order = $this->order;
            $result_order = key($order);
            $result_dir = $order[key($order)];
        }
        //query
        if($request->getPost('length') != -1)
        $builder = $db->table($this->table);
        $query = $builder->select('products_id, products_code, products_name, productGroups_name, products_status, products_best, products_updatedat, products_updatedby')
                         ->join('product_groups', 'product_groups.productGroups_id=products.products_groupsId')
                        ->where($where_search)
                        ->orderBy($result_order, $result_dir)
                        ->limit($request->getPost('length'), $request->getPost('start'))
                        ->get();
        return $query->getResult();
    }

    public function countFilter(){
        $db = db_connect();
        return $db->table($this->table)->countAllResults();
    }

    public function countAll(){
        $db = db_connect();
        $tb = $db->table($this->table);
        return $tb->countAllResults();
    }
}