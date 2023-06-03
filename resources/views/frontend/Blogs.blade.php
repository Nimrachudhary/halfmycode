@extends('layouts.frontend.app')
@section('front-content')

    <body class='template'>
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCMWLD5" height="0" width="0"
                style="display:none;visibility:hidden"></iframe></noscript>
        <div class='area area--over-header'>
        </div>

        <div class='area area--sub-header'>
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">Halfmycode</a>
                    <span>Blog</span>
                </nav>
            </div>
        </div>
        <main class='area area--main-content'>
            <section class='mt--xl'>
                <div class='container'>
                    <section class='section-content section-content--full'>
                        <div class='section-content__page-content'>
                            <h1 class='font-bold'>Our top posts and shopping tips</h1>
                        </div>
                    </section>
                </div>
            </section>
            <section class="mt--lg overflow-hidden">
                <div class="container">
                    <section class="section-content section-content--full">
                        <div class="section-content__page-content">
                            <div class="all-blog-wrapper grid-1 grid-2-md grid-3-lg pb">
                                @foreach ($blogs as $blog)
                                    @if ($blog->status == '1')
                                        <article class='blog-card' data-href='/subblog/{{ $blog->id }}'>
                                            <div class='blog-card__header'>
                                                <picture class="img-fluid">
                                                    <img class="img-fluid" src="{{ asset('images') . '/' . $blog->image }}"
                                                        type="image/jpeg" alt="Make Mother’s Day memorable" loading="lazy"
                                                        width="750" height="300" />
                                                </picture>
                                            </div>
                                            <div class='blog-card__content'>
                                                <h2 class='blog-card__title'>
                                                    <a href='/blog/{{ $blog->slug }}'>
                                                        {{ $blog->name }}
                                                    </a>
                                                </h2>
                                                <div class='blog-card__footer'>
                                                    <div class='blog-card__date'> {{ $blog->date }}</div>

                                                </div>
                                            </div>
                                            <div class='blog-card__cta'>
                                                Read the full post
                                            </div>
                                        </article>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            {{-- <section class="mt--xl">
                <div class="container">
                    <section class="section-content section-content--full">
                        <div class="pagination">
                            <a class="pagination__link pagination__nav--disabled" href='/blog'>
                                <svg width="10" height="18" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 9.991l6.502 7.414c.414.472 1.085.472 1.498 0a1.33 1.33 0 000-1.708l-5.754-6.56L9 2.579A1.33 1.33 0 009 .871C8.587.399 7.916.399 7.502.87L1 8.284c-.207.236-.31.545-.31.854 0 .309.103.618.31.853z"
                                        fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </a>

                            <a href="/blog" class="pagination__link pagination__current">1</a>

                            <a href="?page&#x3D;2" class="pagination__link ">2</a>

                            <a href="?page&#x3D;3" class="pagination__link ">3</a>

                            <a class="pagination__link " href='?page&#x3D;2'>
                                <svg width="10" height="18" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 8.284L2.498.871C2.084.4 1.413.4 1 .871a1.33 1.33 0 000 1.707l5.754 6.56L1 15.698a1.33 1.33 0 000 1.707c.413.472 1.084.472 1.498 0L9 9.992c.207-.236.31-.545.31-.854 0-.309-.103-.618-.31-.854z"
                                        fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                            </a>
                        </div>
                    </section>
                </div>
            </section> --}}
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
        <script src='/commons.6713daff34af50ea2430.js' async defer></script>
        <script src="/newsletter.b384a0d06adac3eddd96.js" async defer></script>
        <link href="/additional.609e4b424f26855115e1.css" rel="stylesheet" media="print" onload="this.media='all'" />
    </body>

    </html>
@endsection
