@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>العناوين</h1>

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
                            <label>الموقع الجغرافي</label>
                            <input type="text" name="map_location" class="form-control" value="{{ setting('map_location') }}">
                        </div>

                        <div class="form-group">
                            <label>ارقام الهواتف</label>
                            <input type="text" name="number_phone_one" class="form-control" value="{{ setting('number_phone_one') }}">
                        </div>

                        <div class="form-group">
                            <label>ارقام الهواتف</label>
                            <input type="text" name="number_phone_two" class="form-control" value="{{ setting('number_phone_two') }}">
                        </div>

                        <div class="form-group">
                            <label>الايميل</label>
                            <input type="text" name="email" class="form-control" value="{{ setting('email') }}">
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
