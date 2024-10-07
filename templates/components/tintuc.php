
<?php
$kienthucIndex =
    $d->rawQuery("select name$lang,  desc$lang, date_created, slugvi, id, photo from #_news where type = ? and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc",
        array('kien-thuc'));
if(count($kienthucIndex)) { ?>
    <div class="block-news">
        <div class="wrap-dichvu wrapper py-5">
            <div class="title-main">
                <h2>
                    KIẾN THỨC
                    <span class="decoration"></span>
                </h2>
                <p class="title-main__desc">Những thông tin mới nhất về xu hướng, nghiên cứu, và công nghệ trong ngành nuôi trồng gà, giúp nông dân cập nhật và áp dụng những phương pháp hiệu quả</p>
            </div>

            <div class="product-wrapper1">
                <div class=" owl-carousel owl-theme owl-page owl-product" data-xsm-items="2:10" data-sm-items="2:10"
                     data-md-items="3:15" data-lg-items="4:15" data-xlg-items="5:15" data-rewind="1"
                     data-autoplay="1" data-loop="0"
                     data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                     data-autoplaytimeout="5000" data-dots="0"
                     data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                     data-nav="1"
                     data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                     data-navcontainer=".control-dichvu">

                    <?php foreach ($kienthucIndex as $k => $v) {
                        echo $custom->news($v, "");
                    } ?>
                </div>
                <div class="control-tintuc control-owl transition"></div>
            </div>

            <div class="w-100 text-center mt-2">
                <a href="kien-thuc" class="btn-xemthem">Xem thêm <span class="mx-2">20</span> kiến thức</a>
            </div>
        </div>
    </div>
<?php } ?>



<?php
$khachhang =
    $d->rawQuery("select name$lang,  desc$lang, date_created, slugvi, id, photo, career from #_news where type = ? and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc",
        array('khach-hang'));
if(count($khachhang)) { ?>
    <div class="block-news">
        <div class="wrap-dichvu wrapper py-5">
            <div class="title-main">
                <h2>
                    Khách hàng nói gì?
                    <span class="decoration"></span>
                </h2>
                <p class="title-main__desc">Những thông tin mới nhất về xu hướng, nghiên cứu, và công nghệ trong ngành nuôi trồng gà, giúp nông dân cập nhật và áp dụng những phương pháp hiệu quả</p>
            </div>

            <div class="product-wrapper1">
                <div class=" owl-carousel owl-theme owl-page owl-product" data-xsm-items="2:0" data-sm-items="2:0"
                     data-md-items="3:15" data-lg-items="3:15" data-xlg-items="3:15" data-rewind="1"
                     data-autoplay="1" data-loop="0"
                     data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                     data-autoplaytimeout="5000" data-dots="0"
                     data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                     data-nav="1"
                     data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                     data-navcontainer=".control-khachhang">

                    <?php foreach ($khachhang as $k => $v) {
                        echo $custom->itemCustomer(array_merge($v, [
                                'thumb_size' => '105x105x1'
                        ]), "khachhang_item", true);
                    } ?>
                </div>
                <div class="control-khachhang control-owl transition"></div>
            </div>
        </div>
    </div>
<?php } ?>


<?php
$tintucIndex =
    $d->rawQuery("select name$lang,  desc$lang, date_created, slugvi, id, photo from #_news where type = ? and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc",
        array('kien-thuc'));
if(count($tintucIndex)) { ?>
    <div class="block-news bg-main">
        <div class="wrap-tintuc wrapper py-5">
            <div class="title-main">
                <h2>
                    Tin Tức
                    <span class="decoration"></span>
                </h2>
                <p class="title-main__desc">Những thông tin mới nhất về xu hướng, nghiên cứu, và công nghệ trong ngành nuôi trồng gà, giúp nông dân cập nhật và áp dụng những phương pháp hiệu quả</p>
            </div>

            <div class="product-wrapper1">
                <div class=" owl-carousel owl-theme owl-page owl-product" data-xsm-items="2:10" data-sm-items="2:10"
                     data-md-items="3:15" data-lg-items="3:20" data-xlg-items="3:30" data-rewind="1"
                     data-autoplay="1" data-loop="0"
                     data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                     data-autoplaytimeout="5000" data-dots="0"
                     data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                     data-nav="1"
                     data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                     data-navcontainer=".control-tintuc">

                    <?php foreach ($tintucIndex as $k => $v) {
                        echo $custom->news($v, "");
                    } ?>
                </div>
                <div class="control-tintuc control-owl transition"></div>
            </div>

        </div>
    </div>
<?php } ?>

