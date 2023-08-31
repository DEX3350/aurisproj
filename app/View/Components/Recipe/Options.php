<?php

namespace App\View\Components\Recipe;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Options extends Component
{
    /**
     * Create a new component instance.
     */
    /**
* Create a new component instance.
*/
    private int $recipeId;
    private int $userId;

    public function __construct(int $recipeId, int $userId)
    {
        $this->recipeId = $recipeId;
        $this->userId = $userId;
    
    }
    /**
    * Get the view / contents that represent the component.
    */
    public function render(): View|Closure|string{
        return view('components.recipe.options')
        ->with('recipeId',$this->recipeId)
        ->with('myRecipe', \Illuminate\Support\Facades\Auth::id() === $this->userId);
    
    }
    
}
