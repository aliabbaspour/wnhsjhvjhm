@extends('layouts.default-register')
@section('content-register')
<style>
.bg-cat{
	background:#58bb58;
 	color:#fff;
}
</style>
<div id="section-step" class="container-fluide bg-gray">
	<div class="container pad-20 pad-step pad-50-tmob min-100vh flex-center">
		<div id="section-step-content" class="colm8 colm10-tab colm margin-auto pad-40 pad-20-tab  pad-10-mob bg-white spacer-t40 spacer-b40">
			<div>
            @include('register.steps')
            </div>
			<div class="colm10 colm11-tab colm margin-auto pad-5-mob">
				<div class="pad-b5">
					<h2 class="font-s30 color6">معرفی استارتاپ</h2>
                    <p class="color-darkgray font-s14 pad-t15">لطفا اطلاعات مربوط به استارتاپ خود را پر کنید  </p>
				</div>
				<div class="spacer-t5">
					<form method="post" class="smart-validate" name="startup" enctype="multipart/form-data" action="">
						<div class="person">
							<div id="avatarbox" class="avatar-box pad-10 flex-center spacer-b10">

{{--						       //if--}}
						        <img class="img-avatar" src="">
{{--						        //else--}}
                                    <img id="output" class="pre-logo hide img-avatar">
                                    <!--<img class="img-avatar" src="/assets/images/im.png">-->
						                <p class="color-darkgray font-s24 uploading align-center"><i class="fa fa-upload"></i></p>
						                <p class="color-darkgray font-s14 uploading align-center">لوگو تیم را بارگذاری کنید</p>
{{--						        //endif--}}
						    </div>
						    <input type="file" class="uploadlogo" name="avatar" id="avatar">
						    <textarea  name="avatar_base64" class="avatar-base64 hide"></textarea>
							<div class="frm-row">
								<div class="colm6 colm pull-right pad-5">
									<label for="startup-name" class="gui-label pad-5">نام استارتاپ  </label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class="fa fa-rocket vertical"></i></span>
										<input type="text" class="gui-input sans-digit" value="" name="startup_name" placeholder="مثال : رویداد" required>
									</label>
								</div>

								<div class="colm6 colm pull-right pad-5">
									<label for="website" class="gui-label pad-5">سایت استارتاپ </label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class="fab fa-internet-explorer vertical"></i></span>
										<input type="text" dir="ltr" class="gui-input sans-digit" value="" name="website" id="website" placeholder="http://100startup.ir" data-rule-website="true" >
									</label>
								</div>
								<div class="clearfix"></div>
							</div>

							<div class="frm-row">
		                        <div class="colm6 colm pull-right pad-5">
		                            <label for="province-startup" class="gui-label pad-5"> استان محل استقرار</label>
		                            <label class="relative">
		                                <select id="province-startup" class="province gui-input sans-digit" name="province_startup" data-value="" required />
		                                    <option value="">لطفا یک استان را انتخاب کنید</option>
		                                </select>
		                            </label>
		                         </div>
		                        <div class="colm6 colm pull-right pad-5">
		                            <label for="city-tstartup" class="gui-label pad-5">شهر محل استقرار</label>
		                            <label class="relative">
		                                <select id="city-startup" class="city gui-input sans-digit" name="city_startup" data-value="" required />
		                                    <option value="">لطفا یک شهر را انتخاب کنید</option>
		                                </select>
		                            </label>
		                         </div>

		                        <div class="clearfix"></div>
	                    	</div>

							<div class="frm-row">
                                <div class="colm6 colm pull-right pad-5">
                                    <label for="start-date" class="gui-label pad-5">تاریخ شروع به کار </label>
                                    <label class="relative">
                                        <span class="icon-gui flex-center"><i class="fa fa-calendar-alt"></i></span>
                                        <input dir="ltr" class="gui-input sans-digit" name="start_date" value="" id="start-date" autocomplete="off" readonly placeholder="1398/10/02" required>
                                    </label>
                                </div>
								<div class="colm6 colm pull-right pad-5">
									<label for="prototype" class="gui-label pad-5">آیا نمونه اولیه ساخته اید </label>
									<label class="relative">
										<span for="prototype" class="flex-center icon-select">
                                            <i class="fa fa-chevron-down vertical"></i>
                                        </span>
                                        <select class="gui-select sans-digit" id="prototype" name="prototype" required>
                                            <option value="">انتخاب کنید</option>
                                            <option value="بله" >بله</option>
                                            <option value="خیر" >خیر</option>
                                        </select>
									</label>
								</div>
								<div class="colm6 colm pull-right pad-5">
									<label for="investment" class="gui-label pad-5 font-s13">آیا تا‌کنون ‌سرمایه ‌جذب‌کرده‌اید </label>
									<label class="relative">
										<span class="icon-select flex-center">
                                            <i class="fa fa-chevron-down vertical"></i>
                                        </span>
                                        <select class="gui-select sans-digit" id="investment" name="investment" required>
                                            <option value="">انتخاب کنید</option>
                                            <option value="بله" >بله</option>
                                            <option value="خیر" >خیر</option>
                                        </select>
									</label>
								</div>
                                <div class="colm6 colm pull-right pad-5">
									<label for="mentor-id" class="gui-label pad-5">انتخاب راهبر تیم</label>
									<label class="relative">
										<span class="icon-gui flex-center"><i class="fa fa-user vertical"></i></span>
										<input type="text" id="mentor-id" class="choosen-name search-leaders gui-input sans-digit" oninput="searchApi('search-leaders','leader-results','leader','startup')" value="" name="leader_name" placeholder="مثال : علی" >
									    <input type="hidden" class="choosen-id" name="mentor_name" value="">
                                        <div id="leader-results"></div>
                                    </label>
								</div>
{{--                                //if--}}
                            <div id="created-leader">
                                <div class="colm4 colm pull-right pad-5 relative">
                                    <span class="pointer remove-created-leader remove-leader absolute"><i class="fa fa-times-circle color-startup"></i></span>
                                    <label for="mentor-fname" class="gui-label pad-5">نام راهبر</label>
                                    <label class="relative">
                                        <span class="icon-gui flex-center"><i class="fa fa-user vertical"></i></span>
                                        <input type="text" id="mentor-fname" class="gui-input sans-digit mentor" value="" name="mentor_fname"  placeholder="مثال : عباسپور" >
                                    </label>
                                </div>
                                <div class="colm4 colm pull-right pad-5">
                                    <label for="mentor-lname" class="gui-label pad-5">نام خانوادگی راهبر</label>
                                    <label class="relative">
                                        <span class="icon-gui flex-center"><i class="fa fa-user vertical"></i></span>
                                        <input type="text" id="mentor-lname" class="gui-input sans-digit mentor" value="" name="mentor_lname"  placeholder="مثال : عباسپور" >
                                    </label>
                                </div>
                                <div class="colm4 colm pull-right pad-5">
                                    <label for="mentor-number" class="gui-label pad-5">شماره موبایل راهبر</label>
                                    <label class="relative">
                                        <span class="icon-gui flex-center"><i class="fa fa-mobile vertical"></i></span>
                                        <input dir="ltr" id="mentor-number" type="text" class="gui-input sans-digit mentor" value="" name="mentor_number" data-rule-customphone="true"  placeholder="09XXXXXXX" >
                                    </label>
                                </div>
                                <div class="colm12 colm pull-right pad-5 div-mobile hide">
                                     <p class="color-red font-s12 pad-t15">شما نمیتوانید راهبر باشید</p>
                                 </div>
                                <div class="cleafix"></div>
                            </div>
{{--                            @endif--}}
                            <div class="colm6 colm pull-right"></div>
                            <div class="create colm12 colm"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="align-center spacer-t10">
                                <label for="catc" class="gui-label spacer-b20">انتخاب دسته بندی ضروری می باشد </label>
                                <label class="relative">
                                <a class="button-pop font-s13" id="catc" href="#open-modal1">انتخاب دسته بندی</a>
                                </label>
                            </div>
							<div id="open-modal1" class="modal-window">
								<div class="content colm6 colm margin-auto">
									<a href="#modal-close" title="بستن" class="modal-close"><i class="fa fa-times"></i></a>
									<h1 class="digit">حداکثر 3 دسته بندی انتخاب شود</h1>
									<div class="contentt">
										<div class="spacer-t10">
                                                    <div class="colm2 colm6-mob align-center pull-right cat-image">
                                                        <input class="cat-check" id="cat" name="cat[]" value="" type="checkbox"  title=""/>
                                                        <label for="cat" >
                                                            <img width="" src="" />
                                                            <div class="cat-title"></div>
                                                        </label>
                                                    </div>
											<div class="clearfix"></div>
                                            <div class="align-center">
                                                <a href="#modal-close" class="btn-web margin-auto show">ثبت</a>
                                            </div>
										</div>
									</div>
								</div>
							</div>
						</div>

                        <div class="spacer-t20 margin-auto align-center">
                                <span class=" color-blue  font-s12"></span>
                            <span class="catname color-blue  font-s12"></span>
                        </div>
						<div class="align-left spacer-t40">
							<div class="pull-right pad-5-mob colm5-mob">
								<a href="{{route('register')}}" class="btn-prv font-s13 colm">مرحله قبل </a>
							</div>
							<div class="pull-left pad-5-mob colm7-mob">
								<button type="submit" class="btn-web  colm disabled">مرحله بعد </button>
							</div>

			     			<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="popup-frame hide" >
    <div class="resize-frame pad-20">
        <div class="crop-image">
            <img id="imgs" src="{{ URL::asset('assets/images/avatar.png') }}">
        </div>
        <div id="crop" class="btn-ui align-center font-s14 font-w3">بـرش تصویر</div>
        <img src="{{ URL::asset('assets/images/button-close.png') }}" class="closeicon" />
    </div>
</div>
@stop

<!----- checkbox ---->
<style>
    .remove-leader {
        right: -20px;
    }
</style>
<script>
    jQuery(document).ready(function($){
        $(".cat-check:checked").each(function(){
            var title =  $(this).attr('title');
            $(".catname").append(title," / ");
        })
        $(".cat-check").change(function(){
            var max= 3;
            if( $(".cat-check:checked").length == max ){
                $(".cat-check").attr('disabled', 'disabled');
                $(".cat-check:checked").removeAttr('disabled');
            }else{
                $(".cat-check").removeAttr('disabled');
            }

            var min = 0 ;
            if( $(".cat-check:checked").length > min ){
                $(".btn-web").prop( "disabled", false );
            }else{
                $(".btn-web").prop( "disabled", true );
            }
            if( $(".cat-check:checked").length > min ){
                $(".button-pop").addClass("bg-cat");
            }else{
                $(".button-pop").removeClass("bg-cat");
            }
            var title = '';
            if( $(".cat-check").is(':checked')){
                $(".cat-check:checked").each(function(){
                    title +=  $(this).attr('title')+'/';
                    $(".catname").html(title);
                })
            }else {
                title = '';
                $(".catname").html(title);
            }
        })
        $('.cat-check').each(function() {

            var max= 3;
            if( $(".cat-check:checked").length == max ){
                $(".cat-check").attr('disabled', 'disabled');
                $(".cat-check:checked").removeAttr('disabled');
            }else{
                $(".cat-check").removeAttr('disabled');
            }
            if( $(".cat-check:checked").length > 0 ){
                $(".button-pop").addClass("bg-cat");
            }else{
                $(".button-pop").removeClass("bg-cat");
            }
        })
        var min = 0 ;
        if( $(".cat-check:checked").length > min ){
            $(".btn-web").prop( "disabled", false );
        }else{
            $(".btn-web").prop( "disabled", true );
        }



        var uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            var clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    });

    jQuery(document).ready(function($) {
        $('.uploadlogo').change(function() {
            $('.pre-logo').removeClass('hide').addClass('show');
            $('.uploading').addClass('hide');
        })
        // var classes = document.querySelectorAll('.mentor');
        $(document).on('keyup','.mentor',function(){
            if($('#mentor-fname').val().length > 0 || $('#mentor-lname').val().length > 0 || $('#mentor-number').val().length > 0)
                $('.mentor').prop('required',true);
            else $('.mentor').prop('required',false);
        })
        $(document).on('blur','#mentor-number',function() {
            var mentorNum = $('input[type=text][name=mentor_number]').val();
            if(mentorNum=='') $('.div-mobile').show();
            else $('.div-mobile').hide();
        })

        $(document).on('click','.create-leader',function() {
            $('.create').html('<div class="removing">\n' +
                '<div class="colm4 colm pull-right pad-5 relative">\n' +
                '                                    <span class="pointer remove-leader absolute"><i class="fa fa-times-circle color-red"></i></span>\n' +
                '                                    <label for="mentor-fname" class="gui-label pad-5">نام راهبر</label>\n' +
                '                                    <label class="relative">\n' +
                '                                        <span class="icon-gui flex-center"><i class="fa fa-user vertical"></i></span>\n' +
                '                                        <input type="text" id="mentor-fname" class="gui-input sans-digit mentor" value="" name="mentor_fname"  placeholder="مثال : عباسپور" >\n' +
                '                                    </label>\n' +
                '                                </div>\n' +
                '<div class="colm4 colm pull-right pad-5">\n' +
                '                                    <label for="mentor-lname" class="gui-label pad-5">نام خانوادگی راهبر</label>\n' +
                '                                    <label class="relative">\n' +
                '                                        <span class="icon-gui flex-center"><i class="fa fa-user vertical"></i></span>\n' +
                '                                        <input type="text" id="mentor-lname" class="gui-input sans-digit mentor" value="" name="mentor_lname"  placeholder="مثال : عباسپور" >\n' +
                '                                    </label>\n' +
                '                                </div>\n' +
                '                                <div class="colm4 colm pull-right pad-5">\n' +
                '                                    <label for="mentor-number" class="gui-label pad-5">شماره موبایل راهبر</label>\n' +
                '                                    <label class="relative">\n' +
                '                                        <span class="icon-gui flex-center"><i class="fa fa-mobile vertical"></i></span>\n' +
                '                                        <input dir="ltr" id="mentor-number" type="text" class="gui-input sans-digit mentor" value="" name="mentor_number" data-rule-customphone="true"  placeholder="09XXXXXXX" >\n' +
                '                                    </label>\n' +
                '                                </div>\n' +
                '                                <div class="colm12 colm pull-right pad-5 div-mobile hide">\n' +
                '                                    <p class="color-red font-s12 pad-t15">شما نمیتوانید راهبر باشید</p>\n' +
                '                                </div>\n' +
                '<div class="cleafix"></div>\n'+
                '                                </div>');
            $('#mentor-id').prop('disabled',true);
        })
        $(document).on('click','.remove-created-leader',function() {
            $('#created-leader').remove();
            $('#mentor-id').prop('disabled',false);
        })
        $(document).on('click','.remove-leader',function() {
            $('.removing').remove();
            $('#mentor-id').prop('disabled',false);
        })
    });



</script>
