<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Badan Pengurus Harian</title>

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

    <!-- CSS Collection -->
    <link rel="stylesheet" href="{{ asset('/css/global_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/button_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/navbar_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/dropdown_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/typography_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/container_v1.0.css') }}"/>
</head>
<body>
    <!-- Navbar -->
    @include('components.bars.navbar')

    <div class="main">
        <br><br><br>
        <div class="text-center">
            @include('components.typographies.section_title', ['title'=>'Badan Pengurus Harian'])
        </div>

    <br><br>
   

    <h2>Nama-Nama Penatua GKPI Jemaat Khusus Tebingtinggi</h2>
    <div class="col d-inline-block">
        <ol>
            <li>Pnt. M.W. Sirait</li>
            <li>Pnt. M. Sinaga, SPd</li>
            <li>Pnt. J.P. Siahaan</li>
            <li>Pnt. A. Napitupulu SPd.MSi</li>
            <li>Pnt. P. Sijabat SPd</li>
            <li>Pnt. M. Lumbantobing ST</li>
            <li>Pnt. Y. Br. Tampubolon SAg</li>
            <li>Pnt. Ev. E. Br. Hutagalung</li>
            <li>Pnt. Drs.J. Hutagalung</li>
            <li>Pnt. Ir. R. Simanjuntak</li>
            <li>Pnt. S.. Pakpahan</li>
            <li>Pnt. R. Br. Simanjuntak</li>
            <li>Pnt. S. Hasibuan</li>
            <li>Pnt. J. Gultom</li>
            <li>Pnt. N. Naiborhu</li>
            <li>Pnt. L. Hutagalung</li>
            <li>Pnt.M Sibagariang</li>
            <li>Pnt.P.br Siahaan</li>
            <li>C.Pnt. Rahmawatiy D. Br. Pasaribu, A.Md</li>
            <li>CPnt.D.Br Purba</li>
            <li>CPnt.H.Turnip SE</li>
        </ol>
    </div>
    
        
    </div>
    
    <!-- Footer -->
    @include('components.bars.footer')
</body>
</html>