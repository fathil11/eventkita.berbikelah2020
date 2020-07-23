<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Participant extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function getGenderAttribute($gender)
    {
        return [
            'm' => 'L',
            'f' => 'P'
        ][$gender];
    }
}
