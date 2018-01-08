
@extends('layouts.pag')
@section('content')
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700">
    <style>
        body {
            background-color:#F7F7F7;
            font-family: 'Open Sans', sans-serif;
            margin-top: 20px;
        }



        a:hover { text-decoration:none; }
        /*.post { border-bottom:1px solid #DDD }*/
        .post-title { color:#222; }
        /*.post-header-line { border-top:1px solid #DDD; border-bottom:1px solid #DDD;}*/
        .post-content { border-top:1px solid #DDD; padding-bottom: 15px;padding-top: 15px;}


        /*Content Container*/
        .content-container {
            background-color:#fff;
            /*padding:35px 20px;*/
            /*margin-bottom:20px;*/
        }

        /*mail list*/
        ul.mail-list{
            padding:0;
            margin:0;
            list-style:none;
            /*margin-top:30px;*/
        }
        ul.mail-list li a{
            display:block;
            border-bottom:1px dotted #CFCFCF;
            padding:20px;
            text-decoration:none;
        }
        ul.mail-list li:last-child a{
            border-bottom:none;
        }
        ul.mail-list li a:hover{
            background-color:#DBF9FF;
        }
        ul.mail-list li span{
            display:block;
        }
        ul.mail-list li span.sub-heading{
            margin-bottom:7px;
            font-weight:600;
            color: #666;
        }
        ul.mail-list li span.subtopic_description{
            display:block;
            color:#888;
        }
        /****************************/
        .searchable-container{margin:20px 0 0 0}
        .searchable-container label.btn-default{width:90%;border:1px solid #efefef;margin:5px; box-shadow:5px 8px 8px 0 #ccc;}
        .searchable-container label .bizcontent{width:100%;}
        .searchable-container .btn-group{width:90%}

        h5>a{
            color: #444;
            margin-bottom: 5px;
            width: 100%;

            display:block;
            border-bottom:1px dotted #CFCFCF;
            padding:8px;
            text-decoration:none;
        }
        h5>a:hover{
            border-bottom:1px solid #222;
        }
        /****************************/
        .linha{
            padding-bottom: 70px;
        }

        #sideBar{
            width: 150px;
            padding: 10px;
            background: #efefef;
            position: absolute;
            top: 70px;
            right: 20px;
            z-index: 1;

            border:1px solid #efefef;margin:5px; box-shadow:5px 8px 8px 0 #ccc;
        }
        #sideBar>h5>a{
            text-decoration: none;
        }
    </style>

    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="">
                <h4 class="post-title text-center"><strong><b><span style="color: #73a534">PSI Moz</span> | <span style="color: #f57f17">Procurement</span></b></strong></h4>
            </div>

            <div class="row post-content">
                <div class="content-container clearfix">
                    <div class="col-md-12">

                        <ul class="mail-list">
                            <li>
                                <h4 class="post-title">Dados Pessoais</h4>
                                <a class="col-md-12">
                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">Nome da Empresa / Pessoa Singulars</span>
                                            <span class="subtopic_description">{{$prov->nome_empresa}}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">NUIT</span>
                                            <span class="subtopic_description">{{$prov->nuit }}</span>
                                        </div>
                                    </div>

                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">Pessoa do Contacto</span>
                                            <span class="subtopic_description">{{$prov->pessoa_contacto }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Ramo de Actividade</span>
                                            <span class="subtopic_description">{{$prov->ramo_atividade }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <h4 class="post-title">Endereço / Contacto</h4>
                                <a class="col-md-12">
                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">Endereço Físico da Empresa</span>
                                            <span class="subtopic_description">{{$prov->endereco_fisico }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Número</span>
                                            <span class="subtopic_description">{{$prov->end_umero }}</span>
                                        </div>
                                    </div>

                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">País</span>
                                            <span class="subtopic_description">{{$prov->pais }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Província</span>
                                            <span class="subtopic_description">{{$prov->provincia }}</span>
                                        </div>
                                    </div>

                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">Cidade</span>
                                            <span class="subtopic_description">{{$prov->cidade }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Bairro</span>
                                            <span class="subtopic_description">{{$prov->bairro }}</span>
                                        </div>
                                    </div>

                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">Telefone Fixo</span>
                                            <span class="subtopic_description">{{$prov->telefone_fixo }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Fax</span>
                                            <span class="subtopic_description">{{$prov->fax }}</span>
                                        </div>
                                    </div>

                                    <div>
                                        <div class="col-md-7">
                                            <span class="sub-heading">Celular</span>
                                            <span class="subtopic_description">{{$prov->celular }}</span>
                                        </div>
                                        <div class="linha">
                                            <div class="col-md-5">
                                                <span class="sub-heading">Email</span>
                                                <span class="subtopic_description">{{$prov->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <h4 class="post-title">Dados Bancarios</h4>
                                <a class="col-md-12">
                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">Nome do Banco</span>
                                            <span class="subtopic_description">{{$prov->nome_banco }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Número da Conta</span>
                                            <span class="subtopic_description">{{$prov->numero_conta }}</span>
                                        </div>
                                    </div>
                                    <div class="linha">
                                        <div class="col-md-7">
                                            <span class="sub-heading">NIB</span>
                                            <span class="subtopic_description">{{$prov->nib }}</span>
                                        </div>
                                        <div class="col-md-5">
                                            <span class="sub-heading">Nome da Agência</span>
                                            <span class="subtopic_description">{{$prov->nome_agencia }}</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <style>

    </style>

        <div class="row" id="sideBar">
            <h5><a href="#">Baixar</a></h5>
            <h5><a href="{{$prov->alvara }}" target="_blank">Alvara</a></h5>
            <h5><a href="{{$prov->bancaria }}" target="_blank">Bancária</a></h5>
        </div>

    <script>

    </script>

@endsection()