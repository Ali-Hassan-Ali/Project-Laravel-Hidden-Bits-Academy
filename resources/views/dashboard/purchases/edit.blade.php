@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>طلبات الكورسات</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li><a href="{{ route('dashboard.purchases.index') }}"> طلبات الكورسات</a></li>
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

                    <form action="{{ route('dashboard.purchases.update', $purchase->id) }}" method="post">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                       
                        <div class="form-group">
                            <label>الاسم الاول</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $purchase->first_name }}">
                        </div>

                        <div class="form-group">
                            <label>الاسم الثاني</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $purchase->last_name }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.email')</label>
                            <input type="text" name="email" class="form-control" value="{{ $purchase->email }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.phone')</label>
                            <input type="text" name="phone" class="form-control" value="{{ $purchase->phone }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.image')</label>
                            <input type="file" name="bill_image" class="form-control image">
                        </div>

                        <div class="form-group">
                            <label>اختر المستخدم</label>
                            <select name="users_id" class="form-control">
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}" {{ $purchase->users_id == $user->id ? 'selected' : '' }}> {{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>اختر القسم</label>
                            <select name="course_id" class="form-control">
                                @foreach ($courses as $course)
                                    <option value="{{ $course->id }}" {{ $purchase->course_id == $course->id ? 'selected' : '' }}> {{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="number" name="status" value="1" hidden="">
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
