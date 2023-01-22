<!--Navbar-->
<section class="main-navbar">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link main-color @if (Request::is('/')) {{'active'}} @endif" aria-current="page" href="/">FORUM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-color @if (Request::is('reviews')) {{'active'}} @endif" href="/reviews">REVIEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-color @if (Request::is('aggelies')) {{'active'}} @endif" href="/aggelies">ΑΓΓΕΛΙΕΣ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-color @if (Request::is('katastimata')) {{'active'}} @endif" href="/katastimata">ΚΑΤΑΣΤΗΜΑΤΑ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
<!--End of navbar-->

