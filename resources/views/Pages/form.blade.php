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
<main>
    @if (session('status'))
    
    <div class="max-w-[500px] mx-auto bg-[#3f8055] p-2 rounded-[5px] my-2">
        <div class="text-center iransans-bold text-white">
            <p>{{ session('status') }}</p>
        </div>
        <div class="text-right text-white">
            <a class="iransans-bold text-[15px]" href="{{route('landing')}}">
                بازگشت به خانه
            </a>
        </div>
    @endif
    </div>
    <form action="{{ route('campain-submit') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mt-[20px] m-2">
            <div class="max-w-[500px] mx-auto">
                <h1 class="iransans-bold text-[18px] text-center">بسم الله الرحمن الرحیم</h1>
                
            </div>
            <div class="w-full max-w-[500px] mx-auto">
                <p class="text-justify iransans-200">
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                </p>
            </div>
        </div>
    
        <div class="mt-[12px] border-t-2 max-w-[500px] mx-auto pt-[12px] m-2">
            <div class="max-w-[500px] mx-auto">
                <p class="iransans-bold text-[15px]">مشخصات پویش</p>
            </div>
            <div class="w-full max-w-[500px] mx-auto">
            
                    <div class="flex pc:flex-col tablet:flex-col mobile:flex-col justify-center">
    
                        {{--section one--}}
                        <div class="flex pc:flex-row tablet:flex-row mobile:flex-col justify-center items-center">
                            <div class="pc:w-1/3 mobile:w-full">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="campain-name">نام پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-2 w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] @error('name') border-red-500 @else border-black @enderror" type="text" id="campain-name" name="name" placeholder="صبح زیتون" value="{{ old('name')}}">
                                    @error('name')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="campain-start-date">شروع پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-2 w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] cursor-pointer @error('start-date') border-red-500 @else border-black @enderror" name="start-date" placeholder="تاریخ شروع" data-jdp value="{{ old('start-date') }}">
                                    
                                    @error('start-date')
                                        <span class="text-[10px] text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="pc:w-1/3 mobile:w-full">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="campain-end-date">خاتمه پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-2 w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] cursor-pointer @error('start-date') border-red-500 @else border-black @enderror" name="finish-date" placeholder="تاریخ خاتمه" data-jdp value="{{ old('finish-date') }}">
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
                                        <label class="iransans-normal text-[13px]" for="campain-location">محدوده پویش:</label>
                                    </div>
                                    <div>
                                        <input class="text-[13px] iransans-normal border-2 w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] @error('geometry-location') border-red-500 @else border-black @enderror" type="text" id="campain-location" name="geometry-location" placeholder="اصفهان" value="{{ old('geometry-location') }}">
                                        @error('geometry-location')
                                            <span class="text-[10px] text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="pc:w-2/3 mobile:w-full pc:ms-5 flex flex-row justify-between item-center mobile:my-4 pc:m-0">
                                    
                                    <div class="flex flex-col items-center justify-center">
                                        <span class="iransans-normal text-[13px]">تصویر پویش:</span>
                                    </div>
                                    <div>
                                        {{-- <label class="iransans-normal text-[13px] bg-[#ffDE0D] p-2 rounded-[5px] cursor-pointer" for="campain-picture">بارگذاری پوستر</label> --}}
                                        {{-- <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pt-[3px]" type="file" id="campain-picture" name="campain-picture" placeholder="صبح زیتون" hidden> --}}
                                        <input class="text-left" type="file" name="campain-poster">
                                        @error('campain-poster')
                                            <span class="text-[10px] text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
    
                            <div class="w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="campain-description">توضیحات پویش:</label>
                                </div>
                                <div>
                                    <textarea class="text-[13px] iransans-normal border-2 w-full h-[200px] rounded-[8px] mt-[3px] ps-[4px] pt-[3px] @error('description') border-red-500 @else border-black @enderror" name="description" id="campain-descrption" cols="10" rows="60" placeholder="لطفا درباره پویش خود توضیحاتی را ارائه دهید."></textarea>
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
    
        <div class="mt-[12px] border-t-2 pt-[12px] m-2 max-w-[500px] mx-auto">
    
            <div class="w-full max-w-[500px] mx-auto">
                <p class="iransans-bold text-[15px]">اطلاعات آغازگر پویش</p>
            </div>
    
            <div class="w-full max-w-[500px] mx-auto">
            
                    <div class="flex pc:flex-row tablet:flex-row mobile:flex-col justify-center items-center">
    
                        <div class="pc:w-1/3 mobile:w-full">
                            <div>
                                <label class="iransans-normal text-[13px]" for="firstname">نام:</label>
                            </div>
                            <div>
                                <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px] @error('leader-firstname') border-red-500 @else border-black @enderror" type="text" id="firstname" name="leader-firstname" placeholder="محمد" value="{{ old('leader-firstname') }}">
                                @error('leader-firstname')
                                    <span class="text-[10px] text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
        
                        <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                            <div>
                                <label class="iransans-normal text-[13px]" for="lastname">نام خانوادگی:</label>
                            </div>
                            <div>
                                <input class="text-[13px] iransans-normal border-2 w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] @error('leader-lastname') border-red-500 @else border-black @enderror" type="text" id="lastname" name="leader-lastname" placeholder="محمدی" value="{{ old('leader-lastname') }}">
                                @error('leader-lastname')
                                    <span class="text-[10px] text-red-500">{{ $message }}</span>
                                @enderror
                            </div>            
                        </div>
        
                        <div class="pc:w-1/3 mobile:w-full ">
                            <div>
                                <label class="iransans-normal text-[13px]" for="phone">شماره تلفن:</label>
                            </div>
                            <div>
                                <input class="text-[13px] border-2 w-full h-[40px] rounded-[8px] mt-[3px] ps-[4px] pb-[4px] @error('leader-phone') border-red-500 @else border-black @enderror" type="text" id="phone" name="leader-phone" placeholder="09131234567" value="{{ old('leader-phone') }}">
                                @error('leader-phone')
                                    <span class="text-[10px] text-red-500">{{ $message }}</span>
                                @enderror
                            </div>    
                        </div>
                        
                    </div>
            
            </div>
    
    
        </div>

        <div class="flex flex-row justify-center items-center  mx-auto w-[30%] my-5 pc:hover:scale-110 transition-all duration-300">
            <button class="bg-[#ffDE0D] p-2 rounded-[5px] w-full iransans-bold" type="submit">
                ثبت پویش
            </button>
        </div>
    </form>
    
    


</main>
@endsection

@push('scripts')
    @vite('resources/js/datepicker.js')
@endpush