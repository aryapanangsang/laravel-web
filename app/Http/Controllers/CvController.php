<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Cv;

class CvController extends Controller
{
    public function store_cv(Request $request)
    {
        $request->validate([
            'file' => ['mimes:pdf|max:2048']
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

    public function delete_cv(Cv $cv)
    {
        $cv->delete();
        return Redirect::route('show_profile');
    }
}
