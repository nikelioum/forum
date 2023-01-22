<!doctype html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ελληνικό Forum για το ψαροτούφεκο & το ψάρεμα</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/custom.css">
    <!-- TinyMCE CDN -->
    <script src="https://cdn.tiny.cloud/1/hafs2fm1sm3qx7t1p2lnhncfw01fvcbt1rqdo7xch3sw9a7h/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body>

    @include('partials.front.topbar')

    @include('partials.front.main-navbar')

    <main>

        <section class="my-profile pt-3 pb-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        @if (is_null($myaccount->profile_image))
                            <img src="https://via.placeholder.com/250C/O https://placeholder.com/" alt="{{ $myaccount->user->name }}">
                        @else
                            <img src="{{ $myaccount->profile_image }}" alt="{{ $myaccount->user->name }}">
                        @endif
                    </div>
                    <div class="col-md-8">
                        @if (session()->has('message'))
                            <!--Success Alert-->
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session()->get('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            <!--End of Success Alert-->
                        @endif
                        <!--Account Profile Menu -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-profile" data-bs-toggle="pill"
                                    data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                    aria-selected="true">Πληροφορίες Προφίλ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#profile-edit" type="button" role="tab"
                                    aria-controls="pills-profilefedit" aria-selected="false">Επεξεργασία Προφίλ</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-account-edit" data-bs-toggle="pill"
                                    data-bs-target="#account-edit" type="button" role="tab"
                                    aria-controls="pills-accountedit" aria-selected="false">Επεξεργασία
                                    Λογαριασμού</button>
                            </li>
                        </ul>
                        <!--End of account profile menu-->
                        <!--Profile info-->
                        <div class="tab-content" id="pills-tabContent">
                            <!--Profile details-->
                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="profile-info main-color">Ημ/νία Δημιουργίας Προφίλ:
                                    {{ $myaccount->user->created_at->format('d-m-Y') }}</div>
                                <div class="profile-info main-color">Username: {{ $myaccount->user->name }}</div>
                                <div class="profile-info main-color">Email: {{ $myaccount->user->email }}</div>
                                <div class="profile-info main-color">Όνομα: {{ $myaccount->firstname }}</div>
                                <div class="profile-info main-color">Επίθετο: {{ $myaccount->lastname }}</div>
                                <div class="profile-info main-color">Facebook: {{ $myaccount->facebook }}</div>
                                <div class="profile-info main-color">Instagram: {{ $myaccount->instagram }}</div>
                                <div class="profile-info main-color">Ιστοσελίδα: {{ $myaccount->personal_website }}
                                </div>
                                <div class="profile-info main-color">Υπογραφή: {!! $myaccount->signature !!}</div>
                            </div>
                            <!--End of profile details-->
                            <!--Profile edit form-->
                            <div class="tab-pane fade" id="profile-edit" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <form method="POST" action="/submit-profile-edit">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Όνομα</label>
                                        <input type="text" class="form-control" name="firstname" id="firstname"
                                            value="{{ $myaccount->firstname }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="lastname" class="form-label">Επίθετο</label>
                                        <input type="text" class="form-control" name="lastname" id="lastname"
                                            value="{{ $myaccount->lastname }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook"
                                            value="{{ $myaccount->facebook }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="instagram"
                                            value="{{ $myaccount->instagram }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="website" class="form-label">Ιστοσελίδα</label>
                                        <input type="text" class="form-control" name="website" id="website"
                                            value="{{ $myaccount->personal_website }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="signature" class="form-label">Υπογραφή</label>
                                        <textarea class="form-control" name="signature" id="signature" value="{{ $myaccount->signature }}" rows="3">{{ $myaccount->signature }}</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">ΕΠΕΞΕΡΓΑΣΙΑ</button>
                                </form>
                            </div>
                            <!--End of profile edit form-->
                            <!--Account edit-->
                            <div class="tab-pane fade" id="account-edit" role="tabpanel"
                                aria-labelledby="pills-account-edit" tabindex="0">
                                <form method="POST" action="/submit-account-edit">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                            value="{{ $myaccount->user->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="firstname" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            value="{{ $myaccount->user->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Αλλαγή κωδικού</label>
                                        <p>Εισάγεται νέο κωδικό μόνο αν θέλετε να τον αλλάξετε</p>
                                        <input type="password" class="form-control" name="password" id="password"
                                            value="">
                                    </div>
                                    <button type="submit" class="btn btn-primary">ΕΠΕΞΕΡΓΑΣΙΑ</button>
                                </form>
                            </div>
                            <!--End of account edit-->
                        </div>
                        <!--End of profile info-->

                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('partials.front.footer')

    <script>
        tinymce.init({
            selector: '#signature',
            skin: 'bootstrap',
            plugins: 'lists, link, image, media',
            toolbar: 'h1 h2 bold italic strikethrough blockquote bullist numlist backcolor | removeformat help',
            menubar: false,
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
