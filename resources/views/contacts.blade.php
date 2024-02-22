@extends('master')

@section('content')
<h2> Contacts</h2>

<ul class="list-group list-group-flush">
    @foreach($contacts as $contact)
        <li class="list-group-item">
            <div class="border border-1">
                <div class="container">
               <a class="text-body-secondary" href="{{ route('contact.show',['contact' => $contact->name]) }}">{{$contact->name}}</a> 
                <div>
                    <form action="{{ route('contact.destroy',['contact' => $contact->id]) }}" method = "post">
                        @csrf
                        <a class="btn" href="{{ route('contact.edit',['contact' => $contact->name]) }}">EDIT</a>
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn" type="submit">DELETE</button>
                    </form>
                        
                    </div>
                </div>
            </div>
        </li>
    @endforeach
    
</ul>
<a class="text-body-secondary" href="{{route('contact.create')}}">Create</a>

@endsection