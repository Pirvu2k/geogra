<?php

if(isset($_GET['submit']))
{
  $scor=0;
  $error="";
  if(!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']||!$_GET['question1']) $error="Va rugam, scrieti cate un raspuns pentru fiecare intrebare!<br/><p style='padding-bottom:2px; padding-top:1.5px;'>In caz contrar, scorul va ramane 0.</p>";
  else
  {
    if($_GET['question1']!='Luxemburg') $error.="<p style='padding:1px;'>La prima intrebare ati raspuns gresit! Raspunsul era: <strong>Luxemburg</strong></p>";
    else $scor++;

    if($_GET['question2']!='Vatican') $error.="<br/><p style='padding:1px;'>La a doua intrebare ati raspuns gresit! Raspunsul era: <strong>Vatican</strong></p>";
    else $scor++;

    if($_GET['question3']!='10') $error.="<br/><p style='padding:1px;'>La a treia intrebare ati raspuns gresit! Raspunsul era: <strong>10</strong></p>";
    else $scor++;

    if($_GET['question4']!='Volga') $error.="<br/><p style='padding:1px;'>La a patra intrebare ati raspuns gresit! Raspunsul era: <strong>Volga</strong></p>";
    else $scor++;

    if($_GET['question5']!='Produsul Intern Brut') $error.="<br/><p style='padding:1px;'>La a cincea intrebare ati raspuns gresit! Raspunsul era: <strong>Produsul Intern Brut</strong></p>";
    else $scor++;

    if($_GET['question6']!='Italia') $error.="<br/><p style='padding:1px;'>La a sasea intrebare ati raspuns gresit! Raspunsul era: <strong>Italia</strong></p>";
    else $scor++;

    if($_GET['question7']!='Ungaria') $error.="<br/><p style='padding:1px;'>La a saptea intrebare ati raspuns gresit! Raspunsul era: <strong>Ungaria</strong></p>";
    else $scor++;

    if($_GET['question8']!='16') $error.="<br/><p style='padding:1px;'>La a opta intrebare ati raspuns gresit! Raspunsul era: <strong>16</strong></p>";
    else $scor++;

    if($_GET['question9']!='Baltica') $error.="<br/><p style='padding:1px;'>La a noua intrebare ati raspuns gresit! Raspunsul era: <strong>Baltica</strong></p>";
    else $scor++;

    if($_GET['question10']!='Dunarea') $error.="<br/><p style='padding:1px;'>La a zecea intrebare ati raspuns gresit! Raspunsul era: <strong>Dunarea</strong></p>";
    else $scor++;

  }


  if($error)
  {
    $result='<div class="alert alert-danger"><strong>'.$error.'<br/>Scor: '.$scor.'/10</strong></div>';
  }
  else
  {
    $result='<div class="alert alert-danger" style="background-color:green;"><strong>Felicitari, ati raspuns corect la toate intrebarile!<br/><p style="padding-top:10px;">Scor: 10/10</p></strong>';
  }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Geografie</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/material-kit.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jqvmap.css') }}" media="screen" rel="stylesheet" type="text/css">
</head>

<body class="index-page">
    <!-- Navbar -->
    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="{{ asset('assets/img/logo.png') }}">
                        </div>
                        <div class="brand">
                            Europa
                        </div>


                    </div>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navigation-index">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="javascript:void(0)" onclick="show('map');">
                            <i class="material-icons">map</i> Hartă
                            <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="show('info');">
                            <i class="material-icons">description</i> Informații
                            <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" onclick="show('questionnaire');">
                            <i class="material-icons">check_box</i> Chestionar
                            <div class="ripple-container"></div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">
                            <i class="material-icons">person_add</i> Bibliografie
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{ asset('assets/img/bg.jpg') }}');">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="brand">

                            <div id="carousel-example-generic" class="card card-raised card-carousel carousel slide" data-ride="carousel" style="position:relative; bottom:100px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="4"></li>


                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <center><img src="{{ asset('assets/img/EU.jpg') }}" alt="EUROPA" width="800" height="400">
                                        </center>
                                        <div class="carousel-caption" style="color:aliceblue;">
                                            <h2>EUROPA</h2>
                                            <p class="lead">Europa este, convențional, unul dintre cele șapte continente.</p>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <center><img src="{{ asset('assets/img/mareaCaspica.jpg') }}" alt="Marea Caspica" width="800" height="400">
                                        </center>
                                        <div class="carousel-caption" style="color:aliceblue;">
                                            <h2>Marea Caspica</h2>
                                            <p class="lead">Neavând scurgere în Oceanului Planetar, Marea Caspică este cel mai mare lac de pe glob (371 800km pătrați).</p>
                                        </div>
                                    </div>


                                    <div class="item">
                                        <center><img src="{{ asset('assets/img/dunarea.jpg') }}" alt="Dunarea" width="800" height="400">
                                        </center>
                                        <div class="carousel-caption">
                                            <h2>Dunarea</h2>
                                            <p class="lead">Dunărea este al doilea fluviu european ca lungime (2860 km). Este fluviul care străbate cel mai mare număr de ţări (10).</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <center><img src="{{ asset('assets/img/vatican.jpg') }}" alt="Vatican" width="800" height="400">
                                        </center>
                                        <div class="carousel-caption" style="color:aliceblue;">
                                            <h2>Vatican</h2>
                                            <p class="lead">Vaticanul, stat european, este cel mai mic stat din intreaga lume.</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <center><img src="{{ asset('assets/img/luxemburg.jpg') }}" alt="Luxemburg" width="800" height="400">
                                        </center>
                                        <div class="carousel-caption" style="color:aliceblue;">
                                            <h2>Luxemburg</h2>
                                            <p class="lead">Cea mai bogata tara din lume este Luxemburg si se afala in Europa.{45530 euro venit anual/locuitor.}</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div id="map" class="main main-raised">
            <div class="section section-tabs">
                <div class="container">
                    <center>
                        <h1 style="padding-bottom: 20px;">Hartă interactivă</h1>
                        <div id="vmap"></div>
                    </center>
                </div>
            </div>
            <div id="container-info" style="display:none;">
                <div class="section section-image">
                    <div class="container-fluid text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <a target="_blank">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/1/13/EU-Romania.svg" alt="Rounded Image" class="img-rounded img-raised img-responsive" id="pos-1">
                                    <button class="btn btn-simple btn-primary btn-lg" id="sub-1">Țara 1</button>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a target="_blank">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Blank_map_of_Europe_%28with_disputed_regions%29.svg/1280px-Blank_map_of_Europe_%28with_disputed_regions%29.svg.png" alt="Rounded Image" class="img-rounded img-raised img-responsive" id="pos-2">
                                    <button class="btn btn-simple btn-primary btn-lg" id="sub-2">Țara 2</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section section-tabs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title">
                                    <h3 id="title-1">Țara 1</h3>
                                </div>

                                <div class="card card-nav-tabs">
                                    <div class="header header-success">
                                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="active">
                                                        <a href="#tab1" data-toggle="tab">
                                                            <i class="material-icons">info</i> Informatii Generale
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab2" data-toggle="tab">
                                                            <i class="material-icons">trending_up</i> Economie
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab3" data-toggle="tab">
                                                            <i class="material-icons">sort</i> Detalii
                                                        </a>
                                                    </li>
													<li>
														<a id="flag-1" href="javascript:void(0)" class="pull-right">
															<img src="https://flagpedia.net/data/flags/normal/ro.png" class="img-rounded img-responsive img-raised" width="32">
														</a>
													</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active" id="tab1">
                                                <p></p>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <p></p>
                                            </div>
                                            <div class="tab-pane" id="tab3">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="title">
                                    <h3 id="title-2">Țara 2</h3>
                                </div>

                                <div class="card card-nav-tabs">
                                    <div class="header header-danger">
                                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                        <div class="nav-tabs-navigation">
                                            <div class="nav-tabs-wrapper">
                                                <ul class="nav nav-tabs" data-tabs="tabs">
                                                    <li class="active">
                                                        <a href="#tab4" data-toggle="tab">
                                                            <i class="material-icons">info</i> Informatii Generale
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab5" data-toggle="tab">
                                                            <i class="material-icons">trending_up</i> Economie
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab6" data-toggle="tab">
                                                            <i class="material-icons">sort</i> Detalii
                                                        </a>
                                                    </li>
													<li>
														<a id="flag-2" href="javascript:void(0)" class="pull-right">
															<img src="https://flagpedia.net/data/flags/normal/ro.png" class="img-rounded img-responsive img-raised" width="32">
														</a>
													</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="tab-content text-center">
                                            <div class="tab-pane active" id="tab4">
                                                <p></p>
                                            </div>
                                            <div class="tab-pane" id="tab5">
                                                <p></p>
                                            </div>
                                            <div class="tab-pane" id="tab6">
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
		
        <div id="questionnaire" style="display:none;" class="main main-raised">
            <div id="container-quest">
                <div class="section section-image">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="card card-signup">
									<div class="header header-primary text-center">
                                        <h2>Cat de multe stii despre Europa?</h2>
									</div>
                                    <div class="panel-body">
                                        <form method="get">

                                            <p>1) Care este cea mai bogata tara din Europa?</p>
                                            <input type="text" class="form-control" name="question1" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">2) Care este cel mai mic lac de pe glob?</p>
                                            <input type="text" class="form-control" name="question2" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">3) Cate tari strabate Dunarea?</p>
                                            <input type="text" class="form-control" name="question3" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">4) Care este cel mai lung rau european?</p>
                                            <input type="text" class="form-control" name="question4" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">5) Ce inseamna PIB?</p>
                                            <input type="text" class="form-control" name="question5" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">6) Ce tara europeana este de fapt o peninsula in forma de cizma inconjurata de patru mari? </p>
                                            <input type="text" class="form-control" name="question6" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">7) Ce tara europeana este inconjurata de Slovacia, Ucraina, Romania, Serbia, Croatia, Slovenia si Austria?</p>
                                            <input type="text" class="form-control" name="question7" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">8) In cate state este azi impartita Germania?</p>
                                            <input type="text" class="form-control" name="question8" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">9) Polonia se afla in sudul carei mari?</p>
                                            <input type="text" class="form-control" name="question9" placeholder="Scrie aici raspunsul" />

                                            <p style="margin-top:20px;">10) Ce rau izvoraste din Muntii Padurea Neagra din Germania si se varsa in Marea Neagra?</p>
                                            <input type="text" class="form-control" name="question10" placeholder="Scrie aici raspunsul" />

                                            <br/>
                                            <input type="submit" class="btn btn-primary" value="Verifica!" name="submit" />
											<div id="check_q">
                                            <?php if(isset($result)) echo $result;?>
											</div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>		
		
        <div id="info" style="display:none;" class="main main-raised">
            <div id="container-quest">
                <div class="section section-image">
                    <div class="container">
						<div class="tim-typo">
	                        <p><h1><span class="tim-note">Informații</span><br>Europa</h1>
	                            Este unul din cele șapte continente ale lumii.</p>
