@extends('lv.section_layout')

@section('title')
Upīša pasāža
@endsection

@section('previous-link')
<a href={{ url('/lv/ebu-iela') }}>< E. Birznieka-Upīša iela</a>
@endsection
@section('next-link')
<a href={{ url('/lv/cakmarijas-iela') }}>Čakmarijas iela ></a>
@endsection

@section('content')

<header class="image-header" style="background-image: url('/assets/images/upisa.jpg')"></header>
<main class="section">
    <div class="section-title">
        <h1>Upīša pasāža</h1>
    </div>

    <div class="text-piece">
        <p>Upīša pasāža ir pagalmu tīkls, kas savieno Marijas ielu ar Ernesta Birznieka-Upīša ielu, taču no tās var nokļūt arī stāvlaukumā ar izeju uz Dzirnavu ielas. Marijas ielas pusē ieeju rotā uzraksts “Upīša pasāža”.</p>
        <p>Pasāža sastāv no četriem iekšējiem pagalmiem, kas visi savā starpā savienoti. Tajos ir dažādi uzņēmumi, iestādes — ceļojumu aģentūra, mūzikas veikali, indiešu kafejnīca, frizētava, audumu veikali, optika.</p>
    </div>
    <div class="double-gallery">
        <div class="image-container">
            <img src="/assets/images/gallery/upisa/arka1.jpg" />
            <img src="/assets/images/gallery/upisa/arka2.jpg" />
        </div>
        <div class="descr">Četras no Upīša pasāžas arkām.</div>
    </div>
    <div class="text-piece">
        <p>No trešā pagalma var iziet uz stāvlaukumu, kas savukārt ved uz Dzirnavu ielu. Bet pēdējais pagalms, tuvākais Ernesta Birznieka-Upīša ielai, ir ģentrifikācijas paraugs — renovētās baltās ēkas, kuras logus dekorē krāsaini stikla elementi, pagalmu no vecajām ēkām nodala augsts koka žogs. Šis pagalms ir skaisti bruģēts, tur ir apkoptas dobes. Ieeja dzīvojamajā ēkā ir ar automātiskajām durvīm. Logus, protams, rotā mūžīgas dzīvokļu reklāmas, jo tie acīmredzot ir pārcenoti. Šīs ēkas īpašnieki arī bija pietiekami nekaunīgi, lai Covid-19 pandēmijas laikā izkārtu baltu karogu, sūdzoties, ka Rīga viņiem nav piešķīrusi nekustamā īpašuma nodokļa atlaides.</p>
    </div>

</main>

@endsection