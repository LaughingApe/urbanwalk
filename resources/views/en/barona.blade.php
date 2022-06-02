@extends('lv.section_layout')

@section('title')
K. Barona iela
@endsection

@section('previous-link')
<a href={{ url('/lv/dzirnavu-iela') }}>< Dzirnavu iela</a>
@endsection
@section('next-link')
<a href={{ url('/lv/vermanes-darzs') }}>Vērmane Garden ></a>
@endsection

@section('content')

<header class="image-header" style="background-image: url('/assets/images/barona.jpg')"></header>
<main class="section">
    <div class="section-title">
        <h1>K. Barona iela</h1>
    </div>

    <div class="text-piece">
        <p>Between Dzirnavu iela and Elizabetes iela the most notable places on Krišjāņa Baumaņa iela are the Puppet theater and the original Jānis Roze bookstore. There are also many shops and cafes here.</p>
        <p>The building on the crossing with Elizabetes iela, on Barona 3, is interesting. It was built in 1911 for Latvian Craftsmen Help Association’s Saving and Credit Treasury. This association supported Latvian cultural development. In November 17, 1918, in this building the People’s Council, which proclaimed the independence of Latvia the following day, was founded. Gustavs Zemgals and Krišjānis Barons lived in that building.</p>
        <p>Barona iela itself is special for it has bike lanes in both directions and a tram. Currently cars too live together with these other modes of transport but to make the tram faster and the bike lanes safer, there is a plan to close Barona iela to cars completely. But for not they have not done that because full reorganisation of this street and its surroundings would require about 40 million euro which the City council does not have.</p>
    </div>

</main>

@endsection