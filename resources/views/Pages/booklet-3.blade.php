@extends('layouts.main',['footer'=>true])

@section('tab_title')
    نهضت درخت
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection


@section('content')
    <main class="my-5">
        <div class="mx-auto flex justify-center content-center mobile:flex-col tablet:flex-row tablet:px-2 max-w-[950px]">
            <div class="pc:basis-2/5">
                <img class="mx-auto rounded-[8px]" src="{{env("APP_URL")}}/assets/pages/single-booklet/third-booklet.png" alt="">
            </div>
            <div class="basis-3/5 flex flex-col justify-center content-center">
                <div class="p-5">
                    <h2 class="text-right iransans-500 text-[20px]">کتابچه چگونه برای پرورش درختان حرکت عمومی ایجاد کنیم؟</h2>
                    <p class="text-justify iransans-300 text-[16px]">آرمان نهضت</p>
                    <p class="text-justify iransans-300 text-[16px]">وضعیت مطلوب، هدف غایی و آرمان ما «ایران سرسبز» است؛ هدفی متعالی، برخاسته از نگاهی خدا باور، انسان محور و انقلابی که الگویی برای «نجات چرخۀ حیات» نیز محسوب می‌شود.</p>
                    <div class="text-center mt-8">
                        <button class="bg-[#00914b] rounded px-[14px] py-[12px]"><a class="iransans-500 text-[15px] text-white" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/چگونه-برای-پرورش-درختان-حرکت-عمومی-ایجاد-کنیم؟.pdf?versionId=">دریافت کتابچه</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 max-w-[880px] mx-auto">
            <div class="p-4">

                <p class="text-justify iransans-300 text-[16px]">اصول حاکم بر عمران طبیعت و آبادانی زمین
                    <br>
۱. تکیه بر انگیزه و توان مردم برای احیای طبیعت با تمرکز بر «شوق ثمر»؛
<br>
۲. اولویت کاشت درخت بر ساختمان‌سازی در ایجاد سکونتگاه؛
<br>
۳. اولویت ایجاد باغات و جنگل‌ها بر تجارت و صنعت؛
<br>
۴. اولویت کاشت درخت با هدف تولید غذای آماده، سالم و در دسترس برای تامین امنیت غذایی؛
<br>
۵. رعایت تنوع زیستی در کاشت درختان و ایجاد پوشش گیاهی؛
<br>
۶. رعایت تراکم در کاشت درختان و ایجاد پوشش گیاهی؛
<br>
۷. منع کاشت درختان غیر بومی و مهاجم.
</p>
                
            </div>
        </div>
    </main>    
@endsection