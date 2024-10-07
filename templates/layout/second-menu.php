<div class="wrapper-dropdown-menu">
    <div class="wrapper-dropdown-menu-inside">
        <div class="scroll-second-menu">
            <ul class="second-menu">
                <?php
                foreach ($splist as $key => $value) :
                    $cap2 = $d->rawQuery("SELECT name$lang,id,slug$lang from table_product_cat where type=? and find_in_set('hienthi',status) and id_list = ? order by numb", array("san-pham", $value['id']));
                ?>
                    <li>
                        <a href="<?php echo $value['slug' . $lang] ?>">
                            <span class="text-second-menu"><?php echo $value['name' . $lang] ?></span>
                        </a>
                        <?php
                        if (!empty($cap2)) {
                            echo "<ul class=\"sub-menu\">";
                            foreach ($cap2 as $key2 => $value2) {
                                $cap3 = $d->rawQuery("SELECT name$lang,id,slug$lang from table_product_item where type=? and find_in_set('hienthi',status) and id_cat = ? order by numb", array("san-pham", $value2['id']));
                                echo "<li><a href='" . $value2['slug' . $lang] . "'>" . $value2['name' . $lang] . "</a>";
                                if ($cap3) {
                                    echo "<ul class=\"sub-menu\">";
                                    foreach ($cap3 as $key3 => $value3) {
                                        echo "<li><a href='" . $value3['slug' . $lang] . "'>" . $value3['name' . $lang] . "</a></li>";
                                    }
                                    echo "</ul>";
                                }
                                echo "</li>";
                            }
                            echo "</ul>";
                        }
                        ?>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</div>