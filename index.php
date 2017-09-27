<!DOCTYPE html>
<html lang="en">



<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wellness centar Lela</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <link rel="icon" href="/salon/upload/img/favicon.png">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" onclick="loadDoc('home.xml')">Wellness centar Lela</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Njega lica
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#content" onclick="loadDoc('maryCohr.xml')">Mary Cohr</a></li>
                            <li><a href="#content" onclick="loadDoc('matis.xml')">Matis</a></li>
                            <li><a href="#content" onclick="loadDoc('ostaliTretmani.xml')">Ostali tretmani</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Njega tijela
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#content" onclick="loadDoc('depilacije.xml')">Depilacije</a></li>
                            <li><a href="#content" onclick="loadDoc('masaze.xml')">Masaže</a></li>
                            <li><a href="#content" onclick="loadDoc('anticelulitniTretmani.xml')">Anticelulitni tretmani</a></li>
                            <li><a href="#content" onclick="loadDoc('njegaRuku.xml')">Njega ruku i stopala</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#content" onclick="loadDoc('cjenik.php')">Cjenik</a>
                    </li>
                    <li>
                        <a href="#content" onclick="loadDoc('kontakt.xml')">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">Lela</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>

        <div class="row">
            <div class="col-sm-4">
                <h2>Akcije</h2>
                <p>30% za učenike, studente i umoirovljenike na sve usluge</p>
            </div>
            <div class="col-sm-4">
                <h2>Radno vrijeme</h2>
                <p>
                  <table style="width:100%">
                      <tr>
                        <th>pon, sri, pet</th>
                        <th>08:30 - 16:00</th>
                        </tr>
                      <tr>
                        <th>uto, cet</th>
                        <th>12:00 - 19:00</th>
                        </tr>
                      <tr>
                        <th>sub</th>
                        <th>09:00 - 13:00</th>
                      </tr>
                    </table>
                    </p>
            </div>
            <div class="col-sm-4">
                <h2>Kontakt</h2>
                <p>
                    <i class="fa fa-fw fa-phone" aria-hidden="true"></i> (385) 31 650 677<br />
                    <i class="fa fa-fw fa-mobile" aria-hidden="true"></i> (385) 91 373 0003<br />
                    <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <a href="mailto:#">lela@salon-lela.hr</a><br />
                    <i class="fa fa-fw fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/wellnesscentarlela/">@wellnesscentarlela</a>
                </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <div class="row">
            <div class="col-sm-8" id="content">
                <h2>
                    O nama
                </h2>
                <blockquote>
                    Kada birate kozmetički salon, koje su kvalitete Vama najvažnije? Mi u Wellness centru Lela smatramo da su to: stručnost, kvaliteta usluge i preparata.
                </blockquote>
                <p class="col-xs-12 col-md-8" align="justify">
                    Od studenog 1997. kada je salon otvoren do danas, zahvaljujući redovnom stručnom usavršavanju osoblja
                    i praktičnoj primjeni novih kozmetičkih metoda uljepšavanja te liječenja lica i tijela, stvorili smo
                    veliki krug zadovoljnih stalnih i povremenih klijenata. Kontinuirano praćenje noviteta na domaćim i
                    stranim kozmetičkim sajmovima te uvođenje najsuvremenijih kozmetičkih usluga i aparata u našu ponudu,
                    jamstvo su pružanja vrhunskih kozmetičkih tretmana za lice i tijelo.
                </p>
                <p class="col-xs-12 col-md-4" align="justify">
                    <img src="upload/img/about.jpg" class="img-responsive img-rounded float-right" alt="Wellness centar Lela"></img>
                </p>
                <p class="col-xs-12 col-md-12" align="justify">
                	Primjenjujući samo vrhunske preparate renomiranih kozmetičkih kuća, uspješno rješavamo probleme
                	najosjetljivije mladenačke kože, ali i kože zrelije dobi. Susretljivost i srdačnost osoblja  Wellness
                	centra Lela te individualan pristup svakom klijentu jamstvo su Vašeg zadovoljstva našim uslugama.
                	Želja i cilj nam je pružiti Vam kozmetičke usluge i preparate koji najbolje odgovaraju upravo Vama.
                </p>
                <p class="col-xs-12 col-md-12" align="justify">
                	Zahvaljujem svim našim klijentima na do sad ukazanom povjerenju. Vaše zadovoljstvo naš je najveći poticaj
                	za nastavak uspješnog rada i najbolja preporuka za buduće korisnike usluga Wellness centra Lela
                </p>
                <hr>
                <p class="col-xs-12 col-md-12">
                    Jelica Matijanić<br>
                    stručni učitelj, majstor kozmetičar
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Posjetite nas</h2>
                <address>
                    <strong>Wellness centar Lela</strong>
                    <br>dr. Franje Tuđmana 3
                    <br>Valpovo 31550
                    <br>
                </address>
                <p>
                    <i class="fa fa-fw fa-phone" aria-hidden="true"></i> (385) 31 650 677<br />
                    <i class="fa fa-fw fa-mobile" aria-hidden="true"></i> (385) 91 373 0003<br />
                    <i class="fa fa-fw fa-envelope-o" aria-hidden="true"></i> <a href="mailto:#">lela@salon-lela.hr</a><br />
                    <i class="fa fa-fw fa-facebook" aria-hidden="true"></i><a href="https://www.facebook.com/wellnesscentarlela/">@WellnessCentarLela</a>
                </p>
            </div>
        </div>
        <!-- /.row -->

        <hr>



        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Wellness centar Lela 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    function loadDoc(adresa) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("content").innerHTML =
          this.responseText;
        }
      };
        add="resources/xml/"+adresa;
      xhttp.open("GET", add, true);
      xhttp.send();
    }
    </script>
    <script>
    $(document).on('click','.navbar-collapse.in',function(e) {
    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
        $(this).collapse('hide');
    }
});
    </script>

</body>

</html>
