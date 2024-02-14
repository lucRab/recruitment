@extends('master')

@section('content')
<div class="card">
        <div class="card-body">
            <div class="card-title texte-centertexte-center">
                <h2> Create Contact</h2>
            </div>
            <form action="{{route('contacts.store')}}" method="POST">
               @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text"  name="name"id="name">
                </div>
                <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                    <input  class="form-control" type="text" name="email" id="email">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input class="form-control" type="numeric" name="contact" id="contact" >
                </div>
                <button class="btn" class="btn" class="btn">Submit</button>
            </form>
        </div>
@endsection
