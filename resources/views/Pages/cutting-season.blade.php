@extends('layouts.main', ['footer'=> true])

@section('tab_title')
نهضت درخت | فصل قلمه زنی
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
@endsection



@section('content')
<main class="mb-10">
        
    <div class="pc:w-[1140px] mx-auto text-3xl mobile:w-full pc:p-0 mobile:p-3">
        <h2 class="iransans-600 text-[32px] text-black text-right mt-5">
            فصل قلمه‌زنی
        </h2>
        <div>
            <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                بهترین زمان قلمه گیری از گیاهان زمانی است که آن گیاه در خواب به سر می‌برد و رشد و رویشی در اندام فوقانی خود ندارد؛ مانند فصل سرد زمستان برای اکثر گیاهان و درختان.
            </p>
            <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                گرفتن قلمه‌های بلند به شما کمک می‌کند تا ریشه‌ای در عمق زمین داشته باشی، جایی که رطوبت و آب بیشتری دارد.
            </p>
            <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                اگر امکان آبیاری مدام داری، حتماً قلمه‌ها را به صورت مستقیم در زمین اصلی قرار بده.
            </p>
            <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                در غیر این صورت، می‌توانی با کاشت قلمه‌ها در گلدان‌های پلاستیکی یک نهالستان رو بازِ  کوچک خانگی احداث کنی.
            </p>
            <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                انگور، انار، انجیر، زیتون، عناب، سنجد، گز و انواع صنوبر مانند پده بهترین درختان برای قلمه زنی هستند. البته گل محمدی و گل کاغذی هم با قلمه زدن تکثیر می‌شوند.
            </p>
            <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                برای انجام عملیات قلمه‌زنی و احداث یک نهالستان کوچک خانگی، نخست مشخصات خود را جهت انسجام هر چه بیشتر این نهضت در همین سامانه ثبت کن؛ سپس کتابچهٔ زیر را دانلود کرده و با دقت مطالعه کن:
            </p>
            
    </div>
</main>

@endsection

