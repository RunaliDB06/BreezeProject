<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class FormController extends Controller
{
    public function store(Request $request)
    {
        // $this->validate($request,[
        //         'tittle'=>'request',
        //         'dis' =>'request',
        //     ]);
        $form=new form();
        $form->tittle=$request->tittle;
        $form->dis=$request->dis;
        $form->save();
        return redirect()->route('table')->with('message','Added succesfully');
    }
    public function index()
    {
        $form=form::all();
        return view('table',compact('form'));
    }
    public function edit($id)
    {
        $form=form::find($id);
        return view('edit',compact('form'));
    }

    public function update(Request $request,$id)
    {
        // $this->validate($request,[
        //     'tittle'=>'request',
        //     'dis' =>'request',
        // ]);
    $form =Form::find($id);
    $form->tittle=$request->tittle;
    $form->dis=$request->dis;
    $form->save();
    return redirect()->route('table')->with('message','update successfully');
    }
    public function delete($id){
        $form=form::find($id);
        $form->delete();
        return redirect()->route('table')->with('message','Delete successfully');
    }
}
