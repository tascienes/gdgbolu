@extends("layouts.backend")

@section("content")

    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>



                <small>Counter</small>

            </h1>

        </section>



        <!-- Main content -->

        <section class="content">

            <div class="row">

                <div class="box box-info">

                    <div class="box-header with-border">

                        <h3 class="box-title">Saya� Ayar</h3>

                    </div>

                    <!-- /.box-header -->

                    <!-- form start -->

                    <form class="form-horizontal">

                        {{csrf_field()}}

                        <div class="box-body">



                            <div class="form-group">

                                <label for="event" class="col-sm-2 control-label">Event Sayısı</label>



                                <div class="col-sm-10">

                                    <input type="number" class="form-control" id="event" placeholder="Event Sayısı" >

                                </div>

                            </div>



                            <div class="form-group">

                                <label for="participant" class="col-sm-2 control-label">Katılımcı Sayısı</label>



                                <div class="col-sm-10">

                                    <input type="number" class="form-control" id="participant" placeholder="Katılımcı Sayısı" >

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="speaker" class="col-sm-2 control-label">Konuşmacı Sayısı</label>



                                <div class="col-sm-10">

                                    <input type="number" class="form-control" id="speaker" placeholder="Konuşmacı Sayısı" >

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="workshop" class="col-sm-2 control-label">Workshop Sayısı</label>



                                <div class="col-sm-10">

                                    <input type="number" class="form-control" id="workshop" placeholder="workshop sayısı" >

                                </div>

                            </div>



                        </div>

                        <!-- /.box-body -->

                        <div class="box-footer">

                            <button type="button" class="btn btn-default">İptal</button>

                            <button type="button" class="btn btn-info pull-right" id="submitButton">Kaydet</button>

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



            swal({

                title:'Yükleniyor..',

                html:

                    '<i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>'+

                    '<span class="sr-only">Loading..</span>',

                showCloseButton:false,

                showCancelButton:false,

                showConfirmButton:false,

                allowOutsideClick: false



            });



            $.ajax({

                type : "post",

                url  : "{{route("backend.counters.update")}}",

                data : {

                    _token : "{{csrf_token()}}",

                    event : $("#event").val(),

                    participant : $("#participant").val(),

                    speaker : $("#speaker").val(),

                    workshop : $("#workshop").val()



                },



                success: function (response) {



                    swal.close();

                    swal({

                        type:response.status,

                        title:"Başarılı",

                        text:response.message



                    });



                },



                error: function (response) {

                    swal.close();

                    console.log(response);

                }



            });

        })

    </script>

@endpush



@push("customCss")



@endpush