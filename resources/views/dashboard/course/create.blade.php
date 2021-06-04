@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>الكورسات</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li><a href="{{ route('dashboard.courses.index') }}">   </a></li>
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

                    <form action="{{ route('dashboard.courses.store') }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="form-group">
                            <label>الفديوو التعريفي</label>
                            <input type="file" name="demo_video" class="form-control" value="{{ old('demo_video') }}">
                        </div>

                        <div class="form-group">
                            <label>اسم الكورس</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label>رابط الكورس</label>
                            <input type="text" name="url" class="form-control" value="{{ old('url') }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('dashboard.image')</label>
                            <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                        </div>

                        <div class="form-group">
                            <label>الوصف المختصر</label>
                            <input type="text" name="Short_description" class="form-control" value="{{ old('Short_description') }}">
                        </div>

                        <div class="form-group">
                            <label>الوصف الكامل</label>
                            <input type="text" name="description" class="form-control" value="{{ old('description') }}">
                        </div>

                        <div class="form-group">
                            <label>السعر</label>
                            <input type="text" name="price" class="form-control" value="{{ old('price') }}">
                        </div>

                        <div class="form-group">
                            <label>عدد ساعات الكورس</label>
                            <input type="number" name="time" class="form-control" value="{{ old('time') }}">
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
                                <option value="{{ $categorie->id }}"> {{ $categorie->name }}</option>
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
