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
                        <span>{{ __('افزودن ورکشاپ') }}</span>
                    </div>
                    <div class="card-body" style="float: right; text-align: right;">
                        @if(Session::has('message'))
                            <p class="text-right alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                        @endif

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        <form method="post" action="/workshops/create" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="subject_fa" type="text" class="form-control{{ $errors->has('subject_fa') ? ' is-invalid' : '' }}" name="subject_fa"  required autofocus>

                                    @if ($errors->has('subject_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="subject_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('عنوان ورکشاپ') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="subject_en" type="text" class="form-control{{ $errors->has('subject_en') ? ' is-invalid' : '' }}" name="subject_en"  required autofocus>

                                    @if ($errors->has('subject_en'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('subject_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="subject_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('عنوان ورکشاپ به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="category_fa" type="text" class="form-control{{ $errors->has('category_fa') ? ' is-invalid' : '' }}" name="category_fa"  required autofocus>

                                    @if ($errors->has('category_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('category_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="category_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('دسته بندی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="category_en" type="text" class="form-control{{ $errors->has('category_en') ? ' is-invalid' : '' }}" name="category_en"  required autofocus>

                                    @if ($errors->has('category_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="category_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('دسته بندی به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="teacher_name_fa" type="text" class="form-control{{ $errors->has('teacher_name_fa') ? ' is-invalid' : '' }}" name="teacher_name_fa"  required autofocus>

                                    @if ($errors->has('teacher_name_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('teacher_name_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="teacher_name_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام مدرس') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="teacher_name_en" type="text" class="form-control{{ $errors->has('teacher_name_en') ? ' is-invalid' : '' }}" name="teacher_name_en"  required autofocus>

                                    @if ($errors->has('teacher_name_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('teacher_name_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="teacher_name_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام مدرس به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="teacher_info_fa" type="text" class="form-control{{ $errors->has('teacher_info_fa') ? ' is-invalid' : '' }}" name="teacher_info_fa"  required autofocus>

                                    @if ($errors->has('teacher_info_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('teacher_info_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="teacher_info_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('اطلاعات مدرس') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="teacher_info_en" type="text" class="form-control{{ $errors->has('teacher_info_en') ? ' is-invalid' : '' }}" name="teacher_info_en"  required autofocus>

                                    @if ($errors->has('teacher_info_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('teacher_info_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="teacher_info_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('اطلاعات مدرس به انگلیسی') }}</label>
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
                                <label for="link_hls" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('لینک ویدیو hls') }}</label>
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
                                <label for="link_dash" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('لینک ویدیو Dash') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="text_fa" type="text" class="form-control{{ $errors->has('text_fa') ? ' is-invalid' : '' }}" name="text_fa"  required autofocus>

                                    @if ($errors->has('text_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('text_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="text_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('توضیحات') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="text_en" type="text" class="form-control{{ $errors->has('text_en') ? ' is-invalid' : '' }}" name="text_en"  required autofocus>

                                    @if ($errors->has('text_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('text_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="text_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('توضیحات به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="country_fa" type="text" class="form-control{{ $errors->has('country_fa') ? ' is-invalid' : '' }}" name="country_fa"  required autofocus>

                                    @if ($errors->has('country_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="country_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('کشور مدرس') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="country_en" type="text" class="form-control{{ $errors->has('country_en') ? ' is-invalid' : '' }}" name="country_en"  required autofocus>

                                    @if ($errors->has('country_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="country_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('کشور مدرس به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="festival_number" type="text" class="form-control{{ $errors->has('festival_number') ? ' is-invalid' : '' }}" name="festival_number"  required autofocus>

                                    @if ($errors->has('festival_number'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('festival_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="festival_number" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('دوره ی جشنواره') }}</label>
                            </div>




                            <div class="input-group control-group increment" >
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                            </div>
                            {{--<div class="clone hide">--}}
                                {{--<div class="control-group input-group" style="margin-top:10px">--}}
                                    {{--<input type="file" name="filename[]" class="form-control" required>--}}
                                    {{--<div class="input-group-btn">--}}
                                        {{--<button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}




                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('افزودن ورکشاپ') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function() {

            $(".btn-success").click(function(){
                // var html = $(".clone").html();
                var html = '<div class="clone hide">\n' +
                    '                                <div class="control-group input-group" style="margin-top:10px">\n' +
                    '                                    <input type="file" name="filename[]" class="form-control" required>\n' +
                    '                                    <div class="input-group-btn">\n' +
                    '                                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>\n' +
                    '                                    </div>\n' +
                    '                                </div>\n' +
                    '                            </div>';
                $(".increment").after(html);
            });

            $("body").on("click",".btn-danger",function(){
                $(this).parents(".control-group").remove();
            });

        });

    </script>
@endsection