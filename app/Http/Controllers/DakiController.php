<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DakiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dakis = DB::table('dakis')->paginate(10);
        return view('index', ['dakis' => $dakis]);
    }

     

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    public function cari(Request $request)
    {
        $cari = $request->get('cari');
        $dakis = DB::table('dakis')->where('nama', 'like', '%'.$cari.'%')->paginate(15);
        return view('index', ['dakis' => $dakis]);
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
            'alamat' => 'required',
            'regu_id' => 'required',
            'operator_id' => 'required',
         'tanggal_mendaki' => 'required'
        ]);
        
        $nama = $request -> get('nama');
        $alamat = $request -> get('alamat');
        $regu_id = $request->get('regu_id');
        $operator_id = $request->get('operator_id');
        $tanggal_mendaki = $request -> get('tanggal_mendaki');
        $dakis = DB::insert('insert into dakis(nama, alamat, regu_id, operator_id, tanggal_mendaki) value(?,?,?,?,?)', [$nama, $alamat, $regu_id, $operator_id, $tanggal_mendaki]);
        if($dakis){
            $red = redirect('daki')-> with('success','Data has been added');
        }else{
            $red = redirect('dakis/create')-> with('danger','Input data failed, please try again');
        }
        return $red;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $dakis = DB::select('select * from dakis where id=?',[$id]);
        return view('show', ['dakis'=> $dakis]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $dakis = DB::select('select * from dakis where id=?',[$id]);
        return view('edit', ['dakis' => $dakis]);
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
       
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'regu_id' => 'required',
            'operator_id' => 'required',
            'tanggal_mendaki' => 'required'
 
        ]);
        $nama = $request->get('nama');
        $alamat = $request->get('alamat');
        $regu_id = $request->get('regu_id');
        $operator_id = $request->get('operator_id');
        $tanggal_mendaki = $request->get('tanggal_mendaki');
        
        $dakis = DB::update('update dakis set nama=?, alamat=?, regu_id=?, operator_id=?, tanggal_mendaki=? where id=?',[$nama, $alamat, $regu_id, $operator_id, $tanggal_mendaki, $id]);
        if($dakis){
            $red = redirect('daki')->with('success','Data has been updated');
        } else{
            $red = redirect('dakis/edit/'.$id)->with('danger','Error Update please try again');
        }
        return $red;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $dakis = DB::delete('delete from dakis where id=?',[$id]);
        $red = redirect('daki');
        return $red;
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->get('ids');
        $dbs = DB::delete('delete from dakis where id in ('.implode(",",$ids).')');
        return redirect('daki');
    }

}
