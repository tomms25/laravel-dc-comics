@extends('layouts.main-layout')

@section('content')
    
    <h1>New person</h1>
    <form method="POST" action="{{ route('person.store') }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="description">Description</label>
        <input type="text" name="description">
        <br>
        <label for="priority">Priority</label>
        <input type="text" name="priority">
        <br>
        <input type="submit" value="CREATE NEW PERSON">
    </form>

@endsection