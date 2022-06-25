@if(gettype($result)!="integer" && count($result)>0)
        <style type="text/css">
            .search{ top: {{(string)(450+count($result)*450)}}px; }
            @media only screen and (max-width: 1535.99px) {.search{ top: {{(string)(375+count($result)*425)}}px; }}
            @media only screen and (max-width: 1398.99px) {.search{ top: {{(string)(350+count($result)*385)}}px; }}
            @media only screen and (max-width: 1232.99px) {.search{ top: {{(string)(300+count($result)*335)}}px; }}
            @media only screen and (max-width: 1028.99px) {.search{ top: {{(string)(250+count($result)*280)}}px; }}
            @media only screen and (max-width: 883.99px) {.search{ top: {{(string)(200+count($result)*245)}}px; }}
            @media only screen and (max-width: 774.99px) {.search{ top: {{(string)(175+count($result)*215)}}px; }}
            @media only screen and (max-width: 623.99px) {.search{ top: {{(string)(180+count($result)*245)}}px; }}
            @media only screen and (max-width: 522.99px) {.search{ top: {{(string)(175+count($result)*200)}}px; }}
            @media only screen and (max-width: 386.99px) {.search{ top: {{(string)(180+count($result)*145)}}px; }}
        </style>
            @if(count($result)<4)
            <style type="text/css">
                @media only screen and (min-height: 650px) and (max-width: 850px){
                    .search{
                        top:  auto;
                        bottom: 0;
                    }
                }
            </style>
            @endif
        @endif