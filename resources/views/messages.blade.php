
@extends('layout.app')


@section('content')

<h1>messages</h1>

    @if(count($messages) > 0)
          @foreach($messages as $message)
             <ul class="list-group">
                  <li class="list-group-item">Name: {{$message->name}}</li>
                  <li class="list-group-item">email: {{$message->email}}</li>
                  <li class="list-group-item">message: {{$message->message}}</li>
             </ul>
          @endforeach
    @endif

@endsection
@section('sidebar')
<p>mfflkvl</p>
@endsection
