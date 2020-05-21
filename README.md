# theme-ariclaw
그누보드 5.4 테마 ariclaw 로그인 버튼 추가
index_head.php
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
              
head.php
<!-- 상단 시작 { -->
<div id="hd">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>

    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>
	   <div id="hd_wrapper">
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
		
		<hr>
		
		
</div>
