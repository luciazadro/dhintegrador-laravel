<head>
    <meta charset="utf-8">
    <title>Aurora Materiales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">
    <script src="https://use.fontawesome.com/4d20f65705.js"></script>
    <script>
            window.fbAsyncInit = function() {
              FB.init({
                appId      : '{your-app-id}',
                cookie     : true,
                xfbml      : true,
                version    : '{api-version}'
              });
                
              FB.AppEvents.logPageView();   
                
            };
          
            (function(d, s, id){
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) {return;}
               js = d.createElement(s); js.id = id;
               js.src = "https://connect.facebook.net/en_US/sdk.js";
               fjs.parentNode.insertBefore(js, fjs);
             }(document, 'script', 'facebook-jssdk'));
          </script>
</head>