<!--
/**
 * Created by PhpStorm.
 * User: darren
 * Date: 01/08/2019
 * Time: 08:40
 */
-->
@include('layouts.partials.header')

<body>

    <div class="container">
        <main>
            @yield('contents')

            {{--Insert if statement - depending on outcome yield display--}}

            @yield('details')
        </main>
    </div>

</body>
</html>
