<?php /* Template Name: Finish  */?>
<?php
session_start();
if(array_key_exists('step6',$_SESSION) && !empty($_SESSION['step6'])) {

	$ok = get_user_meta($user_id,'steps',true);
	if(!empty($ok)){
		
	}else{
		$user_id = $_SESSION['user_id'];
		$user_info = get_userdata($user_id);
	    update_user_meta($user_id,'steps',"finish");
    	update_user_meta($user_id,'status',"pending");
		$user_info = get_userdata($user_id);
		$email  = get_user_meta($user_id,'email',true);
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html;charset=UTF-8" . "\r\n";
		$message_email = "<html><body>";
		$message_email .= "<div style='width:90%; margin:0 auto; background:#eee; padding:20px; border-radius:5px;'>
								<h2 style='color:#2D6CA2; text-align:center;'>
									 استارتاپ شما با موفقیت در سامامنه ثبت شد : <br />
								</h2>
					   </div>";
		$message_email .= "</body></html>";
		$subject = "ثبت نام در 100 استارت آپ";
		mail($email, $subject, $message_email, $headers);


		$message = " استارتاپ شما با موفقیت در سامانه ثبت شد";
		$mobile  = get_user_meta($user_id,'mobile',true);
		send_sms($mobile,$message);


	}
    $finish = new Log();
    $finish->setLog('import-finish-step','log','medium',$user_id);
?>
<?php get_header();?>
<style>
header , footer,.mobile {
	display: none;
}
.hide-tab{
	display:none;
}
.hide-tab{
	display: none;
}
</style>
<div id="section-step" class="container-fluide bg-gray">
	<div class="container pad-20 pad-step pad-50-tmob  min-100vh flex-center">
		<div id="section-step-content" class="colm8 colm10-tab colm margin-auto pad-40 pad-20-tab pad-10-mob bg-white spacer-t40 spacer-b40">
			<div>
				<?php require_once 'steps.php'; ?>
			</div>
			<div class="colm8 colm11-tab colm margin-auto pad-5-mob">
				<div class="pad-b20 align-center">
					<h2 class="font-s30 color6">ثبت نام با موفقیت انجام شد</h2>
					<p class="color-darkgray font-s14">پس از بررسی اطلاعات و تایید، اطلاعات حساب شما و راهنمای ادامه فرآیند، از طریق ایمیل یا شماره تلفن ارسال خواهند شد.</p>
				</div>
				<div class="align-center spacer-t20 colm">
					<div class="pull-right">
						<a href="<?php echo home_url('/Presentation') ?>" class="btn-prv font-s13 colm">مرحله قبل </a>
					</div>
					<a class="btn-web pull-left colm5 colm7-mob btn-finish-responsive margin-auto show" href="http://100startups.ir/">بازگشت به صفحه اصلی</a>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>
<?php }else {wp_redirect('/register');}?>
<script>
jQuery(document).ready(function(){
	var uri = window.location.toString();
	if (uri.indexOf("?") > 0) {
	    var clean_uri = uri.substring(0, uri.indexOf("?"));
	    window.history.replaceState({}, document.title, clean_uri);
	}
});
</script>