@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-secondary">
                    <div class="card-header bg-primary text-white" style="float: right; text-align: right">
                        <a href="/movies" class="btn btn-info float-left">
                            {{ __('بازگشت') }}
                        </a>
                        <span>{{ __('افزودن فیلم') }}</span>
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

                        <form method="post" action="/movies/create" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="name_fa" type="text" class="form-control{{ $errors->has('name_fa') ? ' is-invalid' : '' }}" name="name_fa"  required autofocus>

                                    @if ($errors->has('name_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="name_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام فیلم') }}</label>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="name_en" type="text" class="form-control{{ $errors->has('name_en') ? ' is-invalid' : '' }}" name="name_en"  required autofocus>

                                    @if ($errors->has('name_en'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="name_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام فیلم به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="director_name_fa" type="text" class="form-control{{ $errors->has('director_name_fa') ? ' is-invalid' : '' }}" name="director_name_fa"  required autofocus>

                                    @if ($errors->has('director_name_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('director_name_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="director_name_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام کارگردان') }}</label>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="director_name_en" type="text" class="form-control{{ $errors->has('director_name_en') ? ' is-invalid' : '' }}" name="director_name_en"  required autofocus>

                                    @if ($errors->has('director_name_en'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('director_name_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="director_name_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام کارگردان به انگلیسی') }}</label>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="producer_name_fa" type="text" class="form-control{{ $errors->has('producer_name_fa') ? ' is-invalid' : '' }}" name="producer_name_fa"  required autofocus>

                                    @if ($errors->has('producer_name_fa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('producer_name_fa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="producer_name_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام تهیه کننده') }}</label>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="producer_name_en" type="text" class="form-control{{ $errors->has('producer_name_en') ? ' is-invalid' : '' }}" name="producer_name_en"  required autofocus>

                                    @if ($errors->has('producer_name_en'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('producer_name_en') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="producer_name_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نام تهیه کننده به انگلیسی') }}</label>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="length" type="text" class="form-control{{ $errors->has('length') ? ' is-invalid' : '' }}" name="length"  required autofocus>

                                    @if ($errors->has('length'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('length') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="length" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('مدت زمان فیلم') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="format" type="text" class="form-control{{ $errors->has('format') ? ' is-invalid' : '' }}" name="format"  required autofocus>

                                    @if ($errors->has('format'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('format') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="format" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('فرمت') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="type_fa" type="text" class="form-control{{ $errors->has('type_fa') ? ' is-invalid' : '' }}" name="type_fa"  required autofocus>--}}
                                    <select name="type_fa" id="type_fa" class="form-control">
                                        <option value="سینمایی بلند">سینمایی بلند</option>
                                        <option value="مستند کوتاه">مستند کوتاه</option>
                                        <option value="مستند نیمه بلند">مستند نیمه بلند</option>
                                        <option value="مستند بلند">مستند بلند</option>
                                        <option value="فیلم های کوتاه">فیلم های کوتاه</option>
                                    </select>
                                    @if ($errors->has('type_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="type_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نوع فیلم') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="type_en" type="text" class="form-control{{ $errors->has('type_en') ? ' is-invalid' : '' }}" name="type_en"  required autofocus>

                                    @if ($errors->has('type_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="type_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('نوع فیلم به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="genre_fa" type="text" class="form-control{{ $errors->has('genre_fa') ? ' is-invalid' : '' }}" name="genre_fa"  required autofocus>

                                    @if ($errors->has('genre_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genre_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="genre_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('ژانر') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="genre_en" type="text" class="form-control{{ $errors->has('genre_en') ? ' is-invalid' : '' }}" name="genre_en"  required autofocus>
                                    {{--<textarea name="teacher_info_fa" id="" cols="30" rows="5" class="form-control"></textarea>--}}

                                    @if ($errors->has('genre_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('genre_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="genre_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('ژانر به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="product_year_fa" type="text" class="form-control{{ $errors->has('product_year_fa') ? ' is-invalid' : '' }}" name="product_year_fa"  required autofocus>
                                    {{--<textarea name="product_year_fa" id="" cols="30" rows="5" class="form-control"></textarea>--}}

                                    @if ($errors->has('product_year_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_year_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="product_year_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('سال تولید شمسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="product_year_en" type="text" class="form-control{{ $errors->has('product_year_en') ? ' is-invalid' : '' }}" name="product_year_en"  required autofocus>

                                    @if ($errors->has('product_year_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('product_year_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="product_year_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('سال تولید میلادی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="summary_fa" type="text" class="form-control{{ $errors->has('summary_fa') ? ' is-invalid' : '' }}" name="summary_fa"  required autofocus>--}}
                                    <textarea name="summary_fa" id="summary_fa" cols="30" rows="5" class="form-control"></textarea>

                                    @if ($errors->has('summary_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('summary_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="summary_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('خلاصه') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="summary_en" type="text" class="form-control{{ $errors->has('summary_en') ? ' is-invalid' : '' }}" name="summary_en"  required autofocus>--}}
                                    <textarea name="summary_en" id="summary_en" cols="30" rows="5" class="form-control"></textarea>

                                    @if ($errors->has('summary_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('summary_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="summary_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('خلاصه به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="country_fa" type="text" class="form-control{{ $errors->has('country_fa') ? ' is-invalid' : '' }}" name="country_fa"  required autofocus>
                                    {{--<textarea name="text_en" id="" cols="30" rows="5" class="form-control"></textarea>--}}

                                    @if ($errors->has('country_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="country_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('کشور') }}</label>
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
                                <label for="country_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('کشور به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="show_subject_fa" type="text" class="form-control{{ $errors->has('show_subject_fa') ? ' is-invalid' : '' }}" name="show_subject_fa"  required autofocus>

                                    @if ($errors->has('show_subject_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('show_subject_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="show_subject_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('موضوع اکران') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="show_subject_en" type="text" class="form-control{{ $errors->has('show_subject_en') ? ' is-invalid' : '' }}" name="show_subject_en"  required autofocus>

                                    @if ($errors->has('show_subject_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('show_subject_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="show_subject_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('موضوع اکران به انگلیسی') }}</label>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="show_date_fa" type="text" class="form-control{{ $errors->has('show_date_fa') ? ' is-invalid' : '' }}" name="show_date_fa"  required autofocus>

                                    @if ($errors->has('show_date_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('show_date_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="show_date_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('تاریخ اکران') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="show_date_en" type="datetime-local" class="form-control{{ $errors->has('show_date_en') ? ' is-invalid' : '' }}" name="show_date_en"  required autofocus>

                                    @if ($errors->has('show_date_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('show_date_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="show_date_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('تاریخ اکران به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="awards_fa" type="text" class="form-control{{ $errors->has('awards_fa') ? ' is-invalid' : '' }}" name="awards_fa"  required autofocus>--}}
                                    <textarea name="awards_fa" id="awards_fa" cols="30" rows="5" class="form-control"></textarea>

                                    @if ($errors->has('awards_fa'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('awards_fa') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="awards_fa" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('جوایز') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="awards_en" type="text" class="form-control{{ $errors->has('awards_en') ? ' is-invalid' : '' }}" name="awards_en"  required autofocus>--}}
                                    <textarea name="awards_en" id="awards_en" cols="30" rows="5" class="form-control"></textarea>

                                    @if ($errors->has('awards_en'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('awards_en') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="awards_en" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('جوایز به انگلیسی') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="poster" type="text" class="form-control{{ $errors->has('poster') ? ' is-invalid' : '' }}" name="poster"  required autofocus>--}}
                                    <div class="input-group control-group" >
                                        <input type="file" name="poster" class="form-control">
                                    </div>
                                    @if ($errors->has('poster'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('poster') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="poster" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('پوستر') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    {{--<input value="" style="text-align: right" id="director_picture" type="text" class="form-control{{ $errors->has('director_picture') ? ' is-invalid' : '' }}" name="director_picture"  required autofocus>--}}
                                    <div class="input-group control-group" >
                                        <input type="file" name="director_picture" class="form-control">
                                    </div>
                                    @if ($errors->has('director_picture'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('director_picture') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="director_picture" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('عکس کارگردان') }}</label>
                            </div>



                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="trailer_link_hls" type="text" class="form-control{{ $errors->has('trailer_link_hls') ? ' is-invalid' : '' }}" name="trailer_link_hls"  required autofocus>

                                    @if ($errors->has('trailer_link_hls'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('trailer_link_hls') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="trailer_link_hls" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('hls لینک تریلر') }}</label>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                    <input value="" style="text-align: right" id="trailer_link_dash" type="text" class="form-control{{ $errors->has('trailer_link_dash') ? ' is-invalid' : '' }}" name="trailer_link_dash"  required autofocus>

                                    @if ($errors->has('trailer_link_dash'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('trailer_link_dash') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label for="trailer_link_dash" class="col-md-4 col-form-label text-md-right" style="float: right;text-align: right">{{ __('dash لینک تریلر') }}</label>
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
                                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>+</button>
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
                                        {{ __('افزودن فیلم') }}
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
                    '                                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i>-</button>\n' +
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