<?php
/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 02.12.2016
 * Time: 14:29
 */

namespace app\models;

use app\models\Product;


class Wish
{

    private $_wish;
    
    public function add($product){
        
        $this->_wish[$product->id]['quantity']++;
        $this->_wish[$product->id]['product'] = $product;
        $this->_wish['quantity']++;

        return $this->_wish['quantity'];
    }
    
    public function clear(){
        $this->_wish = [];
    }
}