<?php

namespace App\Http\Controllers;

use App\Pendaki;
use Illuminate\Http\Request;
use Validator, Input, Redirect, Session, Storage;

use App\Http\Requests;

class ProcessController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //show login form
    public function indexlogin()
    {
        return redirect('login');
    }

    //show homepage
    public function homepage()
    {
        return view('pages.home');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //list all, select *
        $listpendaki = Pendaki::paginate(2); //change 2 to number of data you want to display in 1 page
        return view('pages.view',array('listpendaki'=>$listpendaki));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate
        $this->validate($request, [
            'sname' => 'required',
            'stype' => 'required',
            'ssize' => 'required',
            'squantity' => 'required|numeric',
            'fileUpload' => 'mimes:jpeg,jpg,png|required|max:5000',
        ]);

        //get input and store into variables
        $sname = $request->sname;
        $stype = $request->stype;
        $ssize = $request->ssize;
        $squantity = $request->squantity;
        $file = $request->fileUpload;

        //create new object
        $inpendaki = new Pendaki;

        //set all input to insert to db
        $inpendaki->PNDK_NAME = $sname;
        $inpendaki->PNDK_TYPE = $stype;
        $inpendaki->PNDK_SIZE = $ssize;
        $inpendaki->PNDK_QTY = $squantity;

        //save to db
        $inpendaki->save();
        //upload photo
        $path = $file->storeAs('images', $inpendaki->id.'.jpg', 'public');

        Session::flash('message', "Insert pendaki success!");
        return redirect("/home");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if($request->has('sname'))
        {
            $PNDK_NAME =  $request->sname;
            $search = Pendaki::where('pndk_name','LIKE',"%$PNDK_NAME%")->paginate(2); //change 2 to number of data you want to display in 1 page

        return view('pages.search',array('search'=>$search));
        }
        else
        {
            return view('pages.search');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //show update form
        $editpendaki = Pendaki::find($id);
        return view('pages.edit',array('editpendaki'=>$editpendaki));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // validate
        $this->validate($request, [
            'sid' => 'required',
            'sname' => 'required',
            'stype' => 'required',
            'ssize' => 'required',
            'squantity' => 'required|numeric',
        ]);

        //update data in db
        $sid = $request->sid;
        $sname = $request->sname;
        $stype = $request->stype;
        $ssize = $request->ssize;
        $squantity = $request->squantity;

        $uppendaki = Pendaki::find($sid);
        $uppendaki->PNDK_NAME = $sname;
        $uppendaki->PNDK_TYPE = $stype;
        $uppendaki->PNDK_SIZE = $ssize;
        $uppendaki->PNDK_QTY = $squantity;

        $uppendaki->save();

        Session::flash('message', "Data updated!");
        return redirect("/edit/$sid");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //delete data
        $PNDK_ID = $request->delpendaki;

        $delpendaki = Pendaki::find($PNDK_ID);
        $delpendaki->delete();

        //delete image
        $del = Storage::disk('public')->delete("images/".$PNDK_ID.".jpg");

        return redirect("/view");
    }
}
