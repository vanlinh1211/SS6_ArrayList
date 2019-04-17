<?php

class myListTest extends MyList
{
    public function setMyList($capacity)
    {
        $this->count = $capacity;
    }

    public function getMyList()
    {
        return $this->array;
    }

    public function add($index, $item)
    {
        array_push($this->array, $item);
    }

    public function remove($index)
    {
        unset($this->array[$index]);
    }

    public function clearList(){
        $this->array = [];
    }
}
