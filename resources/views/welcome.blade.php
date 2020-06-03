@extends('layouts.app')
@section('content')
    <nav-basic> </nav-basic>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                    <div class="bg-overlay"></div>
                {{-- <img src="{{URL::to('/') }}/images/slider1.png" class="d-block w-100" alt="..."> --}}
                <div class="carousel-caption d-none d-md-block">
                  <h5>Mision</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                    <div class="bg-overlay"></div>
                {{-- <img src="{{URL::to('/') }}/images/slider1.png" class="d-block w-100" alt="..."> --}}
                <div class="carousel-caption d-none d-md-block">
                  <h5>Vision</h5>
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
          <br>
          <section id="trips">
          <div class="container text-center">
              <h2>Viajes</h2>
              
                <div class="row">
                    <div class="card" style="width: 18rem;">
                        {{-- <img src="{{ URL::to('/') }}/images/{{ $row->img }}" class="card-img-top" alt="..."> --}}
                    </div>                
                </div>
          </div>

          {{--  --}}
          <div class="container">
                <form id="logout-form" action="" method="POST" style="">
                        @csrf                    
                <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Mensaje</label>
                        <input type="text" class="form-control" id="">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
        </section>
        <section id="form" >
            
        </section>
@endsection
