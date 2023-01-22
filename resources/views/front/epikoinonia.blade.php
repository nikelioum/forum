<!doctype html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ελληνικό Forum για το ψαροτούφεκο & το ψάρεμα</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/custom.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body>

    @include('partials.front.topbar')

    @include('partials.front.main-navbar')

    <main>

        <!--Epikoinonia-->
        <section class="epikoinonia pb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pt-4">
                        <h3 class="main-color">Επικοινωνία</h3>
                        <p class="main-color">Αφήστε το μήνυμα σας και θα έρθουμε σε επαφή μαζί σας εντός 2 ημερών.</p>
                    </div>
                    <div class="col-md-12">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control auth-inputs" id="inputEmail4">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress" class="form-label">Όνομα</label>
                                <input type="text" class="form-control auth-inputs" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="col-12 pt-3" style="margin-bottom: 100px;">
                                <label for="inputAddress" class="form-label">Το μήνυμα σας</label>
                                <p style="font-size: 12px;">Αυτό το μήνυμα θα σταλεί σαν απλό κείμενο, δεν περιλαμβάνει οποιοδήποτε HTML ή BBCode. Η διεύθυνση επιστροφής για αυτό το μήνυμα θα τεθεί η διεύθυνση ηλεκτρονικού ταχυδρομείου σας.
                                </p>
                                <div class="auth-inputs" id="editor"></div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="mt-5 btn main-btn second-color">ΑΠΟΣΤΟΛΗ</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    @include('partials.front.footer')

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
