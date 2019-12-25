<style>
    .box-message::after {
        content: "\2022";
        font-size: 47px;
        position: absolute;
        color: #EB4D4D;
        top: 10px;
        left: 80px;
    }
    .box-message1::before {
        content: "\2022";
        font-size: 47px;
        position: absolute;
        color: #EB4D4D;
        top: -14px;
        left: 36px;
    }
    .box-notify::before {
        content: "\2022";
        font-size: 47px;
        position: absolute;
        color: #EB4D4D;
        top: -14px;
        left: 36px;
    }
    .mob-notify::before {
        content: "\2022";
        font-size: 35px;
        position: absolute;
        color: #EB4D4D;
        top: -7px;
        right: -5px
    }
    .mob-message::before {
        content: "\2022";
        font-size: 35px;
        position: absolute;
        color: #EB4D4D;
        top: -7px;
        right: -5px
    }
    .support-overlay {
        display: flex;
        align-items: center;
        justify-content: center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 5;
        background-color: rgba(0, 0, 0, 0.77);
        opacity: 0;
        visibility: hidden;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), visibility 0.6s cubic-bezier(0.55, 0, 0.1, 1);
    }
    .support-overlay.actives {
        opacity: 1;
        visibility: visible;
    }
    .support {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        border-radius: 5px;
        right: 9%;
        visibility: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        backface-visibility: hidden;
        transform: scale(1.2);
        transition: all 0.6s cubic-bezier(0.55, 0, 0.1, 1);
    }
    .support .close-support {
        position: absolute;
        cursor: pointer;
        top: -2%;
        right: 0%;
        opacity: 0;
        backface-visibility: hidden;
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1), transform 0.6s cubic-bezier(0.55, 0, 0.1, 1), -webkit-transform 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition-delay: 0.3s;
    }
    .support .close-support svg {
        width: 1.75em;
        height: 1.75em;
    }
    .support .support-content {
        opacity: 0;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        transition: opacity 0.6s cubic-bezier(0.55, 0, 0.1, 1);
        transition-delay: 0.3s;
    }
    .support.actives {
        visibility: visible;
        opacity: 1;
        -webkit-transform: scale(1);
        transform: scale(1);
    }
    .support.actives .support-content {
        opacity: 1;
    }
    .support.actives .close-support {
        -webkit-transform: translateY(10px);
        transform: translateY(10px);
        opacity: 1;
    }
    .alert{
        position: relative;
        padding: .75rem 1.25rem;
        border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
        border-radius: .25rem;
    }
    .alert-danger {
        color: #721c24;
        background-color:  #f8d7da;
        border-color: #f5c6cb;
    }
</style>

