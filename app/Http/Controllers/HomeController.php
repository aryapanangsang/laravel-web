<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Experience;
use App\Models\Cv;
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
        return view('/profile',[
            'user' => $user,    
            'tgl_daftar' => $tgl_daftar,
            'tgl_lahir' => $tgl_lahir,                 
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

    public function store_cv(Request $request)
    {
        $request->validate([
            'file' => ['mimes:pdf']
        ]);

        $user = Auth::user();
        $name = $user->name;
        $file = $request->file('file');
        $path = time() . '-' . $name . '.' . $file->getClientOriginalExtension();
        Storage::disk('local')->put('public/'. $path, file_get_contents($file));

        
        Cv::create([
            'user_id' => $user->id,
            'path' => $path
        ]);

        return Redirect::route('show_profile');
    }
}