<p>Numele de Europa era o provincie în Tracia. Numele ei inseamna ,,a merge spre vest,,.</p>
<p>Este un continent aflat în centrul emisferei nordice. Un continent aflat între Marea Mediterană, Oc. Atlantic , Oceanul Înghețat și asia. Un continent ale cărui limite sunt dificil de stabilit.Împreună cu Asia formează o mare masă continentală numită Eurasia. Are un contrur neregulat, cu mari peninsule(Balcanică, Iberică, Italică, Scandinavică), cu multe golfuri și insule. O mare varietate de țărmuri: înalte și joase, aflate sub influența mareelor sau lipsite de această influență. Lungimea șărmurilor este de 43.000 km. Este un continent aflat în totalitate în zona climei temperate. Este bine populat, având cea mai mare densitate a popullațieie. Este Lumea Veche care a descoperit și colonizat Lumea Nouă</p>
<h3>Delimitări</h3>
<ul>
<li>Nord-71°10′21″N 25°47′40″ -Capul Nord (Norvegia) </li>
<li>Sud-36°0′15″N 5°36′37″ - Punta Marroqui (Spania) </li>
<li>Est-60° 0′ 0″ N, 60° 0′ 0″ E-Nord-estul Muntilor Ural(Rusia) </li>
<li>Vest-38°46′51″N 9°29′54″ -Capul Roca(Portugalia) </li>
</ul>

