@extends("layouts.backend")

@section("content")

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <h1>

                Bloglar

                <small>Bloglar</small>

            </h1>

        </section>



        <!-- Main content -->

        <section class="content container-fluid">



            <div class="row">

                <div class="col-xs-12">

                    <div class="box">

                        <div class="box-header">

                            <h3 class="box-title">Bloglar</h3>



                            <div class="box-tools">

                                <div class="input-group input-group-sm" style="width: 150px;">

                                    <div class="input-group-btn">

                                        <a href="{{route("backend.blog.createShow")}}" class="btn btn-primary" id="newSetting">Ekle</a>

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

                                    <th>Yazar</th>

                                    <th>Kategori</th>

                                    <th>İşlemler</th>

                                </tr>



                                @foreach($blogs as $blog)

                                    <tr>

                                        <td>{{$blog->id}}</td>

                                        <td>{{$blog->title}} </td>

                                        <td>{{"yazar"}} </td>

                                        <td>{{$blog->category->title}} </td>

                                        <td>

                                            <button class="btn btn-danger blogDelete" data-id="{{$blog->id}}">Sil</button>

                                            <a href="{{route("backend.blog.updateShow", ["slug" => $blog->slug])}}" class="btn btn-primary">Düzenle</a>

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

        $(".blogDelete").click(function () {

            var button = $(this);

            $.ajax({

                type : "post",

                url : "{{route("backend.blog.delete")}}",

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