<?php
class Emporium{
    public $name;
    public $address;
    protected $category;
    public $genre;
    public $year;

    // Obbligatori
    public function __construct($_name, $_address) {
        $this->name = $_name;
        $this->address = $_address;
    }

    // getter
    public function getCategory() {
        return $this->category;
    }

    // setter
    public function setCategory($newCategory){
        $this->category = $newCategory;
    }
    
}

?>