@extends('layouts.app')



@section('content')

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-heading">Login</div>

                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{route("backend.login")}}">

                            {{ csrf_field() }}



                            <div class="form-group">

                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>



                                <div class="col-md-6">

                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">





                                        <span class="help-block">

                                        <strong></strong>

                                    </span>



                                </div>

                            </div>



                            <div class="form-group">

                                <label for="password" class="col-md-4 control-label">Password</label>



                                <div class="col-md-6">

                                    <input id="password" type="password" class="form-control" name="password">





                                        <span class="help-block">

                                        <strong></strong>

                                    </span>



                                </div>

                            </div>



                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-4">

                                    
                                </div>

                            </div>



                            <div class="form-group">

                                <div class="col-md-6 col-md-offset-4">

                                    <button type="submit" class="btn btn-primary">

                                        <i class="fa fa-btn fa-sign-in"></i> Login

                                    </button>



                                   
                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
