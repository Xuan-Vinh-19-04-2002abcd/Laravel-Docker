<?php

namespace App\Repositories\Interfaces;

interface IPitchRepository extends IRepository
{
    public function searchPitch($textSearch): mixed;
}