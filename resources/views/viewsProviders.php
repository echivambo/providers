@extends('admin.layout')
@section('content')

    <!-- Page Content -->

            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title">Providers</h3>
                        <ul class="list-inline text-right">
                            <li>
                                <a href="#" ><h5 style="color: #73a534;"><i class="fa fa-circle m-r-5" style="color: #73a534;"></i>Baixar Relatório</h5></a>
                            </li>
                        </ul>
                        <div id="" style="height: 370px; overflow: scroll;">
                            <table class="table display nowrap "  id="example" cellspacing="0">
                                <thead>
                                <th>Franquia</th>
                                <th>Mês</th>
                                <th>Código</th>
                                <th>Produto</th>
                                <th>Saldo inicial</th>
                                <th>Contagem Física</th>
                                <th>Entrada</th>
                                <th>Consumo do Mês</th>
                                </thead>
                                <tbody>

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
