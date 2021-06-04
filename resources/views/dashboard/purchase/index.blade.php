@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('dashboard.categories')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li class="active">طلبات الكورسات</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">طلبات الكورسات <small>{{ $purchases->count() }}</small></h3>

                    <form action="{{ route('dashboard.purchase.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('dashboard.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('dashboard.search')</button>
                                @if (auth()->user()->hasPermission('courses_create'))
                                    <a href="{{ route('dashboard.purchase.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($purchases->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('dashboard.name')</th>
                                <th>@lang('dashboard.email')</th>
                                <th>@lang('dashboard.phone')</th>
                                <th>@lang('dashboard.image')</th>
                                <th>اسم الكورس</th>
                                <th>حاله الطلب</th>
                                <th>@lang('dashboard.action')</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($purchases as $index=>$purchase)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $purchase->first_name }}</td>
                                    <td>{{ $purchase->email }}</td>
                                    <td>{{ $purchase->phone }}</td>
                                    <td>
                                        <img data-enlargeable width="100" style="cursor: zoom-in" src="{{ $purchase->image_path }}" alt="" width="100">
                                    </td>
                                    <td>{{ $purchase->name_course }}</td>
                                    <td>
                                        @if ($purchase->status == 0)
                                            <p class="text-danger">غير مفعل</p>
                                        @else
                                            <p class="text-success">مفعل</p>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($purchase->status == 0)
                                            <form action="{{ route('dashboard.purchase.update', $purchase->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}
                                                <input type="text" name="status" value="1" hidden="">
                                                <input type="text" name="course_id" value="{{ $purchase->course_id }}" hidden="">
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-toggle-off"></i></button>
                                            </form><!-- end of form -->
                                        @else
                                            <form action="{{ route('dashboard.purchase.update', $purchase->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('put') }}
                                                <input type="text" name="status" value="0" hidden="">
                                                <input type="text" name="course_id" value="{{ $purchase->course_id }}" hidden="">
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-toggle-on"></i> </button>
                                            </form><!-- end of form -->
                                        @endif
                                        @if (auth()->user()->hasPermission('courses_update'))
                                            <a href="{{ route('dashboard.purchase.edit', $purchase->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i></a>
                                        @endif
                                        @if (auth()->user()->hasPermission('courses_delete'))
                                            <form action="{{ route('dashboard.purchase.destroy', $purchase->id) }}" method="post" style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> </button>
                                            </form><!-- end of form -->
                                        @else
                                            <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i></button>
                                        @endif
                                    </td>
                                </tr>
                            
                            @endforeach
                            </tbody>

                        </table><!-- end of table -->
                        
                        {{-- {{ $categories->appends()->links() }} --}}
                        
                    @else
                        
                        <h2>@lang('dashboard.no_data_found')</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
