<?php

namespace App\Http\Controllers\Admin;

use App\Models\Sejarah;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SejarahController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $AllSejarah = Sejarah::latest()->paginate(1);
            return view('pages.admin.sejarah.list', compact('AllSejarah'));
        }

        return view('pages.admin.sejarah.main');
    }


    public function create()
    {
        return view('pages.admin.sejarah.input', ['data' => new Sejarah]);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'deskripsi' => 'required',
        ]);

        $newSejarah = new Sejarah;

        $file = $request->file('image');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'images/sejarah/image';
        $file->move($tujuanFile, $namafile);
        $newSejarah->image = $namafile;

        $newSejarah->user_id = auth()->user()->id;
        $newSejarah->judul = $request->judul;
        $newSejarah->deskripsi = $request->deskripsi;
        $newSejarah->save();

        return redirect('admin/sejarah')->with('status', 'Sejarah berhasil di tambahkan');
    }

    public function edit(Sejarah $sejarah)
    {
        return view('pages.admin.sejarah.input', ['data' => $sejarah]);
    }

    public function update(Request $request, Sejarah $sejarah)
    {
        $request->validate([
            'judul' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|',
            'deskripsi' => 'required',
        ]);

        $file = $request->file('image');
        $namafile = $file->getClientOriginalName();
        $tujuanFile = 'images/sejarah/image';

        $file->move($tujuanFile, $namafile);

        $sejarah->user_id = auth()->user()->id;
        $sejarah->judul = $request->judul;
        $sejarah->image = $namafile;
        $sejarah->deskripsi = $request->deskripsi;


        $sejarah->update();
        // return redirect('admin/main')->with('status', 'Ikan berhasil di tambahkan');
        return redirect("admin/sejarah")->with('status', 'Budidaya dengan id' . $sejarah->id . ' berhasil di ubah');
    }

    // public function destroy(Sejarah $sejarah)
    // {
    //     $sejarah->delete();

    //     return redirect("admin/sejarah")->with('status', 'Budidaya dengan id : ' . $sejarah->id . " berhasil dihapus");
    // }

    public function destroy($id)
    {
        $data = Sejarah::findOrFail($id);
        $data->delete();
        return response()->json([
            'redirect' => 'reload',
            'message' => 'Data berhasil dihapus'
        ]);
    }
}
