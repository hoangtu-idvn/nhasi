<?php
class Custom
{
    private $d;
    function __construct($d)
    {
        $this->d = $d;
    }


    public function splitArray($tempArr = array(), $divisor = 2)
    {
        if (!is_array($tempArr)) {
            return null;
        } else {
            $totalNum = count($tempArr);
            $num = ceil($totalNum / $divisor);
            $totalArr = array();
            for ($i = 0; $i < ($num - 1); $i++) {
                $offset = $num * $i;
                $length = $num;
                $totalArr[$i] = array_slice($tempArr, $offset, $length);
            }
            return $totalArr;
        }
    }

    public function productPerpage()
    {
        global $total, $perPage, $startpoint, $curPage;
        $total_page = ceil($total / $perPage);
        $a = $startpoint + $perPage;
        if ($total_page == $curPage) {
            $a = $total;
        };
        return 'Hiển thị ' . ($startpoint + 1) . ' - ' . $a . ' trong ' . $total . ' kết quả';
    }

    public function fanpage($width, $height)
    {
        global $optsetting;
        $str = '';
        $str .= '<div class="fb-page" data-href="' . $optsetting['fanpage'] . '" data-tabs="timeline" data-width="' . $width . 'px" data-height="' . $height . 'px" data-small-header="true" data-adapt-container-width="true" data-show-posts="false" data-hide-cover="false" data-show-facepile="true">';
        $str .= '<blockquote cite="' . $optsetting['fanpage'] . '" class="fb-xfbml-parse-ignore"><a href="' . $optsetting['fanpage'] . '">Facebook</a></blockquote>';
        $str .= '</div>';
        return    $str;
    }

    public function splitHotline()
    {
        global $optsetting, $func;
        $str = '';
        // $hotline = str_replace(" ", "", $optsetting['hotline']);
        $arr = explode("-", $optsetting['hotline']);
        if (count($arr) >= 1) {
            foreach ($arr as $v) {
                $str .= '<p>' . $func->formatPhone($v) . '</p>';
            }
        }
        return $str;
    }

    public function limitString($chuoi, $gioihan)
    {
        if (strlen($chuoi) <= $gioihan) {
            return $chuoi;
        } else {
            if (strpos($chuoi, " ", $gioihan) > $gioihan) {
                $new_gioihan = strpos($chuoi, " ", $gioihan);
                $new_chuoi   = substr($chuoi, 0, $new_gioihan) . "...";
                return $new_chuoi;
            }
            $new_chuoi = substr($chuoi, 0, $gioihan) . "...";
            return $new_chuoi;
        }
    }

