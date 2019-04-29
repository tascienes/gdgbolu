@extends("layouts.frontend")

@section("content")
<div class="se-pre-con"></div>

<div id="fh5co-started" style="background-image: url({{asset("images/img_bg_2.jpg")}}) " >
    <div class="overlay"></div>
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading" style="margin-bottom: 0;">
                @foreach($counters as $counter)
                @php($counter=$counter->find(1))

                @endforeach
                @foreach($tickets as $ticket)
                @php($ticket=$ticket->find(1))

                @endforeach

                <h2 style="font-size: 30px !important;padding-bottom: 20px;">{{$ticket["name"]}} Etkinliğimize Kaydolun </h2>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="ticket">
                            <div class="col-md-10" style=";border-top-left-radius: 5px;border-bottom-left-radius: 5px;border-right: 2px dashed #ff9f1a ;height: 200px;background-color: #fff;">
                                <h1 style="color: #333;padding: 30px 0px 20px 0px;">{{$ticket["keywords"]}}</h1>
                                <hr class="style-eight">
                                <span style="color: #333;font-size: 19px;">{{$ticket["title"]}}</span>
                            </div>
                            <div class="col-md-2 none" style="border:1px solid transparent;border-left:none;height: 200px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;background-color:#fff;">
                                <span class="participant">KATILIMCI</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <p style="padding-top: 20px;color: #333;">{{$ticket["description"]}}</p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p><a href="{{$ticket["slug"]}}" style="background-color: #fff;color: #333;text-transform: none;" class="btn btn-default btn-lg">Bilet Edinin</a></p>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-explore" class="fh5co-bg-section">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                <h2>GDG BOLU</h2>
                <p>GDG Bolu ekibi her sene büyük bir keyif ile DevFest düzenliyor. Siz de bunun bir parçası olmak isterseniz GDG Bolu Meetup'a bekleriz. </p>
            </div>
        </div>
    </div>
    <div class="fh5co-explore fh5co-explore1">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-5 animate-box">

                    <img class="img-responsive" src=" {{asset("images/gdga3.jpg")}}" alt="work">
                </div>
                <div class="col-md-4 col-md-pull-8 animate-box">
                    <div class="mt">
                        <h3>GDG NEDİR?</h3>
                        <p>Google Developers Group (GDG) büyük bir tutkuyla Google teknolojileri hakkındaki deneyimlerini paylaşan gönüllü geliştiricilerden oluşan bir topluluktur.</p>
                        <ul class="list-nav">
                            <li><i class="icon-check2"></i>Birbirinden eğlenceli etkinlikler</li>
                            <li><i class="icon-check2"></i>Birbirinden uzman konuşmacılar </li>
                            <li><i class="icon-check2"></i>Birbirinden güzel hediyeler</li>
                        </ul>
                        <p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://www.youtube.com/watch?v=KlWVfEiW7Ak"><i class="icon-play"></i> Videoyu İzle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fh5co-explore">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-pull-1 animate-box">
                    <img class="img-responsive" src=" {{asset("images/gdga1.jpg")}}" alt="work">
                </div>
                <div class="col-md-4 animate-box">
                  <div class="mt">

                   <div>

                       <h4><i class="icon-user"></i>Sizleri Neler Bekliyor?</h4>

                       <p>Birbirinden deneyimli konuşmacılar ve ilgi çekici konular. </p>

                   </div>

                   <div>

                       <h4><i class="icon-video2"></i>Size neler katacak?</h4>

                       <p>Google teknolojilerini daha yakından tanıyacaksınız, Teknoloji ve girişimcilik gibi konularda ki deneyimleri dinleyip bilgi sahibi olacaksınız. </p>

                   </div>

                   <div>

                       <h4><i class="icon-shield"></i>Kimler Katılabilir?</h4>

                       <p>Teknoloji ve yazılıma meraklı,kendini geliştirme hedefinde olan ve sorumluluk bilincinde herkes katılabilir. </p>

                   </div>

               </div>
           </div>
       </div>
   </div>
</div>
</div>


<div id="fh5co-counter" class="fh5co-counters">
    <div class="container">
        <div class="row">



            <div class="col-md-3 text-center animate-box">

                <span class="fh5co-counter js-counter" data-from="0" data-to="{{$counter["event"]}}" data-speed="5000" data-refresh-interval="50"></span>

                <span class="fh5co-counter-label">Etkinlik</span>

            </div>

            <div class="col-md-3 text-center animate-box">

                <span class="fh5co-counter js-counter" data-from="0" data-to="{{$counter["participant"]}}" data-speed="5000" data-refresh-interval="50"></span>

                <span class="fh5co-counter-label">Katılımcı</span>

            </div>

            <div class="col-md-3 text-center animate-box">

                <span class="fh5co-counter js-counter" data-from="0" data-to="{{$counter["speaker"]}}" data-speed="5000" data-refresh-interval="50"></span>

                <span class="fh5co-counter-label">Konuşmacı</span>

            </div>

            <div class="col-md-3 text-center animate-box">

                <span class="fh5co-counter js-counter" data-from="0" data-to="{{$counter["workshop"]}}" data-speed="5000" data-refresh-interval="50"></span>

                <span class="fh5co-counter-label">Workshop</span>

            </div>



        </div>
    </div>
