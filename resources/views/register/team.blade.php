@extends('layouts.default-register')
@section('content-register')
<div id="section-step" class="container-fluide bg-gray">
	<div  class="container pad-20 pad-step pad-50-tmob min-100vh flex-center">
		<div id="section-step-content" class="colm8 colm10-tab colm margin-auto pad-40 pad-20-tab pad-10-mob bg-white spacer-t40 spacer-b40">
			<div>
				@include('register.steps')
			</div>
			<div class="colm10 colm11-tab colm margin-auto pad-5-mob">
				<div class="pad-b5">
					<h2 class="font-s30 color6">تیم</h2>
                    <p class="color-darkgray font-s14 pad-t15">لطفا اطلاعات تیم خود را وارد کنید  </p>
				</div>
				<div class="spacer-t10">
					<form method="post" class="smart-validate" enctype="multipart/form-data">
						<div>
                            <div class="frm-row">
                                <div class="pad-5 char-count">
                                    <label for="introduction" class="gui-label pad-5">  نحوه آشنایی اعضای تیم با یکدیگر  </label>
                                    <label class="relative text-counter">
                                        <textarea  name="introduction" id="introduction" maxlength="255"  class="gui-textarea" placeholder="تعدادی از اعضای تیم رو از طریق جابینجا شناختم، با تعدادی از قبل همکار بودم و تعدادی از افراد تیم را هم از دوستانم معرفی کرده‌اند." required ></textarea>
                                    	<p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                    </label>
                                </div>
                                <div class="pad-5 char-count">
                                    <label for="better" class="gui-label pad-5"> چه چیز باعث شده شما بهتر از بقیه باشید ؟</label>
                                    <label class="relative">
                                        <textarea name="better" maxlength="255" id="better" required id="team-excerpt1" class="gui-textarea" placeholder="تلاش شبانه‌روزی، هوشمندی در شیوه توسعه کار و شبکه گسترده که برای تمامی آن‌ها در فایل ارائه دلایل و مستنداتی ذکر شده است. علاوه بر این ما افرادی را در تیم داریم که در حوزه خرید میوه و سبزیجات به صورت مستقیم کار کرده‌اند و با این بازار آشنا هستند. شبکه تامین‌کنندگان ما برای این کار سه برابر استارتاپ ب است و روند رشد ما دو برابر استارتاپ ب بوده است." required></textarea>
                                    	<p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                    </label>
                                </div>
                                <div class="pad-5 char-count">
                                    <label for="defect" class="gui-label pad-5"> تیم شما چه چیزی کم دارد ؟ </label>
                                    <label class="relative">
                                        <textarea name="defect_team" id="defect" required  maxlength="255" class="gui-textarea" placeholder="سرمایه مناسب برای توسعه‌ی نمایندگی‌ها و همچنین برخی مجوزها برای صدور ضمانت‌نامه خرید و ... ." required></textarea>
                                    	<p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                    </label>
                                </div>
                                <div class="pad-5 char-count">
                                    <label for="reagent" class="gui-label pad-5">معرف شما چه کسی بوده ؟</label>
                                    <label class="relative">
                                        <textarea name="reagent" id="reagent" required  maxlength="255" class="gui-textarea" required></textarea>
                                    	<p class="align-left font-w200 font-s12 color-blue pad-l5"></p>
                                    </label>
                                </div>
                            </div>
						</div>


						<div class="person" id="personn">

							<h2 class="bold font-s20 pad-15 bg-gray border-ra5">اعضای تیم</h2>
							<h3 class="pad-15 bold">رهبر تیم</h3>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="first-name" class="gui-label pad-5">نام :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-user vertical"></i></span>
										<input type="text" class="gui-input sans-digit" id="first-name" value="" name="first_name" placeholder="مثال : محمد" data-rule-lettersonly="true" autocomplete="off" required>
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="last-name" class="gui-label pad-5">نام خانوادگی :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-user vertical"></i></span>
										<input type="text" class="gui-input sans-digit" value="" name="last_name" placeholder="مثال : محمدی" data-rule-lettersonly="true" id="last-name" autocomplete="off" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="mobile" class="gui-label pad-5"> شماره همراه:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-mobile"></i></span>
										<input dir="ltr" class="gui-input sans-digit" readonly value="" id="mobile" >
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="email" class="gui-label pad-5">ایمیل :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-at"></i></span>
										<input dir="ltr" type="email" class="gui-input sans-digit" name="email" id="email" value=""  placeholder="example@gmail.com" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="linkedin" class="gui-label pad-5">لینکدین :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fab fa-linkedin-in vertical"></i></span>
										<input dir="ltr" type="text" class="gui-input sans-digit" value="" name="linkedin" id="linkedin" >
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="birthday" class="gui-label pad-5"> تاریخ تولد :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-birthday-cake"></i></span>
										<input dir="ltr" class="gui-input sans-digit datepicker-gregorian" name="birthday" value="" id="birthday" autocomplete="off" readonly required placeholder="1398/10/02" >
									</label>
								</div>

								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="expertise" class="gui-label pad-5">تخصص:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-laptop-code vertical"></i></span>
										<input type="text" class="gui-input sans-digit" name="expertise" value="" id="expertise" placeholder="مثال : نرم افزار" required>
									</label>
								</div>

                                <div class="colm6 colm pull-right pad-5">

								<label class="gui-label pad-5">تحصیلات:</label>
                                    <label  class="relative">
                                        <span class="icon-gui flex-center"><i class=" fa fa-user-graduate vertical"></i></span>
                                        <select class="gui-input sans-digit" name="educationl">
                                            <option value="">میزان تحصیلات خود را انتخاب کنید</option>
                                            <option value="2">دیپلم</option>
                                            <option value="3">کاردانی</option>
                                            <option value="4">کارشناسی</option>
                                            <option value="4">کارشناسی ارشد</option>
                                            <option value="4">دکتری</option>
                                        </select>
                                    </label>

                                </div>

								<div class="clearfix"></div>
							</div>
							<!--<div class="frm-row">
								<div class="colm12 colm pad-5">
									<label for="side" class="gui-label pad-5"> سمت در استارت آپ :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-book-reader"></i></span>
										<input dir="rtl" class="gui-input sans-digit" name="side" value="" id="side" autocomplete="off" placeholder="سمت استارت آپ" >
									</label>
								</div>
							</div>-->

							<div class="frm-row">
								<div class="colm6 colm pad-5 pull-right">
									<label for="average" class="gui-label pad-5"> زمان اختصاص داده شده به استارتاپ در طول ماه:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-clock vertical"></i></span>
										<input type="number" min="0" max="200" class="gui-input sans-digit" name="average" value="" id="average" placeholder="مثال : 100 ساعت" >
									</label>
								</div>
								<div class="colm6 colm pad-5 pull-right">
									<label for="stock" class="gui-label pad-5">میزان سهام :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-percentage vertical"></i></span>
										<input type="number" class="gui-input sans-digit" name="stock" value="" id="stock" placeholder="مثال :  20 درصد" >
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>

						<!------ Foreach ------>
						<?php
