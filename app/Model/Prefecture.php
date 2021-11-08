<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    //
    public function getPrefectureNameById(int $id): String
    {
        return "test";
    }
}
