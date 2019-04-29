@extends("layouts.backend")
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @if(isset($ticket))
                    {{$ticket->name}}
                @else
                    Yeni Sayfa
                @endif
                <small>Statik sayfalar</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal">
                        {{csrf_field()}}
                        <div class="box-body">
                            @foreach($tickets as $ticket)

                            @endforeach
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Adı</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Adı" value="@if(isset($ticket)) {{$ticket->name}} @endif">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="slug" class="col-sm-2 control-label">Linki</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="slug" placeholder="Link" value="@if(isset($ticket)) {{$ticket->slug}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Günü</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Günü" value="@if(isset($ticket)) {{$ticket->title}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keywords" class="col-sm-2 control-label">Bilet fiyatı</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="keywords" placeholder="Bilet fiyatı" value="@if(isset($ticket)) {{$ticket->keywords}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Açıklama</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="description" placeholder="Açıklama" value="@if(isset($ticket)) {{$ticket->description}} @endif">
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
                url  : "{{route("backend.tickets.update")}}",
                data : {
                    _token : "{{csrf_token()}}",
                    name : $("#name").val(),
                    slug : $("#slug").val(),
                    title : $("#title").val(),
                    keywords : $("#keywords").val(),
                    description : $("#description").val()
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