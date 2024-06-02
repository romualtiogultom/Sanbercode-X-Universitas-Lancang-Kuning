<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cast;

class castController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = cast::all();
        return view('cast.index',["cast"=>$cast]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cast.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4|max:18',
            'umur' => 'required|integer',
            'bio' => 'required|max:1000',
        ]);
        $cast = new cast;
 
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
 
        $cast->save();
        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
       
        {
            return view('cast.show', compact('cast'));
        }  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        {
           
            {
                return view('cast.edit', compact('cast'));
            }
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
    {
       
{
    $validatedData = $request->validate([
    'nama' => 'required|string|max:255',
     'umur' => 'required|integer|min:1',
    'bio' => 'required|string',
    ]);

    $cast->update($validatedData);

    return redirect()->route('cast.show', $cast->id)->with('success', 'Cast member updated successfully!');
}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        
        
        {
            $cast->delete();
        
            return redirect()->route('cast.index')->with('success', 'Cast member deleted successfully!');
        }
    }
}