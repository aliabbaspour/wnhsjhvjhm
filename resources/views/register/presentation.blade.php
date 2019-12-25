<?php /* Template Name: Presentation  */ ?>
<?php
session_start();
$post_id = $post->ID;
if (array_key_exists('step5', $_SESSION) && !empty($_SESSION['step5'])) {

    $user_id = $_SESSION['user_id'];
    $presentation = new Log();
    $presentation->setLog('import-presentation-step','log','low',$user_id);
    if (isset($_POST['submit'])) {
        $presentation->setLog('submit-presentation-step','activity','low');
        update_user_meta($user_id, 'problem', $_POST['problem']);
        update_user_meta($user_id, 'mysolution', $_POST['mysolution']);
        update_user_meta($user_id, 'solution', $_POST['solution']);
        update_user_meta($user_id, 'market_size', $_POST['market_size']);
        update_user_meta($user_id, 'defect', $_POST['defect']);
        update_user_meta($user_id, 'steps', 6);

        require_once (ABSPATH.'/wp-admin/includes/media.php');
        require_once (ABSPATH.'/wp-admin/includes/file.php');
        require_once (ABSPATH.'/wp-admin/includes/image.php');
        $attachfile  = media_handle_upload('attachfile', 0);
		if ( !is_wp_error( $attachfile ) ) {
 			update_user_meta($user_id,'attach_id',$attachfile);
		} 
       $pdf_id         = get_user_meta($user_id, 'pdf', true);
  		if (!$pdf_id) {
		    wp_redirect(home_url('/Presentation/?message=error3'));
  		}else{
	        $_SESSION['step6'] = "ok";
		    wp_redirect(home_url('/finish/?step=7'));
  		}
    }
    $problem		= get_user_meta($user_id, 'problem', true);
    $mysolution 	= get_user_meta($user_id, 'mysolution', true);
    $solution 		= get_user_meta($user_id, 'solution', true);
    $market_size    = get_user_meta($user_id, 'market_size', true);
    $defect 		= get_user_meta($user_id, 'defect', true);
    $pdf_id         = get_user_meta($user_id, 'pdf', true);
    $pdf_url        = (!empty($pdf_id)) ? wp_get_attachment_url($pdf_id) : '';
    $predict_id     = get_user_meta($user_id, 'attach_id', true);
    $predict_url    = (!empty($predict_id)) ? wp_get_attachment_url($predict_id) : '';
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
                <div class="colm9 colm11-tab colm margin-auto">
                    <div class="pad-b20">
                        <h2 class="font-s30 color6">پیچ دک</h2>
                        <p class="color-darkgray font-s14 pad-t15 align-justify">لطفا اطلاعات مربوط به پیچ دک خود را وارد نمایید. می‌توانید از این موقعیت استفاده کنید و سرمایه گذاران را قانع کنید که استارتاپ شما ارزش سرمایه گذاری دارد. ارائه شما باید به یاد ماندنی و ساده باشد و به سرمایه گذاران هرچیزی که نیاز دارند بشنوند را بگوید.</p>
                    </div>
                    <div class="spacer-t5">
                        <form method="post" class="smart-validate" enctype="multipart/form-data">
                            <div>
                                <div class="frm-row">
                                    <div class="pad-5 char-count">
                                        <label for="problem" class="gui-label pad-5"> چه مشکلی را حل می کنید ؟ </label>
                                        <label class="relative">
                                            <textarea name="problem" class="gui-textarea sans-digit" maxlength="255" id="problem" placeholder="وجود واسطه‌ها را در خرید میوه و سبزیجات باعث افزایش قیمت این محصولات می‌شود." required><?php echo $problem; ?></textarea>
                                            <p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                        </label>
                                    </div>
                                    <div class="pad-5 char-count">
                                        <label for="mysolution" class="gui-label pad-5"> راه حل شما چیست ؟ </label>
                                        <label class="relative">
                                            <textarea name="mysolution" class="gui-textarea sans-digit" maxlength="255" id="mysolution" placeholder="ایجاد یک پلتفرم که بین تولیدکننده و مصرف‌کننده به صورت مستقیم ارتباط بر قرار کند و تضمین خرید و کیفیت محصول را برعهده بگیرد و واسطه‌ها را از این طریق حذف کند و قیمت محصول برای مصرف‌کننده نهایی کاهش یابد و تولیدکننده هم مبلغ منصفانه‌تری برای محصولات خود دریافت کند." required><?php echo $mysolution; ?></textarea>
                                            <p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                        </label>
                                    </div>
                                    <div class="pad-5 char-count">
                                        <label for="solution" class="gui-label pad-5"> راه حل های موجود چیست ؟ </label>
                                        <label class="relative">
                                            <textarea name="solution" class="gui-textarea sans-digit" maxlength="255" id="solution" placeholder="راه‌حل‌های موجود برای خریداران و فروشندگان و همچنین کاهش واسطه‌ها عبارت است از خرید از وانتی‌ها و همچنین خرید از بازارهای میوه و تره‌بار که تنها یک واسطه (مغازه‌های میوه‌فروشی) را حذف می‌کنند. راه‌حل ما از نظر کاهش واسطه‌ها و تضمین کیفیت محصولات مناسبتر از این راه‌کارها هستند." required><?php echo $solution; ?></textarea>
                                            <p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                        </label>
                                    </div>
                                    <div class="pad-5 char-count">
                                        <label for="market-size" class="gui-label pad-5"> اندازه بازار برای اینکار چقدر است ؟ </label>
                                        <label class="relative">
                                            <textarea name="market_size" class="gui-textarea sans-digit" maxlength="255" id="market-size" placeholder="راه‌حل‌های موجود برای خریداران و فروشندگان و همچنین کاهش واسطه‌ها عبارت است از خرید از وانتی‌ها و همچنین خرید از بازارهای میوه و تره‌بار که تنها یک واسطه (مغازه‌های میوه‌فروشی) را حذف می‌کنند. راه‌حل ما از نظر کاهش واسطه‌ها و تضمین کیفیت محصولات مناسبتر از این راه‌کارها هستند." required><?php echo $market_size; ?></textarea>
                                            <p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                        </label>
                                    </div>
                                    <div class="pad-5 char-count">
                                        <label for="defect" class="gui-label pad-5"> رقبای داخلی و خارجی شما چه کسانی هستند ؟ </label>
                                        <label class="relative">
                                            <textarea name="defect" class="gui-textarea sans-digit" maxlength="255"	 id="defect" placeholder="در داخل کشور رقیبی برای این کار غیر از استارتاپ ب پیدا نشده است و در خارج از کشور هم در بسیاری از مناطق جامعه با این مساله مواجه نیستند." required><?php echo $defect; ?></textarea>
                                            <p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                        </label>
                                    </div>
                                    <div class="pad-5">
                                        <label class="gui-label pad-5">پیش بینی مالی:</label>
                                        <div class="relative">
                                            <?php if(!empty($predict_id)){ ?>
                                                <div class="pointer predict-inp width45 colm pull-right">
                                                    <a class="color-blue font-s14" href="<?php echo $predict_url; ?>" download>دانلود فایل پیش بینی مالی</a>
                                                </div>
                                                 <div class="relative pointer predict-inp width45 colm pull-left">
                                                     <span class="align-center absolute pointer font-s14">تغییر فایل <span id="file-upload-filename"></span></span>
                                                     <input type="file" class="sans-digit predict" name="attachfile" id="file-upload">
                                                </div>
                                                <?php }else{ ?>
                                                <div class="relative pointer predict-inp colm12 colm">
                                                    <span class="absolute pointer font-s14 margin-center">آپلود فایل پیش بینی مالی (pdf با حجم حداکثر 10 مگ)</span>
                                                    <input type="file" class="sans-digit predict" name="attachfile" id="file-upload">
                                                    <input type="file" id="my_file" style="display: none;" />
                                                </div>
                                            <?php }?>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="pad-5 toggle-element pad-b40 pad-t20">
                                        <?php if ($pdf_url) : ?>
                                            <label class="gui-label pad-5">پیچ دک :</label>
                                            <div class="pointer predict-inp width45 colm pull-right" id="download-pitch">
                                                <a class="color-blue font-s14" href="<?php echo $pdf_url ?>" download>دانلود فایل پیچ دک</a>
                                            </div>
                                            <div class="pointer predict-inp width45 colm pull-left" id="change-pitch" data-type="toggle-1">
                                                <span class="align-center font-s14" data-type="toggle-btn">تغییر فایل پیچ دک</span>
                                            </div>
                                        <?php endif ?>
                                        <div class="<?php echo ($pdf_url) ? "hide" : "" ?>" data-type="toggle-2">
                                            <label for="pitch-deck" class="gui-label pad-5">
                                                مدل کسب و کار (پیچ دک) خود را بارگذاری نمایید. (pdf با حجم حداکثر 10 مگ)
                                                <a href="<?php bloginfo('template_url');?>/assets/files/Pitch-Deck.pdf" class="font-s15 pull-left" download>دانلود نمونه</a>
                                            </label>
                                            <label class="relative upload-show <?php if ($attach) echo ""; ?>">
                                                <div action="/upload" class="dropzone" id="upload-pdf">
                                                </div>
                                            </label>
                                        </div>
                                        <?php if($_GET['message']=='error3') {?>
											<h4 class="color-red font-s14 pad-10">آپلود پیچ دک اجباری است.</h4>
										<?php } ?>
                                    </div>

                                </div>
                            </div>

                            <div class="align-left spacer-t40">
                                <div class="pull-right pad-5-mob colm5-mob">
                                    <a href="<?php echo home_url('/uploads/?step=5') ?>" class="btn-prv font-s13 colm">مرحله قبل </a>
                                </div>
                                <div class="pull-left pad-5-mob colm7-mob">
                                    <button type="submit" name="submit" class="btn-web colm">مرحله بعد </button>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
<?php } else {
    wp_redirect('/register');
} ?>
<style>
    
    .predict {
        opacity: 0;
        width: 100%;
        height: 100%;
    }
    .width45 {
        width: 45%;
    }
    .predict-inp {
        color: #747474;
        font-size: 13px;
        border: 1px solid #bbb;
        padding: 8px 52px 8px 20px;
        border-radius: 24px;
    }

</style>
<script>
    jQuery(document).ready(function($) {
        var uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }
        $(".delete").click(function() {
            $(".upload-hide").hide();
            $(".upload-show").removeClass('hide');
        });

        $('#change-pitch').click(function() {
            $('#download-pitch').addClass('hide');
        })
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
        Dropzone.options.uploadPdf = {
            params: {
                file_type: "pdf",
                user_id: <?php echo $user_id; ?>
            },
            timeout: 1800000,
            maxFiles: 1,
            maxFilesize: 20,
            paramName: "pdf",
            addRemoveLinks: true,
            acceptedFiles: '.pdf',
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
                $("#send-ppt").click(function(e) {
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
                if(toggle1) {
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