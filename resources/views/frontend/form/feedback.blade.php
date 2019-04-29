@extends("layouts.frontend2")

@section("content")
    <div class="header-content animate-box" style=" background-image: url('images/deneme.jpg');">

    </div>


    <div id="fh5co-blog" style="background-color: rgba(11, 35, 45, 0.12) ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <h3>Geri Bildirim Formu</h3>
                    <form action="/feedback" method="post">
                        {{csrf_field()}}
                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" required name="fname" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="text" required name="email" class="form-control" placeholder="E-mail Adresiniz">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input required type="text" name="bolum" class="form-control" placeholder="Öğrenciyseniz bölümünüz">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subject">Hangi Etkinliğe Katıldınız?</label>
                                <input type="text" required name="subject" class="form-control" placeholder="GDG'2018, WTM'2018 vs.">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">Etkinlik hakkında görüşleriniz nelerdir?</label>
                                <textarea name="message" required id="message" cols="30" rows="10" class="form-control" placeholder="Tasarım,sponsor görüşmeleri,ekip içi görevler vs. ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" style="float: right;" value="Başvuru Gönder" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@push("customJs")

@endpush

@push("customCss")

@endpush