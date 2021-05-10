<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hubspot</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  </head>
  <body>

    @include('header')
    @include('jumbotron')
    @include('sectionone')
    @include('sectiontwo')
    @include('sectionthree')
    @include('footer')


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>

    var headerPosition = $('.scrollnav-container').offset().top;

    $(window).scroll(function(){
    var scrollValue = $(window).scrollTop();
    if(scrollValue > headerPosition) {
    $('.scrollnav-container').addClass('sticky');
    } else {
    $('.scrollnav-container').removeClass('sticky');
    }
    });

    </script>
  </body>
</html>
