<!--
/**
* Created by PhpStorm.
* User: darren
* Date: 01/08/2019
* Time: 08:45
*/
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon 2 - The Revenge</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function showStat()
        {
            let selectBox = document.getElementById('statSelect');
            let selectItem = selectBox.options[selectBox.selectedIndex].value;
            console.log('Debug');
            console.log(selectItem);
        }
    </script>
</head>
