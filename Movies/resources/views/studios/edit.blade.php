@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>{{ __('skeletons.modifying', ['model' => __('studios.studio')]) }}</h1>

        <!-- Error Message -->
        @include('layouts.errors')

        <!-- Form -->
        <form action="{{ route('studios.update', $studio) }}" method="POST">
            @csrf
            @method('PUT')
                <fieldset>
        <label for="$table->string("name",30);">
            {{ __('studios.$table->string("name",30);') }}
        </label>
        <input
            type="text"
            name="$table->string("name",30);"
            id="$table->string("name",30);"
            required
            placeholder="{{ __('studios.$table->string("name",30);') }}"
            value="{{ old('$table->string("name",30);', $studio->$table->string("name",30);) }}"
        >
    </fieldset>

            <!-- Save Button -->
            <button type="submit">{{ __('skeletons.save') }}</button>
            <!-- Cancel Button -->
            <a href="{{ route('studios.index') }}">{{ __('skeletons.cancel') }}</a>
        </form>
    </div>
@endsection
