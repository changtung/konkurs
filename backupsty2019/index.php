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

    <link rel="stylesheet" href="fonts/lato-reg/stylesheet.css">
    <link rel="stylesheet" href="fonts/lato-lig2/lato-lig.css">
    <link rel="stylesheet" href="fonts/lato-bol/lato-bol.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link rel="stylesheet" href="stylesheets/idangerous.swiper.css">
    <link rel="stylesheet" href="stylesheets/usable.css">
    <link rel="stylesheet" href="stylesheets/menu.css">
    <link rel="stylesheet" href="stylesheets/screen.css">
    <link rel="stylesheet" href="stylesheets/responsiveslides.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="javascripts/datepicker-pl.js"></script>

      <script type="text/javascript" src="javascripts/jquery.dropdownPlain.js"></script>
    <script type="text/javascript" src="javascripts/html5shiv.js"></script>
    <script type="text/javascript" src="javascripts/responsiveslides.min.js"></script>
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
            </ul>
          </nav>
        </header>
    </div>

    <div class="clear"></div>

    <div class="wrapper-full mar">
          <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
              <ul class="rslides">
                    <li>
                        <img src="images/vdl-slider0.png" alt="">
                    </li>
              </ul>
          </div>
        <div class="col-sm-2">
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
              </div>
              <div class="col-sm-3">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-6">
                <h2 class="konkurs">Futura <b>Eco Driver</b></h2>
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
              <li>Dbasz o niskie zużycie paliwa?</li>
              <li>Zwracasz uwagę na ekonomiczną i bezpieczną jazdę?</li>
            </ul>
          </div>
          <div class="col-sm-2 col-lg-2">
          </div>
        </div>
        <div class="row">
          <div class="col-sm-2">
          </div>
          <div class="col-sm-4">
            <img src="images/vdl-slider1.jpg" class="slid"></img>
          </div>
          <div class="col-sm-4">
            <img src="images/vdl-slider2.jpg" class="slid"></img>
          </div>
          <div class="col-sm-2">
          </div>
        </div>
        <!--<div class="row">
          <div class="col-sm-4">
            <div class="row">
              <div class="col-sm-12">
                <img src="images/2.png"></img>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <ul>
              <li>Zrób zdjęcie z wyświetlacza swojej VDL Futura z wynikiem zużycia paliwa.</li>
              <li>Podaj swoje imię, nazwisko (imię będzie na Twojej koszulce !).
Podaj nazwę firmy, nr VIN autobusu, datę oraz wynik w L / 100 km.</li>
            </ul>
            <p class="next">następnie...</p>
          </div>
          <br/>
        </div>-->
            <!--<div class="row">
              <div class="col-sm-3">
                <img src="images/1.png"></img>
              </div>
              <div class="col-sm-3">
                <img src="images/2.png"></img>
              </div>
              <div class="col-sm-3">
                <img src="images/3.png"></img>
              </div>
              <div class="col-sm-3">
                <img src="images/4.png"></img>
              </div>
            </div>
            <div class="row">
              <div class="col-md-2 col-lg-3">
                <img src="images/vdl-slider3.jpg"></img>
              </div>
                <div class="col-md-8 col-lg-6">
                  <ul>
                    <li>Prześlij dalej tą informację ( SMS, MMS, lub mailem ) do kierowców z Twojej firmy użytkujących VDL Futura.</li>
                    <li>Każdy z kierowców i Ty też, możecie bezpłatnie wziąć udział w tym konkursie.</li>
                    <li>Czekamy na foto z indywidualnym wynikiem zużycia paliwa L / 100 km (jak najdłuższy dystans).</li>
                  </ul>
            </div>
            <div class="col-md-2 col-lg-3">
              <img src="images/vdl-slider4.jpg"></img>
            </div>
          </div>-->
        <!--<div class="row">
          <div class="col-sm-12">
            <ul><p>Wyślij te informacje również do swoich kolegów z innych firm użytkujących autobusy VDL Futura</p></ul>
          </div>
        </div>
