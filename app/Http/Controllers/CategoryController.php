<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function addCategory() //add category page
    {
        return view('admin.category.addCategory');
    }

    public function newCategory(Request $request)
    {
        Category::saveCategoryInfo($request); //linke Category model
        return redirect('/category/add-category')->with('message', 'Category insert Successfully');
    }
}
