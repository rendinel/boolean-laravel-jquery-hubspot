@php
   $upleft = '[
    {
        "icon":"language",
        "txt":"English",
        "icontwo":"arrow_drop_down"
    },
    {
        "icon":"account_circle",
        "txt":"Contact Sales",
        "icontwo":""
    }
   ]';

   $array = json_decode($upleft, true);

   $upright = '[
    {
        "icon":"search",
        "txt":" Log in ",
        "icontwo":""
    },
    {
        "icon":"",
        "txt":"Customer Support",
        "icontwo":""
    },
    {
        "icon":"",
        "txt":"About",
        "icontwo":"arrow_drop_down"
    }
   ]';

   $arraytwo = json_decode($upright, true);

   $downleft = '[
    {
        "txt":"Software",
        "icon":"arrow_drop_down"
    },
    {
        "txt":"Pricing",
        "icon":""
    },
    {
        "txt":"Resources",
        "icon":"arrow_drop_down"
    }
   ]';

   $arraythree = json_decode($downleft, true);
@endphp

<nav>
<div class="nav-up container">

    <div class="up-left">
        <ul>
            @foreach ($array as $id => $item)
              <li>
                <span class="material-icons">
                    {{$item['icon']}}
                </span>
                  <span> {{$item['txt']}}</span>
                  <span class="material-icons">
                    {{$item['icontwo']}}
                  </span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="up-right">

        <ul>
            @foreach ($arraytwo as $id => $item)
              <li>
                <span class="material-icons">
                    {{$item['icon']}}
                </span>
                 <span> {{$item['txt']}}</span>
                  <span class="material-icons">
                    {{$item['icontwo']}}
                  </span>
                </li>
            @endforeach
        </ul>

    </div>

</div>

<div class="nav-down container">

    <div class="down-left">

        <img src="https://www.hubspot.com/hubfs/assets/hubspot.com/style-guide/brand-guidelines/guidelines_the-logo.svg" alt="">

        <ul>
            @foreach ($arraythree as $id => $item)
              <li>
                  <span>{{$item['txt']}}</span>
                  <span class="material-icons">
                    {{$item['icon']}}
                  </span>
                </li>
            @endforeach
        </ul>

    </div>

    <div class="down-right">
        Get HubSpot free
    </div>

</div>

<div class="scrollnav-container">
    <div class="nav-down-two container">

        <div class="down-left">

            <img src="https://cdn3.iconfinder.com/data/icons/logos-and-brands-adobe/512/168_Hubspot-512.png" alt="">

            <ul>
                @foreach ($arraythree as $id => $item)
                  <li>
                      <span>{{$item['txt']}}</span>
                      <span class="material-icons">
                        {{$item['icon']}}
                      </span>
                    </li>
                @endforeach
            </ul>

        </div>

        <div class="down-right">
            Get HubSpot free
        </div>

    </div>
</div>

</nav>

<div class="resp-nav container">

    <img src="https://cdn3.iconfinder.com/data/icons/logos-and-brands-adobe/512/168_Hubspot-512.png" alt="">

    <span class="material-icons">
        menu
    </span>

</div>
