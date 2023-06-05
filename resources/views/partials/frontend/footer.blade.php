  {{-- footer --}}
  <style>
      .color {
          font-size: 40px;
          color: var(--gray);
      }

      .color:hover {
          color: var(--action-main);
      }
  </style>
  <footer class="area area--footer mt--xxl">
      <div class="footer-wrapper">
          <div class="container no-gap-mobile">
              <div class="footer-grid">
                  <section class="footer-brand mb-5">
                      <div class="footer-brand__inner">
                          <a style="text-decoration: none;"  href="/" title="Halfmycode" class="footer-logo logo--uk">Halfmycode
                          </a>
                      </div>
                  </section>
                  <section class="footer-links">
                      <nav>
                          <a style="text-decoration: none"  href="/special">Special events</a>
                          <a style="text-decoration: none"  href="/blogs">Blog</a>

                      </nav>
                      <nav>
                          @foreach ($menu_page as $page)
                              @if ($page->show_on == 'Footer' || $page->show_on == 'Both')

                                      <a style="text-decoration: none"  href="{{ url('pages', $page->slug) }}">{{ $page->name }}</a>

                              @endif
                          @endforeach
                      </nav>
                  </section>

                  <section class="footer-social" style="margin-top:20px; margin-left:-50px">
                      <div class="footer-social__title">Follow us</div>
                      @foreach ($menu_socials as $value)
                          @if ($value->key == 'facebook')
                              <a style="text-decoration: none"  href="{{ $value->value }}" class="fa-brands fa-facebook color icons-footer" style="font-size: 30px" target="blank"></a>
                          @endif
                          @if ($value->key == 'twitter')
                              <a style="text-decoration: none"  href="{{ $value->value }}" class="fa-brands fa-twitter color icons-footer" style="font-size: 30px" target="blank"></a>
                          @endif
                          @if ($value->key == 'instagram')
                              <a style="text-decoration: none"  href="{{ $value->value }}" class="fa-brands fa-square-instagram color icons-footer" style="font-size: 30px" target="blank"></a>
                          @endif
                          @if ($value->key == 'youtube')
                              <a style="text-decoration: none"  href="{{ $value->value }}" class="fa-brands fa-youtube color icons-footer" style="font-size: 30px" target="blank"></a>
                          @endif
                      @endforeach
                  </section>
              </div>
          </div>
          <div class='text-center-desktop text-center-mobile'>
              <p>We are paid a small commission by our partners when a purchase is made on their site via the links on
                Halfmycode.com</p>
          </div>
      </div>
      <div class="container">
          <small class="footer-legal">
              Copyright © 2023 All Rights Reserved Halfmycode.com </small>
      </div>
      <script src="{{ asset('frontend/commons.6713daff34af50ea2430.js') }}" async defer></script>
      <script src="{{ asset('frontend/slider.d4a3df1fe6840f178eb7.js') }}" defer></script>
      <script src="{{ asset('frontend/deal.ecec0443d82340bde583.js') }}" async defer></script>
      <link href="{{ asset('frontend/additional.609e4b424f26855115e1.css') }}" rel="stylesheet" media="print"
          onload="this.media='all'" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
  </footer>

  {{-- end footer --}}
