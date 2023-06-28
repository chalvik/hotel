@extends('adminlte::page')

@section('title', 'Hotels')

@section('content_header')
    <h1>Справочник городов</h1>
@stop

@section('content')
    <div id="app">

        <div class="card">
            <div class="card-header">
                <h3 class="card-title"></h3>
            </div>

            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                <tr>
                                    <th class="sorting sorting_asc" tabindex="0" rowspan="1" colspan="1" > ## </th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"> Заголовок </th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"> Лого</th>
                                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"> Действие </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($models as $model)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">
                                            {{ $model->id }}
                                        </td>
                                        <td> {{ $model->name }} </td>
                                        <td>
                                            <a href="{{ route('cities.show', ['city' => $model->id]) }}"><i class="fas fa-edit"></i></a>
                                            <i class="fas fa-trash"></i>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            {{--                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>--}}
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                {{ $models->links() }}
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>


    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script defer src="/admin/js/app.js"></script>
@stop
