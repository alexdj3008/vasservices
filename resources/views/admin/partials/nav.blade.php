<ul class="sidebar-menu">
    <li class="header">Navegación</li>
    <!-- Optionally, you can add icons to the links -->
<li {{request()->is('admin') ? 'class=active' : ''}}><a href="{{route('dashboard')}}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
<li {{request()->is('admin') ? 'class=active' : ''}}><a href="{{route('admin.planificar.index')}}"><i class="fa fa-pencil"></i> <span>Planificación de cirugías</span></a></li>    
    <li class="treeview {{request()->is('admin/clinicas*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-hospital-o"></i> <span>Clínicas</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/clinicas') ? 'class=active' : ''}}><a href="{{route('admin.clinicas.index')}}"><i class="fa fa-eye"> Ver todas las clínicas</i></a></li>
        <li {{request()->is('admin/clinicas/create') ? 'class=active' : ''}}><a href="{{route('admin.clinicas.create')}}"><i class="fa fa-pencil"> Añadir una clínica</i></a></li>
      </ul>
    </li>

    <li class="treeview {{request()->is('admin/quirofanos*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-plus-square"></i> <span>Quirófanos</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/quirofanos') ? 'class=active' : ''}}><a href="{{route('admin.quirofanos.index')}}"><i class="fa fa-eye"> Ver todos los quirófanos</i></a></li>
        <li {{request()->is('admin/quirofanos/create') ? 'class=active' : ''}}><a href="{{route('admin.quirofanos.create')}}"><i class="fa fa-pencil"> Añadir quirófano</i></a></li>
      </ul>
    </li>
    <li class="treeview {{request()->is('admin/tiposcirugias*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-medkit"></i> <span>Tipos de cirugías</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/tiposcirugias') ? 'class=active' : ''}}><a href="{{route('admin.tipocirugia.index')}}"><i class="fa fa-eye"> Ver todos los tipos de cirugía</i></a></li>
        <li {{request()->is('admin/tiposcirugias/create') ? 'class=active' : ''}}><a href="{{route('admin.tipocirugia.create')}}"><i class="fa fa-pencil"> Añadir Tipo de cirugía</i></a></li>
      </ul>
    </li>

    <li class="treeview {{request()->is('admin/cirujanos*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-stethoscope"></i> <span>Médico cirujano</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/cirujanos') ? 'class=active' : ''}}><a href="{{route('admin.cirujanos.index')}}"><i class="fa fa-eye"> Ver todos los Médicos</i></a></li>
        <li {{request()->is('admin/cirujanos/create') ? 'class=active' : ''}}><a href="{{route('admin.cirujanos.create')}}"><i class="fa fa-pencil"> Añadir Médico cirujano</i></a></li>
      </ul>
    </li>

    <li class="treeview {{request()->is('admin/pacientes*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-users"></i> <span>Pacientes</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/pacientes') ? 'class=active' : ''}}><a href="{{route('admin.pacientes.index')}}"><i class="fa fa-eye"> Ver todoss los pacientes</i></a></li>
        
      </ul>
    </li>


    <li class="treeview {{request()->is('admin/servicios*') ? 'active' : ''}}">
      <a href="#"><i class="fa fa-bars"></i> <span>Servicios adicionales</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li {{request()->is('admin/servicios') ? 'class=active' : ''}}><a href="{{route('admin.servicios.index')}}"><i class="fa fa-eye"> Ver todos los servicios</i></a></li>
        <li {{request()->is('admin/servicios/create') ? 'class=active' : ''}}><a href="{{route('admin.servicios.create')}}"><i class="fa fa-pencil"> Añadir servicio</i></a></li>
      </ul>
    </li>
  </ul>