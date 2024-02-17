@extends('layouts.main',['footer'=>true])

@section('tab_title')
نهضت درخت | کتابچه چرا درخت بکاریم؟
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection


@section('content')
    <main class="my-5">
        <div class="mx-auto flex justify-center content-center mobile:flex-col tablet:flex-row max-w-[950px]">
            <div class="pc:w-[300px] tablet:w-[400]">
                <img class="mx-auto rounded-[8px]" src="{{env("APP_URL")}}/assets/pages/single-booklet/first.png" alt="">
            </div>
            <div class="pc:w-[580px] tablet:w-[480px] flex flex-col justify-center content-center">
                <div class="p-5">
                    <h2 class="text-right iransans-500 text-[20px]">کتابچه چرا درخت بکاریم؟</h2>
                    <p class="text-justify iransans-300 text-[16px]">زمین در حال مردن است! با گرمایش زمین، آب خوش از گلوی هیچ کسی پایین نمی‌رود؛ حتی خاک!</p>
                    <p class="text-justify iransans-300 text-[16px]">خاک بدون لباس سبزی از گیاهان نمی‌تواند آب بخورد؛ چون هنوز لبش تر نشده، آب بخار می‌شود و خاک هم مثل انسان از تشنگی می‌میرد. خاک مرده یعنی بیابان!</p>
                    <p class="text-justify iransans-300 text-[16px]">در بیابان، قانونِ جنگل حاکم است: اگر تو او را نخوری، بیابان تو را خواهد خورد!</p>
                    <div class="text-center mt-8">
                        <div class="box-border">
                            <a class="iransans-500 text-[15px] text-white bg-[#00914b] rounded px-[14px] py-[8px]" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/چرا-درخت-بکاریم؟-1.pdf?versionId=">دریافت کتابچه</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 max-w-[880px] mx-auto">
            <div class="p-3">

                <p class="text-justify iransans-300 text-[16px]">گیاهان با دریافت انرژی خورشیدی حرارت سطح زمین را تعدیل می‌کنند و با سایه‌اندازی باعث کاهش تبخیر و هدر رفت نزولات آسمانی و نفوذ آب در دل خاک می‌شوند. جذب آب باران توسط گیاهان و نفوذ آب در دل خاک، فرآیندی است که با عنوان «شارژ آب‌های زیر زمینی» در تحقیقات علمی اثبات گردیده است. آزمایشاتی که در یکی از خشک‌ترین نقاط زمین، در کشور کویری بورکینافاسو انجام شده نشان می‌دهد درختان مانند اسفنج عمل می‌کنند. یعنی در هنگام بارندگی‌، روان‌آب را به خود جذب کرده و آرام‌آرام به دل زمین می‌فرستند و سفره‌های زیرزمینی را شارژ می‌کنند.</p>
                <p class="text-justify iransans-300 text-[16px]">همچنین تحقیقات جدید علمی در دنیا اثبات کرده‌اند که گیاهان متراکم با فرآیندی به نام «پمپ بیوتیک» حتی باعث بارش باران نیز می‌شوند. کاشت وسیع درخت در مناطق ساحلی آفریقا، چین، هند، کنیا، برزیل و استرالیا که با هدف افزایش بارش‌ها انجام شده، نظریهٔ پمپ بیوتیک را پس از کشف و اثبات علمی، در مرحلهٔ عمل هم ثابت کرده است. برای مثال مشاهدات میدانی از جنگلی دست کاشت با حدود ۷۰ میلیارد درخت پا گرفته در چین، نشان می‌دهد بارش‌ها ۵۸ درصد افزایش یافته و میانگین بارش‌ها در این منطقه (فلات لُس) ۵۴.۶۲ میلی‌متر بالا رفته است!</p>
                <p class="text-justify iransans-300 text-[16px]">گیاهان با جلوگیری از آلودگی‌ها سبب کاهش گرد و غبار، تلطیف، تصفیه و افزایش حجم اکسیژن در هوا هم می‌گردند.
                    گیاهان با ترسیب کربن، احیاء خاک و جلوگیری از فرسایش آن به تولید غذا می‌پردازند. غذایی که باعث افزایش تنوع زیستی در همه موجودات زنده اعم از جانوران و ریزجانداران است.</p>
                <p class="text-justify iransans-300 text-[16px]">به عبارت دیگر همۀ چرخه‌های روی زمین که حیات را ممکن کرده‌اند برای سالم ماندن‌شان، محتاج درخت و پوشش سبز زمین هستند. پس کاشت، داشت و بهرمندی اصولی از گیاهان، اصلی‌ترین راهکار برای خروج از وضعیت نامطمئن کنونی زمین است.</p>
            </div>
        </div>
    </main>    
@endsection