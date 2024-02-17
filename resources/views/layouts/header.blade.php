<head>
    {{-- start meta tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="description" content=@yield('page_description')>
    <meta name="keywords" content=@yield('page_keyword')>
    <meta name="author" content=@yield('page_author')>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- end meta tags --}}

    {{-- og meta tags --}}
    <meta property="og:title" content=@yield("ogTitle") />
    <meta property="og:description" content=@yield("ogDescription") />
    <meta property="og:image" content=@yield("ogImage") />


    {{-- favicon --}}
    <link rel="shortcut icon" href="{{env("APP_URL")}}/Registration-details.svg" type="image/x-icon">  


    {{-- page styles --}}
    @yield('styles')
    <style>
        #footer{
            background-image: url({{env("APP_URL")}}/assets/layouts/footer/footerbackground.svg);
            background-repeat: repeat-x;
            background-position: center bottom;
            background-size: contain;
        }

        body{
            min-height: 100vh!important;
            display: flex;
            flex-direction: column;
            align-content: center;
        }
        main{
            flex: 1;
        }
    </style>

    
    <title>@yield('tab_title')</title>
</head>