//							$args = array(
//								'showposts'=>10,
//								'query'=>array(
//									array(
//										'key'=>'user_id',
//										'value'=>$user_id,
//										'compare'=>'='
//									),
//									array(
//										'key'=>'status',
//										'value'=>'publish',
//										'compare'=>'='
//									)
//								)
//							);
//							$group_user = query_data('group_user',$args);
						?>
<!--						--><?php //foreach($group_user as $number_s): ?>

							<div class="team">
								<div class="remove-group align-right pointer close_user relative" data-id="">
									<div class="absolute font-s16 flex-center close-u">
										<span class="">
											<i class="fa fa-times-circle color-red"></i>
										</span>
									</div>
								</div>
						<div class="">
							<input type="text" name="id[]" value="" class="hide" />
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="first-name" class="gui-label pad-5">نام :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-user vertical"></i></span>
										<input type="text" class="gui-input sans-digit"  value="" name="first_namel[]" placeholder="مثال : محمد" data-rule-lettersonly="true" autocomplete="off" required>
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="first-name" class="gui-label pad-5">نام خانوادگی :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-user vertical"></i></span>
										<input type="text" class="gui-input sans-digit" value="" name="last_namel[]" placeholder="مثال : محمدی" data-rule-lettersonly="true"  autocomplete="off" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="" class="gui-label pad-5"> شماره همراه:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-mobile"></i></span>
										<input dir="ltr" class="gui-input sans-digit"  data-rule-customphone="true" name="mobilel[]" value=""  autocomplete="off" placeholder="09000000000" required>
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label class="gui-label pad-5">ایمیل :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-at vertical"></i></span>
										<input dir="ltr" type="email" class="gui-input sans-digit" name="email_l[]"  value="" placeholder="example@gmail.com" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label class="gui-label pad-5">لینکدین :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fab fa-linkedin-in vertical"></i></span>
										<input dir="ltr" type="text" class="gui-input sans-digit" value=""  name="linkdinl[]" >
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label class="gui-label pad-5"> تاریخ تولد :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class="fa fa-birthday-cake"></i></span>
										<input dir="ltr" class="gui-input sans-digit datepicker-gregorian" name="birthdayl[]" value="" autocomplete="off" readonly placeholder="1398/10/02" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="expertise" class="gui-label pad-5">تخصص:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-laptop-code vertical"></i></span>
										<input type="text" class="gui-input sans-digit" name="expertisel[]" value="" placeholder="مثال : نرم افزار" required>
									</label>
								</div>

								<div class="colm6 colm pull-right pad-5">

								<label class="gui-label pad-5">تحصیلات:</label>
                                    <label  class="relative">
                                        <span class="icon-gui flex-center"><i class=" fa fa-user-graduate vertical"></i></span>
                                        <select class="gui-input sans-digit" name="educationl1[]">
                                            <option value="">میزان تحصیلات خود را انتخاب کنید</option>
                                            <option value="2">دیپلم</option>
                                            <option value="3">کاردانی</option>
                                            <option value="4">کارشناسی</option>
                                            <option value="5">کارشناسی ارشد</option>
                                            <option value="6">دکتری</option>
                                        </select>
                                    </label>

								</div>

								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm12 colm pad-5">
									<label for="sidel" class="gui-label pad-5"> سمت در استارت آپ :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-book-reader"></i></span>
										<input dir="rtl" class="gui-input sans-digit " name="sidel[]" value=""  autocomplete="off" placeholder="سمت استارت آپ" required>
									</label>
								</div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pad-5 pull-right">
									<label class="gui-label pad-5"> زمان اختصاص داده شده به استارتاپ در طول ماه:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-clock vertical"></i></span>
										<input type="number" class="gui-input sans-digit" name="averagel[]" value=""  placeholder="مثال : 100 ساعت" >
									</label>
								</div>
								<div class="colm6 colm pad-5 pull-right">
									<label class="gui-label pad-5">میزان سهام :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-percentage vertical"></i></span>
										<input type="number" class="gui-input sans-digit" name="stockl[]" value=""  placeholder="مثال :  20 درصد" >
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
								<hr />
								</div>
							</div>
						<!------ Foreach ------>
						<div class="team">
							<div class="hide clone relative">
                                <div class="remove-group align-right pointer close_user relative close-ta">
                                    <div class="absolute font-s16 flex-center close-u">
										<span class="">
											<i class="fa fa-times-circle color-red"></i>
										</span>
                                    </div>
                                </div>
                                <h2 class="bold font-s20 pad-15 bg-gray border-ra5 spacer-t20">عضو گروه</h2>
								<input type="text" name="id[]" value="" class="hide" />
								<input type="text" name="remove[]" value="" class="remove_web hide" />
								<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="first-namel" class="gui-label pad-5">نام :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-user verticall"></i></span>
										<input type="text" class="gui-input sans-digit"  value="<?php ?>" name="first_namel[]" placeholder="مثال : محمد" data-rule-lettersonly="true"  autocomplete="off" required aria-selected="true">
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="last-namel" class="gui-label pad-5">نام خانوادگی :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-user vertical"></i></span>
										<input type="text" class="gui-input sans-digit" value="<?php  ?>" name="last_namel[]" placeholder="مثال : محمدی" data-rule-lettersonly="true" autocomplete="off" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="mobilel" class="gui-label pad-5"> شماره همراه:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-mobile"></i></span>
										<input dir="ltr" class="gui-input sans-digit" name="mobilel[]" data-rule-customphone="true" value="<?php ?>" autocomplete="off" placeholder="09000000000" required>
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="email-l" class="gui-label pad-5">ایمیل :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class="fa fa-at"></i></span>
										<input dir="ltr" type="email" class="gui-input sans-digit" name="email_l[]" value="<?php ?>"  placeholder="example@gmail.com" required>
									</label>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label class="gui-label pad-5">لینکدین :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fab fa-linkedin-in vertical"></i></span>
										<input dir="ltr" type="text" class="gui-input sans-digit" value="<?php ?>"  name="linkdinl[]">
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="birthdayl" class="gui-label pad-5"> تاریخ تولد :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-birthday-cake"></i></span>
										<input dir="ltr" class="gui-input sans-digit datepicker" name="birthdayl[]" value="<?php ?>"  autocomplete="off" placeholder="1398/10/02" required>
									</label>
								</div>

								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="expertisel" class="gui-label pad-5">تخصص:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-laptop-code vertical"></i></span>
										<input type="text" class="gui-input sans-digit" name="expertisel[]" value="<?php ?>"  placeholder="مثال : نرم افزار" required>
									</label>
								</div>

                                <div class="colm6 colm pull-right pad-5">

								<label class="gui-label pad-5">تحصیلات:</label>
                                    <label  class="relative">
                                        <span class="icon-gui flex-center"><i class=" fa fa-user-graduate vertical"></i></span>
                                        <select class="gui-input sans-digit" name="educationl1[]">
                                            <option value="">میزان تحصیلات خود را انتخاب کنید</option>
                                            <option value="2">دیپلم</option>
                                            <option value="3">کاردانی</option>
                                            <option value="4">کارشناسی</option>
                                            <option value="5">کارشناسی ارشد</option
                                            <option value="6">دکتری</option>
                                        </select>
                                    </label>

                                </div>

								<div class="clearfix"></div>
							</div>
							<div class="frm-row">
								<div class="colm12 colm pad-5">
									<label for="sidel" class="gui-label pad-5"> سمت در استارت آپ :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-book-reader"></i></span>
										<input dir="rtl" class="gui-input sans-digit" name="sidel[]" value="<?php  ?>" autocomplete="off" placeholder="سمت استارت آپ" required>
									</label>
								</div>
							</div>
							<div class="frm-row">
								<div class="colm6 colm pad-5 pull-right">
									<label for="averagel" class="gui-label pad-5"> زمان اختصاص داده شده به استارتاپ در طول ماه:</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-clock vertical"></i></span>
										<input type="number" min="0" max="200" class="gui-input sans-digit" name="averagel[]" value="<?php ?>"  placeholder="مثال : 100 ساعت" >
									</label>
								</div>
								<div class="colm6 colm pad-5 pull-right">
									<label for="stockl" class="gui-label pad-5">میزان سهام :</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class=" fa fa-percentage vertical"></i></span>
										<input type="number" class="gui-input sans-digit" name="stockl[]" value="<?php ?>"  placeholder="مثال :  20 درصد" >
									</label>
								</div>
							</div>
							<hr />
							</div>
                            <div class=" pointer btn-add flex-center">
                                <i class="add-team plus-rot fa fa-plus-circle vertical spacer-t10"></i>
                            </div>
                            <h3 class="align-center font-s13 spacer-t5">اضافه کردن اعضا</h3>
						</div>

						<div class="align-left spacer-t40">
							<div class="pull-right colm5-mob pad-5-mob">
								<a href="{{route('startup')}}" class="btn-prv font-s13 colm">مرحله قبل </a>
							</div>
							<div class="align-left spacer-t40">
								<div class="pull-left colm7-mob pad-5-mob">
									<button type="submit" class="btn-web colm">مرحله بعد </button>
								</div>

				     			<div class="clearfix"></div>
							</div>
			     			<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@include('footer')

<script>
jQuery(document).ready(function($){
	$(document).on("click",".remove-group",function(){
		  $(this).parent().remove();
		  $('.loader').show();
		setInterval(function() {
		  $('.loader').hide();
		}, 200);
	})
	$(".add-team").on("click",function(){
		if($('.group').length < 10) {
            $('.clone').clone().addClass('group').removeClass('clone hide').insertBefore('.clone');
		}
	})

	var uri = window.location.toString();
	if (uri.indexOf("?") > 0) {
	    var clean_uri = uri.substring(0, uri.indexOf("?"));
	    window.history.replaceState({}, document.title, clean_uri);
	}
});
</script>
<script>
    new WOW().init();
</script>
@stop
