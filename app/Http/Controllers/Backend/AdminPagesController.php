<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductImage;
use Image;

class AdminPagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.index');
    }

    
}
