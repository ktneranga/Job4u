<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends Controller
{
    //show all listing
    public function index(Request $request)
    {
        $listings = Listing::latest()->filter(request(['tag','search']))->get();

        return view('listings.index', ['listings'=>$listings]);
    }

    //show single listing
    public function show($id)
    {
        $listing = Listing::find($id);

        if($listing){
            return view('listings.show', ['listing'=>$listing]);
        }else{
            return abort(404);
        }
    }



}
