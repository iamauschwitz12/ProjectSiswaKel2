<?php

namespace App\Http\Controllers;

use App\Model_vivo;
use Illuminate\Http\Request;

class Controllervivo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vivo = Model_vivo::all();
        return view('vivo',['vivo' => $vivo]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_vivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'prosesor' => 'required',
            'penyimpanan' => 'required',
            'harga' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
  
        $input = $request -> all();

        if($image =$request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
       
        Model_vivo::create($input);
  
        return redirect('/vivo');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_vivo $vivo)
    {
        return view('editvivo', compact('vivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_vivo $vivo)
    {
        Model_vivo::where('id', $vivo->id)
           ->update([
               'nama' => $request->nama,
               'prosesor' => $request->prosesor,
               'penyimpanan' => $request->penyimpanan,
               'harga' => $request->harga,
           ]);
       return redirect('/vivo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_vivo $vivo)
    {
        Model_vivo::destroy($vivo->id);
      return redirect('/vivo');
    }
}
