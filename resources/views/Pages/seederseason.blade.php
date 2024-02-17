@extends('layouts.main', ['footer'=> true])

@section('tab_title')
    نهضت درخت | فصل بذرکاری
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection

@section('content')
    <main class="mb-10">
        
        <div class="pc:w-[1140px] mx-auto text-3xl mobile:w-full pc:p-0 mobile:p-3">
            <h2 class="iransans-600 text-[32px] text-black text-right mt-5">
                مراحــل بــــذرکــاری
            </h2>
            <div>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۱.	تیمار علمی بذرها قبل از کاشت مستقیم بسیار مهم و ضروری است. (به طور مثال بذر بادام کوهی نیاز به سرمادهی دارد؛ لذا برای جوانه زدن بهتر است بذرها از یک تا هفت روز در آب خیسانده و در محیط سردی مانند یخچال نگهداری شوند. در صورت طولانی شدن مدت خیساندن، می‌بایست چند نوبت آب آن را عوض کرد.)
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۲. دایره‌ای به قطر یک متر بر روی زمین تصور کن و خاک زنده یا همان خاک سطح الأرض را تا عمقِ حدود ۲۰ سانتی‌متری از روی زمین بردار.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۳. سپس عمق چاله را بیشتر کن و خاک آن را برای ایجاد یک پشتۀ کوچک به صورت هلالی در پائین چاله بریز.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۴.	در وسط چاله خاک زنده (خاک سطح الأرض) بریز به طوری که وسط چاله یک تپۀ کوچک از خاک ایجاد کرده باشی.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۵. چاله نباید با خاک پر شود؛ چرا که حلقه‌ای گود هر چند کم عمق (حداقل ۳۰ سانتی‌متر) برای رسیدن آب به ریشه‌ها در اطراف محل کاشت بذر باقی بماند.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۶.	روی تپۀ کوچک وسط چاله در گوشه‌های یک مثلث فرضی با ضلع ۲۰ سانتیمتر ۳ نقطه را با فشار انگشت گود کرده و در هر نقطه یک بذر قرار بده تا هر بذر با بذر مقابل ۲۰ سانتیمتر فاصله داشته باشد.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۷.	روی بذرها دو برابر قطر بذر خاک بریز، اگر ارتفاع خاک روی بذرها بیشتر باشد، جوانه‌زنی بذرها با مشکل مواجه می‌شود.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۸. با دست به روی تپۀ کوچک و اطراف چاله ضربه بزن تا با محکم کردن خاک مانع از فرسایش و شسته شدن خاک شوی.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۹.	اگر زمین شما شیب‌دار است، حتماً با ایجاد یک پشتۀ کوچک از خاک معمولی به صورت هلالی در پائین چاله، آبگیر کوچکی برای بهره‌مندی بیشتر از روان‌آب‌ها ایجاد کن.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۱۰.	با قلوه سنگ‌ها روی تپۀ کوچک، داخل چاله و روی پشته را سنگ چین کن تا مخزنی محکم، بدون فرسایش و محافظ روان‌آب داشته باشی. (البته اگر به جای کاشت نهال، بذرکاری انجام دادی، مراقب باش روی نقاط کاشت بذر سنگ نگذاری!)
                </p>

                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۱۱.	در بارندگی‌های شدید به طور معمول چاله پر می‌شود و ممکن است پشته شکسته شود، پس کمی بالاتر از قطر دایره یک آبراه به عمق ۵ تا ۷ سانتی‌متر ایجاد کن تا آب اضافه پس از پر شدن چاله از بالای آن توسط آبراه تخلیه شود.
                </p>
                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۱۲.	یک تکه سنگ صاف کف آبراه قرار بده به طوری که عمق آبراهه ۵ سانتیمتر باشد تا آب عمق ورودی آبراهه را بیشتر نکند و ارتفاع آبگیری چاله کم نشود.
                </p>

                <p class="iransans-500 text-right mt-5 text-base mobile:text-justify">
                    <img loading="lazy" class="inline w-5" src="./assets/pages/palestine/checked.svg" alt="">
                    ۱۳.	سطح چاله را با خرده چوب، اندام خشک گیاهان، کاه و کلش یا حتی خردۀ کاغذ و روزنامه و گونی کنفی پوشش بده. این کار خاک‌پوشی یا مالچ‌پاشی‌ نام دارد که باعث حفظ رطوبت خاک و جذب بیشتر آب می‌شود.
                </p>

            </div>
        
        </div>
    </main>
@endsection


