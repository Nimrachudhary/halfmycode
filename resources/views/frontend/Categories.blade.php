
@extends('layouts.frontend.app')
@section('front-content')

<body class="template">

    <div class="area area--over-header">
    </div>
    <main class="area area--main-content">
        <section class="mt--xl overflow-hidden">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="section-content__page-content">
                        <div class="all-categories-wrapper">
                            <div class="text-center-desktop">
                                <h2 class="mb--lg">Shop by Category</h2>
                                <h3>Save up to 90% with our vouchers and deals</h3>
                            </div>
                            {{-- @foreach ($category as $category) --}}
                            <div class="all-categories-grid pt--xl mb-lg pb--lg">
                                @foreach ($category as $category)
                                <div class="all-categories-item">
                                    <a href="/categories/{{ $category->slug }}">
                                        <picture class="all-categories-item__image">
                                            {{-- <source srcset="https://cdn.bravo-savings-network.com/cdn2/category/sm/clothing.webp" type="image/webp"> --}}

                                                {{-- <img src="{{ asset('images') . '/' . $categorie->image }}"class="img-responsive lazy" /> --}}
                                            <img class="all-categories-item__image" src="{{ asset('images') . '/' . $category->image }}" type="image/jpg" alt="Clothing" loading="lazy" width="270" height="140" />
                                        </picture>
                                        <h3 class="all-categories-item__name">{{ $category->name }}</h3>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </section>

        <section class="mt--lg">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="latest-merchant-wrapper">
                        <p class="h2 mb--lg">Recently updated brands</p>
                        <div class="tag-link-grid">
                            <a href="/discount-code-vans.html" class="tag-link"
                                title='Discount Code Vans'>Vans</a>
                                <a href="/discount-code-mobilescouk.html"
                                class="tag-link" title='Discount Code Mobiles.co.uk'>Mobiles.co.uk</a>
                                <a
                                href="/discount-code-the-works.html" class="tag-link"
                                title='Discount Code The Works'>The Works</a>
                            </div>
                    </div>
                </section>
            </div>
        </section>

        <section class="mt--xxl">
            <div class="container">
                <section class="section-content section-content--full">
                    <div class="our-numbers-wrapper">
                        <p class="h2 text-center mb--xl">HALFMYCODE&#x27;s stats</p>
                        <div class="our-numbers-grid">
                            <div class="our-number">
                                <img src="https://cdn.bravo-savings-network.com/cdn2/icons/values-users.svg"
                                    alt="icon users" loading="lazy" class="img-fluid our-number__img"
                                    width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>4,000,000</strong>
                                    users
                                </div>
                            </div>

                            <div class="our-number">
                                <img src="https://cdn.bravo-savings-network.com/cdn2/icons/values-boutiques.svg"
                                    alt="icon boutiques" loading="lazy" class="img-fluid our-number__img"
                                    width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>6,000+</strong>
                                    brands
                                </div>
                            </div>

                            <div class="our-number">
                                <img src="https://cdn.bravo-savings-network.com/cdn2/icons/values-codes.svg"
                                    alt="icon codes" loading="lazy" class="img-fluid our-number__img"
                                    width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>150,000+</strong>
                                    coupons
                                </div>
                            </div>

                            <div class="our-number">
                                <img src="https://cdn.bravo-savings-network.com/cdn2/icons/values-verified.svg"
                                    alt="icon verified" loading="lazy" class="img-fluid our-number__img"
                                    width="174" height="140" />
                                <div class="our-number__text">
                                    <strong>98%</strong>
                                    verified
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </main>
</body>
</html>
@endsection
