<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <link rel="icon" href="/admin/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="/admin/favicon.ico" />
    <!-- Generated: 2018-03-20 15:36:58 +0100 -->
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <script src="/admin/js/require.min.js"></script>
    <script>
      requirejs.config({
          baseUrl: '.'
      		});
    </script>
    <!-- Dashboard Core -->
    <link href="/admin/css/dashboard.css" rel="stylesheet" />
    <script src="/admin/js/dashboard.js"></script>
    <!-- c3.js Charts Plugin -->
    <link href="/admin/plugins/charts-c3/plugin.css" rel="stylesheet" />
    <script src="/admin/plugins/charts-c3/plugin.js"></script>
    <!-- Google Maps Plugin -->
    <link href="/admin/plugins/maps-google/plugin.css" rel="stylesheet" />
    <script src="/admin/plugins/maps-google/plugin.js"></script>
    <!-- Input Mask Plugin -->
    <script src="/admin/plugins/input-mask/plugin.js"></script>
  </head>
  <body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
              @include('admin.__include.message')
          <div class="row">


            <div class="col col-login mx-auto">

              <form class="card" action="{{ action('LoginController@postLogin') }}" method="post">
                <div class="card-body p-6">
                  <div class="card-title" style="    text-align: center">Форма входа</div>
                  <div class="form-group">
                    <label class="form-label">Логин</label>
                    <input type="text" class="form-control"  name="login" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      Пароль
                    </label>
                    <input type="password" class="form-control"  name="password" required>
                  </div>

                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Войти</button>
                  </div>
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
