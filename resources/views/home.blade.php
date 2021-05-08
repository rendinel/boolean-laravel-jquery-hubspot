<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Molisana Home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
  </head>
  <body>

    @include('header')
    @include('jumbotron')
    @include('sectionone')
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
