<!--Topbar-->
<section class="topbar pt-4 pb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="/"><img class="img-fluid" src="/images/logo.png" alt="logo" width="350"
                        height="55"></a>
            </div>
            <div class="col-md-8">
                <div class="float-end pt-4">
                    @guest
                        <button type="button" class="btn main-outline-btn main-color" data-bs-toggle="modal"
                            data-bs-target="#login">
                            ΣΥΝΔΕΣΗ
                        </button>
                        <button type="button" class="btn main-btn second-color" data-bs-toggle="modal"
                            data-bs-target="#register">
                            ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ
                        </button>
                    @endguest
                    @auth
                        <a class="main-color me-2 auth-link" href="/my-account">Ο Λογαριασμός μου</a>
                        <a class="main-color ms-2 auth-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Αποσύνδεση</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</section>
<!--End of topbar-->

<!--Login Modal-->
<div class="modal login-modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title main-color fs-5" id="staticBackdropLabel">Σύνδεση</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label main-color">Διεύθυνση Email</label>
                        <input type="email" class="form-control auth-inputs @error('email') is-invalid @enderror" id="email"
                            name="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Δεν δημοσιεύεται σε τρίτες πηγές</div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label main-color">Κωδικός</label>
                        <input type="password" class="form-control auth-inputs @error('password') is-invalid @enderror"
                            name="password" id="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input auth-inputs" id="exampleCheck1">
                        <label class="form-check-label main-color" for="exampleCheck1">Να με θυμάσαι</label>
                    </div>
                    <button type="submit" class="btn main-btn second-color">ΣΥΝΔΕΣΗ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of login modal -->

<!--Register Modal-->
<div class="modal login-modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title main-color fs-5" id="staticBackdropLabel">Εγγραφή</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label main-color">Διεύθυνση Email</label>
                        <input type="email" class="form-control auth-inputs @error('email') is-invalid @enderror" id="email"
                            name="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Δεν δημοσιεύεται σε τρίτες πηγές</div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label main-color">Username</label>
                        <input type="text" class="form-control auth-inputs @error('name') is-invalid @enderror" id="name"
                            name="name" required>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label main-color">Κωδικός</label>
                        <input type="password" class="form-control auth-inputs @error('password') is-invalid @enderror"
                            id="password" name="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label main-color">Επαλήθευση Κωδικού</label>
                        <input type="password" class="form-control auth-inputs" name="password_confirmation"
                            id="password-confirm" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input auth-inputs" id="exampleCheck1" required>
                        <label class="form-check-label main-color" for="exampleCheck1">Αποδέχομαι τους όρους
                            χρήσης</label>
                    </div>
                    <button type="submit" class="btn main-btn second-color">ΔΗΜΙΟΥΡΓΙΑ ΛΟΓΑΡΙΑΣΜΟΥ</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End of register modal -->
