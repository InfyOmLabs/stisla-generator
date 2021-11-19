<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>@lang('models/clients.plural')</span></a>
</li>

