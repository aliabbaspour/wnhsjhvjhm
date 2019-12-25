<!doctype html>
<html dir="rtl" lang="fa-IR">
<head>
    @include('includes.head')
</head>
<body>
<div id="wrapper">
    <div class="loader hide">
        <div class="loadfix">
            <img width="200" src="<?php //bloginfo('template_url') ?>/assets/images/loading.gif" />
        </div>
    </div>
    @yield('content-register')
</div>
<!-- JS Script -->
<script src="{{ asset('assets/javascript/jquery.js') }}"></script>
<script src="{{ asset('assets/javascript/persian-date.min.js') }}"></script>
<script src="{{ asset('assets/javascript/persian-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/javascript/address.js') }}"></script>
<script src="{{ asset('assets/javascript/wow.min.js') }}"></script>
<script src="{{ asset('assets/javascript/admin.js') }}"></script>
<script src="{{ asset('assets/javascript/script.js') }}"></script>
<script>
    jQuery(document).ready(function($) {
        $(function(){
            var current = location.pathname.slice(0, -1);;
            $('#cssmenu li a').each(function(){
                var $this = $(this);
                if($this.attr('href').indexOf(current) !== -1){
                    $this.addClass('bg-dasboard');
                    if($this.parents().hasClass('has-sub')){
                        $this.parents().eq(2).addClass('open');
                        $this.parents().eq(1).show();
                    }
                }
            })
        })
    });
</script>
</body>
</html>
