<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Jalur;
use Illuminate\Support\Facades\Validator;

class JalurController extends Controller
{
    public function index(Request $request)
    {
      $request->session()->put('search', $request
              ->has('search') ? $request->get('search') : ($request->session()
              ->has('search') ? $request->session()->get('search') : ''));

              $request->session()->put('field', $request
                      ->has('field') ? $request->get('field') : ($request->session()
                      ->has('field') ? $request->session()->get('field') : 'nama'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

      $jalurs = new Jalur();
            $jalurs = $jalurs->where('nama', 'like', '%' . $request->session()->get('search') . '%')
                ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(10);
            if ($request->ajax()) {
              return view('jalurs.index', compact('jalurs'));
            } else {
              return view('jalurs.ajax', compact('jalurs'));
            }
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
        return view('jalurs.form');

        $rules = [
          'nama' => 'required',
          'lokasi' => 'required',
          'estimasi' => 'required',
          'jumlah_pos' => 'required',
          'status' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        return response()->json([
          'fail' =>true,
          'errors' => $validator->errors()
        ]);

        $jalur = new Jalur();
        $jalur->nama = $request->nama;
        $jalur->lokasi = $request->lokasi;
        $jalur->estimasi = $request->estimasi;
        $jalur->jumlah_pos = $request->jumlah_pos;
        $jalur->status = $request->status;
        $jalur->save();

        return response()->json([
          'fail' => false,
          'redirect_url' => url('jalurs')
        ]);
    }

    public function show(Request $request, $id)
    {
        if($request->isMethod('get')) {
          return view('jalurs.detail',['jalur' => Jalur::find($id)]);
        }
    }

    public function update(Request $request, $id)
    {
      if ($request->isMethod('get'))
      return view('jalurs.form',['jalur' => Jalur::find($id)]);

      $rules = [
        'nama' => 'required',
          'lokasi' => 'required',
          'estimasi' => 'required',
          'jumlah_pos' => 'required',
          'status' => 'required',
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails())
      return response()->json([
        'fail' =>true,
        'errors' => $validator->errors()
      ]);

      $jalur = Jalur::find($id);
      $jalur->nama = $request->nama;
      $jalur->lokasi = $request->lokasi;
      $jalur->estimasi = $request->estimasi;
      $jalur->jumlah_pos = $request->jumlah_pos;
      $jalur->status = $request->status;
      $jalur->save();

      return response()->json([
        'fail' => false,
        'redirect_url' => url('jalurs')
      ]);
    }

    public function destroy($id)
    {
        Jalur::destroy($id);
        return redirect('jalurs');
    }
}