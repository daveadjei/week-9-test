<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function index()
    {

    //    $all = DB::table('heroes')->get();
    //    $view = view('hero.index');
    //    $view->all=$all;

    //    return $view;
        $all = DB::select('select* from heroes ORDER BY name ASC');
        return $all->with('hero/index');
        // return view('hero/index')->with('heroes',$all);

        // $hero = \App\Hero::all();
        // // pass them to the view
        // return view('hero/index', ['heroes' => $hero]);
    }

    public function store(Request $request)
    {

        $newRow = new \App\Emergencies();
        $newRow->subject = $request->get('subject');
        $newRow->description = $request->get('description');
        $newRow->user_id= Auth::user()->id;
        $newRow->save();
    }
}
