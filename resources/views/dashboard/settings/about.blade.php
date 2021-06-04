@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>عن الاكادميه</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li><a href="{{ route('dashboard.categories.index') }}"> عن الاكادميه</a></li>
                <li class="active">@lang('dashboard.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">@lang('dashboard.add')</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    <form action="{{ route('dashboard.settings.store') }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>شعارنا</label>
                            <input type="text" name="our_slogan" class="form-control" value="{{ setting('our_slogan') }}">
                        </div>

                        <div class="form-group">
                            <label>عن الاكادميه</label>
                            <input type="text" name="from_academy" class="form-control" value="{{ setting('from_academy') }}">
                        </div>

                        <div class="form-group">
                            <label>خدمـــــــــــتنا</label>
                            <input type="text" name="service_academy" class="form-control" value="{{ setting('service_academy') }}">
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
