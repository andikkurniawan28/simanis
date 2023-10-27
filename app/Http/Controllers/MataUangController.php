<?php

namespace App\Http\Controllers;

use App\Http\Requests\MataUangStoreRequest;
use App\Models\MataUang;
use Illuminate\Http\Request;

class MataUangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mata_uangs = MataUang::all();
        return view("mata_uang.index", compact("mata_uangs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mata_uang.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MataUangStoreRequest $request)
    {
        MataUang::create($request->all());
        return redirect()->route("mata_uang.index")->with("success", strtoupper(str_replace("_", " ", "mata_uang")) . " berhasil disimpan.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show($kode)
    {
        $mata_uang = MataUang::where("kode", $kode)->get()->last();
        return view("mata_uang.show", compact("mata_uang"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $mata_uang = MataUang::where("kode", $kode)->get()->last();
        return view("mata_uang.edit", compact("mata_uang"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        $mata_uang = MataUang::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("mata_uang.index")->with("success", strtoupper(str_replace("_", " ", "mata_uang")) . " berhasil dirubah.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        MataUang::where("kode", $kode)->delete();
        return redirect()->route("mata_uang.index")->with("success", strtoupper(str_replace("_", " ", "mata_uang")) . " berhasil dihapus.");
    }
}
