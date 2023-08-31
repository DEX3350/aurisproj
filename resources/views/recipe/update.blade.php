<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>レシピを編集する</h1>
    <div>
        <a href="{{ route('recipe.index') }}">戻る</a>
        <p>FEED</p>
        @if(session('feedback.success'))
            <p style="color: green">{{ session('feedback.success') }}</p>          
        @endif
        <form action="{{ route('recipe.update.put',['recipeId' => $recipe->id]) }}" method='post'>
            @method('put')
            @csrf
            <label for="recipe-content">レシピ</label>
            <span>140文字まで</span>
            <textarea id="recipe-content" type="text" name="recipe" placeholder="入力してください">{{ $recipe->content }}</textarea>
            @error('recipe')
                <p style="color:red;">{{ $message }}</p>
            @enderror
            <button type="submit">POST</button>
        </form>
    </div>
    
</body>
</html>