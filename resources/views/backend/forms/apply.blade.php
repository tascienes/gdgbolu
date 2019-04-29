@extends("layouts.backend")
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gallery
                <small>Galery Listesi</small>
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

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">


                                @foreach($applys as $apply)


                                    <tr>
                                        <hr>
                                        <h3>İsim :  <small> {{$apply->fname}}</small></h3>
                                        <h3>Email : <small>  {{$apply->email}}</small></h3>
                                        <h3>Subject :   <small>{{$apply->subject}}</small></h3>
                                        <h3>Message :  <small> {{$apply->message}}</small></h3>

                                        <button class="btn btn-danger blogDelete" data-id="{{$apply->id}}">Sil</button>

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
                url : "{{route("backend.forms.applyDelete")}}",
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
            location.reload();
        })
    </script>
@endpush

@push("customCss")

@endpush