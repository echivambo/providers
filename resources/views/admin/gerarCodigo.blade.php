
@extends('admin.layout')
@section('content')

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="box-title titulo text-center">GERAR CÓDIGO DE CADASTRO</h3>
                @include('admin.mensagens.msg')
                 <div class="panel-body">
                     <form class="subscribe_form"  method="post" onsubmit="return false">
                     {{ csrf_field() }}

                         <!--User ID-->
                         <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">

                         <div class="form-group">
                             <div class="col-md-offset-4 col-md-4">
                                 <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line text-center" name="email" id="email">
                             </div>
                             <div class="col-sm-12">
                                 <button class="btn btn-success center-block" id="gerar">Gerar Código</button>
                             </div>
                         </div>
                     </form>
                 </div>
            </div>
        </div>
    </div>
                    <!-- /row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <h3 class="box-title">Lista de Códigos</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                            <th>Código</th>
                                            <th>Data</th>
                                            <th>Usuário</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($controle as $cli)
                                            <tr>
                                                <td>{{$cli->id}}</td>
                                                <td>{{$cli->email}}</td>
                                                <td>{{$cli->codigo}}</td>
                                                <td>{{$cli->created_at}}</td>
                                                <td>{{$cli->user}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->

    <script>
        $('#gerar').click(function (e) {
            e.preventDefault();
            var email = $('#email').val();
            var user_id = $('#user_id').val();
            var token = $('input[name="_token"]').val();
            var data = {
                email:email,
                user_id:user_id,
                token:token
            };

            var request = $.ajax({
               url: "/gerar-codigo/validacao",
                type: "POST",
                data: data,
                dataType: "html",
                headers: {
                    'X-CSRF-Token':'{{ csrf_token() }}',
                },
            });

            request.done(function (msg) {
                var response = JSON.parse(msg);
                console.log(response.msg);
            });

            request.fail(function (jqXHR, textStatus) {
                console.log("Erro ao gerar cogido" + textStatus);
            })
        })
    </script>

@endsection()