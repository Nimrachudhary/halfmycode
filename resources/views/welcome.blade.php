@extends('layouts.frontend.app')
@section('front-content')
    <main class="area area--main-content">
        <section class="bg-light">
            <div class="premium-offer-wrapper">
                <div class="text-center">
                    <h4 class="mb--xs mt--xs" id="heading-1">Save on your shopping with our best discount codes and deals!
                    </h4>
                    <h4>Discover promo codes and offers from top online brands and enjoy huge savings with Halfmycode
                    </h4>
                </div>

            </div>
            <div class="container no-gap-mobile fluid-tablet hidden-mobile hidden-tablet">
                <section class="section-content section-content--full">
                    <div id="slider-premium-body" class="premium-offer-wrapper">
                        <div class="premium-offer-grid pt--lg mb-lg pb--lg pl pr">
                            <!-- BOX -->
                            @foreach ($coupons as $coupon)
                                <article id="boxPremiumOffer_4238" class="premium-offer"
                                    data-href="/store/{{ $coupon->store->slug }}" data-pos="1"
                                    data-lst="home-premium-offers" data-id="4238"
                                    data-title="QmxhY2sgRnJpZGF5IGV2ZW50IGF0IFlvdXJzIENsb3RoaW5nOiBFeGNsdXNpdmUgZGlzY291bnQgY29kZSBmb3IgZXh0cmEgMTElIG9mZiAtIFlvdXJzIENsb3RoaW5n">
                                    <div class="premium-offer__media">
                                        <picture class="img-fit-cover">
                                            <img class="img-fit-cover" src="{{ asset('images') . '/' . $coupon->image }}"
                                                type="image/jpeg" width="300" height="250" />
                                        </picture>
                                    </div>
                                    <div class="premium-offer__body">
                                        <div class="grid-2">
                                            <label class="premium-offer__merchant">{{ $coupon->store->name }}</label>
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__logo">
                                                <picture class="img-fit-center">
                                                    <img class="img-fit-center"
                                                        src="{{ asset('images') . '/' . $coupon->store->image }}"
                                                        type="image/png" width="90" height="45" />
                                                </picture>
                                            </a>
                                        </div>
                                        <p>
                                            {!! Str::limit($coupon->description, 30) !!}
                                        </p>
                                        <div class="premium-offer__footer">
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__link">
                                                @if ($coupon->Cupon_type == 'getcode')
                                                    <span>Get Code</span>
                                                @elseif($coupon->Cupon_type == 'getdeal')
                                                    <span>Get Deal</span>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                            <!-- BOX -->
                        </div>
                    </div>
                </section>
            </div>
            <div class="container no-gap-mobile fluid-tablet hidden-desktop">
                <section class="section-content section-content--full">
                    <div id="slider-premium-body" class="premium-offer-wrapper">
                        <div class="premium-offer-grid pt--lg mb-lg pb--lg pl pr">
                            <!-- BOX  header-->
                            @foreach ($coupons as $coupon)
                                <article id="boxPremiumOffer_4238" class="premium-offer"
                                    data-href="/store/{{ $coupon->store->slug }}" data-pos="1"
                                    data-lst="home-premium-offers" data-id="4238"
                                    data-title="QmxhY2sgRnJpZGF5IGV2ZW50IGF0IFlvdXJzIENsb3RoaW5nOiBFeGNsdXNpdmUgZGlzY291bnQgY29kZSBmb3IgZXh0cmEgMTElIG9mZiAtIFlvdXJzIENsb3RoaW5n">
                                    <div class="premium-offer__media">
                                        <picture class="img-fit-cover">
                                            <img class="img-fit-cover" src="{{ asset('images') . '/' . $coupon->image }}"
                                                type="image/jpeg" width="300" height="250" />
                                        </picture>
                                    </div>
                                    <div class="premium-offer__body">
                                        <div class="grid-2">
                                            <label class="premium-offer__merchant">{{ $coupon->store->name }}</label>
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__logo">
                                                <picture class="img-fit-center">
                                                    <img class="img-fit-center"
                                                        src="{{ asset('images') . '/' . $coupon->store->image }}"
                                                        type="image/png" width="90" height="45" />
                                                </picture>
                                            </a>
                                        </div>
                                        <p>
                                            {!! Str::limit($coupon->description, 30) !!}
                                        </p>
                                        <div class="premium-offer__footer">
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__link">
                                                @if ($coupon->Cupon_type == 'getcode')
                                                    <span>Get Code</span>
                                                @elseif($coupon->Cupon_type == 'getdeal')
                                                    <span>Get Deal</span>
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                            <!-- BOX -->
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="">
            <!-- Deals of the week DESKTOP -->
            <div class="container weekly-deal-fixed-container no-gap-mobile fluid-tablet hidden-mobile hidden-tablet">
                <section class="section-content section-content--full">
                    <div id="slider-weekly-body" class="has-bg">
                        <p class="h1 text-center weekly-deal-title">Deals of the week</p>
                        <div class="grid-3 grid-scroller-mobile pt--xl pl pr pl--lg-mobile pb--md-mobile">
                            @foreach ($weeks as $value)
                                @php
                                    $arr = [];
                                    $arr[] = $coupon->image;
                                @endphp
                                @if ($value->deal_week == 1)
                                    <article id="boxWeeklyDealArticle_4261"
                                        class="weekly-deal"data-href='/store/{{ $value->store->slug }}' data-pos="1"
                                        data-lst="home-weekly-deals"
                                        data-id="4261"data-title="R3JhYiB0aGlzIE1hcnJpb3R0IGRpc2NvdW50IGNvZGUgZm9yIDI1JSBvZmYgeW91ciBzdGF5IGluIEV1cm9wZSAtIE1hcnJpb3R0">
                                        <div class="weekly-deal__header">
                                            <picture>
                                                <img src="{{ asset('images') . '/' . $value->image }}" type="image/jpeg" />
                                            </picture>
                                        </div>
                                        <div class="weekly-deal__content">
                                            <div class="grid-2">
                                                <a href="/store/{{ $value->store->slug }}" class="weekly-deal__logo"
                                                    title="">
                                                    <picture class="">
                                                        <img class=""
                                                            src="{{ asset('images') . '/' . $value->store->image }}"
                                                            type="image/png" width="90" height="45" />
                                                    </picture>
                                                </a>
                                                <label class="weekly-deal__title">
                                                    <a
                                                        href="/store/{{ $value->store->slug }}">{{ $value->store->name }}</a>
                                                </label>
                                            </div>
                                            <div class="weekly-deal__description">
                                                {{ $value->description }}
                                            </div>
                                        </div>
                                    </article>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>

            <div class="container no-gap-mobile fluid-tablet hidden-desktop">
                <section class="section-content section-content--full">
                    <div id="slider-premium-body" class="premium-offer-wrapper">
                        <p class="h1 text-center weekly-deal-title">Deals of the week</p>
                        <div class="premium-offer-grid pt--lg mb-lg pb--lg pl pr">
                            <!-- BOX -->
                            @foreach ($weeks as $value)
                                @if ($value->deal_week == 1)
                                    <article id="boxWeeklyDealArticle_4261" class="weekly-deal"
                                        data-href='/store/{{ $value->store->slug }}' data-pos="1"
                                        data-lst="home-weekly-deals" data-id="4261"
                                        data-title="R3JhYiB0aGlzIE1hcnJpb3R0IGRpc2NvdW50IGNvZGUgZm9yIDI1JSBvZmYgeW91ciBzdGF5IGluIEV1cm9wZSAtIE1hcnJpb3R0">
                                        <div class="weekly-deal__header">
                                            <picture>

                                                <img src="{{ asset('images') . '/' . $value->image }}"
                                                    type="image/jpeg" />
                                            </picture>
                                        </div>
                                        <div class="weekly-deal__content">
                                            <div class="grid-2">
                                                <a href="/store/{{ $value->store->slug }}" class="weekly-deal__logo"
                                                    title="">
                                                    <picture class="">
                                                        <img class=""
                                                            src="{{ asset('images') . '/' . $coupon->store->image }}"
                                                            type="image/png" width="90" height="45" />
                                                    </picture>
                                                </a>
                                                <label class="weekly-deal__title">
                                                    <a
                                                        href="/store/{{ $value->store->slug }}">{{ $value->store->name }}</a>
                                                </label>
                                            </div>
                                            <div class="weekly-deal__description">
                                                {{ $value->description }}
                                            </div>
                                        </div>
                                    </article>
                                @endif
                            @endforeach
                            <!-- BOX -->
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- HOME TOP DEALS -->
        <section class="bg-light mt--xxl">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="mixed-deal-wrapper mixed-deal-wrapper--home pb--xxl">
                        <p class="h1 text-center">Top Vouchers</p>
                        <div class="grid-1 grid-2-md grid-align-top">
                            <!-- DEAL WITH LOGO CODE ACTIVE -->
                            @foreach ($showcoupon as $coupon)
                                <article class="mixed-deal mixed-deal--exclusive" data-exclusive-label="Exclusive"
                                    data-dropdown data-deal-exclusive data-deal-code>
                                    <div class="mixed-deal__header">
                                        <div class="mixed-deal__logo">
                                            <picture class="img-fit-center">
                                                <img class="img-responsive"
                                                    src="{{ asset('images/' . $coupon->store_image) }}" type="image/png"
                                                    width="150" height="75" />
                                            </picture>
                                        </div>
                                        <div class="mixed-deal__content">
                                            <p class="mixed-deal__title" style="margin: 10px;">
                                                {{ $coupon->coupon_title }}
                                            </p>
                                            <div>
                                                <div>
                                                    @if ($coupon->Cupon_type == 'getcode')
                                                        <div class="merchant-deal__cta copycodebtn"
                                                            style="height: 55px; width: 269px;">
                                                            <a class="btn-code btn-code--ribbon btn-show-code"
                                                                style="margin-left: 36px;"
                                                                data-code="{{ $coupon->coupon_code }}"
                                                                data-modal-id="#exampleModal{{ $coupon->id }}"
                                                                name="getcode[]" id="{{ $coupon->coupon_code }}"
                                                                value="{{ $coupon->coupon_code }}"
                                                                data-affilinkite-link="{{ $coupon->Affilate_Link }}"
                                                                data-popup="L2Rpc2NvdW50LWNvZGUtYWVnLmh0bWwjMjg2NDM2Mw&#x3D;&#x3D;"
                                                                data-out="L2RlYWwvMjg2NDM2My5odG1sP3Q9MTY3NjkxOTA5NjE2NQ&#x3D;&#x3D;"
                                                                data-sku="UK-2864363" data-pos="1" data-lst="merchant">
                                                                <span style="font-weight: 400;">GET CODE</span>
                                                            </a>
                                                        </div>
                                                    @elseif($coupon->Cupon_type == 'getdeal')
                                                        <div class="merchant-deal__cta"
                                                            style="height: 55px; width: 235px;">
                                                            <a class="btn btn-offer" href="{{ $coupon->Affilate_Link }}"
                                                                target="_blank" style="margin-left: 36px;"
                                                                data-modal-id="#exampleModal{{ $coupon->id }}"
                                                                data-sku="UK-2864363" data-pos="1" data-lst="merchant">
                                                                <span>GET DEAL</span>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mixed-deal__footer">
                                        <div class="deal-expiraton">
                                            <img class="deal-expiraton__icon"
                                                src="https://cdn.bravo-savings-network.com/cdn2/icons/clock.svg"
                                                alt="clock" width="14" height="14" />
                                            Expires on {{ date('d-m-Y', strtotime($coupon->expiry_date)) }}
                                        </div>
                                    </div>
                                </article> <!-- DEAL WITH LOGO CODE ACTIVE -->
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="mt--xxl">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="category-accordion-wrapper">
                        <div data-accordion>
                            @foreach ($dropdownCategories as $drop)
                                <article class="category-accordion" data-dropdown>
                                    <button class="category-accordion__title"
                                        data-dropdown-trigger=".category-accordion__content">
                                        <img src="{{ asset('logo/' . $drop->logo) }}" width="32" height="32"
                                            alt="Food &amp; Drink" class="mr" />
                                        {{ $drop->name }}
                                    </button>
                                    <section class="category-accordion__content">
                                        <div class="category-accordion__content-inner">
                                            <div class="category-accordion__merchants">
                                                @foreach ($drop->stores as $dropstore)
                                                    <a href="/store/{{ $dropstore->slug }}"
                                                        class="category-accordion__merchant-box">
                                                        <picture class="category-accordion__merchant-box__logo img-fluid">
                                                            <img class="category-accordion__merchant-box__logo img-fluid"
                                                                src="{{ asset('images/' . $dropstore->image) }}"
                                                                type="image/png" width="90" style="height: 40px;"
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
        {{-- Special events start --}}
        {{-- <section class="mt--xxl">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="category-accordion-wrapper">
                        <p class="h1 mb">Special events</p>
                        <div class="grid-1 grid-3-md">
                            @foreach ($special_events as $event)
                                <a href="/specials/{{ $event->slug }}" class="latest-event">
                                    <picture class="latest-event__image">
                                        <img class="img-fit-cover" src="{{ asset('images') . '/' . $event->image }}"
                                            type="image/jpg"  width="300"
                                            height="160" />
                                    </picture> <span class="latest-event__name">{{ $event->name }}</span>
                                    <span class="latest-event__bar"></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section> --}}
        {{-- Special events end --}}
        <!-- START -->
        <section class="mt--xxl overflow-hidden">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="latest-blog-wrapper latest-blog-wrapper--home">
                        <h2 class="h3 mb--lg">The latest from our blog</h2>
                        <div class="latest-blog-grid">
                            @foreach ($blogs as $blogs)
                                <a href="/blog/{{ $blogs->slug }}" class="latest-blog">
                                    <div class="latest-blog__media">
                                        <picture class="img-fluid">
                                            <img class="img-fluid" src="{{ asset('images') . '/' . $blogs->image }}"
                                                type="image/jpeg" width="750" height="300" />
                                        </picture>
                                    </div>
                                    <div class="latest-blog__content">
                                        <label class="latest-blog__title"> {{ $blogs->name }}</label>
                                        <div class="latest-blog__footer">
                                            <div class="laster-blog__date"> {{ date('d-m-Y', strtotime($blogs->date)) }}
                                            </div>
                                            <div class="laster-blog__icon"><svg width="18" height="16"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs />
                                                    <path
                                                        d="M18 7.995L10.52 0v4.77H8.93C3.998 4.77 0 8.666 0 13.472V16l.706-.754c2.402-2.565 5.8-4.027 9.363-4.027h.45v4.77L18 7.995z"
                                                        fill="currentColor" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <div class="open-blog-page">
                                <p class="mb">Looking for ideas and advice on your online purchases?</p>
                                <a href="/blogs" class="btn btn-brand min-width">Head to our Blog</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <!-- END -->
        @include('frontend.recently_update_brand')
        <section class="">
            <div class="container">
                <section class="section-content section-content--full">
                    <h3 class="h3 mb--xxs">The Best USA Promo Codes – Buy More for Less at HALFMYCODE</h3>
                    <p>HALFMYCODE.com is an online shopping platform for consumers who are looking to save on their
                        online purchases.
                        We at HALFMYCODE provide shoppers with thousands of <strong>discount codes, vouchers</strong>
                        and online deals
                        that have been
                        <strong>tested and verified manually</strong> by our dedicated team.
                        Our mission is to offer products from your favourite brands at competitive prices with great
                        discounts. We transform
                        your shopping experience, making it both
                        <strong>safe</strong> and <strong>convenient</strong>, constantly updating our list of voucher
                        codes and offers so
                        you can just relax and enjoy browsing from the comfort of your home. You can be calm in the
                        knowledge that we’ve
                        found the best deals so you can spend your hard earned cash wisely!
                        We are the fundamental link between brand networks and millions of online shoppers, just like
                        you.
                        At HALFMYCODE, we are very careful about the brands we’ve selected: only the <strong>most
                            popular and trending
                            shops in the USA</strong> and the ones with the biggest discounts can be part of our
                        partnership network. They
                        need to respect both the transparency of deals as well as our customers. You’ll find a huge
                        range of brands to
                        purchase from including those for beauty, fashion (both men’s and women’s clothing included),
                        food, drink, toys,
                        jewellery, gift cards, mobile phone companies and many more! This is just a taste of our
                        fantastic collection.
                        Helping you save money safely and easily every day is what we do best.
                        We guarantee that all the discounts you’ll find on HALFMYCODE.com are working and ready to
                        get you saving on
                        your order today!
                    </p>
                    <h3>How come HALFMYCODE has the best deals?</h3>
                    <p>The voucher codes on our site are <strong>hand-picked and tested by our team</strong>, so you can
                        be sure they are
                        valid and verified. Our dedicated team checks the offers online and tests the codes daily, so
                        that when you come to
                        use them, you won’t have any problems. Thanks to some great deals with your favourite brands, we
                        are able to offer
                        <strong>exclusive discount codes and special offers</strong> that you won’t find elsewhere.
                    </p>
                    <p>At HALFMYCODE, you can find the best offers for special events.</p>

                    <h3>How to use our promo codes?</h3>
                    <p>HALFMYCODE selects the best online deals and discount codes available for you. All you have to
                        do is pick a store,
                        click on an offer button or on the promo code you have chosen and you will be redirected to the
                        official online shop
                        of the brand. Right before filling up the payment form, you will find the coupon box in your
                        basket. Just paste the
                        promo code you’ve found on the HALFMYCODE site, apply it and you will immediately see the
                        price drop. Saving on
                        all your online purchases has never been this simple!
                    </p>
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
                            please see our
                            {{-- <a href="/privacy-policy" target="_blank">privacy notice</a>. --}}
                        </div>
                    </form>
                </div>
            </div>
        </section>
        @include('frontend.footer_icone_stats')
    </main>
@endsection

