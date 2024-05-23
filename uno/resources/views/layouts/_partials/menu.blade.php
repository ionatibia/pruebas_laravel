<header>
    <nav class="menu">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<style>
    .menu {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: grey;
    }

    .menu ul {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        gap: 20rem;
        padding-inline-start: 0px;
    }

    .menu li {
        display: flex;
        flex-direction: row;
        box-shadow: 0 0 10px 10px rgba(0, 0, 0, .1);
        border-radius: 4px;
        background: #555454;
        padding: 1rem;
        width: 5%;
        justify-content: center;
        align-items: center;
    }

    .menu a {
        color: #fff;
        font-size: 20px;
    }

    .menu a:link {
        text-decoration: none;
    }

    .menu a:visited {
        text-decoration: none;
    }

    .menu a:hover {
        text-decoration: none;
    }

    .menu a:active {
        text-decoration: none;
    }
</style>
