@extends('layouts.main-layout')

@section('content')
    
    <h1>New person</h1>
    <form method="POST" action="{{ route('person.update', $person) }}">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value={{ $person -> name }}>
        <br>
        <label for="description">Description</label>
        <input type="text" name="description" value={{ $person -> description }}>
        <br>
        <label for="priority">Priority</label>
        <input type="text" name="priority" value={{ $person -> priority }}>
        <br>
        <input type="submit" value="UPDATE TASK">
    </form>

@endsection