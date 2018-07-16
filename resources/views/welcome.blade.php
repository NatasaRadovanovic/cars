<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cars</title>
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Unicase" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <style>
            body 
            {
                font-family: 'Cormorant Unicase', serif;
                color:#8c8c8c;
                height: 100vh;
                margin:0;
            }
            
            li, a{
               color:#737373;
               font-weight:bold;
            }

            li, a:hover
            {
                color:#8c8c8c;
            }
            
            h2, p
            {
                text-align: center;
            }

            h2
            {
                margin-top:200px;
            }

            h2
            {
                font-size:3.5rem;
                text-shadow: 2px 5px 5px #bfbfbf;
            }
         </style>
     </head>

    <body>
        <h2>Welcome, {{$name}}!</h2>   
        <p>I'm {{$age}} years old.</p> 
        
        <ul class="nav justify-content-center">
             <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                 <a class="nav-link" href="/cars">Cars</a>
            </li>
                 <li class="nav-item">
             <a class="nav-link" href="/about">About</a>
            </li>
        </ul>
    </body>
</html>


