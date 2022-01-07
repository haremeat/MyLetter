		<!-- FOOTER -->
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-12 margin30">
                        <div class="footer-col">
<!--                            <h3>About SOFTZONE</h3>-->
<!--                            <p>-->
<!--								소프트존은 10년 넘게 웹개발을 해오고 있으며 웹솔루션제작을 주업무로 현재 트렌드에 맞는 웹어플리케이션 및 템플릿 제작을 하고 있으며 여러회사의 유지보수를 맡아서 하고 있습니다.-->
<!--                            </p>-->
<!--                            <ul class="list-inline footer-social">-->
<!--                                <li>-->
<!--                                    <a href="#" target="_blank" class="social-icon si-dark si-gray-round si-colored-facebook">-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                        <i class="fa fa-facebook"></i>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" target="_blank" class="social-icon si-dark si-gray-round si-colored-twitter">-->
<!--                                        <i class="fa fa-instagram"></i>-->
<!--                                        <i class="fa fa-instagram"></i>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" class="social-icon si-dark si-gray-round si-colored-google-plus">-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                        <i class="fa fa-twitter"></i>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" class="social-icon si-dark si-gray-round si-colored-pinterest">-->
<!--                                        <i class="fa fa-google-plus"></i>-->
<!--                                        <i class="fa fa-google-plus"></i>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" target="_blank" class="social-icon si-dark si-gray-round si-colored-linkedin">-->
<!--                                        <i class="fa fa-youtube"></i>-->
<!--                                        <i class="fa fa-youtube"></i>-->
<!--                                    </a>-->
<!--                                </li>-->
<!--                            </ul>-->
                            <img src="<?=G5_IMG_URL?>/cncctv/logo_re.png" alt="" class="logo-img">
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-lg-3 col-sm-12 margin30">
                        <div class="footer-col">
                            <h3>Contact</h3>
                            <ul class="list-unstyled contact">
                                <li><p><strong><i class="fa fa-map-marker"></i> Address:</strong> 대전시 대덕구 대화로 160, 산업용재유통상가 지원1동 504호(대화동)</p></li>
                                <li><p><strong><i class="fa fa-envelope"></i> Mail Us:</strong> <a href="mailto:hsw5045@naver.com">hsw5045@naver.com</a></p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Tel:</strong> 042-670-6009</p></li>
                                <li> <p><strong><i class="fa fa-phone"></i> Phone:</strong> 010-8809-5045</p></li>
<!--                                <li> <p><strong><i class="fa fa-skype"></i> Skype</strong> SOFTZONE.856</p></li>-->
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-lg-3 col-sm-12 margin30">
                        <div class="footer-col">
                            <h3>COMPANY GALLERY</h3>
                            <ul class="list-inline f2-work">
								<?php
								// 추출하실 갤러리 테이블명을 입력해주세요.
								$table_name = "gallery";
								if($table_name) {
									$sql = "SELECT wr_id, bf_file FROM {$g5['board_file_table']} where bo_table = '$table_name' and bf_no = '0' ORDER BY wr_id DESC LIMIT 9";
									$res = sql_query($sql);
									while($rows = sql_fetch_array($res)) {
								?>
									<li><a href="<?php echo G5_URL?>/bbs/board.php?bo_table=<?php echo $table_name?>&wr_id=<?php echo $rows['wr_id']?>"><img src="<?php echo G5_URL?>/data/file/<?php echo $table_name?>/<?php echo $rows['bf_file']?>" class="img-responsive" width="70" height="54" alt=""></a></li>	
								<?php
									} // while
								}else{
								?>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
									<li><a href="#"><img src="https://via.placeholder.com/80x54" class="img-responsive" alt=""></a></li>
								<?php } //if?>
                            </ul>
                        </div>                        
                    </div><!--footer col-->
                    <div class="col-lg-3 col-sm-12 margin30">
                        <div class="footer-col">
                            <h3>Partner</h3>
<!--                            <p>-->
<!--                                파트너사이트로써 각종 제휴를 맺고 있습니다.-->
<!--                            </p>-->

							<!-- select -->
							<select class="form-control" name="jump" onchange="location.href=this.value">
							  <option>Partner</option>
							  <option value="https://blog.naver.com/hsw5045">blog</option>
							</select>
                        </div>     
                    </div><!--footer col-->
                </div><!-- row -->

				<div class="row">
					<div class="col-md-12 text-center">
						<div class="footer-btm">
							<a href="<?php G5_URL?>/bbs/content.php?co_id=company"><span style='color:#aeaeae'>회사소개</span></a> | 
							<a href="<?php G5_URL?>/bbs/content.php?co_id=privacy"><span style='color:#aeaeae'>개인정보처리방침</span></a> | 
							<a href="<?php G5_URL?>/bbs/content.php?co_id=provision"><span style='color:#aeaeae'>서비스이용약관</span></a>
							<br />
							<span>Copyright <a href="#" target="_blank"><span style='color:#fff;'> cnc코리아</span>. All rights reserved.</a></span>
						</div>
					</div>
				</div>

            </div><!-- container -->
        </footer><!--default footer end here-->


		<div style="position: fixed; right: 3%; bottom: 5%; text-align: center; z-index:9999">
			<button type="button" id="btn-top">
				<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only"></span>
			</button>
		</div>

		<?php /*
		<!-------------------------- 우측하단 SNS -------------------------->
		<div style="position: fixed; right: 3%; bottom: 5%; text-align: center; z-index:9999">
				<div><a href="javascript:;" target="_blank"><img src="<?php echo G5_THEME_URL?>/img/kakao.png" height="70" style="vertical-align: sub;"></a></div>
				<div><a href="javascript:;" target="_blank"><img src="<?php echo G5_THEME_URL?>/img/cafe.png" height="70" style="vertical-align: sub;"></a></div>
				<div><a href="javascript:;" target="_blank"><img src="<?php echo G5_THEME_URL?>/img/blog.png" height="70" style="vertical-align: sub;"></a></div>
				

				<button type="button" id="btn-top">
					<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only"></span>
				</button>

		</div>
		*/
		?>
