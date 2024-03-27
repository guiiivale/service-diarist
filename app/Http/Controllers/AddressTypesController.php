<?php

namespace App\Http\Controllers;

use App\AddressType;
use Illuminate\Http\Request;

class AddressTypesController extends Controller
{
    public function all()
    {
        return response()->json(['types' => AddressType::toArray()], 200);
    }
}
