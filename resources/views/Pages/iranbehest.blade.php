@extends('layouts.main',['footer'=>true])

@section('tab_title')
نهضت درخت | ایران بهشت
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection


@section('content')
    <main>
        {{-- img for first section  --}}
        <div class="mt-3 max-w-[1080px] mx-auto">
            <img loading="lazy" class="mx-auto" src="./assets/pages/iranbehesht/iranbehesht.jpg" alt="">
        </div>

        {{-- second section-- some content about platn --}}
        <div class="max-w-[1080px] mx-auto mt-8 mobile:p-2 pc:p-0">
            <h2 class="iransans-500 mobile:text-[20px] pc:text-[32px] text-justify">هر طلبه سه نهال</h2>
            <h2 class="iransans-500 mobile:text-[20px] pc:text-[32px] text-justify">هر مدرسه یک نهالستان</h2>
            <p class="iransans-normal text-[16px] text-justify">با کاشت درختان دیم و دو منظوره مانند سنجد، بادام، زیتون و کُنار، ایرانی سرسبز و قوی را رقم می‌زنیم!</p>
            <div class="mt-10">

                <p class="iransans-normal text-[16px] text-justify">
                    <img loading="lazy" draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/tree.svg">
                    ۲ تا ۲۲ اسفندماه
                </p>
                
            </div>
            <hr class="w-1/2 my-10 mx-auto">
            <div class="mt-10">
                <p class="iransans-normal text-[16px] text-justify">یک هستهٔ خودجوش و کوچک از میان نزدیکان‌تان تشکیل دهید.</p>
                <p class="iransans-normal text-[16px] text-justify">یک پویش و حرکت اجتماعی کوچک برای کاشت نهال یا ایجاد نهالستان طراحی کنید.</p>
                <p class="iransans-normal text-[16px] text-justify">برای الهام‌بخشی و امیدآفرینی، اقدامات و کاشته‌ها را در سامانه «نهضت درخت» به آدرس زیر ثبت کنید:</p>
                <a href="https://tree.lc360.ir">TREE.LC360.IR</a>

                <p class="iransans-normal text-[16px] text-justify">از بسته‌های آموزشی در سامانه مذکور بهره‌مند شوید.</p>
                <p class="iransans-normal text-[16px] text-justify">در صورت امکان از اقدامات گوناگون خود تصویربرداری کنید و جهت فرهنگ‌سازی برای انتشار به آیدی @LC360ADMIN در پیام رسان‌های ایتا، بله و روبیکا ارسال نمایید.</p>
                <p class="iransans-normal text-[16px] text-justify">با کاشت درختان دیم و دو منظوره مانند سنجد، بادام، زیتون و کُنار، ایرانی سرسبز و قوی را رقم می‌زنیم!</p>
                
                
            </div>

        </div>


        {{-- third section--- is about download resources --}}
        <div class="max-w-[1080px] mx-auto my-8 flex flex-col justify-center content-center">
            
            <div class="flex mobile:flex-col tablet:flex-row justify-center content-center mt-10">
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-[95%] max-w-[400px] mx-auto" src="./assets/pages/iranbehesht/thumbnail.jpg" alt="">
                    <p class="iransans-500 text-[15px]">پوستر با کیفیت اصلی بدون متن</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="./assets/pages/iranbehesht/poster.jpg">دریافت محتوا</a>

                </div>
                
            </div>
        </div>


        
    </main>    
@endsection