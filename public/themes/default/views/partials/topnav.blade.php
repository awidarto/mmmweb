    <ul class="nav navbar-nav">
        <li class="dropdown dropdown-light {{ sa('mymumomu') }}">
            <a href="{{ URL::to('mymumomu')}}" class="dropdown-toggle">My MuMoMu</a>
        </li>
        <li class="dropdown dropdown-light {{ sa('store') }}">
            <a href="{{ URL::to('store')}}" class="dropdown-toggle">Store</a>
        </li>
        <li class="dropdown dropdown-light {{ sa('settings') }}">
            <a href="{{ URL::to('settings')}}" class="dropdown-toggle">Settings</a>
        </li>
        <li class="dropdown dropdown-light {{ sa('settings') }}">
            <a href="{{ URL::to('seller')}}" class="dropdown-toggle">Seller</a>
        </li>
    </ul>
