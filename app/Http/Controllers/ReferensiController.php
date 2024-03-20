<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Referensi;

class ReferensiController extends Controller
{
    public function store_referensi(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'no_hp' => ['required'],
            'keterangan' => ['required'],
        ]);
         
        $user = Auth::id();
        Referensi::create([            
            'name' => $request->nama,
            'user_id' => $user,
            'no_hp' => $request->no_hp,
            'keterangan' => $request->keterangan
        ]);

        return Redirect::route('show_profile');
    }
}
