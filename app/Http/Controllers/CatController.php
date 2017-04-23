<?php

namespace App\Http\Controllers;

use App\Cat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cats.index', ['cats' =>  Cat::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
  $this->validate($request, [
      'name' => 'required|max:255',
      'badgeid' => 'required|max:255',
      'icon'=> 'required|max:2',
      'allowedfood' => 'required'
  ]);

$cat = new Cat;
$cat->name = $request->input('name');
$cat->badgeid = $request->input('badgeid');
$cat->icon = $request->input('icon');
$cat->allowedfood = $request->input('allowedfood');

$cat->save();

return redirect('/cats');
  }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
      $cat = Cat::find($request->id);

      DB::table('actions')
              ->where('type', $cat->badgeid)
              ->delete();
      $cat->delete();
      return view('cats.index', ['cats' =>  Cat::all()]);
    }
}
