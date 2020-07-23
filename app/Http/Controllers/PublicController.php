<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreParticipant;
use App\Models\Participant;

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
        Participant::create($store_participant->all());
        return redirect('/daftar/pesan')->with('success', 'success');
    }
}
