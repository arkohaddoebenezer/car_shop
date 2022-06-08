@extends('layouts.users')
@section('content')
    <h1>Upload</h1>
    <form method="POST" style="width: 50%;"  action="/upload" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <input type="text" name="name" :value="old('name')" autofocusid="name" placeholder="Car Name"
                class="border p-3 w-100 my-2">
            <input type="text" name="model" autocomplete="model" placeholder="Car model"
                class="border p-3 w-100 my-2">
            <input type="text" name="transmission" autocomplete="transmission" placeholder="Car transmission"
                class="border p-3 w-100 my-2">
            <input type="text" name="type" autocomplete="type" placeholder="Car type" class="border p-3 w-100 my-2">
            <input type="text" name="fuelType" autocomplete="fuelType" placeholder="Car fuel type"
                class="border p-3 w-100 my-2">
            <input type="text" name="no_of_passengers" placeholder="no of passengers" class="border p-3 w-100 my-2">
            <label for="photo">Upload Photos</label>
            <input id="photo" type="file" name="photo" class="border p-3 w-100 my-2">


            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Add
                Car</button>
        </fieldset>

    </form>
    <iframe width="551" height="351" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vS-3ZJ5UvNPF0oaYBBkXw4xPwwDLvV7VMB2wqzbJ1FYF55i8SJNVRE-3qVMDROU0sy-P_zPINq81q0m/pubchart?oid=386308849&amp;format=interactive"></iframe>
@endsection
