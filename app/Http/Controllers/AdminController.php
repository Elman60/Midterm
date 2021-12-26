<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function store(Request $request)
    {
        Item::create([
            'group_id' => $request->group_id ?? '1',
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect()->back();
    }
}
