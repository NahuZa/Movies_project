@extends('layout')

@section('content')
<h1>Új stúdió</h1>

<form action="{{route('studios.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">Stúdió neve: </label>
        <input type="text" name="name" id="name">
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection
