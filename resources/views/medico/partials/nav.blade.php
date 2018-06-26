<ul class="sidebar-menu">
  <li class="header">Navegación</li>
  <!-- Optionally, you can add icons to the links -->
  <li {{request()->is('medico') ? 'class=active' : ''}}>
    <a href="{{route('medico.dashboard')}}">
      <i class="fa fa-home"></i>
      <span>Inicio</span>
    </a>
  </li>
  <li {{request()->is('medico') ? 'class=active' : ''}}>
    <a href="{{route('medico.agenda.index',auth()->user())}}">
      <i class="fa fa-book"></i>
      <span>Agenda</span>
    </a>
  </li>
  <li {{request()->is('medico') ? 'class=active' : ''}}>
    <a href="{{route('medico.planificacion.index',auth()->user())}}">
      <i class="fa fa-book"></i>
      <span>Consultar Planificación</span>
    </a>
  </li>
  <li {{request()->is('medico') ? 'class=active' : ''}}>
      <a href="{{route('medico.quirofanos.index')}}">
        <i class="fa fa-plus-square"></i>
        <span>Quirófanos</span>
      </a>
    </li>
  <li class="treeview {{request()->is('medico/historias*') ? 'active' : ''}}">
    <a href="#">
      <i class="fa fa-file-text-o"></i>
      <span>Historias Médicas</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li {{request()->is('medico/historias') ? 'class=active' : ''}}>
        <a href="{{route('medico.historias.index')}}">
          <i class="fa fa-eye"> Ver todas las historias médicas</i>
        </a>
      </li>
      
    </ul>
  </li>
</ul>