<p> Relieful Europei este foarte variat pe zone relativ mici. În regiunile sudice predomină caracterul muntos, în timp ce mergând spre nord, terenul coboară dinspre Alpi, Pirinei și Carpați, prin teritoriile deluroase, și continuă către câmpiile joase din nord și est. Aceste șesuri prelungite sunt cunoscute sub numele de Marea Câmpie Europeană, iar în mijlociul lor se întinde Câmpia Nord-Europeană. Un arc format din zone mai înalte, de asemenea, se desfășoară de-a lungul țărmului nord-vestic, care începe în vestul insulelor britanice și Irlandei și continuă până la țărmul articulat și plin de fiorduri al Norvegiei. </p>
	                    </div>
                    </div>
                </div>
			</div>
		</div>

        <footer class="footer">
            <div class="container">
                <div class="copyright pull-right">
                    &copy; 2017, made with <i class="material-icons">favorite</i> by <a href="https://ionut.work/">Ionuț</a>, Mihai & Ovidiu.
                </div>
            </div>
        </footer>
    </div>

    <!-- Start Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#C0C0C0; padding-bottom:20px;">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="material-icons">clear</i>
        </button>
        <h4 class="modal-title" style="font-weight:bold;">De unde am extras informatiile?</h4>
      </div>
      <div class="modal-body">
      <ul>

      <li><a href="https://jqvmap.com/">Jqvmap -> Harta</a></li>

      <li><a href="https://en.wikipedia.org/wiki/Europa">Wikipedia: Europa -> Informatii generale</a></li>

      <li><a href="https://en.wikipedia.org/wiki/Europa_(currency)">Wikipedia: Europa -> Monede</a></li>
      
      <li><a href="https://en.wikipedia.org/wiki/List_of_European_countries_by_population">Wikipedia: Europa -> Lista tari europene</a></li>

      <li><a href="https://en.wikipedia.org/wiki/Europe#/media/File:Europe_orthographic_Caucasus_Urals_boundary_(with_borders).svg">Wikipedia: Europa -> Pozitii geografice</a></li>

      <li><a href="http://www.calificativ.ro/trivia-quizzes/quiz-Geografia_Europei-qid268-cid35.html">Calificativ: Europa -> Cultura generala</a></li>

      <li><a href="https://ro.wikipedia.org/wiki/Lista_%C8%9B%C4%83rilor_%C3%AEn_func%C8%9Bie_de_PIB_(nominal)">Wikipedia: Europa -> PIB</a></li>

      </ul>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  End Modal -->

