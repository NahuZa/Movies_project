@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Page Title -->
        <h1>{{ __('skeletons.details_of', ['model' => 'director']) }}</h1>

        <!-- Data Display -->
        <ul>
                <li>
        <strong>{{ __('directors.$table->string("name",30);') }}:</strong>
        {{ $director->$table->string("name",30); }}
    </li>
        </ul>
        <!-- Back Button -->
        <a href="{{ route('directors.index') }}">{{ __('skeletons.back') }}</a>
    </div>
@endsection
