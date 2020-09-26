@extends('layout')

@section('serial')

<h1 class="title">Insert your Note</h1>

<form method="post" action="/note">
    @csrf
    <label for="serial">Serial Number</label>
    <input type="text" id="serial" name="serial" placeholder="UE8128082906">
    <br />
    <label for="value">Value</label>
    <select name="value" id="value">
        <option value="5">5€</option>
        <option value="10">10€</option>
        <option value="20">20€</option>
        <option value="50">50€</option>
        <option value="100">100€</option>
        <option value="200">200€</option>
        <option value="500">500€</option>
    </select>
    <br />
    <label for="zip">Zip Code</label>
    <input type="text" id="zip" name="zip" placeholder="95100">
    <br />
    <input type="submit" value="submit">
</form>
<p class="erro-msg">{{ session('error-msg') }}</p>

@endsection('serial')