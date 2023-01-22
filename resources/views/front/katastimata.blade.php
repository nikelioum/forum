<!doctype html>
<html lang="el">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ελληνικό Forum για το ψαροτούφεκο & το ψάρεμα</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/custom.css">
</head>

<body>

    @include('partials.front.topbar')

    @include('partials.front.main-navbar')

    <main>

        <!--Katastimata-->
        <section class="katastimata pb-4">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 pt-4">
                        <h3 class="main-color">Καταστήματα</h3>
                        <p class="main-color">Βρείτε καταστήματα για το αγαπημένο σας ψάρεμα.</p>
                    </div>
                    <div class="col-md-12">
                        <div class="container-fluid">
                            <div class="row">
                                @foreach($shops as $shop)
                                <!--Shop card-->
                                <div class="col-md-2 mt-3">
                                    <a href="/katastima/{{$shop->slug}}" style="text-decoration: none;">
                                        <div class="shop-card card">
                                            <img src="{{$shop->image}}"
                                                class="card-img-top" alt="{{$shop->name}}">
                                            <div class="card-body">
                                                <h5 class="shop-card-title main-color">{{$shop->name}}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--End of shopcard-->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End of katastimata

    </main>

    @include('partials.front.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
