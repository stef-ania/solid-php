<?php

namespace App;


class Room 
{
    private int $room_number;

    public function __construct(int $room_number)
    {
        $this->room_number = $room_number;
    }

     public function getRoomNumber()
    {
        return $this->room_number;
    }
}