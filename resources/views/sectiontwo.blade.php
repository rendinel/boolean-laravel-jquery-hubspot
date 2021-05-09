@php
$sectwo = '[
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/parrotdad/homepage/homepage_community_agency.svg",
        "title":"150",
        "txt":"HubSpot user groups"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/parrotdad/homepage/homepage_community_blog.svg",
        "title":"7M",
        "txt":"monthly visits"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/parrotdad/homepage/homepage_community_academy.svg",
        "title":"330K",
        "txt":"certified professionals"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/parrotdad/homepage/homepage_community_inbound.svg",
        "title":"26K",
        "txt":"registered attendees"
    },
    {
        "img":"https://cdn2.hubspot.net/hubfs/53/HubSpot-App-Marketplace-White.png",
        "title":"650",
        "txt":"integrations"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/parrotdad/homepage/homepage_community_globe.svg",
        "title":"6",
        "txt":"languages"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/parrotdad/homepage/homepage_community_followers.svg",
        "title":"2.6M",
        "txt":"social followers"
    },
    {
        "img":"https://cdn2.hubspot.net/hubfs/53/Lists.svg",
        "title":"100,000",
        "txt":"customers"
    }

   ]';

   $arrays = json_decode($sectwo, true);

   $titlesectwo = 'Learn and grow with award-winning support and a thriving community behind you.';
   $txtsectwo = "You don't have to go it alone. Master the inbound methodology and get the most out of your tools with HubSpot's legendary customer support team and a community of thousands of marketing and sales pros just like you.";
   @endphp


<div class="section-two">

    <div class="cont-sec-two container">
        <h2>{{$titlesectwo}}</h2>
        <p>{{$txtsectwo}}</p>

        <div class="table">
            @foreach ($arrays as $id => $item)
                <div class="square">
                    <img src="{{$item['img']}}" alt="">
                    <h4>{{$item['title']}}</h4>
                    <span class="table-txt">{{$item['txt']}}</span>
                </div>
            @endforeach
        </div>
    </div>

</div>
