@extends("layouts.frontend2")



@section("content")

    <div class="header-content animate-box" style=" background-image: url( {{asset('images/sponsorlar.jpg')}});">



    </div>





    <div id="fh5co-blog" style="background-color: rgba(11, 35, 45, 0.08) ">

        <div class="container">

            <div class="col-md-12 text-center">

                <h1 class="sponsor-title">SPONSORLARIMIZ</h1>

                <div class="hr-droid">

                    <div class="hr-line green"></div>



                    <div class="hr-line purple"></div>

                </div>

            </div>





            @foreach($sponsors as $sponsor)





                <div class="row text-center">

                    <div class="col-md-12">

                        <h1 class="sponsor-name">{{$sponsor->name}}</h1>

                    </div>

                    <div class="col-md-4"></div>

                    <div class="col-md-4">

                        <img class="sponsorlogo" src="{{$sponsor->cover_image}}">



                    </div>

                    <div class="col-md-4"></div>

                </div>



            @endforeach





        </div>











    </div>

@include("frontend.include.footer2")

@endsection



@push("customJs")



@endpush



@push("customCss")



@endpush