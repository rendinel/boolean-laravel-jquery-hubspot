@php
$navhamburger = [
    'Software',
    'Pricing',
    'Resources',
    'About'
];

$burgerbtn = 'Get HubSpot free';

$logo = 'https://cdn3.iconfinder.com/data/icons/logos-and-brands-adobe/512/168_Hubspot-512.png';

$burgerdown = '[
    {
        "icon":"language",
        "txt":"English",
        "icontwo":"arrow_drop_down"
    },
    {
        "icon":"account_circle",
        "txt":"Contact Sales",
        "icontwo":""
    },
    {
        "icon":"",
        "txt":"Go to my account",
        "icontwo":""
    },
    {
        "icon":"",
        "txt":"Customer Support",
        "icontwo":""
    }
   ]';

   $arraydown = json_decode($burgerdown, true);
@endphp




<div class="hamburger">
    <div class="hamburger-container">
        <div class="nav">
            <img src="{{$logo}}" alt="">
            <input type="search" placeholder="Search HubSpot.com">
            <span class="material-icons x-toggle">
                close
            </span>
        </div>

        @foreach ($navhamburger as $item)
        <div class="rectangle">
            <div>{{$item}}</div>
            <span class="material-icons">
                keyboard_arrow_right
            </span>
        </div>
        @endforeach

        <div class="btn-hamburger">
            {{$burgerbtn}}
        </div>

        <div class="bottom-burger">
            @foreach ($arraydown as $id => $item)
            <div class="bottom-burger-inside">
                <span class="material-icons">{{$item['icon']}}</span>
                <div>{{$item['txt']}}</div>
            </div>
        @endforeach
        </div>
    </div>

</div>
