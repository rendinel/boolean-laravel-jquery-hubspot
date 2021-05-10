@php
    $secone = '[
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/Marketing-Hub.svg",
        "title":"Marketing Hub",
        "tm":"&#8482;",
        "txt":"Marketing software to help you grow traffic, convert more visitors, and run complete inbound marketing campaigns at scale.",
        "subtitle":"Popular Features",
        "icons":"check_circle",
        "featuresone":"Lead generation",
        "featuresthree":"Marketing automation",
        "featurestwo":"Analytics",
        "btn":"Get started"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/Sales-Hub.svg",
        "title":"Sales Hub",
        "tm":"&#8482;",
        "txt":"Sales CRM software to help you get deeper insights into prospects, automate the tasks you hate, and close more deals faster.",
        "subtitle":"Popular Features",
        "icons":"check_circle",
        "featuresone":"Advanced CRM",
        "featuresthree":"Meeting scheduling",
        "featurestwo":"Quotes",
        "btn":"Get started"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/Service-Hub.svg",
        "title":"Service Hub",
        "tm":"&#8482;",
        "txt":"Customer service software to help you connect with customers, exceed expectations, and turn them into promoters who grow your business.",
        "subtitle":"Popular Features",
        "icons":"check_circle",
        "featuresone":"Tickets",
        "featuresthree":"Customer feedback",
        "featurestwo":"Knowledge base",
        "btn":"Get started"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/CMS-Hub.svg",
        "title":"CMS Hub",
        "tm":"&#8482;",
        "txt":"Content management software that’s flexible for marketers, powerful for developers, and gives customers a personalized, secure experience.",
        "subtitle":"Popular Features",
        "icons":"check_circle",
        "featuresone":"Drag-and-drop editor",
        "featuresthree":"SEO recommendations",
        "featurestwo":"Website themes",
        "btn":"Get started"
    },
    {
        "img":"https://www.hubspot.com/hubfs/Imported%20sitepage%20images/operations-3.svg",
        "title":"Operations Hub",
        "tm":"&#8482;",
        "txt":"Operations software that syncs your apps, cleans customer data, and automates processes — so all your systems and teams work better together.",
        "subtitle":"Popular Features",
        "icons":"check_circle",
        "featuresone":"Data sync",
        "featuresthree":"Programmable automation",
        "featurestwo":"Data quality automation",
        "btn":"Get started"
    }
   ]';

   $arraysec = json_decode($secone, true);

   $titlesecone = "The CRM Platform Your Whole Business Will Love";
   $txtsecone = "HubSpot’s CRM platform has all the tools and integrations you need for marketing, sales, content management, and customer service. Each product in the platform is powerful alone, but the real magic happens when you use them together.";
   $btnone= "Get free CRM";
   $btntwo = "Demo premium CRM";
@endphp

<div class="section-one">

    <div class="container one-cont">

        <div class="top">
            <h2>{{$titlesecone}}</h2>
            <p>{{$txtsecone}}</p>
            <div>
                <span class="btn-one">{{$btnone}}</span>
                <span class="btn-two">
                    {{$btntwo}}
                </span>
            </div>
        </div>

        <div class="bottom">
            @foreach ($arraysec as $id => $item)
            <div class="square">

                <div class="card-container">

                    <div class="title-row">
                        <img src="{{$item['img']}}" alt="">
                        <h3>{{$item['title']}}</h3>
                        &#8482;
                    </div>

                    <p>{{$item['txt']}}</p>

                    <div class="feature-container">

                        <span class="subtitle">{{$item['subtitle']}}</span>

                        <div class="space"></div>

                        <div class="feat-row">
                            <span class="material-icons">{{$item['icons']}}</span>
                            <span>{{$item['featuresone']}}</span>
                        </div>
                        <div class="feat-row">
                            <span class="material-icons">{{$item['icons']}}</span>
                            <span>{{$item['featurestwo']}}</span>
                        </div>
                        <div class="feat-row">
                            <span class="material-icons">{{$item['icons']}}</span>
                            <span>{{$item['featuresthree']}}</span>
                        </div>
                        <div class="btn-feat">
                            <span>{{$item['btn']}}</span>
                        </div>
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>

</div>
