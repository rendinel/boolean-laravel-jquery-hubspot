@php
$datiPastificio = ['PASTIFICIO','Il Pastificio','Grano decorticato a pietra','Il Molise c’è','Filiera Integrata','100 anni di pasta','Sartoria della pasta','Spaghetto Quadrato','Le Persone'];
$datiProdotti = ['PRODOTTI','Le Classiche','Le Integrali','Le Speciali','Le Biologiche','Le Gluten-Free','Le Semole','Le Extra di Lusso'];
$datiCollezioneDaChef = ['COLLEZIONE DA CHEF','Collezione da Chef','Grandi Cucine','Biologiche','Quadrate'];
$datiLimitedEdition = ['LIMITED EDITION','NEWS','» E-COMMERCE','» B2B','» COMUNICAZIONE','» SCARICA I CATALOGHI','» RASSEGNA STAMPA','» VIDEO','» CONTATTI','» LAVORA CON NOI','» CERTIFICAZIONI','» PRIVACY POLICY'];
$ragioneSociale = [
  'RAGIONE SOCIALE' => 'LA MOLISANA S.P.A.',
  'SEDE LEGALE' => 'CONTRADA COLLE DELLE API, 100/A - 86100 - CAMPOBASSO (CB)',
  'PEC' => 'LAMOLISANA@PEC.IT',
  'TEL' => '+39 0874 4981',
  'FAX' => '+39 0874 629584',
  'PER SEGNALAZIONI SCRIVERE A' => 'INFO@LAMOLISANA.IT',
  "PER CONTATTARE L'AREA COMMERCIALE" => "COMMERCIALE@LAMOLISANA.IT",
  "PER CONTATTARE L'AREA EXPORT:" => "EXPORT@LAMOLISANA.IT",
  'DATI AZIENDALI' => 'LEGGI DI PIÙ'
];
$urls = [
  'src' => '../img/gr.jpg',
  'src' => '../img/wh.jpg'
];
@endphp

<div class="container-footer">
  <div class="col one">
    <img src="https://www.lamolisana.it/wp-content/uploads/2020/04/marchio-sito-test.png"alt="">
  </div>
  <div class="col two">
    <ul>
      @foreach ($datiPastificio as $listitem)
        <li>{{$listitem}}</li>
      @endforeach
    </ul>
    <ul>
      @foreach ($datiProdotti as $listitem)
        <li>{{$listitem}}</li>
      @endforeach
    </ul>
  </div>
  <div class="col three">
    <ul>
      @foreach ($datiCollezioneDaChef as $listitem)
        <li>{{$listitem}}</li>
      @endforeach
    </ul>
    <ul>
      @foreach ($datiLimitedEdition as $listitem)
        <li>{{$listitem}}</li>
      @endforeach
    </ul>
  </div>
  <div class="col four">
    <ul>
      @foreach ($ragioneSociale as $keyitem => $item)
        <li> <span>{{$keyitem}}</span> : <span>{{$item}}</span> </li>
      @endforeach
    </ul>
    {{-- <img src="..img/gr.jpg" alt="">
    <img src="..img/wh.jpg" alt=""> --}}
    {{-- <img src="{{ asset('..img/gr.jpg') }}" /> --}}
    {{-- @foreach ($urls as $keyitem => $item)
    <img src="{{$urls['src']}}" alt="">
    @endforeach --}}
  </div>

</div>


  {{-- <ul>
    @foreach ($datiPastificio as $listitem)
      <li>{{$listitem}}</li>
    @endforeach
  </ul>

  <ul>
    @foreach ($ragioneSociale as $keyitem => $item)
      <li>{{$keyitem}} : {{$item}}</li>
    @endforeach
  </ul> --}}
