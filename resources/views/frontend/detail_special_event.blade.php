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
                                <img class="img-fit-cover" src="{{ asset('images') . '/' . $event->image }}" type="image/jpg"
                                    width="300" height="160" />
                            </picture>
                        </div>
                        @endforeach
                    </section>
                </div>
            </section>
               </html>
@endsection
