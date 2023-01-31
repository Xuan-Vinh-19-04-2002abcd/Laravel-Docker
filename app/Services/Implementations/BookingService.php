<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IBookingRepository;
use App\Services\Interfaces\IBookingService;

class BookingService implements IBookingService {
    public function __construct(
        private readonly IBookingRepository $bookingRepository
    )
    {}

    public function createBooking(array $data): mixed
    {

        $abc = $this->bookingRepository->create($data);


        return $this->bookingRepository->getInfoBooking($data['pitch_id']);
    }
    public function getAllBooking(): mixed
    {
        return $this->bookingRepository->getAllBooking();


    }
    public function searchBooking($textsearch):mixed
    {
        return $this->bookingRepository->searchBooking($textsearch);
    }
}