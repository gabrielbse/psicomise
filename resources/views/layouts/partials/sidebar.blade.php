<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <br>
        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/icon-user.png')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <br>
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
               <!-- <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>-->
            </div>
        </div>
        @endif

        <!-- search form (Optional) -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->
        <br><br>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!--<li class="header">{{ trans('adminlte_lang::message.header') }}</li>-->
            <!-- Optionally, you can add icons to the links -->
            <!--<li class="active"><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>-->
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>INÍCIO</span></a></li>
            <?php /*
              <li><a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
              <li class="treeview">
              <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
              <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
              <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
              </ul>
              </li>
             */ ?> 

            @permission('viewTelaAdministradorDoSistema')

            <li class="treeview">
                <a href="#"><i class="fa fa-cog" data-toggle="dropdown"></i> <span> GERENCIAR </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">          
                    <li><a href="{{ route('users.index') }}"><i class="fa fa-users" aria-hidden="true"></i>Usuários</a></li>
                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-tasks" aria-hidden="true"></i>Papéis</a></li>
                    <li><a href="{{ route('familia.index') }}"><i class="fa fa-sitemap" aria-hidden="true"></i>Família Planta</a></li>
                    <li><a href="{{ route('especie.index') }}"><i class="fa fa-university" aria-hidden="true"></i>Espécie Planta</a></li>
                    <li><a href="{{ route('genero.index') }}"><i class="fa  fa-pagelines" aria-hidden="true"></i>Gênero Planta</a></li>
                    <li><a href="{{ route('animal.index') }}"><i class="fa fa-bug" aria-hidden="true"></i>Animal</a></li>
                    <li><a href="{{ route('grupoExperimento.index') }}"><i class="fa fa-university" aria-hidden="true"></i>Grupo Experimento</a></li>   
                    <li><a href="{{ route('planta.index') }}"><i class="fa fa-tree" aria-hidden="true"></i>Planta</a></li>
                    <li><a href="{{ route('via_administracao.index') }}"><i class="fa fa-eyedropper" aria-hidden="true"></i>Via Adimistração</a></li>
                    <li><a href="{{ route('parte_planta.index') }}"><i class="fa fa-leaf" aria-hidden="true"></i>Parte da Planta</a></li>
                    <li><a href="{{ route('tipo_extrato.index') }}"><i class="fa fa-university" aria-hidden="true"></i>Tipo de Extrato</a></li>
                    <li><a href="{{ route('experimento.index') }}"><i class="fa fa-university" aria-hidden="true"></i>Experimento</a></li>                       
                </ul>
            </li>
             <li class="treeview">
                    <a href="#"><i class="fa fa-cog" data-toggle="dropdown"></i> <span> AVALIAÇÕES </span> <i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu"> 
                         <li><a href="{{ route('avaliacaoTriagemFarmacologica.index') }}"><i class="fa fa-table" aria-hidden="true"></i>ATF</a></li> 
                        <li><a href="{{ route('avaliacaoToxidadeAguda.index') }}"><i class="fa fa-table" aria-hidden="true"></i>ATA</a></li>    
                    </ul>>
              </li>        
            @endpermission

            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
