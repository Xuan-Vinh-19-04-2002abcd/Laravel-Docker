<?php

namespace App\Repositories\Implementations;

use App\Models\Booking;

class BookingRepository extends BaseRepository implements \App\Repositories\Interfaces\IBookingRepository
{

    public function getModel(): string
    {
        return Booking::class;
    }
}