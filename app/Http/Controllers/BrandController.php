<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use App\Models\Brand;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandController extends Controller
{
    function BrandPage(){
        return view('pages.product-by-brand');
    }

    function BrandList():JsonResponse
    {
        $data=Brand::all();
        return ResponseHelper::Out('success',$data,'200');
    }
}
