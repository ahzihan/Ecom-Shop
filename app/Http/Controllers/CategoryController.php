<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    function CategoryPage(){
        return view('pages.product-by-category');
    }

    function CategoryList(): JsonResponse
    {
        $data = Category::all();
        return ResponseHelper::Out('success', $data, '200');
    }

}
