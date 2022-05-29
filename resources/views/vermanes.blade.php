@extends('section_layout')

@section('title')
Vērmanes dārzs
@endsection

@section('previous-link')
<a href={{ url('/lv/barona-iela') }}>< K. Barona iela</a>
@endsection
@section('next-link')
@endsection

@section('content')

<header class="image-header" style="background-image: url('/assets/images/vermanes.jpg')"></header>
<main class="section">
    <div class="section-title">
        <h1>Vērmanes dārzs</h1>
    </div>

    <div class="text-piece">
        <p>Vērmanes dārzs nosaukts par godu baltvācietei Annai Ģertrūdei Vērmanei, kura šo zemes gabalu savā testamentā 1827. gadā novēlēja pilsētai ar noteikumu, ka tas nekad netiks sadalīts vai privatizēts. Rīgā tā ir viena no retajām vietām, kas nosaukta kādas īstas sievietes vārdā.</p>    
        <p>Vērmanes dārzā ļoti daudz piemiņas zīmju dažādiem ievērojamiem Latvijas iedzīvotājiem, tajā skaitā, protams, pašai Vērmanei. Pirms pāris gadiem ievērību guva Vērmanes dārza strūklaka “Gadalaiki”, kurā tika ieklātas gaiši zilas flīzes — kaut vēsturiski tur ir bijis brūni pelēks segums. Tas gan ātri tika izlabots.</p>
        <p>Kopš Vērmanes dārza pirmssākumiem tajā ir bijusi estrāde. Tā gan laika gaitā ir mainījusies. Šobrīd tā ir ļoti interesanta vieta, kur vienuviet laiku pavada gan jaunieši, gan seniori. Vecāka gadugājuma cilvēki, piemēram, uz soliņiem mēdz spēlēt šahu.</p>    
        <p>Vēl šajā dārzā ir bērnu laukumiņš, ēka “Vernisāža”, ziedu tirgus. Ap vārtiem pie Barona un Elizabetes ielas krustojuma ir kioski.</p>    
    </div>

</main>

@endsection