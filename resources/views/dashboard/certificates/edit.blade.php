@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('home.certificate')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li><a href="{{ route('dashboard.categories.index') }}"> @lang('home.certificate')</a></li>
                <li class="active">@lang('dashboard.edit')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('dashboard.edit')</h3>
                </div><!-- end of box header -->

                @include('partials._errors')

                <div class="box-body">

                    <form action="{{ route('dashboard.certificates.update', $certificate->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


                        <div class="form-group">
                            <label>@lang('dashboard.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ $certificate->email }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_ar')</label>
                            <input type="text" name="name_ar" class="form-control" value="{{ $certificate->name_ar }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_en')</label>
                            <input type="text" name="name_en" class="form-control" value="{{ $certificate->name_en }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_course')</label>
                            <select name="name_course" class="form-control">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->name }}" {{ $certificate->name_course == $course->name ? 'selected' : '' }}>{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('dashboard.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
