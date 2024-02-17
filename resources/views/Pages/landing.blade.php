@extends('layouts.main',['footer'=>true])

@section('tab_title')
    نهضت درخت
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
    @vite('resources/css/fontirannum.css')
@endsection


@section('content')
<main class="my-5 flex felx-col justify-center items-center mx-auto w-full max-w-[1080px]">
    <div class="mobile:w-full tablet:w-[80%] pc:w-full pc:h-fit ">
        <div class="flex mobile:flex-col tablet:flex-row mobile:justify-center mobile:w-full">
            <div class="p-5 tablet:w-[50%] pc:w-[40%] mobile:w-full">
                <div class="text-center">
                    <p class="taha-normal text-xl mobile:text-[18px]">بِسْمِ اللهِ الرَّحْمنِ الرَّحِیم
                        <br>
                        هُوَ أَنْشَأَكُمْ مِنَ الْأَرْضِ وَاسْتَعْمَرَكُمْ فِيهَا
                    </p>
                    <p class="text-center text-black iransans-500 mt-1 text-base mobile:text-[12px]">او شما را از زمیـن پدید آورد و آبادگران آن قرار داد.</p>
                </div>
                <div class="tablet:flex flex-row justify-end mt-[10px]">
                    <img class="mobile:w-[280px] tablet:w-full pc:w-[85%] mx-auto" src="assets/layouts/landing/mainlogo.svg" alt="">
                </div>
            </div>
            <div class="pc:pt-[10px] drop-shadow-xl tablet:flex mx-auto mobile:w-[90%] mobile:max-w-[400px] mobile:h-[300px] tablet:h-[400px] pc:h-auto pc:max-w-none tablet:w-[50%] pc:w-[60%] flex justify-center items-center flex-col">
                <div class="w-full h-[400px] rounded-[8px]" id="map">
                    
                </div>
            </div>
            
        </div>
        <div class="flex flex-row justify-between items-center my-5">
            <div class="iransans-bold mx-5 flex flex-col justify-center items-center">
                <span class="mobile:text-[13px]">هسته‌های خود‌جوش</span>
                <div>
                    <span class="mobile:text-[13px] sansnum-normal" id="squads">0</span>
                    <span class="mobile:text-[13px]">عدد</span>
                </div>
            </div>
            <div class="iransans-bold mx-5 flex flex-col justify-center items-center">
                <span class="mobile:text-[13px]">آبادگران زمین</span>
                <div>
                    <span class="mobile:text-[13px] sansnum-normal" id="members">0</span>
                    <span class="mobile:text-[13px]">نفر</span>
                </div>
            </div>
            <div class="iransans-bold mx-5 flex flex-col justify-center items-center">
                <span class="mobile:text-[13px]">درختان اهدا شده به زمین</span>
                <div>
                    <span class="me-1 mobile:text-[13px] sansnum-normal" id="trees">0</span>
                    <span class="mobile:text-[13px]">عدد</span>

                </div>
            </div>
        </div>
        {{-- start icons and their content --}}
        <div class="flex justify-between items-baseline mobile:flex-col tablet:flex-row mobile:w-full mobile:mr-0 pc:mr-[15px] mt-[20px]">

                <div class="w-full mobile:max-w-[68%] mx-auto flex flex-row justify-center items-baseline tablet:basis-[40%]">
                    <div class="text-center basis-1/5 mobile:basis-1/2 mobile:p-[5px] pc:pt-0 mobile:max-w-fit tablet:max-w-none mobile:mx-auto tablet:m-0">
                        <div class="mb-[10px]">
                            <a href="https://forms.lc360.ir/login">
                                <img class="mobile:w-[100px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/Registration-details.svg" alt="">
                            </a>
                        </div>
                        <div class="mobile:mt-[10px] tablet:m-0">
                            <a href="https://forms.lc360.ir/login">
                                
                                <p class="text-center iransans-500 text-[13px]">
                                    <span class="text-center iransans-500 text-[13px]">ورود</span>
                                    <p class="text-center iransans-500 text-[10px]">برای نجات زمین و چرخه حیات آماده‌ای؟!</p>
                                </p>
                            </a>
                        </div>
                    </div>
    
                    <div class="text-center basis-1/5 mobile:basis-1/2 mobile:p-[5px] pc:pt-0 mobile:max-w-fit tablet:max-w-none mobile:mx-auto tablet:m-0">
                        <div class="mb-[10px]">
                            <a href="https://forms.lc360.ir/forms/plant">
                                <img class="mobile:w-[100px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/Tree-registration.svg" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="https://forms.lc360.ir/forms/plant">
                                <p class="text-center iransans-500 text-[13px]">ثبت کاشته‌ها</p>
                                <p class="text-center iransans-500 text-[10px]">یادگارهای سبز خود را کجا کاشتی؟</p>
                            </a>
                        </div>                    
                    </div>
                </div>
                
                <div class="w-full flex flex-row justify-between items-baseline tablet:basis-[60%]">
                    <div class="text-center basis-1/5 mobile:basis-1/3 mobile:p-[5px] mobile:max-w-fit mobile:mx-auto tablet:max-w-none tablet:m-0">
                        <div class="mb-[10px]">
                            <a href="{{route('booklet')}}">
                                <img class="mobile:w-[100px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/booklet.svg" alt="دانلود کتابچه‌های اموزشی نهضت درخت">
                            </a>
                        </div>
                        <div>
                            <a href="{{route('booklet')}}">
                                <p class="text-center iransans-500 text-[13px]">بسته‌های آموزشی</p>
                            </a>
                        </div>                    
                    </div>
                    <div class="text-center basis-1/5 mobile:basis-1/3 mobile:p-[5px] mobile:max-w-fit mobile:mx-auto tablet:max-w-none tablet:m-0">
                        <div class="mb-[10px]">
                            <a href="{{route('seasons')}}">
                                <img class="mobile:w-[100px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/sessionhistory.svg" alt="">
                            </a>
                        </div>
                        <div>
                            <a href="{{route('seasons')}}">
                                <p class="text-center iransans-500 text-[13px] "> فصل‌ها و طرح‌ها</p>
                            </a>
                        </div>                    
                    </div>
    
                    <div class="text-center basis-1/5 mobile:basis-1/3 mobile:p-[5px] mobile:max-w-fit mobile:mx-auto tablet:max-w-none tablet:m-0">
                        <div class="mb-[10px]">
                            <a href="https://forms.lc360.ir/forms/donate/plant">
                                <img class="mobile:w-[100px] tablet:w-[85px] mx-auto tablet:h-[85px]" src="./assets/layouts/landing/plants-donation.svg" alt="پویش حمایت از فلسطین">
                            </a>
                        </div>
                        <div>
                            <a href="https://forms.lc360.ir/forms/donate/plant">
                                <p class="text-center iransans-500 text-[13px]">اهداء نهال</p>
                            </a>
                        </div>
                    </div>

                </div>
      
            </div>
                
        </div>
        {{-- end icons and their content --}}
       
               
           
    </div>
        
    </main> 
    
    @push('scripts')
    @vite('resources/js/map.js')
    @vite('resources/js/statistic.js')
    @endpush
@endsection