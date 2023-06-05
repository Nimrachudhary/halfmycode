@extends('layouts.frontend.app')
@section('front-content')

    <body class="template">

        <div class="area area--over-header">
        </div>
        <div class="area area--sub-header">
            <div class="hidden-mobile hidden-tablet">
                <div class="container no-gap-mobile">
                    <nav class="breadcrumbs pl--md-mobile">
                        <a href="/" target="_self">Halfmycode</a>
                        <a href="/stores" target="_self">Store</a>
                        <span> {{ $store[0]->name }}</span>
                    </nav>
                </div>
            </div>
        </div>
        <main class="area area--main-content">
            <section>
                <div class="container">
                    @foreach ($store as $store)
                        <section class="section-content section-content--full">
                            <div class="section-content__page-content">
                                <div class="merchant-header">
                                    {{-- <a href="{{ $store->affilite_link }}"> --}}
                                    <div class="merchant-header__logo">
                                        <a href="{{ $store->affilite_link }}" target="_blank">
                                            <picture>
                                                <img src="{{ asset('images/' . $store->image) }}" alt="AEG"
                                                    width="300" height="190" class="img-fluid" fetchpriority="high">
                                            </picture>
                                        </a>
                                    </div>
                                    {{-- </a> --}}
                                    <div class="merchant-header__text">
                                        <h1 class="merchant-header__title">
                                            {{ $store->name }}
                                        </h1>
                                        <h2 class="merchant-header__subtitle">
                                            {!! $store->description !!}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
                </div>
            </section>
            <section class="bg-light pt--lg pb--xl pt--xs-mobile">
                <div class="container">
                    <section class="section-content section-content--sidebar-left">
                        <div class="section-content__sidebar">
                            <div class="bg-white pt pb--xl pl--sm pr--sm hidden-mobile hidden-tablet">
                                <div class="star-rating-wrapper mb--lg">
                                    <div class="star-rating desktop" style="--rating-value: 5"></div>
                                    Average score of 5 out of 465 reviews
                                    <div id='rating-feeback-ok' class='bg-soft pl--lg' style='display: none'>Thank you
                                        for your rating!</div>
                                    <div id='rating-feeback-ko' class='bg-soft pl--lg' style='display: none'>Sorry! An
                                        error occurred whilst registering your rating.</div>
                                </div>
                                <div class="merchant-info-links">
                                    <h3 class="h3 font-bold mb">Useful Social Media </h3>
                                    <div class="mb--sm merchant-info-links__link-hp">
                                        <a href="{{ $store->affilite_link }}" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20">
                                                <defs />
                                                <g fill="currentColor" fill-rule="nonzero">
                                                    <path
                                                        d="M19.069 0h-5.902a.931.931 0 100 1.862h3.654l-8.93 8.93a.931.931 0 101.318 1.316l8.929-8.929v3.654a.931.931 0 101.862 0V.93A.931.931 0 0019.069 0z" />
                                                    <path
                                                        d="M15.268 8.17a.922.922 0 00-.922.921v9.065H1.844V5.654h9.61a.922.922 0 100-1.844H.922A.922.922 0 000 4.732v14.346c0 .51.413.922.922.922h14.346c.51 0 .922-.413.922-.922V9.09a.922.922 0 00-.922-.922z" />
                                                </g>
                                            </svg>
                                            Website
                                        </a>
                                    </div>
                                    @foreach ($menu_socials as $value)
                                        @if ($value->key == 'twitter')
                                            <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">
                                                <svg height="20" viewBox="0 0 32 26" xmlns="http://www.w3.org/2000/svg">
                                                    <defs />
                                                    <path
                                                        d="M32 3.078c-1.19.522-2.458.868-3.78 1.036A6.523 6.523 0 0031.106.488a13.11 13.11 0 01-4.16 1.588A6.574 6.574 0 0022.154 0c-3.632 0-6.556 2.948-6.556 6.562 0 .52.044 1.02.152 1.496-5.454-.266-10.28-2.88-13.522-6.862a6.605 6.605 0 00-.898 3.316 6.57 6.57 0 002.914 5.452 6.479 6.479 0 01-2.964-.808v.072c0 3.188 2.274 5.836 5.256 6.446a6.548 6.548 0 01-1.72.216 5.8 5.8 0 01-1.242-.112c.85 2.598 3.262 4.508 6.13 4.57a13.182 13.182 0 01-8.134 2.798c-.538 0-1.054-.024-1.57-.09A18.469 18.469 0 0010.064 26c12.072 0 18.672-10 18.672-18.668 0-.29-.01-.57-.024-.848A13.087 13.087 0 0032 3.078z"
                                                        fill="currentColor" fill-rule="nonzero" />
                                                </svg>
                                                Twitter
                                            </a>
                                        @endif
                                        @if ($value->key == 'facebook')
                                            <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">
                                                <svg width="20" height="20" viewBox="0 0 26 26"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <defs />
                                                    <g fill-rule="nonzero" fill="none">
                                                        <path
                                                            d="M22.75 0H3.25A3.253 3.253 0 000 3.25v19.5A3.253 3.253 0 003.25 26h19.5A3.253 3.253 0 0026 22.75V3.25A3.253 3.253 0 0022.75 0z"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M22 13.077h-4v-3.23c0-.893.717-.809 1.6-.809h1.6V5H18c-2.651 0-4.8 2.17-4.8 4.846v3.23H10v4.04h3.2V26H18v-8.885h2.4l1.6-4.038z"
                                                            fill="#FAFAFA" />
                                                    </g>
                                                </svg>


                                                Facebook
                                            </a>
                                        @endif
                                        @if ($value->key == 'instagram')
                                            <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">

                                                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20">
                                                    <g transform="translate(-1 -188)" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(1 188)" fill="currentColor"
                                                            fill-rule="nonzero">
                                                            <path
                                                                d="M10.455 4.545a5 5 0 100 10 5 5 0 100-10zm0 8.246A3.245 3.245 0 1113.7 9.546a3.244 3.244 0 01-3.245 3.245z" />
                                                            <path
                                                                d="M14.124.063c-1.84-.086-6.398-.082-8.24 0C4.266.139 2.84.529 1.688 1.68-.236 3.604.01 6.195.01 9.996c0 3.89-.216 6.422 1.678 8.316 1.93 1.93 4.56 1.677 8.316 1.677 3.853 0 5.183.003 6.545-.525 1.853-.719 3.251-2.375 3.388-5.349.087-1.84.082-6.397 0-8.239-.165-3.51-2.05-5.64-5.813-5.813zm2.912 16.976c-1.26 1.261-3.01 1.149-7.057 1.149-4.166 0-5.837.061-7.056-1.161-1.404-1.398-1.15-3.642-1.15-7.044 0-4.604-.473-7.92 4.148-8.157 1.062-.037 1.374-.05 4.047-.05l.037.025c4.441 0 7.925-.465 8.134 4.155.048 1.054.059 1.37.059 4.04-.001 4.117.077 5.798-1.162 7.043z" />
                                                            <circle cx="15" cy="5" r="1.364" />
                                                        </g>
                                                    </g>
                                                </svg>


                                                Instagram
                                            </a>
                                        @endif
                                        {{-- @if ($value->key == 'youtube')
                                            <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="20"
                                                    viewBox="0 0 640 450">
                                                    <path
                                                        d="M626.813 71.035c-7.375-27.418-28.993-49.031-56.407-56.414C520.324.918 319.992.918 319.992.918s-200.324 0-250.406 13.184c-26.887 7.375-49.031 29.52-56.406 56.933C0 121.113 0 224.97 0 224.97s0 104.379 13.18 153.933c7.383 27.414 28.992 49.028 56.41 56.41C120.195 449.02 320 449.02 320 449.02s200.324 0 250.406-13.184c27.418-7.379 49.032-28.992 56.414-56.406C640 329.348 640 225.496 640 225.496s.524-104.383-13.187-154.46zM256.21 320.915V129.022l166.586 95.946-166.586 95.945z"
                                                        fill="currentColor" />
                                                </svg>

                                                Youtube
                                            </a>
                                        @endif --}}
                                    @endforeach
                                </div>
                            </div>

                        </div>
                        <div class="section-content__page-content">
                            <div class="filter-button-wrapper mb--xs-mobile mb--lg">
                                <div class="filter-button-grid">
                                    <button class="btn filter-button filter-button--active" data-deals-filter-all>
                                        All <span class="filter-button__count">({{ count($coupon) }})</span>
                                    </button>
                                    <button class="btn filter-button" data-deals-filter-code>
                                        Discount Codes <span
                                            class="filter-button__count">({{ count($coupon->where('Cupon_type', 'getcode')) }})</span>
                                    </button>
                                    <button class="btn filter-button" data-deals-filter-offer>
                                        Deals <span
                                            class="filter-button__count">({{ count($coupon->where('Cupon_type', 'getdeal')) }})</span>
                                    </button>
                                </div>
                            </div>
                            <div class="merchant-deal-wrapper">
                                <div class="grid-1 grid-gap-half-mobile" id="deals">
                                    @foreach ($coupon as $coupon)
                                        <article class="merchant-deal" data-dropdown data-deal-code id="2864363">
                                            <section class="merchant-deal__body">
                                                <div class="merchant-deal__shoutout">
                                                    {{-- <strong>15%</strong> discount --}}
                                                    <picture>
                                                        <img src="{{ asset('images/' . $store->image) }}" alt="AEG"
                                                            width="300" height="190" class="img-fluid"
                                                            fetchpriority="high">
                                                    </picture>
                                                </div>
                                                <div class="merchant-deal__content">
                                                    <h3 class="merchant-deal__title">
                                                        {{ $coupon->description }}
                                                    </h3>
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
                                                            <a class="btn btn-offer" href="{{ $coupon->Affilate_Link }}" target="_blank"
                                                                data-modal-id="#exampleModal{{ $coupon->id }}"



                                                                data-sku="UK-2864363" data-pos="1" data-lst="merchant">
                                                                <span>GET DEAL</span>
                                                            </a>
                                                        </div>
                                                       
                                                    @endif
                                                </div>
                                            </section>
                                            <section class="merchant-deal__footer">
                                                <div class="merchant-deal__footer-left"></div>
                                                <div class="merchant-deal__footer-right">
                                                    <div class="deal-expiraton">
                                                        <img class="deal-expiraton__icon"
                                                            src="https://cdn.bravo-savings-network.com/cdn2/icons/clock.svg"
                                                            alt="clock" width="14" height="14"
                                                            loading="lazy" />
                                                        Expiry Date: {{ $coupon->expiry_date }}
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
                            <div id="modal-offer" class="modal-frame">
                                <div class="modal-body">
                                    <button class="modal-close" data-modal-closer>
                                        <img src="https://cdn.bravo-savings-network.com/cdn2/icons/close-o.svg"
                                            width="30" height="30" alt="Close" loading="lazy" />
                                    </button>
                                    <div id="popup-body"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            {{-- mob view sidebar --}}
            <section class="pt--xxxs-mobile pt--xxl overflow-hidden hidden-desktop">
                <div class="container no-gap-mobile">
                    <section class="section-content section-content--full">
                        <div class='pt--xxs-mobile hidden-desktop'>
                            <div class="container no-gap-mobile">
                                <nav class="breadcrumbs pl--md-mobile">
                                    <a href="/" target="_self">Halfmycode</a>
                                    {{-- <a href="/category-appliances.html" target="_self">Appliances</a> --}}
                                    <span>AEG Voucher Code</span>
                                </nav>
                            </div>
                        </div>
                        <section class="pt--xxs-mobile hidden-desktop">
                            <div class="container">
                                <section class="section-content section-content--middle">
                                    <div class="section-content__page-content">
                                        <div class="star-rating-mobile-wrapper mb--xxs">
                                            <div class="star-rating-mobile__logo">
                                                <picture class="img-fluid">
                                                    <source
                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/aeg-20200127165927-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/aeg-20200127165927-logo@2x.webp 2x"
                                                        type="image/webp">
                                                    <img class="img-fluid"
                                                        src="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/aeg-20200127165927-logo.png"
                                                        srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/md/aeg-20200127165927-logo@2x.png"
                                                        type="image/png" alt="AEG" width="150" height="75"
                                                        loading="lazy" />
                                                </picture>
                                            </div>
                                            <div class="star-rating-wrapper ml--md mb--xxs">
                                                <div class="star-rating mobile" style="--rating-value: 5"></div>
                                                Average score of 5 out of 465 reviews
                                                <div id='rating-feedback-mobile-ok' class='bg-soft pl--lg'
                                                    style='display: none'>Thank you for your rating!</div>
                                                <div id='rating-feedback-mobile-ko' class='bg-soft pl--lg'
                                                    style='display: none'>Sorry! An error occurred whilst registering your
                                                    rating.</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </section>
                    </section>
                </div>
            </section>
            {{-- end --}}
            <section class="pt--xxs-mobile pl--md overflow-hidden hidden-desktop">
            </section>


            <section class="mt--xxl">
                <div class="container">
                    <section class="section-content section-content--full">
                        <section class="pt--xl hidden-desktop">
                            <div class="merchant-info-links">
                                <h3 class="h3 font-bold mb">Useful Social Media</h3>
                                <div class="mb--sm merchant-info-links__link-hp" data-popup="m"
                                    data-out="L21lcmNoYW50LzE3NzEuaHRtbD90PTE2NzY5MTkwOTU4NzA=">
                                    <a href="{{ $store->affilite_link }}" target="_blank">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20">
                                            <defs />
                                            <g fill="currentColor" fill-rule="nonzero">
                                                <path
                                                    d="M19.069 0h-5.902a.931.931 0 100 1.862h3.654l-8.93 8.93a.931.931 0 101.318 1.316l8.929-8.929v3.654a.931.931 0 101.862 0V.93A.931.931 0 0019.069 0z" />
                                                <path
                                                    d="M15.268 8.17a.922.922 0 00-.922.921v9.065H1.844V5.654h9.61a.922.922 0 100-1.844H.922A.922.922 0 000 4.732v14.346c0 .51.413.922.922.922h14.346c.51 0 .922-.413.922-.922V9.09a.922.922 0 00-.922-.922z" />
                                            </g>
                                        </svg>
                                        Website
                                    </a>
                                </div>
                                @foreach ($menu_socials as $value)
                                    @if ($value->key == 'twitter')
                                        <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">
                                            <svg height="20" viewBox="0 0 32 26" xmlns="http://www.w3.org/2000/svg">
                                                <defs />
                                                <path
                                                    d="M32 3.078c-1.19.522-2.458.868-3.78 1.036A6.523 6.523 0 0031.106.488a13.11 13.11 0 01-4.16 1.588A6.574 6.574 0 0022.154 0c-3.632 0-6.556 2.948-6.556 6.562 0 .52.044 1.02.152 1.496-5.454-.266-10.28-2.88-13.522-6.862a6.605 6.605 0 00-.898 3.316 6.57 6.57 0 002.914 5.452 6.479 6.479 0 01-2.964-.808v.072c0 3.188 2.274 5.836 5.256 6.446a6.548 6.548 0 01-1.72.216 5.8 5.8 0 01-1.242-.112c.85 2.598 3.262 4.508 6.13 4.57a13.182 13.182 0 01-8.134 2.798c-.538 0-1.054-.024-1.57-.09A18.469 18.469 0 0010.064 26c12.072 0 18.672-10 18.672-18.668 0-.29-.01-.57-.024-.848A13.087 13.087 0 0032 3.078z"
                                                    fill="currentColor" fill-rule="nonzero" />
                                            </svg>
                                            Twitter
                                        </a>
                                    @endif
                                    @if ($value->key == 'facebook')
                                        <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">
                                            <svg width="20" height="20" viewBox="0 0 26 26"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <defs />
                                                <g fill-rule="nonzero" fill="none">
                                                    <path
                                                        d="M22.75 0H3.25A3.253 3.253 0 000 3.25v19.5A3.253 3.253 0 003.25 26h19.5A3.253 3.253 0 0026 22.75V3.25A3.253 3.253 0 0022.75 0z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M22 13.077h-4v-3.23c0-.893.717-.809 1.6-.809h1.6V5H18c-2.651 0-4.8 2.17-4.8 4.846v3.23H10v4.04h3.2V26H18v-8.885h2.4l1.6-4.038z"
                                                        fill="#FAFAFA" />
                                                </g>
                                            </svg>
                                            Facebook
                                        </a>
                                    @endif
                                    @if ($value->key == 'instagram')
                                        <a href="{{ $value->value }}" rel="nofollow noopener" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 20 20">
                                                <g transform="translate(-1 -188)" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(1 188)" fill="currentColor"
                                                        fill-rule="nonzero">
                                                        <path
                                                            d="M10.455 4.545a5 5 0 100 10 5 5 0 100-10zm0 8.246A3.245 3.245 0 1113.7 9.546a3.244 3.244 0 01-3.245 3.245z" />
                                                        <path
                                                            d="M14.124.063c-1.84-.086-6.398-.082-8.24 0C4.266.139 2.84.529 1.688 1.68-.236 3.604.01 6.195.01 9.996c0 3.89-.216 6.422 1.678 8.316 1.93 1.93 4.56 1.677 8.316 1.677 3.853 0 5.183.003 6.545-.525 1.853-.719 3.251-2.375 3.388-5.349.087-1.84.082-6.397 0-8.239-.165-3.51-2.05-5.64-5.813-5.813zm2.912 16.976c-1.26 1.261-3.01 1.149-7.057 1.149-4.166 0-5.837.061-7.056-1.161-1.404-1.398-1.15-3.642-1.15-7.044 0-4.604-.473-7.92 4.148-8.157 1.062-.037 1.374-.05 4.047-.05l.037.025c4.441 0 7.925-.465 8.134 4.155.048 1.054.059 1.37.059 4.04-.001 4.117.077 5.798-1.162 7.043z" />
                                                        <circle cx="15" cy="5" r="1.364" />
                                                    </g>
                                                </g>
                                            </svg>
                                            Instagram
                                        </a>
                                    @endif
                                @endforeach
                                {{-- <a href="https://www.youtube.com/user/AEG" rel="nofollow noopener" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 640 450">
                                        <path
                                            d="M626.813 71.035c-7.375-27.418-28.993-49.031-56.407-56.414C520.324.918 319.992.918 319.992.918s-200.324 0-250.406 13.184c-26.887 7.375-49.031 29.52-56.406 56.933C0 121.113 0 224.97 0 224.97s0 104.379 13.18 153.933c7.383 27.414 28.992 49.028 56.41 56.41C120.195 449.02 320 449.02 320 449.02s200.324 0 250.406-13.184c27.418-7.379 49.032-28.992 56.414-56.406C640 329.348 640 225.496 640 225.496s.524-104.383-13.187-154.46zM256.21 320.915V129.022l166.586 95.946-166.586 95.945z"
                                            fill="currentColor" />
                                    </svg>
                                    Youtube
                                </a> --}}
                            </div>
                        </section>

                        {{-- <section class="mt--xxl">
                        <div class="container">
                            <section class="section-content section-content--full">
                                <div class="latest-merchant-wrapper">
                                    <p class="h1 mb--lg">Similar Brands</p>
                                    <div class="tag-link-grid">
                                        <a href="/discount-code-renogy.html" class="tag-link"title='Discount Code Renogy'>Renogy</a>
                                        <a href="/discount-code-zanussi.html" class="tag-link"title='Discount Code Zanussi'>Zanussi</a>
                                        <a href="/discount-code-hughes-rental.html" class="tag-link"title='Discount Code Hughes Rental'>Hughes Rental</a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section> --}}
                        @include('frontend.recently_update_brand')
                    </section>
                </div>
            </section>
            <section class="section-content section-content--full">
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
                                    We use a third party provider, MailUp, to deliver our newsletter. We gather statistics
                                    based on email openings and
                                    clicks using industry standard technologies to help us monitor and improve our
                                    newsletter. For more information,
                                    please see our <a href="/privacy-policy" target="_blank">privacy notice</a>.
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </section>

        </main>
    </body>

    </html>
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
