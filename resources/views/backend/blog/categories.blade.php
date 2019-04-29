@extends("layouts.backend")

@section("content")

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>

                Kategoriler

                <small>Blog Kategorileri</small>

            </h1>

        </section>



        <!-- Main content -->

        <section class="content container-fluid">



            <div class="row">

                <div class="col-xs-12">

                    <div class="box">

                        <div class="box-header">

                            <h3 class="box-title">Kategori Liste</h3>



                            <div class="box-tools">

                                <div class="input-group input-group-sm" style="width: 150px;">

                                    <div class="input-group-btn">

                                        <a href="{{route("backend.blog.category.createShow")}}" class="btn btn-primary" id="newSetting">Ekle</a>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- /.box-header -->

                        <div class="box-body table-responsive no-padding">

                            <table class="table table-hover">

                                <tr id="settingTableHeader">

                                    <th>#</th>

                                    <th>Başlık</th>

                                    <th>İşlemler</th>

                                </tr>



                                @foreach($categories as $category)

                                    <tr>

                                        <td>{{$category->id}}</td>

                                        <td>{{$category->title}} </td>



                                        <td>

                                            <button class="btn btn-danger categoryDelete" data-id="{{$category->id}}">Sil</button>

                                            <a href="{{route("backend.blog.category.updateShow",["id"=>$category->id])}}" class="btn btn-primary">Düzenle</a>

                                        </td>

                                    </tr>

                                @endforeach

                            </table>

                        </div>

                        <!-- /.box-body -->

                    </div>

                    <!-- /.box -->

                </div>

            </div>



        </section>

        <!-- /.content -->

    </div>

@endsection



@push("customJs")

    <script>

        $(".categoryDelete").click(function () {

            var button = $(this);





            $.ajax({

                type : "post",

                url : "{{route("backend.blog.category.delete")}}",

                data : {

                    _token : "{{csrf_token()}}",

                    id : button.data("id")

                },



                success : function (response) {

                    if (response.status == "success"){

                        button.closest("tr").remove();

                    }



                    console.log(response);

                },



                error : function (response) {

                    console.log(response)

                }

            })

        })

    </script>

@endpush



@push("customCss")



@endpush