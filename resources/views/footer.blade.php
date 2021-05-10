@php
$footer = '[
    {
        "item1":"Popular Features",
        "item2":"Free Meeting Scheduler App",
        "item3":"Social Media Tools",
        "item4":"Email Tracking Software",
        "item5":"Sales Email Automation",
        "item6":"Ads Software",
        "item7":"Email Marketing Software",
        "item8":"Lead Management Software",
        "item9":"Pipeline Management Tools",
        "item10":""
    },
    {
        "item1":"Sales Email Templates",
        "item2":"Help Desk Software",
        "item3":"Free Online Form Builder",
        "item4":"Free Chatbot Builder",
        "item5":"Free Live Chat Software",
        "item6":"Marketing Analytics",
        "item7":"Pipeline Management Tools",
        "item8":"",
        "item9":"",
        "item10":""
    },
    {
        "item1":"Free Tools",
        "item2":"Website Grader",
        "item3":"Make My Persona",
        "item4":"Email Signature Generator",
        "item5":"Blog Ideas Generator",
        "item6":"Invoice Template Generator",
        "item7":"Marketing Plan Generator",
        "item8":"Free Business Templates",
        "item9":"Industry Benchmark Data",
        "item10":"Software Comparisons Library"
    },
    {
        "item1":"Company",
        "item2":"About Us",
        "item3":"Careers",
        "item4":"Management Team",
        "item5":"Board of Directors",
        "item6":"Investor Relations",
        "item7":"Blog",
        "item8":"Contact Us",
        "item9":"",
        "item10":""
    },
    {
        "item1":"Customers",
        "item2":"Customer Support",
        "item3":"Join a Local User Group",
        "item4":"Partners",
        "item5":"All Partner Programs",
        "item6":"Solutions Partner Program",
        "item7":"App Partner Program",
        "item8":"HubSpot for Startups",
        "item9":"Affiliate Program",
        "item10":""
    }
   ]';

   $arrayfooter = json_decode($footer, true);

   $footerresp = '[
    {
        "item1":"Popular Features",
        "item2":"navigate_next"
    },
    {
        "item1":"Free Tools",
        "item2":"navigate_next"
    },
    {
        "item1":"Company",
        "item2":"navigate_next"
    },
    {
        "item1":"Customers",
        "item2":"navigate_next"
    },
    {
        "item1":"Partners",
        "item2":"navigate_next"
    }
   ]';

   $arrayfooterresp = json_decode($footerresp, true);

   $imgfoot = 'https://www.hubspot.com/hubfs/WBZ-1165%20Global%20Nav%20Redesign/Wordmark-White.svg';
   $copyright = 'Copyright © 2021 HubSpot, Inc.';
   $legal = 'Legal Stuff';
   $policy = 'Privacy Policy';
   $icons = [
    'icon fab fa-facebook-f',
    'icon fab fa-instagram',
    'icon fab fa-youtube',
    'icon fab fa-twitter',
    'icon fab fa-linkedin-in',
    'icon fab fa-medium-m'
   ];

   $apple = 'https://cdn2.hubspot.net/hubfs/53/app%20store%20high%20res.png';
   $android = 'https://cdn2.hubspot.net/hubfs/53/google%20play%20high%20res.png';
@endphp


<footer>

    <div class="container foot-container">

        @foreach ($arrayfooter as $id => $item)
            <div class="rectangle">
                <ul>
                    <li>{{$item['item1']}}</li>
                    <li>{{$item['item2']}}</li>
                    <li>{{$item['item3']}}</li>
                    <li>{{$item['item4']}}</li>
                    <li>{{$item['item5']}}</li>
                    <li>{{$item['item6']}}</li>
                    <li>{{$item['item7']}}</li>
                    <li>{{$item['item8']}}</li>
                    <li>{{$item['item9']}}</li>
                    <li>{{$item['item10']}}</li>
                </ul>
            </div>
        @endforeach
    </div>

    <div class="resp-footer">
        @foreach ($arrayfooterresp as $id => $item)
            <div class="block">
                <span>{{$item['item1']}}</span>
                <span class="arrow material-icons">{{$item['item2']}}</span>
            </div>
        @endforeach
    </div>

    <div class=" container hr-container">
        <div class="hr"></div>
        <div class="icons-cont">
            @foreach ($icons as $icon)
                <i class="{{$icon}}"></i>
            @endforeach
        </div>
        <div class="hr"></div>
    </div>

    <div class="app-cont">
        <img  src="{{$apple}}">
        <img src="{{$android}}">
    </div>

    <div class="footend">

        <img src="{{$imgfoot}}" alt="">
        <div>{{$copyright}}</div>
        <span>
            <span>{{$legal}}</span>
            <div class="vr"></div>
            <span>{{$policy}}</span>
        </span>

    </div>

</footer>
