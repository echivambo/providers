@extends('admin.layout')
@section('content')

    <!-- Page Content -->



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
