@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white" style="float: right; text-align: right">
                        <a href="/media-items" class="btn btn-info float-left">
                            {{ __('بازگشت') }}
                        </a>
                        {{$mediaItem->title_fa}}
                    </div>

                    <h3 class="text-center"></h3>
                    <p class="text-center"><img src="{{$mediaItem->pic1}}" width="300" alt="بند انگشتی"></p> <p class="text-center">عکس بند انگشتی</p>
                    <p class="text-center"><img src="{{$mediaItem->pic2}}" width="300" alt="بزرگ"></p><p class="text-center">عکس بزرگ</p>
                </div>
            </div>
        </div>
    </div>
@endsection