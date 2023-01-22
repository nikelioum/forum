<!--Satistic-->
<div class="" style="margin-top: 40px;">
    @auth
        <div class="forum-statistic pt-4 pb-2">
            <div class="card sidepanel-card pt-3 pb-3">
                <div class="sidepanel-title main-color ps-3">Καλώς ήρθες {{ auth()->user()->name }}</div>
                <hr>
                <div class="sidepanel-text main-color ps-3">Συνολικές δημοσιεύσεις: 1200</div>
                <div class="sidepanel-text main-color ps-3">Συνολικά θέματα: 1200</div>
                <div class="sidepanel-text main-color pt-3 ps-3"><a class="auth-link third-color" href="/my-account">Μετάβαση
                        στο προφίλ</a></div>
            </div>
        </div>
    @endauth
    <div class="forum-statistic pt-4 pb-2">
        <div class="card sidepanel-card pt-3 pb-3">
            <div class="sidepanel-title main-color ps-3">Στατιστικά φόρουμ</div>
            <hr>
            <div class="sidepanel-text main-color ps-3">Συνολικές κατηγορίες: {{$count_categories}}</div>
            <div class="sidepanel-text main-color ps-3">Συνολικά θέματα: 1200</div>
            <div class="sidepanel-text main-color ps-3">Σύνολο χρηστών: {{$count_users}}</div>
        </div>
    </div>
    <div class="forum-statistic pt-4 pb-2">
        <div class="card sidepanel-card pt-3 pb-3">
            <div class="sidepanel-title main-color ps-3">Πρόσφατα Καταστήματα</div>
            <hr>
            @foreach ($latest_shops as $latest_shop)
                <a href="/katastima/{{$latest_shop->slug}}" style="text-decoration: none;">
                <div class="card shop-card-index pt-2 pb-2 ms-3 me-3 mb-2">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-fluid ps-3" width="150" height="150" src="{{ $latest_shop->image }}" alt="{{$latest_shop->name}}">
                        </div>
                        <div class="col-md-8">
                            <div class="main-color ps-3">{{ $latest_shop->name }}<br>
                            πριν από {{ $latest_shop->created_at->locale('el')->diffForHumans() }}</div>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="forum-statistic pt-4 pb-2">
        <div class="card sidepanel-card pt-3 pb-3">
            <div class="sidepanel-title main-color ps-3">Νέοι χρήστες</div>
            <hr>
            @foreach($latest_users as $latest_user)
            <div class="sidepanel-text main-color ps-3"><a class="third-color" href="/" style="text-decoration: none;">{{$latest_user->name}} πριν από {{ $latest_user->created_at->locale('el')->diffForHumans() }}</a></div>
            @endforeach
        </div>
    </div>
</div>
<!--End of satistic-->
