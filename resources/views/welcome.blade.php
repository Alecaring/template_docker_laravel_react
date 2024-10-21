@extends('layouts.admin')
@section('content')
    <div class="w-100 py-3 d-flex align-items-center justify-content-center mt-4">
        <small class="text-secondary">
            Acquista un Mac o iPad con i prezzi Education. È l’ultima occasione per avere una carta regalo fino a € 140.
            L’offerta termina il 21/10.* <a
                class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover"
                href="#">Acquista
                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor"
                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                </svg>
            </a>
        </small>

    </div>
    <div class=" position-relative">
        <img class="w-100 object-fit-cover" style="height: 85vh;;"
            src="https://www.apple.com/it/home/includes/heroes/ipad-mini/hero_ipad_mini_announce__fx0v6ox8z3u6_medium.jpg"
            alt="">
        <div
            class="position-absolute top-0 start-50 translate-middle-x  h-25 w-50 d-flex align-items-center justify-content-center flex-column mt-5">
            <h2 style="font-size: 3.5rem">iPhone 16 Pro Max</h2>
            <h3 class="fw-light">Non lo compi? <strong>Noleggialo.</strong></h3>
            <p class="fs-4 fw-lighter">disponibile dal 01/01/2025</p>
            <div>
                <button class=" fs-6 btn btn-primary rounded-pill me-1 px-3 py-2">Scopri di piu</button>
                <button class=" fs-6 btn btn-outline-primary rounded-pill ms-1 px-3 py-2">Preordina</button>
            </div>
        </div>
    </div>
    <div class="bg-light position-relative mt-4">
        <img class="w-100 object-fit-cover" style="height: 85vh;;"
            src="https://images.samsung.com/is/image/samsung/assets/it/2407/pfs/01-hd01-Q6-KV-pc-1440x640.jpg?imwidth=1366"
            alt="">
        <div
            class="position-absolute top-50 start-0 translate-middle-y  h-25 w-50 d-flex align-items-center justify-content-center flex-column">
            <h2 style="font-size: 3.5rem">Galaxy Z Fold6</h2>
            <h3 class="fw-light pb-3">Come un PC, ma sempre a portata di mano</h3>
            <div>
                <a class="fs-6 link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover me-4"
                    href="#">
                    scopri di più
                </a>
                <button class=" fs-6 btn btn-primary rounded-pill me-1 px-3 py-2">Acquista o noleggia</button>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-center g-3">
            <div class="col-6">
                <div class="bg-dark">
                    <img class="w-100 object-fit-cover" style="height: 55vh;" src="https://www.apple.com/v/home/bt/images/promos/apple-watch-series-10/promo_apple_watch_series_10_avail_lte__c70y29goir42_large.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark">
                    <img class="w-100 object-fit-cover" style="height: 55vh;" src="https://www.apple.com/v/home/bt/images/promos/airpods-4/promo_airpods_4_avail__bl22kvpg6ez6_large.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark">
                    <img class="w-100 object-fit-cover" style="height: 55vh;" src="https://www.apple.com/v/home/bt/images/promos/macbook-air-m3/promo_macbook_air_m3__e43jegok3wuq_large.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark">
                    <img class="w-100 object-fit-cover" style="height: 55vh;" src="https://www.apple.com/v/home/bt/images/promos/ipad-pro/promo_ipadpro__ch217v9v7no2_large.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark">
                    <img class="w-100 object-fit-cover" style="height: 55vh;" src="https://www.apple.com/it/home/includes/promos/apple-watch-ultra-2/promo_apple_watch_ultra2_avail__dyawbjw9cowi_large.jpg" alt="">
                </div>
            </div>
            <div class="col-6">
                <div class="bg-dark">
                    <img class="w-100 object-fit-cover" style="height: 55vh;" src="https://www.apple.com/v/home/bt/images/promos/iphone-tradein/promo_iphone_tradein__bugw15ka691e_large.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    
@endsection
