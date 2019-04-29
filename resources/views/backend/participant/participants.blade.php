@extends("layouts.backend")



@section("content")

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>



                    Yeni Katılımcı





            </h1>

        </section>











    <section class="content">

        <div class="row">

            <div class="box box-info">

                <div class="box-header with-border">

                    <h3 class="box-title">Yeni Katılımcı Ekle</h3>

                </div>

                <!-- /.box-header -->

                <!-- form start -->

                <form class="form-horizontal">

                    {{csrf_field()}}

                    <div class="box-body">





                        <div class="form-group">

                            <label for="participant" class="col-sm-2 control-label">Katılımcı Adı Giriniz</label>



                            <div class="col-sm-10">

                                <input type="text" class="form-control" id="participant" placeholder="Katılımcı adı.." autofocus    value="@if(isset($add)) {{$add}} @endif">

                            </div>

                        </div>

                    </div>

                    <!-- /.box-body -->

                    <div class="box-footer">

                        <button type="submit" class="btn btn-info pull-right" id="submitButton">Kaydet</button>

                    </div>

                    <!-- /.box-footer -->

                </form>

            </div>

        </div>

    </section>







    </div>















@endsection



@push("customJs")



    <script>

        $("#submitButton").click(function () {

            $.ajax({

                type : "post",

                url  : "{{route("backend.participants.add")}}",

                data : {

                    _token : "{{csrf_token()}}",

                    participant : $("#participant").val(),



                },



                success: function (response) {



                    console.log(response);



                },



                error: function (response) {



                    console.log(response);

                }



            });

        })









    </script>



@endpush



@push("customCss")



@endpush