<br/>-->

        <br/>
        <div class="row cont">
          <div class="col-sm-12">
              <h1 class="przeslij">PRZEŚLIJ NAM SWÓJ NAJLEPSZY WYNIK!</h1>
              <br/>
                  <div class="row zdjkos">
                    <div class="col-sm-2 col-lg-2">
                    </div>
                    <div class="col-sm-4 col-lg-4">
                      <img class="zdjkos1" src="images/7.png"></img>
                    </div>
                    <div class="col-sm-4 col-lg-4">
                      <img class="zdjkos2" src="images/8.png"></img>
                    </div>
                      <!--<ul>
                        <li>Skontaktujemy się i potwierdzimy Wasze zgłoszenie,
          zapytamy o rozmiar jaki nosisz aby dopasować Twój prezent.</li>
                        <li>Otrzymasz gratis koszulkę ECO-DRIVER z Twoim
          imieniem / dystansem / wynikiem [L] z jazdy VDL Futura.</li>
                        <li>Wyniki trafią do naszego zestawienia / rankingu.</li>
                        <li>W czasie Open Doors 2018 (9 listopada)
          ogłosimy wyniki <b>3 najlepszych ECO-Driverów</b>
          oraz <b>3 najlepsze firmy</b> gdzie pracują kierowcy
          z najlepszymi wynikami zużycia paliwa / dystansu [km].</li>

        </ul>-->
                    </div>
                    <div class="col-sm-2 col-lg-2">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-2">
                  </div>
                  <div class="col-sm-8">
                    <br/><br/>
              <p><b>Każdy</b>, kto wyśle zgłoszenie <b>otrzyma GRATIS koszulkę ECO-DRIVER</b> <br/>z imieniem / dystansem / wynikiem [L] z jazdy VDL Futura</p>
	      <p>Trzech najlepszych w danej edycji otrzyma <a href="nagrody.html"><b>Super Nagrody</b></a>!</p>
	      <p>Zrób zdjęcie twojego najlepszego wyniku zużycia paliwa i <b>wypełnij formularz zgłoszeniowy</b>: </p>
                  </div>
                  <div class="col-sm-2">
                  </div>
                </div>
            <article class="contact">
                <div id="contact_form">
                  <div id="contact_body">

                    <label><span>Imię <span class="required">*</span></span></label>
                      <input type="text" name="imie" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Nazwisko <span class="required">*</span></span></label>
                      <input type="text" name="nazwisko" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Nazwa firmy <span class="required">*</span></span></label>
                      <input type="text" name="nazwafirmy" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Adres firmy (niezbędny do wysyłki koszulek) <span class="required">*</span></span></label>
                      <input type="text" name="adres" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Telefon <span class="required">*</span></span></label>
                      <input type="text" name="telefon" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>E-mail <span class="required">*</span></span></label>
		                  <input type="email" name="email" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Osiągnięty wynik l/100 <span class="required">*</span></span></label>
                      <input type="text" name="wynik" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Dystans <span class="required">*</span></span></label>
                      <input type="text" name="dystans" class="Lsmall" required="true"/>
                    <br/><div class="clear"></div>
                    <label><span>Nr rejestracyjny autobusu <span class="required">*</span></span></label>
                    <input type="text" name="nrrej" class="Lsmall" required="true"/>
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
            <input id="chkreg" type="checkbox" name="regulamin" required="true" value=""/>
            <br/><div class="clear"></div>
            <label class="pusty"></label>
            <button id="submit_form" class="btn btn-info">
              Wyślij
            </button>
            <br/><div class="clear"></div>
                  </div>
                  <div class="wrapresults">
                    <div id="contact_results"></div>
                  </div>
                </div>

            </article>

    <div class="clear"></div>
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
            <!--  <img class="logo" src="images/logo.png" alt="VDL" />-->
            </div>
            <div class="col-md-1">
            </div>
          </div>
          <div class="footer_foot">
            <div class="row">
              <div class="col-sm-1 col-md-1">
              </div>
              <div class="col-sm-4 col-md-4">
              </div>
              <div class="col-sm-6 col-md-6">
                <a href="https://www.vdlgroep.com/nl"><img src="images/vdl_logo_alt.jpg" class="logoalt"></img></a><a class="foot_a" href="http://www.vdlbuscoach.com/"><span class="copyright">2018 © VDL Bus & Coach bv</span></a>
                <div class="clear"></div>
              </div>
              <div class="col-sm-1 col-md-1">
              </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- wrapper-main close -->




    <script>
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
                        'adres'	: $('input[name=adres]').val(),
                        'telefon'	: $('input[name=telefon]').val(),
                        'email'		: $('input[name=email]').val(),
                        'wynik'		: $('input[name=wynik]').val(),
                        'dystans'		: $('input[name=dystans]').val(),
                        'nrrej'		: $('input[name=nrrej]').val(),
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
