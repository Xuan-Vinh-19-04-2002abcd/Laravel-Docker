<?php
namespace App\Services\Interfaces;

interface IBookingService{
    public function createBooking(array $data):mixed;
    public function getAllBooking():mixed;

    public function searchBooking($textsearch): mixed;
  
}