<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Recipe\CreateRequest;
use App\Models\Recipe;

class CreateController extends Controller
{
    public function b(CreateRequest $request)
    {
        $recipe = new Recipe;
        $recipe->user_id = $request->userId();
        $recipe->content = $request->recipe();
        $recipe->save();
        return redirect()->route('recipe.index');
    }
}
