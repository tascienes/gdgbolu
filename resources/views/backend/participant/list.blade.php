@extends("layouts.backend")

@section("content")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Katılımcılar
                <small>Katılımcı Listesi</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Responsive Hover Table</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">

                                    <div class="input-group-btn">
                                        <a  class="btn btn-primary" href="/admin/participants" >Ekle</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr id="settingTableHeader">
                                    <th>#</th>
                                    <th>İsim</th>
                                    <th>Sil</th>
                                </tr>
                                    @php($i=1)
                                @foreach($participants as $participant)

                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$participant->participant}}</td>
                                        <td><button class="btn btn-danger settingDelete" data-key="{{$participant->id}}" >Sil</button></td>
                                    </tr>
                                    @php($i++)
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


        $(".settingDelete").click(function () {
            var button=$(this);


            $.ajax({
                type : "post",
                url  :  "{{route("backend.participants.delete")}}",
                data : {
                    _token :"{{csrf_token()}}",
                    key    : button.data("key")



                },
                success : function (response) {
                    if (response.status=="success"){
                        button.closest("tr").remove();
                    }
                    console.log(response);

                },
                error: function (response) {
                    console.log(response);
                }


            })
        })





    </script>



@endpush

@push("customCss")

@endpush