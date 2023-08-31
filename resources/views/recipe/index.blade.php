<x-layout title="TOP | 料理アプリ">
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">
            
            料理アプリ
        </h2>
        <x-recipe.form.post></x-recipe.form.post>
        <x-recipe.list :recipes="$recipes"></x-recipe.list>
    </x-layout.single>
</x-layout>
