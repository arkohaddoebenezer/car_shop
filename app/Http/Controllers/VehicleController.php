<?php

namespace App\Http\Controllers;
use App\Models\Vehicle;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo_upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $photo = $request->file("photo")->store("images");
        $vehicle = new Vehicle();
        $vehicle->front_view= $photo;
        $vehicle->model=$request->model;
        $vehicle->transmission = $request->transmission;
        $vehicle->type = $request->type;
        try{
            $vehicle->save();
            return dd($vehicle);
        }
        catch(Exception $e) {
            return dd ($e);
        }
        

        // 'fuelType',
        // 'no_of_passengers',
        // 'front_view',
        // 'back_view',
        // 'left_side_view',
        // 'right_side_view',
        // 'interior_view1',
        // 'interior_view2',
        // 'interior_view3',
        // 'interior_view4',
        // 'interior_view5',
        // $photo->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
