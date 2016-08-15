@extends('layout.layout')

@section('title')
  Help
@stop

@section('body')
  <h2>Help</h2>
  <p>{{$companyname}}
  </p>
  @if($isUserRegistered == true)
    <p>Hello mate!</p>
  @else
    <p>Please register!</p>
  @endif

  @for ($i = 0; $i < 10; $i++)
    <p>The current value is {{ $i }}</p>
  @endfor

  @foreach($users as $data)
    <p>{{$data}}</p>
  @endforeach

  <button type="button" class="btn btn-default">Default</button>
@stop
