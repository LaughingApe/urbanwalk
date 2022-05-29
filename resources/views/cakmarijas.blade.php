@extends('section_layout')

@section('title')
Čakmarijas iela
@endsection

@section('previous-link')
<a href={{ url('/lv/upisa-pasaza') }}>< Upīša pasāža</a>
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
        <p>Marijas ielas posms no Avotu līdz Dzirnavu ielai ir īss, bet visai interesants. Šeit atroadas Rīgas 11. pasta nodaļa, kurā es saņemu savus sūtījumus. Turpat arī ir ēka, kurā atrodas slavenā Marijas ielas vegānu komūna — dzīvoklis, kuru kopīgi īrē jaunieši-vegāni. Tā pastāv jau vairākus gadus un tās iemītnieki laika gaitā mainās. Aiz tās ir ieeja Upīša pasāžā, bet tālāk — humpalas.</p>
        <p>Uz Marijas un Dzirnavu ielas krustojuma ir veselas divas spēļu zāles — sveiciens no “Latvijas attīstībai” un Vides aizsardzības un reģionālās attīstības ministra Artūra Toma Pleša, kura dēļ Rīgai pagaidām liegts ierobežot šo sērgu.</p>
        <p>Marijas un Čaka iela Rīgai, protams, izsenis ir galvassāpju avots. Par to, ka tā ir pārvērtusies par šoseju un “dzīvība” uz tās ir pazudusi, runā jau gadiem. Ilgstoši tā tika nedroši izmantota kā četru joslu iela, kaut pēc Ceļu satiksmes un drošības departamenta noteikumiem tā ir pārāk šaura priekš četrām joslām. Jaunā Rīgas dome 2020. gadā nolēma to eksperimentālā kārtā pārveidot, ierīkojot ielas malās velojoslas un tā sašaurinot brauktuvi līdz noteikumiem atbilstošajām divām autojoslām.</p>
        <p>Diemžēl tas sastrēgumstundās traucēja sabiedriskajam transportam un autocentriskāk noskaņotie domnieki tā vietā, lai meklētu risinājumu šīm pāris stundām, vēlējās atteikties no velojoslām pilnībā. Kompromisa rezultātā Marijas ielā un lielā daļā Čaka ielas viena no velojoslām tika aizstāta ar sabiedriskā transporta joslu, bet otra velojosla saglabāta. Tas joprojām ir visai neveikls risinājums, ko nākotnē, cerams, aizstās ar kaut ko labāku.</p>
    </div>

</main>

@endsection