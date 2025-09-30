@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>{{ __('skeletons.modifying', ['model' => __('actors.actor')]) }}</h1>

        <!-- Error Message -->
        @include('layouts.errors')

        <!-- Form -->
        <form action="{{ route('actors.update', $actor) }}" method="POST">
            @csrf
            @method('PUT')
                <fieldset>
        <label for="name',30);">
            {{ __('actors.name',30);') }}
        </label>
        <input
            type="text"
            name="name',30);"
            id="name',30);"
            required
            placeholder="{{ __('actors.name',30);') }}"
            value="{{ old('name',30);', $actor->name',30);) }}"
        >
    </fieldset>
    <fieldset>
        <label for="gender">
            {{ __('actors.gender') }}
        </label>
        <input
            type="text"
            name="gender"
            id="gender"
            required
            placeholder="{{ __('actors.gender') }}"
            value="{{ old('gender', $actor->gender) }}"
        >
    </fieldset>

            <!-- Save Button -->
            <button type="submit">{{ __('skeletons.save') }}</button>
            <!-- Cancel Button -->
            <a href="{{ route('actors.index') }}">{{ __('skeletons.cancel') }}</a>
        </form>
    </div>
@endsection
