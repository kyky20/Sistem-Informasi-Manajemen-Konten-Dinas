<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('Admin.beranda.berita.index', compact('berita'));
    }

    public function upload(Request $request)
    {
        if (!$request->hasFile('upload')) {
            return response()->json(['message' => 'No file was uploaded.'], 422);
        }

        $originalName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originalName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = $fileName . '_' . time() . '.' . $extension;

        $request->file('upload')->storeAs('fileCkeditor', $fileName, 'public');

        $url = asset('storage/fileCkeditor/' . $fileName);
        return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:5000',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        $file = $request->file('gambar');
        $nama_file = time() . "_" . $file->getClientOriginalName();

        $file->storeAs('fileBerita', $nama_file, 'public');

        $berita = new Berita();
        $berita->fill([
            'gambar' => $nama_file,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
        ]);

        $berita->save();
        Alert::success('Success', 'Berhasil menambah data');
        return redirect('/admin/berita');
    }


    public function edit($id)
    {
        $berita = Berita::where('id', $id)->firstOrFail();
        return view('Admin.beranda.berita.edit', compact('berita'));
    }


    public function update(Request $request, $id)
    {
        $berita = Berita::where('id', $id)->first();
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            if (Storage::disk('public')->exists('fileBerita/' . $berita->gambar)) {
                Storage::disk('public')->delete('fileBerita/' . $berita->gambar);
            }

            $file = $request->file('gambar');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->storeAs('fileBerita', $nama_file, 'public');

            $data['gambar'] = $nama_file;
        } else {
            unset($data['gambar']);
        }

        $berita->update($data);
        Alert::success('Success', 'Berhasil mengupdate data');
        return redirect('/admin/berita');
    }


    public function destroy($id)
    {
        $berita = Berita::find($id);

        // Hapus gambar
        if (Storage::disk('public')->exists('fileBerita/' . $berita->gambar)) {
            Storage::disk('public')->delete('fileBerita/' . $berita->gambar);
        }

        $berita->delete();
        Alert::success('Success', 'Berhasil menghapus data');
        return redirect('/admin/berita');
    }
}
