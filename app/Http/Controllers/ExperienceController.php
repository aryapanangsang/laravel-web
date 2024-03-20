<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\Experience;

class ExperienceController extends Controller
{
    public function store_experience(Request $request)
    {
        $request->validate([
            'perusahaan' => ['required'],
            'bagian' => ['required'],
            'durasi_kontrak' => ['required']
        ]);
        
        $user = Auth::user()->id;
        Experience::create([
            'user_id' => $user,
            'perusahaan' =>$request->perusahaan,
            'bagian' => $request->bagian,
            'durasi_kontrak' => $request->durasi_kontrak,
        ]);

        return Redirect::route('show_profile');
    }

    public function delete_experience(Experience $experience)
    {
        $experience->delete();
        return Redirect::back()->with(['success' => 'Data Berhasil Dihapus!']);
    }

}
