<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('dashboard')}}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-edit"></i><span>@lang('models/clients.plural')</span></a>
</li>

<li class="{{ Request::is('packages*') ? 'active' : '' }}">
    <a href="{{ route('packages.index') }}"><i class="fa fa-edit"></i><span>@lang('models/packages.plural')</span></a>
</li>

<li class="{{ Request::is('investments*') ? 'active' : '' }}">
    <a href="{{ route('investments.index') }}"><i class="fa fa-edit"></i><span>@lang('models/investments.plural')</span></a>
</li>

