<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Front End</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .pages{
                list-style:none;
            }
            .pages li{
                cursor:pointer;
            }
        </style>

    </head>
    <body class="wrapper">
        <div>
            <ul class="pages">
                <li onclick="openPage('essentials')">Essentials</li>
                <li onclick="openPage('apple')">Apple</li>
                <li onclick="openPage('starbucks')">Starbucks</li>
            </ul>
        </div>
    <script type="text/javascript">
        function openPage(page){
            window.open('/' + page);
        }
    </script>
    </body>
</html>