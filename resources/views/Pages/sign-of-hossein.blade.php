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
        <div>
            <img loading="lazy" class="mx-auto" src="./assets/pages/sign-of-hossein/sedrposter.jpg" alt="">
        </div>

        {{-- second section-- some content about platn --}}
        <div class="pc:w-3/4 mx-auto mt-8 mobile:p-2 pc:-p-0">
            <h2 class="iransans-500 text-[32px] text-justify">درخت سدر؛ نشانه‌ای از حسین <span style="font-size: 10px; font-weight: 800;"> علیه السلام </span></h2>
            <p class="iransans-600 text-[16px] text-justify">اربعین؛ فصل نشانه گذاری مسیر زیارت امام حسین <span style="font-size: 10px; font-weight: 800;"> علیه السلام </span> با درخت سدر است.</p>
            <p class="iransans-600 text-[16px] text-justify">بذر سدر (کُنار)، هدیۀ زائران ایرانی به خادمان عراقی حضرت اباعبدالله الحسین <span style="font-size: 10px; font-weight: 800;"> علیه السلام </span> برای کاشتن این نشان عشق، ایثار و مقاومت است.</p>
            <div class="mt-10">

                <p class="iransans-600 text-[16px] text-justify">
                    <img loading="lazy" draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/tree.svg">
                    #نهضت_درخت
                </p>
                <p class="iransans-600 text-[16px] text-justify">
                    <img loading="lazy" draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/wave.svg">
                    #چرخه_حیات
                </p>
            </div>
            <hr class="w-1/2 my-10 mx-auto">
            <div class="mt-10">
                <h2 class="iransans-500 text-[32px] text-justify">شجرة السدر؛ آية من الحسين<span style="font-size: 10px; font-weight: 800;"> علیه السلام </span></h2>
                <p class="iransans-600 text-[16px] text-justify">أربعين؛ موسم تحديد طريق حج الإمام الحسين <span style="font-size: 10px; font-weight: 800;"> علیه السلام </span> بعلامة شجرةالسدر.</p>
                <p class="iransans-600 text-[16px] text-justify">يقدم الزوار الإيرانيون بذور السدر (النبق) إلى الخدم العراقيين لحضرة أباعبدالله الحسين <span style="font-size: 10px; font-weight: 800;"> علیه السلام </span> حتى يستمر رمز الحب والتضحية والمقاومة على طول الطريق.</p>

                <div class="mt-10">
                    <p class="iransans-600 text-[16px] text-justify">
                        <img loading="lazy" draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/tree.svg">
                        #نهضة‌الأشجار
                    </p>
                    <p class="iransans-600 text-[16px] text-justify">
                        <img loading="lazy" draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/wave.svg">
                        #دوران‌الحیاة
                    </p>
                </div>
                
            </div>

        </div>


        {{-- third section--- is about download resources --}}
        <div class="w-3/4 mx-auto my-8 flex flex-col justify-center content-center">
            <div class="flex mobile:flex-col tablet:flex-row justify-center content-center mt-10">
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-3/4 mx-auto" src="./assets/pages/sign-of-hossein/farsibooklet.jpg" alt="">
                    <p class="iransans-500 text-[15px]">کتابچه راهنما به فارسی</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/دفترچه-فارسی.pdf?versionId=">دریافت محتوا</a>

                </div>
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-3/4 mx-auto" src="./assets/pages/sign-of-hossein/arabicbooklet.jpg" alt="">
                    <p class="iransans-500 text-[15px]">کتابچه راهنما به عربی</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/دفترچه-عربی.pdf?versionId=">دریافت محتوا</a>

                </div>

            </div>

            <div class="flex mobile:flex-col tablet:flex-row justify-center content-center mt-10">
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-3/4 mx-auto" src="./assets/pages/sign-of-hossein/nocontentposter.jpg" alt="">
                    <p class="iransans-500 text-[15px]">پوستر با کیفیت اصلی بدون متن</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/طرح-درخت-سدر-نشانه_ای-از-حسین-علیه-السلام---بدون-متن-.jpg?versionId=">دریافت محتوا</a>

                </div>
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="w-3/4 mx-auto" src="./assets/pages/sign-of-hossein/contentposter.jpg" alt="">
                    <p class="iransans-500 text-[15px]">پوستر با کیفیت اصلی با متن</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/طرح-درخت-سدر-نشانه_ای-از-حسین-علیه-السلام-.jpg?versionId=">دریافت محتوا</a>

                </div>

            </div>

            <div class="flex mobile:flex-col tablet:flex-row justify-center items-end mt-10">
                <div class="flex flex-col justify-center content-center text-center mobile:mb-3 tablet:m-0">
                    <img loading="lazy" class="w-3/4 mx-auto" src="./assets/pages/sign-of-hossein/noContentSedrPoster.jpg" alt="">
                    <p class="iransans-500 text-[15px] mt-2">تصویر با کیفیت باب السدره بدون متن</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/تصویر-باب-السدره-حرم-حضرت-امام-حسین-علیه-السلام.jpg?versionId=">دریافت محتوا</a>

                </div>
                <div class="flex flex-col justify-center content-end text-center">
                    <img loading="lazy" class="w-3/4 mx-auto" src="./assets/pages/sign-of-hossein/contentSedrPoster.jpg" alt="">
                    <p class="iransans-500 text-[15px] mt-2">تصویر با کیفیت باب السدره با متن</p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/تصویر-باب-السدره-با-متن-درخت-سدر-نشانه_ای-از-حسین-علیه-السلام.jpg?versionId=">دریافت محتوا</a>

                </div>

            </div>
            
            <div class="flex mobile:flex-col tablet:flex-row justify-center content-center mt-10">
                
                <div class="flex flex-col justify-center content-center text-center">
                    <img loading="lazy" class="mx-auto" src="./assets/pages/sign-of-hossein/banner.jpg" alt="">
                    <p class="iransans-500 text-[15px]">طرح درخت سدر با کیفیت اصلی جهت چاپ بنر </p>
                    <a class="bg-[#61ce70] px-8 p-2 iransans-500 rounded text-white mt-5 w-fit mx-auto" href="https://booklet.s3.ir-thr-at1.arvanstorage.ir/sign-of-hossein/banner-o.jpg?versionId=">دریافت محتوا</a>

                </div>

            </div>
        </div>


        {{-- fourth section how to plant --}}
        <div class="p-3 pc:w-3/4 pc:mx-auto">

            {{-- in farsi lang --}}
            <hr class="pc:w-1/2 py-10 mx-auto">

        
            <h2 class="iransans-500 text-[32px] mt-5">مراحل کاشت هستۀ درخت سدر و نگهداری اولیه:</h2>
            <p class="iransans-600 text-[16px] text-justify">
                الف. ثبت مشخصات (در صورت امکان): 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۱. به سامانه www.lc360.ir مراجعه کنید.             
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۲. در بخش «نهضت درخت» با ثبت مشخصات به انسجام این نهضت کمک نمایید. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۳. مکانی که جهت کاشت هسته‌ها انتخاب نموده‌اید را در سامانه ثبت کنید. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۴. از اقدامات گوناگون خود تصویربرداری کرده و جهت فرهنگ‌سازی برای انتشار به آیدی lc360admin@ در پیام رسان‌های ایتا، بله و روبیکا ارسال نمایید.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ب. چاله کنی (در صورت امکان):
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۱. یک دایره به قطر حدود پنجاه سانتی‌متر در وسط زمین ترسیم کنید. بهتر است با توجه به ردّ سیلاب یا جریان آب باران، مکان چاله را انتخاب نمائید تا باران هم بتواند در آبیاری شریک شود.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۲. خاک سطح الارض (یعنی خاک تا عمق حدود 10 سانتی‌متری) را از روی دایره با بیل کنده و در گوشه‌ای جداگانه جمع‌آوری کنید. این خاک، به واسطۀ ریزجاندارانی که دارد غنی‌ترین بخش خاک است. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۳. تا آن‌جا که توان دارید عمق چاله را بیشتر کنید. (حدود پنجاه سانتی‌متر)
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۴. خاک سطح الارضِ جمع‌آوری شده را کمی نرم کرده و در عمق چاله بریزید.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۵. بقیۀ خاک‌ها را اطراف چاله بریزید تا با ایجاد یک دیوارۀ کوچک، چاله آب بیشتری در خود جای دهد.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                پیشنهاد: در صورت عدم امکان ایجاد چاله با مشخصات فوق، سعی کنید حدالمقدور با هر ابزاری (مانند: قاشق، یک تکه چوب یا هر شئ نوک تیز و محکم) که در دسترس دارید، چاله‌ای هر چند کوچک ایجاد کرده و خاک کف آن را جهت کاشت هسته‌ها نرم نمایید.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ج. کاشت هسته: 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                سه هستۀ سدر را جدا از هم در عمق دو سانتی‌متری خاک کف چاله فرو کرده و روی آن‌ها را با خاک بپوشانید.
            </p>
            <p class="iransans-bold text-[16px] my-3 text-justify">
                تذکرات:
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۱. روی هسته‌های سدر نباید بیش از دو سانتی‌متر خاک باشد، چرا که جوانه‌زنی هسته‌ها را با مشکل مواجه می‌کند.            
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۲. چاله ظرفی طبیعی برای نگهداشتن هر چه بیشتر آب مورد نیاز جهت رشد گیاه است. لذا چاله را پس از کاشت هسته‌ها با خاک پر نکنید.            
            </p>
            <p class="iransans-bold text-[16px] my-3 text-justify">
                د. آبیاری: 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                در فصل گرم سال (از اردیبهشت تا شهریور) جوانه‌های سبز شده را هر دو هفته یک‌بار آبیاری کنید (حدود بیست لیتر در هر چاله آب بریزید). شما می‌توانید با افزایش نوبت‌های آبیاری، حجم آب را کاهش دهید.  
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                استقامت شما در تابستان اول جهت آبیاری جوانه‌های سبز شده، نشانی پا بر جا از زیارت حضرت سید الشهداء علیه‌السلام ایجاد خواهد کرد. 
            </p>

            <div class="mt-10">

                <p class="iransans-600 text-[16px]">
                    <img draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/tree.svg">
                    #نهضت_درخت
                </p>
                <p class="iransans-600 text-[16px]">
                    <img draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/wave.svg">
                    #چرخه_حیات
                </p>
            </div>
            
            

            <hr class="w-1/2 py-10 mx-auto">


            {{-- in arabic language --}}
            <h2 class="iransans-500 text-[32px] mt-8">
                مراحل الزراعة نوی شجرة السدر والصيانة الأولى:
            </h2>
            <p class="iransans-600 text-[16px]">
                الف. إعداد الحُفر (إن أمكن): 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۱. ارسم دائرة يبلغ قطرها حوالي خمسين سنتيمتراً في وسط الأرض. ومن الأفضل اختيار موقع الحفرة حسب تدفق مياه الفيضان أو المطر حتى يتمكن المطر من المشاركة في الري. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۲. احفر التربة السطحية (أي التربة حتى عمق حوالي ۱۰ سم) من الدائرة بمجرفة واجمعها في زاوية منفصلة. هذه التربة هي أغنى جزء من التربة بسبب الكائنات الحية الدقيقة التي تحتوي عليها.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۳. اجعل الحفرة عميقة قدر الإمكان. (حوالي خمسين سنتيمترا)
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۴. قوموا بتليين التربة المتجمعة على سطح الأرض وسكبها في عمق الحفرة.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ۵. صب بقية التربة حول الحفرة لإنشاء جدار صغير حتى تتمكن الحفرة من استيعاب المزيد من الماء.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                اقتراح: إذا لم يكن من الممكن عمل حفرة بالمواصفات المذكورة أعلاه، حاولوا قدر الإمكان باستخدام أي أداة (مثل: ملعقة، قطعة خشب أو أي جسم حاد وقوي) متوفرة لديكم، قوموا بعمل ثقب مهما كان صغير، ويملأ قاعه بالتربة، و تلين لزراعة الحبات. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ب.زراعة النوی: 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ضع ثلاثة نوى من السدر في التربة بعمق سنتيمترين في قاع الحفرة وقم بتغطيتها بالتربة. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                التذكيرات:
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ١. يجب أن لا يكون على النواة أكثر من سنتيمترين تراب حتى لا تواجه النواة عرقلة في مسيرة نموها
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ٢. الحفرة وعاء طبيعي لاحتواء أكثر مقدار من الماء من أجل نمو النبات . لذلك لا تملؤا الحفرة بالتراب بعد زرع النواة .
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                ج. الري: 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                في الموسم الحار للعام(من مايو إلى سبتمبر)، قوموا بسقي البراعم مرة كل أسبوعين (صب حوالي عشرين لترًا من الماء في كل حفرة). يمكنك تقليل كمية الماء عن طريق زيادة وتيرة الري. 
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                إن مثابرتكم في الصيف الأول على سقي البراعم ستكون علامة دائمة على زيارة  سيد الشهداء عليه السلام الثابتة.
            </p>
            <p class="iransans-600 text-[16px] my-3 text-justify">
                د. يرجى التقاط صور أو فیدیو من مراحل الزراعة والإنبات والسقي وإرسالها إلى المعرف «sedr.40» على الانستقرام من أجل التثقیف.
            </p>
            
            
            <div class="mt-10">

                <p class="iransans-600 text-[16px]">
                    <img draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/tree.svg">
                    #نهضت_درخت
                </p>
                <p class="iransans-600 text-[16px]">
                    <img draggable="false" role="img" class="inline w-5" alt="🌳" src="./assets/pages/sign-of-hossein/wave.svg">
                    #چرخه_حیات
                </p>
            </div>

        </div>
    </main>    
@endsection