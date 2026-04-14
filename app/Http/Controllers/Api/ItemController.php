<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {
        return response()->json([
            'status' => 'success',
            'data' => Item::all(),
            'server' => gethostname() 
        ]);
    }
    public function store(Request $request) {
        $item = Item::create([
            'name' => $request->name
        ]);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Data added successfully',
            'data' => $item
        ], 201);
    }
    public function getServer() {
        return response()->json([
            'hostname' => gethostname(),
            'message' => 'Response from backend server'
        ]);
    }
}