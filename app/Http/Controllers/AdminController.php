<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use Softon\SweetAlert\Facades\SWAL;
use App\Http\Requests\StoreParticipant;
use App\Http\Requests\UpdateParticipant;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $participants = Participant::all();

        $stat['participants_count'] = $participants->count();
        $stat['unpaid_count'] = $participants->whereNull('paid_by')->count();
        $stat['paid_count'] = $stat['participants_count'] - $stat['unpaid_count'];

        return view('admin.dashboard', compact('stat'));
    }

    public function showParticipants()
    {
        $participants = Participant::all();
        return view('admin.participants', compact('participants'));
    }

    public function showAddParticipants()
    {
        return view('admin.add-participant');
    }

    public function storeParticipants(StoreParticipant $store_participant)
    {
        Participant::create($store_participant->all());
        SWAL::message('Yeay', 'Berhasil menambahkan peserta', 'success');
        return redirect('/admin/peserta');
    }

    public function showParticipant($id)
    {
        $participant = Participant::findOrFail($id);
        return view('admin.participant', compact('participant'));
    }

    public function updateParticipant(UpdateParticipant $update_participant, $id)
    {
        $participant = Participant::findOrFail($id);
        $participant->update($update_participant->all());
        SWAL::message('Hore', 'Berhasil mengedit peserta', 'success');
        return redirect('/admin/peserta');
    }

    public function paidParticipant($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->paid_by = Auth::user()->id;
        $participant->save();
        SWAL::message('Hore', 'Berhasil melunaskan peserta', 'success');
        return redirect()->back();
    }

    public function unpaidParticipant($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->paid_by = null;
        $participant->save();
        SWAL::message('Hore', 'Berhasil mentidaklunasi peserta', 'success');
        return redirect()->back();
    }

    public function deleteParticipant($id)
    {
        $participant = Participant::findOrFail($id);
        $participant->delete();
        SWAL::message('Yeay', 'Berhasil menghapus peserta', 'success');
        return redirect()->back();
    }
}
