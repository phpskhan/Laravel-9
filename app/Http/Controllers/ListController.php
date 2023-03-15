<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;
use App\Models\City;
use App\Models\Area;

class ListController extends Controller
{
    //
    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('index', $data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("country_id", $request->country_id)
                                ->get(["name", "id"]);
  
        return response()->json($data);
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchArea(Request $request)
    {
        $data['areas'] = Area::where("city_id", $request->city_id)
                                    ->get(["name", "id"]);
                                      
        return response()->json($data);
    }
}
