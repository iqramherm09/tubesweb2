<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['data' => Anggota::all()]);    
    }

    public function create()
    {
        return view('add');    
    }


    public function store(Request $request)
    {

        Anggota::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
        ]);

        return redirect('/');
    }

    public function show(Anggota $anggota)
    {
        $data = Anggota::find($anggota->id)->get();
        return view('edit', ['data' => $anggota]);
    }

    public function update(Request $request, Anggota $anggota)
    {
        $data = [
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'nim' => $request->nim
        ];


        Anggota::where('id', $anggota->id)->update($data);

        return redirect("/");
    }

    public function destroy(Anggota $anggota)
    {
        Anggota::destroy($anggota->id);
        return redirect('/');
    }
}
