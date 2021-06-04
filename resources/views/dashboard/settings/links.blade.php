@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>روابط التواصل الاجتماعي</h1>

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
                            <label>فيس بوك</label>
                            <input type="text" name="facebbok_link" class="form-control" value="{{ setting('facebbok_link') }}">
                        </div>

                        <div class="form-group">
                            <label>تويتر</label>
                            <input type="text" name="twitter_link" class="form-control" value="{{ setting('twitter_link') }}">
                        </div>

                        <div class="form-group">
                            <label>انستقرام</label>
                            <input type="text" name="instagram_link" class="form-control" value="{{ setting('instagram_link') }}">
                        </div>

                        <div class="form-group">
                            <label>واتساب</label>
                            <input type="text" name="whatsapp_link" class="form-control" value="{{ setting('whatsapp_link') }}">
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
