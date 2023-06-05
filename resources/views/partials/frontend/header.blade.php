<header class="area area--header sticky-top">

    <div class="bg-brand">
        <div class="container">
            <nav class="main-header" data-dropdown data-dropdown-lock-scroll>
                <button class="header-burger-menu" alt="menu" aria-label="open menu"
                    data-dropdown-trigger=".menu-mobile, .mobile-menu-backdrop">
                    <svg width="29" height="21" xmlns="http://www.w3.org/2000/svg">
                        <defs />
                        <g fill="#FFF" fill-rule="nonzero">
                            <path
                                d="M27.867 9H1.133C.507 9 0 9.672 0 10.5S.507 12 1.133 12h26.734c.626 0 1.133-.672 1.133-1.5S28.493 9 27.867 9zM27.867 0H1.133C.507 0 0 .672 0 1.5S.507 3 1.133 3h26.734C28.493 3 29 2.328 29 1.5S28.493 0 27.867 0zM27.867 18H1.133C.507 18 0 18.672 0 19.5S.507 21 1.133 21h26.734c.626 0 1.133-.672 1.133-1.5s-.507-1.5-1.133-1.5z" />
                        </g>
                    </svg>
                </button>
                <div class="menu-mobile">
                    <!-- BACKDROP (keep it on top) -->
                    <div class="menu-mobile__backdrop" data-dropdown-closer></div>

                    <!-- REAL MENU WRAPPER -->
                    <div class="menu-mobile__inner">
                        <!-- HEADER -->
                        <section class="menu-mobile__header">
                            <a style="text-decoration: none" href="/"
                                title="Halfmycode"class="menu-mobile__logo logo--uk"
                                style="text-decoration: none">HALFMYCODE</a>
                            <button class="menu-mobile__close btn-plain" data-dropdown-closer>
                                <svg width="23" height="23" xmlns="http://www.w3.org/2000/svg">
                                    <defs />
                                    <g fill="none" fill-rule="evenodd">
                                        <g fill="currentColor" fill-rule="nonzero">
                                            <path
                                                d="M19.891.987L.987 19.891c-.442.443-.326 1.276.26 1.862.586.586 1.42.702 1.862.26L22.013 3.109c.442-.443.326-1.276-.26-1.862-.586-.586-1.42-.702-1.862-.26z" />
                                            <path
                                                d="M22.013 19.891L3.109.987c-.443-.442-1.276-.326-1.862.26-.586.586-.702 1.42-.26 1.862l18.904 18.904c.443.442 1.276.326 1.862-.26.586-.586.702-1.42.26-1.862z" />
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </section>

                        <!-- ALL MENUS -->
                        <section class="menu-mobile__body">
                            <nav class="menu-mobile__top-events">
                                <a style="text-decoration: none" href="/special" class="menu-mobile__item">Special
                                    events</a>
                                <a style="text-decoration: none" href='/topvoucher' class="menu-mobile__item">Top
                                    Vouchers</a>
                            </nav>
                            <nav class="menu-mobile__navigation" data-accordion>
                                <div data-dropdown>
                                    <!-- TOP NEGOZI -->
                                    <button class="menu-mobile__item menu-mobile__item--dropdown" aria-expanded="false"
                                        aria-controls="mobile-menu-top-merchant"
                                        data-dropdown-trigger="#mobile-menu-top-merchant">
                                        <img class="menu-mobile__item__image"
                                            src="https://cdn.bravo-savings-network.com/cdn2/icons/menu-icon-top-merchants.svg"
                                            loading="lazy" width="20" height="20" />Top brands
                                    </button>
                                    <nav id="mobile-menu-top-merchant" class="menu-mobile__sub-wrapper"
                                        aria-hidden="true">
                                        <?php
                                        $chunks = $recently_update_brand->chunk(8);
                                        ?>
                                        @foreach ($chunks as $key => $chunk)
                                            @foreach ($chunk as $store)
                                                <a style="text-decoration: none" href="/store/{{ $store->slug }}"
                                                    class="menu-mobile__sub-item">
                                                    <picture class="top-menu__dropdown__menu-item__image">
                                                        {{-- <source
                                                            srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo@2x.webp 2x"
                                                            type="image/webp"> --}}
                                                        <img class="top-menu__dropdown__menu-item__image"
                                                            src="{{ asset('images') . '/' . $store->image }}"
                                                            {{-- srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo@2x.png 2x" --}} type="image/png" alt="SHEIN"
                                                            loading="lazy" width="90" height="45" />
                                                    </picture> {{ $store->name }}
                                                </a>
                                            @endforeach
                                        @endforeach
                                    </nav>
                                </div>
                                <!--  mob view CATEGORIE -->
                                <div data-dropdown>
                                    <button class="menu-mobile__item menu-mobile__item--dropdown" aria-expanded="false"
                                        aria-controls="mobile-menu-categories"
                                        data-dropdown-trigger="#mobile-menu-categories">
                                        <img class="menu-mobile__item__image"
                                            src="https://cdn.bravo-savings-network.com/cdn2/icons/menu-icon-categories.svg"
                                            loading="lazy" width="20" height="20" />
                                        Categories
                                    </button>



                                    <nav id="mobile-menu-categories" class="menu-mobile__sub-wrapper"
                                        aria-hidden="true">
                                        <!-- item category -->
                                        @foreach ($menu_categories as $category)
                                            <a style="text-decoration: none" href="/categories/{{ $category->slug }}"
                                                class="top-menu__dropdown__menu-item">
                                                {{ $category->name }}
                                            </a> <!-- item category -->
                                        @endforeach
                                        <a style="text-decoration: none" href="/all-categories"
                                            class="menu-mobile__sub-item font-bold">
                                            All Categories
                                        </a>
                                    </nav>
                                </div>
                                {{-- end mob view  categories --}}
                                <a style="text-decoration: none" href="/stores" class="menu-mobile__item">
                                    <img class="menu-mobile__item__image"
                                        src="https://cdn.bravo-savings-network.com/cdn2/icons/menu-icon-brands-az.svg"
                                        loading="lazy" width="20" height="20" />
                                    Brands A-Z
                                </a>
                                <!-- BLOG -->
                            </nav>
                        </section>
                    </div>
                </div>
                <a style="text-decoration: none" href="/" title="Halfmycode" class="header-logo header-logo--uk"
                    style="text-decoration: none"><b style="margin: 21px;">HALFMYCODE</b></a>
                <button class="header-button-search" alt="Search" data-toggle="modal" data-target="#search_modal"
                    aria-label="search">
                    <svg width="24" height="24" viewBox="0 0 515.558 515.558"
                        xmlns="http://www.w3.org/2000/svg">
                        <defs />
                        <path fill="currentColor"
                            d="M378.344 332.78c25.37-34.645 40.545-77.2 40.545-123.333C418.889 93.963 324.928.002 209.444.002S0 93.963 0 209.447s93.961 209.445 209.445 209.445c46.133 0 88.692-15.177 123.337-40.547l137.212 137.212 45.564-45.564L378.344 332.78zm-168.899 21.667c-79.958 0-145-65.042-145-145s65.042-145 145-145 145 65.042 145 145-65.043 145-145 145z" />
                    </svg>
                </button>
                <ul class="main-header-nav mb-0">
                    <li>
                        <a style="text-decoration: none" href="/special">Special events</a>
                    </li>
                    <li>
                        <a style="text-decoration: none" href="/topvoucher">Top Vouchers</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    {{-- <div id="modal-search-mobile" class="modal-frame modal-search-mobile">
        <div class="modal-body">
            <button class="modal-close" data-modal-closer>
                Close
                <span>&times;</span>
            </button>
            <div class="modal-search-body-inner">
                <div class="h4 font-medium mb--sm">Search</div>
                <form class="form-search" action="" method="post">
                    <div class="form-search__inner">
                        <div class="input-btn-group">
                            <input name="search" required="required" autocomplete="off"
                                placeholder="E.g. SHEIN, Spabreaks.com" class="form-search__input"
                                data-search-input />
                            <button type="button" class="form-search__submit" aria-label="search"
                                data-search-submit><svg xmlns="http://www.w3.org/2000/svg" viewBox="-1 0 136 136.219">
                                    <path fill="currentColor"
                                        d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0" />
                                </svg>
                            </button>
                            <button type="button" class="form-search__clear" data-search-clear
                                style="display: none">
                                &times;
                            </button>
                        </div>
                        <section class="form-search__results" style="display: none">
                            <!-- results brands -->
                            <div class="search-results-items-list">
                                <!-- Search results here -->
                            </div>
                            <!-- button close desktop -->
                            <div class="search-results-close mt--lg hidden-mobile">
                                <button type="button" class="top-menu-dropdown-close" data-search-clear>
                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/close-o.svg"
                                        width="30" height="30" alt="Close" class="mr--xs"
                                        loading="lazy" />
                                    Close
                                </button>
                            </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    <div class="modal fade" id="search_modal" tabindex="-1" data-backdrop="false" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="h4 font-medium mb--sm">Search</div>
                    <form class="form-search">
                        <div class="form-search__inner">
                            <div class="input-btn-group">
                                <input name="search" autocomplete="off"id="text__search"
                                    placeholder="E.g. SHEIN, Spabreaks.com"
                                    class="form-search__input"autocomplete="off" data-search-input />
                                <button type="button" class="form-search__submit" aria-label="search"
                                    data-search-submit>
                                    <svg xmlns="http://www.w3.org/2000/svg"viewBox="-1 0 136 136.219">
                                        <path fill="currentColor"
                                            d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0" />
                                    </svg>
                                </button>
                                <button type="button" class="form-search__clear" data-search-clear
                                    style="display: none">
                                    &times;
                                </button>
                                <div class="search_resultbox"></div>
                            </div>
                            {{-- <section class="form-search__results" style="display: none">
                            <!-- results brands -->
                            <div class="search-results-items-list">
                                <!-- Search results here -->
                            </div>
                            <!-- button close desktop -->
                            <div class="search-results-close mt--lg hidden-mobile">
                                <button type="button" class="top-menu-dropdown-close" data-search-clear>
                                    <img src="https://cdn.bravo-savings-network.com/cdn2/icons/close-o.svg"
                                        width="30" height="30" alt="Close" class="mr--xs"
                                        loading="lazy" />
                                    Close
                                </button>
                            </div>
                        </section> --}}
                        </div>
                    </form>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
            </div>
        </div>
    </div>

    <section class="top-menu-wrapper">
        <div class="container">
            <nav class="top-menu" data-accordion>
                <section class="top-menu__dropdown" data-dropdown>
                    <div class="top-menu__link" data-dropdown-trigger=".top-menu__dropdown__menu"><a href="#"
                            style="text-decoration: none">Top brands
                            <svg width="9" height="5" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89.105a.39.39 0 00-.533 0L4.5 4.13.643.105a.39.39 0 00-.533 0 .349.349 0 000 .51l4.105 4.282A.382.382 0 004.5 5a.382.382 0 00.285-.103L8.89.614a.348.348 0 000-.509z"
                                    fill="currentColor" fill-rule="nonzero" />
                            </svg>
                        </a></div>
                    <div class="top-menu__dropdown__menu">
                        <div class="grid-4">
                            <?php
                            $chunks = $recently_update_brand->chunk(8);
                            ?>
                            @foreach ($chunks as $key => $chunk)
                                @if ($key < 4)
                                    <div>
                                        @foreach ($chunk as $store)
                                            <a style="text-decoration: none" href="/store/{{ $store->slug }}"
                                                class="top-menu__dropdown__menu-item">
                                                <picture class="top-menu__dropdown__menu-item__image">
                                                    {{-- <source
                                            srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo.webp, https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo@2x.webp 2x"
                                            type="image/webp"> --}}
                                                    <img class="top-menu__dropdown__menu-item__image"
                                                        src="{{ asset('images') . '/' . $store->image }}"
                                                        {{-- srcset="https://cdn.bravo-savings-network.com/cdn2/merchant/logo/rect/sm/shein-20181012134428-logo@2x.png 2x" --}} type="image/png" alt="SHEIN"
                                                        loading="lazy" width="90" height="45" />
                                                </picture> {{ $store->name }}
                                            </a>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <button class="top-menu-dropdown-close" data-dropdown-closer><img
                                src="https://cdn.bravo-savings-network.com/cdn2/icons/close-o.svg" width="30"
                                height="30" alt="Close" class="mr--xs" loading="lazy" />Close</button>
                    </div>
                    <div class="menu-backdrop" data-dropdown-closer></div>
                </section>

                {{-- laptop view Categories --}}

                <section class="top-menu__dropdown top-menu__dropdown--small" data-dropdown>
                    <div class="top-menu__link" data-dropdown-trigger=".top-menu__dropdown__menu">
                        <a style="text-decoration: none" href="#" style="text-decoration: none">Categories <svg
                                width="9" height="5" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.89.105a.39.39 0 00-.533 0L4.5 4.13.643.105a.39.39 0 00-.533 0 .349.349 0 000 .51l4.105 4.282A.382.382 0 004.5 5a.382.382 0 00.285-.103L8.89.614a.348.348 0 000-.509z"
                                    fill="currentColor" fill-rule="nonzero" />
                            </svg>
                        </a>
                    </div>
                    <div class="top-menu__dropdown__menu">
                        <div>
                            @foreach ($menu_categories as $category)
                                <a style="text-decoration: none" href="/categories/{{ $category->slug }}"
                                    class="top-menu__dropdown__menu-item">
                                    {{ $category->name }}
                                </a>
                            @endforeach
                            <!-- view all -->
                            <div class="mt--lg text-right">
                                <a style="text-decoration: none" href="/all-categories"
                                    class="view-all-categories font-bold">
                                    All Categories
                                    <svg width="5" height="9" class="ml--sm"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M.105.11a.39.39 0 000 .533L4.13 4.5.105 8.357a.39.39 0 000 .533c.141.147.369.147.51 0l4.282-4.105A.382.382 0 005 4.5a.382.382 0 00-.103-.285L.614.11a.348.348 0 00-.509 0z"
                                            fill="#303030" fill-rule="nonzero" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-backdrop" data-dropdown-closer>
                    </div>
                </section>
                {{--  Categories end --}}

                {{-- a-z brand --}}
                <div class="top-menu__link">
                    <a style="text-decoration: none" href="/stores" style="text-decoration: none">Brands A-Z</a>
                </div>
                {{--  end a-z brand --}}

                {{-- search bar --}}
                <section class="top-menu__search searchbox">
                    <form class="form-search">
                        <div class="form-search__inner">
                            <div class="input-btn-group">
                                <input name="search" autocomplete="off"id="text__search"
                                    placeholder="E.g. SHEIN, Spabreaks.com"
                                    class="form-search__input"autocomplete="off" data-search-input />
                                <button type="button" class="form-search__submit" aria-label="search"
                                    data-search-submit>
                                    <svg xmlns="http://www.w3.org/2000/svg"viewBox="-1 0 136 136.219">
                                        <path fill="currentColor"
                                            d="M93.148 80.832c16.352-23.09 10.883-55.062-12.207-71.41S25.88-1.461 9.531 21.632C-6.816 44.723-1.352 76.693 21.742 93.04a51.226 51.226 0 0055.653 2.3l37.77 37.544c4.077 4.293 10.862 4.465 15.155.387 4.293-4.075 4.465-10.86.39-15.153a9.21 9.21 0 00-.39-.39zm-41.84 3.5c-18.245.004-33.038-14.777-33.05-33.023-.004-18.246 14.777-33.04 33.027-33.047 18.223-.008 33.008 14.75 33.043 32.972.031 18.25-14.742 33.067-32.996 33.098h-.023zm0 0" />
                                    </svg>
                                </button>
                                <button type="button" class="form-search__clear" data-search-clear
                                    style="display: none">
                                    &times;
                                </button>
                                <div class="search_resultbox"></div>
                            </div>
                            {{-- <section class="form-search__results" style="display: none">
                                <!-- results brands -->
                                <div class="search-results-items-list">
                                    <!-- Search results here -->
                                </div>
                                <!-- button close desktop -->
                                <div class="search-results-close mt--lg hidden-mobile">
                                    <button type="button" class="top-menu-dropdown-close" data-search-clear>
                                        <img src="https://cdn.bravo-savings-network.com/cdn2/icons/close-o.svg"
                                            width="30" height="30" alt="Close" class="mr--xs"
                                            loading="lazy" />
                                        Close
                                    </button>
                                </div>
                            </section> --}}
                        </div>
                    </form>
                </section>
                {{-- end search bar --}}
            </nav>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.header-button-search').click(function() {
                $('#modal-search-mobile').show();
            });
        });
    </script>
</header>
