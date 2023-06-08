@extends('layouts.frontend.app')
@section('front-content')
    <main class="area area--main-content">
        <section class="bg-light">
            <div class="premium-offer-wrapper">
                <div class="text-center">
                    <h4 class="mb--xs mt--xs">Save on your shopping with our best discount codes and deals!</h4>
                    <h5>Discover promo codes and offers from top online brands and enjoy huge savings with Halfmycode
                    </h5>
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
                                                type="image/jpeg" alt="Yours Clothing" loading="lazy" width="300"
                                                height="250" />
                                        </picture>
                                    </div>
                                    <div class="premium-offer__body">
                                        <div class="grid-2">
                                            <label class="premium-offer__merchant">{{ $coupon->store->name }}</label>
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__logo">
                                                <picture class="img-fit-center">
                                                    <img class="img-fit-center"
                                                        src="{{ asset('images') . '/' . $coupon->store->image }}"
                                                        type="image/png" alt="Yours Clothing" loading="lazy" width="90"
                                                        height="45" />
                                                </picture>
                                            </a>
                                        </div>
                                        <p>
                                            {{ $coupon->description }}
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
                    {{-- look at in end --}}
                    <script>
                        if (typeof(promo1) == 'undefined') {
                            promo1 = []
                        }
                        promo1.push({
                            'id': 'UK-4238',
                            'position': '1',
                            'name': 'UK - Black Friday event at Yours Clothing: Exclusive discount code for extra 11% off - Yours Clothing',
                            'creative': 'home-premium-offers',
                        })
                        promo1.push({
                            'id': 'UK-4239',
                            'position': '2',
                            'name': 'UK - Grab 13% off with our EXCLUSIVE Dormeo discount code - Dormeo',
                            'creative': 'home-premium-offers',
                        })
                        promo1.push({
                            'id': 'UK-4241',
                            'position': '3',
                            'name': 'UK - Black Friday Offer! Get up to 50% off Selected styles with Clarks! - Clarks',
                            'creative': 'home-premium-offers',
                        })
                        promo1.push({
                            'id': 'UK-4225',
                            'position': '4',
                            'name': 'UK - Score up to 50% off stickers with a Redbubble discount - Redbubble',
                            'creative': 'home-premium-offers',
                        })
                        promo1.push({
                            'id': 'UK-4243',
                            'position': '5',
                            'name': 'UK - Lovehoney Black Friday: score up to 60% off! - Lovehoney',
                            'creative': 'home-premium-offers',
                        })
                        promo1.push({
                            'id': 'UK-4189',
                            'position': '6',
                            'name': 'UK - Save 10% off your order thanks to this Spa Breaks discount code - Spabreaks.com',
                            'creative': 'home-premium-offers',
                        })
                        promo1.push({
                            'id': 'UK-4188',
                            'position': '7',
                            'name': 'UK - Grab 50% off with this Skillshare discount code - Skillshare',
                            'creative': 'home-premium-offers',
                        })
                    </script>
                    {{-- end --}}
                </section>
            </div>
            <div class="container no-gap-mobile fluid-tablet hidden-desktop">
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
                                                srcset="https://cdn.bravo-savings-network.com/cdn2/box/md/black-friday-event-clothing-exclusive-discount-code-extra-11-off-202211124349@2x.jpg 2x"
                                                type="image/jpeg" alt="Yours Clothing" loading="lazy" width="300"
                                                height="250" />
                                        </picture>
                                    </div>
                                    <div class="premium-offer__body">
                                        <div class="grid-2">
                                            <label class="premium-offer__merchant">{{ $coupon->store->name }}</label>
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__logo">
                                                <picture class="img-fit-center">
                                                    {{-- <source
                                                    srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo@2x.webp 2x"
                                                    type="image/webp"> --}}
                                                    <img class="img-fit-center"
                                                        src="{{ asset('images') . '/' . $coupon->store->image }}"
                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo@2x.png 2x"
                                                        type="image/png" alt="Yours Clothing" loading="lazy" width="90"
                                                        height="45" />
                                                </picture>
                                            </a>
                                        </div>
                                        <p>
                                            {{ $coupon->description }}
                                        </p>

                                        <div class="premium-offer__footer">
                                            <a href="/store/{{ $coupon->store->slug }}" class="premium-offer__link">
                                                {{ $coupon->Cupon_type }}</a>
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

        <section class="mt--xxl">
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
                                                <img src="{{ asset('images') . '/' . $value->image }}" type="image/jpeg"
                                                    alt="Marriott" loading="lazy" />
                                            </picture>
                                        </div>
                                        <div class="weekly-deal__content">
                                            <div class="grid-2">
                                                <a href="/store/{{ $value->store->slug }}" class="weekly-deal__logo"
                                                    title="">
                                                    <picture class="">
                                                        <img class=""
                                                            src="{{ asset('images') . '/' . $value->store->image }}"
                                                            type="image/png" alt="Marriott" loading="lazy"
                                                            width="90" height="45" />
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
                    {{-- <script>
                        if (typeof(promo1) == 'undefined') {
                            promo1 = []
                        }
                        promo1.push({
                            'id': 'UK-4261',
                            'position': '1',
                            'name': 'UK - Grab this Marriott discount code for 25% off your stay in Europe - Marriott',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4259',
                            'position': '2',
                            'name': 'UK - Get up to 50% off with this offer from Swift Direct Blinds - Swift Direct Blinds',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4257',
                            'position': '3',
                            'name': 'UK - Black Friday Beauty Pie discount code for 50% off on first order+ free delivery - Beauty Pie',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4256',
                            'position': '4',
                            'name': 'UK - Black Friday Levi&#x27;s discounts of up to 50% off Sitewide - Levi&#x27;s',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4253',
                            'position': '5',
                            'name': 'UK - The Perfume Shop Black Friday sale: up to 50% off - The Perfume Shop',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4231',
                            'position': '6',
                            'name': 'UK - Get 25% off local dining experiences: Groupon coupon code. - Groupon',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4230',
                            'position': '7',
                            'name': 'UK - Receive a FREE GRAZIA SILVER Limited edition beauty box - GlossyBox',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4227',
                            'position': '8',
                            'name': 'UK - Nab a rainy day deal at Cotton Traders: discounts of up to 50% on waterproofs - Cotton Traders',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4226',
                            'position': '9',
                            'name': 'UK - Use this Boden discount code to save £25 on full-price items + free delivery - Boden',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4215',
                            'position': '10',
                            'name': 'UK - 30% discount on the &quot;Black November&quot; products: Peter Hahn discount code - Peter Hahn',
                            'creative': 'home-weekly-deals',
                        })
                        promo1.push({
                            'id': 'UK-4262',
                            'position': '11',
                            'name': 'UK - Score 10% off on all 1st UK orders thanks to this Vivino discount code! - Vivino',
                            'creative': 'home-weekly-deals',
                        })
                    </script> --}}
                </section>
            </div>
            {{-- end --}}
            <!-- Deals of the week mob -->
            {{-- <div class="container no-gap-mobile fluid-tablet hidden-desktop">
                <section class="section-content section-content--full">
                    <div id="slider-weekly-body" class="has-bg">
                        <p class="h1 text-center weekly-deal-title">Deals of the week</p>
                        <div class="grid-3 grid-scroller-mobile pt--xl pl pr pl--lg-mobile pb--md-mobile">
                            @foreach ($weeks as $value)
                                @if ($value->deal_week == 1)
                                    <article id="boxWeeklyDealArticle_4261" class="weekly-deal"
                                        data-href='/discount-code-marriott-bonvoy.html' data-pos="1"
                                        data-lst="home-weekly-deals" data-id="4261"
                                        data-title="R3JhYiB0aGlzIE1hcnJpb3R0IGRpc2NvdW50IGNvZGUgZm9yIDI1JSBvZmYgeW91ciBzdGF5IGluIEV1cm9wZSAtIE1hcnJpb3R0">
                                        <div class="weekly-deal__header">
                                            <picture>

                                                <img src="{{ asset('images') . '/' . $coupon->image }}"
                                                    type="image/jpeg" alt="Marriott"
                                                    loading="lazy" />
                                            </picture>
                                        </div>
                                        <div class="weekly-deal__content">
                                            <div class="grid-2">
                                                <a href="/discount-code-marriott-bonvoy.html" class="weekly-deal__logo"
                                                    title="">
                                                    <picture class="">
                                                        <source
                                                            srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/marriott-bonvoy-20220211091551-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/marriott-bonvoy-20220211091551-logo@2x.webp 2x"
                                                            type="image/webp">
                                                        <img class=""
                                                            src="{{ asset('images') . '/' . $coupon->store->image }}"
                                                            srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/marriott-bonvoy-20220211091551-logo@2x.png 2x"
                                                            type="image/png" alt="Marriott" loading="lazy"
                                                            width="90" height="45" />

                                                    </picture>
                                                </a>
                                                <label class="weekly-deal__title">
                                                    <a
                                                        href="/discount-code-marriott-bonvoy.html">{{ $value->store->name }}</a>
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
            </div> --}}
            <div class="container no-gap-mobile fluid-tablet hidden-desktop">
                <section class="section-content section-content--full">
                    <div id="slider-premium-body" class="premium-offer-wrapper">
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

                                                <img src="{{ asset('images') . '/' . $value->image }}" type="image/jpeg"
                                                    alt="Marriott" loading="lazy" />
                                            </picture>
                                        </div>
                                        <div class="weekly-deal__content">
                                            <div class="grid-2">
                                                <a href="/store/{{ $value->store->slug }}" class="weekly-deal__logo"
                                                    title="">
                                                    <picture class="">

                                                        <img class=""
                                                            src="{{ asset('images') . '/' . $coupon->store->image }}"

                                                            type="image/png" alt="Marriott" loading="lazy"
                                                            width="90" height="45" />

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
                    <div class="mixed-deal-wrapper mixed-deal-wrapper--home pt--xxl pb--xxl">
                        <div class="grid-1 grid-2-md grid-align-top">
                            <!-- DEAL WITH LOGO CODE ACTIVE -->
                            @foreach ($showcoupon as $coupon)
                            <article class="mixed-deal mixed-deal--exclusive" data-exclusive-label="Exclusive"
                                data-dropdown data-deal-exclusive data-deal-code>
                                <div class="mixed-deal__header">
                                    <div class="mixed-deal__logo">
                                        <picture class="img-fit-center">
                                            <img class="img-fit-center"
                                                src="{{ asset('images/' . $coupon->store_image) }}"
                                                type="image/png" alt="Warrior" width="150" height="75"
                                                loading="lazy" />
                                        </picture>
                                    </div>
                                    <div class="mixed-deal__content">
                                        <p class="mixed-deal__title">
                                            {{ $coupon->coupon_title }}
                                        </p>
                                        <div>
                                            <div>
                                                    @if ($coupon->Cupon_type == 'getcode')
                                                    <div class="merchant-deal__cta copycodebtn">
                                                        <a class="btn-code btn-code--ribbon btn-show-code"
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
                                                    <div class="merchant-deal__cta">
                                                        <a class="btn btn-offer" href="{{ $coupon->Affilate_Link }}"
                                                            target="_blank"
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
                                            alt="clock" width="14" height="14" loading="lazy" />
                                        Expires on   {{ date('d-m-Y', strtotime($coupon->expiry_date)) }}
                                    </div>
                                </div>
                            </article> <!-- DEAL WITH LOGO CODE ACTIVE -->
@endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>
        {{-- look at in the end --}}
        <script>
            if (typeof(eeI) == 'undefined') {
                eeI = {
                    'event': 'impressions',
                    'ecommerce': {
                        'impressions': [{
                                'country': 'UK',
                                'name': `UK-2641264 - EXCLUSIVE Warrior discount code: 25% off sitewide - Warrior`,
                                'id': 'UK-2641264',
                                'price': '1',
                                'brand': `UK - Warrior`,
                                'variant': 'coupon exclusive',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '25',
                                'list': 'home',
                                'position': '1'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2670446 - EXCLUSIVE Sephora discount code: 20% off full-price Items - Sephora`,
                                'id': 'UK-2670446',
                                'price': '1',
                                'brand': `UK - Sephora`,
                                'variant': 'coupon exclusive',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '20',
                                'list': 'home',
                                'position': '2'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2752162 - Up to 85% off Black Friday sale+ extra 15% off: exclusive SHEIN discount code - SHEIN`,
                                'id': 'UK-2752162',
                                'price': '1',
                                'brand': `UK - SHEIN`,
                                'variant': 'coupon exclusive',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '85',
                                'list': 'home',
                                'position': '3'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2616062 - Get 10% off bookings with our EXCLUSIVE Spa Breaks discount code - Spabreaks.com`,
                                'id': 'UK-2616062',
                                'price': '1',
                                'brand': `UK - Spabreaks.com`,
                                'variant': 'coupon exclusive',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '10',
                                'list': 'home',
                                'position': '4'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2742703 - Use our exclusive Brown Bag Clothing discount code for 15% off on your order - Brown Bag Clothing`,
                                'id': 'UK-2742703',
                                'price': '1',
                                'brand': `UK - Brown Bag Clothing`,
                                'variant': 'coupon exclusive',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '15',
                                'list': 'home',
                                'position': '5'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2681742 - Get this EXCLUSIVE Bodybuilding Warehouse discount with code for 15% off! - Bodybuilding Warehouse`,
                                'id': 'UK-2681742',
                                'price': '1',
                                'brand': `UK - Bodybuilding Warehouse`,
                                'variant': 'coupon exclusive',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '15',
                                'list': 'home',
                                'position': '6'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-1965972 - 11% off with this Forthglade discount code - Forthglade`,
                                'id': 'UK-1965972',
                                'price': '1',
                                'brand': `UK - Forthglade`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '11',
                                'list': 'home',
                                'position': '7'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2708282 - Enjoy up to £400 on the Oral-B iO series toothbrushes - Oral-B`,
                                'id': 'UK-2708282',
                                'price': '1',
                                'brand': `UK - Oral-B`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'value',
                                'dimension7': '400',
                                'list': 'home',
                                'position': '8'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2760414 - Black Friday offer at Charles Tyrwhitt: up to 50% off. 4 shirts or polos for £109 - Charles Tyrwhitt`,
                                'id': 'UK-2760414',
                                'price': '1',
                                'brand': `UK - Charles Tyrwhitt`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '50',
                                'list': 'home',
                                'position': '9'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2645814 - Grab 30% off + free shipping in this Black Friday Routledge offer - Routledge`,
                                'id': 'UK-2645814',
                                'price': '1',
                                'brand': `UK - Routledge`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '30',
                                'list': 'home',
                                'position': '10'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2442385 - Compact cameras from £79 - top picks on MPB offers - MPB`,
                                'id': 'UK-2442385',
                                'price': '1',
                                'brand': `UK - MPB`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'none',
                                'dimension7': '0',
                                'list': 'home',
                                'position': '11'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2760403 - Black Friday offer: Score an extra 5% off with this Proviz discount code - Proviz`,
                                'id': 'UK-2760403',
                                'price': '1',
                                'brand': `UK - Proviz`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '5',
                                'list': 'home',
                                'position': '12'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2739135 - Princess Polly discount code: Black Friday Early Access - 30% Off Sitewide - Princess Polly`,
                                'id': 'UK-2739135',
                                'price': '1',
                                'brand': `UK - Princess Polly`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '30',
                                'list': 'home',
                                'position': '13'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2719343 - Enjoy 25% off your first order with this No7 Discount code - No7`,
                                'id': 'UK-2719343',
                                'price': '1',
                                'brand': `UK - No7`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '25',
                                'list': 'home',
                                'position': '14'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2062309 - Black Friday - up to 60% off in the Raging Bull sale - Raging Bull`,
                                'id': 'UK-2062309',
                                'price': '1',
                                'brand': `UK - Raging Bull`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '60',
                                'list': 'home',
                                'position': '15'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2741137 - Grab a whopping 33% off this Black Friday: Pooch and Mutt discount code - Pooch and Mutt`,
                                'id': 'UK-2741137',
                                'price': '1',
                                'brand': `UK - Pooch and Mutt`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '33',
                                'list': 'home',
                                'position': '16'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2742743 - Black Friday: Celebrate the season with 30% off this Black Friday at OKA - OKA`,
                                'id': 'UK-2742743',
                                'price': '1',
                                'brand': `UK - OKA`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '30',
                                'list': 'home',
                                'position': '17'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2760343 - Black Friday Offer! Get up to 50% off Selected styles with Clarks! - Clarks`,
                                'id': 'UK-2760343',
                                'price': '1',
                                'brand': `UK - Clarks`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '50',
                                'list': 'home',
                                'position': '18'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2758719 - Amazing Savings with Black Friday Deals at The Range - The Range`,
                                'id': 'UK-2758719',
                                'price': '1',
                                'brand': `UK - The Range`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'none',
                                'dimension7': '0',
                                'list': 'home',
                                'position': '19'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2752175 - Black Friday deal : up to 70% OFF - 11 Degrees`,
                                'id': 'UK-2752175',
                                'price': '1',
                                'brand': `UK - 11 Degrees`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '70',
                                'list': 'home',
                                'position': '20'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2763943 - Black Friday offer: grab £10 off - Musicroom`,
                                'id': 'UK-2763943',
                                'price': '1',
                                'brand': `UK - Musicroom`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'value',
                                'dimension7': '10',
                                'list': 'home',
                                'position': '21'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2760506 - Black Friday – 60% OFF - Cath Kidston`,
                                'id': 'UK-2760506',
                                'price': '1',
                                'brand': `UK - Cath Kidston`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '60',
                                'list': 'home',
                                'position': '22'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2762320 - Take 15% off in the Herman Miller sale - Herman Miller`,
                                'id': 'UK-2762320',
                                'price': '1',
                                'brand': `UK - Herman Miller`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '15',
                                'list': 'home',
                                'position': '23'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2762366 - Kate Spade discount code: up to 50% off + extra 30% off this Black Friday - Kate Spade`,
                                'id': 'UK-2762366',
                                'price': '1',
                                'brand': `UK - Kate Spade`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '50',
                                'list': 'home',
                                'position': '24'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2733412 - Black Friday: up to 60% off everything with this Hawes and Curtis promo - Hawes & Curtis`,
                                'id': 'UK-2733412',
                                'price': '1',
                                'brand': `UK - Hawes & Curtis`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '60',
                                'list': 'home',
                                'position': '25'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2745870 - Grab up to 40% off selected items this Black Friday + Cyber Monday - Swarovski`,
                                'id': 'UK-2745870',
                                'price': '1',
                                'brand': `UK - Swarovski`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '40',
                                'list': 'home',
                                'position': '26'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2645766 - Grab 20% off everything with this new Toblerone discount code! - Toblerone`,
                                'id': 'UK-2645766',
                                'price': '1',
                                'brand': `UK - Toblerone`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '20',
                                'list': 'home',
                                'position': '27'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2770456 - Black Friday: up to 40% OFF + 12% off all wines with this Vivino discount code - Vivino`,
                                'id': 'UK-2770456',
                                'price': '1',
                                'brand': `UK - Vivino`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '40',
                                'list': 'home',
                                'position': '28'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2755335 - Save BIG this Black Friday with this 12% off Kinguin discount code - Kinguin`,
                                'id': 'UK-2755335',
                                'price': '1',
                                'brand': `UK - Kinguin`,
                                'variant': 'coupon',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '12',
                                'list': 'home',
                                'position': '29'
                            },
                            {
                                'country': 'UK',
                                'name': `UK-2772071 - Wolf & Badger Black Friday Sale! Save up to 50% off your order - Wolf & Badger`,
                                'id': 'UK-2772071',
                                'price': '1',
                                'brand': `UK - Wolf & Badger`,
                                'variant': 'offer',
                                'category': '',
                                'dimension5': 'all',
                                'dimension6': 'percent',
                                'dimension7': '50',
                                'list': 'home',
                                'position': '30'
                            },
                        ]
                    }
                }
            }
        </script>
        {{-- end --}}

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
                                            width="32" height="32" alt="Food &amp; Drink" class="mr"
                                            loading="lazy" />
                                        {{ $drop->name }}
                                    </button>
                                    <section class="category-accordion__content">
                                        <div class="category-accordion__content-inner">
                                            <div class="category-accordion__merchants">
                                                @foreach ($drop->stores as $dropstore)
                                                    <a href="/store/{{ $dropstore->slug }}"
                                                        class="category-accordion__merchant-box">
                                                        <picture class="category-accordion__merchant-box__logo img-fluid">
                                                            {{-- <source
                                                            srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo@2x.webp 2x"
                                                            type="image/webp"> --}}
                                                            <img class="category-accordion__merchant-box__logo img-fluid"
                                                                src="{{ asset('images/' . $dropstore->image) }}"
                                                                {{-- srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo@2x.png 2x" --}} type="image/png"
                                                                alt="Virginia Hayward" loading="lazy" width="90"
                                                                style="height: 40px;" height="45" />
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
        <section class="mt--xxl">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="category-accordion-wrapper">
                        <p class="h1 mb">Special events</p>
                        <div class="grid-1 grid-3-md">
                            @foreach ($special_events as $event)
                                <a href="/specials/{{ $event->slug }}" class="latest-event">
                                    <picture class="latest-event__image">
                                        <img class="img-fit-cover" src="{{ asset('images') . '/' . $event->image }}"
                                            type="image/jpg" alt="Cyber Monday Sales" loading="lazy" width="300"
                                            height="160" />
                                    </picture> <span class="latest-event__name">{{ $event->name }}</span>
                                    <span class="latest-event__bar"></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </section>
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
                                            {{-- <source
                                            srcset="https://cdn.bravo-savings-network.com/cdn2/blog/md/tips-to-choose-the-best-deals-for-cyber-monday-2019-202011111650-preview.webp"
                                            type="image/webp"> --}}
                                            <img class="img-fluid" src="{{ asset('images') . '/' . $blogs->image }}"
                                                type="image/jpeg" alt="Are deals better on Cyber Monday?" loading="lazy"
                                                width="750" height="300" />
                                        </picture>
                                    </div>
                                    <div class="latest-blog__content">
                                        <label class="latest-blog__title"> {{ $blogs->name }}</label>
                                        <div class="latest-blog__footer">
                                            <div class="laster-blog__date"> {{ $blogs->date }}</div>
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
        <!-- with latest-merchants-tags-widget-000001 -->

        <!-- with popular-merchants-tags-widget-000001 -->

        @include('frontend.recently_update_brand')


        <section class="mt--xxl">
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
        <section class="mt--xxl">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="our-numbers-wrapper">
                        <p class="h2 text-center mb--xl">Halfmycode&#x27;s stats</p>
                        <div class="our-numbers-grid">
                            <!-- item -->
                            <div class="our-number">
                                <img src="{{ asset('images/footeruser.jpeg') }}" alt="icon users" loading="lazy"
                                    class="img-fluid " width="174"height="140" />
                                <div class="our-number__text">
                                    <strong>4,000,000</strong>
                                    Users
                                </div>
                            </div>
                            <!-- item -->
                            <div class="our-number">
                                <img src="{{ asset('images/footerbrand.jpeg') }}" alt="icon boutiques" loading="lazy"
                                    class="img-fluid our-number__img" width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>6,000+</strong>
                                    Brands
                                </div>
                            </div>
                            <!-- item -->
                            <div class="our-number">
                                <img src="{{ asset('images/coupons.jpeg') }}" alt="icon codes" loading="lazy"
                                    class="img-fluid our-number__img" width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>150,000+</strong>
                                    Coupons
                                </div>
                            </div>

                            <!-- item -->
                            <div class="our-number">
                                <img src="{{ asset('images/verified.jpeg') }}" alt="icon verified" loading="lazy"
                                    class="img-fluid our-number__img" width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>98%</strong>
                                    Verified
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        // alert('nn Copy');
        $(".btn-show-code").click(function(e) {
            e.preventDefault();

            // ----- Copy text to clip board code
            var getcode = $(this).attr('value');
            var text = getcode;
            // Create a temporary input element
            var tempInput = document.createElement('input');
            // Set the input element's value to the text to be copied
            tempInput.value = text;
            // Append the input element to the document
            document.body.appendChild(tempInput);
            // Select the text in the input element
            tempInput.select();
            // Copy the selected text to the clipboard
            document.execCommand('copy');
            // Remove the temporary input element
            document.body.removeChild(tempInput);

            // ----- Open url in new tab
            var url = $(this).attr('data-affilinkite-link');
            window.open(url, '_blank');

            // ----- Change span element text
            $(this).find('span').text('Code Copied');

            // alert('Code Copy');
            debugger
        });
    });

    $(document).on('click', '.btn-show-code', function() {
        $modal_id = $(this).data('modal-id');
        $link = $(this).data('affilinkite-link');
        $($modal_id).modal('show');
        window.open($link, '_blank');

    });
    const btn = document.getElementById('copyButton');
    btn.addEventListener('click', function handleClick() {
        btn.textContent = 'Code Copied';
        setTimeout(function() {
            btn.text('Copy');
        }, 2000);
    });
</script>

