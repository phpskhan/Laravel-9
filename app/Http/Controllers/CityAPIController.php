<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;


class CityAPIController extends Controller
{
    //
    function showCityData()
    {
        return City::all();
    }

    function addCityData(Request $req)
    {
        $requestData = $req->all();
        City::create($requestData);

        return ["result"=>"New City Added."];

    }

    function deleteCityData($id)
    {
        $data=City::find($id);
        $data->delete();

        return ["result"=>"City Deleted."];

    }

    function editCityData(Request $req)
    {
        $data=City::find($req->id);
        $data->name=$req->name;
        $data->save();

        return ["result"=>"City Updated."];
    }
}
