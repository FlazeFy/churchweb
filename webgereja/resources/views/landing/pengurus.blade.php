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
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="btn-crsl active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#--roundedJumbo" data-bs-slide-to="1" class="btn-crsl" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner px-5 mt-3">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="person-box">
                        <img src="{{ asset('/assets/person.jpg') }}" title="">
                        <h4>Pendeta</h4>
                        <h6>BPK Tampubulon</h6>
                    </div>
                </div>
            </div>
        </div>
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