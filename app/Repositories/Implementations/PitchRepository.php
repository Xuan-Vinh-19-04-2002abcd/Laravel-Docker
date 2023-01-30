<?php

namespace App\Repositories\Implementations;

use App\Models\Pitch;

class PitchRepository extends BaseRepository implements \App\Repositories\Interfaces\IPitchRepository
{

    public function getModel(): string
    {
        return Pitch::class;
    }
    public function searchPitch($textSearch): mixed
    {
        return $this->model->select('id','namepitch','address','phonenumber','image','price_hour')
        ->Where("namepitch", "LIKE","%$textSearch")
        ->orWhere("address", "LIKE","%$textSearch%")->get();
        
    }
}
