@extends('layouts.main', ['footer'=> true])

@section('tab_title')
    نهضت درخت | کتابچه‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection

@section('content')
    <main class="mb-10">
        <div>
            <img loading="lazy" class="mx-auto mt-4" src="/assets/pages/palestine/sobhe-zeytone.jpg" alt="نهضت حمایت از فلسطین">
        </div>
        <div class="pc:w-[1140px] mx-auto text-3xl mobile:w-full pc:p-0 mobile:p-3">
            <h2 class="iransans-600 text-[32px] text-black text-right">
                صُبحِ زیتون
            </h2>
            <div>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/download.png" alt="">
                     نهال زیتون می‌کاریم برای اعلام همبستگی با مردم مقاوم غزه؛                 </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    #انتفاضه_صبح_زیتون
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    شما نیز می‌توانید با پیوستن به این انتفاضه، کاشت نهال و ارسال پیامی تصویری، در کنار دلاوران فلسطینی باشید.
                </p>
            </div>
            <div>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/radiobutton.svg" alt="">
                    <b>
                        مراحل اقدام:
                    </b>
                </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    ۱. از نزدیک‌ترین نهالستان به محل‌تان، یک یا چند نهال زیتون تهیه کنید.
                </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    [در صورت عدم تناسب کاشت زیتون با اقلیم منطقه از دیگر نهال درختان مثمر برای مشارکت در این نهضت استفاده نمایید.]               
                </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    ۲. از مراحل کاشت نهال به صورت افقی با موبایل تصویربرداری کرده و با بیان نام، محل سکونت و احساسات و عواطف قلبی‌تان، یک پیام تصویری کوتاه از خود و گروه همراهتان برای مردم مظلوم و صبور غزه آماده کنید.
                </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    ۳.فیلم ضبط شده را برای انتشار به آیدی @lc360admin در پیام رسان‌های <span><a class="text-green-600" href="https://eitaa.com/lc360admin">ایتا، </a></span> <span><a class="text-green-600" href="https://ble.ir/lc360admin">بله </a></span>و <span><a class="text-green-600" href="https://rubika.ir/lc360admin">روبیکا</a></span> ارسال نمایید تا موجب گسترش این حرکت، نهضت و انتقاضه شود
                </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    ۴. جهت انسجام هر چه بیشتر این حرکت مردمی، نخست مشخصات خود را در <span><a class="text-green-600" href="https://forms.lc360.ir/forms/profile">سامانه نهضت درخت</a></span> ثبت کنید تا وحدت و انسجام‌مان باعث وحشت زیاده‌خواهان و دلگرمی آزادی‌خواهان جهان شود.
                </p>
                <p class="iransans-500 text-right text-base mobile:text-justify">
                    ۵. موقعیت زمینی که زیتون‌ها در آن کاشته شده را هم در این <span><a class="text-green-600" href="https://forms.lc360.ir/forms/plant">سامانه</a></span> ثبت نمائید.
                </p>
                <div class="mt-5">
                    <p class="iransans-500 text-right text-base mobile:text-justify">
                        #امت_واحده
                    </p>
                    <p class="iransans-500 text-right text-base mobile:text-justify">
                        #نهضت_درخت              
                    </p>
                    <p class="iransans-500 text-right text-base mobile:text-justify">
                        #طوفان_الاقصی               
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection


