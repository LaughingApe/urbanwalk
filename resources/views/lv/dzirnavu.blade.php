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
        <p>Dzirnavu iela patiesībā ir ļoti gara — tā sākas pie Pulkveža Brieža ielas Klusajā centrā un beidzas vien Maskavas ielā, pie Salu tilta uzbrauktuves. Taču manā ceļā uz universitāti ietilpst vien nelielais posms starp Marijas un Barona ielu.</p>
        <p>Šeit ir salīdzinoši pieticīgi — dažas nekoptas mājas, stāvlaukumi. Šeit ir arī “Tet” birojs, kas atrodas nerenovētā padomju laika paneļu un sarkano ķieģeļu ēkā. Vienīgi ieeja buržujiskajā Berga bazārā šeit izceļas uz pārējā fona.</p>
        <p>Tieši pretī “Tet” ēkai ir Rīgas “alternatīvo” jauniešu iecienītais bārs “Če” jeb “Č”, jeb “Čē” — par nosaukuma pareizrakstību noteikti var strīdēties. Telpu interjerā burts “Č” parādās atsevišķi, viņu pašu Facebook lapā ir rakstīts “Če”, bet citviet bieži tiek izmantots “Če”, jo tā to pareizi raksta Če Gevaras vārdā. Iespējams gan, ka bāra nosaukums nemaz neattiecas uz revolucionāru, bet gan ir saīsinājums no “Če” priekšteča “Chomsky”, kas savukārt bija nosaukts amerikāņu lingvista un aktīvista Noama Čomska vārdā.</p>
        <p>Šim namam Dzirnavu ielā 82 ir interesanta vēsture. Tur, kur šobrīd atrodas “Če”, 1906. gadā bija veikals un ēstuve “Austra” — tā bija slepena Latvijas sociāldemokrātiskās strādnieku partijas revolucionāru tikšanās vieta, ieroču un propagandas materiālu glabātuve. Tā gada 13. janvārī tur veica kratīšanu un aizturēja vairākus cilvēkus. Pēc tam veikala īpašniece Austra Dreifogele kopā ar citiem revolucionāriem izplānoja uzbrukuma operāciju Rīgas Policijas pārvaldei (bēšā ēka pretī Stockamann) un veiksmīgi atbrīvoja aizturētos. Par šiem notikumiem 1972. gadā Alberts Bels sarakstīja romānu “Saucēja balss”, bet 1974. gadā tas ekranizēts mākslas filmā “Uzbrukums slepenpolicijai”.</p>
    </div>

</main>

@endsection