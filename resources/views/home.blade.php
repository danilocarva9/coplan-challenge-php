@extends('adminlte::page')

@section('content_header')
    <h1>
        CARGO: {{Auth::user()->role->name}}<br>
        <small>{{"Olá ".Auth::user()->name}}</small>
    </h1>
@stop

@section('content')
    <div class="row">
        @if (Auth::user()->role_id<3)
            <div class="col-md-4 col-xs-6">
        @else
            <div class="col-xs-6">
         @endif
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>-</h3>
                    <p>Noticias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-comments-o"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        @if (Auth::user()->role_id<3)
            <div class="col-md-4 col-xs-6">
        @else
            <div class="col-xs-6">
        @endif
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>-<sup style="font-size: 20px"></sup></h3>

                    <p>No seu Cargo</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
         @if (Auth::user()->role_id<3)

            <div class="col-md-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Usuarios a Serem Validados</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
          @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-body">
                    <ul class="timeline">

                        <!-- timeline time label -->
                        <li class="time-label">
                    <span class="bg-red">
                        10 Feb. 2014
                    </span>
                        </li>
                        <!-- /.timeline-label -->

                        <!-- timeline item -->
                        <li>
                            <!-- timeline icon -->
                            <i class="fa fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                                <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                                <div class="timeline-body">
                                    ...
                                    Content goes here
                                </div>

                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">...</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Usuarios</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="example1_length">
                                    {{--<label>--}}
                                        {{--Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">--}}
                                                {{--<option value="10">10</option>--}}
                                                {{--<option value="25">25</option>--}}
                                                {{--<option value="50">50</option>--}}
                                                {{--<option value="100">100</option>--}}
                                            {{--</select> entries--}}
                                    {{--</label>--}}
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="example1_filter" class="dataTables_filter">
                                    <label>Busca:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Nome" style="width: 247px;">Nome</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Email" style="width: 302px;">Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-5">--}}
                                {{--<div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-7">--}}
                                {{--<div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">--}}
                                    {{--<ul class="pagination">--}}
                                        {{--<li class="paginate_button previous disabled" id="example1_previous">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button active">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button ">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button ">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button ">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button ">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button ">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>--}}
                                        {{--</li>--}}
                                        {{--<li class="paginate_button next" id="example1_next">--}}
                                            {{--<a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@stop