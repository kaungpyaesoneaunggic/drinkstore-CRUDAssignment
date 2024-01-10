<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Http\Requests\StoreDrinkRequest;
use App\Http\Requests\UpdateDrinkRequest;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $drinks = Drink::all();
        return view('drink.index',compact('drinks'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('drink.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDrinkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDrinkRequest $request)
    {
        //
        $drink = new Drink();
        $drink->name = $request->name;
        $drink->price= $request->price;
        $drink->type = $request->type;
        $drink->description = $request->description;
        $drink->quantity = $request->quantity;
        $drink->save();
        return redirect()->route('drink.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function show(Drink $drink)
    {
        //
        
        return view('drink.detail',compact('drink'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function edit(Drink $drink)
    {
        //
        return view("drink.edit",compact("drink"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDrinkRequest  $request
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDrinkRequest $request, Drink $drink)
    {
        $drink->name = $request->name;
        $drink->price = $request->price;
        $drink->type = $request->type;    
        $drink->quantity = $request->quantity;
        $drink->update();
        return redirect()->route('drink.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drink $drink)
    {
        //
        if( $drink ) {
            $drink->delete();
        }
        return redirect()->route('drink.index');
    }
}
