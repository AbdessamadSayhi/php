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

    public function conversion($country)
    {
        $rate = 1;
        switch ($country) {
            case 'MA':
                $rate = 10.06;
                break;
            case 'USA':
                $rate = 1;
                break;
        }
        return round($rate * $this->rentalPrice, 2);
    }

    public function __get($propertyRequested)
    {
        if ($propertyRequested == 'id')
            return 'You do not have permission to access
        id.<BR>';
        else
            return $this->$propertyRequested;
    }
    public function __set($propertyToModify, $value)
    {
        if (
            $propertyToModify == 'rentalPrice' && $value
            > $this->rentalPrice
        )
            $this->rentalPrice = $value;
        else
            echo 'Failed to modify
        ' . $propertyToModify . '<BR>';
    }
}
