<nav class="bg-neutral-800 bg-tile bg-repeat px-7 lg:px-0 pt-10 pb-20 flex justify-center">
    <div class="w-full max-w-[1000px] flex flex-col gap-5 sm:gap-0 sm:flex-row sm:justify-between">
        <ul class="flex items-center gap-10">
            <li class="flex-shrink-0">
                <a href="/">
                    <img src="/assets/images/mksq-logo.svg" alt="Logo" class="h-12 w-auto ">
                </a>
            </li>
            <li class="hidden md:block">
                <a href="/about"
                    class="{{ $page->isSelected('about') ? 'text-white before:scale-x-100' : 'text-neutral-200' }} text-4 relative inline before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-white before:origin-top-left before:scale-x-0 hover:before:scale-x-100 before:transition-slow">About</a>
            </li>
            <li class="hidden md:block">
                <a href="/blog"
                    class="{{ $page->isSelected('blog') ? 'text-white before:scale-x-100' : 'text-neutral-200' }} text-4 relative inline before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-white before:origin-top-left before:scale-x-0 hover:before:scale-x-100 before:transition-slow">Blog</a>
            </li>
        </ul>
        <ul class="flex items-center gap-10 md:gap-5">
            <li class="md:hidden">
                <a href="/about"
                    class="{{ $page->isSelected('about') ? 'text-white before:scale-x-100' : 'text-neutral-200' }} text-4 relative inline before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-white before:origin-top-left before:scale-x-0 hover:before:scale-x-100 before:transition-slow">About</a>
            </li>
            <li class="md:hidden">
                <a href="/blog"
                    class="{{ $page->isSelected('blog') ? 'text-white before:scale-x-100' : 'text-neutral-200' }} text-4 relative inline before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-white before:origin-top-left before:scale-x-0 hover:before:scale-x-100 before:transition-slow">Blog</a>
            </li>
            <li class="md:hidden">
                <a href="https://calendly.com/nick-1330/markham-square-inquiry" target="_blank"
                    class="js-book-call text-4 text-neutral-200 relative inline before:content-[''] before:absolute before:block before:w-full before:h-[0.5px] before:bottom-0 before:left-0 before:bg-white before:origin-top-left before:scale-x-0 hover:before:scale-x-100 before:transition-slow">Book
                    Call</a>
            </li>
            <li class="hidden md:block flex-shrink-0">
                <a href="https://calendly.com/nick-1330/markham-square-inquiry" target="_blank"
                    class="js-book-call text-4 text-white px-4 py-3.5 border-[0.5px] border-white hover:bg-white hover:border-white hover:text-neutral-950 transition-slow">Book
                    Call</a>
            </li>
            <li class="hidden md:block flex-shrink-0">
                <a href="https://forms.reform.app/1e147r/digital-audit/z3qeml" target="_blank"
                    class="js-book-audit text-4 text-neutral-950 px-4 py-3.5 border-[0.5px] border-white bg-white hover:bg-neutral-200 hover:border-neutral-200 transition-slow">Free
                    Digital
                    Audit</a>
            </li>
        </ul>
    </div>
</nav>
