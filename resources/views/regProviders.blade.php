
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
                     <form class="form-horizontal form-material" action="{{route('providers.store')}}" method="post">
                         {{ csrf_field() }}

                     <div class="col-md-offset-1 col-md-10">
                         <div class="accordion">
                             <h4 class="accordion-toggle">Identificação</h4>
                             <div class="accordion-content">

                                 <div class="form-group">
                                     <div class="col-md-8">
                                        <label>Nome da Empresa / Pessoa Singulars</label>
                                         <input type="text" class="form-control form-control-line" id="nome_empresa" name="nome_empresa">
                                     </div>
                                     <div class="col-md-4">
                                         <label>Anexar Alvará</label>
                                         <input type="file" class="form-control form-control-line" id="alvara" name="alvara">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-8">
                                     <label for="nuit">NUIT</label>
                                         <input type="number" class="form-control form-control-line" name="nuit" id="nuit"> </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-8">
                                     <label for="pessoa_contacto">Pessoa do Contacto</label>
                                         <input type="text" class="form-control form-control-line" name="pessoa_contacto" id="pessoa_contacto"> </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-8">
                                         <label>Ramo de Actividade</label>
                                         <select name="ramo_atividade" id="ramo_atividade" class="form-control form-control-line">
                                             <option value=""></option>
                                             <option value="limpeza">Limpeza</option>
                                         </select>
                                     </div>
                                 </div>

                             </div>

                             <h4 class="accordion-toggle">Endereço / Contacto</h4>
                             <div class="accordion-content">

                                 <div class="form-group">
                                     <div class="col-md-8">
                                        <label>Endereço Físico da Empresa</label>
                                         <input type="text" class="form-control form-control-line" name="endereco_fisico" id="endereco_fisico">
                                     </div>
                                     <div class="col-md-4">
                                        <label>Número</label>
                                         <input type="number" class="form-control form-control-line" name="end_numero" id="numero">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-6">
                                     <label>Bairro</label>
                                         <input type="text" class="form-control form-control-line" name="bairro"> </div>
                                     <div class="col-md-6">
                                         <label>Cidade</label>
                                         <input type="text" class="form-control form-control-line" name="cidade">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-6">
                                         <label>Província</label>
                                         <select name="provincia" id="provincia" class="form-control form-control-line">
                                             <option value="">Selecione a Província</option>
                                             <option value="Maputo">Maputo</option>
                                         </select>
                                     </div>
                                     <div class="col-md-6">
                                        <label>País</label>
                                         <select name="pais" id="pais" class="form-control form-control-line">
                                             <option value="">Selecione o País</option>
                                             <option value="Moz">Moz</option>
                                         </select>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-6">
                                         <label>Telefone Fixo</label>
                                         <input type="number" class="form-control form-control-line" name="telefone_fixo">
                                     </div>
                                     <div class="col-md-6">
                                        <label>Faxa</label>
                                         <input type="number" class="form-control form-control-line" name="fax">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-4">
                                         <label>Celular</label>
                                         <input type="number" class="form-control form-control-line" name="celular">
                                     </div>
                                     <div class="col-md-8">
                                        <label>Email</label>
                                         <input type="email" class="form-control form-control-line" name="email">
                                     </div>
                                 </div>

                             </div>

                             <h4 class="accordion-toggle">Dados Bancários</h4>
                             <div class="accordion-content">
                                 <div class="form-group">
                                     <div class="col-md-6">
                                         <label>Nome do Banco</label>
                                         <input type="text" class="form-control form-control-line" name="nome_banco"> </div>
                                     <div class="col-md-6">
                                         <label>Número da Conta</label>
                                         <input type="number" class="form-control form-control-line" name="numero_conta">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-4">
                                         <label>NIB</label>
                                         <input type="number" class="form-control form-control-line" name="nib"> </div>
                                     <div class="col-md-8">
                                         <label>Nome da Agência</label>
                                         <input type="text" class="form-control form-control-line" name="nome_agencia">
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <div class="col-md-6">
                                         <label>Bancária (Anexar documento assinado do banco)</label>
                                         <input type="file" class="form-control form-control-line" name="bancaria">
                                     </div>
                                 </div>

                             </div>
                         </div>

                           <br>
                           <div class="form-group">
                               <input type="submit" class="btn btn-success">
                               <!--<button class="btn btn-success">Salvar</button>-->
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