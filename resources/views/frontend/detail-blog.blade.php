@extends('layouts.frontend.app')
@section('front-content')

    <body class='template'>
        <div class='area area--sub-header'>
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">HALFMYCODE</a>
                    <a href="/blogs" target="_self">Blog</a>
                    <span> {{ $showsblog[0]->name }}</span>

                </nav>
            </div>
        </div>
        <main class='area area--main-content'>
            <section class="mt--xl">
                <div class="container">
                    <section class="section-content section-content--sidebar-right">
                        @foreach ($showsblog as $blogsdetail)
                            <div class="section-content__page-content">
                                <h1 class="font-bold">
                                    {{ $blogsdetail->name }}
                                </h1>
                                <article class="blog-post mb--lg">
                                    <div class="blog-post__info">
                                        <div>{{ $blogsdetail->date }}</div>
                                    </div>
                                    <div class="blog-post__image mb--lg">
                                        <picture class="">
                                            <img class="" src="{{ asset('images') . '/' . $blogsdetail->image }}"
                                                type="image/jpeg" alt="Make Mother’s Day memorable" loading="lazy"
                                                width="750" height="300" />
                                        </picture>
                                    </div>
                                    <section class="article">
                                        <p style="margin-left:0cm; margin-right:0cm">
                                            {!! $blogsdetail->description !!}
                                        </p>
                                    </section>
                                </article>
                                <div>
                                    <div class="blog-footer-wrapper">
                                        <div class="blog-footer">
                                            <div class="blog-footer__bio">
                                                <div class="pt pl--sm">
                                                    Written by <strong>Annabelle</strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            </section>

            <section class="mt--xxl">
                <div class="container">
                    <section class="section-content section-content--full">
                        <div class="category-accordion-wrapper">
                            <p class="h1 mb">Special events</p>
                            <div class="grid-1 grid-3-md">
                                <a href="/special/womens-day-deals.html" class="latest-event">
                                    <picture class="latest-event__image">
                                        <source
                                            srcset="https://cdn.bravo-savings-network.com/cdn2/events/md/womens-day.webp"
                                            type="image/webp">
                                        <img class="img-fit-cover"
                                            src="https://cdn.bravo-savings-network.com/cdn2/events/md/womens-day.jpg"
                                            type="image/jpg" alt="Women's Day" loading="lazy" width="300"
                                            height="160" />
                                    </picture> <span class="latest-event__name">Women&#x27;s Day</span>
                                    <span class="latest-event__bar"></span>
                                </a> <a href="/special/easter.html" class="latest-event">
                                    <picture class="latest-event__image">
                                        <source srcset="https://cdn.bravo-savings-network.com/cdn2/events/md/easter.webp"
                                            type="image/webp">
                                        <img class="img-fit-cover"
                                            src="https://cdn.bravo-savings-network.com/cdn2/events/md/easter.jpg"
                                            type="image/jpg" alt="Easter Offers" loading="lazy" width="300"
                                            height="160" />
                                    </picture> <span class="latest-event__name">Easter Offers</span>
                                    <span class="latest-event__bar"></span>
                                </a> <a href="/special/half-term-uk-deals.html" class="latest-event">
                                    <picture class="latest-event__image">
                                        <source srcset="https://cdn.bravo-savings-network.com/cdn2/events/md/half-term.webp"
                                            type="image/webp">
                                        <img class="img-fit-cover"
                                            src="https://cdn.bravo-savings-network.com/cdn2/events/md/half-term.jpg"
                                            type="image/jpg" alt="Half Term Deals" loading="lazy" width="300"
                                            height="160" />
                                    </picture> <span class="latest-event__name">Half Term Deals</span>
                                    <span class="latest-event__bar"></span>
                                </a>
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
           @include('frontend.recently_update_brand')
           @include('frontend.footer_icone_stats')
        </main>

        <script src='/commons.6713daff34af50ea2430.js' async defer></script>
        <script src="/newsletter.b384a0d06adac3eddd96.js" async defer></script>
        <link href="/additional.609e4b424f26855115e1.css" rel="stylesheet" media="print" onload="this.media='all'" />
    </body>

    </html>
@endsection
