<?php

namespace App\Http\Controllers;

use App\Comic;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(4);

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);

        // TODO: validation

        // salvataggio dei dati nel database
        $comic = new Comic;
        $comic->thumb         = $data['thumb'];
        $comic->title         = $data['title'];
        $comic->description   = $data['description'];
        $comic->price         = $data['price'] ?? false;
        $comic->series        = $data['series'];
        $comic->sale_date     = $data['sale_date'];
        $comic->type          = $data['type'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic])->with('success_create', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->thumb         = $data['thumb'];
        $comic->title         = $data['title'];
        $comic->description   = $data['description'];
        $comic->price         = $data['price'] ?? false;
        $comic->series        = $data['series'];
        $comic->sale_date     = $data['sale_date'];
        $comic->type          = $data['type'];
        $comic->save();

        return redirect()->route('comics.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('success_delete', $comic->id);
    }
}
