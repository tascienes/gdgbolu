
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="shortcut icon" href="{{asset("images/gdg.png")}}" />
    <title>GDG BOLU</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />



    <link rel="stylesheet" type="text/css" href="{{asset("assets/backend/cekilis/bootstrap.min.css")}}">

    <script type="text/javascript" src="{{asset("assets/backend/cekilis/bootstrap.min.js")}}"></script>

    <script type="text/javascript" src=" {{asset("assets/backend/cekilis/jquery.js")}}"></script>

    <script type="text/javascript" src="{{asset("assets/backend/cekilis/popper.min.js")}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href=" {{asset("assets/backend/cekilis/main.css")}}">
</head>
<body>


<div class="container-fluid">
    <div class="row ana-kisim">
        <div class="container-fluid">

            <div class="orta-resim">


                <img src="{{asset("assets/backend/cekilis/siteresim.png")}}">
            </div>

        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-6">



            <form  method="post" action="/admin/kura">
                {{csrf_field()}}
                <h1 class="title">Hediye Çekilişi</h1>
                <input class="sayi" type="text" name="txtCekilisAdi" required placeholder="Hediye Adı giriniz..."><br>
                <input class="sayi" type="number" name="txtCekilis" required placeholder="Sayı giriniz..."><br>
                <button type="submit" class="btn btn-primary btn-Cekilis" onclick="" name="btnCek">Çekiliş Yap</button><br>
                @php($winners=Session::get('winners'))
                <p class="winners-title">

                        <?php


                    if($winners){
                    echo  "Kazananlar";
                    }

                    ?>

                    </p>
                <label class="winners" style="margin-top: 0px;line-height: 13px;font-size: 20px;" >


 @php($sayac=1)
                @if($winners)
                
                    @foreach($winners as $winner)
                            <br>
                       {{$sayac}}.{{$winner}}
                            <br>
                        @php($sayac++)
                        @endforeach
                    @endif

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    



                </label><br>
            </form>


        </div>
        <div class="col-md-3">

        </div>
    </div>
</div>




</body>
</html>
