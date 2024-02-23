<?php
class Movie
{
    //Add class members here
    const DISCOUNT = 10;
    private $id;
    public $title;
    public $rentalPrice;

    public function __construct(
        $pId,
        $pTitle,
        $pRentalPrice
    ) {
        $this->id = $pId;
        $this->title = $pTitle;
        $this->rentalPrice = $pRentalPrice;
    }
}
