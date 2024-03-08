@extends('layouts.main',['footer'=>true])

@section('tab_title')
    نهضت درخت | فصل‌ها و طرح‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/fontirannum.css')
    <link rel="stylesheet" href="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.css">
    <script type="text/javascript" src="https://unpkg.com/@majidh1/jalalidatepicker/dist/jalalidatepicker.min.js"></script>
@endsection
@section('content')
<main class="bg-[#f8fafc]">
    
    @if (session('status') == 'true')
        <div class="mx-auto max-w-[500px]">
            <div class="w-[95%] bg-[#3f8055] p-2 rounded-[5px] my-2 mx-auto">
                    
                <div class="text-center iransans-bold text-white">
                    <p class="text-[15px]">پویش با موفقیت ثبت گردید.</p> 
                </div>
                
            </div>
        </div>
    @endif
    @if (session('status') == 'false')
        <div class="mx-auto max-w-[500px]">
            <div class="w-[95%] bg-red-400 p-2 rounded-[5px] my-2 mx-auto">
                    
                <div class="text-center iransans-bold text-white">
                    <p class="text-[15px]">ثبت پویش با مشکل مواجه شده است.</p> 
                </div>
                
            </div>
        </div>
    @endif
    
    
    <form class="mb-5" action="{{ route('campain-submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-[20px] m-2">
            <div class="max-w-[500px] mx-auto">
                <h1 class="iransans-bold text-[18px] text-center">بسم الله الرحمن الرحیم</h1>    
            </div>
            <div class="w-full max-w-[1280px] mx-auto mt-[40px]">
                <p class="text-start iransans-400 text-[16px]">
                    یک کنش جمعی، عملیات یا فعالیت اجتماعی با هدف گسترش پوشش گیاهی، طراحی کن!
                </p>
                <p class="text-justify iransans-400 text-[16px]">
                    یعنی با یک برنامهٔ مشخص تلاش کن دیگران را برای کاشت، داشت و بهره‌برداری اصولی از درختان و گیاهان به میدان عمل بیاوری و در یک نقطهٔ جغرافیایی مشخص یا در کل ایران اسلامی، عامل سرسبزی و احیای سرزمین باشی.
                </p>
                <p class="text-start iransans-400 text-[16px]">
                    پس با ثبت مشخصات این پویش جدید، گام اول را در تحقق اهداف و برنامه‌های خود بردار:
                </p>
            </div>
        </div>
    
        <div class="bg-white mobile:max-w-[90%] pc:max-w-[576px] tablet:max-w-[576px] mt-[56px] mb-[40px] mx-auto rounded-[12px] border-[1px] drop-shadow">
            <div class="pt-[12px] m-2">
                <div class="mx-auto">
                    <p class="iransans-bold text-[15px]">مشخصات پویش</p>
                </div>
                <div class="w-full mx-auto">
                    <div class="flex pc:flex-col tablet:flex-col mobile:flex-col justify-center">

                        {{--section one--}}
                        <div class="flex pc:flex-row tablet:flex-row mobile:flex-col justify-center items-center">
                            <div class="pc:w-1/3 mobile:w-full">
                                <div>
                                    <label class="iransans-normal text-[13px] text-[#94a3b8]" for="campain-name">نام پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-[1px] rounded-[8px] w-full h-[40px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('campain-name') border-red-500 @else border-[#cbd5e1] @enderror" type="text" id="campain-name" name="campain-name" value="{{ old('campain-name')}}">
                                    @error('campain-name')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px] text-[#94a3b8]" for="campain-purpose">هدف پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-[1px] rounded-[8px] w-full h-[40px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('campain-purpose') border-red-500 @else border-[#cbd5e1] @enderror" type="text" id="campain-purpose" name="campain-purpose" value="{{ old('campain-purpose')}}">
                                    @error('campain-purpose')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px] text-[#94a3b8]" for="campain-start-date">شروع پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-[1px] w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear cursor-pointer @error('start-date') border-red-500 @else border-[#cbd5e1] @enderror" name="start-date" data-jdp value="{{ old('start-date') }}">
                                    
                                    @error('start-date')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="pc:w-1/3 mobile:w-full">
                                <div>
                                    <label class="iransans-normal text-[13px] text-[#94a3b8]" for="campain-end-date">خاتمه پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-[1px] w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear cursor-pointer @error('start-date') border-red-500 @else border-[#cbd5e1] @enderror" name="finish-date" data-jdp value="{{ old('finish-date') }}">
                                    @error('finish-date')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{--end section one--}}
    
                        {{--section two--}}
                        <div class="flex flex-col justify-center items-center mt-[20px]">
                            <div class="flex mobile:flex-col pc:flex-row justify-center items-center w-full">
                                <div class="pc:w-1/3 mobile:w-full">
                                    <div>
                                        <label class="iransans-normal text-[13px] text-[#94a3b8]" for="campain-location">محدوده جغرافیایی پویش:</label>
                                    </div>
                                    <div>
                                        <input class="text-[13px] iransans-normal border-[1px] w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('geometry-location') border-red-500 @else border-[#cbd5e1] @enderror" type="text" id="campain-location" name="geometry-location" value="{{ old('geometry-location') }}">
                                        @error('geometry-location')
                                            <span class="text-[10px] text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="pc:w-2/3 mobile:w-full pc:ms-5 flex flex-row justify-between item-center mobile:my-4 pc:m-0">     
                                    <div class="flex flex-col items-center justify-center">
                                        <span class="iransans-normal text-[13px]">تصویر پویش:</span>
                                    </div>
                                    <div class="flex flex-col justify-center items-center">
                                        <label class="iransans-normal text-[14px] bg-[#22c55e] text-white p-2 rounded-[12px] pc:hover:brightness-110 transition-all duration-300 cursor-pointer" for="campain-picture">بارگذاری پوستر</label>
                                        <input class="text-[13px] iransans-normal border-[1px] w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pt-[3px]" type="file" id="campain-picture" name="campain-poster"  hidden>
                                        <div>
                                        </div>
                                            @error('campain-poster')
                                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
    
                            <div class="w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px] text-[#94a3b8]" for="campain-description">توضیحات پویش:</label>
                                </div>
                                <div>
                                    <textarea class="text-[13px] iransans-normal border-[1px] w-full h-[200px] rounded-[8px] mt-[3px] ps-[4px] pt-[3px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('description') border-red-500 @else border-[#cbd5e1] @enderror" name="description" id="campain-descrption" cols="10" rows="60"></textarea>
                                    @error('description')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{--end section two--}}
                    </div>
                </div>
            </div>
        
            <div class="mt-[12px] border-t-2 pt-[12px] m-2 max-w-[97%] mx-auto">
                <div class="w-full mx-auto">
                    <p class="iransans-bold text-[15px]">آغازگر پویش</p>
                </div>
                <div class="w-full mx-auto">
                    <div class="flex pc:flex-row tablet:flex-row mobile:flex-col justify-center items-center">
    
                        <div class="pc:w-1/3 mobile:w-full">
                            <div>
                                <label class="iransans-normal text-[13px] text-[#94a3b8]" for="firstname">نام:</label>
                            </div>
                            <div>
                                <input class="text-[13px] iransans-normal border-[1px] w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('leader-firstname') border-red-500 @else border-[#cbd5e1] @enderror" type="text" id="firstname" name="leader-firstname" value="{{ old('leader-firstname') }}">
                                @error('leader-firstname')
                                    <span class="text-[10px] text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                            <div>
                                <label class="iransans-normal text-[13px] text-[#94a3b8]" for="lastname">نام خانوادگی:</label>
                            </div>
                            <div>
                                <input class="text-[13px] iransans-normal border-[1px] w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('leader-lastname') border-red-500 @else border-[#cbd5e1] @enderror" type="text" id="lastname" name="leader-lastname" value="{{ old('leader-lastname') }}">
                                @error('leader-lastname')
                                    <span class="text-[10px] text-red-500">{{ $message }}</span>
                                @enderror
                            </div>            
                        </div>
        
                        <div class="pc:w-1/3 mobile:w-full ">
                            <div>
                                <label class="iransans-normal text-[13px] text-[#94a3b8]" for="phone">شماره تلفن:</label>
                            </div>
                            <div>
                                <input class="text-[13px] border-[1px] w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] focus:outline-dashed outline-1 outline-offset-1 focus:outline-[#cbd5e1] outline-white transition-all duration-300 ease-linear @error('leader-phone') border-red-500 @else border-[#cbd5e1] @enderror" type="text" id="phone" name="leader-phone"  value="{{ old('leader-phone') }}" oninput="validateEnglishNumber(this)">
                                <div class="text-red-500 iransans-normal hidden text-[10px] mt-1" id="errorMessage">از اعداد انگلیسی استفاده کنید.</div>
                                @error('leader-phone')
                                    <span class="text-[10px] text-red-500 iransans-normal">{{ $message }}</span>
                                @enderror
                            </div>    
                        </div>  
                    </div>
                </div>
            </div>
    
            <div class="flex flex-row justify-center items-center mx-auto max-w-[97%] my-5 pc:hover:brightness-110 transition-all duration-300">
                <button class="bg-[#22c55e] text-white text-[14px] p-2 rounded-[12px] w-full h-[48px] iransans-normal" type="submit">
                    ثبت پویش
                </button>
            </div>
        </div>
    </form>

</main>
@endsection

@push('scripts')
    @vite('resources/js/datepicker.js')
    <script>
        function validateEnglishNumber(input) {
            var englishNumberPattern = /^[0-9]*$/;

            if (!englishNumberPattern.test(input.value)) {
                // Show error message
                document.getElementById('errorMessage').classList.remove('hidden');
                document.getElementById('errorMessage').classList.add('block');
                input.value = '';
                
            } else {
                // Hide error message
                document.getElementById('errorMessage').classList.remove('block');
                document.getElementById('errorMessage').classList.add('hidden');
                
                
                
            }
        }
    </script>
@endpush