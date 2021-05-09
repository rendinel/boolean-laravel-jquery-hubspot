@php
$imgsecthree = [
    'https://f.hubspotusercontent00.net/hubfs/53/1200px-WWF_logo_svg%20(1).png',
    'https://f.hubspotusercontent00.net/hubfs/53/trello-logo-blue%20(1).png',
    'https://f.hubspotusercontent00.net/hubfs/53/1200px-G2_Crowd_logo.svg.png',
    'https://www.hubspot.com/hubfs/assets/hubspot.com/homepage/Vertical_Sabaeus_RGB.svg',
    'https://newinboundblog.hubspot.com/hubfs/assets/hubspot.com/case-studies/logo-bank/EMEA-logo-bank/Suzuki.png',
    'https://f.hubspotusercontent00.net/hubfs/53/soundcloud.png',
    'https://www.hubspot.com/hubfs/assets/hubspot.com/home/home_page_logos_June_2019/Classpass-logo@2x.png',
    'https://www.hubspot.com/hubfs/assets/hubspot.com/home/home_page_logos_June_2019/VMware_logo_gry_RGB_300dpi@2x.png'
];

$number = '100,000+';
$numbertxt = 'customers in over 120 countries growing their businesses with HubSpot';


$secthreeimg = 'https://cdn2.hubspot.net/hubfs/53/assets/hubspot.com/_style-guide/sg-module-images/9@2x.png';
$secthreetitle = 'Start Growing With HubSpot Today';
$secthreetxt = 'With tools to make every part of your process more human and a support team excited to help you, getting started with inbound has never been easier.';
$freemium = 'Get started with FREE tools, or get more with our premium software.';
$btnsecthree = 'Get HubSpot free';
@endphp

<div class="sec-three">

    <div class="container sec-three-cont">
        <div class="up">
            <div class="up-left">

                <h2>{{$number}}</h2>
                <p>{{$numbertxt}}</p>

            </div>
            <div class="up-right">

                @foreach ($imgsecthree as $listitem)
                <div class="square">
                    <img src="{{$listitem}}" alt="">
                </div>
                @endforeach

            </div>
        </div>

        <div class="down">

            <div class="down-left">

                <h2>{{$secthreetitle}}</h2>
                <p>{{$secthreetxt}}</p>
                <div>{{$btnsecthree}}</div>
                <span>{{$freemium}}</span>
            </div>

            <div class="down-right">
                <img src="{{$secthreeimg}}" alt="">
            </div>

        </div>
    </div>

</div>
