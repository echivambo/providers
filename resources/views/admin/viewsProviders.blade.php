@extends('admin.layout')
@section('content')

    <!-- Page Content -->

            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Providers</h3>
                        <!--
                        <ul class="list-inline text-right">
                            <li>
                                <a href="#" ><h5 style="color: #73a534;"><i class="fa fa-circle m-r-5" style="color: #73a534;"></i>Baixar Relatório</h5></a>
                            </li>
                        </ul>
                        -->
                        <div id="" style="height: 370px; overflow: scroll;">
                            <table class="table display nowrap "  id="example" cellspacing="0">
                                <thead>
                                <th>Nome Empresa</th>
                                <th>Pessoa Contacto</th>
                                <th>Alvara</th>
                                <th>NUIT</th>
                                <th>País</th>
                                <th>Província</th>
                                <th>Cidade</th>
                                <th>Bairro</th>
                                <th>Endereço Físico</th>
                                <th>Número (Endereço)</th>
                                <th>Ramo de Actividade</th>
                                <th>Telefone Fixo</th>
                                <th>Fax</th>
                                <th>Celular</th>
                                <th>Email</th>
                                <th>Nome do Banco</th>
                                <th>Número da Conta</th>
                                <th>NIB</th>
                                <th>Nome da agência</th>
                                <th>Bancaria</th>
                                </thead>

                                <tbody>

                                @foreach($providers as $cli)
                                    <tr>
                                        <td>{{$cli->nome_empresa}}</td>
                                        <td>{{$cli->pessoa_contacto}}</td>
                                        <td><a href="{{$cli->alvara}}" target="_blank"><i class="fa fa-print" aria-hidden="true" title="Alvara"></i></a></td>
                                        <td>{{$cli->nuit}}</td>
                                        <td>{{$cli->pais}}</td>
                                        <td>{{$cli->provincia}}</td>
                                        <td>{{$cli->cidade}}</td>
                                        <td>{{$cli->bairro}}</td>
                                        <td>{{$cli->endereco_fisico}}</td>
                                        <td>{{$cli->end_numero}}</td>
                                        <td>{{$cli->ramo_atividade}}</td>
                                        <td>{{$cli->telefone_fixo}}</td>
                                        <td>{{$cli->fax}}</td>
                                        <td>{{$cli->celular}}</td>
                                        <td>{{$cli->email}}</td>
                                        <td>{{$cli->nome_banco}}</td>
                                        <td>{{$cli->numero_conta}}</td>
                                        <td>{{$cli->nib}}</td>
                                        <td>{{$cli->nome_agencia}}</td>
                                        <td><a href="{{$cli->bancaria}}" target="_blank"><i class="fa fa-print" aria-hidden="true" title="Bancária"></i></a></td>
                                    </tr>
                                @endforeach


                                </tbody>

                            </table>
                        </div>
                    </div>



        </div>
        <footer class="footer text-center">
            2017 © Copyright Procurement | PSI Moz. By <a href="http://evidevi.com/">evidevi.com</a>.
        </footer>
    </div>
    <!-- /#page-wrapper -->

    <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "scrollY": 200,
                "scrollX": true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]
            } );

        } );
    </script>

@endsection()
