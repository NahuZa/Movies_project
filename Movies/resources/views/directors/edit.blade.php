@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>{{ __('skeletons.modifying', ['model' => __('directors.director')]) }}</h1>

        <!-- Error Message -->
        @include('layouts.errors')

        <!-- Form -->
        <form action="{{ route('directors.update', $director) }}" method="POST">
            @csrf
            @method('PUT')
                <fieldset>
        <label for="$table->string("name",30);">
            {{ __('directors.$table->string("name",30);') }}
        </label>
        <input
            type="text"
            name="$table->string("name",30);"
            id="$table->string("name",30);"
            required
            placeholder="{{ __('directors.$table->string("name",30);') }}"
            value="{{ old('$table->string("name",30);', $director->$table->string("name",30);) }}"
        >
    </fieldset>

            <!-- Save Button -->
            <button type="submit">{{ __('skeletons.save') }}</button>
            <!-- Cancel Button -->
            <a href="{{ route('directors.index') }}">{{ __('skeletons.cancel') }}</a>
        </form>
    </div>
@endsection
