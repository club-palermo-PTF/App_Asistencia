<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Aplicación para tomar asistencia en el club de programación de PTF en Palermo">
    <meta name="author" content="aprendices de programá tu futuro">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Programá tu asistencia</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Programá tu asistencia">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="icon" href="assets/images/favicon.ico">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.cyan-amber.min.css" /> --> 
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.green-amber.min.css" /> 
    <link rel="stylesheet" href="assets/css/styles.css">

  </head>
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout__header-row">
          <div class="logo">
            <img src="assets/images/pta_mini_white.png" alt="">
          </div>
        </div>
      </header>

      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="overview">

          <section id="section-login" class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <div class="mdl-card mdl-cell mdl-cell--12-col">
              <div class="mdl-card__supporting-text">
                <h4>Conectate</h4>

                <!-- Login form -->
                <form class="form-signin" id="form_login">
                  <div class="mdl-textfield mdl-js-textfield textfield-demo">
                    <input class="mdl-textfield__input" type="text" id="username" name="username" required />
                    <label class="mdl-textfield__label" for="username">Usuario</label>
                  </div>

                  <div class="mdl-textfield mdl-js-textfield textfield-demo">
                    <input class="mdl-textfield__input" type="password" id="password" name="password" required />
                    <label class="mdl-textfield__label" for="password">Contraseña</label>
                  </div>

                  <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                    <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" name="recordarme" value="recordarme" />
                    <span class="mdl-checkbox__label">Recordarme</span>
                  </label>

                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect btn-login" type="submit">Entrar</button>
                </form>
              <!-- Login form -->

              </div>
            </div>
          </section>

          <section id="section-listado" class="section--center section--center-lista mdl-grid mdl-grid--no-spacing mdl-shadow--2dp listado-aprendices">
            <div class="mdl-card mdl-cell mdl-cell--12-col">

              <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">add</i>
              </button>

              <div class="mdl-card__supporting-text">
                <h4>Listado de aprendices: <em>Palermo</em></h4>

                <div class="search">
                  <form action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable textfield-demo">
                      <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
                        <i class="material-icons">search</i>
                      </label>
                      <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" id="sample6" />
                        <label class="mdl-textfield__label" for="sample-expandable">Buscar aprendiz</label>
                      </div>
                     </div>
                  </form>
                </div>

                <ul class="listado-items"></ul>
              </div>
            </div>
          </section>

        </div>


        <footer class="mdl-mega-footer">
          <div class="mdl-mega-footer--middle-section">
            <div class="mdl-mega-footer--drop-down-section">
              <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer--heading">Caracteristicas</h1>
              <ul class="mdl-mega-footer--link-list">
                <li>"Programá tu asistencia" es una aplicación creada integramente desde 0 por aprendices de Programá tu futuro con la finalidad de aprender a hacer una aplicación y trabajar en grupo.</li>
              </ul>
            </div>
          </div>
          <div class="mdl-mega-footer--bottom-section">
            <div class="mdl-logo">
              Más info
            </div>
            <ul class="mdl-mega-footer--link-list">
              <li><a href="http://www.buenosaires.gob.ar/educacion/programatufuturo">Programá tu futuro</a></li>
            </ul>
          </div>
        </footer>

      </main>
    </div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
    <script src="assets/js/js.cookie.js"></script>

    <script>
      $(document).on("ready", init);
      function init() {

        var Json = '';
        var slogin = $('#section-login');
        var slista = $('#section-listado');

        if(Cookies.get('ptf-login')) {
          slogin.hide();
          $.ajax({
            cache: false,
            type: 'POST',
            url: 'sistema/webservices/Service_query.php',
            dataType: 'json',
            success: function(data){
              showList(JSON.stringify(data));
            },
            error : function(){
              console.log('pasa error?');
            }
          });
        }else{
          slogin.fadeIn('normal');
        }

        $("#form_login").submit(function(e) {
          e.preventDefault();
          var data_form = {};
          var Form = this;
          
          $.each(this.elements, function(i, v){
            var input = $(v);
            data_form[input.attr("name")] = input.val();
            delete data_form["undefined"];
          });
          
          console.log(data_form);
          console.dir(data_form);

          $.ajax({
           cache: false,
           url: 'sistema/webservices/Service_login.php',
           type: 'POST',
           dataType: 'json',
           data: JSON.stringify(data_form),
           context: Form,
           success: function(data){
            data_form.password = '';
            console.dir(data_form);
            Cookies.set('ptf-login', data_form);
            slogin.fadeOut('normal');
            showList(JSON.stringify(data));
           },
           error : function(){
            // Error
           }
          });
        });

          // función que muestra la lista segun el usuario que se loguea
        function showList(Json) {
          console.log('Devuelve: '+Json);

          var array = JSON.parse(Json);
          var checked;
            array.forEach(function(object) {

              if(object.Presente==true) {
                checked = 'checked';
              }else{
                checked = '';
              }
              $('.listado-items').append('<li>\
                                          <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="u-'+object.ID+'">\
                                          <input type="checkbox" id="u-'+object.ID+'" class="mdl-checkbox__input" data-estado="'+object.Presente+'" data-user="'+object.Nombre+' '+object.Apellido+'" data-id="'+object.ID+'" '+checked+' />\
                                          <span class="mdl-checkbox__label">'+object.Nombre+' '+object.Apellido+'</span>\
                                          </label>\
                                      </li>');
            });
          componentHandler.upgradeAllRegistered(); // le decimos a MDL que actualice los objetos que acabo de crear
          slista.fadeIn('normal');
        }

        // Ponemos presente/ausente segun el estado del checkbox
        $(document).on('change','.mdl-checkbox__input', function(e) {
          e.preventDefault();
          var uid = $(this).attr('id');
          var id = $(this).data('id');
          var user = $(this).data('user');
          var estado = $(this).data('estado');

          if(estado==null || estado==false) {
            console.log('a '+uid+' ('+user+') lo pongo true');
            updateUser(id, true);
            $(this).data('estado', 'true');
          }else{
            console.log('a '+id+' ('+user+') lo pongo false');
            updateUser(id, false);
            $(this).data('estado', 'false');
          }
        });

        function updateUser(id, estado) {
          var data = {};
          var arr = { IdUsuario: id, Presente: estado };
            $.ajax({
              url: 'sistema/webservices/Service_update.php',
              type: 'POST',
              data: JSON.stringify(arr),
              contentType: 'application/json; charset=utf-8',
              dataType: 'json',
              success: function(data) {
                console.log(data);
              },
              error : function(){
                console.log('Error: '+data);
              }
            });
        }

      }
    </script>
  </body>
</html>