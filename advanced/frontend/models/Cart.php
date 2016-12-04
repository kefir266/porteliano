<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 02.12.2016
 * Time: 14:29
 */

namespace app\models;

use app\models\Product;


class Cart
{

    private $_cart;

    public function __construct()
    {
        $this->_cart['quantity'] = 0;
    }


    public function add($product){
        
        $this->_cart[$product->id]['quantity']++;
        $this->_cart[$product->id]['product'] = $product;
        $this->_cart['quantity']++;
        return $this->_cart['quantity'];
    }
    
    public function clear(){
        $this->_cart = [];
        $this->_cart['quantity'] = 0;
    }

    public function getQuantity(){
        return $this->_cart['quantity'];
    }

    public function get(){

        return $this->_cart;
    }
}