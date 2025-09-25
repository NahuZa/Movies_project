@extends('layout')

@section('content')
<h1>Új film</h1>

<form action="{{route('movies.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">Film címe: </label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="categories_id">Kategória:</label>
        <select name="categories_id" id="select-category" title="Kategóriák">
            <option value="0">Válassz kategóriát</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
    </fieldset>
    <fieldset>
        <label for="description">Leírás: </label>
        <input type="text" name="description" id="description">
    </fieldset>
    <fieldset>
        <label for="pic_path">Borítókép: </label>
        <input type="img" name="pic_path" id="pic_path">
    </fieldset>
    <fieldset>
        <label for="length">Hossza: </label>
        <input type="text" name="length" id="length">
    </fieldset>
    <fieldset>
        <label for="release_date">Megjelenés: </label>
        <input type="text" name="release_date" id="release_date">
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection
