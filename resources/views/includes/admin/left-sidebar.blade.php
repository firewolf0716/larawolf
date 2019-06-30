
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>

    <li class="{{ (request()->is('admin')) ? 'active' : '' }}">
      <a href="{{ url('admin') }}">
        <i class="icon icon-home"></i> 
        <span>Dashboard</span>
      </a> 
    </li>

    <li class="submenu {{ (request()->segment(2) == 'category') ? 'open' : '' }}"> 
      <a href="#">
        <i class="icon icon-chevron-down"></i>
        <span>{{ __('Categories') }}</span> 
        <span class="label label-important">2</span>
      </a>
      <ul>
        <li class="{{ (request()->is('admin/category/add')) ? 'active' : '' }}">
          <a href="{{url('admin/category/add')}}">Add Category</a>
        </li>
        <li class="{{ (request()->is('admin/category/list')) ? 'active' : '' }}">
          <a href="{{url('admin/category/list')}}">Categories List</a>
        </li>
      </ul>
    </li>

    <li> <a href="{{url('assets/admin/charts.html')}}"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a> </li>
    <li> <a href="{{url('assets/admin/widgets.html')}}"><i class="icon icon-inbox"></i> <span>Widgets</span></a> </li>
    <li><a href="{{url('assets/admin/tables.html')}}"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li><a href="{{url('assets/admin/grid.html')}}"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="{{url('assets/admin/form-common.html')}}">Basic Form</a></li>
        <li><a href="{{url('assets/admin/form-validation.html')}}">Form with Validation</a></li>
        <li><a href="{{url('assets/admin/form-wizard.html')}}">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="{{url('assets/admin/buttons.html')}}"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="{{url('assets/admin/interface.html')}}"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
      <ul>
        <li><a href="{{url('assets/admin/index2.html')}}">Dashboard2</a></li>
        <li><a href="{{url('assets/admin/gallery.html')}}">Gallery</a></li>
        <li><a href="{{url('assets/admin/calendar.html')}}">Calendar</a></li>
        <li><a href="{{url('assets/admin/invoice.html')}}">Invoice</a></li>
        <li><a href="{{url('assets/admin/chat.html')}}">Chat option</a></li>
      </ul>
    </li>
    <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="{{url('assets/admin/error403.html')}}">Error 403</a></li>
        <li><a href="{{url('assets/admin/error404.html')}}">Error 404</a></li>
        <li><a href="{{url('assets/admin/error405.html')}}">Error 405</a></li>
        <li><a href="{{url('assets/admin/error500.html')}}">Error 500</a></li>
      </ul>
    </li>
    <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>
  </ul>
</div>
<!--sidebar-menu-->