@php
    $squareright = '[
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/Marketing-Hub.svg",
        "title":"Marketing Hub",
        "txt":"Marketing automation software.",
        "txt2":"Free and premium plans"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/Sales-Hub.svg",
        "title":"Sales Hub",
        "txt":"Sales CRM software.",
        "txt2":"Free and premium plans"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/Service-Hub.svg",
        "title":"Service Hub",
        "txt":"Customer service software.",
        "txt2":"Free and premium plans"
    },
    {
        "img":"https://www.hubspot.com/hubfs/assets/hubspot.com/global/CMS-Hub.svg",
        "title":"CMS Hub",
        "txt":"Content management system software.",
        "txt2":"Premium plans"
    },
    {
        "img":"https://www.hubspot.com/hubfs/Imported%20sitepage%20images/operations-3.svg",
        "title":"Operations Hub",
        "txt":"Content management system software.",
        "txt2":"Free and premium plans"
    }
   ]';

   $arraysquare = json_decode($squareright, true);

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

   $dropleft = '[
    {
        "txt": "Free CRM",
        "txt2": "Overview of HubSpot\'s free tools",
        "icon":"arrow_right_alt"
    },
    {
        "txt": "The Full CRM Platform",
        "txt2": "Overview of all products",
        "icon":"arrow_right_alt"
    }
   ]';

   $arraydropleft = json_decode($dropleft, true);

   $dropdonwtwo = '[
    {
        "txt": "Education",
        "txt2": "Blog",
        "txt3":"Ebooks, Guides & More",
        "txt4":"Free Courses & Certifications",
        "txt5":"Inbound Methodology",
        "icon":"https://www.hubspot.com/hubfs/WBZ-1165%20Global%20Nav%20Redesign/1-icon.svg"
    },
    {
        "txt": "Why HubSpot ?",
        "txt2": "Customer Stories",
        "txt3":"Why Choose HubSpot?",
        "txt4":"",
        "txt5":"",
        "icon":"https://blog.hubspot.com/hubfs/WBZ-1165%20Global%20Nav%20Redesign/2-icon.svg"
    },
    {
        "txt": "Services",
        "txt2": "Onboarding & Consulting Services",
        "txt3":"Hire a Service Provider",
        "txt4":"",
        "txt5":"",
        "icon":"https://blog.hubspot.com/hubfs/WBZ-1165%20Global%20Nav%20Redesign/3-icon.svg"
    },
    {
        "txt": "Partners & Developers",
        "txt2": "Partner Programs",
        "txt3":"Developer Tools",
        "txt4":"",
        "txt5":"",
        "icon":"https://blog.hubspot.com/hubfs/WBZ-1165%20Global%20Nav%20Redesign/4-icon.svg"
    }
   ]';

   $arraydropdowntwo = json_decode($dropdonwtwo, true);

   $dropdownone = ['日本語','Deutsch','English','Español','Português','Français'];

   $dropdowntwo = ['About Us','Careers','Contact Us','Investor Relations','Management Team'];

   $droprightdownone = 'App Marketplace';

   $droprightdowntwo = 'Connect your favorite apps to HubSpot.';

   $droprightthree = 'See all app integrations';

@endphp

<nav>
<div class="nav-up container">

    <div class="up-left">
        <ul class="ul-up-left">
            @foreach ($array as $id => $item)
              <li class="over-li">
                <span class="material-icons">
                    {{$item['icon']}}
                </span>
                  <span> {{$item['txt']}}</span>
                  <span class="material-icons">
                    {{$item['icontwo']}}
                  </span>
                  <div class="speech-bubble">
                    <ul>
                        @foreach ($dropdownone as $item)
                        <li>{{$item}}</li>
                        @endforeach
                    </ul>
                  </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="up-right">

        <ul>
            @foreach ($arraytwo as $id => $item)
              <li class="over-li-two">
                <span class="material-icons">
                    {{$item['icon']}}
                </span>
                 <span> {{$item['txt']}}</span>
                  <span class="material-icons">
                    {{$item['icontwo']}}
                  </span>
                  <div class="speech-bubble-two">
                    <ul>
                        @foreach ($dropdowntwo as $item)
                        <li>{{$item}}</li>
                        @endforeach
                    </ul>
                  </div>
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
                  <div class="dropdown">
                      <div class="drop-left">
                            @foreach ($arraydropleft as $id => $item)
                            <div>
                                <h4>{{$item['txt']}}</h4>
                                <div class="txt">
                                    {{$item['txt2']}}
                                </div>
                            </div>
                            @endforeach
                      </div>
                      <div class="drop-right">
                          <div class="drop-right-up">
                            @foreach ($arraysquare as $id => $item)
                              <div class="square">
                                  <div class="left">
                                      <img src="{{$item['img']}}" alt="">
                                  </div>
                                  <div class="right">
                                      <h5>{{$item['title']}}</h5>
                                      <div>{{$item['txt']}}</div>
                                      <span>{{$item['txt2']}}</span>
                                  </div>
                              </div>
                            @endforeach
                          </div>
                          <div class="drop-right-down">
                            <h5>{{$droprightdownone}}</h5>
                            <div>{{$droprightdowntwo}}</div>
                            <span>{{$droprightthree}}</span>
                          </div>
                      </div>
                  </div>
                  <div class="dropdown-two">
                    @foreach ($arraydropdowntwo as $id => $item)
                      <div class="square">
                          <div class="left">

                              <div class="img-square">
                                  <div><img src="{{$item['icon']}}" alt=""></div>
                              </div>
                          </div>
                          <div class="right">
                              <h5>{{$item['txt']}}</h5>
                              <div>{{$item['txt2']}}</div>
                              <div>{{$item['txt3']}}</div>
                              <div>{{$item['txt4']}}</div>
                              <div>{{$item['txt5']}}</div>
                            </div>
                      </div>
                    @endforeach
                  </div>
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
                      <div class="dropdown">
                        <div class="drop-left">
                              @foreach ($arraydropleft as $id => $item)
                              <div>
                                  <h4>{{$item['txt']}}</h4>
                                  <div class="txt">
                                      {{$item['txt2']}}
                                  </div>
                              </div>
                              @endforeach
                        </div>
                        <div class="drop-right">
                            <div class="drop-right-up">
                              @foreach ($arraysquare as $id => $item)
                                <div class="square">
                                    <div class="left">
                                        <img src="{{$item['img']}}" alt="">
                                    </div>
                                    <div class="right">
                                        <h5>{{$item['title']}}</h5>
                                        <div>{{$item['txt']}}</div>
                                        <span>{{$item['txt2']}}</span>
                                    </div>
                                </div>
                              @endforeach
                            </div>
                            <div class="drop-right-down">
                              <h5>{{$droprightdownone}}</h5>
                              <div>{{$droprightdowntwo}}</div>
                              <span>{{$droprightthree}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-two">
                      @foreach ($arraydropdowntwo as $id => $item)
                        <div class="square">
                            <div class="left">

                                <div class="img-square">
                                    <div><img src="{{$item['icon']}}" alt=""></div>
                                </div>
                            </div>
                            <div class="right">
                                <h5>{{$item['txt']}}</h5>
                                <div>{{$item['txt2']}}</div>
                                <div>{{$item['txt3']}}</div>
                                <div>{{$item['txt4']}}</div>
                                <div>{{$item['txt5']}}</div>
                              </div>
                        </div>
                      @endforeach
                    </div>
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

    <span class="material-icons toggler">
        menu
    </span>



</div>

{{-- <div class="hamburger">
    <div class="hamburger-container">er</div>
</div> --}}
