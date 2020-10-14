<?php

require_once 'Vehicle.php';

class Truke extends Vehicle
{
    /**
     * @var integer
     */
    private $storage;
    /**
     * @var integer
     */
    private $loading = 0;

    public function __construct(string $color, int $nbSeats, $storage)
    {
        parent::__construct($color, $nbSeats);
        $this->storage = $storage;

    }
    public function isFull(){
        if($this->loading < $this->storage){
            return 'in filling';
        }else{
            return 'full';
        }

    }
    public function getStorage(){
        return $this->storage;
    }
    public function setStorage($storage){
        $this->storage = $storage;
    }
    public function getLoading(){
        return $this->loading;
    }
    public function setLoading($loading){
        $this->loading = $loading;
    }
}