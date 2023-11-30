<style>
    .person-box {
        border-radius: var(--roundedSM);
        padding: var(--spaceXMD);
        background: var(--primaryColor);
        text-align: center;
        color: var(--whiteColor);
    }
    .person-box img {
        border-radius: var(--roundedSM);
        width: 100%;
        margin-bottom: var(--spaceXMD);
    }
    .carousel-indicators {
        margin-bottom: -40px; 
    }
    .carousel-indicators .btn-crsl, .carousel-indicators .active{
        border-radius: var(--roundedCircle);
        width: 13px;
        height: 13px;
        background: var(--shadowColor); 
    }
    .carousel-indicators .btn-crsl{
        border: 2px solid var(--darkColor);
    }
    .carousel-indicators .active {
        background: var(--primaryColor);
    }
    .carousel-control-prev,  .carousel-control-next{
        background: var(--primaryColor);
        height: 60px;
        width: 60px;
        opacity: 1;
        border-radius: var(--roundedCircle);
        margin-top: 15vh;
    }
    .carousel-control-prev {
        margin-left: -30px;
    }
    .carousel-control-next{
        margin-right: -30px;
    }
</style>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @php($i = 0)
        @php($shown = false)
        @foreach($pengurus as $p)
            @if($i == 0 || $i % 4 == 0)
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$i}}" class="btn-crsl <?php if($shown == false){ echo "active"; $shown = true; } ?>" aria-current="true" aria-label="Slide {{$i+1}}"></button>
            @endif
            @php($i++)
        @endforeach
    </div>
    <div class="carousel-inner px-5 mt-3">
        @php($i = 0)
        @php($shown = false)
        @php($total = count($pengurus))x
        @foreach($pengurus as $p)

            @if($i == 0 || $i % 4 == 0)
            <div class="carousel-item <?php if($shown == false){ echo "active"; $shown = true; } ?>">
                <div class="row">
            @endif

                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        @if($p->img_url == null)
                            <img src="{{ asset('/assets/person.jpg') }}" title="">
                        @else 
                            <img src="{{$p->img_url}}" title="">
                        @endif
                        <h4>{{$p->jabatan}}</h4>
                        <h6>{{$p->nama}}</h6>
                    </div>
                </div>

            @if(($i % 4 == 0 && $i != 0) || $total == $i)
                </div>
            </div>
            @endif

            @php($i++)
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>