<!DOCTYPE html>
<html lang="lv">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Pilsētvide ceļā uz universitāti</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" /> 

        <link href="/css/main.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
        <header class="landing-page-header">
            <button class="navigation-open" onclick="openNav()">...</button>
            <div>
                <img src="/assets/logo_colored.png" />
                <h1>Urban Walk to University</h1>
                <p>Pilsētvide ceļā uz universitāti</p>
            </div>
        </header>

        <div class="divider">

            <nav class="sidebar" id="nav">
                <div class="navigation-back-container">
                    <button class="navigation-back" onclick="closeNav()"><</button>
                </div>
                <div class="sidebar-container">
                    <img class="logo" src="/assets/logo_full_white.png" />
                    <div class="nav-link-container">
                        <a href="#visvalza" onclick="closeNav()" class="nav-link">Visvalža iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#ebu" onclick="closeNav()" class="nav-link">E. Birznieka-Upīša iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#upisa" onclick="closeNav()" class="nav-link">Upīša pasāža</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#cakmarijas" onclick="closeNav()" class="nav-link">Čakmarijas iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#dzirnavu" onclick="closeNav()" class="nav-link">Dzirnavu iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#barona" onclick="closeNav()" class="nav-link">K. Barona iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#vermanes" onclick="closeNav()" class="nav-link">Vērmanes dārzs</a>
                    </div>
                    <div class="lang-link-container">
                        <a href="#" class="lang-link selected">Latviski</a>
                        <a href="#" class="lang-link">English</a>
                    </div>
                </div>
            </nav>

            <div class="right-side">

                <main class="landing-page-content">
                    <div class="way-el left" id="visvalza">
                        <div class="img-container">
                            <img src="/assets/images/visvalza.jpg">
                        </div> 
                        <div class="descr right">
                            <h2>Visvalža iela</h2>
                            <p>Mans ceļš uz universitāti sākas <a href={{ url('/lv/visvalza-iela') }}>Visvalža ielā</a>. Tā ir neliela ieliņa starp Satekles un Ernesta Birznieka-Upīša ielu. Es eju gar Rīgas Ukraiņu vidusskolu, līdz nonāku Ernesta Birznieka-Upīša ielā.</p>
                        </div>
                    </div>

                    <div class="way-el right" id="ebu">
                        <div class="img-container">
                            <img src="/assets/images/ebu.jpg">
                        </div> 
                        <div class="descr">
                            <h2>E. Birznieka-Upīša iela</h2>
                            <p>Ernesta Birznieka-Upīša iela ir vidēja izmēra visai mierīga ieliņa vietā, kur pilsētas centrs pamazām pāriet Avotu apkaimē. Man pa <a href={{ url('/lv/ebu-iela') }}>E. Birznieka-Upīša ielu</a> ir jāiet vien neliels posms, līdz nokļūstu Upīša pasāžā.</p>
                        </div>
                    </div>

                    <div class="way-el left" id="upisa">
                        <div class="img-container">
                            <img src="/assets/images/upisa.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Upīša pasāža</h2>
                            <p>Lai ceļš būtu nedaudz īsāks, es izeju caur <a href={{ url('/lv/upisa-pasaza') }}>Upīša pasāžu</a>. Tas ir pagalmu tīkls, kas savieno E. Birznieka-Upīša ielu ar Marijas ielu. No tā iespējams iziet arī uz Dzirnavu ielu.</p>
                        </div>
                    </div>

                    <div class="way-el right" id="cakmarijas">
                        <div class="img-container">
                            <img src="/assets/images/caka.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Čakmarijas iela</h2>
                            <p>Nākamais nelielais mana ceļa posms ir pa Marijas ielu. Marijas iela un tās turpinājums Čaka iela (reizēm sarunvalodā saukta par <a href={{ url('/lv/cakmarijas-iela') }}>Čakmarijas ielu</a>) jau gadiem ir Rīgas lielā satiksmes bēda.</p>
                        </div>
                    </div>

                    <div class="way-el left" id="dzirnavu">
                        <div class="img-container">
                            <img src="/assets/images/dzirnavu.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Dzirnavu iela</h2>
                            <p>Marijas un K. Barona ielu savieno <a href={{ url('/lv/dzirnavu-iela') }}>Dzirnavu ielas</a> posms. Tas ir visai pieticīgs un šeit izceļas vien ieeja šikajā Berga bazārā. Taču šeit atrodas arī Tet galvenā ēka un tai iepretī — bārs Če.</p>
                        </div>
                    </div>

                    <div class="way-el right" id="barona">
                        <div class="img-container">
                            <img src="/assets/images/barona.jpg">
                        </div> 
                        <div class="descr">
                            <h2>K. Barona iela</h2>
                            <p>Lai nokļūtu līdz Vērmanes dārzam, eju pa <a href={{ url('/lv/barona-iela') }}>K. Barona ielu</a>. Šajā posmā ir Jāņa Rozes oriģinālā grāmatnīca, kā arī Latvijas vēsturē nozīmīgais nams Baronā ielā 3. Šobrīd šeit vēl brauc arī mašīnas, bet nākotnē Barona ielu plānots pārveidot par gājēju, velosipēdu un tramvaja ielu.</p>
                        </div>
                    </div>

                    <div class="way-el left" id="vermanes">
                        <div class="img-container">
                            <img src="/assets/images/vermanes.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Vērmanes dārzs</h2>
                            <p>Iespējams, viena no patīkamākajām ceļa daļām ir <a href={{ url('/lv/vermanes-darzs') }}>Vērmanes dārza</a> šķērsošana. Dārzu sāka veidot pirms gandrīz 200 gadiem pēc tam, kad, gaidot Napoleona iebrukumu, tika nodedzināta Pēterburgas priekšpilsēta.</p>
                        </div>
                    </div>
                    
                </main>
                @include('footer')
            </div>

        </div>
    </body>

    <script>
        function closeNav() {
            document.getElementById('nav').style.left = "-100vw";
        }
        function openNav() {
            document.getElementById('nav').style.left = "0vw";
        }
    </script>
</html>
