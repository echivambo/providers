
@extends('layouts.pag')
@section('content')

    <style>
        .wizard {
            margin: 20px auto;
            background: #fff;
        }

        .wizard .nav-tabs {
            position: relative;
            margin: 40px auto;
            margin-bottom: 0;
            border-bottom-color: #e0e0e0;
        }

        .wizard > div.wizard-inner {
            position: relative;
        }

        .connecting-line {
            height: 2px;
            background: #e0e0e0;
            position: absolute;
            width: 80%;
            margin: 0 auto;
            left: 0;
            right: 0;
            top: 50%;
            z-index: 1;
        }

        .wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
            color: #555555;
            cursor: default;
            border: 0;
            border-bottom-color: transparent;
        }

        span.round-tab {
            width: 70px;
            height: 70px;
            line-height: 70px;
            display: inline-block;
            border-radius: 100px;
            background: #fff;
            border: 2px solid #e0e0e0;
            z-index: 2;
            position: absolute;
            left: 0;
            text-align: center;
            font-size: 25px;
        }
        span.round-tab i{
            color:#555555;
        }
        .wizard li.active span.round-tab {
            background: #fff;
            border: 2px solid #5bc0de;

        }
        .wizard li.active span.round-tab i{
            color: #5bc0de;
        }

        span.round-tab:hover {
            color: #333;
            border: 2px solid #333;
        }

        .wizard .nav-tabs > li {
            width: 25%;
        }

        .wizard li:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 0;
            margin: 0 auto;
            bottom: 0px;
            border: 5px solid transparent;
            border-bottom-color: #5bc0de;
            transition: 0.1s ease-in-out;
        }

        .wizard li.active:after {
            content: " ";
            position: absolute;
            left: 46%;
            opacity: 1;
            margin: 0 auto;
            bottom: 0px;
            border: 10px solid transparent;
            border-bottom-color: #5bc0de;
        }

        .wizard .nav-tabs > li a {
            width: 70px;
            height: 70px;
            margin: 20px auto;
            border-radius: 100%;
            padding: 0;
        }

        .wizard .nav-tabs > li a:hover {
            background: transparent;
        }

        .wizard .tab-pane {
            position: relative;
            padding-top: 50px;
        }

        .wizard h3 {
            margin-top: 0;
        }

        @media( max-width : 585px ) {

            .wizard {
                width: 90%;
                height: auto !important;
            }

            span.round-tab {
                font-size: 16px;
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard .nav-tabs > li a {
                width: 50px;
                height: 50px;
                line-height: 50px;
            }

            .wizard li.active:after {
                content: " ";
                position: absolute;
                left: 35%;
            }
        }
    </style>


    <div class="container">
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            @if(Session::has('message'))
                                <div class="alert alert-danger text-center">{{ Session::get('message') }}</div>
                            @endif

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Dados Pessoais">
                            <span class="round-tab">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Endereço / Contacto">
                            <span class="round-tab">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Dados Bancários">
                            <span class="round-tab">
                                <i class="fa fa-university" aria-hidden="true"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Visualização Final Para Impressão">
                            <span class="round-tab">
                                <i class="fa fa-print" aria-hidden="true"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <form class="form-horizontal form-material contactForm container" enctype="multipart/form-data" method="post" action="{{route('providers.store')}}">

                        {{ csrf_field() }}
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h2 class="text-center">Identificação</h2>
                                <hr>
                                <div class="col-md-offset-2 col-md-8">

                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label>Nome da Empresa / Pessoa Singulars</label>
                                            <input type="text" class="form-control form-control-line" id="nome_empresa" name="nome_empresa" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Anexar Alvará</label>
                                            <input type="file" class="form-control form-control-line" id="alvara" name="alvara" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label for="nuit">NUIT</label>
                                            <input type="number" class="form-control form-control-line" name="nuit" id="nuit" > </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label for="pessoa_contacto">Pessoa do Contacto</label>
                                            <input type="text" class="form-control form-control-line" name="pessoa_contacto" id="pessoa_contacto" > </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label>Ramo de Actividade</label>
                                            <select name="ramo_atividade" id="ramo_atividade" class="form-control form-control-line" >
                                                <option>Selecione o ramo</option>
                                                @foreach($ramos as $rm)
                                                    <option value="{{$rm->ramo}}">{{$rm->ramo}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>


                                        <ul class="list-inline pull-right">
                                            <li><button type="button" class="btn btn-primary next-step">Próximo</button></li>
                                        </ul>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <h2 class="text-center">Endereço / Contacto</h2>
                                <hr>

                                <div class="col-md-offset-2 col-md-8">

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>País</label>
                                            <select name="pais" id="pais" class="form-control form-control-line" >
                                                <option value="">Selecione o País</option>
                                                @foreach($paises as $rm)
                                                    <option value="{{$rm->name}}">{{$rm->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label>Província</label>
                                            <select name="provincia" id="provincia" class="form-control form-control-line" >
                                                <option value="">Selecione a Província</option>
                                                <option value="Maputo">Maputo</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Cidade</label>
                                            <select name="cidade" id="cidade" class="form-control form-control-line" >
                                                <option value="">Selecione a cidade</option>
                                                @foreach($paises as $rm)
                                                    <option value="{{$rm->name}}">{{$rm->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Bairro</label>
                                            <input type="text" class="form-control form-control-line" name="bairro" > </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-8">
                                            <label>Endereço Físico da Empresa</label>
                                            <input type="text" class="form-control form-control-line" name="endereco_fisico" id="endereco_fisico" >
                                        </div>
                                        <div class="col-md-4">
                                            <label>Número</label>
                                            <input type="number" class="form-control form-control-line" name="end_numero" id="numero" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Telefone Fixo</label>
                                            <input type="number" class="form-control form-control-line" name="telefone_fixo" >
                                        </div>
                                        <div class="col-md-6">
                                            <label>Faxa</label>
                                            <input type="number" class="form-control form-control-line" name="fax" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>Celular</label>
                                            <input type="number" class="form-control form-control-line" name="celular" >
                                        </div>
                                        <div class="col-md-8">
                                            <label>Email</label>
                                            <input type="email" class="form-control form-control-line" name="email" >
                                        </div>
                                    </div>


                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Voltar</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Próximo</button></li>
                                </ul>

                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step3">
                                <h2 class="text-center">Dados Bancários</h2>
                                <hr>

                                <div class="col-md-offset-2 col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Nome do Banco</label>
                                            <input type="text" class="form-control form-control-line" name="nome_banco" > </div>
                                        <div class="col-md-6">
                                            <label>Número da Conta</label>
                                            <input type="number" class="form-control form-control-line" name="numero_conta" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label>NIB</label>
                                            <input type="number" class="form-control form-control-line" name="nib" > </div>
                                        <div class="col-md-8">
                                            <label>Nome da Agência</label>
                                            <input type="text" class="form-control form-control-line" name="nome_agencia" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Bancária (Anexar documento assinado do banco)</label>
                                            <input type="file" class="form-control form-control-line" name="bancaria" required>
                                        </div>
                                    </div>


                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><input id="gravar" type="submit" value="Gravar" class="btn btn-primary btn-info-full"></li>
                                </ul>

                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h3>Complete</h3>
                                <p>You have successfully completed all steps.</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-Token':'{{ csrf_token() }}',
            }
        });

        $('#pais').change(function () {
                var pais = $('#pais').val();
                $.ajax({
                    type:"GET",
                    url: '{{url('/get/provincia')}}',
                    data: {pais: pais},
                    success: function (data) {
                        var html = '<option value="">Selecione a Província</option>';
                        for(var i = 0; i < data.length; i++){
                            html += '<option value="'+ data[i].name +'">'+data[i].name+'</option>';
                        }
                        $('#provincia').html(html).show();
                        console.log(data);

                    }
                })
        });

        $('#provincia').change(function () {
                var prov = $('#provincia').val();
                $.ajax({
                    type:"GET",
                    url: '{{url('/get/cidade')}}',
                    data: {prov: prov},
                    success: function (data) {
                        var html = '<option value="">Selecione a cidade</option>';
                        for(var i = 0; i < data.length; i++){
                            html += '<option value="'+ data[i].name +'">'+data[i].name+'</option>';
                        }
                        $('#cidade').html(html).show();
                        console.log(data);

                    }
                })
        });
    </script>

    <script>
        $('input').click(function () {
            $('.alert').addClass('hidden');
        });

        /*
        $('#gravar').click(function (e) {
            e.preventDefault();
            var  nome_empresa  = $('#nome_empresa').val();
            var  pessoa_contacto  = $('#pessoa_contacto').val();
            var  alvara  = $('#alvara').val();
            var  nuit  = $('#nuit').val();
            var  pais  = $('#pais').val();
            var  provincia  = $('#provincia').val();
            var  cidade  = $('#cidade').val();
            var  bairro  = $('#bairro').val();
            var  endereco_fisico  = $('#endereco_fisico').val();
            var  end_numero  = $('#end_numero').val();
            var  ramo_atividade  = $('#ramo_atividade').val();
            var  telefone_fixo  = $('#telefone_fixo').val();
            var  fax  = $('#fax').val();
            var  celular  = $('#celular').val();
            var  email  = $('#email').val();
            var  nome_banco  = $('#nome_banco').val();
            var  numero_conta  = $('#numero_conta').val();
            var  nib  = $('#nib').val();
            var  nome_agencia  = $('#nome_agencia').val();
            var  bancaria  = $('#bancaria').val();

            var data = {
                nome_empresa:nome_empresa,
                pessoa_contacto:pessoa_contacto,
                alvara:alvara,
                nuit:nuit,
                pais:pais,
                provincia:provincia,
                cidade:cidade,
                bairro:bairro,
                endereco_fisico:endereco_fisico,
                end_numero:end_numero,
                ramo_atividade:ramo_atividade,
                telefone_fixo:telefone_fixo,
                fax:fax,
                celular:celular,
                email:email,
                nome_banco:nome_banco,
                numero_conta:numero_conta,
                nib:nib,
                nome_agencia:nome_agencia,
                bancaria:bancaria,
            };


            var request = $.ajax({
                url: "/provider/sava",
                type: "POST",
                data: data,
                dataType: "html",
                headers: {
                    'X-CSRF-Tok',
                },
            });

            request.done(function (msg) {
                alert('Salvo');

                /** Passa para Proxima etapa
                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

                var response = JSON.parse(msg);
                console.log(response.msg);

            });

            request.fail(function (jqXHR, textStatus) {
                console.log("Erro ao gerar cogido" + textStatus);
            })
        });
         */
    </script>

    <script>
        $(document).ready(function () {
            //Initialize tooltips
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

                var $target = $(e.target);

                if ($target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                $active.next().removeClass('disabled');
                nextTab($active);

            });
            $(".prev-step").click(function (e) {

                var $active = $('.wizard .nav-tabs li.active');
                prevTab($active);

            });
        });

        function nextTab(elem) {
            $(elem).next().find('a[data-toggle="tab"]').click();
        }
        function prevTab(elem) {
            $(elem).prev().find('a[data-toggle="tab"]').click();
        }

    </script>

@endsection()