@extends('layouts.main',['footer'=>true])

@section('tab_title')
    نهضت درخت | فصل‌ها و طرح‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
    <style>
        /* style for divider of this page */
        .hr-text {
            width: 70%;
            border: 0;
            line-height: 1em;
            position: relative;
            text-align: center;
            height: 1.5em;
            font-size: 14px;
            margin: 30px auto;
            font-family: 'IRANSansX';
            font-weight: bold;
            font-size: 22px;
        }

        .hr-text::before {
            content: "";
            background: linear-gradient(to right, transparent, black, transparent);
            position: absolute;
            left: 0;
            top: 50%;
            width: 100%;
            height: 1px;
        }

        .hr-text::after {
            content: attr(data-content);
            position: relative;
            padding: 0 7px;
            line-height: 1.5em;
            color: black;
            background-color: white;
        }
    </style>
@endsection


@section('content')
    <main class="my-5 flex flex-col justify-center w-full">
        <div class="w-full mx-auto max-w-[1950px]">
            {{-- first section in the page --}}
            <div>
                <div class="mt-5">
                    <hr class="hr-text gradient" data-content="طرح‌ها و پویش‌های مردمی فعال">
                </div>
                <div class="flex flex-col pc:w-3/4 pc:mx-auto">
                    <div class="tablet:flex tablet:felx-row tablet:justify-around">
                        

                        <div class="w-1/2 mx-auto">
                            <a href="{{ route('campain') }}">
                                <img class="mobile:w-[150px] tablet:w-[85px] mx-auto rounded-[50%]" src="assets/layouts/landing/sessionhistory.svg" alt="">
                            </a>
                            <a href="{{ route('campain') }}">
                                <p class="text-black text-center iransans-600 my-5">پویش خود را ثبت کن</p>
                            </a>
                        </div>
                        <div class="w-1/2 mx-auto">
                            <a href="{{route("palestine")}}">
                                <img class="mobile:w-[150px] tablet:w-[85px] mx-auto rounded-[50%]" src="/assets/pages/sessions/palestain.png" alt="">
                            </a>
                            <a href="{{route("palestine")}}">
                                <p class="text-black text-center iransans-600 my-5">صبح زیتون</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end first section in the page --}}

            {{-- second section in the page --}}
            <div>
                <div class="mt-5">
                    <hr class="hr-text gradient" data-content="فصل‌ها">
                </div>
                <div class="flex flex-col pc:w-3/4 pc:mx-auto">
                    <div class="tablet:flex tablet:felx-row tablet:justify-around">
                        <div class="w-1/2 mx-auto">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" mx-auto src="/assets/pages/sessions/createhole.svg" alt="">
                            <p class="text-black text-center iransans-600 my-5">۱. فصل چاله‌کنی</p>
                        </div>
                        <div class="w-1/2 mx-auto">
                            <a href="{{route("palestineseason")}}">
                                <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="/assets/pages/sessions/Seedling-season-gray.svg" alt="">
                            </a>
                            <a href="{{route("palestineseason")}}">
                                <p class="text-black text-center iransans-600 my-5">۲. فصل نهال‌کاری</p>
                            </a>
                        </div>
                    </div>

                    <div class="tablet:flex tablet:felx-row tablet:justify-around">
                        <div class="w-1/2 mx-auto">
                            <a href="{{route("seeder")}}">
                                <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="/assets/pages/sessions/sowing-season-gray.svg" alt="">
                            </a>
                            <a href="{{route("seeder")}}">
                                <p class="text-black text-center iransans-600 my-5">۳. فصل بذرکاری</p>
                            </a>
                        </div>

                        <div class="w-1/2 mx-auto">
                            <a href="{{ route('cutting-season') }}">
                                <img class="mobile:w-[150px] tablet:w-[95px] mx-auto" src="/assets/pages/sessions/cutting-active.svg" alt="">
                            </a>
                            <a href="{{ route('cutting-season') }}">
                                <p class="text-black text-center iransans-600 my-5">۴. فصل قلمه‌زنی</p>
                            </a>
                        </div>
                    </div>
                   
                    <div class="tablet:flex tablet:felx-row tablet:justify-around">
                        <div class="w-1/2 mx-auto">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="/assets/pages/sessions/Growing-seedlings-gray.svg" alt="">
                            <p class="text-black text-center iransans-600 my-5">۵. فصل پرورش نهال</p>
                        </div>
                        <div class="w-1/2 mx-auto">
                            <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="/assets/pages/sessions/watering-gray.svg" alt="">
                            <p class="text-black text-center iransans-600 my-5">۶. فصل آبیاری</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end second section in the page --}}
    
            {{-- third section in the page --}}
            <div>
                <div class="mt-5">
                    <hr class="hr-text gradient" data-content="طرح‌ها و پویش‌های مردمی اجرا شده">
                </div>
                <div class="flex flex-col pc:w-3/4 pc:mx-auto">
                    <div class="tablet:flex tablet:felx-row tablet:justify-around">
                        
                        <div class="w-1/2 mx-auto">
                            <a href="{{route("motherseeder")}}">
                                <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="/assets/pages/sessions/motherseeder-gray.png" alt="">
                            </a>
                            <a href="{{route("motherseeder")}}">
                                <p class="text-black text-center iransans-600 my-5">نذر سبز مادری</p>
                            </a>
                        </div>

                        <div class="w-1/2 mx-auto">
                            <a href="{{route("hosseinplant")}}">
                                <img class="mobile:w-[150px] tablet:w-[85px] mx-auto" src="/assets/pages/sessions/plans.png" alt="">
                            </a>
                            <a href="{{route("hosseinplant")}}">
                                <p class="text-black text-center iransans-600 my-5">درخت سدر؛ نشانه‌ای از حسین (ع)</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- end third section in the page --}} 
        </div>
    </main>    
@endsection