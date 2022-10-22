<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Unique;

class ListingController extends Controller
{
    //show all listing
    public function index(Request $request)
    {
        $listings = Listing::latest()->filter(request(['tag', 'search']))->paginate(4);

        return view('listings.index', ['listings' => $listings]);
    }

    //show single listing
    public function show($id)
    {
        $listing = Listing::find($id);

        if ($listing) {
            return view('listings.show', ['listing' => $listing]);
        } else {
            return abort(404);
        }
    }

    //display create form
    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'title' => 'required',
            'company' => [
                'required',
                Rule::unique('listings', 'company')
            ],
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($validated_data);

        return redirect()->route('listing.create')->with('success', 'Listing created successfully!');
    }
}
