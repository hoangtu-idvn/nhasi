<?php
$dichvu =



    $d->rawQuery("select name$lang,  desc$lang, date_created, slugvi, id, photo from #_news where type = ? and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc limit 4",
    array('dich-vu'));
if(count($dichvu)) { ?>
<div class="block-service bg-main">
    <div class="wrap-dichvu wrapper py-5">
        <div class="title-main reverse">
                <h2>
                    Dịch Vụ Chúng Tôi
                    <span class="decoration"></span>
                </h2>
            <p class="title-main__desc">
                Dịch vụ của chúng tôi cung cấp giải pháp toàn diện trong chăm sóc da và điều trị các vấn đề da liễu, với cam kết mang lại hiệu quả cao và sự hài lòng cho khách hàng.
            </p>
            </div>
            <div class="row">
                    <?php foreach($dichvu as $k => $v) { ?>
                        <!-- <div class="product"> class mặc định của source -->
                            <div class="col-md-6 col-12 dichvu-items news-item">
                                <a class="box-product text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                                    <p class="pic-product scale-img">
                                        <?=$func->getImage(['sizes' => '280x280x1', 'isWatermark' => false, 'prefix' => 'news', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name'.$lang]])?>
                                    </p>
                                    <div class="_content">
                                        <h3 class="news-name"><?=$v['name'.$lang]?></h3>
                                        <p>
                                            <?=$v['desc'.$lang]?>
                                        </p>
                                    </div>
                                </a>
                            </div>
                    <?php } ?>
                </div>
        </div>
    </div>
<?php } ?>
