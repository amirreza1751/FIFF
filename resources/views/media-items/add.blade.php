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
                        <span>{{ __('افزودن آیتم های ویدیویی') }}</span>
                    </div>
                    <div class="card-body" style="float: right; text-align: right;">
                        @if(Session::has('message'))
                            <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif
                        <form method="post" action="/media-items/create" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="title_fa" type="text" class="form-control{{ $errors->has('title_fa') ? ' is-invalid' : '' }}" name="title_fa"  required autofocus>

                                    @if ($errors->has('title_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="title_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('عنوان') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="title_en" type="text" class="form-control{{ $errors->has('title_en') ? ' is-invalid' : '' }}" name="title_en"  required autofocus>

                                    @if ($errors->has('title_en'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('title_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="title_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('عنوان به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="description_fa" type="text" class="form-control{{ $errors->has('description_fa') ? ' is-invalid' : '' }}" name="description_fa"  required autofocus>--}}
                                    <textarea name="description_fa" id="" cols="30" rows="5" class="form-control"></textarea>
                                    @if ($errors->has('description_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('description_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="description_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('توضیحات') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="description_en" type="text" class="form-control{{ $errors->has('description_en') ? ' is-invalid' : '' }}" name="description_en"  required autofocus>--}}
                                    <textarea name="description_en" id="" cols="30" rows="5" class="form-control"></textarea>
                                    @if ($errors->has('description_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="description_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('توضیحات به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="link_hls" type="text" class="form-control{{ $errors->has('link_hls') ? ' is-invalid' : '' }}" name="link_hls"  required autofocus>

                                    @if ($errors->has('link_hls'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('link_hls') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="link_hls" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('hls لینک') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="link_dash" type="text" class="form-control{{ $errors->has('link_dash') ? ' is-invalid' : '' }}" name="link_dash"  required autofocus>

                                    @if ($errors->has('link_dash'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('link_dash') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="link_dash" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('dash لینک') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="type" type="text" class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type"  required autofocus>--}}
                                    <select name="type" id="" class="form-control">
                                        <option value="نشست تخصصی">نشست تخصصی</option>
                                        <option value="مصاحبه تخصصی">مصاحبه تخصصی</option>
                                    </select>
                                    @if ($errors->has('type'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="type" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نوع آیتم') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class=" col-md-8 control-group " >
                                    <input id="image1" type="file" required name="filename[]" class="form-control">
                                </div>
                                <label for="image1" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('تصویر بند انگشتی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="input-group col-md-8 control-group increment" >
                                    <input id="image2" type="file" required name="filename[]" class="form-control">
                                </div>
                                <label for="image2" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('تصویر بزرگ') }}</label>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('ثبت تغییرات') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection