@extends('layout')
@section('title')<title>{{ucfirst($info->position_name)}}</title>@endsection
@section('main')   
            <div class="central">
            <h class="title_landing"><center>@if($lang=='en'){{$info->position_title}}@else{{$info->position_title_fr}}@endif</center></h>
            <div id="elem1"></div>
            <div class="arrow left">
                <div id="elem2"></div>
                <div class="triangle" id="left_but">▲</div>
                <div class="lil_circle" id="left_but"></div>
            </div>
            <div class="arrow right">
                <div id="elem3"></div>
                <div class="triangle" id="right_but">▲</div>
                <div class="lil_circle" id="right_but"></div>
            </div>
            @include('swap')
        </div>
@endsection
@section('footer')<footer class="footer spin">@endsection