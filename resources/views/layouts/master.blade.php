<!DOCTYPE html>
<html lang="se">
<head>
	@yield('meta')
    @include('layouts.meta')

	
    @yield('title')

    @include('layouts.css')

    @yield('css')

</head>

<body>

    @include('layouts.nav')


    @yield('content')


    @include('layouts.bottom')



    @include('layouts.scripts')

    @yield('scripts')

</body>
</html>