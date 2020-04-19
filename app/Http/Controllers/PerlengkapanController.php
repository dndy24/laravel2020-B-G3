<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Perlengkapan;
use Illuminate\Support\Facades\Validator;

class PerlengkapanController extends Controller
{
    public function index(Request $request)
    {
      $request->session()->put('search', $request
              ->has('search') ? $request->get('search') : ($request->session()
              ->has('search') ? $request->session()->get('search') : ''));

              $request->session()->put('field', $request
                      ->has('field') ? $request->get('field') : ($request->session()
                      ->has('field') ? $request->session()->get('field') : 'regu_id'));

                      $request->session()->put('sort', $request
                              ->has('sort') ? $request->get('sort') : ($request->session()
                              ->has('sort') ? $request->session()->get('sort') : 'asc'));

      $perlengkapans = new Perlengkapan();
            $perlengkapans = $perlengkapans->where('regu_id', 'like', '%' . $request->session()->get('search') . '%')
                ->orderBy($request->session()->get('field'), $request->session()->get('sort'))
                ->paginate(10);
            if ($request->ajax()) {
              return view('perlengkapans.index', compact('perlengkapans'));
            } else {
              return view('perlengkapans.ajax', compact('perlengkapans'));
            }
    }

    public function create(Request $request)
    {
        if ($request->isMethod('get'))
        return view('perlengkapans.form');

        $rules = [
          'surat_ijin' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        return response()->json([
          'fail' =>true,
          'errors' => $validator->errors()
        ]);

        $perlengkapan = new Perlengkapan();
        $perlengkapan->regu_id = $request->regu_id;
        $perlengkapan->surat_ijin = $request->surat_ijin;
        $perlengkapan->p3k = $request->p3k;
        $perlengkapan->navigasi = $request->navigasi;
        $perlengkapan->save();

        return response()->json([
          'fail' => false,
          'redirect_url' => url('perlengkapans')
        ]);
    }

    public function show(Request $request, $id)
    {
        if($request->isMethod('get')) {
          return view('perlengkapans.detail',['perlengkapan' => Perlengkapan::find($id)]);
        }
    }

    public function update(Request $request, $id)
    {
      if ($request->isMethod('get'))
      return view('perlengkapans.form',['perlengkapan' => Perlengkapan::find($id)]);

      $rules = [
        'surat_ijin' => 'required',
      ];

      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails())
      return response()->json([
        'fail' =>true,
        'errors' => $validator->errors()
      ]);

      $perlengkapan = Perlengkapan::find($id);
      $perlengkapan->regu_id = $request->regu_id;
      $perlengkapan->surat_ijin = $request->surat_ijin;
      $perlengkapan->p3k = $request->p3k;
      $perlengkapan->navigasi = $request->navigasi;
      $perlengkapan->save();

      return response()->json([
        'fail' => false,
        'redirect_url' => url('perlengkapans')
      ]);
    }

    public function destroy($id)
    {
        Perlengkapan::destroy($id);
        return redirect('perlengkapans');
    }
}