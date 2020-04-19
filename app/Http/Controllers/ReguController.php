<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Regu;
use Illuminate\Support\Facades\Validator;

class ReguController extends Controller
{
    public function index(Request $request)
    {
      $request->session()->put('search', $request
              ->has('search') ? $request->get('search') : ($request->session()
              ->has('search') ? $request->session()->get('search') : ''));

              $request->session()->put('field', $request
                      ->has('field') ? $request->get('field') : ($request->session()
                      ->has('field') ? $request->session()->get('field') : 'regu'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

      $regus = new Regu();
            $regus = $regus->where('regu', 'like', '%' . $request->session()->get('search') . '%')
                ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(10);
            if ($request->ajax()) {
              return view('regus.index', compact('regus'));
            } else {
              return view('regus.ajax', compact('regus'));
            }
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
        return view('regus.form');

        $rules = [
          'regu' => 'required',
          'jumlah_anggota' => 'required',
          'jalur_id' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        return response()->json([
          'fail' =>true,
          'errors' => $validator->errors()
        ]);

        $regu = new Regu();
        $regu->regu = $request->regu;
        $regu->jumlah_anggota = $request->jumlah_anggota;
        $regu->jalur_id = $request->jalur_id;
        $regu->save();

        return response()->json([
          'fail' => false,
          'redirect_url' => url('regus')
        ]);
    }

    public function show(Request $request, $id)
    {
        if($request->isMethod('get')) {
          return view('regus.detail',['regu' => Regu::find($id)]);
        }
    }

    public function update(Request $request, $id)
    {
      if ($request->isMethod('get'))
      return view('regus.form',['regu' => Regu::find($id)]);

      $rules = [
        'regu' => 'required',
        'jumlah_anggota' => 'required',
        'jalur_id' => 'required',
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails())
      return response()->json([
        'fail' =>true,
        'errors' => $validator->errors()
      ]);

      $regu = Regu::find($id);
      $regu->regu = $request->regu;
      $regu->jumlah_anggota = $request->jumlah_anggota;
      $regu->jalur_id = $request->jalur_id;
      $regu->save();

      return response()->json([
        'fail' => false,
        'redirect_url' => url('regus')
      ]);
    }

    public function destroy($id)
    {
        Regu::destroy($id);
        return redirect('regus');
    }
}