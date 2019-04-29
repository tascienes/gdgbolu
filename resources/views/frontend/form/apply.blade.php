@extends("layouts.frontend2")

@section("content")




    <div class="header-content animate-box" style=" background-image: url('images/basvuru.jpg');">

    </div>


    <div id="fh5co-blog" style="background-color: rgba(11, 35, 45, 0.12) ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <h3>Ekip Başvuru Formu</h3>
                    <form action="/apply" method="post">
                     {{csrf_field()}}

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="fname">First Name</label> -->
                                <input required type="text" name="fname" class="form-control" placeholder="Adınız Soyadınız">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input required type="text" name="email" class="form-control" placeholder="E-mail Adresiniz">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subject">neden prje ?</label>
                                <input required type="text" name="subject" class="form-control" placeholder="Çünkü...">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="message">prje için neler yapabilirsiniz?</label>
                                <textarea required name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Tasarım,sponsor görüşmeleri,ekip içi görevler vs. ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit"  style="float: right;" value="Başvuru Gönder" class="btn btn-primary">
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