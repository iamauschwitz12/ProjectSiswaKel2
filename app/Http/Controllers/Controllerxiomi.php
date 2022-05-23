<?php

namespace App\Http\Controllers;

use App\Model_xiomi;
use Illuminate\Http\Request;

class Controllerxiomi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xiomi = Model_xiomi::all();
        return view('xiomi',['xiomi' => $xiomi]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_xiomi');
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
       
        Model_xiomi::create($input);
  
        return redirect('/xiomi');
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
    public function edit(Model_xiomi $xiomi)
    {
        return view('editxiomi', compact('xiomi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_xiomi $xiomi)
    {
        Model_xiomi::where('id', $xiomi->id)
           ->update([
               'nama' => $request->nama,
               'prosesor' => $request->prosesor,
               'penyimpanan' => $request->penyimpanan,
               'harga' => $request->harga,
           ]);
       return redirect('/xiomi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_xiomi $xiomi)
    {
        Model_xiomi::destroy($xiomi->id);
      return redirect('/xiomi');
    }
}