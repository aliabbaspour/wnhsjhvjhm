@extends('layouts.default-register')
@section('content-register')
<div id="section-step" class="container-fluide  min-100vh flex-center">
	<div class="container pad-20 pad-step pad-50-tmob">
		<div id="section-step-content" class="colm8 colm10-tab colm margin-auto pad-40 pad-20-tab pad-10-mob bg-white spacer-t40 spacer-b40">
			<div>
				@include('register.steps')


			</div>
			<div class="colm10 colm11-tab colm margin-auto pad-5-mob">
				<div class="pad-b20">
					<h2 class="font-s30 color6">خوش آمدید</h2>
					<p class="color-darkgray font-s14 align-justify pad-t15">لطفا برای آغاز ثبت نام، شماره تلفن همراه خود را وارد نمایید.
توجه فرمایید که کد احراز هویت برای شما ارسال می گردد، بنابراین از درستی شماره خود اطمینان حاصل فرمایید.</p>
				</div>
				<div class="spacer-t5">
					<form action="{{route('register_to_verify')}}" method="post" class="smart-validate" >
                        @csrf
						<div class="frm-row pad-5 colm colm9 margin-auto">
                            <label for="mobile" class="gui-label pad-5">تلفن همراه </label>
							<label class="relative">
								<span class="icon-gui flex-center"><i class="fa fa-phone vertical"></i></span>
								<input dir="ltr" type="tel" placeholder="091212345678" class="gui-input sans-digit englishnum number-input" data-msg-required="لطفا شماره همراه خود را وارد کنید" name="mobile" data-rule-customphone="true" id="mobile" value="" required>
							</label>
						</div>
						<div class="align-left spacer-t40">
			     			<button type="submit" class="btn-web colm" >مرحله بعد </button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
