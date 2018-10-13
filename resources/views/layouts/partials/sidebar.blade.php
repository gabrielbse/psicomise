<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <ul class="sidebar-menu">
            
            <li class="active"><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>INÍCIO</span></a></li>

            @permission('viewTelaAdministradorDoSistema')

            <li class="treeview">
                <a href="#"><i class="fa fa-cog"></i> <span> GERENCIAR </span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"> 
                    <li class="treeview"><a href="#"><i class="fa fa-users"></i>Sistema<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>    
                        <ul class="treeview-menu">
                            <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span>Usuários</span></a></li>
                            <li><a href="{{ route('roles.index') }}"><i class="fa fa-tasks"></i><span>Papéis</span></a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-users"></i>Plantas<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('especie.index') }}"><i class="fa fa-university"></i><span>Espécie Planta</span></a></li>
                            <li><a href="{{ route('genero.index') }}"><i class="fa  fa-pagelines"></i><span>Gênero Planta</span></a></li>
                            <li><a href="{{ route('familia.index') }}"><i class="fa fa-sitemap"></i><span>Família Planta</span></a></li>                               
                            <li><a href="{{ route('planta.index') }}"><i class="fa fa-tree"></i><span>Planta</span></a></li>
                        </ul>
                    </li>
                    <li class="treeview"><a href="#"><i class="fa fa-users"></i>Animais<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('animal.index') }}"><i class="fa fa-bug"></i><span>Animal</span></a></li>
                            <li><a href="{{ route('grupoExperimento.index') }}"><i class="fa fa-university"></i><span>Grupo Experimento</span></a></li>
                        </ul>
                    </li>                   
                    <li class="treeview"><a href="#"><i class="fa fa-users"></i>Extratos<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('via_administracao.index') }}"><i class="fa fa-eyedropper"></i><span>Via Adimistração</span></a></li>
                            <li><a href="{{ route('parte_planta.index') }}"><i class="fa fa-leaf"></i><span>Parte da Planta</span></a></li>
                            <li><a href="{{ route('tipo_extrato.index') }}"><i class="fa fa-university"></i><span>Tipo de Extrato</span></a></li>
                        </ul>
                    </li>                    
                    <li><a href="{{ route('experimento.index') }}"><i class="fa fa-university"></i><span>Experimento</span></a></li>                       
                </ul>
            </li>
             <li class="treeview">
                    <a href="#"><i class="fa fa-cog" data-toggle="dropdown"></i> <span> AVALIAÇÕES </span> <i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu"> 
                         <li><a href="{{ route('avaliacaoTriagemFarmacologica.index') }}"><i class="fa fa-table"></i>ATF</a></li> 
                        <li><a href="{{ route('avaliacaoToxidadeAguda.index') }}"><i class="fa fa-table"></i>ATA</a></li>    
                    </ul>>
              </li>        
            @endpermission

            
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
