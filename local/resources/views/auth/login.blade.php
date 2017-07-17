
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Open Government Partnership Afghanistan</title>
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/icon.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/semantic.min.css')}}">

  <script src="{{asset('assets/js/jquery.js')}}"></script>

  <style type="text/css">
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    
    <form class="ui large form" action="{{route('check_crediential')}}" method="post">
      <div class="ui segments">
        <div class="ui segment inverted grey">
          <h2 class="ui image header">
            <div class="content">
              Admin Login
            </div>
          </h2>
        </div>
        <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="E-mail address">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <button type="submit" class="ui fluid large blue button"><i class="icon sign in"></i>Login</button>
      </div>
      </div>

      <div class="ui error message"></div>
      {{csrf_field()}}
    </form>

    <div class="ui message">
      Having Issues? <a href="{{route('contacts')}}">Contact your Administrator</a>
    </div>
  </div>
</div>

</body>

</html>
