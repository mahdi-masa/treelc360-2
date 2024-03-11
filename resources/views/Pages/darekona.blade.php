@extends('layouts.main',['footer'=>true])

@section('tab_title')
نهضت درخت | درخت سدر نشانه‌ای از حسین
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection


@section('content')
    <main>
        {{-- img for first section  --}}
        <div class="mt-3 rounded-[5px] max-w-[1080px] mx-auto">
            <img loading="lazy" class="mx-auto" src="./assets/pages/darekona/darekona.jpg" alt="">
        </div>

        {{-- second section-- some content about platn --}}
        <div class="max-w-[1080px] mx-auto mt-8 mobile:p-2 pc:-p-0">
            <h2 class="iransans-500 mobile:text-[15px] pc:text-[32px] text-justify">حال خوب هر شهروند بهبهانی با طرح «دارِکنا» / هدیه ای به طبیعت شهرمان</h2>
            <div class="mt-10">
                <p class="iransans-normal text-[16px] text-justify">درختیاران جهادی بهبهانی  با کاشت درخت ارزشمند کنار و آبیاری آن در تابستان به آبادانی مراتع  بهبهان کمک می کنند</p>

                <p class="iransans-normal text-[16px] text-justify">
                    در پویش مردمی صدقه سبز برآنیم تا نهال رایگان "کنار"  را به آسانی در دسترس علاقه مندان قرار دهیم
                </p>
                
            </div>
            <hr class="w-1/2 my-10 mx-auto">
            <div class="mt-10">
                <p class="iransans-normal text-[16px] text-justify">جهت هماهنگی دریافت نهال با این شماره تماس بگیرید👇</p>
                <p class="iransans-normal text-[16px] text-justify">09362215259</p>
                <p class="iransans-normal text-[16px] text-justify">ابوالقاسم نخعی</p>
            </div>
        </div>


        


        
    </main>    
@endsection