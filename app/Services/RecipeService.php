<?php
namespace App\Services;
use App\Models\Recipe;

class RecipeService
{
    public function getRecipes()
    {
        return Recipe::orderBy('created_at','DESC')->get();
    }
    public function checkOwnRecipe(int $userId, int $recipeId): bool
    {
        $recipe = Recipe::where('id', $recipeId)->first();
        if (!$recipe) {
            return false; 
        }
        return $recipe->user_id === $userId;
    }
}