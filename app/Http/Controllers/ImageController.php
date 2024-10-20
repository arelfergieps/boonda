<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tahun = $request->input('tahun');
        if ($tahun) {
            $data = Image::where('tahun', $tahun)->get();
        } else {
            $data = Image::all();
        }
    
        $title = 'Delete Data!';
        $text = "Apakah Kamu Yakin Akan Menghapus Data Ini?";
        confirmDelete($title, $text);
    
        return view('admin.images.index', compact('data', 'tahun'));
    }

 

    public function create()
    {
        return view('admin.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'tahun' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = new Image();
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        } else {
            $data->foto = 'default.jpg'; 
        }
        $data->deskripsi = $request->deskripsi;
        $data->tahun = $request->tahun;
        $data->save();
    
        Alert::success('Success', 'Tambah data Berhasil!')->showConfirmButton('OK');
        return redirect()->route('images.index');
    }

    /**
     * Display the specified resource.
     */
    public function galleriShow($tahun = null)
    {
        $query = Image::query();

        // Jika tahun ditentukan, filter berdasarkan tahun
        if ($tahun) {
            $query->where('tahun', $tahun);
        }

        $images = $query->get();

        return view('user.galleri', compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editData = Image::find($id);
        return view('admin.images.edit', compact('editData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Image::find($id);
    
        if (!$data) {
            return redirect()->back()->withErrors('Data tidak ditemukan.');
        }
    
        // Validasi data yang diterima
        $request->validate([
            'tahun' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Hapus judul karena tidak ada di model
        // $data->judul = $request->judul;
    
        if ($request->hasFile('foto')) {
            if ($data->foto && $data->foto != 'default.jpg') {
                Storage::delete($data->foto);
            }
            $foto = $request->file('foto')->store('foto');
            $data->foto = $foto;
        }
    
        $data->deskripsi = $request->deskripsi;
        $data->tahun = $request->tahun;
    
        $data->save();
    
        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Image::find($id);
    
        if (!$data) {
            return redirect()->route('images.index')->withErrors('Data tidak ditemukan.');
        }
    
        if ($data->foto && $data->foto != 'default.jpg') {
            Storage::delete($data->foto);
        }
    
        $data->delete();
    
        return redirect()->route('images.index')->with('success', 'Data berhasil dihapus.');
    }    
    
}
