@extends("layouts.backend")

@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Event
                <small>Event Ayarları</small>
            </h1>

        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">active disabled complete</h3>

                            <div class="box-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">


                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr id="settingTableHeader">
                                    <th>Alan</th>
                                    <th>Değer</th>

                                </tr>

                                @foreach($events as $event)

                                    <tr>
                                        <td>{{$event->key}}</td>
                                        <td><input class="form-control settingInput " type="text" value="{{$event->value}}" name="{{$event->key}}">  </td>
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
        $(".settingInput").on("change",function () {
            var input=$(this);
            $.ajax({
                type: "post",
                url:"{{route("backend.events.update")}}",
                data:{
                    _token:"{{csrf_token()}}",
                    key   :input.attr("name"),
                    value :input.val()

                },

                success: function (response) {
                    console.log("başarılı");
                    console.log(response);
                },
                error: function (response) {
                    console.log("hataaa");
                    console.log(response);
                }

            });
        })

        $("#newSetting").click(function () {
            var data="<tr>\n" +
                "<td><input class=\"form-control  \" type=\"text\"  name=\"key\" id='newSettingKey'> </td>\n" +
                "<td><input class=\"form-control  \" type=\"text\"  name=\"value\" id='newSettingValue'>  </td>\n" +
                "</tr>";
            $("#settingTableHeader").after(data);
        })
        var key=false;
        var value=false;

        $(document).on("change","#newSettingKey",function () {
            if($(this).val().length >3 && $("#newSettingValue").val().length >3){

                newSetting()
            }
        })

        $(document).on("change","#newSettingValue",function () {
            if($(this).val().length >3 && $("#newSettingKey").val().length >3){

                newSetting()

            }
        })
        function newSetting() {
            var key=$("#newSettingKey").val();
            var value=$("#newSettingValue").val();
            $.ajax({

                type : "post",
                url  : "{{route("backend.events.create")}}",
                data :{
                    _token: "{{csrf_token()}}",
                    key   : key,
                    value :value

                },

                success:function (response) {
                    if(response.status == "success"){
                        location.reload();

                    }
                    console.log(response);
                },
                error: function (response) {
                    console.log(response);

                }

            })

        }

        $(".settingDelete").click(function () {
            var button=$(this);


            $.ajax({
                type : "post",
                url  :  "{{route("backend.events.delete")}}",
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