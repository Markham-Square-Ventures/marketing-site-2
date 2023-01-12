<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<!-- /* Open Graph tags for FB & Twitter */ --->
<meta name="og:title" content="{{ $title }}">
<meta name="og:description" content="{{ $description }}">
<meta name="og:type" content="website">
<meta name="og:url" content="{{ $page->getUrl() }}">
<meta name="og:image" content="{{ $image }}">
<meta name="og:image:alt" content="{{ $image_alt }}">
<meta name="og:site_name" content="Markham Square">

<!-- /* Twitter Large Image Summary Card */ -->
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@team_markhamsq">
<meta name="twitter:creator" content="@team_markhamsq">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:image:alt" content="{{ $image_alt }}">
