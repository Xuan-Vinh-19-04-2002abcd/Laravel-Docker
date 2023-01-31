<?php

namespace App\Repositories\Implementations;

use App\Models\Booking;
use App\Models\Pitch;
use Illuminate\Support\Facades\DB;
class BookingRepository extends BaseRepository implements \App\Repositories\Interfaces\IBookingRepository
{

    public function getModel(): string
    {
        return Booking::class;
    }
    public function searchBooking($textSearch): mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','pitchs.namepitch','bookings.time_start','bookings.time_end','bookings.day','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->Where("pitchs.namepitch", "LIKE","%$textSearch")
        ->orWhere("pitchs.address", "LIKE","%$textSearch%")
        ->get();
        
    }
    public function getInfoBooking($idPitch):mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','pitchs.namepitch','bookings.time_start','bookings.time_end','bookings.day','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->Where("bookings.pitch_id",$idPitch)
        ->get();
    }

    public function getAllBooking():mixed
    {
        return  DB::table('bookings')
        ->select('bookings.id','pitchs.namepitch','bookings.time_start','bookings.time_end','bookings.day','bookings.contact','bookings.description')
        ->join('pitchs','pitchs.id','=','bookings.pitch_id')
        ->get();       
    }
}