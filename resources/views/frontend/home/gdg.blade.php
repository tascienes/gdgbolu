@extends("layouts.frontend2")



@section("content")















<div class="header-content animate-box" style=" background-image: url({{asset('images/devfest2.jpg')}});">



</div>



<div id="fh5co-blog" style="background-color: #f5f6fa">

    <div class="container">



        @foreach($blogs as $blog)





        <div class="devfest-box" id="{{$blog->slug}}">

            <div class="row">

                <div class="col-md-12 text-center">

                    <h1 class="devfest-title">{{$blog->title}}</h1>

                    <hr class="hr-text" data-content="">

                </div>

                <div class="col-md-6">

                    <div class="photobox">

                        <img src="{{asset($blog->cover_image)}}">

                    </div>

                </div>

                <div class="col-md-6 content-div">
                    <p class="devfest-content">

                        {!!html_entity_decode($blog->content)!!}


                    </p>
                </div>

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

<style type="text/css">
.devfest-box{
    margin-top: 30px;
    margin-bottom: 30px;
    background-color: #FFC20B;
    border-radius: 25px;
}

.devfest-title{
  color: #ffffff !important;
}

.content-div p{
    color: #fff !important;
    padding: 0px 20px 10px 20px;
}
</style>

@endpush