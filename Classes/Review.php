<?php
 

class Review
{
    public $id;
    public $title;
    public $description;
    public $stars;
    public $date;
    public $user_id;
    public $product_id;

    public function __construct()
    {
        settype($this->id, 'integer');
        settype($this->user_id, 'integer');
        settype($this->product_id, 'integer');
    }
}