<footer id="footer" >
    <div class="footer-top">
        <div class="wrapper">
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="svg-logo">
                        <img src="assets/images/img/logo.svg" alt="logo" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="footer-top__text position-relative">
                    Tại Trung Tâm Da Liễu Sài Gòn, chúng tôi cam kết mang đến dịch vụ chăm sóc da chất lượng hàng đầu với đội ngũ bác sĩ chuyên khoa giàu kinh nghiệm. Chúng tôi sử dụng công nghệ tiên tiến để điều trị hiệu quả các vấn đề về da như mụn, nám, tàn nhang và sẹo rỗ. Đến với chúng tôi, bạn sẽ nhận được sự tư vấn tận tình và phương pháp điều trị an toàn, giúp bạn nhanh chóng lấy lại làn da khỏe mạnh và tự tin.
                    </p>
                </div>
             
            </div>
        </div>
    </div>
    <div class=" footer_article">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="row mb-4">
                        <div class="col-md-6 mb-3">
                            <!--                        <h2 class="title-footer">Icarepet</h2>-->
                            <!--                        <div class="info-container">-->
                            <!--                            <div class="info">-->
                            <!--                                <span class="icon"><i class="fa fa-home"></i></span>-->
                            <!--                                <p>--><?php //=$optsetting["diachi$lang"]?><!--</p>-->
                            <!--                            </div>-->
                            <!---->
                            <!--                            <div class="info">-->
                            <!--                                <span class="icon"><i class="fa fa-envelope"></i></span>-->
                            <!--                                <p>Email: --><?php //=$optsetting["email"]?><!--</p>-->
                            <!--                            </div>-->
                            <!---->
                            <!--                            <div class="info">-->
                            <!--                                <span class="icon"><i class="fa fa-phone"></i></span>-->
                            <!--                                <p>Điện thoại: --><?php //=$optsetting["dienthoai"]?><!--</p>-->
                            <!--                            </div>-->
                            <!---->
                            <!--                            <div class="info">-->
                            <!--                                <span class="icon"><i class="fa fa-globe"></i></span>-->
                            <!--                                <p>--><?php //=$optsetting["website"]?><!--</p>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <div class="footer-info__detail">
                                <h2 class="title-footer">Thông tin liên hệ</h2>
                                <div>
                                <div class="info-container">
                            <div class="info">
                                <span class="icon"><i class="fa fa-home"></i></span>
                                <div>
                                    <p>Địa chỉ:</p>
                                    <p><?=$optsetting["address"]?></p>
                                </div>
                            </div>
                            <div class="info">
                                <span class="icon"><i class="fa fa-phone"></i></span>
                                <div>
                                    <p>Điện thoại:</p>
                                    <p><?=$optsetting["phone"]?></p>
                                </div>
                            </div>
                            <div class="info">
                                <span class="icon"><i class="fa fa-envelope"></i></span>
                                <div>
                                    <p>Email:</p>
                                    <p><?=$optsetting["email"]?></p>
                                </div>
                            </div>

                      

                         
                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <h2 class="title-footer">Dịch vụ</h2>
                            <ul class="footer-ul">
                                <?php foreach($dichvuFooter as $v) { ?>
                                    <li><a class="text-decoration-none" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="block-map">
                                <?= $optsetting['coords_iframe'] ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                
                <!-- <div class="col-lg-4 col-12 ">
                    <div class="fb-page" data-href="<?= $optsetting['fanpage'] ?>" data-tabs="messages" data-small-header="true" data-height="300" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="<?= $optsetting['fanpage'] ?>" class="fb-xfbml-parse-ignore"><a href="<?= $optsetting['fanpage'] ?>">Facebook</a></blockquote>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="footer-powered">
        <div class="wrapper d-flex align-items-center  justify-content-center">
            <p>Copyright 2024 © All rights reserved. Design By Trung Tâm Da Liễu Sài Gòn Bến Thành</p>
        </div>
    </div>

</footer>
