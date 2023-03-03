<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/egg-logo.png') }}" alt="EGG logo " width="80" height="80"
                class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li>
                    <a href="{{ route('eggs.index') }}"
                        class="{{ request()->routeIs('eggs.index') ? 'active' : '' }}">EGGS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
