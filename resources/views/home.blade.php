@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a class="btn btn-primary btn-block" href="/workshops">ورکشاپ ها</a>
                        <a class="btn btn-primary btn-block" href="/media-items">آیتم های ویدیویی</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
