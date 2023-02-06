@extends('layouts.main-layout')

@section('content')
    
    <h1>person: {{ $person -> name }}</h1>
    <h2>Priority: {{ $person -> priority }}/10</h2>
    <span>
        {{ 
            $person -> description 
            ? $person -> description 
            : "- no description -"
        }}
    </span>

@endsection