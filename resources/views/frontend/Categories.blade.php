
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

        @include('frontend.footer_icone_stats')
    </main>
</body>
</html>
@endsection
