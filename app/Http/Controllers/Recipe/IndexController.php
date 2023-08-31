<?php

namespace App\Http\Controllers\recipe;

use App\Http\Controllers\Controller;
use App\Services\RecipeService;
use Illuminate\Http\Request;
use App\Models\Recipe;

class IndexController extends Controller
{
    public function a(request $request, RecipeService $recipeService)
    {
        $recipes = Recipe::orderBy('created_at','DESC')->get();
        $recipeService = new RecipeService();
        $recipes = $recipeService->getRecipes();

        return view('recipe.index')->with('recipes',$recipes);
    }
}
