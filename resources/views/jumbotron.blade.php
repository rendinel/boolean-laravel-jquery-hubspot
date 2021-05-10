@php

$band = "NEW PRODUCT: To grow better, you need to run better. Check out our newest product, Operations Hub, and experience operations reimagined.";

$jumbo = ['There’s a better way to grow.',
          'Marketing, sales, and service software that helps your business grow without compromise. Because "good for the business” should also mean “good for the customer".',
          'Get Hubspot Free',
          'Get started with FREE tools, and upgrade as you grow.']

@endphp
<div class="jumbotron">

    <div class="band">
        <div class="container band-container">
            <div class="band-left">
                {{$band}}
            </div>

            <div class="band-right">
                Explore Operations Hub
            </div>
        </div>
    </div>

    <div class="jumbotroncontainer">
        <div class="container jumbo-txt">
            <ul>
                @foreach ($jumbo as $listitem)
                  <li>{{$listitem}}</li>
                @endforeach
              </ul>
        </div>
    </div>
</div>


