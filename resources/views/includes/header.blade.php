<div class="container nav">
    <figure>
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/egg-logo.png') }}" alt="EGG logo ">
        </a>
    </figure>
    <ul>
        <li><a href="{{ route('') }}" class="{{ request()->routeIs('') ? 'active' : '' }}">EGGS</a></li>
        <li><a href="{{ route('') }}" class="{{ request()->routeIs('') ? 'active' : '' }}">QUALCOSA</a></li>
    </ul>
</div>
