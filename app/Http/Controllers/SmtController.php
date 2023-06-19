<?php

namespace App\Http\Controllers;

use App\Models\smt;
use Illuminate\Http\Request;

class SmtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(smt $smt)
    {  $data= smt::all();
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,smt $db)
    {
        $db->create([
            'title'=>$request->title 
        ]);
        return redirect('/sms')->with('msg','created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(smt $smt,$id)
    {
      $data= $smt->find($id);
     return view('single',compact('data'));   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(smt $smt ,$id)
    {
         $data= $smt->find($id);
        return view ('edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, smt $smt ,$id)
    {
        $data= $smt->find($id);
        $data->update([
            'title'=>$request->title,
            'completed'=>$request->completed
        ]);
        return redirect('/sms')->with('msg','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(smt $smt,$id)
    {
     
       $data= $smt->find($id);
        $data->delete();

        return redirect('/sms')->with('msg','deleted successfully');
    }
}
