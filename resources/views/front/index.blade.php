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

    <!--Welcome message -->
    <section class="welcome-message pt-2 pb-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center second-color">
                    <span>Καλώς ήρθατε στην ομάδα μας. Εδώ θα βρείτε όλα τα θέματα που σας ενδιαφέρουν με θέμα το ψάρεμα
                        !</span>
                </div>
            </div>
        </div>
    </section>
    <!--End of welcome message-->

    <main>

        <!--Forum-->
        <section class="forum">
            <div class="container-fluid">
                <div class="row">
                    <!--Forum categories-->
                    <div class="col-md-9">
                        <div class="row pt-4 pb-4">
                            <div class="col-md-12">
                                <h3 class="main-color">Forum</h3>
                            </div>
                            <div class="col-md-12">
                                <!--Main category forum-->
                                <div class="container-fluid main-category-forum card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-cat main-color">Ειδήσεις</div>
                                            <!--Subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                        </div>
                                    </div>
                                </div>
                                <!--End of main category forum-->
                                <!--Main category forum-->
                                <div class="container-fluid main-category-forum card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-cat main-color">Ειδήσεις</div>
                                            <!--Subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                        </div>
                                    </div>
                                </div>
                                <!--End of main category forum-->
                                <!--Main category forum-->
                                <div class="container-fluid main-category-forum card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="main-cat main-color">Ειδήσεις</div>
                                            <!--Subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                            <!--Subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                            <!--Subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                            <div class="sub-cats main-color pt-3">
                                                <div class="sub-cat">
                                                    <div class="row">
                                                        <div class="col-md-1">
                                                            <img class="img-fluid pt-2" src="/images/cat-icon.png">
                                                        </div>
                                                        <div class="col-md-7">
                                                            <h4 class="sub-cat-title">Hardware Γενικά</h4>
                                                            <p class="sub-cat-desc">Οι ειδήσεις της κεντρικής σελίδας με όλα τα σχόλια από την κοινότητα του Insomnia</p>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Θέματα</div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="cat-metric third-color">1500 <br>Δημοσιεύσεις</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <!--End of subcategories-->
                                        </div>
                                    </div>
                                </div>
                                <!--End of main category forum-->
                            </div>
                        </div>
                    </div>
                    <!--End of forum categories-->
                    <!--Forum sidepanel-->
                    <div class="col-md-3">
                        @include('partials.front.statistics')
                    </div>
                    <!--End of sidepanel-->
                </div>
            </div>
        </section>
        <!--End of forum-->

    </main>

    @include('partials.front.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
