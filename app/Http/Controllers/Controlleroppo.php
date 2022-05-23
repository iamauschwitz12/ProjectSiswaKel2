<?php

namespace App\Http\Controllers;

use App\Model_oppo;
use Illuminate\Http\Request;

class Controlleroppo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oppo = Model_oppo::all();
        return view('oppo',['oppo' => $oppo]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_oppo');
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
       
        Model_oppo::create($input);
  
        return redirect('/oppo');
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
    public function edit(Model_oppo $oppo)
    {
        return view('editoppo', compact('oppo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_oppo $oppo)
    {
        Model_oppo::where('id', $oppo->id)
           ->update([
               'nama' => $request->nama,
               'prosesor' => $request->prosesor,
               'penyimpanan' => $request->penyimpanan,
               'harga' => $request->harga,
           ]);
       return redirect('/oppo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_oppo $oppo)
    {
        Model_oppo::destroy($oppo->id);
      return redirect('/oppo');
    }
}
