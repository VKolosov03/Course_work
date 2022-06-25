@extends('layout')
@section('title')<title>@lang('layout.news')</title>@endsection
@section('main') 
            <h class="title_landing"><center>@if($lang=='en'){{$info->position_title}}@else{{$info->position_title_fr}}@endif</center></h>
            <div class="central">
            <ul class="news_list">
            @foreach($page as $value)
                <li class="news_item">
                <a href="/{{$value->name}}" class="news_link">
                    <h class="news_heading">@if($lang=='en'){{$value->title}}@else{{$value->title_fr}}@endif</h>
                    <img src="{{asset('./images/'.$value->name.'.png')}}" alt="Landing" class="news-pic">
                    <p class="news_text">{{substr(($lang=='en') ? $value->first_paragraph : $value->first_paragraph_fr, 0, 100)."..."}}</p>
                </a>
                <hr class="line">
            @endforeach
            </ul>
        </div>
@endsection
@section('footer')<footer class="footer news">@endsection