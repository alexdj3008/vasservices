<ul class="sidebar-menu">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
<li {{request()->is('admin') ? 'class=active' : ''}}><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
<li {{request()->is('admin') ? 'class=active' : ''}}><a href="{{route('dashboard')}}"><i class="fa fa-book"></i> <span>Agenda</span></a></li>    
    <li class="treeview {{request()->is('admin/clinicas*') ? 'active' : ''}}">
      <a href="#"><i class="fas fa-hospital"></i> <span>Historias Médicas</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/clinicas') ? 'class=active' : ''}}><a href="{{route('admin.clinicas.index')}}"><i class="fa fa-eye"> Ver todas las historias médicas</i></a></li>
        <li {{request()->is('admin/clinicas/create') ? 'class=active' : ''}}><a href="{{route('admin.clinicas.create')}}"><i class="fa fa-pencil"> Crear Historia médica</i></a></li>
      </ul>
    </li>
  </ul>