@extends('lv.section_layout')

@section('title')
K. Barona iela
@endsection

@section('previous-link')
<a href={{ url('/lv/dzirnavu-iela') }}>< Dzirnavu iela</a>
@endsection
@section('next-link')
<a href={{ url('/lv/vermanes-darzs') }}>Vērmanes dārzs ></a>
@endsection

@section('content')

<header class="image-header" style="background-image: url('/assets/images/barona.jpg')"></header>
<main class="section">
    <div class="section-title">
        <h1>K. Barona iela</h1>
    </div>

    <div class="text-piece">
        <p>Krišjāņa Barona ielas posmā starp Dzirnavu ielu un Elizabetes ielu zīmīgākās vietas ir Leļļu teātris un oriģinālā Jāņa Rozes grāmatnīca. Vēl šeit ir dažādi veikali un kafejnīcas.</p>
        <p>Interesants ir necilais nams uz krustojuma ar Elizabetes ielu Barona ielā 3. To 1911. gadā uzcēla Latviešu Amatnieku palīdzības biedrības krāšanas un aizdošanas kase. Šī biedrība darbojās, lai atbalstītu latviešu kultūrālo attīstību. 1918. gada 17. novembrī tās telpās tika dibināta Tautas padome, kas 18. novembrī pasludināja Latvijas neatkarību. Šajā ēkā dzīvojis arī Gustavs Zemgals un mūža nogali pavadījis Krišjānis Barons.</p>
        <p>Pati Barona iela Rīgas centrā izceļas ar to, ka tai abos virzienos ir velojoslas un pa to iet tramvajs. Starp šiem diviem transportlīdzekļu veidiem lavierē arī privātās automašīnas, taču, lai padarītu tramvaju ātrāku un velojoslas drošākas, Barona ielu plānots automašīnām slēgt. Tomēr pagaidām tas vēl nav izdarīts, jo pilnvērtīga ielas pārveidošana un satiksmes pārorganizācija maksātu ap 40 miljoniem eiro, kuru domei pašlaik nav.</p>
    </div>

</main>

@endsection