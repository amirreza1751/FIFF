@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-right">پنل ادمین</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="text-center">
                            <a class="btn btn-primary" href="/movies">فیلم ها</a>
                            <a class="btn btn-primary" href="/workshops">ورکشاپ ها</a>
                            <a class="btn btn-primary" href="/media-items">آیتم های ویدیویی(مصاحبه ها و نشست ها)</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
