@extends('layouts.frontend.app')
@section('front-content')
        <div class='area area--sub-header'>
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">Halfmycode</a>
                    <span>Brands A-Z</span>
                </nav>
            </div>
        </div>
        <main class='area area--main-content'>
            <section class="mt">
                <div class="container">
                    <section class="section-content section-content--full">
                        <div>
                            <div class="alphabet-merchant-row__letter">All Stores</div>
                            <div class="alphabet-merchant-row__grid">
                                @foreach ($store as $store)
                                <a href="/store/{{ $store->slug }}" class="merchant-box">
                                    <picture class="merchant-box__logo">
                                        <img class="merchant-box__logo" src="{{ asset('images') . '/' . $store->image }}"
                                            type="image/png" alt="" width="150" height="75" style="height: 150px;"
                                            />
                                    </picture>
                                    <span class="merchant-box__name">
                                        <strong class="font-bold">{{ $store->name }}</strong>

                                    </span>
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            @include('frontend.recently_update_brand')
            <section class="mt--xxl">
                <div class="newsletter-signup-wrapper">
                    <div class="newsletter-signup">
                        <div class="text-center">
                            <p class="newsletter-title h2 font-bold mb">
                                Never run out of deals!
                            </p>
                            <p class="newsletter-subtitle font-medium mb pb--sm pt--sm" for="js-email-subscribe">
                                Subscribe to our newsletter</p>
                        </div>
                        <form onsubmit="return false">
                            <div class="input-btn-group input-btn-group--white mb--sm">
                                <input type="email" name="email-subscribe" placeholder="Email address" required="required"
                                    id="js-email-subscribe" aria-label="Email address" />
                                <button type="submit" id="js-newsletter-submit" aria-label="Sign up !"><svg width="18"
                                        height="16" xmlns="http://www.w3.org/2000/svg">
                                        <defs />
                                        <g fill="currentColor" fill-rule="nonzero">
                                            <path
                                                d="M6 12v3.443a.557.557 0 00.553.557c.173 0 .34-.082.446-.227L9 13.032 6 12zM17.764.097a.597.597 0 00-.587-.037L.302 8.285a.52.52 0 00-.3.505c.017.21.166.39.378.457l4.692 1.497 9.99-7.973-7.73 8.693 7.861 2.508a.596.596 0 00.474-.048.527.527 0 00.264-.371L17.994.603a.511.511 0 00-.23-.506z" />
                                        </g>
                                    </svg>
                                </button>
                            </div>
                            <div id="recaptcha" style="display:none"></div>
                            <div class="newsletter-signup__privacy">
                                We use a third party provider, MailUp, to deliver our newsletter. We gather statistics based
                                on email openings and
                                clicks using industry standard technologies to help us monitor and improve our newsletter.
                                For more information,
                                please see our <a href="/privacy-policy" target="_blank">privacy notice</a>.
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            @include('frontend.footer_icone_stats')
        </main>
@endsection
