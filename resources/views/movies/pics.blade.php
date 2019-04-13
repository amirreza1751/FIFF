@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white" style="float: right; text-align: right">
                        <a href="/workshops" class="btn btn-info float-left">
                            {{ __('بازگشت') }}
                        </a>
                        عکس ها
                    </div>
                    @foreach($pictures as $picture)
                        <p class="text-center">
                            <img src="{{$picture->path}}" width="300" alt="">
                        </p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection