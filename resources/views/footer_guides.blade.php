@if(count($reply)>0)
        <style type="text/css">
            .guides{ top: {{(string)(3150+count($reply)*180)}}px; }
            @media only screen and (max-width: 1535.99px) {.guides{ top: {{(string)(2950+count($reply)*165)}}px; }}
            @media only screen and (max-width: 1398.99px) {.guides{ top: {{(string)(2650+count($reply)*155)}}px; }}
            @media only screen and (max-width: 1232.99px) {.guides{ top: {{(string)(2300+count($reply)*140)}}px; }}
            @media only screen and (max-width: 1028.99px) {.guides{ top: {{(string)(1945+count($reply)*120)}}px; }}
            @media only screen and (max-width: 883.99px) {.guides{ top: {{(string)(1740+count($reply)*102)}}px; }}
            @media only screen and (max-width: 774.99px) {.guides{ top: {{(string)(1420+count($reply)*90)}}px; }}
            @media only screen and (max-width: 623.99px) {.guides{ top: {{(string)(1575+count($reply)*85)}}px; }}
            @media only screen and (max-width: 522.99px) {.guides{ top: {{(string)(1480+count($reply)*70)}}px; }}
            @media only screen and (max-width: 386.99px) {.guides{ top: {{(string)(1250+count($reply)*70)}}px; }}
        </style>
        @endif