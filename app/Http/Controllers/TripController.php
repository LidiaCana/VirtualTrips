<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trips;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = trips::latest()->paginate(5);
        return view('index', compact('data'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'    =>  'required',
            'price'   =>  'required',
            'image'     =>  'required|image|max:2048'
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        
        
        $trip = new trips();
        $trip->name = $request->name;
        $trip->description = $request->description;
        $trip->price = $request->price;
        $trip->img = $new_name;
        $trip->user_id = auth()->id();
        $trip->save();
    
        return redirect('trips')->with('success', 'Data Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = trip::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = trip::findOrFail($id);
        return view('edit', compact('data'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != '')
        {
            $request->validate([
                'name'    =>  'required',
                'price'     =>  'required',
                'image'         =>  'image|max:2048'
            ]);

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $image_name);
        }
        else
        {
            $request->validate([
                'name'    =>  'required',
                'price'     =>  'required'
            ]);
        }

        //
        $trip = trips::find($id);
        $trip->name = $request->name;
        $trip->description = $request->description;
        $trip->price = $request->price;
        $trip->guide_id = $request->guide_id;
        $trip->user_id = auth()->id();
        $trip->save();
    
        return redirect('trips')->with('success', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = trips::find($id);
        $trip->delete();
        return redirect('trips')->with('success', 'Data is successfully deleted');
    }
}