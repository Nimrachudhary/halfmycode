@extends('layouts.frontend.app')
@section('front-content')

    <body class="template">
        <div class="area area--over-header">
        </div>

        <div class="area area--sub-header">
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">HALFMYCODE</a>
                    <a href="/special" target="_self">Special events</a>
                    <span>Mother&#x27;s Day Gifts</span>
                </nav>
            </div>
        </div>
        <main class="area area--main-content">
            <section class='pt--xl pt--md-mobile'>
                <div class='container no-gap-mobile'>
                    <section class='section-content section-content--full'>
                        @foreach ($event as $event)
                        <div class='category-header'>
                            <h1 class='category-header__title mb'>
                                {{ $event->title }}
                            </h1>
                            <h2 class='category-header__subtitle font-bold mb--sm'>
                                {{ $event->description }}
                            </h2>
                            <picture class="category-header__image">
                                {{-- <source srcset="https://cdn.bravo-savings-network.com/cdn2/events/md/mothers-day.webp"
                                    type="image/webp"> --}}
                                <img class="img-fit-cover" src="{{ asset('images') . '/' . $event->image }}" type="image/jpg" alt="Mother's Day Gifts"
                                    loading="lazy" width="300" height="160" />
                            </picture>
                        </div>
                        @endforeach
                    </section>
                </div>
            </section>
            <section class="mt">
                <div class="container no-gap-mobile fluid-tablet">
                    <section class="section-content section-content--full">
                        <div id="slider-event-body" class="weekly-deal-wrapper has-bg">
                            <div class="grid-3 grid-scroller-mobile pt--lg pl--lg-mobile pb--md-mobile mb-lg pb--lg pl pr">
                                <article id="boxWeeklyDealArticle_4603" class="weekly-deal"
                                    data-href='/discount-code-furn.html' data-pos="1" data-lst="event-box" data-id="4603"
                                    data-title="RXhjbHVzaXZlIDEwJSBvZmYgc2l0ZXdpZGUgLSBGdXJuIGRpc2NvdW50IGNvZGUgLSBmdXJu">
                                    <div class="weekly-deal__header">
                                        <picture>
                                            <source
                                                srcset="https://cdn.bravo-savings-network.com/cdn2/box/md/exclusive-8-off-sitewide-furn-discount-code-202303172142.webp, https://cdn.bravo-savings-network.com/cdn2/box/md/exclusive-8-off-sitewide-furn-discount-code-202303172142@2x.webp 2x"
                                                type="image/webp">
                                            <img src="https://cdn.bravo-savings-network.com/cdn2/box/md/exclusive-8-off-sitewide-furn-discount-code-202303172142.jpg"
                                                srcset="https://cdn.bravo-savings-network.com/cdn2/box/md/exclusive-8-off-sitewide-furn-discount-code-202303172142@2x.jpg 2x"
                                                type="image/jpeg" alt="furn" loading="lazy" />
                                        </picture>
                                    </div>
                                    <div class="weekly-deal__content">
                                        <div class="grid-2">
                                            <a href="/discount-code-furn.html" class="weekly-deal__logo" title="">
                                                <picture class="">
                                                    <source
                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/furn-20220429092924-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/furn-20220429092924-logo@2x.webp 2x"
                                                        type="image/webp">
                                                    <img class=""
                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/furn-20220429092924-logo.png"
                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/furn-20220429092924-logo@2x.png 2x"
                                                        type="image/png" alt="furn" loading="lazy" width="90"
                                                        height="45" />
                                                </picture>
                                            </a>
                                            <label class="weekly-deal__title">
                                                <a href="/discount-code-furn.html">furn</a>
                                            </label>
                                        </div>
                                        <div class="weekly-deal__description">
                                            Exclusive 10% off sitewide - Furn discount code
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <script>
                            if (typeof(promo1) == 'undefined') {
                                promo1 = []
                            }
                            promo1.push({
                                'id': 'UK-4603',
                                'position': '1',
                                'name': 'UK - Exclusive 10% off sitewide - Furn discount code - furn',
                                'creative': 'event-box',
                            })
                        </script>
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
                                        <a href="/discount-code-lookfantastic.html" class="merchant-box">
                                            <picture class="merchant-box__logo">
                                                <source
                                                    srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo@2x.webp 2x"
                                                    type="image/webp">
                                                <img class="merchant-box__logo"
                                                    src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo.png"
                                                    srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo@2x.png 2x"
                                                    type="image/png" alt="LOOKFANTASTIC" loading="lazy" width="90"
                                                    height="45" />
                                            </picture> <span class="merchant-box__name break-word">LOOKFANTASTIC</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content__page-content">
                            <div class="filter-button-wrapper mb--xs-mobile mb--lg">
                                <div class="filter-button-grid">
                                    <button class="btn filter-button filter-button--active" data-deals-filter-all>
                                        All <span class="filter-button__count">(26)</span>
                                    </button>
                                    <button class="btn filter-button" data-deals-filter-exclusive>
                                        Exclusive <span class="filter-button__count">(9)</span>
                                    </button>
                                    <button class="btn filter-button" data-deals-filter-code>
                                        Discount Codes <span class="filter-button__count">(19)</span>
                                    </button>
                                    <button class="btn filter-button" data-deals-filter-offer>
                                        Deals <span class="filter-button__count">(7)</span>
                                    </button>
                                </div>
                            </div>
                            <div class="grid-1">
                                <article class="mixed-deal mixed-deal--exclusive" data-exclusive-label="Exclusive"
                                    data-dropdown data-deal-exclusive data-deal-code>
                                    <div class="mixed-deal__header">
                                        <div class="mixed-deal__logo">
                                            <picture class="img-fit-center">
                                                <source
                                                    srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/yougarden-20181012133439-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/yougarden-20181012133439-logo@2x.webp 2x"
                                                    type="image/webp">
                                                <img class="img-fit-center"
                                                    src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/yougarden-20181012133439-logo.png"
                                                    srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/yougarden-20181012133439-logo@2x.png"
                                                    type="image/png" alt="YouGarden" width="150" height="75"
                                                    loading="lazy" />
                                            </picture>
                                        </div>
                                        <div class="mixed-deal__content">
                                            <p class="mixed-deal__title">
                                                Enjoy this exclusive YouGarden discount code for 10% off!
                                            </p>
                                            <div>
                                                <div class="pull-right mb--xs">
                                                    <div class="deal-details-toggle"
                                                        data-dropdown-trigger=".deal-details">
                                                        Details
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="deal-details">
                                                        <div class="deal-details__inner">
                                                            <ul>
                                                                <li>Take 10% off orders thanks to this exclusive voucher.
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="btn-code btn-code--ribbon" data-code="XLF"
                                                        data-popup="L2Rpc2NvdW50LWNvZGUteW91Z2FyZGVuLmh0bWwjMjg4NzE4Mg&#x3D;&#x3D;"
                                                        data-out="L2RlYWwvMjg4NzE4Mi5odG1sP3Q9MTY3ODQ3NDI2Nzc1MA&#x3D;&#x3D;"
                                                        data-sku="UK-2887182" data-pos="1" data-lst="special-event">
                                                        <span>GET CODE</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mixed-deal__merchant">
                                        <a href="/discount-code-yougarden.html">View all YouGarden discount codes</a>
                                    </div>
                                    <div class="mixed-deal__footer">
                                        <div>Used 1 time</div>
                                        <div class="deal-expiraton">
                                            <img class="deal-expiraton__icon"
                                                src="https://cdn.bravo-savings-network.com/cdn2/icons/clock.svg"
                                                alt="clock" width="14" height="14" loading="lazy" />
                                            Expires in 2 days
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <section class="mt--xxl">
                <div>
                    <section class="section-content section-content--full">
                        <section class="pt--xxl overflow-hidden">

                        </section>
                        <section class="mt--xxl">
                            <div class="container">
                                <section class="section-content section-content--full">
                                    <div class="category-accordion-wrapper">
                                        <div data-accordion>
                                            <article class="category-accordion" data-dropdown>
                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/food.svg"
                                                        width="32" height="32" alt="Food &amp; Drink"
                                                        class="mr" loading="lazy" />
                                                    Food &amp; Drink
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            <a href="/discount-code-virginia-hayward.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/virginia-hayward-20201203091432-logo@2x.png 2x"
                                                                        type="image/png" alt="Virginia Hayward"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-vivino.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vivino-20200930104145-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vivino-20200930104145-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vivino-20200930104145-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vivino-20200930104145-logo@2x.png 2x"
                                                                        type="image/png" alt="Vivino" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-the-whisky-exchange.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/wgkygxgxktsp0vjamtqqyibfer1wc8sphngksqhnvmtlbzdkix-20200410110543-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/wgkygxgxktsp0vjamtqqyibfer1wc8sphngksqhnvmtlbzdkix-20200410110543-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/wgkygxgxktsp0vjamtqqyibfer1wc8sphngksqhnvmtlbzdkix-20200410110543-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/wgkygxgxktsp0vjamtqqyibfer1wc8sphngksqhnvmtlbzdkix-20200410110543-logo@2x.png 2x"
                                                                        type="image/png" alt="The Whisky Exchange"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-beer-hawk.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beer-hawk-20181015154455-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beer-hawk-20181015154455-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beer-hawk-20181015154455-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beer-hawk-20181015154455-logo@2x.png 2x"
                                                                        type="image/png" alt="Beer Hawk" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-lor.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lor-20221020173956-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lor-20221020173956-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lor-20221020173956-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lor-20221020173956-logo@2x.png 2x"
                                                                        type="image/png" alt="L'OR" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-iceland.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/iceland-20181012102351-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/iceland-20181012102351-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/iceland-20181012102351-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/iceland-20181012102351-logo@2x.png 2x"
                                                                        type="image/png" alt="Iceland" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-beerwulf.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-sub-20190328151829-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-sub-20190328151829-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-sub-20190328151829-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-sub-20190328151829-logo@2x.png 2x"
                                                                        type="image/png" alt="Beerwulf" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-brewdog.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/brewdog-20210317090905-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/brewdog-20210317090905-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/brewdog-20210317090905-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/brewdog-20210317090905-logo@2x.png 2x"
                                                                        type="image/png" alt="BrewDog" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-grind.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grind-20210825170924-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grind-20210825170924-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grind-20210825170924-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grind-20210825170924-logo@2x.png 2x"
                                                                        type="image/png" alt="Grind" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-grubby.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grubby-20210629163328-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grubby-20210629163328-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grubby-20210629163328-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/grubby-20210629163328-logo@2x.png 2x"
                                                                        type="image/png" alt="Grubby" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                        </div>
                                                        <div class="pull-right mt">
                                                            <a href="/category-food.html"
                                                                class="category-accordion__view-all">View all brands in
                                                                the Food &amp; Drink category</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
                                            <article class="category-accordion" data-dropdown>
                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/gift.svg"
                                                        width="32" height="32" alt="Gifts &amp; Jewellery"
                                                        class="mr" loading="lazy" />
                                                    Gifts &amp; Jewellery
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            <a href="/discount-code-livingsocial.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/livingsocial-20191118154455-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/livingsocial-20191118154455-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/livingsocial-20191118154455-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/livingsocial-20191118154455-logo@2x.png 2x"
                                                                        type="image/png" alt="LivingSocial"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-gold-boutique.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gold-boutique-20201026120540-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gold-boutique-20201026120540-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gold-boutique-20201026120540-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gold-boutique-20201026120540-logo@2x.png 2x"
                                                                        type="image/png" alt="Gold Boutique"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-my-picture.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/my-picturecouk-20191127130420-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/my-picturecouk-20191127130420-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/my-picturecouk-20191127130420-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/my-picturecouk-20191127130420-logo@2x.png 2x"
                                                                        type="image/png" alt="My Picture" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-goldsmiths.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/goldsmiths-20181012172140-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/goldsmiths-20181012172140-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/goldsmiths-20181012172140-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/goldsmiths-20181012172140-logo@2x.png 2x"
                                                                        type="image/png" alt="Goldsmiths" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-monica-vinader.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monica-vinader-20220606112042-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monica-vinader-20220606112042-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monica-vinader-20220606112042-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monica-vinader-20220606112042-logo@2x.png 2x"
                                                                        type="image/png" alt="Monica Vinader"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-moonpig.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/moonpig-20201116095349-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/moonpig-20201116095349-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/moonpig-20201116095349-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/moonpig-20201116095349-logo@2x.png 2x"
                                                                        type="image/png" alt="Moonpig" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-swarovski.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/swarovski-20220314132402-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/swarovski-20220314132402-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/swarovski-20220314132402-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/swarovski-20220314132402-logo@2x.png 2x"
                                                                        type="image/png" alt="Swarovski" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-the-jewel-hut.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-jewel-hut-20190122173416-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-jewel-hut-20190122173416-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-jewel-hut-20190122173416-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-jewel-hut-20190122173416-logo@2x.png 2x"
                                                                        type="image/png" alt="The Jewel Hut"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-acotis-jewellery.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/acotis-jewellery-20211124110708-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/acotis-jewellery-20211124110708-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/acotis-jewellery-20211124110708-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/acotis-jewellery-20211124110708-logo@2x.png 2x"
                                                                        type="image/png" alt="Acotis Jewellery"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-david-shuttle.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/david-shuttle-20181016142839-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/david-shuttle-20181016142839-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/david-shuttle-20181016142839-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/david-shuttle-20181016142839-logo@2x.png 2x"
                                                                        type="image/png" alt="David Shuttle"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                        </div>
                                                        <div class="pull-right mt">
                                                            <a href="/category-gifts-jewellery-flowers.html"
                                                                class="category-accordion__view-all">View all brands in
                                                                the Gifts &amp; Jewellery category</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
                                            <article class="category-accordion" data-dropdown>
                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/clothing.svg"
                                                        width="32" height="32" alt="Clothing" class="mr"
                                                        loading="lazy" />
                                                    Clothing
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            <a href="/discount-code-lacoste.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lacoste-20201119091418-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lacoste-20201119091418-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lacoste-20201119091418-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lacoste-20201119091418-logo@2x.png 2x"
                                                                        type="image/png" alt="Lacoste" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-boohooman.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/boohooman-20200728142732-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/boohooman-20200728142732-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/boohooman-20200728142732-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/boohooman-20200728142732-logo@2x.png 2x"
                                                                        type="image/png" alt="BoohooMAN" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-shein.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo@2x.png 2x"
                                                                        type="image/png" alt="SHEIN" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-yours-clothing.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/yours-clothing-20221107123355-logo@2x.png 2x"
                                                                        type="image/png" alt="Yours Clothing"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-debenhams.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/debenhams-20210519151105-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/debenhams-20210519151105-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/debenhams-20210519151105-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/debenhams-20210519151105-logo@2x.png 2x"
                                                                        type="image/png" alt="Debenhams" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-berghaus.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/berghaus-20201229171256-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/berghaus-20201229171256-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/berghaus-20201229171256-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/berghaus-20201229171256-logo@2x.png 2x"
                                                                        type="image/png" alt="Berghaus" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-calzedonia.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/calzedonia-20210525111114-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/calzedonia-20210525111114-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/calzedonia-20210525111114-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/calzedonia-20210525111114-logo@2x.png 2x"
                                                                        type="image/png" alt="Calzedonia" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-hush.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hush-20201111122656-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hush-20201111122656-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hush-20201111122656-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hush-20201111122656-logo@2x.png 2x"
                                                                        type="image/png" alt="hush" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-percival.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/percival-20211110143326-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/percival-20211110143326-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/percival-20211110143326-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/percival-20211110143326-logo@2x.png 2x"
                                                                        type="image/png" alt="Percival" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-siksilk.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/siksilk-20200908163821-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/siksilk-20200908163821-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/siksilk-20200908163821-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/siksilk-20200908163821-logo@2x.png 2x"
                                                                        type="image/png" alt="SIKSILK" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                        </div>
                                                        <div class="pull-right mt">
                                                            <a href="/category-clothing.html"
                                                                class="category-accordion__view-all">View all brands in
                                                                the Clothing category</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
                                            <article class="category-accordion" data-dropdown>
                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/flights-hotels.svg"
                                                        width="32" height="32" alt="Flights &amp; Hotels"
                                                        class="mr" loading="lazy" />
                                                    Flights &amp; Hotels
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            <a href="/discount-code-travelodge.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/travelodge-20191113151942-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/travelodge-20191113151942-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/travelodge-20191113151942-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/travelodge-20191113151942-logo@2x.png 2x"
                                                                        type="image/png" alt="Travelodge" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-hotelscom.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hotelscom-20200723111636-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hotelscom-20200723111636-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hotelscom-20200723111636-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/hotelscom-20200723111636-logo@2x.png 2x"
                                                                        type="image/png" alt="Hotels.com" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-lastminutecom.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lastminutecom-20190605112022-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lastminutecom-20190605112022-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lastminutecom-20190605112022-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lastminutecom-20190605112022-logo@2x.png 2x"
                                                                        type="image/png" alt="lastminute.com"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-emirates.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/emirates-20190909125911-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/emirates-20190909125911-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/emirates-20190909125911-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/emirates-20190909125911-logo@2x.png 2x"
                                                                        type="image/png" alt="Emirates" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-qatar-airways.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/qatar-airways-20210115155100-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/qatar-airways-20210115155100-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/qatar-airways-20210115155100-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/qatar-airways-20210115155100-logo@2x.png 2x"
                                                                        type="image/png" alt="Qatar Airways"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-bookingcom.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/bookingcom-20181003153859-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/bookingcom-20181003153859-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/bookingcom-20181003153859-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/bookingcom-20181003153859-logo@2x.png 2x"
                                                                        type="image/png" alt="Booking.com" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-malmaison.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/malmaison-20181031132919-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/malmaison-20181031132919-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/malmaison-20181031132919-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/malmaison-20181031132919-logo@2x.png 2x"
                                                                        type="image/png" alt="Malmaison" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-easyjet.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-20210517111400-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-20210517111400-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-20210517111400-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-20210517111400-logo@2x.png 2x"
                                                                        type="image/png" alt="easyJet" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-easyjet-holidays.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-holidays-20210409125159-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-holidays-20210409125159-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-holidays-20210409125159-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/easyjet-holidays-20210409125159-logo@2x.png 2x"
                                                                        type="image/png" alt="easyJet holidays"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-expedia.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/expedia-20210421101705-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/expedia-20210421101705-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/expedia-20210421101705-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/expedia-20210421101705-logo@2x.png 2x"
                                                                        type="image/png" alt="Expedia" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                        </div>
                                                        <div class="pull-right mt">
                                                            <a href="/category-flights-hotels.html"
                                                                class="category-accordion__view-all">View all brands in
                                                                the Flights &amp; Hotels category</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
                                            <article class="category-accordion" data-dropdown>
                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/sport.svg"
                                                        width="32" height="32" alt="Sport &amp; Fitness"
                                                        class="mr" loading="lazy" />
                                                    Sport &amp; Fitness
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            <a href="/discount-code-jd-sports.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/jd-sports-20211116154654-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/jd-sports-20211116154654-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/jd-sports-20211116154654-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/jd-sports-20211116154654-logo@2x.png 2x"
                                                                        type="image/png" alt="JD Sports" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-tala.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/tala-20210618170151-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/tala-20210618170151-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/tala-20210618170151-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/tala-20210618170151-logo@2x.png 2x"
                                                                        type="image/png" alt="TALA" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-the-north-face.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-north-face-20181221124459-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-north-face-20181221124459-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-north-face-20181221124459-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/the-north-face-20181221124459-logo@2x.png 2x"
                                                                        type="image/png" alt="The North Face"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-american-golf.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/american-golf-20190726114630-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/american-golf-20190726114630-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/american-golf-20190726114630-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/american-golf-20190726114630-logo@2x.png 2x"
                                                                        type="image/png" alt="American Golf"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-inov-8.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/d93cejhl4x1ingvahz4onygqirfgn0gyabo7qxyino7qykpkdt-20220310142517-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/d93cejhl4x1ingvahz4onygqirfgn0gyabo7qxyino7qykpkdt-20220310142517-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/d93cejhl4x1ingvahz4onygqirfgn0gyabo7qxyino7qykpkdt-20220310142517-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/d93cejhl4x1ingvahz4onygqirfgn0gyabo7qxyino7qykpkdt-20220310142517-logo@2x.png 2x"
                                                                        type="image/png" alt="Inov-8" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-nike.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nike-20190311092242-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nike-20190311092242-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nike-20190311092242-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nike-20190311092242-logo@2x.png 2x"
                                                                        type="image/png" alt="Nike" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-skiset.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/skiset-20201203120321-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/skiset-20201203120321-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/skiset-20201203120321-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/skiset-20201203120321-logo@2x.png 2x"
                                                                        type="image/png" alt="Skiset" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-sports-direct.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sports-direct-20210319132531-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sports-direct-20210319132531-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sports-direct-20210319132531-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sports-direct-20210319132531-logo@2x.png 2x"
                                                                        type="image/png" alt="Sports Direct"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-monterrain.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monterrain-20210922161337-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monterrain-20210922161337-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monterrain-20210922161337-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/monterrain-20210922161337-logo@2x.png 2x"
                                                                        type="image/png" alt="Monterrain" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-blacks.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/blacks-20210623091541-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/blacks-20210623091541-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/blacks-20210623091541-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/blacks-20210623091541-logo@2x.png 2x"
                                                                        type="image/png" alt="Blacks" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                        </div>
                                                        <div class="pull-right mt">
                                                            <a href="/category-sport.html"
                                                                class="category-accordion__view-all">View all brands in
                                                                the Sport &amp; Fitness category</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
                                            <article class="category-accordion" data-dropdown>
                                                <button class="category-accordion__title"
                                                    data-dropdown-trigger=".category-accordion__content">
                                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/categories/beauty.svg"
                                                        width="32" height="32" alt="Beauty &amp; Makeup"
                                                        class="mr" loading="lazy" />
                                                    Beauty &amp; Makeup
                                                </button>
                                                <section class="category-accordion__content">
                                                    <div class="category-accordion__content-inner">
                                                        <div class="category-accordion__merchants">
                                                            <a href="/discount-code-lookfantastic.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/lookfantastic-20200702175754-logo@2x.png 2x"
                                                                        type="image/png" alt="LOOKFANTASTIC"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-notino.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/notino-20181030174106-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/notino-20181030174106-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/notino-20181030174106-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/notino-20181030174106-logo@2x.png 2x"
                                                                        type="image/png" alt="Notino" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-sephora.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sephora-20221017121526-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sephora-20221017121526-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sephora-20221017121526-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/sephora-20221017121526-logo@2x.png 2x"
                                                                        type="image/png" alt="Sephora" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-beauty-bay.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beauty-bay-20220523093856-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beauty-bay-20220523093856-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beauty-bay-20220523093856-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beauty-bay-20220523093856-logo@2x.png 2x"
                                                                        type="image/png" alt="BEAUTY BAY" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-gillette.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gillette-20210218162928-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gillette-20210218162928-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gillette-20210218162928-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/gillette-20210218162928-logo@2x.png 2x"
                                                                        type="image/png" alt="Gillette" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-beyond-beautiful.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beyond-beautiful-20210422122236-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beyond-beautiful-20210422122236-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beyond-beautiful-20210422122236-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/beyond-beautiful-20210422122236-logo@2x.png 2x"
                                                                        type="image/png" alt="BeyondBeautiful"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-temple-spa.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/temple-spa-20180504152252-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/temple-spa-20180504152252-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/temple-spa-20180504152252-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/temple-spa-20180504152252-logo@2x.png 2x"
                                                                        type="image/png" alt="Temple Spa" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-nuxe.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nuxe-20220324125706-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nuxe-20220324125706-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nuxe-20220324125706-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/nuxe-20220324125706-logo@2x.png 2x"
                                                                        type="image/png" alt="Nuxe" loading="lazy"
                                                                        width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-vitaminexpress.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vitaminexpress-20210113125932-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vitaminexpress-20210113125932-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vitaminexpress-20210113125932-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/vitaminexpress-20210113125932-logo@2x.png 2x"
                                                                        type="image/png" alt="VitaminExpress"
                                                                        loading="lazy" width="90" height="45" />
                                                                </picture>
                                                            </a>
                                                            <a href="/discount-code-cult-beauty.html"
                                                                class="category-accordion__merchant-box">
                                                                <picture
                                                                    class="category-accordion__merchant-box__logo img-fluid">
                                                                    <source
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/cult-beauty-20200625090753-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/cult-beauty-20200625090753-logo@2x.webp 2x"
                                                                        type="image/webp">
                                                                    <img class="category-accordion__merchant-box__logo img-fluid"
                                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/cult-beauty-20200625090753-logo.png"
                                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/cult-beauty-20200625090753-logo@2x.png 2x"
                                                                        type="image/png" alt="Cult Beauty"
                                                                        loading="lazy" width="90"
                                                                        height="45" />
                                                                </picture>
                                                            </a>
                                                        </div>
                                                        <div class="pull-right mt">
                                                            <a href="/category-health-beauty.html"
                                                                class="category-accordion__view-all">View all brands in
                                                                the Beauty &amp; Makeup category</a>
                                                        </div>
                                                    </div>
                                                </section>
                                            </article>
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
                                                required="required" id="js-email-subscribe"
                                                aria-label="Email address" />
                                            <button type="submit" id="js-newsletter-submit"
                                                aria-label="Sign up !"><svg width="18" height="16"
                                                    xmlns="http://www.w3.org/2000/svg">
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
        <link href="/additional.609e4b424f26855115e1.css" rel="stylesheet" media="print"
            onload="this.media='all'" />
    </body>

    </html>
@endsection
