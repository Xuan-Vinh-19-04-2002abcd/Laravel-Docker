<?php
namespace App\Services\Interfaces;

interface IPitchService {
    public function getAllPitchs(): mixed;
    public function getDetailPitch($id): mixed;

    public function searchPitch($textSearch):mixed;
}