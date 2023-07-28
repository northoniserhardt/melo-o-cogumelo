<div>
    <!DOCTYPE html>
    <html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Character Customization')</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @livewireStyles
    </head>
    <body>
    <div>
        @yield('content')
    </div>
    @livewireScripts
    </body>
    </html>
</div>
