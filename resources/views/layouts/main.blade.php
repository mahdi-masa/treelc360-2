<!DOCTYPE html>
<html lang="fa" dir="rtl">
    @include('layouts.header')
    @stack('styles')
<body>
    @yield('content')
    @if ($footer)
        @include('layouts.footer')
    @endif
    <div class="bg-white bg-opacity-90 fixed right-6 bottom-6 w-[90px] p-[5px] rounded-[8px] ">
        <a href="https://tree.lc360.ir">
            <img src="{{env("APP_URL")}}/assets/layouts/landing/mainlogo.svg" alt="چرخه حیات">
        </a>
    </div>
    @stack('scripts')
</body>
</html>