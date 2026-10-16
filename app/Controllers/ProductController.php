<?php 

namespace App\Controllers;

use App\Models\Product;

class ProductController {
    

public function index() {
    
        $product = new Product(1, "Mouse", 30, "Periferics");

        $productInfo = $product->getAll();


        require __DIR__."/../views/products_view.php";
    }

}
?>