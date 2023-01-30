<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interfaces\IBookingService;
class BookingController extends Controller
{
    public function __construct(
        private readonly IBookingService $bookingService
    )
    {} 

    public function createBooking(Request $request)
    {
        $data = $request->all();
        $result = $this->bookingService->createBooking((array)$data);
        return response()->json([
            "message" => "Create Successfully"
        ]);
    }

}
