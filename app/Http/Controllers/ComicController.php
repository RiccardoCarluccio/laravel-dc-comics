<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            "comics" => Comic::all()
        ];
        return view("home", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data  = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "nullable|string",
            "price" => "nullable|decimal:0,2",
            "series" => "required|string",
            "sale_date" => "nullable|date",
            "type" => "nullable|string",
            "artists" => "nullable|string",
            "writers" => "nullable|string",
        ]);
        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);
        $comic = new Comic();
        $comic->fill($data);
        $comic->save();
        return redirect()->route('homepage', $comic);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view("show", ["comic" => $comic]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $comic = Comic::findOrFail($id);

        return view("edit", ["comic" => $comic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $data  = $request->validate([
            "title" => "required|string",
            "description" => "required|string",
            "thumb" => "nullable|string",
            "price" => "nullable|decimal:0,2",
            "series" => "required|string",
            "sale_date" => "nullable|date",
            "type" => "nullable|string",
            "artists" => "nullable|string",
            "writers" => "nullable|string",
        ]);
        $data["artists"] = json_encode([$data["artists"]]);
        $data["writers"] = json_encode([$data["writers"]]);

        $comic->update($data);

        return redirect()->route('comic.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
