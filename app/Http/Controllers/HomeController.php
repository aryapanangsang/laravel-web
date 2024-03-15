<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Experience;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show_profile(){
        $user = Auth::user();        
        return view('/profile',[
            'user' => $user,            
        ]);
    }

    public function update_profile()
    {
        $user = Auth::user();
        return view('update_profile', compact('user') );
    }

    public function store_profile(Request $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'domisili' => $request->domisili,
            'no_hp' => $request->no_hp,
            'no_hp_darurat' => $request->no_hp_darurat,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'email' => $request->email
        ]);

        return Redirect::route('show_profile');
    }

    public function store_experience(Request $request)
    {
        $user = Auth::user()->id;
        Experience::create([
            'user_id' => $user,
            'perusahaan' =>$request->perusahaan,
            'bagian' => $request->bagian,
            'tgl_join' =>$request->tgl_join,
            'tgl_cut' => $request->tgl_cut
        ]);

        return Redirect::route('show_profile');
    }

    public function delete_experience(Experience $experience)
    {
        $experience->delete();
        return Redirect::back()->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
