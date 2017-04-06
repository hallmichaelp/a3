<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>@yield('title', 'Assignment Three')</title>
  <meta name="description" content="Third assignment for DWA15 course">
  <meta name="author" content="Michael Hall">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/Skeleton/css/normalize.css">
  <link rel="stylesheet" href="css/Skeleton/css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">

  @stack('head')

</head>

<body>
  @yield('content')

  @stack('body')
</body>
</html>
