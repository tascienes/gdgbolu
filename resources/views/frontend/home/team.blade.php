@extends("layouts.frontend2")



@section("content")





    <div class="header-content animate-box" style=" background-image: url({{asset('images/ekibimiz.jpg')}});">



    </div>





    <div id="fh5co-project">

        <div class="container">

            <div class="row animate-box">

                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">

                    <h2 class="gdg-team-title">GDG BOLU Ekibimiz</h2>

                </div>

            </div>

        </div>

        <div class="container-fluid proj-bottom">

            <div class="row">





              @foreach($members as $member)



                <div class="col-md-3 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">

                    <a href="#"><img src="{{asset($member->cover_image)}}" alt="ekibimiz" id="team-image" class="img-responsive team-image" >

                        <h3>{{$member->name}}</h3>

                        <span>{{$member->scope}}</span>

                    </a>

                </div>



               @endforeach







            </div>

        </div>

    </div>
















@include("frontend.include.footer2")








@endsection



@push("customJs")



@endpush



@push("customCss")

<style type="text/css">
    
  .team-image{
    object-fit: cover;
    height: 400px;
  }

</style>

@endpush