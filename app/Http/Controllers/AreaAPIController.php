<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;


class AreaAPIController extends Controller
{
    //
    function showAreaData()
    {
        return Area::all();
    }

    function addAreaData(Request $req)
    {
        $requestData = $req->all();
        Area::create($requestData);

        return ["result"=>"New Area Added."];

    }

    function deleteAreaData($id)
    {
        $data=Area::find($id);
        $data->delete();

        return ["result"=>"Area Deleted."];
    }

    function editAreaData(Request $req)
    {
        $data=Area::find($req->id);
        $data->name=$req->name;
        $data->save();

        return ["result"=>"Area Updated."];
    }
}
