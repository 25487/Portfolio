<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <title>Portfolio Taurese Usman</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>

        <nav>
            <ul>
                <li><a href="#section1">Home</a></li>
                    <li><a href="#section2">About</a></li>
                        <li><a href="#section3">Projecten</a></li>
                            <li><a href="#section4">Contact</a></li>
            </ul>
        </nav>
        <span style="display:block; height: 100px;"></span>
        <div id="section1">
          <span style="display:block; height: 50px;"></span>
            <h1>Portfolio Taurese Usman</h1>
            <span style="display:block; height: 175px;"></span>
            <h2 style="font-size: 25px;">Welkom Op Mijn Portfolio!</h2>
        </div>

        <div id="section2">
            <h1>About Me</h1>
            <div id="overmij"></div>

            <h4>Wie Ben Ik?</h4>
            <span style="display:block; height: 35px;"></span>
            <img class="foto" src="images/eigenfoto.JPG" alt="Logo" width="240" height="225">

            <p>Mijn naam is Taurese Usman. Ik ben een 18 jaar oude developer uit Zaandam, Nederland. Ik ben een gemotiveerde developer en ik zit in het tweede jaar van mijn opleiding (Mediadevelopment) hier op het Mediacollege. Ik heb deze opleiding gekozen om meer over development te leren, toen ik vorig jaar begon met de opleiding wist ik niet wat programmeren was. Nu natuurlijk wel, ik focus mezelf aan de frontend kant van de website. Ik hoop mezelf nog meer te kunnen verbreden in frontend development (HTML, CSS) en extra verdiepen in Backend developement (PHP). Mijn doel is om uiteindelijk een Full-Stack developer te worden.</p>


                <meta name="viewport" content="width=device-width, initial-scale=1">
                <!-- Add icon library -->

                <style>
                    .btn {
                        background-color: Black;
                        border: none;
                        color: white;
                        padding: 15px 30px;
                        cursor: pointer;
                        font-size: 12px;
                    }

                    .btn {
                        border-radius: 12px;
                    }

                    .btn:hover {
                        background-color: Grey;
                    }
                </style>

                    <form method="get" action="CV.pdf">
                    <button class="btn" type="submit"><i class="fa fa-download"></i> Download CV</button>

                </form>

                <span style="display:block; height: 35px;"></span>
                <div class="skills">
                    <h2> Mijn Skills</h2>
                    <span style="display:block; height: 35px;"></span>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png" width="75px" height="75px">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/CSS3_logo_and_wordmark.svg/1200px-CSS3_logo_and_wordmark.svg.png" width="75px" height="75px">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Javascript_badge.svg/946px-Javascript_badge.svg.png" width="75px" height="75px">
                </div>
                <span style="display:block; height: 55px;"></span>
                <div id="section3">
                    <h1> Mijn Projecten</h1>
                    <h3>Hier zijn enkele van mijn meest ambitieuze projecten weergegeven, met een beschrijving:</h3>
                    <span style="display:block; height: 55px;"></span>
                    <div class="wrapper">

                        <img alt="Myband" title="test" class="modaal-knop" src="images/project1.png" width="75%" border="1px">
                        <section class="album modaalContent">
                            <article>
                                <h3>MyBand</h3>

                                <span style="display:block; height: 35px;"></span>

                                <h4>Game of Thrones Inspired Website</h4>
                                  <span style="display:block; height: 35px;"></span>
                                <p><i>MyBand was een opdracht bedoeld voor iedereen om hun eigen website te maken en ik koos Game of Thrones als mijn onderwerp.</i></p>
                                  <span style="display:block; height: 35px;"></span>
                                  <h5><i>Dit was een Solo Project.</i></h5>
                                <span style="display:block; height: 35px;"></span>
                                <h4>Talen: PHP - Javascript - HTML - CSS</h4>

                                <h5>Link: <a href="https://github.com/25487/MyBand-Starter/tree/master/web" style="color: black;">GitHub Repository/Source code</a>
                                <a href="http://25487.hosts2.ma-cloud.nl/web/" style="color: black;">Live Versie</a></h5>

                                <ul class="tijdRechts">
                                    <a href="http://25487.hosts2.ma-cloud.nl/web/"><img src="images/project1.png" alt="logo" width="700%" border="1px">
                                    </a>

                                </ul>
                            </article>
                        </section>

                        <img alt="Modaalvenster" title="test" class="modaal-knop" src="images/project2.png" width="75%" border="1px">
                        <section class="album modaalContent">
                            <article>
                                <h3>Modaalvenster</h3>
                                <span style="display:block; height: 35px;"></span>
                                <h4>Modaalvenster opdracht</h4>
                                  <span style="display:block; height: 35px;"></span>
                                <p><i>Een modaalvenster opdracht, hierbij leerde ik kennis te maken met Modaal venster.
                                Dit was ook een van de grootste JavaScript opdrachten die ik heb gemaakt tot nu toe.</i></p>
                               <span style="display:block; height: 35px;"></span>
                               <h5><i>Dit was een Solo Project.</i></h5>
                               <span style="display:block; height: 35px;"></span>
                                <h4>Talen: Javascript - HTML - CSS</h4>
                                <h5>Link: <a href="https://github.com/25487/Modaalvenster-JS/tree/master/modaal-venster" style="color: black;">GitHub Repository/Source code</a>
                                  <a href="http://25487.hosts2.ma-cloud.nl/modaal-venster/" style="color: black;">Live Versie</a></h5>

                                <ul class="tijdRechts">
                                    <a href="http://25487.hosts2.ma-cloud.nl/modaal-venster/"><img src="images/project2.png" alt="logo" width="700%" border="1px"></a>

                                </ul>
                            </article>
                        </section>

                        <img alt="Bootstrap" title="test" class="modaal-knop" src="images/project3.png" width="75%" border="1px">
                        <section class="album modaalContent">
                            <article>
                                <h3>Bootstrap</h3>
                                      <span style="display:block; height: 35px;"></span>
                                <h4>Bootstrap Lord of the Rings</h4>
                                      <span style="display:block; height: 35px;"></span>
                                <h5><i>Bij deze opdracht hebben we kennis leren maken met Bootstrap. Ik kwam er snel genoeg achter dat ik er best goed in ben.  </i></h5>
                                      <span style="display:block; height: 35px;"></span>
                                <h4>Talen: HTML - CSS</h4>
                                      <span style="display:block; height: 35px;"></span>
                                <h5>Link: <a href="https://github.com/25487/Lord-of-the-Rings-Bootstrap" style="color: black;">GitHub Repository/Source code</a>
                                  <a href="http://25487.hosts2.ma-cloud.nl/LOTR-master/startDoc.html" style="color: black;">Live Versie</a></h5>
                              <ul class="tijdRechts">
                                <a href="http://25487.hosts2.ma-cloud.nl/LOTR-master/startDoc.html"><img src="images/project3.png" alt="logo" width="700%" border="1px"></a>
                              </ul>
                            </article>
                          </section>

                          <img alt="Bootstrap" title="test" class="modaal-knop" src="images/project4.png" width="75%" border="1px">
                              <section class="album modaalContent">
                                <article>
                                  <span style="display:block; height: 35px;"></span>
                                  <h3>Groepsproject</h3>
                                  <span style="display:block; height: 35px;"></span>
                                  <h4>Square Production House Website</h4>
                                  <span style="display:block; height: 35px;"></span>
                                  <h5><i> Een website die we moesten maken met onze groep (3 developers, 2 vormgevers) voor ons eigen bedrijf "Square Production House"</i></h5>
                                  <span style="display:block; height: 35px;"></span>
                                   <h5><i>Dit was een Groeps Project.</i></h5>
                                  <span style="display:block; height: 35px;"></span>
                                <h4>Talen: HTML - CSS - PHP - JavaScript</h4>
                                  <span style="display:block; height: 35px;"></span>

                                <ul class="tijdRechts">
                                  <h5>Link:
                                    <a href="http://squareproductions.nl/" style="color: black;">Live Versie</a></h5>
                                    <a href="http://squareproductions.nl/"><img src="images/project4.png" alt="logo" width="700%" border="1px"></a>

                                </ul>
                            </article>
                        </section>
                    </div>

                </div>

                <div id="section4">
                    <h1> Contact</h1>
                    <h3> Vul het formulier in om contact op te nemen:</h3>
                    <div id="white"></div>
                    <span style="display:block; height: 10px;"></span>

                    <div id="after_submit"></div>
                    <form id="contact_form" action="php/submit.php" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <label class="required" for="name">Uw Naam:</label>
                            <br />
                            <input id="name" class="input" name="firstname" type="text" value="" placeholder="Uw Naam..." size="30" />
                            <br />
                            <span id="name_validation" class="error_message"></span>
                        </div>
                        <div class="row">
                            <label class="required" for="name">Onderwerp:</label>
                            <br />
                            <input id="name" class="input" name="subject" type="text" value="" placeholder="Het Onderwerp..." size="30" />
                            <br />
                            <span id="name_validation" class="error_message"></span>
                        </div>
                        <div class="row">
                            <label class="required" for="email">Uw Email:</label>
                            <br />
                            <input id="email" class="input" name="email" type="text" value="" placeholder="Uw Email..." size="30" />
                            <br />
                            <span id="email_validation" class="error_message"></span>
                        </div>
                        <div class="row">
                            <label class="required" for="message">Uw Bericht:</label>
                            <br />
                            <textarea id="message" class="input" name="message" rows="7" cols="30" placeholder="Uw Bericht..."></textarea>
                            <br />
                            <span id="message_validation" class="error_message"></span>
                        </div>
                        <input id="submit_button" type="submit" value="Stuur Mail" onclick="myFunction()">

                        <script>
                            function myFunction() {
                                alert("Dankuwel voor de mail! U zult een bericht terug krijgen binnen 1-3 werkdagen!");
                            }
                        </script>
                    </form>

                </div>
</body>
<footer>

    <span style="display:block; height: 20px;"></span>

    <a href="https://www.linkedin.com/in/taurese-usman-2b22b4183/">
        <img src="https://image.flaticon.com/icons/png/512/61/61109.png" width="50%"></a>

    <a href="https://github.com/25487">
        <img src="https://cdn.freebiesupply.com/logos/large/2x/github-icon-logo-png-transparent.png" width="50%">
    </a>
    <p>&copy;Taurese Usman
    </p>
</footer>

</div>

<script src="script.js">
</script>

</html>
