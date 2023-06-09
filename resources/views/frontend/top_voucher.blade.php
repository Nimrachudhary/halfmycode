@extends('layouts.frontend.app')
@section('front-content')

    <body class="template">
        <div class="area area--over-header">
        </div>

        <div class="area area--sub-header">
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">Halfmycode</a>
                    <a href="/all-categories" target="_self">Top Voucher</a>
                    {{-- <span>{{ $category[0]->name }}</span> --}}
                </nav>
            </div>
        </div>
        <main class="area area--main-content">
            <section class='pt--xl pt--md-mobile'>
                <div class='container no-gap-mobile'>
                    <section class='section-content section-content--full'>
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

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-content__page-content">
                            <div class="filter-button-wrapper mb--xs-mobile mb--lg">
                                <div class="filter-button-grid">

                                </div>
                            </div>
                            <div class="merchant-deal-wrapper">
                                <div class="grid-1 grid-gap-half-mobile" id="deals">
                                    @foreach ($showcoupon as $coupon)
                                        <article class="merchant-deal" data-dropdown data-deal-code id="2864363">
                                            <section class="merchant-deal__body">
                                                <div class="merchant-deal__shoutout">

                                                    <picture>
                                                        <img src="{{ asset('images/' . $coupon->store_image) }}" width="300"
                                                            height="190" class="img-fluid" fetchpriority="high">
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
                                                            <a class="btn btn-offer" href="{{ $coupon->Affilate_Link }}"
                                                                target="_blank"
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
                                                           />
                                                        Expiry Date:

                                                        {{ date('d-m-Y', strtotime($coupon->expiry_date)) }}

                                                    </div>

                                                </div>
                                            </section>

                                        </article>
                                    @endforeach
                                </div>

                            </div>
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
