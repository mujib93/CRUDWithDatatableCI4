<?php namespace App\Entities;

use App\Models\M_GroupProducts;
use CodeIgniter\Entity\Entity;

class GroupProduct extends Entity{

    public function gpproductcreate(){

        $this->attributes['productGroups_createdat'] = date('Y-m-d H:i:s');
        $this->attributes['productGroups_createdby'] = 'admin';
        $this->attributes['productGroups_updatedat'] = date('Y-m-d H:i:s');
        $this->attributes['productGroups_updatedby'] = 'admin';

        return $this;
    }

    public function gpproductUpdate(){

        $this->attributes ['productGroups_updatedat'] = date('Y-m-d H:i:s');
        $this->attributes ['productGroups_updatedby'] = 'admin';

        return $this;
    }
    
    public function numbering(){
        $numb     = new M_GroupProducts();
        $getNumb  = $numb->getNumbering();
        $codeDate  = substr($getNumb, 0 , 7); 
        if($codeDate != 'CAT'.date('ym') OR empty($getNumb)){
            $lastnumb = 'CAT'.date('ym').'0000';
        }
        else{
            $lastnumb = $getNumb;
        }

        $this->attributes['productGroups_code'] = $this->generateNumb($lastnumb, 7, 4);

        return $this;
    }

    public function generateNumb($lastcode, $lengthcode, $lengthnumb){

        $code      = substr($lastcode, 0, $lengthcode);
        $numb      = substr($lastcode, $lengthcode, $lengthnumb);
        $incrnumb  = str_repeat("0", $lengthnumb - strlen($numb+1)).($numb+1);  
        $numbering = $code.$incrnumb;

        return $numbering;

    }
}