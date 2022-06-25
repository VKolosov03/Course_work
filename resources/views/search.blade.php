@extends('layout')
@section('title')<title>@lang('layout.search')</title>@endsection
@section('footer_change') 
    @include('footer_search')
@endsection
@section('main')  
            <div class="central">
            <form method="post" action="/result">
                @csrf
                @if(gettype($result)!="integer")
                <input type="text" class="search_input" maxlength="60" name="result" id="result" placeholder="{{$searchword}}">
                @else
                <input type="text" class="search_input" maxlength="60" name="result" id="result" placeholder="{{__('details.search_info')}}">
                @endif
                <button class="search_button" >@lang('details.search')</button>
            </form>
            @if(gettype($result)!="integer")
                <h class="title_search">{{__('details.result', ['numb' => count($result)])}}</h>
                <ul class="search_list">
                @foreach($result as $value)
                    <li class="search_item"> 
                        <a href="/{{$value->name}}" class="search_form"><img src="{{asset('./images/'.$value->name.'.png')}}" alt="Landing" class="search-pic"></a>
                        <a href="/{{$value->name}}" class="search_form"><div class="search_heading">@if($lang=='en'){{$value->title}}@else{{$value->title_fr}}@endif</div></a>
                    </li>
                @endforeach
            @endif
            </div>
@endsection
@section('footer')<footer class="footer search">@endsection