</div>


<div id="fh5co-blog">
  <div class="container">

      <div class="row animate-box">

          <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">

              <h2>Etkinliklerden Haberler</h2>

              <!--  <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p> -->

          </div>

      </div>

      <div class="row">

          @foreach($blogs as $blog)



          <div class="col-lg-4 col-md-4">

              <div class="fh5co-blog animate-box">

                  <a href="#"><img style="width: 100%; height: 250px; object-fit: cover" class="img-responsive" src="{{asset($blog->cover_image)}}" alt="{{$blog->title}}"></a>

                  <div class="blog-text">

                      <h3><a href=""#>{{$blog->title}}</a></h3>

                      <span class="posted_on">{{$blog->description}}</span>



                      <p>{!! substr(html_entity_decode($blog->content),0,300)!!}...</p>

                      <a href="/{{$blog->keywords}}/#{{$blog->slug}}" class="btn btn-primary">Daha fazla</a>

                  </div>

              </div>

          </div>

          @endforeach



      </div>

  </div>
</div>


<div id="fh5co-project">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Konuşmacılar</h2>
                <p>Önümüzdeki etkinlikte bizlerle birlikte olacak konuşmacılarımız ve konuları... </p>
            </div>
        </div>
    </div>

    <!-- döngü baslangiç  -->





    @foreach($speakers as $speaker)

    <div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
        <a > <img src="{{asset($speaker->cover_image)}}" style="width: 100%; height: 500px; object-fit: cover">

            <h3>{{$speaker->name}}</h3>
            <span>{{$speaker->scope}}</span>
        </a>
    </div>
    @endforeach
    <!-- döngü bitiş  -->

</div>

<div id="fh5co-steps">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2>Etkinliklerimiz</h2>
                <p>Yaptığımız ve yapmayı planladığımız etkinlikler...</p>
            </div>
        </div>

        <div class="row bs-wizard animate-box" style="border-bottom:0;">
         @php($array=array())
         @foreach($events as $event)

         @php($array[]= $event->value)


         @endforeach


         <div class="col-xs-3 bs-wizard-step {{$array[2]}}">
            <div class="text-center bs-wizard-stepnum"><h4 class="events-title">{{$array[0]}}</h4></div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center"><p class="event-desc">{{$array[1]}} </p></div>
        </div>


        <div class="col-xs-3 bs-wizard-step {{$array[5]}}"><!-- complete -->
            <div class="text-center bs-wizard-stepnum"><h4 class="events-title">{{$array[3]}}</h4></div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center"><p class="event-desc">{{$array[4]}}</p></div>
        </div>

        <div class="col-xs-3 bs-wizard-step {{$array[8]}}"><!-- complete -->
            <div class="text-center bs-wizard-stepnum"><h4 class="events-title">{{$array[6]}}</h4></div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center"><p class="event-desc">{{$array[7]}}</p></div>
        </div>

        <div class="col-xs-3 bs-wizard-step {{$array[11]}}"><!-- active -->
            <div class="text-center bs-wizard-stepnum"><h4 class="events-title">{{$array[9]}}</h4></div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center"><p class="event-desc">{{$array[10]}}</p></div>
        </div>
    </div>

</div>
</div>
<!--
    <div id="fh5co-testimonial" class="fh5co-bg-section">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
                    <h2>Sosyal Medyada Biz</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="row animate-box">
                        <div class="owl-carousel owl-carousel-fullwidth">
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>

                                        <img src="{{asset("images/person_1.jpg")}}" alt="user">
                                    </figure>
                                    <span>GDG Bolu <a href="#" class="twitter"> Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Twitterdan çekilen bir gönderi.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{asset("images/person_2.jpg")}}" alt="user">
                                    </figure>
                                    <span>WTM BOLU<a href="#" class="twitter"> Twitter</a></span>
                                    <blockquote>
                                        <p>&ldquo;Twitterdan çekilen bir gönderi.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-slide active text-center">
                                    <figure>
                                        <img src="{{asset("images/person_3.jpg")}}" alt="user">
                                    </figure>
                                    <span>GDG BOLU <a href="#" class="twitter"> İnstagram</a></span>
                                    <blockquote>
                                        <p>&ldquo;Twitterdan çekilen bir gönderi.&rdquo;</p>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->



    @endsection

    @push("customJs")

    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
    <script>

        $(window).load(function() {

            $(".se-pre-con").fadeOut("slow");;
        });
    </script>




    @endpush

    @push("customCss")


    <style>


    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
       position: fixed;
       left: 0px;
       top: 0px;
       width: 100%;
       height: 100%;
       z-index: 9999;
       background: url({{asset("images/loader-64x/Preloader_2.gif")}}) center no-repeat #fff;
}

@media screen and (max-width:780px) {


    .events-title{
        font-size: 13px;
    }

    .event-desc{
        font-size: 11px;
    }
}

.index-buttons{
    margin-bottom: 20px;
}

</style>


@endpush
