@extends("layouts.backend")
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @if(isset($blog))
                    {{$blog->title}}
                @else
                    Yeni Kategori
                @endif
                <small>Blog Kategorileri</small>
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
                                    <img src="@if(isset($blog)){{asset($blog->cover_image)}} @endif" alt="" id="coverImageShow">
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Kapak Fotoğrafı</label>

                                <div class="col-sm-10">
                                    <input name="coverImage" type="file" class="form-control" id="coverImage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Başlık</label>

                                <div class="col-sm-10">
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Başlık" value="@if(isset($blog)) {{$blog->title}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="page_id" class="col-sm-2 control-label">Kategori</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="blogCategory" name="blogCategory">
                                        <option value="" selected>Kategori seçiniz</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" @if(isset($blog) && $category->id == $blog->category_id) selected @endif >{{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="keywords" class="col-sm-2 control-label">Etkinlik Adı</label>

                                <div class="col-sm-10">
                                    <select class="form-control" name="keywords" id="keywords">
                                        <option value="gdg">GDG</option>
                                            <option value="wtm">WTM</option>
                                        <option value="workshop">WORKSHOP</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Açıklama</label>

                                <div class="col-sm-10">
                                    <input name="description" type="text" class="form-control" id="description" placeholder="Açıklama" value="@if(isset($blog)) {{$blog->description}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">İçerik</label>

                                <div class="col-sm-10">
                                    <textarea name="content" class="form-control textarea" id="content" placeholder="İçerik girin">
                                        @if(isset($blog)) {{$blog->content}} @endif
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Etiketler</label>

                                <div class="col-sm-10">
                                    <input name="tags" type="text" class="form-control" id="tags" placeholder="Etiketler" value="@if(isset($blog)) {{$blog->tags}} @endif">
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
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset("assets/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}"></script>
    <script>
        $(function () {
            $('.textarea').wysihtml5();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN' : '{{csrf_token()}}'
                }
            });
        });

        $("#submitButton").click(function () {
                    @if(isset($blog))
            var url ="{{route("backend.blog.update", ["slug" => $blog->slug])}}";
                    @else
            var url = "{{route("backend.blog.create")}}";
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