@extends("layouts.frontend2")



@section("content")

    <div class="header-content animate-box" style=" background-image: url({{asset('images/galeri.jpg')}});">



    </div>





    <div class="fh5co-blog">

        <div class="container">



       @foreach($albums as $album)



           @php($images=rtrim(ltrim($album->route)))

                @php($resim=json_decode($images))







            <div class="gallery-box animate-box">

                <div class="row">

                    <div class="col-md-12">

                        <h1 class="gallery-title">{{$album->name}}</h1>

                        <hr class="gallery-hr">

                    </div>





                   @for($i=0;$i<count($resim); $i++)

                    <div class="col-md-2">



                        <a  data-fancybox="gallery" href="{{asset("/photos/".$resim[$i])}}"><img class="gallery-img-items" src="{{asset("/photos/".$resim[$i])}}"></a>

                    </div>

                    @endfor







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
    .gallery-img-items{
        object-fit: cover;
        height: 200px;
    }
</style>

@endpush