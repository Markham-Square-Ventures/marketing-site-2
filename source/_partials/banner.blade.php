<!--
  Make sure you add some bottom padding to pages that include a sticky banner like this to prevent
  your content from being obscured when the user scrolls to the bottom of the page.
-->
<div x-data="{ open: true }"
  x-show="open"
  x-transition
  class="pointer-events-none fixed inset-x-0 bottom-0 sm:flex sm:justify-center sm:px-6 sm:pb-5 lg:px-8">
  <div
    class="pointer-events-auto flex items-center justify-between gap-x-6 border border-white bg-neutral-800 px-6 py-2.5 sm:py-3 sm:pl-4 sm:pr-3.5">
    <p class="text-sm leading-6 text-white">
      <a target="_blank"
        href="https://maven.com/dive/thinking-like-a-developer?utm_source=markham-square-website&utm-medium=course-landing-page&utm_campaign=mksq">
        <strong class="font-semibold">Sign up for our latest course!</strong><svg viewBox="0 0 2 2"
          class="mx-2 inline h-1 w-1 fill-current"
          aria-hidden="true">
          <circle cx="1"
            cy="1"
            r="1" />
        </svg>Thinking like a developer for designers&nbsp;<span aria-hidden="true">&rarr;</span>
      </a>
    </p>
    <button x-on:click="open = false"
      type="button"
      class="-m-1.5 flex-none p-1.5">
      <span class="sr-only">Dismiss</span>
      <svg class="h-5 w-5 text-white"
        viewBox="0 0 20 20"
        fill="currentColor"
        aria-hidden="true">
        <path
          d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
      </svg>
    </button>
  </div>
</div>