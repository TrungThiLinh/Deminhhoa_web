@extends('layouts.app')
@section('main-content')
<div class="container">
    <form class="row g-3" method="POST" action="{{ url('/edit/'.$students->id) }}">
        @csrf
        <div class="col-md-6">
            <label for="inputId" class="form-label">ID</label>
            <input type="text" class="form-control" id="ID" name="id" value="{!! $students->id !!}" readonly>
        </div>
        <div class="col-md-12">
            <label for="inputFullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="Fullname" name="fullname" value="{!! $students->fullname !!}">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="Address" name="address" value="{!! $students->address !!}">
        </div>
        <div class="col-md-12">
            <label for="inputBirthday" class="form-label">Birthday</label>
            <input type="date" class="form-control" id="Birthday" name="birthday" value="{!! $students->birthday !!}">
        </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Save</button>
        </div>
    </form>
</div>
@endsection
