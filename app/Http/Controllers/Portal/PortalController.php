<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\GoodCategory;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {

        return view('portal.index');

    }
}
