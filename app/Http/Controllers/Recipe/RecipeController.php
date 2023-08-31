<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;

class RecipeController extends Controller
{
    public function toggleFavorite($recipeId) {
        $recipe = Recipe::findOrFail($recipeId);

        if ($recipe->isFavoritedByUser(Auth::user())) {
            Auth::user()->favoriteRecipes()->detach($recipe);
        } else {
            Auth::user()->favoriteRecipes()->attach($recipe);
        }

        return redirect()->back();
    }
}
