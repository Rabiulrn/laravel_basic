<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers;

use App\Example as AppExample;
use Illuminate\Http\Request;
use App\Models\Example;

class ExampleController extends Controller
{
    public function index()
    {
        $examples = AppExample::all();
        return view('examples.index', compact('examples'));
    }
}
