<div class="nav_menu">
  <div class="nav toggle">
    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
  </div>
  <nav class="nav navbar-nav">
    <ul class=" navbar-right">

      <li class="nav-item dropdown open" style="padding-left: 15px;">
        
        <a href="{{ route('logout') }}"> <i class="fa fa-eye"></i>&nbsp;Log Out</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

      </li>

      <li class="nav-item dropdown open" style="padding-left: 15px;">
        <a href="{{ url('/')}}" target="_blank"> <i class="fa fa-power-off"></i>&nbsp;Visit Site</a>
      </li>
      
    </ul>
  </nav>
</div>