<?php

namespace App\Controllers;

use App\Models\M_GroupProducts;
use App\Models\M_Products;

class Header extends BaseController
{
    public function submenuProducts()
    {
        $dbproduct = new M_GroupProducts();
        $groupProduct = $dbproduct->getGroupProductSortA();

        return $groupProduct;
    }
}
