@extends('lv.section_layout')

@section('title')
Čakmarijas iela
@endsection

@section('previous-link')
<a href={{ url('/lv/upisa-pasaza') }}>< Upītis passage</a>
@endsection
@section('next-link')
<a href={{ url('/lv/dzirnavu-iela') }}>Dzirnavu iela ></a>
@endsection

@section('content')

<header class="image-header" style="background-image: url('/assets/images/caka.jpg')"></header>
<main class="section">
    <div class="section-title">
        <h1>Čakmarijas iela</h1>
    </div>

    <div class="text-piece">
        <p>The segment of Marijas iela from Avotu iela to Dzirnavu iela is short but rather interesting. Here there is Riga 11th post office where I receive my packages. Close to it there is also the building of the famous Marijas iela vegan commune – a flat collectively rented by young vegans. It exists for several years and, as time goes, their inhabitants change. After that there is the enterance to Upītis passage but futher along the street there is a thirft shop.</p>
        <p>On the crossing between Marijas iela and Dzirnavu iela there are two gambling sites – a greeting from political party “Latvijas attīstībai” and their Minister of Environmental Protection and Regional Development Artūrs Toms Plešs because of whom Riga cannot fight this scourge.</p>
        <p>Marijas iela and Čaka iela has been a headache for Riga for quite some time. It had turned into some kind of highway with all “life” of the street leaving. For a very long time it was used unsafely as a four lane street even though according to the rules of the Road Traffic Safety Directorate (CSDD), it was too narrow for such traffic. In 2020, the new Riga City council decided to experiment with esablishing bike lanes and reducing the car space to two lanes.</p>
        <p>Unfortunately this created public transport delays in the busy hours and the more car-centric city councillors wanted not to look for a solution for those few hours but instead to reject the bike lane idea completely. As a compromise one of the bike lanes in Marijas iela and part of Čaka iela were removed and replaced by a public transportation lane. This is still an imperfect solution that will hopefully be replaced by something better in the future.</p>
    </div>

</main>

@endsection