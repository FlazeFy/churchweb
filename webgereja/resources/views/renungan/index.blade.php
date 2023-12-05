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
        @include('components.typographies.section_title', ['title'=>'Renungan Harian'])
    </div>

    <div class="row text-center">
        <h3 style="color: var(--primaryColor)">Bersukacitalah, Tuhan ada diantara kita</h3>
        <h4>Zefanya 3:14-20</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In maxime cumque quas quisquam, blanditiis illum nulla iste rem aut ex velit officiis impedit veritatis praesentium veniam labore eaque necessitatibus iure.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa officia facilis pariatur dolores amet similique repellat officiis labore corrupti rerum. Dignissimos animi quae officiis commodi corporis facere facilis rerum dolor.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ab quisquam eos odit repellendus blanditiis odio rem obcaecati nobis ipsa. Perferendis, quia odit? Sequi facere molestiae rerum neque corporis animi.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptate nulla quibusdam perspiciatis esse consequuntur soluta architecto excepturi corporis distinctio eum ut dignissimos mollitia, hic autem itaque maxime molestiae tempora!</p>
    </div>
  </div>

      <!-- Footer -->
  @include('components.bars.footer')
</body>
</html>