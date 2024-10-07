<?php
$dichvu =
    $d->rawQuery("select name$lang,  desc$lang, date_created, slugvi, id, photo from #_news where type = ? and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc",
    array('dich-vu'));
if(count($dichvu)) { ?>
<div class="block-service">
    <div class="wrap-dichvu wrapper py-5">
        <div class="title-main reverse">
                <p class="title-main__desc">[ SERVICE ]</p>
                <h2>
                    DỊCH VỤ NHA KHOA
                    <span class="decoration"></span>
                </h2>
            </div>

            <div class="product-wrapper1">
                <div class=" owl-carousel owl-theme owl-page owl-product" data-xsm-items="2:10" data-sm-items="2:10"
                    data-md-items="2:15" data-lg-items="2:20" data-xlg-items="4:30" data-rewind="1" data-autoplay="1" data-loop="0"
                    data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                    data-autoplaytimeout="5000" data-dots="0"
                    data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                    data-nav="1"
                    data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                    data-navcontainer=".control-dichvu">

                    <?php foreach($dichvu as $k => $v) { ?>
                        <!-- <div class="product"> class mặc định của source -->
                        <div class="dichvu-items news-item">
                            <a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                <p class="pic-product scale-img">
                                    <?=$func->getImage(['sizes' => '280x280x1', 'isWatermark' => false, 'prefix' => 'news', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                </p>
                                <h3 class="news-name text-center p-3"><?=$v['name'.$lang]?></h3>
                            </a>
                        </div>
                    <?php } ?>
                </div>
                <div class="control-dichvu control-owl transition"></div>
            </div>
        </div>
    </div>
<?php } ?>
