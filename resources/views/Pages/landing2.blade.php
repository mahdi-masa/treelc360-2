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
                    <p class="taha-normal text-xl mobile:text-[17px]">بِسْمِ اللهِ الرَّحْمنِ الرَّحِیم
                        <br>
                        هُوَ أَنْشَأَكُمْ مِنَ الْأَرْضِ وَاسْتَعْمَرَكُمْ فِيهَا
                    </p>
                    <p class="text-center text-black iransans-500 mt-1 text-base mobile:text-[14px]">او شما را از زمیـن پدید آورد و آبادگران آن قرار داد.</p>
                    <p class="text-center text-black iransans-300 text-xs mobile:text-[10px]"> [سوره مبارکه هود – آیه ۶۱]</p>
                </div>
                <div class="tablet:flex flex-row justify-end mt-[10px]">
                    <img class="mobile:w-[75%] tablet:w-full pc:w-[85%] mx-auto" src="assets/layouts/landing/mainlogo.svg" alt="">
                </div>
            </div>
            <div class="pc:pt-[10px] tablet:flex mx-auto mobile:w-[90%] tablet:w-[50%] pc:w-[60%] flex justify-center items-center flex-col">
                <div class="w-full h-[400px]" id="map">
                    
                </div>
            </div>
            
        </div>
        <div class="flex flex-row justify-between items-center my-5">
            <div class="iransans-bold mx-5 flex flex-col justify-center items-center">
                <span>آبادگران زمین</span>
                <div class="flex flex-row justify-center items-center">
                    <span class=" sansnum-300" id="members">0</span>
                    <span class="mr-1">نفر</span>
                </div>
                
            </div>
            <div class="iransans-bold mx-5 flex flex-col justify-center items-center">
                <span>هسته‌های خود‌جوش</span>
                <div class="flex flex-row justify-center items-center">
                    <span class="sansnum-300" id="squads">0</span>
                    <span class="mr-1">عدد</span>
                </div>
            </div>
            <div class="iransans-bold mx-5 flex flex-col justify-center items-center">
                <span>درختان اهدا شده به زمین</span>
                <div class="flex flex-row justify-center items-center">
                    <span class="sansnum-300" id="trees">0</span>
                    <span class="mr-1">عدد</span>
                </div>
            </div>
        </div>
        {{-- start icons and their content --}}
        <div class="flex justify-between items-satrt mobile:flex-col tablet:flex-row mobile:w-full mobile:mr-0 pc:mr-[15px]">
                
                <div class="text-center basis-1/5 mobile:p-[10px] pc:pt-0 mobile:max-w-fit tablet:max-w-none mobile:mx-auto tablet:m-0">
                    <div class="mb-[10px]">
                        <a href="https://forms.lc360.ir/forms/profile">
                            <img class="mobile:w-[150px] tablet:w-[85px]  mx-auto" src="assets/layouts/landing/Registration-details.svg" alt="">
                        </a>
                    </div>
                    <div class="mobile:mt-[10px] tablet:m-0">
                        <a href="https://forms.lc360.ir/forms/profile">
                            <p class="text-center iransans-500 text-[15px]">با ثبت مشخصات به انسجام نهضت کمک کن!</p>
                        </a>
                    </div>
                </div>

                <div class="text-center basis-1/5 mobile:p-[10px] mobile:max-w-fit tablet:max-w-none mobile:mx-auto tablet:m-0">
                    <div class="mb-[10px]">
                        <a href="https://forms.lc360.ir/forms/plant">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/Tree-registration.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="https://forms.lc360.ir/forms/plant">
                            <p class="text-center iransans-500 text-[15px]">درختان کاشته شده، را ثبت کن!</p>
                        </a>
                    </div>                    
                </div>

                <div class="basis-1/5 mobile:p-[10px] mobile:max-w-fit tablet:max-w-none mobile:mx-auto tablet:m-0">
                    <div class="mb-[10px]">
                        <a href="{{route('motherseeder')}}">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto tablet:h-[85px]" src="assets/pages/sessions/motherseeder.png" alt="پویش حمایت از فلسطین">
                        </a>
                    </div>
                    <div>
                        <a href="{{route('motherseeder')}}">
                            <p class="text-center iransans-500 text-[15px]">نذر سبز مادری</p>
                        </a>
                    </div>
                </div>

                <div class="text-center basis-1/5 mobile:p-[10px] mobile:max-w-fit tablet:max-w-none mobile:mx-auto tablet:m-0">
                    <div class="mb-[10px]">
                        <a href="{{route('seasons')}}">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/sessionhistory.svg" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="{{route('seasons')}}">
                            <p class="text-center iransans-500 text-[15px] "> فصل‌ها و طرح‌ها</p>
                        </a>
                    </div>                    
                </div>

                <div class="text-center basis-1/5 mobile:p-[10px] mobile:mx-auto tablet:m-0">
                    <div class="mb-[10px]">
                        <a href="{{route('booklet')}}">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="assets/layouts/landing/booklet.svg" alt="دانلود کتابچه‌های اموزشی نهضت درخت">
                        </a>
                    </div>
                    <div>
                        <a href="{{route('booklet')}}">
                            <p class="text-center iransans-500 text-[15px]">کتابچه‌های آموزشی</p>
                        </a>
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