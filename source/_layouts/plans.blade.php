<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="scroll-smooth">

<head>
    <!-- /* The essentials */ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="{{ $page->getUrl() }}">
    @include('_partials.seo', [
        'title' => $page->seo_title,
        'description' => $page->seo_description,
        'image' => $page->seo_img,
        'image_alt' => $page->seo_img_alt,
        'site_name' => $page->seo_site_name,
    ])

    <link rel="apple-touch-icon" sizes="57x57"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180"
        href="/assets/images/favicon-leverage/{{ $page->color }}/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"
        href="/assets/images/favicon-leverage/{{ $page->color }}/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32"
        href="/assets/images/favicon-leverage/{{ $page->color }}/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="/assets/images/favicon-leverage/{{ $page->color }}/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="/assets/images/favicon-leverage/{{ $page->color }}/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/favicon-leverage/{{ $page->color }}/manifest.json">
    <meta name="msapplication-TileColor" content="#FF5200">
    <meta name="msapplication-TileImage"
        content="/assets/images/favicon-leverage/{{ $page->color }}/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/thin.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/light.min.js', 'assets/build') }}"></script>
    <script defer src="{{ mix('js/fontawesome.min.js', 'assets/build') }}"></script>

    <script>
        (function(w, r) {
            w._rwq = r;
            w[r] = w[r] || function() {
                (w[r].q = w[r].q || []).push(arguments)
            }
        })(window, 'rewardful');
    </script>
    <script async src='https://r.wdfl.co/rw.js' data-rewardful='10b722'></script>
</head>

<body class="text-gray-900 font-primary antialiased selection:bg-{{ $page->color }}-400 selection:text-white">
    <section id="pricing" class="bg-{{ $page->color }}-50 min-h-screen flex justify-center items-center">
        <div class="px-6 md:px-10 2xl:px-0 w-full lg:max-w-screen-2xl lg:mx-auto py-12">
            <div class="max-w-lg mx-auto flex flex-col items-center">
                <a href="{{ $page->getUrl() }}" class="flex-shrink-0 md:order-none">
                    <img src="{{ $page->logo_path }}" alt="The Markham Square logo" class="h-8 xl:h-10">
                </a>
                <h2
                    class="text-10 md:text-12 font-medium text-center relative -tracking-[2.5px] text-gray-900 leading-none mt-10">
                    Choose a plan that suits your needs
                </h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 mt-16">
                @foreach ($page->plans as $plan)
                    <div class="bg-white border-2 border-{{ $page->color }}-200 p-10 flex flex-col -m-px">
                        <h2 class="text-6 font-medium text-gray-900 -tracking-[-0.5px] leading-snug">
                            {{ $plan[0] }}
                        </h2>
                        <p class="mt-1 text-4 text-gray-700 -tracking-[-0.5px] leading-snug">{{ $plan[1] }}
                        </p>
                        <h3 class="mt-8 text-10 font-medium text-gray-900">
                            ${{ $plan[2] }}<span class="font-normal text-4 text-gray-700">/month</span>
                        </h3>
                        <p class="mt-1 text-3 text-gray-700 -tracking-[-0.5px] leading-snug">{{ $plan[3] }}
                        </p>
                        <button data-plan="{{ $plan[4] }}" target="_blank"
                            class="js-stripe-button -tracking-[0.5px] text-5 px-6 py-4 bg-{{ $page->color }}-400 text-white inline-flex items-center justify-center gap-4 mt-8 hover:bg-{{ $page->color }}-500 transition-slow">
                            Sign up
                            <i class="fa-light
                            fa-arrow-right-long h-5 w-5"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</body>

</html>
