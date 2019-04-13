@extends('layouts.app')

@section('content')
    @foreach($pictures as $picture)
        <img src="{{$picture->path}}" width="300" alt="">
    @endforeach
@endsection