<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> @yield('title') | Admin - Nneel's Ecommerce</title>

    @include('admin.common.style-links.style-links')
</head>

<body class="main-body  app sidebar-mini">

    @include('admin.common.loader.loader')
    @include('admin.common.sidebar.sidebar')

    @include('admin.common.main-content.main-content')

    @include('admin.common.animated-sidebar.animated-sidebar')
    @include('admin.common.footer.footer')

    @include('admin.common.back-to-top.back-to-top')
    @include('admin.common.script-links.script-links')

</body>

</html>
