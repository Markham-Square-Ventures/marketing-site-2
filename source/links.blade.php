@extends('_layouts.main')

@section('body')
  <header>
    @include('_partials.nav')
    @include('_partials.hero', [
        'title' => 'Where to find us',
        'subtitle' => 'Markham Square is on the web, go find us!',
    ])
  </header>
  <main class="flex justify-center bg-neutral-800 bg-tile bg-repeat px-7 pb-20 xl:px-0">
    <ul class="w-full max-w-[1000px] space-y-4">
      <li>
        <a target="_blank"
          href="https://open.spotify.com/show/564Qu8t8tvgSCPCGO3EUo7"
          class="js-book-call transition-slow block flex w-full items-center space-x-4 rounded-lg border border-[0.5px] border-white border-white px-4 px-4 py-3.5 py-8 text-4 text-white text-white hover:border-white hover:bg-white hover:text-neutral-950">
          <svg class="h-12 w-12"
            viewBox="0 0 88 88"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M43.5938 0.65625C67.5 0.65625 87.1875 20.3438 87.1875 44.25C87.1875 68.332 67.5 87.8438 43.5938 87.8438C19.5117 87.8438 0 68.332 0 44.25C0 20.3438 19.5117 0.65625 43.5938 0.65625ZM61.1719 64.8164C62.5781 64.8164 63.8086 63.7617 63.8086 62.1797C63.8086 60.5977 63.2812 59.8945 62.2266 59.1914C49.5703 51.8086 34.9805 51.457 20.5664 54.6211C19.1602 54.9727 18.1055 55.8516 18.1055 57.6094C18.1055 59.0156 19.1602 60.4219 20.918 60.4219C21.4453 60.4219 22.3242 60.0703 23.0273 59.8945C35.6836 57.4336 48.3398 57.6094 59.4141 64.2891C59.9414 64.6406 60.4688 64.8164 61.1719 64.8164ZM65.918 53.3906C67.8516 53.3906 69.2578 51.8086 69.4336 49.875C69.4336 48.4688 68.7305 47.2383 67.3242 46.5352C58.7109 41.2617 47.6367 38.4492 36.2109 38.4492C29.0039 38.4492 23.9062 39.5039 18.9844 40.9102C17.2266 41.4375 16.3477 42.668 16.3477 44.4258C16.3477 46.3594 17.9297 47.9414 19.6875 47.9414C20.5664 47.9414 20.918 47.5898 21.7969 47.4141C36.3867 43.5469 52.7344 46.1836 63.8086 52.6875C64.3359 52.8633 65.0391 53.3906 65.918 53.3906ZM71.3672 40.0312C73.4766 40.0312 75.4102 38.2734 75.4102 35.8125C75.4102 33.7031 74.5312 32.6484 73.125 31.9453C63.457 26.1445 49.9219 23.5078 37.0898 23.5078C29.5312 23.5078 22.6758 24.3867 16.5234 26.1445C14.9414 26.6719 13.3594 27.9023 13.3594 30.3633C13.3594 32.6484 15.1172 34.582 17.4023 34.582C18.2812 34.582 19.1602 34.2305 19.6875 34.0547C34.2773 30.0117 56.6016 31.7695 69.082 39.3281C69.9609 39.6797 70.4883 40.0312 71.3672 40.0312Z"
              fill="#1AB26B" />
          </svg>
          <p class="text-6 font-medium">Spotify podcast: Oh Wait, It Clicks!</p>
        </a>
      </li>
      <li>
        <a target="_blank"
          href="https://www.youtube.com/@markhamsquare"
          class="js-book-call transition-slow block flex w-full items-center space-x-4 rounded-lg border border-[0.5px] border-white border-white px-4 px-4 py-3.5 py-8 text-4 text-white text-white hover:border-white hover:bg-white hover:text-neutral-950">
          <svg class="h-12 w-12"
            viewBox="0 0 97 68"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">

            <path
              d="M94.5039 11.2227C96.6133 18.6055 96.6133 34.4258 96.6133 34.4258C96.6133 34.4258 96.6133 50.0703 94.5039 57.6289C93.4492 61.8477 90.1094 65.0117 86.0664 66.0664C78.5078 68 48.625 68 48.625 68C48.625 68 18.5664 68 11.0078 66.0664C6.96484 65.0117 3.625 61.8477 2.57031 57.6289C0.460938 50.0703 0.460938 34.4258 0.460938 34.4258C0.460938 34.4258 0.460938 18.6055 2.57031 11.2227C3.625 7.00391 6.96484 3.66406 11.0078 2.60938C18.5664 0.5 48.625 0.5 48.625 0.5C48.625 0.5 78.5078 0.5 86.0664 2.60938C90.1094 3.66406 93.4492 7.00391 94.5039 11.2227ZM38.7812 48.6641L63.7422 34.4258L38.7812 20.1875V48.6641Z"
              fill="#FF0000" />
          </svg>

          <p class="text-6 font-medium">Youtube channel: Oh Wait, It Clicks!</p>
        </a>
      </li>
      <li>
        <a target="_blank"
          href="https://twitter.com/team_markhamsq"
          class="js-book-call transition-slow block flex w-full items-center space-x-4 rounded-lg border border-[0.5px] border-white border-white px-4 px-4 py-3.5 py-8 text-4 text-white text-white hover:border-white hover:bg-white hover:text-neutral-950">
          <svg class="h-12 w-12"
            viewBox="0 0 90 74"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M80.6836 18.9688C80.6836 19.8477 80.6836 20.5508 80.6836 21.4297C80.6836 45.8633 62.2266 73.8125 28.3008 73.8125C17.7539 73.8125 8.08594 70.8242 0 65.5508C1.40625 65.7266 2.8125 65.9023 4.39453 65.9023C13.0078 65.9023 20.918 62.9141 27.2461 57.9922C19.1602 57.8164 12.3047 52.543 10.0195 45.1602C11.25 45.3359 12.3047 45.5117 13.5352 45.5117C15.1172 45.5117 16.875 45.1602 18.2812 44.8086C9.84375 43.0508 3.51562 35.668 3.51562 26.7031V26.5273C5.97656 27.9336 8.96484 28.6367 11.9531 28.8125C6.85547 25.4727 3.69141 19.8477 3.69141 13.5195C3.69141 10.0039 4.57031 6.83984 6.15234 4.20312C15.293 15.2773 29.0039 22.6602 44.2969 23.5391C43.9453 22.1328 43.7695 20.7266 43.7695 19.3203C43.7695 9.125 52.0312 0.863281 62.2266 0.863281C67.5 0.863281 72.2461 2.97266 75.7617 6.66406C79.8047 5.78516 83.8477 4.20312 87.3633 2.09375C85.957 6.48828 83.1445 10.0039 79.2773 12.2891C82.9688 11.9375 86.6602 10.8828 89.8242 9.47656C87.3633 13.168 84.1992 16.332 80.6836 18.9688Z"
              fill="#00ACEE" />
          </svg>

          <p class="text-6 font-medium">Markham Square's Twitter</p>
        </a>
      </li>
      <li>
        <a target="_blank"
          href="https://www.instagram.com/team_markhamsq/"
          class="js-book-call transition-slow block flex w-full items-center space-x-4 rounded-lg border border-[0.5px] border-white border-white px-4 px-4 py-3.5 py-8 text-4 text-white text-white hover:border-white hover:bg-white hover:text-neutral-950">
          <img class="h-12 w-12"
            src="/assets/images/Instagram.svg" />
          <p class="text-6 font-medium">Markham Square's Instagram</p>
        </a>
      </li>

      <li>
        <a target="_blank"
          href="https://www.tiktok.com/@team_markhamsq/"
          class="js-book-call transition-slow block flex w-full items-center space-x-4 rounded-lg border border-[0.5px] border-white border-white px-4 px-4 py-3.5 py-8 text-4 text-white text-white hover:border-white hover:bg-white hover:text-neutral-950">
          <img class="h-12 w-12"
            src="/assets/images/Tiktok.png" />
          <p class="text-6 font-medium">Markham Square's Tiktok</p>
        </a>
      </li>
    </ul>

  </main>
  @include('_partials.footer')
@endsection
