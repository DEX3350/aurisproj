<?php

namespace App\Http\Controllers\Recipe\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recipe\UpdateRequest;
use Illuminate\Http\Request;
use App\Services\RecipeService;
use App\Models\Recipe;
// use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class IndexController extends Controller
{
    public function d(Request $request, RecipeService $recipeService){
        if (!$recipeService->checkOwnRecipe($request->user()->id, $recipeId)) {
             throw new AccessDeniedHttpException();
        }
        $recipe = Recipe::where('id',$recipeId)->firstOrFail();
        $recipe->content = $request->recipe();
        $recipe->save();
        return redirect()
            ->route('recipe.update.index',['recipeId' => $recipe->id])
            ->with('feedback.success','編集しました');
    }

}
