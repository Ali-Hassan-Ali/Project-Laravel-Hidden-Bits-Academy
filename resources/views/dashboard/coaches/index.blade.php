@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>المدربين</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li class="active">المدربين</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">المدربين <small>{{ $coaches->count() }}</small></h3>

                    <form action="{{ route('dashboard.coaches.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('dashboard.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('dashboard.search')</button>
                                @if (auth()->user()->hasPermission('coaches_create'))
                                    <a href="{{ route('dashboard.coaches.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($coaches->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('dashboard.name')</th>
                                <th>@lang('dashboard.email')</th>
                                <th>@lang('dashboard.image')</th>
                                <th>@lang('dashboard.phone')</th>
                                <th>@lang('dashboard.jobs')</th>
                                <th>@lang('dashboard.rating')</th>
                                <th>@lang('dashboard.description')</th>
                                <th>@lang('dashboard.action')</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($coaches as $index=>$coaches)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $coaches->name }}</td>
                                    <td>{{ $coaches->email }}</td>
                                    <td><img src="{{ $coaches->image_path }}" style="width: 100px;" class="img-thumbnail" alt=""></td>
                                    <td>{{ $coaches->phone }}</td>
                                    <td>{{ $coaches->jobs }}</td>
                                    <td>{{ $coaches->rating }}</td>
                                    <td>{{ $coaches->description }}</td>
                                    <td>
                                        @if (auth()->user()->hasPermission('coaches_update'))
                                            <a href="{{ route('dashboard.coaches.edit', $coaches->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('dashboard.edit')</a>
                                        @endif
                                        @if (auth()->user()->hasPermission('coaches_delete'))
                                            <form action="{{ route('dashboard.coaches.destroy', $coaches->id) }}" method="post" style="display: inline-block">
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
                        
                        {{-- {{ $coaches->appends()->links() }} --}}
                        
                    @else
                        
                        <h2>@lang('dashboard.no_data_found')</h2>
                        
                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
