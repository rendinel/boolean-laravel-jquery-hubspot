@php

  $pasta = [
    'src' => 'https://www.lamolisana.it/wp-content/uploads/2017/06/4-spaghetto-quadrato-bucato-m.jpg',
    'src-h' => 'https://www.lamolisana.it/wp-content/uploads/2017/06/4-spaghetto-quadrato-bucato-h.jpg',
    'src-p' => 'https://www.lamolisana.it/wp-content/uploads/2017/06/4-spaghetto-quadrato-bucato-p.jpg',
    'titolo' => 'N.4 Spaghetto Quadrato Bucato',
    'tipo' => 'lunga',
    'cottura' => '6 min',
    "peso" => "500g",
    "descrizione" => "È la vera rivelazione della gamma! Lo Spaghetto Quadrato Bucato n.4 fa pensare subito ad una pasta molto succulenta che ha lo stesso potenziale dello Spaghetto Quadrato (N.1 Spaghetto Quadrato). La sua consistenza soda si sprigiona in bocca con un’esplosione di emozioni, grazie agli spessori corposi, al colore elegantemente ambrato, alla texture delicatamente ruvida, cangiante e piacevolissima al tatto che trattiene il condimento sulla superficie.  Da provare per rivoluzionare le sorti del primo piatto sia a casa che al ristorante.Dedicato a chi in cucina ama sperimentare nuove forme del gusto, ma vuole stupire affidandosi ad una pasta che garantisce ottime performance in cottura, lo Spaghetto Quadrato Bucato n .4 è il formato perfetto che racchiude tutte caratteristiche uniche di Pasta La Molisana.  Da provare per quelli che… il Bucatino già mi piace, lo Spaghetto Quadrato Bucato n .4 sarà il paradiso della pasta!"
  ];

@endphp



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Molisana Home</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;0,700;0,900;1,100;1,300;1,400&display=swap" rel="stylesheet">
  </head>
  <body>

    @include('header')

    <div class="product-details">

      <h4>{{$pasta["titolo"]}} </h4>
      <img class="img-h" src="{{$pasta["src-h"]}} " alt=""> <br>
      <img  class="img-p" src="{{$pasta["src-p"]}} " alt="">
      <div class="container">
        <p>{{$pasta["descrizione"]}}</p>
      </div>


    </div>

    @include('footer')

  </body>
</html>
