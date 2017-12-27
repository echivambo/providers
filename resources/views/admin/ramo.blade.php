
@extends('admin.layout')
@section('content')
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="box-title titulo text-center">Registro de Ramos de Atividade</h3>
                @include('admin.mensagens.msg')
                <div class="panel-body">
                    <form class="subscribe_form"  method="post" action="{{route('ramo.store')}}">
                    {{ csrf_field() }}

                    <!--User ID-->
                        <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">

                        <div class="form-group">
                            <div class="col-md-offset-4 col-md-4">
                                <input type="text" placeholder="ramo" class="form-control form-control-line text-center" name="ramo" id="ramo">
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-success center-block" id="gerar">Gravar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="row">


                    <div class="col-md-12">
                        <h3 class="box-title titulo">lista de Ramos</h3>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-sortable">
                                <thead>
                                <tr>
                                    <th>Ramo</th>
                                    <th>Usuario</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($controle as $cli)
                                    <tr>

                                        <td>{{$cli->ramo}}</td>
                                        <td>{{$cli->user}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

    <!--/.main-->
@endsection()