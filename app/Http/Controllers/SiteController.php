<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Site;

class SiteController extends Controller
{
    function details(Request $request){
        $id = $request->input('id');
        $site=Site::findOrFail($request->id);
        return view('/detailSite',compact('site'));
    }
}
