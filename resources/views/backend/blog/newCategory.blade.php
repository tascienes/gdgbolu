@extends("layouts.backend")
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @if(isset($category))
                    {{$category->title}}
                @else
                    Yeni Kategori
                @endif
                <small>Blog kATEGORİLERİ</small>
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
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Başlık</label>

                                <div class="col-sm-10">
                                    <input name="title" type="text" class="form-control" id="title" placeholder="Başlık" value="@if(isset($category)) {{$category->title}} @endif">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="keywords" class="col-sm-2 control-label">Keywords</label>

                                <div class="col-sm-10">
                                    <input name="keywords" type="text" class="form-control" id="keywords" placeholder="Keywords" value="@if(isset($category)) {{$category->keywords}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Açıklama</label>

                                <div class="col-sm-10">
                                    <input name="description"  type="text" class="form-control" id="description" placeholder="Açıklama" value="@if(isset($category)) {{$category->description}} @endif">
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
                    @if(isset($category))
            var url ="{{route("backend.blog.category.update",["id"=>$category->id])}}";
                    @else
            var url = "{{route("backend.blog.category.create")}}";
            @endif

            $.ajax({
                type : "post",
                url  : url,
                data : {
                    _token : "{{csrf_token()}}",

                    title : $("#title").val(),
                    description : $("#description").val(),
                     keywords:    $("#keywords").val()

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