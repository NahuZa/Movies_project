@extends('layout')

@section('content')
<h1>Új kategória</h1>

<form action="{{route('categories.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="category">Kategória: </label>
        <input type="text" name="category" id="category">
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection
