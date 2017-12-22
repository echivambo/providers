
@extends('layouts.pag')
@section('content')
    <style>
        /*.accordion{width:500px; margin: 0 auto;}*/
        .accordion-toggle {border-bottom: 1px solid #cccccc;cursor: pointer;margin: 0;padding: 10px 0;position: relative;}
        .accordion-toggle.active:after{content:"";position:absolute;right:0;top:17px;width:0;height:0;border-bottom:5px solid #f6941e;border-left:5px solid rgba(0,0,0,0);border-right:5px solid rgba(0,0,0,0);}
        .accordion-toggle:before{content:"";position:absolute;right:0;top:17px;width:0;height:0;border-top:5px solid #000;border-left:5px solid rgba(0,0,0,0);border-right:5px solid rgba(0,0,0,0);}
        .accordion-toggle.active:before{display:none;}
        .accordion-content {display: none;}
        .accordion-toggle.active {color: #f6941e;}
    </style>

    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="box-title titulo text-center">FORMULÁRIO DE REGISTO DO FORNECEDOR</h3>
                 <div class="panel-body">
                     <form class="form-horizontal form-material">

                     <div class="col-md-offset-1 col-md-10">
                         <div class="accordion">
                             <h4 class="accordion-toggle">Identificação</h4>
                             <div class="accordion-content">

                                 <div class="form-group">
                                     <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                     <div class="validation"></div>
                                 </div>
                                 <div class="form-group">
                                     <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                     <div class="validation"></div>
                                 </div>

                             </div>

                             <h4 class="accordion-toggle">Endereço / Contacto</h4>
                             <div class="accordion-content">

                                 <div class="form-group">
                                     <label class="col-md-12">Full Name</label>
                                     <div class="col-md-12">
                                         <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line"> </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="example-email" class="col-md-12">Email</label>
                                     <div class="col-md-12">
                                         <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email"> </div>
                                 </div>


                             </div>

                             <h4 class="accordion-toggle">Dados Bancários</h4>
                             <div class="accordion-content">
                                 <p>
                                     Vivamus facilisisnibh scelerisque laoreet.
                                 </p>
                             </div>
                         </div>

                           <br>
                           <div class="form-group">
                               <button class="btn btn-success">Salvar</button>
                           </div>
                       </div>
                     </form>
                 </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.accordion').find('.accordion-toggle').click(function() {
                $(this).next().slideToggle('600');
                $(".accordion-content").not($(this).next()).slideUp('600');
            });
            $('.accordion-toggle').on('click', function() {
                $(this).toggleClass('active').siblings().removeClass('active');
            });
        });
    </script>
@endsection()