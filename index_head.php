<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');



//add_javascript('<script src="'.G5_THEME_JS_URL.'/unslider.min.js"></script>', 10);
?>
			 </div>
		</div>
  </div>
</header>
<!-- 상단 시작 { -->

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <?php include_once(G5_THEME_PATH.'/head.menu.php'); ?>
						  
<!-- } 상단 끝 -->
						  <ul id="tnb">
								<?php if ($is_member) {  ?>
								<?php if ($is_admin) {  ?>
								<li class="tnb_adm"><a href="<?php echo G5_ADMIN_URL ?>"><b>관리자</b></a></li>
								<?php }  ?>
								<li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
								<?php } else {  ?>
								<li><a href="<?php echo G5_BBS_URL ?>/login.php" ><b>로그인</b></a></li>
								<?php }  ?>
						  </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Finest And <br>
                                Strongest Law <br>
                                Firm Win The World</h1>
                            <p>Subdue which man creeping was image you dry lesser every live our be gree male
                                may living beginning appear moveth beast </p>
                            <div class="banner_btn">
                                <a href="#" class="btn_1">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

<!-- 콘텐츠 시작 { -->
