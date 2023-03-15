<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Country;

class CountryAPIController extends Controller
{
    //
    function showCountryData()
    {
        return Country::all();
    }

    function addCountryData(Request $req)
    {
        $requestData = $req->all();
        Country::create($requestData);

        return ["result"=>"New Country Added."];
    }

    function deleteCountryData($id)
    {
        $data=Country::find($id);
        $data->delete();

        return ["result"=>"Country Deleted."];
    }

    function editCountryData(Request $req)
    {
        $data=Country::find($req->id);
        $data->name=$req->name;
        $data->save();

        return ["result"=>"Country Updated."];
    }
}
