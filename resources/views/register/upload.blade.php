<?php /* Template Name: Uploads  */ ?>
<?php
session_start();
if (array_key_exists('step4', $_SESSION) && !empty($_SESSION['step4'])) {
    $user_id = $_SESSION['user_id'];
    $upload = new Log();
    $upload->setLog('import-upload-step','log','low',$user_id);

	if (isset($_POST['submit'])) {
        $upload->setLog('submit-upload-step','activity','low');
        update_user_meta($user_id, 'steps', 5);
		$_SESSION['step5'] = "ok";
		wp_redirect(home_url('/Presentation/?step=6'));
	}
	$video_id = get_user_meta($user_id, 'video', true);
	$video_url = (!empty($video_id)) ? wp_get_attachment_url($video_id) : '';
	?>
<?php get_header(); ?>
<style>
	header,
	footer,
	.mobile {
		display: none;
	}
	.hide-tab{
	display: none;
}
</style>
<div id="section-step" class="container-fluide bg-gray">
	<div class="container pad-20 pad-step pad-50-tmob min-100vh flex-center">
		<div id="section-step-content" class="colm8 colm10-tab colm margin-auto pad-40 pad-20-tab pad-10-mob bg-white spacer-t40 spacer-b40">
			<div>
				<?php require_once 'steps.php'; ?>
			</div>
			<div class="colm9 colm11-tab colm margin-auto pad-5-mob">
				<div class="pad-b20">
					<h2 class="font-s35 color6">بارگذاری ویدئو </h2>
					<p class="color-darkgray">ویدئو همانند ویدئو نمونه بارگذاری نمایید (حداکثر 40 مگابایت).</p>
					<a href="https://app.100startups.ir/assets/uploads/2019/09/LQ-1.mp4" class="font-s14">دانلود فایل نمونه</a>
				</div>
				<div class="spacer-t10">
					<div>
						<div class="colm12 colm pad-15 pull-right toggle-element">
							<?php if ($video_url) : ?>
							<div class="align-center" data-type="toggle-1">
								<div class="color-red pointer">
									<i class="fa fa-times vertical"></i>
									<span class="font-s14" data-type="toggle-btn">حذف ویدئو</span>
								</div>
								<video controls class="colm12 colm">
									<source src="<?php echo $video_url  ?>">
									</source>
								</video>
							</div>
							<?php endif ?>
							<div class="box-upload <?php echo ($video_url) ? "hide" : "" ?>" data-type="toggle-2">
								<form action="/upload" class="dropzone align-center pad-20 box-shaddow border-r5 smart-validate" id="upload-video" enctype="multipart/form-data" method="post">
									<div>
										<input type="text" class="hide" name="user_id" value="<?php echo $user_id; ?>" />
										<input type="text" class="hide" name="file_type" value="video" />
									</div>
								</form>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="align-left spacer-t40">
						<div class="pull-right pad-5-mob colm5-mob">
							<a href="<?php echo home_url('/team/?step=4') ?>" class="colm btn-prv font-s13">مرحله قبل </a>
						</div>
						<div class="pull-left pad-5-mob colm7-mob">
							<form method="post">
								<button type="submit" name="submit" class="colm btn-web">مرحله بعد </button>
							</form>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
<style>
	.dropzone.dz-clickable .dz-message * {
		color: #666;
		font-size: 14px;
		font-weight: 300;
	}

	.dropzone .dz-preview.dz-error .dz-error-message {
		top: 10px;
		font-size: .8rem;
	}
</style>
<script>
	jQuery(document).ready(function() {
		var uri = window.location.toString();
		if (uri.indexOf("?") > 0) {
			var clean_uri = uri.substring(0, uri.indexOf("?"));
			window.history.replaceState({}, document.title, clean_uri);
		}
	});
</script>
<script>
	jQuery(document).ready(function($) {
		Dropzone.prototype.defaultOptions.dictFallbackMessage = "مرورگر شما آپلود فایل drag'n'drop را پشتیبانی نمی کند.";
		Dropzone.prototype.defaultOptions.dictFallbackText = "Please use the fallback form below to upload your files like in the olden days.";
		Dropzone.prototype.defaultOptions.dictFileTooBig = "فایل خیلی بزرگ است ({{filesize}}MB)  حداکثر اندازه فایل: {{maxFilesize}}MB";
		Dropzone.prototype.defaultOptions.dictInvalidFileType = "شما مجاز به بارگذاری این نوع فایل نیستید";
		Dropzone.prototype.defaultOptions.dictResponseError = "Server responded with {{statusCode}} code.";
		Dropzone.prototype.defaultOptions.dictCancelUpload = "انصراف از بارگذاری";
		Dropzone.prototype.defaultOptions.dictCancelUploadConfirmation = "آیا مطمئن هستید که میخواهید این بارگذاری را لغو کنید؟";
		Dropzone.prototype.defaultOptions.dictRemoveFile = "حذف فایل";
		Dropzone.prototype.defaultOptions.dictRemoveFileConfirmation = null;
		Dropzone.prototype.defaultOptions.dictMaxFilesExceeded = "شما فقط می توانید {{maxFiles}} فایل بارگذاری کنید  .";
		Dropzone.prototype.defaultOptions.dictDefaultMessage = "برای بارگذاری فایل کلیک کنید";
		Dropzone.options.uploadVideo = {
			autoProcessQueue: true,
			timeout: 1800000,
			maxFiles: 1,
			maxFilesize: 40, // MB
			paramName: "video",
			addRemoveLinks: true,
			acceptedFiles: '.mp4,.mkv,.avi,.mov,.wmv',
			init: function() {
				var self = this;
				this.on("success", function(file, responseText) {
					console.log(responseText);
				});
				this.on('error', function(file, response) {
					$('.text-error').text(response);
					$('.message-alert').fadeIn();
					$('.message-alert').delay(4000).fadeOut();
				});
				self.on("maxfilesexceeded", function(file) {
					self.removeAllFiles();
					self.addFile(file);
				});
				$("#send-video").click(function(e) {
					e.preventDefault();
					self.processQueue();
				});
				self.options.dictRemoveFile = "حذف";
				self.on("addedfile", function(file) {

				});
				self.on("removedfile", function(file) {

				});
			}
		}
		document.querySelectorAll('.toggle-element').forEach(element => {
			element.addEventListener('DOMSubtreeModified', () => {
				const toggle1 = element.querySelector('[data-type="toggle-1"]');
				if (toggle1) {
					const toggleButton = toggle1.querySelector('[data-type="toggle-btn"]');
					toggleButton.addEventListener('click', function() {
						toggle1.classList.add('hide');
						toggle2.classList.remove('hide');
					});
				}
				const toggle2 = element.querySelector('[data-type="toggle-2"]');


			});
		});
	})
</script>
<?php } else {
	wp_redirect('/register');
} ?>