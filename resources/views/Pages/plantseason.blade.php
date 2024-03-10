@extends('layouts.main', ['footer'=> true])

@section('tab_title')
    نهضت درخت | کتابچه‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
@endsection

@section('content')
    <main class="mb-10">
        <img src="assets/pages/plantseason/plantsession.jpg" alt="">


        {{-- content and description of page  --}}
        <div class="pc:w-3/4 mx-auto mt-[70px] mobile:p-2 pc:p-0">
            <h2 class="ms-3 text-3xl text-right iransans-600 text-[28px]">
                پائیز، بهار کاشت درخت!
            </h2>
            <p class="p-2 text-justify iransans-500 text-[16px]">
                بهترین زمان کاشتن نهال در زمین پس از اولین بارش‌های پائیزی است تا ریشه قبل از فصل سرما استقرار پیدا کند و گیاه هر چه بیشتر از نزولات آسمانی در پائیز، زمستان و بهار برای رشد ریشه و رسیدن آن به خاک‌های مرطوب در عمق زمین، بهره‌مند شود.&nbsp;
            </p>
            <p class="p-2 text-justify iransans-500 text-[16px]">
                کاشت نهال‌های گلدانی در تمام ایام سال به غیر از روزهای گرم آفتابی یا سرد یخبندانی و در هنگام وزش شدید باد، امکان پذیر است. 
            </p>
            <p class="p-2 text-justify iransans-500 text-[16px]">
                هر زمان تصمیم به کاشتن گرفتی، نهال‌های بلند، قطور و با ریشه‌های انبوه را انتخاب کن.     
            </p> 
            <p class="p-2 text-justify iransans-500 text-[16px]">
                برای انجام عملیات نهال کاری، نخست مشخصات خود را جهت انسجام هر چه بیشتر این نهضت در همین <span><a class="text-red-600 no-underline" href="https://forms.lc360.ir/forms/profile">سامانه</a></span> ثبت کن؛ سپس کتابچۀ زیر را دانلود کرده و با دقت مطالعه کن:
            </p>  
        </div>
        
        <hr class="text-black w-1/2 mx-auto my-8 font-semibold">

        <div class="flex flex-col">
            <div class="w-1/4 mx-auto mobile:w-full">
                <img class="rounded mobile:w-1/2 mx-auto tablet:w-1/4" src="/assets/pages/plantseason/how to plant tree.png" alt="">
            </div>
            <div class="text-center">
                <p class="text-center text-black iransans-500 text-[16px] mt-5">کتابچه چگونه درخت بکاریم؟</p>
            </div>
            <div class="mt-8">
                <div class="text-center fit-centent">
                    <a class="no-underline iransans-500 text-[15px] text-white bg-green-700 px-[24px] py-[12px] rounded-[3px]" href="{{route("booklets.book-2")}}">مشاهده کتابچه   </a>
                </div>
            </div>
        </div>

        <hr class="text-black w-1/2 mx-auto my-8">

        <div class="pc:w-3/4 mx-auto mobile:p-2 pc:p-0">
            <h2 class="text-black iransans-500 text-[20px]">موارد کلی در نهال‌کاری</h2>
            <p class="text-justify text-black iransans-500 mt-5 text-[15px]">
                ۱. ایجاد شرایطی برای مشارکت جوامع محلی جهت تولید نهال، کاشت، نگهداری و بهره‌برداری از گیاهانِ دست‌کاشت؛
            </p>
            <p class="text-justify text-black iransans-500 mt-5 text-[15px]">
                ۲. انجام طرح‌های پخش سیلاب، تله‌گذاری آب، سطوح آب‌گیر، حفر چاه‌های تغذیه آب‌خوان و … در زمین نهال کاری شده؛            
            </p>
            <p class="text-justify text-black iransans-500 mt-5 text-[15px]">
                ۳. عدم آسیب جنگل دست‌کاشت از حضور دام با کاشت نهال‌های بلند در چاله‌های عمیق و بزرگ.            
            </p>
        </div>
    </main>
@endsection


