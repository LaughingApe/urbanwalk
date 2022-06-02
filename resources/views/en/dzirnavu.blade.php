@extends('lv.section_layout')

@section('title')
Dzirnavu iela
@endsection

@section('previous-link')
<a href={{ url('/lv/cakmarijas-iela') }}>< Čakmarijas iela</a>
@endsection
@section('next-link')
<a href={{ url('/lv/barona-iela') }}>K. Barona iela ></a>
@endsection

@section('content')

<header class="image-header" style="background-image: url('/assets/images/dzirnavu.jpg')"></header>
<main class="section">
    <div class="section-title">
        <h1>Dzirnavu iela</h1>
    </div>

    <div class="text-piece">
        <p>Dzirnavu iela is actually very long – it starts at Pulkveža Brieža iela in the Quiet center and ends only at Maskavas iela at the road to the Island bridge. On my way to the university I only pass a segment of it between Marijas iela and Barona iela.</p>
        <p>This place is pretty modest – there are some badly maintained building, parking spaces. Here there is also the headquarters of “Tet” in an unrenovated Soviet panel and red brick building. Only the enterance to the bourgeois Berga bazārs stands out in this neighbourhood.</p>
        <p>Right in front of the “Tet” building there is a pub often visited by Riga’s “alternative” youth called “Če” or “Č”, or “Čē” – the correct spelling can be a matter of discussion. In the pub there are many decorative letters “Č”, their Facebook page says “Čē” but in other places you can see “Če” which is the correct spelling of Che Guevaras name. It is possible though that the name of the pub is not about the revolutionary but just short for “Chomsky” which was the name of this pub’s predecessor, named after the American linguist and activist Noam Chomsky.</p>
        <p>This building of Dzirnavu iela 82 has an interesting history. In the place of “Če” in 1906 there was a shop and cafe “Austra” — it was a secret meeting place for the revolutionaries of the Latvian Social Democratic Workers’ Party. Here they also hid weapons and propaganda. On January 13 of that year the police raided it and arrested multiple people. Afterwards the shop owner Austra Dreifogele worked with other revolutionaries to attack Riga Police administration building (the beige building in front of Stockmann) and succesfully freed the arrested ones. In 1972 Alberts Bels wrote a novel “Saucēja balss” based on these events and in 1974 a movie “Uzbrukums slepenpolicijai” was created based on that book.</p>
    </div>

</main>

@endsection