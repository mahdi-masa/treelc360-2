@extends('layouts.main', ['footer'=> true])

@section('tab_title')
    نهضت درخت | کتابچه‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/taha.css')
@endsection

@section('content')
    <main class="flex content-center flex-col  justify-center w-full">
        <div class="flex pc:flex-row mobile:flex-col justify-center mobile:w-full mx-auto pc:w-[80%]">

            {{-- video in the page --}}
            <div class="pc:w-3/5 mobile:p-[10px] flex flex-col justify-center content-center">
                <video class="rounded-[8px]" poster="/assets/pages/booklets/videoPoster.jpg" controls>
                    <source src="./assets/pages/booklets/Correct-planting-1080H_2.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
            {{-- finish video of the page --}}


            {{-- start booklets in the page --}}
            <div class="pc:w-2/5 flex flex-col justify-center content-center">
                <div class="wrapper flex flex-col justify-center content-center">
                    <div class="flex-col flex bg-[#edf7f2] p-4 m-4 shadow-[1px_3px_3px_0px_rgba(0,0,0,0.4)] rounded-[8px] h-28">
                        <p class="text-right iransans-600 text-[18px] mb-[15px] whitespace-nowrap overscroll-y-none overflow-y-hidden overflow-x-auto">کتابچه چرا درخت بکاریم؟</p>
                        <div class="text-center">
                                <a class="bg-[#00914b] px-8 p-2 iransans-500 rounded text-white" href="{{route('booklets.book-1')}}">مشاهده کتابچه</a>
                        </div>
                    </div>
                    <div class="flex-col flex bg-[#edf7f2] p-4 m-4 shadow-[1px_3px_3px_0px_rgba(0,0,0,0.4)] rounded-[8px] h-28">
                        <p class="text-right iransans-600 text-[18px] mb-[15px] whitespace-nowrap overscroll-y-none overflow-y-hidden overflow-x-auto">کتابچه چطوری درخت بکاریم؟</p>
                        <div class="text-center">
                            <button class="bg-[#00914b] px-8 p-2 iransans-500 rounded text-white text-[15px]">
                                <a href="{{route('booklets.book-2')}}">مشاهده کتابچه</a>
                            </button>
                        </div>
                    </div>
                    <div class="flex-col flex bg-[#edf7f2] p-4 m-4 shadow-[1px_3px_3px_0px_rgba(0,0,0,0.4)] rounded-[8px] h-28">
                        <p class="text-right iransans-600 text-[18px] mb-[15px] w-full whitespace-nowrap overscroll-y-none overflow-y-hidden overflow-x-auto">چگونه برای پرورش درختان حرکت عمومی ایجاد کنیم؟</p>
                        <div class="text-center">
                            <button class="mx-atuo bg-[#00914b] px-8 p-2 iransans-500 rounded text-white">
                                <a href="{{route('booklets.book-3')}}">مشاهده کتابچه</a>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>
            {{-- finish booklets in the page --}}
        </div>
    </main>
@endsection


