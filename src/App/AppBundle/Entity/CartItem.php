<?php

// src/App/AppBundle/Entity/CartItem.php
namespace App\AppBundle\Entity;

use Sylius\Component\Cart\Model\CartItem as BaseCartItem;

class CartItem extends BaseCartItem
{
    private $product;

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;
    }
}