<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ContentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contents::all();
        $todo = $data->where('status','TODO');
        $doing = $data->where('status','DOING');
        $done = $data->where('status','DONE');
        return view('page.index',compact('todo','doing','done'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('page.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Contents::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/show/TODO');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('page.contents');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Contents::find($id);
        return view('page.edits',compact('data'));
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
        Contents::find($id)->update(['title'=>$request->title, 'description'=>$request->description, 'status'=>'TODO']);
        return redirect('/show/TODO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contents::find($id)->delete();
        return redirect('/');
    }

    public function move($slug, $id)
    {
        if ($slug == "TODO") {
            Contents::find($id)->update(['status'=>'DOING']);
            // dd($id);
            return redirect('/show/TODO');
          } elseif ($slug == "DOING") {
            Contents::find($id)->update(['status'=>'DONE']);
            return redirect('/show/DOING');
          }
        dd($slug);
    }
}
