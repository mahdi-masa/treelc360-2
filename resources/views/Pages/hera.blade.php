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
        <div class="mt-3 rounded-[5px] mx-auto max-w-[1080px]">
            <img loading="lazy" class="mx-auto" src="./assets/pages/hera/hera.jpg" alt="">
        </div>
        <div class="max-w-[1080px] mx-auto w-[95%]">

            {{-- second section-- some content about platn --}}
            <div class="pc:w-3/4 mx-auto mt-8 mobile:p-2 pc:-p-0">
                <h2 class="iransans-500 mobile:text-[20px] pc:text-[32px] text-justify">حرا؛ منجی حیات</h2>
                <div class="mt-10">
                    <p class="iransans-600 text-[15px] text-justify">کاشت پنجاه هزار نهال حرا در محدودهٔ بندر جاسک برای ایجاد یک جنگل ساحلی که می‌تواند اکوسیستم منطقه را احیا و تنوع زیستی را تقویت کند.
                        </p>
                    <p class="iransans-500 text-[15px]">#به امید ایران سرسبز برای ایران قوی</p>
                    
                </div>
                <hr class="w-1/2 my-10 mx-auto">
            </div>
        </div>

        <div class="max-w-[1080px] mx-auto mb-8 flex flex-col justify-center content-center w-[95%]">
            
            <div class="flex mobile:flex-col tablet:flex-row justify-center content-center mt-10">
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-[95%] max-w-[400px] mx-auto" src="./assets/pages/hera/thumbnail.jpg" alt="">
                    <p class="iransans-500 text-[15px]">پوستر با کیفیت اصلی بدون متن</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="./assets/pages/hera/poster.png">دریافت محتوا</a>

                </div>
                
            </div>
        </div>


        
    </main>    
@endsection