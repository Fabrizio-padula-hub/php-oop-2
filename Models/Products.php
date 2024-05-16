<?php
require_once __DIR__ . '/Emporium.php';
require_once __DIR__ . '/../Traits/Discount.php';

class Products extends Emporium{
    use DiscountTrait;
    public $type;
    public $price;

    public function __construct($_name, $_address, $_price) {
        parent::__construct($_name, $_address);
        $this->price = $_price;
    }
    

}
?>