<header>
    <nav class="menu">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('product.index') }}">Products</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('post.index') }}">Posts</a></li>
            <li><a href="{{ route('note.index') }}">Notas</a></li>
        </ul>
    </nav>
</header>

<style>
    header {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: grey;
    }

    .menu {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: aliceblue;
    }

    .menu ul {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fit,
                minmax(100px,
                    1fr));
        gap: 1rem;
        padding: 0px 15px 0px 15px;
    }

    .menu li {
        width: 100px;
        margin: auto;
        display: flex;
        flex-direction: column;
        gap: 1rem;
        box-shadow: 0 0 10px 10px rgba(0, 0, 0, .1);
        border-radius: 4px;
        background: #4459a7;
        color: #fff;
        padding: 1rem;
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
