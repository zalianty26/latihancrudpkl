<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $a = Jurusan::all();
        return view('jurusan.index', ['jurusan' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('jurusan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'kode_mata_jurusan' => 'required|:jurusan|max:255',
            'nama_mata_pelajaran' => 'required',
            'semester' => 'required',
        ]);

        $post = new Jurusan();
        $post->nis = $request->nis;
        $post->kode_mata_jurusan = $request->kode_mata_jurusan;
        $post->nama_mata_pelajaran = $request->nama_mata_pelajaran;
        $post->semester = $request->semestar;
        $post->save();
        return redirect()->route('jurusan.index')->with('succes', 
            'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Nilai::findOrFail($id);
        return view ('jurusan.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Jurusan::findOrFail($id);
        return view ('jurusan.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'kode_mata_pelajaran' => 'required|:jurusan|max:255',
            'nama_mata_pelajaran' => 'required',
            'semester' => 'required',
        ]);
        $post = Jurusan::findOrfail($id);

        $post->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $post->nama_mata_pelajaran = $request->nama_mata_pelajaran;
        $post->semester = $request->semester;
        $post->save();
        return redirect()->route('jurusan.index')->with('succes', 
            'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Jurusan::findOrFail($id);
        $post->delete();
        return redirect()->route('jurusan.index')->with('succes', 
            'Data berhasil dihapus!');
    }
}