<!DOCTYPE html>
<html lang="en-GB">

<head>
    <title>HalfmyCode:Discunt Code, Vouchers & Deals</title>
    <link href="{{ asset('/frontend/style.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://www.googletagmanager.com">
    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">
    <style>
        .search_resultbox {
            background: #fff;
            z-index: 999999;
            position: absolute;
            top: 100%;
            width: 100%;
            display: block;
            /* border: 1px solid #e8e8e8; */
            box-shadow: 0 1px 3px 0 #b3b3b3b3;
            max-height: 500px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .searchbox .icon-search {
            fill: #fff;
            font-size: 24px
        }

        #onhover:hover {
            background-color: rgb(209, 207, 207);
            color: black;
            font-weight: 700;

        }


        .searchbox input {
            height: 35px
        }
    </style>
  <?php
  $abc=App\Models\Herderdevelopermod::where(['id' => 1])->get();
  print_r($abc[0]->header_description);
  ?>
</head>



<body class="template">
    {{-- <!-- Google Tag Manager (noscript) --> --}}
    {{-- <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PCMWLD5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript> --}}
    {{-- <!-- End Google Tag Manager (noscript) --> --}}
    <div class="area area--over-header">
        <!-- CMS-OVER-HEADER -->
    </div>
    {{-- header --}}
    @include('partials.frontend.header')
    {{-- header --}}
    <!--// Content //-->
    @yield('front-content')
    <!--// Content //-->
    @include('partials.frontend.footer')


    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    {{-- <script src="https://www.addict2save.com/assets/theme/js/site.min.js"></script> --}}

    <script src="{{ url('js/main.js') }}"></script>
    <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});


        $(document).on('keyup', '#text__search', function() {
            var value = $(this).val();
            // alert(value);
            $.ajax({
                method: 'get',
                url: '{{ route('search.stores') }}?q=' + value,
                success: function(response) {
                    $('.search_resultbox').html(response);

                }
            });
        })
    </script>
    {{-- codenoo --}}
      <?php
      $abc = \App\Models\Footerdevelopermod::where(['id' => 1])->get();
      print_r($abc[0]->footer_description);
      ?>

</body>

