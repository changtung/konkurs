<?php
session_start();
$str_num1 = rand(1,20);
$str_num2 = rand(1,20);
$_SESSION['expect_answer'] = $str_num1 + $str_num2;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8>
    <meta name=description value="VDL FUTURA ECO DRIVER">
    <meta name=keywords value="vdl">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <title>VDL FUTURA ECO DRIVER</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="stylesheets/idangerous.swiper.css">
      <link rel="stylesheet" href="stylesheets/usable.css">
      <link rel="stylesheet" href="stylesheets/menu.css">
      <link rel="stylesheet" href="stylesheets/screen.css">
      <link rel="stylesheet" href="stylesheets/responsiveslides.css">
      <link rel="stylesheet" href="stylesheets/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="fonts/lato-reg/stylesheet.css">
<link rel="stylesheet" href="fonts/lato-lig2/lato-lig.css">
<link rel="stylesheet" href="fonts/lato-bol/lato-bol.css">
      <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134731597-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-134731597-1');
</script>

  </head>
  <body>
    <script type="text/javascript">

    function startUpload(){
      document.getElementById('f1_upload_process').style.visibility = 'visible';
      return true;
    }
    function stopUpload(success,path){
        var result = '';
        if (success == 1){
           document.getElementById('result').innerHTML =
             '<span class="msg">Plik wczytano pomyślnie!<\/span><br/><br/>';
          document.getElementById('plik').value = path;
        }
        else {
           document.getElementById('result').innerHTML =
             '<span class="emsg">Wystąpił błąd podczas przesyłania!<\/span><br/><br/>';
        }
        document.getElementById('f1_upload_process').style.visibility = 'hidden';
        return true;
  }
    </script>
    <div class="wrapper-main">
    <div class="wrapper-full head-header">
        <header>
          <a href="/"><img class="ls" src="images/logo_small.png" alt="VDL" /></a>
          <nav>
            <label for="show-menu" class="show-menu">
            <div class="container" onclick="myFunction(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
          </label>
            <input type="checkbox" id="show-menu" role="button">
            <ul id="menu" class="dropdown">
              <li class="active">
                <a href="/">Strona główna</a>
              </li>
              <li>
                <a href="regulamin.html">Regulamin</a>
              </li>
              <li>
                <a href="nagrody.html">Nagrody</a>
              </li>
              <li>
                <a href="wyniki.html">Wyniki</a>
              </li>
            </ul>
          </nav>
        </header>
    </div>

    <div class="clear"></div>

        <div class="wrapper-full mar">
              <div class="row">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6">
                  <ul class="rslides">
                        <li>
                            <img src="images/vdl-slider0.png" alt="">
                        </li>
                  </ul>
              </div>
            <div class="col-sm-3">
            </div>
            <div>

        </div>

        <div class="clear"></div>
          <div class="wrapper">

            <div class="row">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-8 col-sm-8">
                <div class="row">
                  <div class="col-sm-3">
                  </div>
                  <div class="col-sm-6 col-md-12">
                    <h1 class="konkurs">KONKURS</h1>
                    <h2 class="konkurs">Futura <b>Eco Driver</b> II Edycja</h2>
                    <button class="btn kon" style="margin: 0 auto;display: block;background: #0C2C4D;color: #fff;"><i class="fa fa-envelope"></i> Biorę udział</button>
                  </div>
                  <div class="col-sm-3">
                  </div>
                </div>
              </div>
              <div class="col-sm-2">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-2 col-lg-2">
              </div>
              <div class="col-sm-8 col-lg-8">
                <ul class="zawodowo">
                  <li>Jeździsz zawodowo autobusem VDL Futura?</li>
                  <li>Zwracasz uwagę na bezpieczną jazdę?</li>
                  <li>Dbasz o niskie zużycie paliwa i ekonomiczną jazdę?</li>
                </ul>
              </div>
              <div class="col-sm-2 col-lg-2">
              </div>
            </div>
                        </div>
                        <div class="col-sm-2 col-lg-2">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-2">
                      </div>
                      <div class="col-sm-5">
                  <p><b>Każdy</b>, kto wyśle zgłoszenie <b>otrzyma GRATIS koszulkę ECO-DRIVER</b> <br/>z imieniem / dystansem / wynikiem [L] z jazdy VDL Futura</p>
                  <p>UWAGA! Najniższy dystans, jaki będzie kwalifikował kierowcę do konkursu to wynik powyżej 200 km </p>
                      </div>
                      <div class="col-sm-3">
                        <img src="images/vdl-slider2.jpg" class="slid"></img>
                      </div>
                      <div class="col-sm-2">
                      </div>
                    </div>
                    <br/>
                    <br/>
                    <div class="row">
                      <br/>
                      <div class="col-sm-2">
                      </div>
                      <div class="col-sm-5 toscroll">
                        <br/>
                        <p>Trzech najlepszych w danej edycji otrzyma <b>Nagrody</b></p>
                        <h5>Zrób zdjęcie twojego najlepszego wyniku zużycia paliwa i <b>wypełnij formularz zgłoszeniowy</b>: </h5>
                        <br/>
                      </div>
                      <div class="col-sm-3">
                        <img src="images/kosz.png" class="slid"></img>
                      </div>
                      <div class="col-sm-2">
                      </div>
                    </div>
                    <article class="contact">
                        <div id="contact_form">
                          <div id="contact_body">
<div class="row">
    <div class="col-sm-12 col-md-4">
                            <label><span>Imię <span class="required">*</span></span></label>
                              <input type="text" name="imie" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Nazwisko <span class="required">*</span></span></label>
                              <input type="text" name="nazwisko" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Nazwa firmy <span class="required">*</span></span></label>
                              <input type="text" name="nazwafirmy" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Miasto <span class="required">*</span></span></label>
                              <input type="text" name="miasto" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Ulica <span class="required">*</span></span></label>
                              <input type="text" name="ulica" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Nr. domu <span class="required">*</span></span></label>
                              <input type="text" name="nrdomu" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Kod pocztowy <span class="required">*</span></span></label>
                              <input type="text" name="kodpocztowy" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>Telefon <span class="required">*</span></span></label>
                              <input type="text" name="telefon" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>
                            <label><span>E-mail <span class="required">*</span></span></label>
                              <input type="email" name="email" class="Lsmall" required="true"/>
                            <br/><div class="clear"></div>


                </div>
                <div class="col-sm-12 col-md-8">
                  <label><span>Osiągnięty wynik l/100 <span class="required">*</span></span></label>
                    <input type="text" name="wynik" class="Lsmall" required="true"/>
                  <br/><div class="clear"></div>
                  <label><span>Dystans <span class="required">*</span></span></label>
                    <input type="text" name="dystans" class="Lsmall" required="true"/>
                  <br/><div class="clear"></div>
                  <label><span>Nr rejestracyjny autobusu <span class="required">*</span></span></label>
                  <input type="text" name="nrrej" class="Lsmall" required="true"/>
                  <br/><div class="clear"></div>
                  <label><span>4 ostatnie cyfry nadwozia VIN ( znajdziesz go za fotelem kierowcy autobusu VDL Futura ) <span class="required">*</span></span></label>
                  <input type="text" name="nrvin" class="Lsmall" required="true"/>
                  <br/><div class="clear"></div>
                            <label><span>Wybierz typ autobusu <span class="required">*</span></span></label>
                            <select id="typautobusu" name="typautobusu" required="true">
                              <option value="">Proszę wybrać typ </option>
                                <option value="fhd22">FHD2 2 osie</option>
                                <option value="fhd23">FHD2 3 osie</option>
                                <option value="fdd2">FDD2 piętrowy</option>
                            </select>
                            <br/><div class="clear"></div>
                            <label><span>Data osiągnięcia wyniku </span></label>
                            <input type="text" name="data" class="Lsmall" id="datepicker"/>
                            <br/><div class="clear"></div>
                            <label><span>Ilość pasażerów na pokładzie </span></label>
                    <input type="text" name="ilosc" class="Lsmall" />
                    <br/><div class="clear"></div>
                    <label><span>Na jakiej trasie osiągnąłeś taki wynik (np. Warszawa-Paryż) </span></label>
                    <input type="text" name="trasa" class="Lsmall"/>
                    <br/><div class="clear"></div>
                    <label><span>Preferowany rozmiar koszulki <span class="required">*</span></span></label>
                    <select id="rozmi" name="rozmiar" required="true">
                      <option value="">Proszę wybrać rozmiar </option>
                        <option value="S">S (obwód klatki piersiowej 2x48)</option>
                        <option value="M">M (obwód klatki piersiowej 2x52)</option>
                        <option value="L">L (obwód klatki piersiowej 2x55)</option>
                        <option value="XL">XL (obwód klatki piersiowej 2x58)</option>
                        <option value="2XL">2XL (obwód klatki piersiowej 2x61)</option>
                        <option value="2XL">3XL (obwód klatki piersiowej 2x65)</option>
                    </select>
                    <br/><div class="clear"></div>




                </div>
                <div class="col-sm-12">
                  <label class="zdjecie"><span>Dołącz zdjęcie z uzyskanym wynikiem<span class="required">*</span> </span></label>
                  <img class="wysw" src="images/4.png"></img>
              <form action="upload.php" method="post" enctype="multipart/form-data" target="upload_target" onsubmit="startUpload();" >
                    <input id="myfile" name="myfile" type="file"/>
                    <iframe id="upload_target" name="upload_target" style="width:0;height:0;border:0px solid #fff;">
                    </iframe>
                  <p id="f1_upload_process">Wczytuję zdjęcie...<br/><img src="loader.gif" /></p>
                  <input id="sbmbtn" type="submit" name="submitBtn" value="Wczytaj" class="btn btn-info" />
                  <p id="result"></p>
            </form>

              <div class="row" style="display: none">
                <div class="col-sm-12">
                  <input type="text" name="plik" id="plik" required="true"/>
                </div>
              </div>
              <div class="clear"></div>

                    <label><span>Jaki jest wynik działania <?php echo $str_num1 .' + '. $str_num2 ; ?> ?</span></label>
                    <input type="text" name="captcha_answer" required="true" class="Lsmall"/><br/><br/>
                    <label class="konk"><span>Oświadczam, że zapoznałem się z treścią <a href="regulamin.html">Regulaminu konkursu</a> i akceptuję wszystkie zawarte w nim warunki</span></label>
                    <input id="chkreg" type="checkbox" name="chkreg" required="true" value=""/>
                    <br/><div class="clear"></div>
                    <label class="konk3"><span>Mam ukończone 21 lat</span></label>
                    <input id="lat" type="checkbox" name="lat" required="true" value=""/>
                    <br/><div class="clear"></div>
                    <label class="pusty"></label>
                    <button id="submit_form" class="btn btn-info">
                      Wyślij
                    </button>
                    <br/><div class="clear"></div>
                  </div>
                  </div>
                          </div>
                          <div class="wrapresults">
                            <div id="contact_results"></div>
                          </div>
                        </div>

                    </article>

        <div class="clear"></div>
        <div class="row">
          <div class="col-md-1">
          </div>
          <div class="col-sm-12 col-md-5">
            <div class="row">
              <div class="col-sm-4">
                <h5 class="pt">Patronat medialny: </h5>
              </div>
              <div class="col-sm-4">
                <img class="pt" src="images/pt1.png"></img>
              </div>
              <div class="col-sm-4">
                <img class="pt" src="images/pt2.png"></img>
              </div>
            </div>
            <div class="clear"></div>
          </div>
          <div class="col-md-6">
          </div>
        </div>
        <br>
        <br>
        </div>
        <div class="wrapper-full2">
          <footer>
              <div class="row" style="margin: 0;">
                <div class="col-md-1">
                </div>
                <div class="col-sm-12 col-md-5">
                  <div class="text-container">
                    <strong>VDL Bus & Coach Polska Sp. z o.o.</strong>
                    <span>Straszków 121 | 62-604 | Kościelec | Polska</span>
                    <span>NIP: 666-18-73-780</span>
                    <span>Telefon: +48 63 26 16 091</span>
                    <span>Email: <a href="mailto:info@vdlbuscoach.pl">info@vdlbuscoach.pl</a></span>
                  </div>
                </div>
                <div class="col-md-5">
                </div>
                <div class="col-md-1">
                </div>
              </div>
              <div class="footer_foot">
                <div class="row">
                  <div class="col-sm-1 col-md-1">
                  </div>
                  <div class="col-sm-4 col-md-4">
                     <p style="float: left;"><span class="copyright pan">Wykonane przez <a href="http://www.uipg.pl"><i class="fa fa-check"></i> UIPG</a></span>
                    <div class="clear"></div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <a href="https://www.vdlgroep.com/nl"><img src="images/vdl_logo_alt.jpg" class="logoalt"></img></a><a class="foot_a" href="http://www.vdlbuscoach.com/"><span class="copyright">2019 © VDL Bus & Coach bv</span></a>
                    <div class="clear"></div>
                  </div>
                  <div class="col-sm-1 col-md-1">
                  </div>
              </div>
            </div>
          </footer>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script src="javascripts/datepicker-pl.js"></script>

          <script type="text/javascript" src="javascripts/jquery.dropdownPlain.js"></script>
        <script type="text/javascript" src="javascripts/html5shiv.js"></script>
        <script type="text/javascript" src="javascripts/responsiveslides.min.js"></script>
        <script type="text/javascript" src="javascripts/jquery.scrollintoview.min.js"></script>

    <script>
    function scroll(){
      $('html, body').animate({
  scrollTop: $(".toscroll").offset().top
}, 1000);
    }
    $(".kon").click(function(){
      scroll();
    });
  $(function() {
    //$(".rslides").responsiveSlides();
  });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
          $("#chkreg").change(function() {
            if(this.checked) {
            $(this).val('true');
            }
            else {
              $(this).val(null);
            }
          });
          $("#lat").change(function() {
            if(this.checked) {
            $(this).val('true');
            }
            else {
              $(this).val(null);
            }
          });

            $("#submit_form").click(function() {
                var is_validation = true;
                //simple validation at client's end
                //loop through each field and we simply change border color to red for invalid fields
                $("#contact_form input[required=true], #contact_form select[required=true]").each(function(){
                    $(this).css('border-color','');
                    if ( $(this).attr('id') == 'rozmi' )
                      if ( $(this).val() == '')
                        $(this).css('border-color','red');
                    if ( $(this).attr('id') == 'chkreg' )
                      if ( $(this).val() == ''){
                        $(this).css('outline','2px solid red');
                        $(this).css('outline-offset','-2px');
                      }
                      if ( $(this).attr('id') == 'typautobusu' )
                        if ( $(this).val() == '')
                          $(this).css('border-color','red');
                      if ( $(this).attr('id') == 'lat' )
                        if ( $(this).val() == ''){
                          $(this).css('outline','2px solid red');
                          $(this).css('outline-offset','-2px');
                        }
                    if(!$.trim($(this).val())){ //if this field is empty
                        if ( $(this).attr('id') == 'plik' )
                          $("#sbmbtn").css('border-color','red');
                        $(this).css('border-color','red'); //change border color to red
                        is_validation = false; //set do not is_validation flag
                    }
                    //check invalid email
                    var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                        $(this).css('border-color','red'); //change border color to red
                        is_validation = false; //set do not is_validation flag
                    }
                });

                if ( !is_validation )
                  {
                    output = '<div class="error-container">Proszę wypełnić formularz</div>';
                    $("#contact_form #contact_results").hide().html(output).slideDown();
                  }
                if(is_validation) //everything looks good! proceed...
                {
                    //get input field values data to be sent to server
                    post_data = {
                        'imie'		: $('input[name=imie]').val(),
                        'nazwisko'	: $('input[name=nazwisko]').val(),
                        'nazwafirmy'	: $('input[name=nazwafirmy]').val(),
                        'miasto'	: $('input[name=miasto]').val(),
                        'ulica'	: $('input[name=ulica]').val(),
                        'nrdomu'	: $('input[name=nrdomu]').val(),
                        'kodpocztowy'	: $('input[name=kodpocztowy]').val(),
                        'telefon'	: $('input[name=telefon]').val(),
                        'email'		: $('input[name=email]').val(),
                        'wynik'		: $('input[name=wynik]').val(),
                        'dystans'		: $('input[name=dystans]').val(),
                        'nrrej'		: $('input[name=nrrej]').val(),
                        'nrvin'		: $('input[name=nrvin]').val(),
                        'typautobusu'		: $('select[name=typautobusu]').val(),
                        'data'		: $('input[name=data]').val(),
                        'ilosc'		: $('input[name=ilosc]').val(),
                        'trasa'		: $('input[name=trasa]').val(),
                        'rozmiar'		: $('select[name=rozmiar]').val(),
                        'plik'		: $('input[name=plik]').val(),
                        'captcha_answer': $('input[name=captcha_answer]').val()
                    };

                    //Ajax post data to server
                    $.post('submit.php', post_data, function(response){
                        if(response.type == 'error'){ //load json data from server and output message
                            output = '<div class="error-container">'+response.text+'</div>';
                        }else{
                            output = '<div class="success">'+response.text+'</div>';
                            $("#contact_form  input[required=true], #contact_form select[required=true]").val('');
                            $("#contact_form #contact_body").slideUp(); //hide form after success
                        }
                        $("#contact_form #contact_results").hide().html(output).slideDown();
                    }, 'json');
                }
            });

            //reset previously set border colors and hide all message on .keyup()
            $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
                $(this).css('border-color','');
                $("#result").slideUp();
            });
        });
        $( function() {
  $( "#datepicker" ).datepicker();
  $.datepicker.setDefaults($.datepicker.regional['pl']);

} );
    </script>
    <!--<script type="text/javascript" src="javascripts/scripts.js"></script>-->
    <script>
    function myFunction(x) {
        x.classList.toggle("change");
    }

    </script>
    <script type="text/javascript">
     window.onload = function(){  }
    </script>
  </body>
</html>
