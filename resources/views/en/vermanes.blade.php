@extends('lv.section_layout')

@section('title')
Vērmane Garden
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
        <p>Vērmane Garden got its name from Blatic German Anna Ģertrūde Vērmane who gave this piece of land to in her testament to Riga on the condition that it will never be split or privitized. She passed away in 1827. This is one of the few sites in Riga which is named after a real woman.</p>
        <p>In Vērmane Garden there are a lot of commemorative plates and statues for important Latvians, including Vērmane herself. Couple of years ago a fountain “Seasons” attracted a lot of attention as its base was changed to cyan tiles while historically it had been light brown. That was quickly fixed.</p>
        <p>Since the beginnings of the garden there has been a stage here. It has had significant changes though. Currently it is an interesting place where both youth and seniors spend their time. Older people, for example, often play chess on the benches.</p>
        <p>In Vērmane Garden there is also a children’s playground, building “Vernisāža” and a flower market. On both sides of the gate from Barona iela and Elizabetes iela side there are kiosks.</p>
    </div>

</main>

@endsection