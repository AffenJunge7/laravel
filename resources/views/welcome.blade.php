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
        
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="..." style="background: #636b6f">
                <div class="card-body">
                <h5 class="card-title">Wasserschaden</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/wasserschaden" class="btn btn-primary">Wasserschaden</a>
                </div>
            </div>
          
         
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="..." style="background: #636b6f">
                <div class="card-body">
                <h5 class="card-title">Schimmelbefall</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/schimmelbefall" class="btn btn-primary">Schimmelbefall</a>
                </div>
            </div>
        
          
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="..." style="background: #636b6f">
                <div class="card-body">
                <h5 class="card-title">Versiegelung</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="/versiegelung" class="btn btn-primary">Versiegelung</a>
                </div>
            </div>
          
      </div>
    </div>

    <div class="row my-3">
        <div class="col">
            <section class="jumbotron text-center">
                <div class="container">
                  <h1>Album example</h1>
                  <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                  <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                  </p>
                </div>
              </section>
        </div>
    </div>
      
</div>
@endsection

        