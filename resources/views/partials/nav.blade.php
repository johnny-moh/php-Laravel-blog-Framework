<header>
    <img id="logo" src="{{ $logo }}">
    <h1 id="motto">{{ $name }}</h1>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
        </ul>
        <span id="greet">Welcome, {{session('user')? session('user'): 'Guest'}}!</span>
    </nav>
</header>
