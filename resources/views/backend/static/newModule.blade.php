@extends("layouts.backend")
@section("content")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @if(isset($module))
                    {{$module->name}}
                @else
                    Yeni Modul
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
                            <div class="form-group">
                                <label for="name" class="col-sm-2 control-label">Adı</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Adı" value="@if(isset($module)) {{$module->name}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="page_id" class="col-sm-2 control-label">Select</label>
                                <div class="col-sm-10">
                                <select class="form-control" id="page_id" name="page_id">
                                    <option value="" selected>Sayfa seçiniz</option>
                                    @foreach($pages as $page)
                                    <option value="{{$page->id}}" @if(isset($module) && $page->id == $module->page_id) selected @endif >{{$page->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title" class="col-sm-2 control-label">Başlık</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Başlık" value="@if(isset($module)) {{$module->title}} @endif">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-sm-2 control-label">Açıklama</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="description" placeholder="Açıklama" value="@if(isset($module)) {{$module->description}} @endif">
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
                    @if(isset($module))
            var url ="{{route("backend.static.module.moduleEdit", ["id" => $module->id])}}";
                    @else
            var url = "{{route("backend.static.module.newModuleCreate")}}";
            @endif

            $.ajax({
                type : "post",
                url  : url,
                data : {
                    _token : "{{csrf_token()}}",
                    name : $("#name").val(),
                    title : $("#title").val(),
                    description : $("#description").val(),
                    page_id : $("#page_id").val()
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