<style>
.carousel-inner .carousel-caption {
    background: rgba(10, 10, 10, .4)
}
</style>


@extends('layouts.app')

@section('title', 'Startseite')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="container">

    <div class="row my-3">
        <div class="col">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/uploads/slides/1.jpg" class="d-block w-100" alt="..." width="1100" height="450">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="/uploads/slides/2.jpg" class="d-block w-100" alt="..." width="1100" height="450">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="/uploads/slides/3.jpg" class="d-block w-100" alt="..." width="1100" height="450">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>

                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
  
    <div class="row my-3">
        <div class="col d-flex justify-content-between">
        
            <div class="card rounded-0" style="width: 18rem;">
                <img src="/uploads/schaden-1.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Wasserschaden</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/wasserschaden" class="btn btn-info rounded-0"><span class="glyphicon glyphicon-search"></span>Wasserschaden</a>
                </div>
            </div>
          
         
            <div class="card rounded-0" style="width: 18rem;">
                <img src="/uploads/schaden-2.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Schimmelbefall</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/schimmelbefall" class="btn btn-info rounded-0">Schimmelbefall</a>
                </div>
            </div>
        
          
            <div class="card rounded-0" style="width: 18rem;">
                <img src="/uploads/schaden-3.jpg" class="card-img-top rounded-0" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Versiegelung</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/versiegelung" class="btn btn-info rounded-0">Versiegelung</a>
                </div>
            </div>
          
      </div>
    </div>
      
</div>
@endsection


        