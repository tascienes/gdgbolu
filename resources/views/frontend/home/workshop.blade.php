@extends("layouts.frontend2")



@section("content")





    <div class="header-content animate-box" style=" background-image: url({{asset('images/WORKSHOP.jpg')}});">



    </div>



    <div id="fh5co-blog" style="background-color: #f5f6fa">

        <div class="container">



            @foreach($blogs as $blog)





            <div class="devfest-box">

                <div class="row"  id="{{$blog->slug}}">

                    <div class="col-md-12 text-center">

                        <h1 class="devfest-title">{{$blog->title}}</h1>

                        <hr class="hr-text" data-content="GDG">

                    </div>

                    <div class="col-md-6">

                        <div class="photobox">

                            <img src="{{asset($blog->cover_image)}}">

                        </div>

                    </div>

                    <p class="devfest-content">



                        {!!html_entity_decode($blog->content)!!}

                    </p>

                </div>

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