<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | GKPI Kota Tebing Tinggi</title>

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
    <div class="main">
        <div class="row mx-auto d-flex align-items-center">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <img src="{{ asset('/assets/papi_j.png') }}" alt="" class="img img-fluid d-block mx-auto">
            </div>
            <div class="col-lg-6 col-md-7 col-sm-12 pt-5">
                <h1 class="my-4">Masuk</h1> 
                <form action="/login/check" method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Masukkan email anda" required>
                        <label for="floatingInput">Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Masukkan kata sandi" required>
                        <label for="floatingPassword">Kata sandi</label>
                    </div>
                    <div class="text-end mt-2 mb-4" >
                        <a href="#" style="color: var(--greyColor) !important" >lupa password? </a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-3">Masuk</button>
                    <div class="text-center mt-3">
                        <h6 style="color: var(--greyColor)">tidak punya akun? <a href="#" class="fw-bold" >daftar disini</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--Modal-->
    @include('components.modals.failed')
</body>

</html>