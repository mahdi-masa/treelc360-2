@extends('layouts.main',['footer'=>true])

@section('tab_title')
    نهضت درخت | فصل‌ها و طرح‌ها
@endsection

@section('styles')
    @vite('resources/css/app.css')
    @vite('resources/css/fontiran.css')
    @vite('resources/css/fontirannum.css')
@endsection
@section('content')
<main>
    <form action="" method="POST">
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
                                    <label class="iransans-normal text-[13px]" for="poiesh-name">نام پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px]" type="text" id="poiesh-name" name="poiesh-name" placeholder="صبح زیتون">
                                </div>
                            </div>
    
                            <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="poiesh-start-date">شروع پویش:</label>
                                </div>
                                <div>
                                    <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px] cursor-pointer" type="date" id="poiesh-start-date" name="poiesh-start-date" placeholder="1400/2/13">
                                </div>
                            </div>
    
                            <div class="pc:w-1/3 mobile:w-full">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="poiesh-end-date">خاتمه پویش:</label>
                                </div>
                                <div>
                                    <input class="iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px] cursor-pointer text-[13px]" type="date" id="poiesh-end-date" name="poiesh-end-date" placeholder="1400/2/13">
                                </div>
                            </div>
                        </div>
                        {{--end section one--}}
    
                        {{--section two--}}
                        <div class="flex flex-col justify-center items-center mt-[20px]">
                            <div class="flex mobile:flex-col pc:flex-row justify-center items-center w-full">
                                <div class="pc:w-1/3 mobile:w-full">
                                    <div>
                                        <label class="iransans-normal text-[13px]" for="poiesh-nam">محدوده پویش:</label>
                                    </div>
                                    <div>
                                        <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px]" type="text" id="poiesh-name" name="poiesh-name" placeholder="اصفهان">
                                    </div>
                                </div>
                                <div class="pc:w-2/3 mobile:w-full pc:ms-5 flex flex-row justify-between item-center mobile:my-4 pc:m-0">
                                    
                                    <div class="flex flex-col items-center justify-center">
                                        <span class="iransans-normal text-[13px]">تصویر پویش:</span>
                                    </div>
                                    <div>
                                        <label class="iransans-normal text-[13px] bg-[#ffDE0D] p-2 rounded-[5px] cursor-pointer" for="poiesh-picture">بارگذاری پوستر</label>
                                        <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pt-[3px]" type="file" id="poiesh-picture" name="poiesh-picture" placeholder="صبح زیتون" hidden>
                                    </div>
                                </div>
                            </div>
    
                            <div class="w-full mx-[20px]">
                                <div>
                                    <label class="iransans-normal text-[13px]" for="poiesh-discription">توضیحات پویش:</label>
                                </div>
                                <div>
                                    <textarea class="text-[13px] iransans-normal border-2 w-full h-[200px] border-black rounded-[8px] mt-[3px] ps-[4px] pt-[3px]" name="poiesh-discrption" id="poiesh-discrption" cols="10" rows="60" placeholder="لطفا درباره پویش خود توضیحاتی را ارائه دهید."></textarea>
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
                                <label class="iransans-normal text-[13px]" for="first-name">نام:</label>
                            </div>
                            <div>
                                <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px]" type="text" id="first-name" name="first-name" placeholder="محمد">
                            </div>
                        </div>
        
                        <div class="pc:w-1/3 mobile:w-full mx-[20px]">
                            <div>
                                <label class="iransans-normal text-[13px]" for="last-name">نام خانوادگی:</label>
                            </div>
                            <div>
                                <input class="text-[13px] iransans-normal border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px]" type="text" id="last-name" name="last-name" placeholder="محمدی">
                            </div>            
                        </div>
        
                        <div class="pc:w-1/3 mobile:w-full ">
                            <div>
                                <label class="iransans-normal text-[13px]" for="phone">شماره تلفن:</label>
                            </div>
                            <div>
                                <input class="text-[13px] border-2 w-full h-[40px] border-black rounded-[8px] mt-[3px] ps-[4px] pb-[4px]" type="text" id="phone" name="phone" placeholder="09131234567">
                            </div>    
                        </div>
                        
                    </div>
            
            </div>
    
    
        </div>

        <div class="flex flex-row justify-center items-center  mx-auto w-[30%] my-5 pc:hover:scale-110 transition-all duration-300">
            <button class="bg-[#ffDE0D] p-2 rounded-[5px] w-full iransans-bold" type="submit">
                ثبت اطلاعات
            </button>
        </div>
    </form>
    
    


</main>
@endsection