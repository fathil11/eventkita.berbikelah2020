<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreParticipant;
use App\Mail\ParticipantPaid;
use App\Mail\ParticipantRegistered;
use App\Models\Participant;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function showHome()
    {
        return view('public.home');
    }

    public function showRegister()
    {
        return view('public.register');
    }

    public function showRegisterMessage()
    {
        if (!session()->has('success')) {
            return redirect('/');
        }
        return view('public.register-message');
    }

    public function storeParticipant(StoreParticipant $store_participant)
    {
        $participant = Participant::create($store_participant->all());
        Mail::to($participant->email)->send(new ParticipantRegistered($participant));
        return redirect('/daftar/pesan')->with('success', 'success');
    }

    public function test()
    {
        $participant = Participant::find(1);
        Mail::to('asd@test.com')->send(new ParticipantPaid($participant));
    }
}
