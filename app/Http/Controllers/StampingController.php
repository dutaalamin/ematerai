<?php

namespace App\Http\Controllers;

use App\Models\StampingHistory;
use App\Models\UserQuota;
use Illuminate\Http\Request;

class StampingController extends Controller
{
    public function index()
    {
        $quota = UserQuota::where('user_id', auth()->id())->first();
        $histories = StampingHistory::where('user_id', auth()->id())->latest()->get();
        return view('stamping.index', compact('quota', 'histories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document' => 'required|mimes:pdf|max:5120', // Max 5MB PDF
        ]);

        $userQuota = UserQuota::where('user_id', auth()->id())->first();

        if (!$userQuota || $userQuota->quota_balance <= 0) {
            return back()->with('error', 'Kuota e-meterai Anda tidak mencukupi. Silakan beli terlebih dahulu.');
        }

        // Mockup Stamping Logic
        // In real life, we would send this PDF to Peruri API and get the stamped PDF back.
        
        $file = $request->file('document');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/stamped_documents', $filename);

        // Deduct quota
        $userQuota->decrement('quota_balance');

        // Record history
        StampingHistory::create([
            'user_id' => auth()->id(),
            'filename' => $filename,
            'status' => 'success'
        ]);

        return back()->with('success', 'Dokumen berhasil dibubuhi e-meterai!');
    }
}