    public function spaceCreated($timeCreated, $type = 1)
    {
        $str = '';
        $timeCurrent = time();
        $diff = abs($timeCurrent - $timeCreated);
        // echo date('H:i:s d/m/Y',$times_ht);
        // echo date('H:i:s d/m/Y',$dateCreated);

        if ($type == 1) {
            if ($diff <= 60) {
                $str = $diff . ' giây trước';
            } else 
            if ((floor($diff / 60) <= 60) && (floor($diff / 60) >= 1)) {
                $str = floor($diff / 60) . ' phút trước';
            } else 
            if ((floor($diff / (60 * 60)) >= 1) && (floor($diff / (60 * 60)) <= 24)) {
                $str = floor($diff / (60 * 60)) . ' giờ trước';
            } else if ((floor($diff / (60 * 60 * 24)) >= 1) && (floor($diff / (60 * 60 * 24)) <= 30)) {
                $str = floor($diff / (60 * 60 * 24)) . ' ngày trước';
            } else if ((floor($diff / (60 * 60 * 24 * 30)) >= 1) && (floor($diff / (60 * 60 * 24 * 30)) <= 12)) {
                $str = floor($diff / (60 * 60 * 24 * 30)) . ' tháng trước';
            } else if (floor($diff / (60 * 60 * 24 * 365)) >= 1) {
                $str = floor($diff / (60 * 60 * 24 * 365)) . ' năm trước';
            }
        } else {
            $years = floor($diff / (365 * 60 * 60 * 24));
            if ($years > 0) {
                $str .= $years . ' năm ';
            }
            $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
            if ($months > 0) {
                $str .= $months . ' tháng ';
            }
            $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
            if ($days > 0) {
                $str .= $days . ' ngày ';
            }
            $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
            if ($hours > 0) {
                $str .= $hours . ' giờ ';
            }
            $minutes = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
            if ($minutes > 0) {
                $str .= $minutes . ' phút ';
            }
            $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minutes * 60));
            if ($seconds > 0) {
                $str .= $seconds . ' giây ';
            }
        }

        return $str;
    }

    public function activeMenu($link='',$mobile=false){
        global $com,$source;
        $class = '';
        if($mobile==true){
            $class .= 'text-capitalize';
        } else {
            $class .= 'transition';
            if($source=='index'){
                if($link==''){
                    $class .= ' active';
                }
            } else {
                if($com==$link){
                    $class .= ' active';
                } 
            } 
        }
        return $class;
    }

    public function primaryMenu($type = 'san-pham', $table = 'product')
    {
        global $lang;
        $tableList = 'table_' . $table . '_list';
        $tableCat = 'table_' . $table . '_cat';
        $tableItem = 'table_' . $table . '_item';
        $tableSub = 'table_' . $table . '_sub';
        $listCategory = $this->d->rawQuery("SELECT id,name$lang,slug$lang from $tableList 
		 where type=? and find_in_set('hienthi',status) order by numb", array($type));
        $str       = '';
        if (count($listCategory) > 0) {
            $str       .= '<ul>';
            foreach ($listCategory as $v) {
                $catCategory = $this->d->rawQuery("SELECT name$lang, slugvi, slugen, id from $tableCat where type=? and id_list = ? and find_in_set('hienthi',status) order by numb,id desc", array($type, $v['id']));
                $str       .= '<li><a class="has-child transition" href="' . $v['slug' . $lang] . '">' . $v['name' . $lang] . '</a>';
                if (count($catCategory)) {
                    $str       .= '<ul>';
                    foreach ($catCategory as $v2) {
                        $itemCategory = $this->d->rawQuery("SELECT name$lang, slugvi, slugen, id from $tableItem where type=? and id_cat = ? and find_in_set('hienthi',status) order by numb,id desc", array($type, $v2['id']));
                        $str       .= '<li><a class="has-child transition" href="' . $v2['slug' . $lang] . '">' . $v2['name' . $lang] . '</a>';
                        if (count($itemCategory) > 0) {
                            $str       .= '<ul>';
                            foreach ($itemCategory as $v3) {
                                $subCategory = $this->d->rawQuery("SELECT name$lang, slugvi, slugen, id from $tableSub where type=? and id_item = ? and find_in_set('hienthi',status) order by numb,id desc", array($type, $v3['id']));
                                $str       .= '<li><a class="has-child transition" href="' . $v3['slug' . $lang] . '">' . $v3['name' . $lang] . '</a>';
                                if (count($subCategory) > 0) {
                                    $str       .= '<ul>';
                                    foreach ($subCategory as $v4) {
                                        $str       .= '<li><a class="transition" href="' . $v4['slug' . $lang] . '">' . $v4['name' . $lang] . '</a></li>';
                                    }
                                    $str       .= '</ul>';
                                }
                                $str       .= '</li>';
                            }
                            $str       .= '</ul>';
                        }
                        $str       .= '</li>';
                    }
                    $str       .= '</ul>';
                }
                $str       .= '</li>';
            }
            $str       .= '</ul>';
        }
        return $str;
    }

    public function formatMoney2($price = 0, $unit = 'đ', $lienhe = '')
    {
        if ($price > 0) {
            $str = number_format($price, 0, ",", ".");
            $str = $str . $unit;
        } else {
            $str = $lienhe != '' ? $lienhe : '<a href="lien-he">Liên hệ</a>';
        }
        return $str;
    }
    public function match_iframe_src($iframe)
    {
        preg_match('/<iframe.*src=\"(.*)\".*><\/iframe>/isU', $iframe, $matches);
        return $matches[1];
    }
    public function getIDYoutube($urlYoutube)
    {
        $x2 = preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/", $urlYoutube, $matches);
        return $matches[1];
    }

    public function getImgYoutube($urlYoutube, $type = "hqdefault")
    {
        return "https://img.youtube.com/vi/" . $this->getIDyoutube($urlYoutube) . "/$type.jpg";
    }


    public function album($value = array(), $class = 'col-6 col-md-4 col-news')
    {
        global $func;
        $k = $value['id'];
        $type = $value['type'];
        $thumbs = '286x216x1';
        $arr_album = $this->d->rawQuery("SELECT photo from table_gallery where id_parent = ? and com='news' and type = ? and kind='man' and val = ? and find_in_set('hienthi',status) order by numb,id desc", array($value['id'], $type, $type));
        $str       = '';
        $str .= '<div class="' . $class . '" >';
        $str .= '<div class="box-album hover-scale overflow-hidden wow" data-animation="animate__fadeInUp">';
        $str .= '<a href="' . UPLOAD_NEWS_L . $value['photo'] . '" data-fancybox="gallery' . $k . '" class="full"></a>';
        $str .= $func->getImage(['class' => 'img-fluid', 'sizes' => $thumbs, 'upload' => UPLOAD_NEWS_L, 'image' => $value['photo']]);
        $str .= '</div>';
        foreach ($arr_album as $v) {
            $str .= '<a href="' . UPLOAD_NEWS_L . $v['photo'] . '" data-fancybox="gallery' . $k . '" class="d-none">';
            $str .= $func->getImage(['class' => 'img-fluid', 'sizes' => $thumbs, 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo']]);
            $str .= '</a>';
        }
        $str .= '</div>';
        return $str;
    }

    public function titleContainer($h2 = '', $style = '30px', $class = '')
    {
        global $setting, $lang;
        $str = '<div class="title-main ' . $class . '" data-animation="animate__rubberBand" style="margin-bottom:' . $style . '">';
        $str .= '<h2>' . $h2 . '<span class="decoration"></span></h2>';
        $str .= '<p class="title-main__desc">' . $setting['slogan' . $lang] . '</p>';
        $str .= '</div>';
        return $str;
    }

    public function news($value = array(), $class = "col-news col-md-4 col-6", $isDesc = false)
    {
        global $lang, $func;
        $permalink = $value['slug' . $lang];
        $thumbs = '520x380x2';
        $image = $func->getImage(['class' => 'img-full', 'sizes' => $thumbs, 'isWatermark' => false, 'prefix' => 'news', 'upload' => UPLOAD_NEWS_L, 'image' => $value['photo'], 'alt' => $value['slug' . $lang]]);

        $str = '';
        $str .= '<div class="news-item ' . $class . '">';
        $str .= '<div class="news_box hover-scale " data-animation="animate__zoomIn">';
        $str .= '<div class="news__photo overflow-hidden">';
        $str .= '<a class="text-decoration-none" href="' . $permalink . '">' . $image . '</a>';
        $str .= '</div>';
        $str .= '<div class="news__info">';
        $str .= '<div class="date">';
        $str .= '<img src="assets/images/img/date.svg">';
        $str .= date("d/m/y", strtotime($value['date_created']));
        $str .= '</div>';
        $str .= '<h3 class="news-name text-decoration-none text-split my-2">';
        $str .= '<a class="text-decoration-none" href="' . $permalink . '">' . $value['name' . $lang] . '</a>';
        $str .= '</h3>';
        if($isDesc && !empty($value['desc' . $lang])){
            $str .= '<div class="news-desc text-split">' . $value['desc' . $lang] . '</div>';
        }

        $str .= '</div>';
        $str .= '</div>';
        $str .= '</div>';
        return $str;
    }

    public function itemCustomer($value = array(), $class = "col-news col-md-4 col-6", $isDesc = false)
    {
        global $lang, $func, $config;
        $permalink = $value['slug' . $lang];
        $thumbs = $value["thumb_size"] ?? '520x380x2';
        $image = $func->getImage(['class' => 'img-full', 'sizes' => $thumbs, 'isWatermark' => false, 'prefix' => 'news', 'upload' => UPLOAD_NEWS_L, 'image' => $value['photo'], 'alt' => $value['slug' . $lang]]);

        $str = '';
        $str .= '<div class="news-item ' . $class . '">';
        $str .= '<div class="news_box hover-scale " data-animation="animate__zoomIn">';
        $str .= '<div class="news__photo overflow-hidden">';
        $str .= '<div class="rounded">';
        $str .= '<a class="text-decoration-none" href="' . $permalink . '">' . $image . '</a>';
        $str .= '</div>';
        $str .= '<div class="flex-grow-1 ps-3">';
        $str .= '<h3 class="news-name text-split-2">'.$value['name'.$lang].'</h3>';
        $str .= '<div class="_career">' .$config['careers'][$value['career']] . '</div>';
        $str .= '</div>';
        $str .= '</div>';
        $str .= '<div class="news__info">';
//        $str .= '<div class="date">';
//        $str .= '<img src="assets/images/img/date.svg">';
//        $str .= date("d/m/y", strtotime($value['date_created']));
//        $str .= '</div>';
//        $str .= '<h3 class="news-name text-decoration-none text-split my-2">';
//        $str .= '<a class="text-decoration-none" href="' . $permalink . '">' . $value['name' . $lang] . '</a>';
//        $str .= '</h3>';
        if($isDesc && !empty($value['desc' . $lang])){
            $str .= '<div class="news-desc text-split">' . $value['desc' . $lang] . '</div>';
        }

        $str .= '</div>';
        $str .= '</div>';
        $str .= '</div>';
        return $str;
    }

    public function products($value = array(), $class = "col-6 col-md-3 col-product")
    {
        global $lang, $func;
//        if ($value['discount']) {
//            $price = '<div class="price__pro_new"><strong>' . $this->formatMoney2($value['sale_price']) . '</strong></div>
//			<div class="price__pro_old"><del>' . $this->formatMoney2($value['regular_price']) . '</del></div>';
//        } else {
//            $price = '<div class="price__pro_new"><strong>' . $this->formatMoney2($value['regular_price']) . '</strong></div>';
//        };
        $price = '<div class="price__pro_new"><strong>' . $this->formatMoney2($value['sale_price']) . '</strong></div>
			<div class="price__pro_old"><del>' . $this->formatMoney2($value['regular_price']) . '</del></div>';
        $permalink = $value['slug' . $lang];
        $thumbs = '307x265x1';
        $image = $func->getImage(['class' => 'img-full', 'sizes' => $thumbs, 'isWatermark' => false, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $value['photo'], 'alt' => $value['slug' . $lang]]);

        $str       = '';
        $str .= '<div class="' . $class . '">';
        $str .= '<div class="product_box hover-scale" data-animation="animate__zoomIn">';
        $str .= '<div class="product__photo overflow-hidden">';
        $str .= '<a href="' . $permalink . '">';
        $str .= $image;
        $str .= '</a>';
        $str .= '<div class="discount-pro-detail">'.$value['discount'].'</div>';
        $str .= '<div class="cart-pro-detail">';
        $str .= '<a class="btn-add-to-cart addcart" data-id="'.$value['id'].'" data-action="addnow">';
        $str .= '<img src="assets/images/add_cart.png" alt="addtocart">';
        $str .= '</a>';
        $str .= '<a href="'.$value["slug$lang"].'">';
        $str .= '<img src="assets/images/view_product.png" alt="view_product">';
        $str .= '</a>';
        $str .= '</div>';
        $str .= '</div>';
        $str .= '<div class="product__info">';
        $str .= '<h3 class="product__name text-split"><a href="' . $permalink . '">' . $value['name' . $lang] . '</a></h3>';
        $str .= '<div class="product__price">';
        $str .= $price;
        $str .= '</div>';
        $str .= '</div>';
        $str .= '</div>';
        $str .= '</div>';
        return $str;
    }
}
