<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function showParticipantDashboard($code)
    {
        $participant = Participant::where('code', $code)->firstOrFail();
        return abort(503, 'halaman ini hanya dapat diakses saat hari h acara.');
    }
}
