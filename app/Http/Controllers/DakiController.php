<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Daki;
use Illuminate\Support\Facades\Validator;

class DakiController extends Controller
{
    public function index(Request $request)
    {
      $request->session()->put('cari', $request
              ->has('cari') ? $request->get('cari') : ($request->session()
              ->has('cari') ? $request->session()->get('cari') : ''));

              $request->session()->put('field', $request
                      ->has('field') ? $request->get('field') : ($request->session()
                      ->has('field') ? $request->session()->get('field') : 'regu_id'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

      $dakis = new Daki();
            $dakis = $dakis->where('regu_id', 'like', '%' . $request->session()->get('cari') . '%')
                ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(10);
            if ($request->ajax()) {
              return view('dakis.index', compact('dakis'));
            } else {
              return view('dakis.ajax', compact('dakis'));
            }
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
        return view('dakis.form');

        $rules = [
          'nama' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        return response()->json([
          'fail' =>true,
          'errors' => $validator->errors()
        ]);

        $daki = new Daki();
        $daki->nama = $request->nama;
        $daki->alamat = $request->alamat;
        $daki->regu_id = $request->regu_id;
        $daki->tanggal_mendaki = $request->tanggal_mendaki;
        $daki->save();

        return response()->json([
          'fail' => false,
          'redirect_url' => url('dakis')
        ]);
    }

    public function show(Request $request, $id)
    {
        if($request->isMethod('get')) {
          return view('dakis.detail',['daki' => Daki::find($id)]);
        }
    }

    public function update(Request $request, $id)
    {
      if ($request->isMethod('get'))
      return view('dakis.form',['daki' => Daki::find($id)]);

      $rules = [
        'nama' => 'required',
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails())
      return response()->json([
        'fail' =>true,
        'errors' => $validator->errors()
      ]);

      $daki = Daki::find($id);
       $daki->nama = $request->nama;
        $daki->alamat = $request->alamat;
        $daki->regu_id = $request->regu_id;
        $daki->tanggal_mendaki = $request->tanggal_mendaki;
        $daki->save();
      

      return response()->json([
        'fail' => false,
        'redirect_url' => url('dakis')
      ]);
    }

    public function destroy($id)
    {
        Daki::destroy($id);
        return redirect('dakis');
    }
}