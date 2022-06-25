@extends('layout')
@section('title')<title>@lang('layout.us')</title>@endsection
@section('main')   
            <h class="title_landing"><center>@lang('details.supps_title')</center></h>
            <div><img src="{{asset('./images/supps.png')}}" alt="Landing" class="supps-pic"></div>
            <p class="supps_text">@lang('details.supps_text')</p>
@endsection
@section('footer')<footer class="footer us">@endsection