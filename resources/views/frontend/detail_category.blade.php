@extends('layouts.frontend.app')
@section('front-content')

    <body class="template">
        <div class="area area--over-header">
        </div>

        <div class="area area--sub-header">
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">Halfmycode</a>
                    <a href="/all-categories" target="_self">Categories</a>
                    <span>{{ $category[0]->name }}</span>
                </nav>
            </div>
        </div>
        <main class="area area--main-content">
            <section class='pt--xl pt--md-mobile'>
                <div class='container no-gap-mobile'>
                    <section class='section-content section-content--full'>
                        @foreach ($category as $category)
                            <div class='category-header'>
                                <h1 class='category-header__title mb'>
                                    {{ $category->title }}
                                </h1>
                                <h2 class='category-header__subtitle font-bold mb--sm'>
                                    {{ $category->description }}
                                </h2>
                                <picture class="category-header__image">
                                    {{-- <source srcset="https://cdn.bravo-savings-network.com/cdn2/events/md/mothers-day.webp"
                                    type="image/webp"> --}}
                                    <img class="img-fit-cover" src="{{ asset('images') . '/' . $category->image }}"
                                        type="image/jpg" alt="Mother's Day Gifts" loading="lazy" width="300"
                                        height="160" />
                                </picture>
                            </div>
                        @endforeach
                    </section>
                </div>
            </section>

            <section class="bg-light pt--lg pb--lg mt">
                <div class="container">
                    <section class="section-content section-content--sidebar-left">
                        <div class="section-content__sidebar">
                            <div class="mb--lg">
                                <div class="grid-scroller-mobile-helper">
                                    <div class="grid-3 grid-scroller-mobile pb--xs">
                                        @foreach ($store as $store)
                                            <a href="/store/{{ $store->slug }}" class="merchant-box">
                                                <picture class="merchant-box__logo">
                                                    <img class="merchant-box__logo"
                                                        src="{{ asset('images') . '/' . $store->image }}" type="image/png"
                                                        alt="" loading="lazy" width="90" height="45" />
                                                </picture>
                                                <span class="merchant-box__name break-word">{{ $store->name }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content__page-content">
                            <div class="filter-button-wrapper mb--xs-mobile mb--lg">
                                <div class="filter-button-grid">
                                    <button class="btn filter-button filter-button--active" data-deals-filter-all>
                                        All <span class="filter-button__count">({{ count($coupon) }})</span>
                                    </button>
                                    {{-- <button class="btn filter-button" data-deals-filter-exclusive>
                                        Exclusive <span class="filter-button__count">(9)</span>
                                    </button> --}}
                                    <button class="btn filter-button" data-deals-filter-code>
                                        Discount Codes <span class="filter-button__count">({{ count($coupon->where('Cupon_type', 'getcode')) }})</span>
                                    </button>
                                    <button class="btn filter-button" data-deals-filter-offer>
                                        Deals <span class="filter-button__count">({{ count($coupon->where('Cupon_type', 'getdeal')) }})</span>
                                    </button>
                                </div>
                            </div>
                            <div class="grid-1">
                                @foreach ($coupon as $coupon)
                                    <article class="merchant-deal" data-dropdown data-deal-code id="2864363">
                                        <section class="merchant-deal__body">
                                            <div class="merchant-deal__shoutout">
                                                <strong>15%</strong> discount
                                            </div>
                                            <div class="merchant-deal__content">
                                                <h3 class="merchant-deal__title">
                                                    {{ $coupon->description }}
                                                </h3>
                                                @if ($coupon->Cupon_type == 'getcode')
                                                    <div class="merchant-deal__cta copycodebtn">
                                                        <div class="btn-code btn-code--ribbon" data-code="TR0"
                                                            data-modal-id="#exampleModal{{ $coupon->id }}
                                                    data-popup="L2Rpc2NvdW50LWNvZGUtYWVnLmh0bWwjMjg2NDM2Mw&#x3D;&#x3D;"
                                                            data-out="L2RlYWwvMjg2NDM2My5odG1sP3Q9MTY3NjkxOTA5NjE2NQ&#x3D;&#x3D;"
                                                            data-sku="UK-2864363" data-pos="1" data-lst="merchant">
                                                            <span>GET CODE</span>

                                                        </div>
                                                    </div>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                        Launch demo modal
                                                    </button>
                                                    {{-- <div class="btn button-code copycodebtn">
                                                <a class="btn-label btn-show-code"
                                                    data-modal-id="#exampleModal{{ $copon->id }}"
                                                    data-affilinkite-link="{{ $copon->Affilate_Link }}"
                                                    name="getcode[]" id="{{ $copon->coupon_code }}"
                                                    value="{{ $copon->coupon_code }}">
                                                    SHOW CODE
                                                </a>
                                                <span class="codebx">{{ $copon->coupon_code }}</span>
                                                <input type="hidden" name="{{ $copon->coupon_code }}"
                                                    value="{{ $copon->coupon_code }}">
                                            </div> --}}
                                                @elseif($coupon->Cupon_type == 'getdeal')
                                                    <div class="merchant-deal__cta">
                                                        <div class="btn btn-offer" data-code=""
                                                            data-popup="L2Rpc2NvdW50LWNvZGUtYWVnLmh0bWwjMjU5ODczNg&#x3D;&#x3D;"
                                                            data-out="L2RlYWwvMjU5ODczNi5odG1sP3Q9MTY3NjkxOTA5NjIzOA&#x3D;&#x3D;"
                                                            data-sku="UK-2598736" data-pos="12" data-lst="merchant">
                                                            <span>GET DEAL</span>
                                                        </div>
                                                    </div>
                                                @endif

                                            </div>
                                        </section>

                                        <section class="merchant-deal__footer">
                                            <div class="merchant-deal__footer-left">Used 137 times</div>
                                            <div class="merchant-deal__footer-right">
                                                <div class="deal-expiraton">
                                                    <img class="deal-expiraton__icon"
                                                        src="https://cdn.bravo-savings-network.com/cdn2/icons/clock.svg"
                                                        alt="clock" width="14" height="14" loading="lazy" />
                                                    Always active
                                                </div>
                                                {{-- <div class="pull-right">
                                                <div class="deal-details-toggle"
                                                    data-dropdown-trigger=".deal-details">
                                                    Details
                                                </div>
                                            </div> --}}
                                            </div>
                                        </section>
                                        {{-- <div class="deal-details">
                                        <div class="deal-details__inner">
                                            <ul>
                                                <li>Enjoy a saving of 15% off your order when you add this AEG code at
                                                    checkout!</li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="mt--xxl">
                <div>
                    <section class="section-content section-content--full">
                       
                        <section class="mt--xxl">
                            <div class="container">
                                <section class="section-content section-content--full">
                                    <div class="category-accordion-wrapper">
                                        <div data-accordion>
                                            @foreach ($dropdownCategories as $drop)
                                            <article class="category-accordion" data-dropdown>

                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/food.svg"
                                                        width="32" height="32" alt="Food &amp; Drink"
                                                        class="mr" loading="lazy" />
                                                        {{ $drop->name }}
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            @foreach ($drop->stores as $dropstore)
                                                                <a href="/store/{{ $dropstore->slug }}"
                                                                    class="category-accordion__merchant-box">
                                                                    <picture
                                                                        class="category-accordion__merchant-box__logo img-fluid">
                                                                        {{-- <source
                                                                            srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo@2x.webp 2x"
                                                                            type="image/webp"> --}}
                                                                        <img class="category-accordion__merchant-box__logo img-fluid"
                                                                            src="{{ asset('images/' . $dropstore->image) }}"
                                                                            {{-- srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo@2x.png 2x" --}}
                                                                            type="image/png" alt="Virginia Hayward"
                                                                            loading="lazy" width="90"style="height: 40px;"
                                                                            height="45" />
                                                                    </picture>
                                                                </a>
                                                            @endforeach
                                                        </div>

                                                    </div>
                                                </section>
                                            </article>
                                            @endforeach
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>


                        <section class="mt--xxl">
                            <div class="newsletter-signup-wrapper">
                                <div class="newsletter-signup">
                                    <div class="text-center">
                                        <p class="newsletter-title h2 font-bold mb">
                                            Never run out of deals!
                                        </p>
                                        <p class="newsletter-subtitle font-medium mb pb--sm pt--sm"
                                            for="js-email-subscribe">Subscribe to our newsletter</p>
                                    </div>
                                    <form onsubmit="return false">
                                        <div class="input-btn-group input-btn-group--white mb--sm">
                                            <input type="email" name="email-subscribe" placeholder="Email address"
                                                required="required" id="js-email-subscribe" aria-label="Email address" />
                                            <button type="submit" id="js-newsletter-submit" aria-label="Sign up !"><svg
                                                    width="18" height="16" xmlns="http://www.w3.org/2000/svg">
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
                                            We use a third party provider, MailUp, to deliver our newsletter. We gather
                                            statistics based on email openings and
                                            clicks using industry standard technologies to help us monitor and improve our
                                            newsletter. For more information,
                                            please see our <a href="/privacy-policy" target="_blank">privacy notice</a>.
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                        @include('frontend.recently_update_brand')
                        @include('frontend.footer_icone_stats')
                    </section>
                </div>
            </section>
        </main>
        <script src="/commons.6713daff34af50ea2430.js" async defer></script>
        <script src="/filters.472d47e916953bfb01b6.js" async defer></script>
        <script src="/deal.ecec0443d82340bde583.js" async defer></script>
        <link href="/additional.609e4b424f26855115e1.css" rel="stylesheet" media="print" onload="this.media='all'" />
    </body>

    </html>
@endsection
