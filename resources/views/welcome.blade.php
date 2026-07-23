<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body>
        <main class="container">
            @include('partials.nav')
            @include('partials.hero')

            <hr>

            @include('partials.features')

            <hr>

            @include('partials.ecosystem')

            <hr>

            @include('partials.watch')

            <hr>

            @include('partials.start')

            <hr>

            @include('partials.badge')

            @include('partials.footer')
        </main>

        @include('partials.floating')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
