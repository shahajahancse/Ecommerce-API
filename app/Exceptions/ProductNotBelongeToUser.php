<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongeToUser extends Exception
{
    public function render()
    {
    	return ['error' => 'Product not belongs to User'];
    }
}
