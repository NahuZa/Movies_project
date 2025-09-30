@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>{{ __('skeletons.creating', ['model' => strtolower(__('directors.director'))]) }}</h1>

        <!-- Success Message -->
        @include('layouts.success')

        <!-- Error Message -->
        @include('layouts.errors')

        <!-- Form -->
        <form action="{{ route('directors.store') }}" method="POST">
            @csrf
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
            value="{{ old('$table->string("name",30);') }}"
        >
    </fieldset>

            <!-- Save Button -->
            <button type="submit">{{ __('skeletons.save') }}</button>
            <!-- Cancel Button -->
            <a href="{{ route('directors.index') }}">{{ __('skeletons.cancel') }}</a>
        </form>
    </div>
@endsection
