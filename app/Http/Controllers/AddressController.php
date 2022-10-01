<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function getAllAddress(){
        $data['Address'] = address::getAllAddress();
        return response(
            $data,
            200
        );
    }
}
