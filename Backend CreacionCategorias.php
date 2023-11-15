<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function createCategory(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $productsAssociated = $request->input('products_associated');

        $category = new Category;
        $category->name = $name;
        $category->description = $description;
        $category->products_associated = $productsAssociated;
        $category->save();

        return response()->json(['message' => 'Categoría creada correctamente'], 201);
    }
}