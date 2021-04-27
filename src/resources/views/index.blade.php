<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Packalyser - Laravel Packages UI</title>
    <link rel="stylesheet" href="{{ asset('packalyser/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png">

</head>

<body class="dark-theme">
    <div id="app" class="p-lg-5">
        <Packalyser></Packalyser>

        <button onclick="switchTheme(this)" class="theme-toggler"> 
            <i class="fas fa-sun"></i> 
        </button>
    </div>    
    <script src="{{ asset('packalyser/main.js') }}"></script>
    <script src="{{ asset('packalyser/theme-switcher.js') }}"></script>
</body>

</html>
