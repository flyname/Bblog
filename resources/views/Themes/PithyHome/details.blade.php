@include('Themes.PithyHome.Common.header');


		<div class="container">
			<div class="head-text text-highlight">
				<h1>SHORTCODE</h1>
				<p class="lead-text">COLUMN   •   TABS   •   TOGGLE</p>
			</div>
		</div>

		<section class="post-fluid">
			<div class="container-fluid">
				<div class="container">
					<div class="row post-items">
						<div class="post-item-banner">
							<img src="/assets/img/img-44.png" alt="" />
						</div>
						<div class="col-md-2">
							<div class="post-item-short">
								<!-- <span class="big-text">{{$artFind->updated_at}}</span> -->
								<span class="small-text">{{$artFind->updated_at}}</span>
							</div>
						</div>
						<div class="col-md-10 ">
							<div class="post-item">
								<div class="post-item-paragraph">
									<h2><a href="#" class="quick-read"><i class="fa fa-eye"></i></a>{{$artFind->title}}</h2>
									<p class="post-item-two-column">
										{!! Parsedown::instance()->setMarkupEscaped(true)->text($artFind->html) !!}
									</p>
									<br /><br />
								</div>
								<div class="post-item-info no-border clearfix">
									<p class="post-tags">
										<a href="#">fashion</a>
										<a href="#">culture</a>
										<a href="#">art</a>
									</p>
									<div class="post-item-social">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
										<a href="#"><i class="fa fa-heart"></i> {{$artFind->like_num}}</a>
									</div>
								</div>
							</div>

							<div class="next-prev-post clearfix">
								<div class="post-direction">
									<a href="#" class="post-prev">
										<span class="post-way"><i class="fa fa-angle-left"></i> prev post</span>
										<span class="title">Envato Stories: Isabel Castillo Guijarro (Isabelmdd)</span>
									</a>
									<a href="#"><span class="author">by <span>Gannon Burget</span></span></a>
								</div>
								<div class="post-direction">
									<a href="#" class="post-next">
										<span class="post-way">next post <i class="fa fa-angle-right"></i></span>
										<span class="title">Rise of the Million Dollar Plugin Makers (Infographic)</span>
									</a>
									<a href="#"><span class="author">by <span>Jared Erondu</span></span></a>
								</div>
							</div>

							<div class="author-box">
								<div class="author">
									<a class="author-photo" href="#"><img src="/assets/img/profil_photo-04.png" alt=""></a>
									<div class="author-body">
										<h4 class="author-name">Daniele Zedda</h4>
										<a href="#">view all post</a>
									</div>
									<div class="author-connection">
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-envelope"></i></a>
									</div>
								</div>
							</div>

							<div class="comment-box">
								<a class="btn btn-golden" href="#">Leave a comment</a>
								<div class="comment-tab">
									<a href="#" class="comment-info">Comments (28)</a>
									<i class="i">|</i>
									<a href="#" class="comment-info"><i class="fa fa-comments"></i> Show all</a>
								</div>

								<div class="comment-block">

									<div class="comment-item">
										<a class="comment-photo" href="#">
											<img src="/assets/img/profil_photo-05.png" alt="" />
										</a>
										<div class="comment-body">
											<h6 class="comment-heading">Matthew L. Fisher   •   <span class="comment-date">2 days ago</span></h6>
											<p class="comment-text">I am about like you. First: paper and after: photoshop (sometime).</p>
											<a href="#" class="comment-reply active-comment"><i class="reply-icon"></i> Reply</a>
											<!--
											<div class="comment-form">
												<form>
													<textarea class="comment-textarea" placeholder="Reply to Lauren Bonk"></textarea>
													<input class="comment-input" placeholder="Name" type="text" />
													<input class="comment-input" placeholder="or Email" type="text" />
													<button class="comment-submit">Post Comment</button>
												</form>
											</div>
											-->
										</div>
									</div>

									<div class="comment-item">
										<a class="comment-photo" href="#">
											<img src="/assets/img/profil_photo-05.png" alt="" />
										</a>
										<div class="comment-body">
											<h6 class="comment-heading">Lauren Bonk   •   <span class="comment-date">2 days ago</span></h6>
											<p class="comment-text">I’m so glad you shared this. I always start with lots of paper as well, move into Photoshop to give the document a basic layout, then zoom right in to start tackling my favorite piece trying to get it just right.<br /><br />I’m not saying this is the right way—perhaps, like you, I should move from basic sketches to basic digital shapes to see if the design holds together when zoomed out.</p>
											<a href="#" class="comment-reply"><i class="reply-icon"></i> Reply</a>
											<!--
											<div class="comment-item">
												<a class="comment-photo" href="#">
													<img src="/assets/img/profil_photo-05.png" alt="" />
												</a>
												<div class="comment-body">
													<h6 class="comment-heading">Tony Bui   •   <span class="comment-date">2 days ago</span></h6>
													<p class="comment-text">I used to wireframe in photoshop, but it's difficult for most clients to understand what they're signing off unless they can interact with it. </p>
													<a href="#" class="comment-reply"><i class="reply-icon"></i> Reply</a>
												</div>
											</div>
											<div class="comment-item">
												<a class="comment-photo" href="#">
													<img src="/assets/img/profil_photo-05.png" alt="" />
												</a>
												<div class="comment-body">
													<h6 class="comment-heading">Tony Bui   •   <span class="comment-date">2 days ago</span></h6>
													<p class="comment-text">I used to wireframe in photoshop, but it's difficult for most clients to understand what they're signing off unless they can interact with it. </p>
													<a href="#" class="comment-reply"><i class="reply-icon"></i> Reply</a>
												</div>
											</div>
											<div class="comment-item">
												<a class="comment-photo" href="#">
													<img src="/assets/img/profil_photo-05.png" alt="" />
												</a>
												<div class="comment-body">
													<h6 class="comment-heading">Tony Bui   •   <span class="comment-date">2 days ago</span></h6>
													<p class="comment-text">I used to wireframe in photoshop, but it's difficult for most clients to understand what they're signing off unless they can interact with it. </p>
													<a href="#" class="comment-reply"><i class="reply-icon"></i> Reply</a>
												</div>
											</div>
											-->
										</div>
									</div>

									<div class="comment-item">
										<a class="comment-photo" href="#">
											<img src="/assets/img/profil_photo-05.png" alt="" />
										</a>
										<div class="comment-body">
											<h6 class="comment-heading">Tony Bui   •   <span class="comment-date">4 days ago</span></h6>
											<p class="comment-text">I used to wireframe in photoshop, but it's difficult for most clients to understand what they're signing off unless they can interact with it. </p>
											<a href="#" class="comment-reply"><i class="reply-icon"></i> Reply</a>
										</div>
									</div>


									<div class="comment-form main-comment-form">
										<form>
											<textarea class="comment-textarea" placeholder="Leave a comment..."></textarea>
											<div class="at-focus">
												<input class="comment-input" placeholder="Name" type="text" />
												<input class="comment-input" placeholder="or Email" type="text" />
												<button class="comment-submit">Post Comment</button>
											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer class="container-fluid footer">
			<div class="container text-center">
				<div class="footer-logo"><img src="/assets/img/logo-black.png" alt=""></div>
				<p class="laread-motto">Designed for Read.</p>
				<div class="laread-social">
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-pinterest"></a>
				</div>
			</div>
		</footer>
	</div>

	<div id="quick-read" class="qr-white-theme">
		<div class="quick-read-head">
			<div class="container">
				<a href="#" class="qr-logo"></a>
				<div class="qr-tops">
					<a href="#" class="qr-search-close"><i class="fa fa-times"></i></a>
					<a href="#" class="qr-search"><i class="fa fa-search"></i></a>
					<a href="#" class="qr-change"><i class="fa fa-adjust"></i></a>
					<a href="#" class="qr-close"><i class="fa fa-times"></i></a>
				</div>
				<form class="qr-search-form">
					<input type="text" placeholder="Search LaRead">
				</form>
			</div>
		</div>
		<div class="quick-dialog">
			<div class="quick-body">
				<div class="container">
					<div class="col-md-8 col-md-offset-2">
						<div class="qr-content post-item-paragraph">

							<article>
								<h2>A Nice Street Cafe in London</h2>

								<p>Consectetur adipiscing elit. Vivamus nec mauris pulvinar leo dignissim sollicitudin eleifend eget velit. Nunc sed dolor enim, vitae sodales diam. Mauris fermentum fringilla lorem, in rutrum massa sodales et. Praesent mollis sodales est, eget fringilla libero sagittis eget. Nunc gravida varius risus ac luctus. Mauris ornare eros sed libero euismod ornare. Nulla id sem a mauris egestas pulvinar vitae non dui. Cras odio tortor, feugiat nec sagittis sed, laoreet ut mauris. In hac habitasse platea dictumst.</p>

								<p>What if instead your website used machine learning to build itself, and then rebuilt as necessary, based on data it was gathering about how it was being used? That's what The Grid is aiming to do. After you add content such as pictures, text, the stuff everyone enjoys interacting with your obligation to design...</p>

								<h4>The Truth about Teens and Privacy</h4>

								<p>Social media has introduced a new dimension to the well-worn fights over private space and personal expression. Teens do not want their parents to view their online profiles or look over their shoulder when they’re chatting with friends. Parents are no longer simply worried about what their children wear out of the house but what they photograph themselves wearing in their bedroom to post online. Interactions that were previously invisible to adults suddenly have traces, prompting parents to fret over.</p>

								<h4>Here are some of the ways you may be already being hacked:</h4>

								<ul class="in-list">
									<li>Everyone makes mistakes</li>
									<li>You can control only your behavior</li>
									<li>Good habits create discipline</li>
									<li>Remember the <u>big picture</u></li>
									<li>Everyone learns differently</li>
									<li>Focus on the Benefits, Not the Difficulties</li>
									<li>Traditions are bonding opportunities</li>
								</ul>

								<p>This is not a comprehensive list. Rather, it is a snapshot in time of real-life events that are happening right now. In the future, we will likely read this list and laugh at all the things I failed to envision.</p>
								<p class="with-img">
									<a href="assets/img/banner-85-1.jpg" data-fluidbox-qr><img src="/assets/img/banner-85.jpg" alt=""></a>
									<span class="img-caption">Walk through the Forest</span>
								</p>
								<p>Elit try-hard consectetur, dolore voluptate minim distillery. Bespoke Cosby sweater pug street art et keytar. Nihil fish whatever trust fund, dreamcatcher in fingerstache squid seitan accusamus. Organic Wes Anderson High Life setruhe authentic iPhone, aute art party hashtag fixie church-key art veniam Tumblr polaroid. DIY polaroid vinyl, sustainable hella scenester accusamus fanny pack. Ut Neutra enim pariatur cornhole actually Banksy, tote bag fugiat ad accusamus. Incididunt fixie normcore fingerstache. Freegan proident literally brunch before they sold out.
								</p>

								<p>Readymade fugiat narwhal, typewriter VHS aute stumptown hoodie irure put a bird on it. Fashion axe raw denim brunch put a bird on it voluptate Truffaut. Bitters PBR&amp;B nulla Odd Future swag leggings. Banh mi Wes Anderson butcher letterpress skateboard quis. Chambray hella retro viral Cosby sweater photo booth. Schlitz elit Cosby sweater, Blue Bottle non chambray chia. Single-origin coffee pickled.</p>

								<h5>Blockquote</h5>

								<p>Do officia aliqua, pop-up ut et occupy sriracha. YOLO meggings PBR sartorial mollit, Schlitz assumenda vero kitsch plaid post-ironic PBR&amp;B keffiyeh. Cosby sweater wolf YOLO Austin bespoke, American Apparel crucifix paleo flexitarian. Aliquip bitters food truck, incididunt tofu accusamus magna nesciunt typewriter drinking vinegar Shoreditch try-hard you probably haven’t heard of them labore. </p>

								<blockquote>
									<p><i>“The Muppets Take Manhattan”</i><br />
									This movie was a disappointment. The Muppets do not take Manhattan at all. They merely visit it.<br />
									<span>— No stars.</span></p>
								</blockquote>

								<p>Do officia aliqua, pop-up ut et occupy sriracha. YOLO meggings PBR sartorial mollit, Schlitz assumenda vero kitsch plaid post-ironic PBR&amp;B keffiyeh. Cosby sweater wolf YOLO Austin bespoke, American Apparel crucifix paleo flexitarian. Aliquip bitters food truck, incididunt tofu accusamus.</p>
							</article>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="quick-read-bottom">
			<p class="qr-info">By <a href="#">Daniele Zedda</a>   •   18 February</p>
			<div class="qr-nav">
				<a href="#" class="qr-prev">← PREV POST</a>
				<a href="#" class="qr-share" tabindex="0" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" data-content="<a href='#'><i class='fa fa-facebook'></i></a><a href='#'><i class='fa fa-twitter'></i></a>"><i class="fa fa-share-alt"></i></a>
				<a href="#" class="qr-comment"><i class="fa fa-comment"></i></a>
				<a href="#" class="qr-like"><i class="fa fa-heart"></i> 34</a>
				<a href="#" class="qr-next">NEXT POST →</a>
			</div>
		</div>
		<div class="quick-read-bottom qr-bottom-2 hide">
			<div class="qr-nav">
				<a href="#" class="qr-prev">← PREV POST</a>
				<p class="qr-info">By <a href="#">Daniele Zedda</a>   •   18 February</p>
				<a href="#" class="qr-next">NEXT POST →</a>
				<a href="#" class="qr-like"><i class="fa fa-heart"></i> 34</a>
				<div class="qr-sharebox">
					<span>Share on</span>
					<a href='#'><i class='fa fa-facebook'></i></a>
					<a href='#'><i class='fa fa-twitter'></i></a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
@include('Themes.PithyHome.Common.footer');
</body>
</html>
