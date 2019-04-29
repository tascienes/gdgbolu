@extends("layouts.frontend2")



@section("content")

    <div class="header-content animate-box" style=" background-image: url({{asset('images/hakkimizda.jpg')}});">



    </div>




     <div id="fh5co-blog" style="background-color: rgba(11, 35, 45, 0.12) ">

        <div class="container">

            <div class="row">

                <div class="col-md-6 animate-box">

                    <div class="about-box">

                        <h3 class="about-question"><i class="fa fa-question-circle"></i> Biz kimiz?</h3>

                        <h5 class="about-answer">Bolu'da teknolojiye ilgi duyan ve bilgiyi geliştirmek ve paylaşmak isteyen bir topluluğuz.</h5>

                    </div>

                    <div class="about-box">

                        <h3 class="about-question"><i class="fa fa-question-circle"></i> Neler yapıyoruz?</h3>

                        <h5>Amacımız, mevcut teknolojileri yayan, katılımcıların birbirleriyle etkili iletişim kurmalarını ve küçük çalışma grupları ile bir şeyler üretmelerini sağlayan bir dizi etkinlik düzenlemek.</h5>

                    </div>

                    <div class="about-box">

                        <h3 class="about-question"><i class="fa fa-question-circle"></i> Kimler katılabilir?</h3>

                        <h5>Teknolojiyle ilgilenen, teknolojiye merak duyan herkes katılabilir.</h5>

                    </div>

                    <div class="about-box">

                        <h3 class="about-question"><i class="fa fa-question-circle"></i> Bu etkinlikler katılımcılar için neden önemli?</h3>

                        <h5>Katılımcılar, çeşitli alanlardaki bilgileri paylaştığımız için mevcut teknolojilerin farkında olacaklardır. Farklı profilleri olan çeşitli insanlarla tanışmak mümkün olacak. Küçük çalışma gruplarının oluşturulması, grup üyelerinin becerilerini geliştirmelerini ve bir şeyler üretmelerini sağlar. Bu eserler web sitemizde yayınlanacaktır, bu nedenle katılımcılar dış dünyadan yeni fırsatlar bulabilirler.</h5>

                    </div>

                </div>

                <div class="col-md-6 animate-box text-center">

                    <img src=" {{asset('images/gdgx1.jpg')}}" style="width: 100%;padding-top: 40px;">



                </div>

            </div>

        </div>

    </div>
 <div class="row copyright">
        <div class="col-md-12 text-center">
            <p>
                <small class="block">&copy; 2019 GDG BOLU - Tum Haklari Saklidir Furkay - Enes </small>
            </p>
            <p>
            <ul class="fh5co-social-icons">
                <li><a href="https://www.twitter.com/gdgbolu"><i class="icon-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/gdgbolu"><i class="icon-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/gdgbolu"><i class="icon-instagram"></i></a></li>

            </ul>
            </p>
        </div>
    </div>
   

@endsection



@push("customJs")
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

 	


@endpush



@push("customCss")



@endpush