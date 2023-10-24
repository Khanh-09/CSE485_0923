<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use Illuminate\Http\Request;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flowers = Flower::latest()->get();
        return view('flowers.index', compact('flowers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flowers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'origin' => 'required',
        ]);
  
        Flower::create($request->all());
   
        return redirect()->route('flowers.index')
        ->with('success','Flower created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        return view('flowers.show',compact('flower'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Flower $flower)
    {
        return view('flowers.edit', compact('flower'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Flower $flower)
    {
        $data = $request->except(["_token","_method"]);

        //sử dụng phương thức update với dữ liệu được loại bỏ trường "_token" và "_method"
        $flower->update($data);
        return redirect()->route('flowers.index')
        ->with('success', 'Flower updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Flower $flower)
    {
        $flower->delete();
  
        return redirect()->route('flowers.index')
        ->with('success','Flower deleted successfully');
    }
}
