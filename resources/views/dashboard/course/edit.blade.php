@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('dashboard.categories')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li><a href="{{ route('dashboard.courses.index') }}"> الكورس </a></li>
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

                    <form action="{{ route('dashboard.courses.update', $course->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label>الفديوو التعريفي</label>
                            <input type="file" name="demo_video" class="form-control" value="{{ $course->demo_video }}">
                        </div>

                        <div class="form-group">
                            <label>اسم الكورس</label>
                            <input type="text" name="name" class="form-control" value="{{ $course->name }}">
                        </div>

                        <div class="form-group">
                            <label>رابط الكورس</label>
                            <input type="text" name="url" class="form-control" value="{{ $course->url }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.image')</label>
                            <input type="file" name="image" class="form-control" value="{{ $course->image }}">
                        </div>

                        <div class="form-group">
                            <img src="{{ $course->image_path }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>

                        <div class="form-group">
                            <label>الوصف المختصر</label>
                            <input type="text" name="Short_description" class="form-control" value="{{ $course->Short_description }}">
                        </div>

                        <div class="form-group">
                            <label>الوصف الكامل</label>
                            <input type="text" name="description" class="form-control" value="{{ $course->description }}">
                        </div>

                        <div class="form-group">
                            <label>السعر</label>
                            <input type="text" name="price" class="form-control" value="{{ $course->price}}">
                        </div>

                        <div class="form-group">
                            <label>عدد ساعات الكورس</label>
                            <input type="number" name="time" class="form-control" value="{{ $course->time }}">
                        </div>

                        <div class="form-group">
                            <label>التقيم</label>
                            <select name="rating" class="form-control">
                                @for ($i = 0; $i < 7; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>

                        <div class="form-group">
                            <label>اختر القسم</label>
                            <select name="categories_id" class="form-control">
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}" {{ $categorie->id == $course->id ? : '' }}> {{ $categorie->name }}</option>
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
