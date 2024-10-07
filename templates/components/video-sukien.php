<?php

$video_home = $d->rawQuery("select link_video, id, name$lang from #_photo where type = ? and act <> ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb, id desc", array('video', 'photo_static'));

$sukien =
    $d->rawQuery(
        "select name$lang,  desc$lang, date_created, slugvi, id, photo from #_news where type = ? and find_in_set('noibat', status) and find_in_set('hienthi', status) order by numb,id desc",
        array('su-kien')
    );
?>
<session class="video-event-home">
    <div class="wrapper">
        <div class="video-event-box row">
            <div class="video-event-left col-md-6 col-sm-6 col-xs-12">
                <div id="fotorama-videos" data-width="100%" data-thumbmargin="10" data-height="470" data-fit="cover" data-thumbwidth="236" data-thumbheight="140" data-allowfullscreen="true" data-nav="thumbs">
                    <?php foreach ($video_home as $k => $v) { ?>
                        <a href="https://youtube.com/watch?v=<?= $func->getYoutube($v['link_video']) ?>" title="<?= $v['name' . $lang] ?>"></a>
                    <?php } ?>
                </div>
            </div>
            <div class="video-event-right col-md-6 col-sm-6 col-xs-12">
                <?php if (count($sukien)) { ?>
                    <div class="sukien-row ">
                        <?php foreach ($sukien as $k => $v) { ?>
                            <div class="sukien-items ">
                                <div class="image">
                                    <a href="<?= $value['slug' . $lang] ?>">
                                        <?= $func->getImage(['sizes' => '280x200x2', 'isWatermark' => false, 'prefix' => 'news', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                                    </a>
                                </div>
                                <div class="sukien-content">
                                    <p><img src="assets/images/date.png" alt=""><?= date("d/m/Y", $v['ngaytao']) ?> <img src="assets/images/user.png" alt="">By <span>Admin</span></p>
                                    <h3 class="sukien-name"> <a href="<?= $value['slug' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</session>