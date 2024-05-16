<?php
trait DiscountTrait {
    public function calculateDiscount($discountPercentage) {
        return $this->price - ($this->price * $discountPercentage / 100);
    }
}
?>