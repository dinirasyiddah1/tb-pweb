<?php

namespace App\Http\Controllers;
use App\PendidikanPenduduk;
use Illuminate\Http\Request;
use App\Penduduk;
use App\JenjangPendidikan;


class pendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = PendidikanPenduduk::all();

        return view('pendidikan.index', compact('pendidikan'));
    }
    public function create()
    {
        $penduduk = Penduduk::pluck('nama', 'id');
        $jenjang = JenjangPendidikan::pluck('nama', 'id');

        return view('pendidikan.create', compact('penduduk','jenjang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenjang_id' => 'required',
            'penduduk_id' => 'required',
            'nama_institusi' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required'
        ]);

        $pendidikan = new PendidikanPenduduk();
        $pendidikan->jenjang_id = $request->input('jenjang_id');
        $pendidikan->penduduk_id = $request->input('penduduk_id');
        $pendidikan->nama_institusi = $request->input('nama_institusi');
        $pendidikan->tahun_mulai = $request->input('tahun_mulai');
        $pendidikan->tahun_selesai = $request->input('tahun_selesai');
       

        if ($pendidikan->save()) {
            toast()->success('Berhasil menambahkan data riwayat pendidikan');
            return redirect()->route('pendidikan.index');
        } else {
            toast()->error('Data tidak dapat ditambahkan');
            return redirect()->route('pendidikan.create');
        }
    }

    public function show($id)
    {
        $pendidikan = PendidikanPenduduk::find($id);
        return view('pendidikan.show', compact('pendidikan'));
    }

    public function edit($id)
    {
        $pendidikan = PendidikanPenduduk::find($id);
        $penduduk = Penduduk::all()->pluck('nama', 'id');
        $jenjang = JenjangPendidikan::all()->pluck('nama', 'id');

        return view('pendidikan.edit', compact('pendidikan', 'penduduk', 'jenjang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenjang_id' => 'required',
            'penduduk_id' => 'required',
            'nama_institusi' => 'required',
            'tahun_mulai' => 'required',
            'tahun_selesai' => 'required'
        ]);

        $pendidikan = PendidikanPenduduk::find($id);
        $pendidikan->jenjang_id = $request->input('jenjang_id');
        $pendidikan->penduduk_id = $request->input('penduduk_id');
        $pendidikan->nama_institusi = $request->input('nama_institusi');
        $pendidikan->tahun_mulai = $request->input('tahun_mulai');
        $pendidikan->tahun_selesai = $request->input('tahun_selesai');

        if ($pendidikan->save()) {
            toast()->success('Berhasil memperbaharui data riwayat pendidikan');
            
            return redirect()->route('pendidikan.index');
        } else {
            toast()->error('Data user tidak dapat diperbaharui');
            return redirect()->route('pendidikan.edit', ['id' => $pendidikan->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pendidikan = PendidikanPenduduk::find($id);
        $pendidikan->delete();
        toast()->success('Data pendidikan berhasil dihapus');

        return redirect()->route('pendidikan.index');
    }
}
