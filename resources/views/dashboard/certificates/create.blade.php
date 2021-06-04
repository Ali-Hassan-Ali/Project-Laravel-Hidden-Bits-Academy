@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('home.certificates')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li><a href="{{ route('dashboard.certificates.index') }}"> @lang('home.certificates')</a></li>
                <li class="active">@lang('dashboard.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('dashboard.add')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.certificates.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>@lang('dashboard.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_ar')</label>
                            <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_en')</label>
                            <input type="text" name="name_en" class="form-control" value="{{ old('name_en') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.name_course')</label>
                            <select name="name_course" class="form-control">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->name }}" {{ old('name_course') == $course->name ? 'selected' : '' }}>{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
