@extends('adminlte::page')

@section('title', 'Hotels')

@section('content_header')
<h1>Hotel Page {{$hotel->title}}</h1>
@stop

@section('content')
<div id="app">
    @include('admin.partials.hotel_nav', ['hotel' => $hotel])

    <div class="tab-content" id="custom-content-below-tabContent">
        <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">

            <form>

                <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Заголовок </label>
                    <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ..." value="{{$hotel->title}}">
                </div>

                <img src="{{$hotel->logo}}">
                <div class="form-group">
                    <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Лого </label>
                    <input type="file" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" placeholder="Email"  value="{{$hotel->email}}">
                </div>

                <div class="form-group">
                    <label>US phone mask:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" inputmode="text"  value="{{$hotel->phone}}">
                    </div>
                </div>
            </form>
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
