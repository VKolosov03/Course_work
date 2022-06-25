@extends('layout')
@section('title')<title>LoL-guides</title>@endsection
@section('main')   
            <h class="title_landing"><center>@lang('welcome.title')</center></h>
            <div class="central">
            <ul class="main_list">
                <li class="main_item">
                    <a href="/micro" class="rec">
                        <h class="micro_champs_heading">@lang('welcome.micro_head')</h>
                        <img src="{{asset('./images/micro.png')}}" alt="Landing" class="micro_champs-pic">
                        <p class="micro_champs_text">@lang('welcome.micro_text')</p>
                    </a>
                </li>
                <li class="main_item">
                    <a href="/macro" class="rec">
                        <h class="macro_heading">@lang('welcome.macro_head')</h>
                        <img src="{{asset('./images/macro.png')}}" alt="Landing" class="macro-pic">
                        <p class="macro_text">@lang('welcome.macro_text')</p>
                    </a>
                </li>
                <li class="main_item">
                    <a href="/champions" class="rec">
                        <h class="micro_champs_heading">@lang('welcome.champs_head')</h>
                        <img src="{{asset('./images/champions.png')}}" alt="Landing" class="micro_champs-pic">
                        <p class="micro_champs_text">@lang('welcome.champs_text')</p>
                    </a>
                </li>

            </ul>
    
            </div>
@endsection
@section('footer')<footer class="footer landing">@endsection