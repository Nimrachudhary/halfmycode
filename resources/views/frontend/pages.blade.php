@extends('layouts.frontend.app')
@section('front-content')


    <body class="template">
        <div class="area area--sub-header">
            <div class="container no-gap-mobile">
                <nav class="breadcrumbs pl--md-mobile">
                    <a href="/" target="_self">HALFMYCODE</a>
                    <span>{{ $page->name }}</span>
                </nav>
            </div>
        </div>
        <main class="area area--main-content">
            <section class='pt--xl'>
                <section class='section-content section-content--full'>
                    <div class="article">
                        <div class="container">
                            <h1>{{ $page->name }}</h1>
                            {!! $page->content !!}
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </body>
    </html>
@endsection
