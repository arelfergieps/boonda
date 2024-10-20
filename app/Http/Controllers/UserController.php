<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userview()
    {
        $images = DB::table('images')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();
    
        return view('user.index', compact('images'));
    }
    

    public function detailcard()
    {
        return view('user.detailcard');
    }


    public function galleri(Request $request)
    {
        $years = DB::table('images')
            ->select('tahun')
            ->distinct()
            ->orderBy('tahun', 'asc') 
            ->limit(5) 
            ->get();
    
        $selectedYear = $request->query('year', $years->first()->tahun);
        $images = DB::table('images')
            ->where('tahun', $selectedYear)
            ->get();
    
        return view('user.galleri', compact('years', 'images', 'selectedYear'));
    }
      

    public function katalog()
    {
        return view('user.katalog');
    }

    
    public function kolaborator()
    {
        return view('user.kolaborator');
    }
}
