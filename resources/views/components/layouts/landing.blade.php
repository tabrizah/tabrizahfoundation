<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="{{ env('APP_KEYWORD') }}">
    <meta name="author" content="{{ env('APP_NAME') }}">
    <meta name="description" content="{{ env('APP_DESCRIPTION ') }}">
    <meta property="og:title" content="{{ env('APP_NAME') }}">
    <meta property="og:description"
        content="{{ env('APP_DESCRIPTION ') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('assets_landing') }}/assets/images/common/og-image.jpg">

    <link rel="stylesheet"
        href="{{ asset('assets_landing') }}/assets/vendors/liquid-icon/lqd-essentials/lqd-essentials.min.css">
    <link rel="stylesheet" href="{{ asset('assets_landing') }}/assets/css/theme.min.css">
    <link rel="stylesheet" href="{{ asset('assets_landing') }}/assets/css/utility.min.css">
    <link rel="stylesheet" href="{{ asset('assets_landing') }}/assets/css/demo/start-hub-2.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;700&display=swap" rel="stylesheet">

    <title> {{ env('APP_NAME') }}</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('GOOGLE_ANALYTIC') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '{{ env("GOOGLE_ANALYTIC") }}');
    </script>
</head>

<body data-mobile-nav-breakpoint="1199" data-mobile-nav-style="modern" data-mobile-nav-scheme="dark"
    data-mobile-nav-trigger-alignment="right" data-mobile-header-scheme="gray" data-mobile-logo-alignment="default"
    data-mobile-header-builder="true" data-overlay-onmobile="true" data-disable-animations-onmobile="true">

    {{ $slot }}

    {{ $contactModal }}

    <script src="{{ asset('assets_landing') }}/assets/vendors/jquery.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/fastdom/fastdom.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/fresco/js/fresco.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/lity/lity.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/gsap/minified/gsap.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/gsap/utils/CustomEase.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/gsap/minified/DrawSVGPlugin.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/gsap/minified/ScrollTrigger.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/draw-shape/liquidDrawShape.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/animated-blob/liquidAnimatedBlob.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/fontfaceobserver.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/tinycolor-min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/gsap/utils/SplitText.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/isotope/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/isotope/packery-mode.pkgd.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/flickity/flickity.pkgd.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/draggabilly.pkgd.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/vendors/particles.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/js/liquid-gdpr.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/js/theme.min.js"></script>
    <script src="{{ asset('assets_landing') }}/assets/js/liquid-ajax-contact-form.min.js"></script>

    <!-- Start custom cursor -->
    <div class="lqd-cc lqd-cc--inner fixed pointer-events-none"></div>
    <div
        class="lqd-cc--el lqd-cc-solid lqd-cc-explore flex items-center justify-center rounded-full fixed pointer-events-none">
        <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
        <div class="lqd-cc-solid-txt flex justify-center text-center relative">
            <div class="lqd-cc-solid-txt-inner">Explide</div>
        </div>
    </div>
    <div
        class="lqd-cc--el lqd-cc-solid lqd-cc-drag flex items-center justify-center rounded-full fixed pointer-events-none">
        <div class="lqd-cc-solid-bg flex absolute lqd-overlay"></div>
        <div class="lqd-cc-solid-ext lqd-cc-solid-ext-left inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                style="width: 1em; height: 1em;">
                <path fill="currentColor"
                    d="M19.943 6.07L9.837 14.73a1.486 1.486 0 0 0 0 2.25l10.106 8.661c.96.826 2.457.145 2.447-1.125V7.195c0-1.27-1.487-1.951-2.447-1.125z">
                </path>
            </svg>
        </div>
        <div class="lqd-cc-solid-txt flex justify-center text-center relative">
            <div class="lqd-cc-solid-txt-inner">Drag</div>
        </div>
        <div class="lqd-cc-solid-ext lqd-cc-solid-ext-right inline-flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                style="width: 1em; height: 1em;">
                <path fill="currentColor"
                    d="M11.768 25.641l10.106-8.66a1.486 1.486 0 0 0 0-2.25L11.768 6.07c-.96-.826-2.457-.145-2.447 1.125v17.321c0 1.27 1.487 1.951 2.447 1.125z">
                </path>
            </svg>
        </div>
    </div>
    <div class="lqd-cc--el lqd-cc-arrow inline-flex items-center fixed top-0 left-0 pointer-events-none">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M60.4993 0V4.77005H8.87285L80 75.9207L75.7886 79.1419L4.98796 8.35478V60.4993H0V0H60.4993Z" />
        </svg>
    </div>
    <div class="lqd-cc--el lqd-cc-custom-icon rounded-full fixed pointer-events-none">
        <div class="lqd-cc-ci inline-flex items-center justify-center rounded-full relative">
            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                style="width: 1em; height: 1em;">
                <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"
                    d="M16.03 6a1 1 0 0 1 1 1v8.02h8.02a1 1 0 1 1 0 2.01h-8.02v8.02a1 1 0 1 1-2.01 0v-8.02h-8.02a1 1 0 1 1 0-2.01h8.02v-8.01a1 1 0 0 1 1.01-1.01z">
                </path>
            </svg>
        </div>
    </div>
    <div class="lqd-cc lqd-cc--outer fixed top-0 left-0 pointer-events-none"></div>
    <!-- End custom cursor -->

    <template id="lqd-temp-sticky-header-sentinel">
        <div class="lqd-sticky-sentinel invisible absolute pointer-events-none"></div>
    </template>
    <div class="lity hidden" role="dialog" aria-label="Dialog Window (Press escape to close)" tabindex="-1"
        data-modal-type="default">
        <div class="lity-backdrop"></div>
        <div class="lity-wrap" data-lity-close role="document">
            <div class="lity-loader" aria-hidden="true">Loading...</div>
            <div class="lity-container">
                <div class="lity-content"></div>
            </div>
            <button class="lity-close" type="button" aria-label="Close (Press escape to close)"
                data-lity-close>&times;</button>
        </div>
    </div>

</body>

</html>
