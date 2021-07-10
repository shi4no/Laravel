<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getlocale()) }}">
     <head>
         <meta charsets="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">

         <title>Laravel</title>

         <link href="https://fonts.googleleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
         <link href="/css/main.css" rel="stylesheet">
     </head>
     <body>
         @yield('content')

         <footer>
             Copyright 2021 Luwi's Miki House
         </footer>
     </body>
</html>
