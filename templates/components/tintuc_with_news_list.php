

<?php
$newsnb =
    $d->rawQuery("select name$lang,  desc$lang, date_created, slugvi, id, photo 
        from #_news where type = ? 
        and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc limit 4",
        array('tin-tuc'));
if(count($newsnb)) { ?>
        <div class="block-thieves-news">
    <div class="container py-4">
        <div class="title-main">
            <h2 class=" text-white text-uppercase">
                Về nông trại An NHiên
                <span class="decoration"></span>
            </h2>
            <p class="title-main__desc  text-white">An Nhiên Farm không chỉ là nơi trải nghiệm mô hình nông trại hiện đại mà còn là điểm đến giáo dục về sự quan trọng của bền vững và tôn trọng đối với thiên nhiên.</p>
        </div>
        <div class="content-news-index">
            <div class="content-news">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <?php if($newsnb[0][$sluglang]!=""){ ?>
                            <div class="main-news">
                                <div class="news-img">
                                    <a href="<?= $newsnb[0][$sluglang] ?>" title="<?= $newsnb[0]['name'.$lang] ?>">
                                        <img onerror="this.src='<?=THUMBS?>/680x510x1/assets/images/noimage.png';"
                                             src="<?=THUMBS?>/680x510x1/<?= UPLOAD_NEWS_L.$newsnb[0]['photo'] ?>"
                                             class="img-responsive" alt="<?= $newsnb[0]['name'.$lang] ?>"></a>
                                </div>
                                <div class="main-news__detail">
                                    <div class="name-news"><a href="<?= $newsnb[0][$sluglang] ?>" title="<?=
                                        $newsnb[0]['name'.$lang] ?>"><?= $newsnb[0]['name'.$lang] ?></a></div>
                                    <div class="desc-news text-split"><?= htmlspecialchars_decode($newsnb[0]['desc'
                                        .$lang])?></div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-12 col-lg-6">
                        <?php for($i=1;$i<count( $newsnb );$i++) { ?>
                            <?php if($newsnb[$i][$sluglang]!=""){ ?>
                                <div class="item-news mb-4 clearfix">
                                    <div class="row">
                                        <div class="col-2">
                                            <div class="row">
                                                <div class="_image">
                                                    <a href="<?= $newsnb[$i][$sluglang] ?>" title="<?= $newsnb[$i]['name'
                                                    .$lang] ?>">
                                                        <img
                                                                onerror="this
                                                                        .src='<?=THUMBS?>/110x110x1/assets/images/noimage.png';"
                                                                src="<?=THUMBS?>/110x110x1/<?= UPLOAD_NEWS_L.$newsnb[$i]['photo'] ?>" class="img-responsive" alt="<?= $newsnb[$i]['name'.$lang] ?>"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-10 ps-5">
                                            <div class="">
                                                <div class="name-news" style="margin-top:0"><a href="<?=
            $newsnb[$i][$sluglang] ?>" title="<?= $newsnb[$i]['name'.$lang] ?>"><?= $newsnb[$i]['name'.$lang] ?></a></div>
                                                <div class="desc-news text-split"><?= htmlspecialchars_decode
                                                    ($newsnb[0]['desc'.$lang]) ?></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
<?php } ?>