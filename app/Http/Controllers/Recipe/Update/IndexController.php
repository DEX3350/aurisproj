<?php

namespace App\Http\Controllers\Recipe\Update;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\RecipeService;
use App\Models\Recipe;
// use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    public function c(Request $request, RecipeService $recipeService){
        $recipeId = (int) $request->route('recipeId');
        if (!$recipeService->checkOwnRecipe($request->user()->id, $recipeId)) {
             throw new AccessDeniedHttpException();
        }
        $recipe = Recipe::where('id',$recipeId)->firstOrFail();
        return view('recipe.update')->with('recipe', $recipe);
    }

}
