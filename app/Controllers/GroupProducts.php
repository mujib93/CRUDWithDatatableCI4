<?php

namespace App\Controllers;

use App\Entities\GroupProduct;
use App\Models\M_GroupProducts;

class GroupProducts extends BaseController
{
    public function __construct()
    {
        $this->db           =  \Config\Database::connect();
        $this->gpproduct      = new M_GroupProducts();
        $this->validation   = \Config\Services::validation();

    }
    public function formAddgroupProduct(){
        $groupProduct = $this->gpproduct->getGroupProduct(); 
        $data = [
            'title' => 'List Product Category',
            'groupProduct' => $groupProduct,
            'validation' => $this->validation
        ];
        return view('admin/vgroupproduct', $data);
    }

    public function addgroupProduct()
    {
        $data     = $this->request->getPost();
        $validate = $this->validation->run($data, 'groupProductval');
        if(!$validate){
            return redirect()->back()->withInput();
        }
        $insert = new GroupProduct();
        $insert->fill($data);
        $insert->gpproductcreate();
        $insert->numbering();

        if(!$this->gpproduct->save($insert)){
            return redirect()->to('/AdminWeb/FormAddGroupProducts')->with('errupdategroup','Fail to insert new product category');
        }
        return redirect()->to('/AdminWeb/FormAddGroupProducts')->with('successinsertgroup', 'New product category success insert');
    }

    public function editgroupProduct()
    {
        $data     = $this->request->getPost();
        $validate = $this->validation->run($data, 'groupProductval');
        if(!$validate){
            return redirect()->back()->withInput();
        }
        $id =  $this->gpproduct->getGroupProductCode($data['productGroups_code']);
        $insert = new GroupProduct();
        $insert->fill($data);
        $insert->productGroups_id = $id;
        $insert->gpproductUpdate();

        if(!$this->gpproduct->save($insert)){
            return redirect()->back()->with('errupdategroup','Fail to insert new product category');
        }
        return redirect()->to('/AdminWeb/FormAddGroupProducts')->with('successinsertgroup', 'New product category success insert');
    }

    public function delgroupProduct($id){
        $this->gpproduct->delete($id);   
        return redirect()->to('/AdminWeb/FormAddGroupProducts')->with('delsuccess', 'Product category has been deleted');
       }
    
}