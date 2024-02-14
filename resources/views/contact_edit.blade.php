@extends('master')

@section('content')
     <div class="card">
        <div class="card-body">
            <div class="card-title texte-centertexte-center">
                <h2> Edit Contact</h2>
            </div>
            <form action="{{route('contacts.update', ['contact' => $contact])}}" method="post">
               @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input class="form-control" type="text"  name="name"id="name" value="{{$contact->name}}">
                </div>
                <div class="mb-3">
                     <label for="email" class="form-label">Email</label>
                    <input  class="form-control" type="text" name="email" id="email" value="{{$contact->email}}">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact</label>
                    <input class="form-control" type="numeric" name="contact" id="contact" value="{{$contact->contact}}">
                </div>
                <button class="btn" class="btn" class="btn">Submit</button>
            </form>
        </div>
@endsection