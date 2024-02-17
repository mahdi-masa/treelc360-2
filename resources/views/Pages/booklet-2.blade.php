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
                <img class="mx-auto rounded-[8px]" src="{{env("APP_URL")}}/assets/pages/single-booklet/second-booklet.png" alt="">
            </div>
            <div class="basis-3/5 flex flex-col justify-center content-center">
                <div class="p-5">
                    <h2 class="text-right iransans-500 text-[20px]">کتابچه چگونه درخت بکاریم؟</h2>
                    <p class="text-justify iransans-300 text-[16px]">جات زمین و احیای چرخۀ حیات را از ایجاد یک منطقه سبز و آبادی شروع کن!
                        حالا برای این‌که تجربیات خودمان را در نهضت درخت جهت نجات زمین و احیای چرخۀ حیات با هم به اشتراک گذاشته باشیم به طور خلاصه و گام به گام مراحل ایجاد منطقه سبز و آبادی را باز گو می‌کنیم. البته شما می‌توانید با خلاقیت خودتان یا نسبت به منطقه‌ای که در آن زندگی می‌کنید مراحل را کم و زیاد کنید:</p>
                    <div class="text-center mt-8">
                        <button class="bg-[#00914b] rounded px-[14px] py-[12px]"><a class="iransans-500 text-[15px] text-white" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/چطوری-درخت-بکاریم؟-2.pdf?versionId=">دریافت کتابچه</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-10 max-w-[880px] mx-auto">
            <div class="p-4">
                <p class="iransans-300 text-[16px] break-words text-justify">
                    عملیات نجات:
۱. ملزومات اصلی
<br>
۲. ملزوماتی که در صورت امکان بهتر است فراهم شود
<br>
۳. انتخاب هم‌راه
<br>
۴. انتخاب زمین
<br>
۵. انتخاب گونه‌های گیاهی
<br>
۶. تأسیس نهالستان خانگی
<br>
۷. آماده‌سازی چاله در مرحلۀ اول
<br>
۸. انتقال نهال
<br>
۹. آماده‌سازی چاله در مرحله دوم
<br>
۱۰. کاشت نهال
<br>
۱۱. کاشت مستقیم بذر در چاله به جای کاشت نهال
<br>
۱۲. آماده‌سازی چاله در مرحله سوم
<br>
۱۳. اقدامات تکمیلی
<br>
موارد کلی:
<br>
۱. ایجاد شرایطی برای مشارکت جوامع محلی جهت تولید نهال، کاشت، نگهداری و بهره‌برداری از گیاهانِ دست‌کاشت؛
<br>
۲. انجام طرح‌های پخش سیلاب، تله‌گذاری آب، سطوح آب‌گیر، حفر چاه‌های تغذیه آب‌خوان و … در زمین نهال کاری شده؛
<br>
۳. عدم آسیب جنگل دست‌کاشت از حضور دام با کاشت نهال‌های بلند در چاله‌های عمیق و بزرگ.
                </p>

                
            </div>
        </div>
    </main>    
@endsection