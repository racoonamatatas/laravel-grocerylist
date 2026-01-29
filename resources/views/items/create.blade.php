@extends('layouts.app')

@section('create', 'Page Title')

@section('content')
<h1>Create New Item</h1>
<form action="{{ route('items.store') }}" method="POST">
    @csrf
    <label for="name">Naam:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="description">Beschrijving:</label>
    <textarea id="description" name="description"></textarea>
    <br>
    <button type="submit">Opslaan</button>
</form>
@endsection