<title>{{ $title }}</title>
<meta name="description" content="{{ $description }}">

<!-- /* Open Graph tags for FB & Twitter */ --->
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ $page->getUrl() }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:image:alt" content="{{ $image_alt }}">
<meta property="og:site_name" content="Markham Square">

<!-- /* Twitter Large Image Summary Card */ -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@team_markhamsq">
<meta name="twitter:creator" content="@team_markhamsq">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:image:alt" content="{{ $image_alt }}">
