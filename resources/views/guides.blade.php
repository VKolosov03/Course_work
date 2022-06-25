@extends('layout')
@section('title')<title>{{ucfirst($guide->name)}}</title>@endsection
@section('footer_change') 
    @include('footer_guides')
@endsection
@section('main')
            <div class="central">
                <h class="title_landing"><center>@if($lang=='en'){{$guide->title}}@else{{$guide->title_fr}}@endif</center></h>
                <div><img src='{{asset("./images/".$guide->name.".png")}}' alt="Landing" class="guide-pic1"></div>
                <p class="guide_text1">@if($lang=='en'){{$guide->first_paragraph}}@else{{$guide->first_paragraph_fr}}@endif</p>
                <p class="guide_text2">@if($lang=='en'){!!$guide->second_paragraph!!}@else{!!$guide->second_paragraph_fr!!}@endif</p>
                <p class="guide_text3">@if($lang=='en'){{$guide->third_paragraph}}@else{{$guide->third_paragraph_fr}}@endif</p>
                <div><img src='{{asset("./images/".$guide->name."2.png")}}' alt="Landing" class="guide-pic2"></div>
                <form method="post" action="{{$guide->name}}/reply">
                    @csrf
                    <input type="text" class="comment_input" minlength="3" maxlength="140" name="comment" id="comment" placeholder="{{__('details.reply_info')}}">
                    <button type="submit" class="comment_button" >@lang('details.reply')</button>
                </form>
                @if(count($reply) > 0)
                    <p class="comment_title">@lang('details.com')</p>
                    <ul class="comment_list">
                    @foreach($reply as $value)
                        <li class="comment_item"> <section class="comment_section">
                        <hr class="comment_line">
                        <p class="comment_name">@lang('details.user')</p> 
                        <p class="comment_context">{{$value->context}}</p>
                        <p class="comment_data">{{date_format(date_create($value->comment_date), 'H:i d.m.y')}}</p>    
                        </section></li>
                    @endforeach
                    <li class="comment_item"><section class="comment_section">
                    <hr class="comment_line">'
                    </section></li>
                    </ul>
                @endif
            </div>
@endsection
@section('footer')<footer class="footer guides">@endsection