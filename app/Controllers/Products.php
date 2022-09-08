<?php

namespace App\Controllers;

use App\Models\M_Products;

class Products extends BaseController
{
    public function __construct()
    {
        $this->db           =  \Config\Database::connect();
        $this->product      = new M_Products();
        $this->validation   = \Config\Services::validation();
    }

    public function listProduct(){
        $data = [
            'title' => 'List Products',
            'validation' => $this->validation
        ];
        return view('admin/vlistproducts', $data);
    }

    public function listProductCon(){
        $listproduct = $this->product->getDataListproduct();
        $data = array();
        $no = $this->request->getPost('start');

        foreach($listproduct as $list){
            $no++;
            $row    = [];
            $view   = "<a href=\"\" class=\"btn btn-xs yellow margin-bottom\"> view <i class=\"fa fa-search\"></i></a>";
            $del    = "<a href=\"\" class=\"btn btn-xs red\"> delete <i class=\"fa fa-times\"></i></a>";
            $edit   = "<a href=\"\" class=\"btn btn-xs blue margin-bottom\"> edit <i class=\"fa fa-edit\"></i></a>";

            $row[]  = $no;
            $row[]  = $list->products_code;
            $row[]  = $list->products_name;
            $row[]  = $list->productGroups_name;
            $row[]  = $list->products_status;
            $row[]  = $list->products_best;
            $row[]  = $list->products_updatedat;
            $row[]  = $list->products_updatedby;
            $row[]  = $view." ".$edit." ".$del;
            $data[] = $row;
        }
        $output = [
            'draw'              => $this->request->getPost('draw'),
            'recordsTotal'      => $this->product->countAll(),
            'recordsFiltered'   => $this->product->countFilter(),
            'data'              => $data
        ];

        return json_encode($output);
    }

    public function detailProduct(){
       // $products = $this->product->getDetailProduct($id);
        // if(empty($products))
        // return redirect()->to('');
        $data = [
            'title' => 'Product detail',
        ];

        return view('admin/vdetailproduct', $data);
    }
}