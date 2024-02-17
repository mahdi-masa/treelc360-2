@extends('layouts.main',['footer'=>true])

@section('tab_title')
نهضت درخت | نذر سبزمادری
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection


@section('content')
    <main>
        

        {{-- second section-- some content about platn --}}
        <div class="pc:w-3/4 mx-auto mt-8 mobile:p-2 pc:-p-0">
            <h2 class="iransans-500 pc:text-[32px] text-justify mobile:text-[25px]">
                بِسْـــــــــمِ
                اللَّــــــــــــهِ
                الرَّحْـمَنِ
                الرَّحِيـــمِ
            </h2>
            
            <div class="mt-10">

                <p class="iransans-600 text-[16px] text-justify">
                    از ایام سوگواری تا میلاد مادر خوبی‌ها حضرت 
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    زهرا سلام الله علیها
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    در دامنه‌های سرزمین ایران،
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    بذر می‌کاریم؛
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    بذر مهر و مقاومت، مهربان با آب و خاک و مقاوم در برابر سختی‌ها،
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    به امید #ایران_سرسبز برای #ایران_قوی
                </p>
                
            </div>
            <hr class="w-1/2 my-10 mx-auto">
        </div>

        <div class="pc:w-3/4 mx-auto mt-8 mobile:p-2 pc:-p-0">
            <h2 class="iransans-500 pc:text-[32px] text-justify mobile:text-[25px]">
                مراحل اقدام:
            </h2>
            
            <div class="mt-10">

                <p class="iransans-600 text-[16px] text-justify">
                    ۱. مراجعه به ادارات منابع طبیعی و آبخیزداری برای تعیین محل کاشت؛
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    ۲. تهیۀ بذر بلوط، کُنار، پسته وحشی، گردو، بادام، بنه و ...، متناسب با بوم محل کاشت از مراکز معرفی شده توسط ادارات منابع طبیعی و آبخیزداری؛
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    ۳. ثبت مشخصات محل کاشت و تعداد بذر در سامانهٔ «نهضت درخت» به آدرس:
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    <a class="text-[#16a349]" href="https://tree.lc360.ir">
                        🔘 tree.lc360.ir 
                    </a>
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    ۴. دریافت محتوای آموزشی برای آماده سازی بذر و نحوۀ کاشت از سامانۀ.
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    به همت ایرانـیان مـهرپرور و کنش‌گرانِ نهضت درخت
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    در صورت مواجه با هرگونه ابهام یا مشکل با این شماره: 02191016943 تماس بگیرید.
                </p>
            </div>
            <hr class="w-1/2 my-10 mx-auto">
        </div>

        {{-- third section--- is about download resources --}}
        <div class="w-3/4 mx-auto my-8 flex flex-col justify-center content-center">
            <div class="flex mobile:flex-col tablet:flex-row justify-center content-center mt-10">
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-80 mx-auto rounded-[8px]" src="https://booklet.s3.ir-thr-at1.arvanstorage.ir/seeder/posterV2.jpg?versionId=" alt="">
                    <p class="iransans-500 text-[15px] mt-5">پوستر نذر سبز مادری</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/seeder/posterV2.jpg?versionId=">دریافت محتوا</a>
                </div>
            </div>
        </div>


        
    </main>    
@endsection