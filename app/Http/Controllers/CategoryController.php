<?php

namespace App\Http\Controllers;
use App\Models\Category;


class CategoryController extends Controller
{
    //get all
    public function all()
    {
        $categories = Category::all();
        return response()->json($categories);
    }
}
