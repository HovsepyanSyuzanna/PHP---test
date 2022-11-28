<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Http\Requests\LocationsRequest;

class LocationsController extends Controller
{
    public function index () {
    $locations = Location::get();

//    	dd($locations->toArray());

    return view("locations.index", compact("locations"));
    }
    public function create () {
    return view("locations.create");
    }
    public function store (LocationsRequest $request) {
//        dd(1);
        $location = new Location();

        $location->ip = $request->ip;
        $location->coord_x = $request->coord_x;
        $location->coord_y = $request->coord_y;

        $location->save();

        return redirect("/locations");
    }





    public function show ($id) {
//        $location = Location::where("id", "=", $id)->get()[0];
//        $location = Location::where("id", "=", $id)->first();
//        $location = Location::where("id", $id)->first();
        $location = Location::find($id);




//        dd($location->toArray());
        $location->save();

        return view("locations.show", compact("location"));
    }
    public function edit ($id) {
        $location = Location::find($id);

        return view("locations.edit", compact("location"));
    }
    public function update (Request $request, $id) {
        $location = Location::find($id);


        $location->update([
            "ip" => $request->ip,
            "coord_x" => $request->coord_x,
            "coord_y" => $request->coord_y,
        ]);

        return redirect("/locations");
    }

    public function delete ($id) {
        $location = Location::find($id);


        Location::destroy($id);


        return redirect("/locations");
    }
}
