<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Services\RecipeService;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;


class DeleteController extends Controller
{
    public function e(Request $request, RecipeService $recipeService){
        $recipeId = (int) $request->route('recipeId');
        if (!$recipeService->checkOwnRecipe($request->user()->id, $recipeId)) {
            throw new AccessDeniedHttpException();
       }
        $recipes = Recipe::where('id', $recipeId)->firstOrFail();
        $recipes->delete();
        return redirect()
            ->route('recipe.index')
            ->with('feedback.success', "削除しました。");
    }
}
