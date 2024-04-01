<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Experience;
use App\Models\Cv;
use App\Models\Referensi;
use Carbon\carbon;
use Illuminate\Support\Facades\Storage;

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
        $user = Auth::user();        
        $tgl_daftar = Carbon::parse($user->created_at)->formatLocalized('%d %B %Y');    
        return view('home',[
            'users' => $user,
            'tgl_daftar' => $tgl_daftar
        ]);
    }

    public function show_profile(){
        $user = Auth::user();    
        $tgl_daftar = Carbon::parse($user->created_at)->formatLocalized('%d %B %Y');    
        $tgl_lahir = Carbon::parse($user->tanggal_lahir)->formatLocalized('%d %B %Y');  
        $cv = Cv::where('user_id', $user->id)->first();        
        $reff = Referensi::where('user_id', $user->id)->first();        
        return view('/profile',[
            'user' => $user,    
            'tgl_daftar' => $tgl_daftar,
            'tgl_lahir' => $tgl_lahir,         
            'cv' => $cv,
            'reff' => $reff
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
            'kantor_tujuan' => $request->kantor_tujuan,
            'email' => $request->email
        ]);

        return Redirect::route('show_profile');
    }

    public function update_image(Request $request){
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|dimensions:ratio=3/3'
        ]);

        $user = Auth::user();
        $name = $user->name;
        $file = $request->file('file');
        $path = time() . '-' . $name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        
        $user = Auth::user();
        $user->update([
            'path' => $path
        ]);

        return Redirect::route('show_profile');
    }

    // Pengaturan

    public function show_pengaturan(){
        return view('pengaturan');
    }
    
}