</body>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('assets/js/material.min.js') }}"></script>
  <script src="{{ asset('assets/js/numeral.min.js') }}"></script>

  <script src="{{ asset('assets/js/material-kit.js') }}" type="text/javascript"></script>

  
  <script type="text/javascript" src="{{ asset('js/jquery.vmap.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/jquery.vmap.europe.js') }}" charset="utf-8"></script>

  <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery('#vmap').vectorMap({
          map: 'europe_en',
          enableZoom: false,
          showTooltip: true,
          onRegionClick: function(element, code, region)
          {
              fetchCountry(code.toUpperCase());
          }
        });
      });
	  
	  <?php if(isset($_GET['submit']))
			{
				?>
				show('questionnaire');
				document.getElementById('check_q').scrollIntoView();
				<?php
			}
	?>
		function show(id) { 
			if(document.getElementById(id).style.display=='none') {
				if(id=='questionnaire')
				{
					document.getElementById('map').style.display='none';
					document.getElementById('info').style.display='none';
				}
				else if(id=='map')
				{
					document.getElementById('questionnaire').style.display='none';
					document.getElementById('info').style.display='none';
				}
				else
				{
					document.getElementById('questionnaire').style.display='none';
					document.getElementById('map').style.display='none';
				}
				document.getElementById(id).style.display='block';
				document.getElementById(id).scrollIntoView();
			} 
			return false;
		}
    </script>


  <script>
          var countries=[null, null];

          function fetchCountry(code)
          {     
                if(countries[0] != null)
                {
                    if(countries[0].code == code)
                    {
                        alert('Aceasta tara este deja selectata! Va rugam selectati o alta tara.')
                        return;
                    }
                }

                if(countries[1] != null)
                {
                    if(countries[1].code == code)
                    {
                        alert('Aceasta tara este deja selectata! Va rugam selectati o alta tara.')
                        return;
                    }
                }

                $.ajax({
                    url:"{{ route('fetchCountry') }}",
                    type: "POST",
                    headers : {
                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content'),
                    },
                    data: {
                        code:code,
                    },
					
                    success:function(data)
                    {   
                        if(countries[0] == null && countries[1] == null)
                        {
                            countries[0] = data.country;
                            updatePanel(1, data.country);
                        }    
                        else if(countries[0] != null && countries[1] == null){
                            countries[1] = data.country;
                            updatePanel(2, data.country);
                        }
                        else if(countries[0] != null && countries[1] != null){
                            countries[0] = countries[1];
                            updatePanel(1, countries[1]);

                            countries[1] = data.country;
                            updatePanel(2, data.country);
                        }


						if(countries[0] && countries[1])
						{
							document.getElementById('container-info').style.display='block';
							$('#container-info').show();
							$('html, body').animate({
								scrollTop: $("#container-info").offset().top
							}, 1000);
						}
                    },

                    error:function(xhr,status,error)
                    {
                        alert('Momentan, nu avem informatii despre aceasta tara in baza noastra de date! Va rugam selectati alta tara.');
                    }
                });
          }

          function updatePanel(number, country)
          {
              $('#title-' + number).html(country.title);
              $('#flag-' + number).html('<img src="https://flagpedia.net/data/flags/normal/' + country.code.toLowerCase() + '.png" class="img-rounded img-responsive" width="32">');
              $('#sub-' + number).html(country.title);
              $('#pos-' + number).attr('src' , country.pozitie);

              if(number == 1)
              {   
                  //clear content

                  for(var i=1;i<=3;i++)
                    $('#tab'+i).empty();

                  //informatii generale
                  $('#tab1').append('<p> Populatie: '+ numeral(country.population).format('0,0') + ' locuitori</p>');
                  $('#tab1').append('<p> Limbi Oficiale: ' + country.languages + '</p>');
                  $('#tab1').append('<p> Suprafata: ' +  numeral(country.surface).format('0,0') + ' km </p>');

                  //economie
                  $('#tab2').append('<p> Moneda: ' + country.currency + '</p>');
                  $('#tab2').append('<p> PIB total: ' + country.pib_total + ' </p>');
                  $('#tab2').append('<p> PIB per locuitor: ' + numeral(country.pib_inhabitant).format('0,0') + ' $</p>')

                  //detalii
                  $('#tab3').append('<p style="word-break:break-all">' + country.informations + '</p>');
              }
              else if (number == 2) {

                  //clear content

                  for(var i=4;i<=6;i++)
                    $('#tab'+i).empty();

                  //informatii generale
                  $('#tab4').append('<p> Populatie: '+ numeral(country.population).format('0,0') + ' locuitori</p>');
                  $('#tab4').append('<p> Limbi Oficiale: ' + country.languages + '</p>');
                  $('#tab4').append('<p> Suprafata: ' +  numeral(country.surface).format('0,0') + ' km </p>');

                  //economie
                  $('#tab5').append('<p> Moneda: ' + country.currency + '</p>');
                  $('#tab5').append('<p> PIB total: ' + country.pib_total + '</p>');
                  $('#tab5').append('<p> PIB per locuitor: ' + numeral(country.pib_inhabitant).format('0,0') + ' $</p>')

                  //detalii
                  $('#tab6').append('<p style="word-break:break-all">' + country.informations + '</p>');
              }
          }
          
      </script>

</html>
