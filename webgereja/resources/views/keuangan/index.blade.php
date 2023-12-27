<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keuangan</title>

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

    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <!-- CSS Collection -->
    <link rel="stylesheet" href="{{ asset('/css/global_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/button_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/navbar_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/dropdown_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/typography_v1.0.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/container_v1.0.css') }}"/>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#keuanganTable').DataTable()
        });
    </script>
</head>
<body>
    <!-- Navbar -->
    @include('components.bars.navbar')

    <div class="main">
        <br><br><br>
        <div class="text-center">
            @include('components.typographies.section_title', ['title'=>'Keuangan', 'subtitle' => 'Informasi tentang artikel gereja yang berupa keuangan gereja ataupun kebutuhan yang diselenggarakan oleh gereja'])
        </div>
        <br>

        <div class="d-block mx-auto text-center">
            <div class="row">
                <div class="col-lg-8">
                    
                </div>
                <div class="col-lg-4">
                    @include('keuangan.tambah')
                </div>
            </div>
            @include('keuangan.daftar')
        </div>
    </div>

    <!-- Footer -->
    @include('components.bars.footer')
</body>
</html>