
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>10k-pushups.com</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,600" rel="stylesheet" type="text/css">

  </head>

  <body>

    <nav class="navbar navbar-expand-md fixed-top">
	    <div class="mr-auto">
        </div>
	    @if (Route::has('login'))
            <div class="links">
                @auth
                    <a href="{{ url('/home') }}">My Pushups</a>
                @else
                    <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif
        
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Leaderboard</h1>
        <?php

		foreach($users as $user) {
			$user_arr[$user->id] = $user->name;
		}		
           
        foreach($records as $record) {
            echo($user_arr[$record->user].": ".$record->total."<br />");
            
        }   
            
        // var_dump($records);  
        
        
        ?>
		<br /><br /><br /><br />
		Powered by:<br />
		<img src="img/triggerLogo_320x75.png" width="150" /> 

      </div>

    </main><!-- /.container -->




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>
