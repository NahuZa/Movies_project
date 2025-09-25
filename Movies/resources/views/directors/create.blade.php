@extends('layout')

@section('content')
<h1>Új rendező</h1>

<form action="{{route('directors.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">Rendező neve: </label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection
