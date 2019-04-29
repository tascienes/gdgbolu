@extends("layouts.backend")
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>


                <small>Konuşmacı Ekle</small>
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
                    <form class="form-horizontal" id="blogForm" enctype='multipart/form-data'>
                        {{csrf_field()}}
                        <div class="box-body">


                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label"></label>

                                <div class="col-sm-10">
                                    <img src="@if(isset($member)){{asset($member->cover_image)}} @endif" alt="" id="coverImageShow">
                                </div>

                            </div>



                            <div class="form-group">
                                <label for="coverImage" class="col-sm-2 control-label">Kapak Fotoğrafı</label>

                                <div class="col-sm-10">
                                    <input name="coverImage" type="file" class="form-control" id="coverImage">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">İsim</label>

                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" id="" placeholder="ADI" value="@if(isset($member)) {{$member->name}} @endif">
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="scope" class="col-sm-2 control-label">Alanı</label>
                                <div class="col-sm-10">
                                    <input name="scope" type="text" class="form-control" id="title" placeholder="Alanı" value="@if(isset($member)) {{$member->scope}} @endif">
                                </div>
                            </div>
                        </div>






                </div>
                <!-- /.box-body -->
                <div class="box-footer">
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
    <!-- Bootstrap WYSIHTML5 -->
    <script>


        $("#submitButton").click(function () {
                    @if(isset($member))
            var url ="{{route("backend.members.update", ["id" => $member->id])}}";
                    @else
            var url = "{{route("backend.members.create")}}";
                    @endif

            var form = new FormData($("#blogForm")[0]);

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
                url  : url,
                data :form,
                processData : false,
                contentType: false,
                success:function (response) {
                    swal.close();
                    swal({
                        type:response.status,
                        title:response.title,
                        text:response.message

                    });

                },
                error:function (response) {
                    swal.close();
                    console.log(response);
                }
            });
        })

        $("#coverImage").change(function() {
            var input = this;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#coverImageShow').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        });
    </script>
@endpush

@push("customCss")

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset("assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css")}}">
@endpush