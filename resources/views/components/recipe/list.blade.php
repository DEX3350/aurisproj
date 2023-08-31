@props([
    'recipes' => []
])

<div class="bg-white rounded-md shadow-lg mt-5 mb-5">
    <ul>
        @foreach($recipes as $recipe)
            <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
                <div>
                    <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">
                        {{ $recipe->user->name }}
                    </span>
                    <p class="text-gray-500">{!! nl2br(e($recipe->content)) !!}</p>
                </div>
                <div>
                    <x-options :recipeId="$recipe->id" :userId="$recipe->user_id">
                    </x-options>
                </div>
            </li>
        @endforeach
    </ul>
</div>
