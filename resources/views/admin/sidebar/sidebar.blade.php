<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li style="padding: 10px 0 0;">
                <a href="{{route('home')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i><span class="hide-menu">Painel</span></a>
            </li>
            <li>
                <a href="{{route('gerar-codigo.index')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Gerar Código</span></a>
            </li>

            <li>
                <a href="{{route('viewsProviders')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Providers</span></a>
            </li>


            <li data-toggle="collapse" data-target="#param" class="collapsed waves-effect">
                <a href="#"><i class="fa fa-plus fa-fw"></i> Parametrização <span class="arrow"></span></a>
            </li>
            <ul class="sub-menu collapse" id="param">
                <li>
                    <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i><span class="hide-menu">Ramo de Atividade</span></a>
                </li>
                <li>
                    <a href="{{route('users.index')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i><span class="hide-menu">Usuario</span></a>
                </li>
            </ul>

        </ul>
    </div>
</div>
<!-- Left navbar-header end -->