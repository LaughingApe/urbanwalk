<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Urban Walk to University</title>

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
                        <a href="#upisa" onclick="closeNav()" class="nav-link">Upītis passage</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#cakmarijas" onclick="closeNav()" class="nav-link">Čakmarijas iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#dzirnavu" onclick="closeNav()" class="nav-link">Dzirnavu iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#barona" onclick="closeNav()" class="nav-link">K. Barona iela</a>
                        <img class="separator" src="/assets/separator.png"/>
                        <a href="#vermanes" onclick="closeNav()" class="nav-link">Vērmane Garden</a>
                    </div>
                    <div class="lang-link-container">
                        <a href={{ url('/lv') }} class="lang-link">Latviski</a>
                        <a href={{ url('/en') }} class="lang-link selected">English</a>
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
                            <p>My way to the university starts on <a href={{ url('/en/visvalza-iela') }}>Visvalža iela</a>. It is a small street connecting Satekles iela and Ernesta Birznieka-Upīša iela. I pass the Riga Ukrainian Secondary School until I reach Ernesta Birznieka-Upīša iela.</p>
                        </div>
                    </div>

                    <div class="way-el right" id="ebu">
                        <div class="img-container">
                            <img src="/assets/images/ebu.jpg">
                        </div> 
                        <div class="descr">
                            <h2>E. Birznieka-Upīša iela</h2>
                            <p>Ernesta Birznieka-Upīša iela is a medium sized and relatively calm street in a place where city center turns into Avoti neighbourhood. I only walk a small part of <a href={{ url('/en/ebu-iela') }}>E. Birznieka-Upīša iela</a> to reach the Upītis passage.</p>
                        </div>
                    </div>

                    <div class="way-el left" id="upisa">
                        <div class="img-container">
                            <img src="/assets/images/upisa.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Upītis passage</h2>
                            <p>To make my walk shorter, I go through <a href={{ url('/en/upisa-pasaza') }}>Upītis passage</a>. It is a network of inner yards that connects E. Birznieka-Upīša iela with Marijas iela. You can also exit to Dzirnavu iela.</p>
                        </div>
                    </div>

                    <div class="way-el right" id="cakmarijas">
                        <div class="img-container">
                            <img src="/assets/images/caka.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Čakmarijas iela</h2>
                            <p>The next small section of my route is Marijas iela. Marijas iela and its continuation, Čaka iela, (sometimes together referred to as <a href={{ url('/en/cakmarijas-iela') }}>Čakmarijas iela</a>) has been the tragedy of Riga's traffic for years now.</p>
                        </div>
                    </div>

                    <div class="way-el left" id="dzirnavu">
                        <div class="img-container">
                            <img src="/assets/images/dzirnavu.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Dzirnavu iela</h2>
                            <p>Marijas iela and K. Barona iela are connected by a section of <a href={{ url('/en/dzirnavu-iela') }}>Dzirnavu iela</a>. It is rather modest and the main thing that stands out here is the enterence to the chic Berga bazārs. But this is also the home of the main building of Tet as well as a pub called Če.</p>
                        </div>
                    </div>

                    <div class="way-el right" id="barona">
                        <div class="img-container">
                            <img src="/assets/images/barona.jpg">
                        </div> 
                        <div class="descr">
                            <h2>K. Barona iela</h2>
                            <p>To reach Vērmane Garden, I go along <a href={{ url('/en/barona-iela') }}>K. Barona iela</a>. This section houses the original Jānis Roze bookstore, as well as the historically important building of Barona iela 3. Currently cars still drive on this street but in the future it is supposed to become the street of pedestrians, bikes and tram.</p>
                        </div>
                    </div>

                    <div class="way-el left" id="vermanes">
                        <div class="img-container">
                            <img src="/assets/images/vermanes.jpg">
                        </div> 
                        <div class="descr">
                            <h2>Vērmane Garden</h2>
                            <p>Possibly the nicest part of my route is <a href={{ url('/en/vermanes-darzs') }}>Vērmane Garden</a>. The creation of the garden started almost 200 years ago, when, anticipating Napoleon's invasion, Riga burned down its Saint Petersburg suburb.</p>
                        </div>
                    </div>
                    
                </main>
                @include('en.footer')
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
