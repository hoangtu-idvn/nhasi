<?php
if(count($splist)) { ?>
    <div class="block-news">
        <div class="wrap-dichvu wrapper py-5">
            <div class="title-main">
                <h2>
                    Mô Hình Nông Trại
                    <span class="decoration"></span>
                </h2>
                <p class="title-main__desc">Gà thả vườn và trùng quế tại An Nhiên Farm tạo nên một mô hình độc đáo, nơi gà sống tự nhiên, ăn mầm non, kết hợp với trùng quế giúp cải thiện đất đai.</p>
            </div>

            <div class="product-wrapper1">
                <div class=" owl-carousel owl-theme owl-page owl-product" data-xsm-items="2:20" data-sm-items="2:10"
                     data-md-items="3:30" data-lg-items="3:30" data-xlg-items="3:30" data-rewind="1"
                     data-autoplay="1" data-loop="0"
                     data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800"
                     data-autoplaytimeout="5000" data-dots="0"
                     data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn"
                     data-nav="1"
                     data-navtext="<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>"
                     data-navcontainer=".control-splist">
                    <?php foreach ($splist as $k => $v) { ?>
                        <div class="splist-box">
                            <div class="product_box hover-scale animate__animated animate__zoomIn animated"
                            data-animation="animate__zoomIn"><div class="product__photo overflow-hidden"><a
                            href="<?=$v["slug$lang"]?>"><img class="img-full" onerror="this.src='thumbs/307x265x1/assets/images/noimage.png';" src="thumbs/307x265x1/upload/product/<?=$v["photo"]?>" alt="<?=$v["slug$lang"]?>"></a></div>
                             <div class="product__info">
                             <h3
                             class="product__name
                             text-split"><a href="<?=$v["slug$lang"]?>"><?=$v["name$lang"]?></a></h3>
                             </div>
                             </div>
                        </div>

                    <?php } ?>
                </div>
                <div class="control-splist control-owl transition"></div>
            </div>


        </div>
    </div>
<?php } ?>
<?php
if(!empty($splist)){
    foreach ($splist as $stt => $list){
        $products = $cache->get("SELECT * from #_product where type = ? and id_list = ? and find_in_set('hienthi',status) and find_in_set('noibat',status) order by numb", array('san-pham', $list['id']), 'result', 7200);
        if(count($products) > 0) {
        ?>
    <div class="block-splist <?=$stt % 2 == 0 ? 'reverse': ''?> py-4">
        <div class="container">
            <div class="title-main">
                <h2 class="<?=$stt % 2 == 0 ? 'text-white': ''?> text-uppercase">
                    <?=$list["name$lang"]?>
                    <span class="decoration"></span>
                </h2>
                <p class="title-main__desc  <?=$stt % 2 == 0 ? 'text-white': ''?>">An Nhiên Farm không chỉ là nơi trải
                    nghiệm mô hình nông trại hiện đại mà còn là điểm đến giáo dục về sự quan trọng của bền vững và tôn trọng đối với thiên nhiên.</p>
            </div>
            <div class="__content">
                <div class="row row-product">
                    <?php foreach ($products as $k => $v) {
                        echo $custom->products($v);
                    } ?>
                </div>
            </div>
            <div class="w-100 text-center mt-2">
                <a href="<?=$v["slug$lang"]?>" class="btn-xemthem">Xem thêm <span class="mx-2">20</span> sản phẩm</a>
            </div>
        </div>
    </div>
<?php
        }
    }
}
?>