@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>{{ __('skeletons.modifying', ['model' => __('categories.category')]) }}</h1>

        <!-- Error Message -->
        @include('layouts.errors')

        <!-- Form -->
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
                <fieldset>
        <label for="category',30);">
            {{ __('categories.category',30);') }}
        </label>
        <input
            type="text"
            name="category',30);"
            id="category',30);"
            required
            placeholder="{{ __('categories.category',30);') }}"
            value="{{ old('category',30);', $category->category',30);) }}"
        >
    </fieldset>

            <!-- Save Button -->
            <button type="submit">{{ __('skeletons.save') }}</button>
            <!-- Cancel Button -->
            <a href="{{ route('categories.index') }}">{{ __('skeletons.cancel') }}</a>
        </form>
    </div>
@endsection
