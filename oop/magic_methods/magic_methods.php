<?php
class Invoice
{
    public function __construct(public int $id, public float $amount)
    {
    }

    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        } else {
            throw new Exception("Property $name does not exist");
        }
    }
}
