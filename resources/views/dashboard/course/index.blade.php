@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>الكورس</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> الرئيسيه</a></li>
                <li class="active"> الكورس</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">الكورسات <small>{{ $courses->count() }}</small></h3>

                    <form action="{{ route('dashboard.courses.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('dashboard.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('dashboard.search')</button>
                                @if (auth()->user()->hasPermission('courses_create'))
                                    <a href="{{ route('dashboard.courses.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($courses->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الوصف</th>
                                <th>الوصف المختصر</th>
                                <th>التقيم</th>
                                <th>وقت الكورس</th>
                                <th>الفديو</th>
                                <th>الصوره</th>
                                <th>الاحداث</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($courses as $index=>$course)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $course->name }}</td>
                                    <td>{{ $course->description }}</td>
                                    <td>{{ $course->Short_description }}</td>
                                    <td>{{ $course->rating }}</td>
                                    <td>{{ $course->time }}</td>
                                    <td>
                                        <video controls poster="{{ $course->image_path }}">
                                          <source src="{{ asset('uploads/'.$course->demo_video) }}" type="video/ogg">
                                          <source src="{{ asset('uploads/'.$course->demo_video) }}" type="video/webm">
                                        </video>
                                    </td>
                                    <td><img src="{{ $course->image_path }}" alt="" width="10"></td>
                                    <td>
                                        @if (auth()->user()->hasPermission('courses_update'))
                                            <a href="{{ route('dashboard.courses.edit', $course->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                                        @endif
                                        @if (auth()->user()->hasPermission('courses_delete'))
                                            <form action="{{ route('dashboard.courses.destroy', $course->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('dashboard.delete')</button>
                                            </form><!-- end of form -->
                                        @else
                                            <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('dashboard.delete')</button>
                                        @endif
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{-- {{ $courses->appends()->links() }} --}}
                        
                    @else
                        
                        <h2>@lang('dashboard.no_data_found')</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
