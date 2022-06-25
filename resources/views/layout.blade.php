<!DOCTYPE html>
<html lang='en'>
    <head>
        @yield('title')
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('./style.css')}}"> 
        <link rel="stylesheet" href="{{asset('./adaptation.css')}}"> 
        @if($lang=='fr')<link rel="stylesheet" href="{{asset('./style_fr.css')}}">@endif
        @yield('footer_change')
    </head>

    <body>
        <header class="header">  
            <div class="central">


                <nav class="menu">
                    <ul class="header_list">
                        <li class="header_item">
                            <a href="/"><img src="{{asset('./images/logo.png')}}" alt="Landing" class="header-pic"></a>
                        </li>
                        <li class="header_item">
                            <details class="header_link"><summary class="header_link sum">@lang('layout.category')</summary><a href="/micro" class="header_link det">Micro</a><a href="/macro" class="header_link det">Macro</a><a href="/champions" class="header_link det">Champs</a></details>
                        </li>
                        <li class="header_item">
                            <a href="/news" class="header_link">@lang('layout.news')</a>
                        </li>
                        <li class="header_item">
                            <a href="/us" class="header_link">@lang('layout.us')</a>
                        </li>
                        <li class="header_item">
                            <a href="/search" class="header_link">@lang('layout.search')</a>
                        </li>
                        <li class="header_item">
                            <details class="cart"><summary class="sum"><img src="{{asset('./images/lang.png')}}" alt="cart" class="header-pic"></summary><a href="/locale/en" class="header_link det">@lang('layout.en')</a><a href="/locale/fr" class="header_link det">Fr</a></details>
                        </li>

                    </ul>
                </nav>
                
                    
            </div> 
        </header>
        <main>@yield('main')</main>
        @yield('footer')  
            <div class="central footer_menu">
                <div class="header_logo">
                    <a href="/us"><img src="{{asset('./images/logo.png')}}" alt="Landing" class="footer-pic"></a>
                </div>

                <nav class="menu">
                    <ul class="footer_list">
                        <li class="footer_item">
                            <a href="/us" class="logo_name">Supps</a>
                        </li>
                        <li class="footer_item">
                            <a href="https://t.me/HotSpicyMeat" target="_blank" class="footer_link"><center>@lang('layout.telegr') acc:<br>@HotSpicyMeat</center></a>
                        </li>
                        <li class="footer_item">
                            <a href="mailto:yachmen92@gmail.com" target="_blank" class="footer_link"><center>Email @lang('layout.adr'):<br>yachmen92@gmail.com</center></a>
                        </li>

                    </ul>
                </nav>
                
                    
            </div> 
        </footer>
    </body>
</html> 