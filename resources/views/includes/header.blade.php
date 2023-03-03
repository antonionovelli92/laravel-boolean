<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/egg-logo.png') }}" alt="EGG logo " width="80" height="80"
                class="d-inline-block align-text-top">
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li>
                    <a href="{{ route('eggs.index') }}"
                        class="{{ request()->routeIs('eggs.index') ? 'active' : '' }} text-white mx-3">EGGS</a>
                </li>
                <li>
                    <a href="{{ route('contacts') }}"
                        class="{{ request()->routeIs('contacts') ? 'active' : '' }} text-white mx-3">CONTACTS</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="{{ request()->routeIs('about') ? 'active' : '' }} text-white mx-3">ABOUT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
