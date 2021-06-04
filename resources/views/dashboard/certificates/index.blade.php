@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('home.certificates')</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('dashboard.welcome') }}"><i class="fa fa-dashboard"></i> @lang('dashboard.dashboard')</a></li>
                <li class="active"> @lang('home.certificates')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px"> @lang('home.certificates')<small>{{ $certificates->count() }}</small></h3>

                    <form action="{{ route('dashboard.certificates.index') }}" method="get">

                        <div class="row">

                            <div class="col-md-4">
                                <input type="text" name="search" class="form-control" placeholder="@lang('dashboard.search')" value="{{ request()->search }}">
                            </div>

                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> @lang('dashboard.search')</button>
                                @if (auth()->user()->hasPermission('certificates_create'))
                                    <a href="{{ route('dashboard.certificates.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @else
                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('dashboard.add')</a>
                                @endif
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($certificates->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('dashboard.email')</th>
                                <th>@lang('dashboard.name_ar')</th>
                                <th>@lang('dashboard.name_en')</th>
                                <th>@lang('dashboard.name_course')</th>
                                <th>@lang('dashboard.action')</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            @foreach ($certificates as $index=>$certificate)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $certificate->email }}</td>
                                    <td>{{ $certificate->name_ar }}</td>
                                    <td>{{ $certificate->name_en }}</td>
                                    <td>{{ $certificate->name_course }}</td>
                                    <td>
                                        @if (auth()->user()->hasPermission('certificates_update'))
                                            <a href="{{ route('dashboard.certificates.edit', $certificate->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                                        @else
                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i></a>
                                        @endif
                                        @if (auth()->user()->hasPermission('certificates_delete'))
                                            <form action="{{ route('dashboard.certificates.destroy', $certificate->id) }}" method="post" style="display: inline-block">
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
