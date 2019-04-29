@extends("layouts.backend")
@section("content")
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kura
            <small>Kura Listesi</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Çekiliş  Kazananlar  Tablosu</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <div class="input-group-btn">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <!--  <table class="table table-hover">


                            @foreach($winners as $winner)


                            <tr>
                                <hr>
                                <h3>Kazanan :  <small> {{$winner->winners}}</small></h3>
                                <h3>Ödül : <small>  {{$winner->gift}}</small></h3>


                                <button class="btn btn-danger blogDelete" data-id="{{$winner->id}}">Sil</button>

                            </tr>

                            @endforeach
                        </table>
                    -->
                        <!--ENES DENEME-->
                        <table class="table table-dark">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Kazanan Adı</th>
                              <th scope="col">Ödül</th>
                              <th scope="col">Sil</th>
                          </tr>
                      </thead>
                      <tbody>
                         @foreach($winners as $winner)
                         <tr>

                            <th scope="row">1</th>
                            <td>{{$winner->winners}}</td>
                            <td>{{$winner->gift}}</td>
                            <td>  <button class="btn btn-danger blogDelete" data-id="{{$winner->id}}">Sil</button> </td> 
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--ENES DENEME-->
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
            url : "{{route("backend.kura.delete")}}",
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