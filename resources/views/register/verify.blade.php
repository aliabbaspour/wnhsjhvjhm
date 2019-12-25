@extends('layouts.default-register')
@section('content-register')
	<div id="section-step" class="container-fluide bg-gray min-100vh">
		<div class="container pad-20 pad-step pad-50-tmob min-100vh flex-center">
			<div id="section-step-content" class="colm8 colm10-tab colm margin-auto pad-40 pad-20-tab  pad-10-mob bg-white spacer-t40 spacer-b40">
				<div>
					@include('register.steps')
				</div>
				<div class="colm8 colm11-tab colm margin-auto pad-5-mob">
					<div class="pad-b20">
						<h2 class="font-s30 color6">اعتبارسنجی <span class="font-s11 bold"> (شماره شما : {{$mobile}} ) </span></h2>
						<p class="color-darkgray font-s14 pad-t15">لطفا پیامک ارسال شده به شماره همراه خود را واردکنید </p>
					</div>
					<div class="spacer-t5">
						<form method="post" action="{{route('verify_to_startup')}}" class="smart-validate">
                            @csrf
							<div class="align-center">
								<span id="timer" class="digit hide-timer color-darkgray"></span>
								<span class="font-s13 color-silver hide send-sms color-darkgray pointer">ارسال مجدد پیام</span>
							</div>
							<div>
								<label class="relative">
									<span class="icon-gui flex-center"><i class="fa fa-phone vertical"></i></span>
									<input dir="ltr" type="tel" class="gui-input sans-digit englishnum number-input" maxlength="5" name="verify" id="verify" autofocus autocomplete="off" required>
								</label>
							</div>

{{--								<em id="verify-error" class="error">کد وارد شده توسط شما درست نمیباشد.</em>--}}

							<div class="align-left spacer-t40">
								<div class="pull-right colm5-mob pad-5-mob">
									<a href="{{route('register')}}" class="btn-prv btn-dis font-s13 pad-10 colm">مرحله قبل </a>
								</div>
								<div class="pull-left colm7-mob  pad-5-mob">
									<button type="submit" class="btn-web colm">مرحله بعد </button>
								</div>
								<div class="clearfix"></div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop
<script>
    jQuery(document).ready(function($) {
        let uri = window.location.toString();
        if (uri.indexOf("?") > 0) {
            let clean_uri = uri.substring(0, uri.indexOf("?"));
            window.history.replaceState({}, document.title, clean_uri);
        }

        // Timer
        String.prototype.toHHMMSS = function() {
            let sec_num = parseInt(this, 10); // don't forget the second parm
            let hours = Math.floor(sec_num / 3600);
            let minutes = Math.floor((sec_num - (hours * 3600)) / 60);
            let seconds = sec_num - (hours * 3600) - (minutes * 60);

            if (hours < 10) {
                hours = "0" + hours;
            }
            if (minutes < 10) {
                minutes = "0" + minutes;
            }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }
            let time = +minutes + ':' + seconds;
            return time;
        }


        let count = '120'; // it's 00:01:02
        let counter = setInterval(timer, 1000);

        function timer() {
            if (count <= 0) {
                clearInterval(counter);
                $(".btn-dis").prop("disabled", true);
                $(".hide-timer").hide();
                $(".send-sms").fadeIn();
                return;
            }
            let temp = count.toString().toHHMMSS();
            count = (count - 1).toString();

            $('#timer').html(temp);
        }

        /* -------------- Ajax ---------------*/
        $(".send-sms").click(function(e) {
            let el = $(this);
            let requestid = $.ajax({
                url: "",
                type: "POST",
                data: {
                    send_sms: ""
                },
                dataType: "html"
            });
            requestid.done(function() {
                console.log("ok");
                $(".button-re").prop("disabled", false);
                $(".send-sms").hide();
                $(".hide-timer").fadeIn();
                let count = "120"; // it's 00:01:02
                let counter = setInterval(timer, 1000);

                function timer() {
                    if (parseInt(count) <= 0) {
                        clearInterval(counter);
                        $(".button-re").prop("disabled", true);
                        $(".hide-timer").hide();
                        $(".send-sms").fadeIn();
                        return;
                    }
                    let temp = count.toHHMMSS();
                    count = (parseInt(count) - 1).toString();
                    $("#timer").html(temp);
                }
            });
        });
    });
</script>
