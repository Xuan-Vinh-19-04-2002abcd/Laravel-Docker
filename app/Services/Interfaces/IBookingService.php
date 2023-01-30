<?php
namespace App\Services\Interfaces;

interface IBookingService{
    public function createBooking(array $data): array;
    public function getAllBooking(): array;
  
}