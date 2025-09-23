@extends('layout')

@section('content')
<h1>Új színész</h1>

<form action="{{route('actors.store')}}" method="post">
    @csrf
    <fieldset>
        <label for="name">Színész neve: </label>
        <input type="text" name="name" id="name">
    </fieldset>
    <fieldset>
        <label for="gender">Nem: </label>
        <select name="gender" required>
            <option value="N">Nő</option>
            <option value="F">Férfi</option>
        </select>
    </fieldset>
    <button type="submit">Ment</button>
</form>
@endsection
