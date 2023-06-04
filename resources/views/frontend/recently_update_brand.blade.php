<section class="mt--lg">
    <div class="container">
        <section class="section-content section-content--full">
            <div class="latest-merchant-wrapper">
                <p class="h3 mb--lg">Popular brands</p>
                <div class="tag-link-grid">
                    @foreach ($recently_update_brand as $value)
                        @if ($value->recently_update == 1)
                            <a href="{{ url('/store') }}/{{ $value->slug }}" class="tag-link"
                                title='Discount Code Vans'>{{ $value->name }}</a>
                        @endif
                    @endforeach

                </div>
            </div>
        </section>
    </div>
</section>
