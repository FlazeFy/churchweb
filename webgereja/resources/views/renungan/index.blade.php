<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Renungan Harian</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/328b2b4f87.js" crossorigin="anonymous"></script> 

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>

    @if($role == "admin")
        <!--Full calendar.-->
        <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
    @endif

    <!-- CSS Collection -->
    <link rel="stylesheet" href="{{ asset('/css/global_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/button_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/navbar_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/dropdown_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/typography_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/calendar_v1.0.css') }}"/>

    <!-- JS Collection -->
    <script src="{{ asset('/js/generator_v1.0.js') }}"></script>
    <script src="{{ asset('/js/converter_v1.0.js') }}"></script>
</head>
<body>
    <!-- Navbar -->
    @include('components.bars.navbar')

    <div class="main">
        <br><br><br>
        <div class="text-center">
            @include('components.typographies.section_title', ['title'=>'Renungan Harian'])
        </div>

        @if($role == "visitor")
            @include('renungan.bacaan', ['renungan'=>$renungan])
        @else 
            @include('renungan.kalender', ['renungan'=>$renungan])
        @endif
    </div>

    <!-- Footer -->
    @include('components.bars.footer')
</body>
</html>