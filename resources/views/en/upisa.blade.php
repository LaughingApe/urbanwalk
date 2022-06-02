@extends('lv.section_layout')

@section('title')
Upītis passage
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
        <p>The Upītis passage is a network of backyards that connects Marijas iela with Ernesta Birznieka-Upīša iela. It is also possible to exit it to a parking space that has enterance from Dzirnavu iela. The passage has a writing “Upīša pasāža” above its entrance from Marijas iela. </p>
        <p>The passage consists of four inner yards that are all connected. There are different businesses and institutions there – travel agency, music shops, an Indian cafe, a barber shop, fabric shop and an optician.</p>
    </div>
    <div class="double-gallery">
        <div class="image-container">
            <img src="/assets/images/gallery/upisa/arka1.jpg" />
            <img src="/assets/images/gallery/upisa/arka2.jpg" />
        </div>
        <div class="descr">Four of Upītis passage arches.</div>
    </div>
    <div class="text-piece">
        <p>From the third inner yard it is possible to exit to a parking space which leads to Dzirnavu iela. But the last inner yard, the one that is the closest to Ernesta Birznieka-Upīša iela, is a model example of gentrification – renovated white buildings with windows decorated with colored glass, the yard is separated from older building with a high wooden fence. The yard has beautiful pavement, there are well kept flowerbeds. On the windows there are, of course, eternal ads about flats – they are clearly overpriced so they stay empty for so long. The owners of this building also had the audacity to hang out a white flag as a protest against the City council not giving them property tax relief during the pandemic.</p>
    </div>

</main>

@endsection