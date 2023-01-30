<?php
namespace App\Services\Implementations;

use App\Repositories\Interfaces\IBookingRepository;
use App\Services\Interfaces\IBookingService;

class BookingService implements IBookingService {
    public function __construct(
        private readonly IBookingRepository $bookingRepository
    )
    {}

    public function createBooking(array $data): array
    {

        $abc = $this->bookingRepository->create($data);


        return [];
    }
    public function getAllBooking(): array
    {
        return $this->bookingRepository->all($toArray = true);
    }
        
}