<!-- Mobile -->
<div class="mobile hide bg-gray overflow hide-mob hide-decstop">
    <div class="relative pull-left pad-l10 hidden-md pad-t15">
        <a class="color-red pad-lheader" title="خروج" href="<?php //echo wp_logout_url(home_url('/login')) ?>">
            <i class="fa fa-door-open pad-l5 font-s18 pointer"></i>
        </a>
    </div>
    <div class="relative pull-left pad-l10 hidden-md pad-t15">
        <div class="pad-lheader">
            <a title="اعلان ها" href="https://app.100startups.ir/notification/" class="<?php //$mob_class_not; ?>">
                <i class="fa fa-bell color-menu font-s18 pointer"></i>
            </a>
        </div>
    </div>
    <div class="relative pull-left pad-l10 hidden-md pad-t15">
        <div class="pad-lheader">
            <a title="پیام ها" href="https://app.100startups.ir/box-message/" class="<?php //echo $mob_class_mess; ?>">
                <i class="fa fa-envelope color-menu font-s18 pointer"></i>
            </a>
        </div>
    </div>
    <div>
        <div class="header-right-mob pull-right relative">
            <i class="color-white fa fa-bars vertical"></i>
        </div>
        <div class="align-center pull-right pad-10 ">
            <h3 class="color-purple font-s16"><?php //bloginfo('name') ?></h3>
        </div>
        <div class="header-icon-mob pull-left align-center">
            <a class="color-darkgray" href="/register">
                <i class="icon-user-plus vertical vertical"></i>
            </a>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="mobile-menu-right">
        <div class="mobile-menu-logo align-center pad-t20 pad-b20">
            <a href="<?php //echo home_url() ?>">
                <img alt="logo" height="40" src="<?php //bloginfo('template_url') ?>/assets/images/avatar1.png" />
            </a>
            <h2 class="color-white font-s16 pad-t10"><?php //echo $first; ?></h2>
        </div>
        <div class="mobile-menu font-s13">
            <nav class="sidebar-wrapper">
                <div id="cssmenu" class="menu-drawer">
                    <ul class="font-s14">
                        <li class="pad-t10">
                            <a href="/dashboard">
                                <i class="fa fa-laptop  vertical font-s22 pad-l15"></i>
                                میزکار
                            </a>
                        </li>
                        <!---- Super Admin ------>
                        <?php /*
                        $allowedRoles = array('manager', 'administrator','managers');
                        if(array_intersect($allowedRoles,$user->roles) ){*/?>
                        <li class="pad-t10">
                            <a href="/list-startup">
                                <i class="fa fa-rocket vertical font-s22 pad-l15"></i>
                                استارت آپ ها
                            </a>
                        </li>
                        <?php // } ?>

                        <?php
                        /*
                        $allowed_roles_high = array('administrator','manager');
                        if(is_user_logged_in() && array_intersect($allowed_roles_high, $user->roles ) || in_array('operational', $roles) ){
                       */ ?>
                        <li class="has-sub pad-t10">
                            <a href="#" class="">
                                <i class="fa fa-users vertical font-s22 pad-l15"></i>
                                کاربران
                            </a>
                            <ul class="sub-menu">
                                <li class="pad-t10">
                                    <a href="/create-user" >
                                        <i class="fa fa-user-plus vertical font-s22 pad-l15"></i>
                                        اضافه کردن  کاربر
                                    </a>
                                </li>
                                <li class="pad-t10">
                                    <a href="/list-user" >
                                        <i class="fa fa-users vertical font-s22 pad-l15"></i>
                                        لیست کاربران
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub pad-t10">
                            <a class="" href="">
                                <i class="fa fa-columns vertical font-s22 pad-l15"></i>
                                دسته بندی ها
                            </a>
                            <ul class="sub-menu">
                                <li class="pad-t10">
                                    <a href="/create-cat">
                                        <i class="fa fa-folder-plus vertical font-s22 pad-l15"></i>
                                        ایجاد دسته بندی
                                    </a>
                                </li>
                                <li class="pad-t10">
                                    <a href="/list-cat">
                                        <i class="fa fa-map vertical font-s22 pad-l15"></i>
                                        لیست دسته بندی ها
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="pad-t10">
                            <a href="<?php // echo home_url('/user-activities') ?>" >
                                <i class="fa fa-calendar-week vertical font-s22 pad-l15"></i>
                                فعالیت های کاربران
                            </a>
                        </li>

                        <?php // }?>
                    <!---- Super Admin ------>
                        <?php
                        /*
                        $allowed_roles_high = array('financial','leader','coach','administrator');
                        if(is_user_logged_in() && (array_intersect($allowed_roles_high, $roles )) || array_intersect($allowed_roles_high,$user->roles) ){
                      */
                        ?>
                        <li class="pad-t10">
                            <a href="/manage-request">
                                <i class="fa fa-file-invoice-dollar vertical font-s22 pad-l15"></i>
                                مدیریت درخواست ها
                            </a>
                        </li>
                        <?php // }?>
                        <?php
                        /*
                        if(is_user_logged_in() ){
                        */
                        ?>
                        <li class="has-sub pad-t10">
                            <a href="" class="">
                                <i class="fa fa-clipboard-list vertical font-s22 pad-l15"></i>
                                لیست ها
                            </a>
                            <ul class="sub-menu">
                                <?php // $allowed_roles_high = array('administrator','manager'); ?>
                                <?php // if(array_intersect($allowed_roles_high,$roles) || array_intersect($allowed_roles_high,$user->roles)) {?>
                                <li class="pad-t10">
                                    <a href="/list-referee" class="">
                                        <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                        لیست داوران
                                    </a>
                                </li>
                                <?php // }?>
                                <li class="pad-t10">
                                    <a href="/list-coach" class="">
                                        <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                        لیست مربی ها
                                    </a>
                                </li>
                                <li class="pad-t10">
                                    <a href="/list-investor" class="">
                                        <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                        لیست سرمایه گذاران
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php //}?>

                        <?php
                        /*
                        $allowed_roles_high = array('administrator','subscriber');
                        if(is_user_logged_in() && (array_intersect($allowed_roles_high, $user->roles ))  ){
                        */
                        ?>
                        <li class="pad-t10">
                            <a href="/request-money" class="">
                                <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                درخواست اعتبار
                            </a>
                        </li>

                        <?php // } ?>

                        <li class="pad-t10">
                            <a href="/box-message" class="">
                                <i class="fa fa-envelope vertical font-s22 pad-l15"></i>
                                صندوق پیام
                            </a>
                        </li>
                        <li class="has-sub pad-t10">
                            <a href="" class="">
                                <i class="fa fa-address-card vertical font-s22 pad-l15"></i>
                                حساب کاربری
                            </a>
                            <ul class="sub-menu">
                                <li class="pad-t10">
                                    <a href="/profile" class="">
                                        <i class="fa fa-user-cog vertical font-s22 pad-l15"></i>
                                        تنظیمات
                                    </a>
                                </li>
                                <li class="pad-t10">
                                    <a href="/chenge-username" class="">
                                        <i class="fa fa-spell-check vertical font-s22 pad-l15"></i>
                                        تغییر نام کاربری
                                    </a>
                                </li>
                                <li class="pad-t10">
                                    <a href="/chenge-password" class="">
                                        <i class="fa fa-lock vertical font-s22 pad-l15"></i>
                                        تغییر کلمه عبور
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php // $allowed_roles_high = array('administrator','manager'); ?>
                        <?php // if(!array_intersect($allowed_roles_high,$user->roles)) {?>
                        <li class="pad-t10">
                            <a href="/user-activities/" >
                                <i class="fa fa-diagnoses vertical font-s22 pad-l15"></i>
                                فعالیت های من
                            </a>
                        </li>
                        <?php //} ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="mob-swipe-bg"></div>
    <div class="mobile-search hide">
        <form method="get" class="mobile-search-form" action="">
            <div class="mobile-site-search">
                <i class="icon-android-close search-close"></i>
                <div class="mobile-search-input-box">
                    <input class="mobile-search-input" name="s" type="search" placeholder="جستجو کنید ...">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container-fluide bg-gray overflow">
    <!------ sidebar -------->
    <div class="sidebar hidden-xs wow fadeInRight" data-wow-duration="1.5s">
        <div class="logo relative pad-15 align-center color-blue wow fadeInDown" data-wow-duration="2s">
            <img width="140" src="<?php //bloginfo('template_url') ?>/assets/images/logo-panel.svg" />
        </div>
        <nav class="sidebar-wrapper">
            <div id="cssmenu" class="menu-drawer">
                <ul class="font-s14">
                    <li class="pad-t10">
                        <a href="/dashboard">
                            <i class="fa fa-laptop  vertical font-s22 pad-l15"></i>
                            میزکار
                        </a>
                    </li>
                    <!---- Super Admin ------>

                    <?php
                    /*
                    $allowedRoles = array('manager', 'administrator','managers');
                    if(array_intersect($allowedRoles,$user->roles) ){*/?>
                    <li class="pad-t10">
                        <a href="/list-startup">
                            <i class="fa fa-rocket vertical font-s22 pad-l15"></i>
                            استارت آپ ها
                        </a>
                    </li>
                    <?php //} ?>

                    <?php
                    /*
                    $allowed_roles_high = array('administrator','manager');
                    if(is_user_logged_in() && array_intersect($allowed_roles_high, $user->roles ) || $user->ID==667 ){
                    */
                    ?>

                    <li class="has-sub pad-t10">
                        <a href="#" class="">
                            <i class="fa fa-users vertical font-s22 pad-l15"></i>
                            کاربران
                        </a>
                        <ul class="sub-menu">
                            <li class="pad-t10">
                                <a href="/create-user')" >
                                    <i class="fa fa-user-plus vertical font-s22 pad-l15"></i>
                                    اضافه کردن  کاربر
                                </a>
                            </li>
                            <li class="pad-t10">
                                <a href="/list-user" >
                                    <i class="fa fa-users vertical font-s22 pad-l15"></i>
                                    لیست کاربران
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub pad-t10">
                        <a class="" href="">
                            <i class="fa fa-columns vertical font-s22 pad-l15"></i>
                            دسته بندی ها
                        </a>
                        <ul class="sub-menu">
                            <li class="pad-t10">
                                <a href="/create-cat">
                                    <i class="fa fa-folder-plus vertical font-s22 pad-l15"></i>
                                    ایجاد دسته بندی
                                </a>
                            </li>
                            <li class="pad-t10">
                                <a href="/list-cat">
                                    <i class="fa fa-map vertical font-s22 pad-l15"></i>
                                    لیست دسته بندی ها
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="pad-t10">
                        <a href="/user-activities" >
                            <i class="fa fa-calendar-week vertical font-s22 pad-l15"></i>
                            فعالیت های کاربران
                        </a>
                    </li>
                    <?php //}?>
                <!---- Super Admin ------>
                    <?php
                    /*
                    $allowed_roles_high = array('financial','leader','coach','administrator');
                    if(is_user_logged_in() && (array_intersect($allowed_roles_high, $roles )) || array_intersect($allowed_roles_high,$user->roles) ){
                   */
                    ?>
                    <li class="pad-t10">
                        <a href="/manage-request">
                            <i class="fa fa-file-invoice-dollar vertical font-s22 pad-l15"></i>
                            مدیریت درخواست ها
                        </a>
                    </li>
                    <?php // }?>
                    <?php
                    // if(is_user_logged_in() ){
                    ?>
                    <li class="has-sub pad-t10">
                        <a href="" class="">
                            <i class="fa fa-clipboard-list vertical font-s22 pad-l15"></i>
                            لیست ها
                        </a>
                        <ul class="sub-menu">
                            <?php //$allowed_roles_high = array('administrator','manager'); ?>
                            <?php //if(array_intersect($allowed_roles_high,$roles) || array_intersect($allowed_roles_high,$user->roles)) {?>
                            <li class="pad-t10">
                                <a href="/list-referee" class="">
                                    <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                    لیست داوران
                                </a>
                            </li>
                            <?php // }?>
                            <li class="pad-t10">
                                <a href="/list-coach" class="">
                                    <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                    لیست مربی ها
                                </a>
                            </li>
                            <li class="pad-t10">
                                <a href="/list-investor" class="">
                                    <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                                    لیست سرمایه گذاران
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php // }?>

                    <?php
                    /*
                    $allowed_roles_high = array('administrator','subscriber');
                    if(is_user_logged_in() && (array_intersect($allowed_roles_high, $user->roles ))  ){
                    */
                    ?>
                    <li class="pad-t10">
                        <a href="/request-money" class="">
                            <i class="fa fa-file-alt vertical font-s22 pad-l15"></i>
                            درخواست اعتبار
                        </a>
                    </li>

                    <?php //} ?>
                    <?php


                    ?>
                    <li class="pad-t10">
                        <a href="/box-message" class="relative <?php //echo $class; ?>">
                            <i class="fa fa-envelope vertical font-s22 pad-l15"></i>
                            صندوق پیام
                        </a>
                    </li>
                    <li class="has-sub pad-t10">
                        <a href="" class="">
                            <i class="fa fa-address-card vertical font-s22 pad-l15"></i>
                            حساب کاربری
                        </a>
                        <ul class="sub-menu">
                            <li class="pad-t10">
                                <a href="/profile" class="">
                                    <i class="fa fa-user-cog vertical font-s22 pad-l15"></i>
                                    تنظیمات
                                </a>
                            </li>
                            <li class="pad-t10">
                                <a href="/chenge-username" class="">
                                    <i class="fa fa-spell-check vertical font-s22 pad-l15"></i>
                                    تغییر نام کاربری
                                </a>
                            </li>
                            <li class="pad-t10">
                                <a href="/chenge-password" class="">
                                    <i class="fa fa-lock vertical font-s22 pad-l15"></i>
                                    تغییر کلمه عبور
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php //$allowed_roles_high = array('administrator','manager'); ?>
                    <?php //if(!array_intersect($allowed_roles_high,$user->roles)) {?>
                    <li class="pad-t10">
                        <a href="/user-activities/" >
                            <i class="fa fa-diagnoses vertical font-s22 pad-l15"></i>
                            فعالیت های من
                        </a>
                    </li>
                    <?php //} ?>
                </ul>
            </div>
        </nav>
        <div class="clearfix"></div>
    </div>
    <!---- end sidebar ----->

    <div class="colm12 colm content">
        <div class="colm12 colm  pad-10 bg-gray color-menu min-h100">
            <div class="">

                <div class="pad-lheader pull-left pad-t10 pad-l25-mob avatar-mob hide-mob">
                    <div class="pull-right pad-t10 pad-l15">
                        <h3 class=""><?php //echo $first; ?></h3>
                    </div>
                    <div class="relative pull-right pad-l20 pad-t15">
                        <div class="pad-lheader">
                            <a title="گزارش خطا"><i class="fa fa-headset color-menu font-s25 pointer btn-support"></i></a>
                        </div>
                    </div>
                    <div class="support-overlay ">
                        <div class="support bg-white colm4 colm ">

                            <a class="close-support">
                                <svg viewBox="0 0 20 20">
                                    <path fill="#000000" d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
                                </svg>
                            </a><!-- close modal -->
                            <div class="support-content colm12">
                                <form method="post" action="" class="pad-20">
                                    <h2 class="align-center pad-t15">مسائل مربوط به سامانه یا ایده های خود را به تیم فنی ارسال کنید.</h2>
                                    <div class="colm6 colm pull-right pad-10 pad-t20">
                                        <label for="r_title" class="gui-label">عنوان پیام :</label>
                                        <label class="relative">
                                            <input class="input-send gui-input" type="text" name="message_title" id="r_title" required>
                                        </label>
                                    </div>
                                    <div class="colm12 colm pull-right pad-10 pad-t20 pad-b20 ">
                                        <label for="r_content" class="gui-label">متن پیام :</label>
                                        <label class="relative">
                                            <textarea class="input-send gui-textarea" cols="25" rows="5" type="text" name="message_content" id="r_content" required></textarea>
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="margin-auto align-center">
                                        <button onclick="sendMessage('r_title','r_content')" class="button-send btn-panel pad-10 color-white iransans">ارسال<span class="loader-request"></span></button>
                                    </div>
                                </form>
                            </div><!-- content -->
                        </div><!-- modal -->
                    </div><!-- overlay -->
                    <div class="relative pull-right pad-l20 pad-t15">
                        <div class="pad-lheader">
                            <a title="اعلان ها" href="https://app.100startups.ir/notification/" class="<?php // $class_not; ?>">
                                <i class="fa fa-bell color-menu font-s25 pointer"></i>
                            </a>
                        </div>
                    </div>
                    <div class="relative pull-right pad-l20 pad-t15">
                        <div class="pad-lheader">
                            <a title="پیام ها" href="https://app.100startups.ir/box-message/" class="<?php// echo $class1; ?>">
                                <i class="fa fa-envelope color-menu font-s25 pointer"></i>
                            </a>
                        </div>
                    </div>
                    <div class=" relative pull-right">
                        <div class="pad-lheader color-menu font-s15">
                            <img class="fa fa-user ver vertical avatar-user pointer" width="50" src="<?php// bloginfo('template_url') ?>/assets/images/avatar1.png" />
                            <!-------dopdown avatar-------->
                            <div class="absolute dropd hide abso-avatar-main">
                                <div class="absolute divdrop"></div>
                                <ul>
                                    <li><a href="/dashboard/">میز کار</a></li>
                                    <li><a href="/profile/">حساب کاربری</a></li>
                                    <li><a href="/chenge-password">تغییر رمز عبور</a></li>
                                    <li><a href="<?php  // wp_logout_url(home_url('/login')) ?>">خروج از حساب</a></li>
                                </ul>
                            </div>
                            <!-------dopdown avatar-------->
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="colm12 colm pad-15 pad-0 dashboard-content">
                <?php //if(!$compleat_data=='ok'){?>
                <div class="alert alert-danger spacer-t20 spacer-b30 wow fadeInDown" data-wow-duration="2s">
                    لطفا اطلاعات پروفایل خود را تکمیل نمایید.
                    <div class="pull-left">
                        <a  href="<?php // home_url('profile'); ?>">تکمیل پروفایل</a>
                    </div>
                </div>
                <?php //} ?>
            </div>
        </div>
    </div>
</div>
