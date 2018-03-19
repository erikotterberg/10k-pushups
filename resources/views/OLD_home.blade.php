<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>10k Pushups</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
            .lists {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/') }}">Leaderboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="lists">
	               <form method="POST" action="/home">
					{{ csrf_field() }}
				  <div class="form-group">
				    <label for="amount">Antal Pushups:</label>
				    <input type="text" class="form-control" id="amount" name="amount">
				  </div>
				  
				  <div class="form-group">
				    <label for="date_performed">Datum:</label>
				    <input type="text" class="form-control" id="date_performed" name="date_performed" value="<?php echo(date("Y-m-d")) ?>">
				  </div>
				  
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
				<br /><br />
                </div>

                <div class="lists">
                     <?php
						
					foreach ($records as $record) {
						
						echo($record->date_performed.": ".$record->amount." | <a href=\"/delete/".$record->id."\">Delete</a><br />");
						
					}
						// var_dump($records);
						
					
					?>
					<br /><br /><br /><br />
					Powered by:<br />
					<img src="img/triggerLogo_320x75.png" width="150" />              
                </div>
            </div>
        </div>
    </body>
</html>
