<?php

namespace App\Repositories\Interfaces;

interface IBookingRepository extends IRepository
{
    public function searchBooking($textSearch): mixed;

    public function getInfoBooking($idPitch): mixed;


    public function getAllBooking(): mixed;
}