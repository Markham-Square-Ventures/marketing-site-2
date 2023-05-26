@isset($href)
    <a href="{{ $href }}" target="{{ $target ?? '_self' }}" class="col-span-2 md:col-span-1 group">
        <img src="{{ $src }}" alt="{{ $alt }}"
            class="w-full h-auto group-hover:scale-[1.025] transition-slow">
        @if (isset($title) || isset($subtitle))
            <div class="mt-5">
                @isset($title)
                    <h2
                        class="text-7 text-white -tracking-[1px] leading-[100%] relative inline before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-white before:origin-top-left before:scale-x-0 group-hover:before:scale-x-100 before:transition-slow">
                        {{ $title }}</h2>
                @endisset
                @isset($subtitle)
                    <p class="mt-2 text-5 text-neutral-200 -tracking-[1px] leading-[100%] font-light">{{ $subtitle }}
                    </p>
                @endisset
            </div>
        @endif
    </a>
@else
    <div class="col-span-2 md:col-span-1">
        <img src="{{ $src }}" alt="{{ $alt }}" class="w-full h-auto transition-slow">
        @if (isset($title) || isset($subtitle))
            <div class="mt-5">
                @isset($title)
                    <h2 class="text-7 text-white -tracking-[1px] leading-[100%] relative inline">
                        {{ $title }}</h2>
                @endisset
                @isset($subtitle)
                    <p class="mt-2 text-5 text-neutral-200 -tracking-[1px] leading-[100%] font-light">
                        {{ $subtitle }}
                    </p>
                @endisset
            </div>
        @endif
    </div>
@endisset
