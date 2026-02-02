<?php
    // echo '<pre>'; print_r($page->toArray()); echo'</pre>'; die();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .main_logo_two_pie h2 {
            color: red;
            font-weight: 700;
            padding-left: 6px;
        }

        .play_pause_btn_bottom_sticky img {
            position: absolute;
            bottom: 30px;
        }

        .navbar_div_main {
            width: 100%;
        }

        .book_slot_btn a:focus,
        .book_slot_btn a:hover {
            color: red;
        }

        .modal-title {
            text-align: center;
            margin: 0 auto !important;
            font-size: 20px;
            color: red;
            font-weight: 600;
        }

        .btn-primary {
            background-color: red !important;
            color: #fff !important;
            border: unset !important;
        }

        .modal-header .close {
            font-size: 30px;
        }

        .modal-header:after,
        .modal-header:before {
            content: unset !important;
        }

        .book_slot_btn a {
            color: red;
            font-size: 16px;
            font-weight: 500;
            border: 2px solid red;
            padding: 8px 24px;
            border-radius: 25px;
            padding-left: 24px !important;
            padding-right: 24px !important;
        }

        .nopadding {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        .navbar_div_main a {
            margin-right: 32px;
            color: #333;
            font-size: 16px;
        }

        .navbar_div_main span {
            background-image: url('{{asset("images/store_images/headphone_nav.png")}}');
            width: 15px;
            height: 15px;
            display: block;
            background-size: cover;
            margin-right: 6px;
        }

        .margin_unset_last {
            margin: 0 !important;
        }

        .navbar_div_outer {
            margin-top: 10px;
        }

        .main_carousel_outer:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 0, 0, 0.4);
        }

        .main_carousel_outer {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .play_pause_main {
            position: absolute;
            width: 220px;
            height: 220px;
            top: 50px;
            right: 0;
            left: 0;
            margin: 0 auto;
            z-index: 1;
        }

        .play_pause_main_inner_img {
            max-width: 100%;
            max-height: 100%;
            width: 100%;
            height: 100%;
            border-radius: 150px;
        }

        .play_pause_main_inner {
            border-radius: 150px;
            width: 100%;
            height: 100%;
            border: 12px solid white;
            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
            cursor: pointer;
        }

        .play_pause_main_inner:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 0, 0, 0.5);
            border-radius: 100px;
        }

        .play_pause_main_inner i {
            position: absolute;
            color: #fff;
            left: 0;
            right: 0;
            margin: 0 auto;
            top: 74px;
            width: max-content;
        }

        .play_pause_main_inner {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .play_pause_icon {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
        }

        .carousel-caption button {
            color: #fff;
            background-color: red;
            border: 0;
            padding: 16px 46px;
            border-radius: 25px;
            margin-top: 30px;
        }

        .carousel-caption h3 {
            font-size: 44px;
            font-weight: 700;
        }

        .carousel-caption {
            top: 150px !important;
        }

        .Description_image1 {
            border-radius: 213px;
            width: 350px;
            height: 350px;
            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
        }

        .Description_image2 {
            border: 10px solid #fff;
            border-radius: 120px;
            width: 230px;
            height: 230px;
            position: absolute;
            left: 220px;
            top: 120px;
            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
        }

        .desc_content_heading {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .desc_content_heading span {
            color: red;
            font-size: 40px;
            font-weight: 700;
        }

        .second_section_desc p {
            line-height: 1.7;
            color: #9d9090;
            margin-bottom: 16px;
        }

        .template_main_heading {
            color: red;
            font-size: 34px;
            font-weight: 600;
            text-align: center;
            margin-bottom: 8px !important;
            margin-top: 70px !important;
        }

        .main_card_img_outer img {
            height: auto;
            width: 100%;
            display: block;
            max-height: 100%;
            max-width: 100%;
            border-radius: 8px;
        }

        .main_card_img_outer {
            width: 260px;
            height: 220px;
            display: flex;
        }

        .main_card_img_main {
            border: unset !important;
        }

        .main_card_img_main h3 {
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            margin-top: 8px;
            margin-bottom: 6px;
        }

        .main_card_img_main p {
            text-align: center;
        }

        .our_gallery_radio img {
            border-radius: 8px !important;
            background: linear-gradient(#c5292996, #c5292996);
        }

        .footer_new .bg-custom {
            background-image: linear-gradient(#c52929, #250d0d);
            border-top-left-radius: 50% 20%;
            border-top-right-radius: 50% 20%;
        }

        .footer_new .bg-bottom {
            background-color: #250d0d;
            margin: 0;
        }

        .footer_new .pt-30 {
            padding-top: 30px;
        }

        .footer_new ul {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .footer_new h3,
        .footer_new p,
        .footer_new a {
            color: #fff;
        }

        .footer_new h2 {
            font-weight: 700;
            font-size: 30px;
            letter-spacing: 2px;
        }

        .footer_new h3 {
            font-weight: 700;
            font-size: 26px;
            letter-spacing: 2px;
        }

        .footer_new li {
            padding-top: 10px;
        }

        .footer_new a {
            text-decoration: none;
        }

        .footer_new a:hover {
            text-decoration: none;
            color: #ddd;
        }

        .footer_new .fa {
            font-size: 40px;
            padding-right: 15px;
        }

        .footer_new .download {
            text-align: center;
            padding-top: 20px;
        }

        .footer_new .download .fa {
            padding-right: 25px;
            font-size: 50px;
        }

        .show_schedule_main h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            margin-top: 0;
        }

        .show_schedule_main .padded {
            padding: 100px 0;
        }

        .show_schedule_main .wrapper-grey {
            background: #F4F4F4;
        }

        .show_schedule_main .avatar {
            width: 30px;
            border-radius: 50%;
        }

        .show_schedule_main .avatar-bordered {
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
            border: white 1px solid;
        }

        .show_schedule_main .avatar-large {
            width: 60px;
            height: 60px;
            border: 4px solid #fff;
        }

        .show_schedule_main .card {
            height: 160px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
            background-size: cover !important;
            color: white;
            position: relative;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 25px;
        }

        .show_schedule_main .card-user {
            position: absolute;
            right: 0;
            bottom: -23px;
            left: 0;
            margin: 0 auto;
        }

        .show_schedule_main .card-category {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 20px;
        }

        .show_schedule_main .card-description {}

        .show_schedule_main .card-description h2 {
            font-size: 22px;
        }

        .show_schedule_main .card-description p {
            font-size: 18px;
        }

        .show_schedule_main .card-link {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 100%;
            z-index: 2;
            background: black;
            opacity: 0;
        }

        .show_schedule_main .card-link:hover {
            opacity: 0.1;
        }

        .show_schedule_main .features img {
            width: 100px;
        }

        .show_schedule_main .features h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .show_schedule_main .features p {
            font-size: 15px;
            font-weight: lighter;
        }

        /* Component Needs */

        .pc-tab>input,
        .pc-tab section>div {
            display: none;
        }

        #tab1:checked~section .tab1,
        #tab2:checked~section .tab2,
        #tab3:checked~section .tab3,
        #tab4:checked~section .tab4,
        #tab5:checked~section .tab5,
        #tab6:checked~section .tab6,
        #tab7:checked~section .tab7 {
            display: block;
        }

        #tab1:checked~nav .tab1,
        #tab2:checked~nav .tab2,
        #tab3:checked~nav .tab3,
        #tab4:checked~nav .tab4,
        #tab5:checked~nav .tab5,
        #tab6:checked~nav .tab6,
        #tab7:checked~nav .tab7 {
            color: red;
        }

        /* Visual Styles */

        $activeColor: #ffffff;
        $unactiveColor: #eeeeee;
        $unactiveHoverColor: #dddddd;
        .pc-tab {
            width: 100%;
            max-width: 700px;
            margin: 0 auto;
        }

        .pc-tab ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .pc-tab ul li label {
            font-family: "Raleway";
            float: left;
            padding: 15px 25px;
            border-bottom: 1px solid #e5dddd;
            background: $unactiveColor;
            color: #444;
            width: 14%;
            text-align: center;
        }

        .pc-tab ul li label &:hover {
            background: $unactiveHoverColor;
        }

        .pc-tab ul li label &:active {
            background: #333;
        }

        .pc-tab &:not(:last-child) label {
            border-right-width: 0;
        }

        section {
            padding-top: 30px;
        }

        section div h2 {
            margin: 0;
            font-family: "Raleway";
            letter-spacing: 1px;
            color: #34495e;
        }

        .pc-tab section>div {
            margin-top: 50px;
        }

        #tab1:checked~nav .tab1 label,
        #tab2:checked~nav .tab2 label,
        #tab3:checked~nav .tab3 label,
        #tab4:checked~nav .tab4 label,
        #tab5:checked~nav .tab5 label,
        #tab6:checked~nav .tab6 label,
        #tab7:checked~nav .tab7 label {
            background: linear-gradient(#c52929, #250d0d);
            color: #fff;
            position: relative;
        }

        #tab1:checked~nav .tab1 label &:after,
        #tab2:checked~nav .tab2 label &:after,
        #tab3:checked~nav .tab3 label &:after,
        #tab4:checked~nav .tab4 label &:after,
        #tab5:checked~nav .tab5 label &:after,
        #tab6:checked~nav .tab6 label &:after,
        #tab7:checked~nav .tab7 label &:after {
            content: '';
            display: block;
            position: absolute;
            height: 2px;
            width: 100%;
            background: $activeColor;
            left: 0;
            bottom: -1px;
        }

        .gallery_img_outer_div {
            border-radius: 8px;
            background: linear-gradient(#c5292963, #c5292963);
        }

        .gallery_img_outer_div img {
            position: relative;
            z-index: -1;
            display: block;
            height: 200px;
            width: auto;
        }

        .video_palylist_main h3 {
            font-size: 18px;
            margin-top: 16px;
            margin-bottom: 6px;
        }

        .video_palylist_main iframe {
            width: 100%;
            border-radius: 10px;
            height: 100%;
            position: relative;
            z-index: -1;
            display: block;
        }

        .video_iframe_outer {
            height: 180px;
            border-radius: 10px;
            background: linear-gradient(#c5292963, #c5292963);
        }

        .big_border_headline {
            border-bottom: 2px solid red;
            width: 8%;
            margin: 0 auto;
            margin-bottom: 8px;
        }

        .small_border_headline {
            border-bottom: 2px solid red;
            width: 4%;
            margin: 0 auto;
            margin-bottom: 40px;
        }

        .play_pause_btn_bottom_sticky {
            cursor: pointer;
            position: fixed;
            right: 30px;
            bottom: 30px;
            background: #fff;
            box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 100%;
            width: 80px;
            height: 80px;
        }

        @media(max-width: 992px) {
            .footer_new h3 {
                font-size: 18px;
            }
            .footer_new .p-5 {
                padding: 2rem !important;
            }
        }

        @media(max-width: 830px) {
            .footer_new .pt-60 {
                padding-top: 60px;
            }
            .footer_new .col-md-3 {
                padding-right: 8px;
                padding-left: 8px;
            }
            .footer_new h3 {
                font-size: 16px;
            }
        }

        @media(max-width: 768px) {
            .footer_new .col-md-3 {
                text-align: center;
            }
            .footer_new h3 {
                font-size: 40px;
            }
            .footer_new .input-group {
                margin-top: 1rem !important;
            }
            .footer_new .pt-60 {
                padding-top: 30px;
            }
            .Description_image1 {
                width: 250px;
                height: 250px;
            }
            .Description_image2 {
                width: 160px;
                height: 160px;
                left: 184px;
                top: 90px;
            }
            .play_pause_main {
                top: 105px;
            }
            .book_slot_btn a {
                font-size: 14px;
                padding: 4px 10px;
            }
            .main_logo_two_pie {
                height: 50px;
            }
            .main_card_img_main {
                align-items: center;
            }
            .video_palylist_main h3,
            .video_palylist_main p {
                text-align: center;
            }
            .video_palylist_main p {
                margin-bottom: 15px !important;
            }
            .play_pause_btn_bottom_sticky {
                right: 10px;
                bottom: 104px;
            }
        }

        @media(max-width: 475px) {
            .footer_new h3 {
                font-size: 30px;
                padding-top: 30px;
            }
            .footer_new .mobile-none {
                display: none;
            }
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$page->store_name?$page->store_name." | ":""}}Radio 2 PI R</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    <link rel="icon" type="image/x-icon" href="{{$page->store_logo?asset('storage/logo/'.$page->store_logo):asset('images/2pir_logo.png')}}">

</head>

<body>
    <!-- header start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book your slot now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Phone:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Date:</label>
                            <input type="datetime-local" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary bookslot_btn">Book Slot</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-fluid">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="d-flex align-items-center main_logo_two_pie">
                    <img src="{{$page->store_logo?asset('storage/logo/'.$page->store_logo):asset('images/2pir_logo.png')}}" height="100" alt="CoolBrand">
                    <!--<h2>Indore</h2> -->
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="navbar-nav ms-auto book_slot_btn">
                    <a style="display: none;" href="#" class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal">Advertise with us</a>
                </div>
            </div>
        </div>
        <audio id="myAudio"></audio>
        <div class="play_pause_main">
            <div class="play_pause_main_inner" id="btn_play_pause">
                <img src="{{asset('images/store_images/radio_image2.webp')}}" class="play_pause_main_inner_img" height="60px">
                <i class="fa fa-play" id="ic_btn_play_pause" style="font-size:44px;"></i>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light header_background navbar_div_outer">
            <div class="container-fluid container nopadding">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nopadding" id="navbarCollapse">
                    <div class="navbar-nav navbar_div_main row nopadding">
                        <div class="col-md-6 d-flex nopadding">
                            <a href="#" class="nav-item nav-link d-flex align-items-center active"><span></span>Home</a>
                            <a href="#images" class="nav-item nav-link d-flex align-items-center"><span></span>Images</a>
                            <a href="#Description" class="nav-item nav-link d-flex align-items-center margin_unset_last"><span></span>Description</a>
                        </div>
                        <!--
                        <div class="col-md-6 d-flex nopadding align-items-center justify-content-end">
                            <a href="#" class="nav-item nav-link d-flex align-items-center active"><span></span>Home</a>
                            <a href="#images" class="nav-item nav-link d-flex align-items-center"><span></span>Images</a>
                            <a href="#Description" class="nav-item nav-link d-flex align-items-center margin_unset_last"><span></span>Description</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header end -->
    <!-- myCarousel start -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item main_carousel_outer active">
                <img src="{{asset('images/store_images/Krunal_Vaghela_banner.webp')}}" alt="Los Angeles" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h3>Radio 2 PIR</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button>Live On Youtube</button>
                </div>
            </div>
            <div class="item main_carousel_outer">
                <img src="{{asset('images/store_images/radio_image7.webp')}}" alt="Chicago" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button>Live On Youtube</button>
                </div>
            </div>
            <div class="item main_carousel_outer">
                <img src="{{asset('images/store_images/radio_image7.webp')}}" alt="Chicago" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button>Live On Youtube</button>
                </div>
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- myCarousel end -->
    <div class="container container-fluid" id="Description">
        <!-- description start -->
        <div class="row my-5">
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{asset('images/store_images/radio_image2.webp')}}" class="Description_image1" height="300" alt="CoolBrand">
                <img src="{{asset('images/store_images/radio_image7.webp')}}" height="150" class="Description_image2" alt="CoolBrand">
            </div>
            <div class="col-md-6">
                <div class="second_section_desc">
                    <h2 class="desc_content_heading"><span>Radio 2 PI R</span> Some about</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus euismod nec arcu non sollicitudin. Vivamus congue, risus ut interdum ultrices, mauris nunc accumsan risus, id volutpat nulla mi pellentesque sapien. Aliquam erat volutpat.
                        Nullam ac orci convallis, convallis metus quis, venenatis leo. Etiam nec commodo justo. Proin diam nibh, bibendum a congue eget, imperdiet eget odio.</p>
                    <p>Duis volutpat elit eget pharetra interdum. Nullam consectetur efficitur ultrices. Morbi euismod tellus eget tincidunt pharetra. Curabitur scelerisque fringilla nunc ut fringilla. Aenean ipsum elit, vulputate eu tellus id, interdum
                        accumsan mi. Nullam ac urna justo. Nulla lobortis feugiat molestie.</p>
                    <p></p>
                    <div><span></span></div>
                    <div>
                        <span></span>Since 1995
                    </div>
                </div>
            </div>
        </div>
        <!-- description end -->
        <!-- Show schedule start -->
        <div class="wrapper-grey padded show_schedule_main">
            <div class="container">
                <h2 class="template_main_heading">Show Schedule</h2>
                <div class="big_border_headline "></div>
                <div class="small_border_headline"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: linear-gradient(#c5292996, #c5292996), url('{{asset('images/store_images/RJ Krunal.jpg')}}');">
                            <div class="card-description">
                                <p>08:00 - 09:00 AM</p>
                                <p>Bhaktiras</p>
                            </div>
                            <img class="card-user avatar avatar-large" src="{{asset('images/store_images/Krunal_Vaghela.jpg')}}">
                            <a class="card-link" href="#"></a>
                        </div>
                        <h5 class="text-center mt-5">Rj Krunal</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: linear-gradient(#c5292996, #c5292996), url('{{asset('images/store_images/RJ Rajeev.jpg')}}');">
                            <div class="card-description">
                                <p>01:00 - 06:00 PM</p>
                                <p>Rang De Indori</p>
                            </div>
                            <img class="card-user avatar avatar-large" src="{{asset('images/store_images/Rajiv_Arya.jpeg')}}">
                            <a class="card-link" href="#"></a>
                        </div>
                        <h5 class="text-center mt-5">Rj Rajeev</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: linear-gradient(#c5292996, #c5292996), url('{{asset('images/store_images/RJ Jayraaj.jpg')}}');">
                            <div class="card-description">
                                <p>06:00 - 09:00 PM</p>
                                <p>Chappan Ka Charger</p>
                            </div>
                            <img class="card-user avatar avatar-large" src="{{asset('images/store_images/Jay_Singh_Parmar.jpg')}}">
                            <a class="card-link" href="#"></a>
                        </div>
                        <h5 class="text-center mt-5">Rj Jayraaj</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: linear-gradient(#c5292996, #c5292996), url('{{asset('images/store_images/RJ Janvi.jpg')}}');">
                            <div class="card-description">
                                <p>09:00 - 10:00 PM</p>
                                <p>Nagme-e-khas</p>
                            </div>
                            <img class="card-user avatar avatar-large" src="{{asset('images/store_images/Janvi_Barot.JPG')}}">
                            <a class="card-link" href="#"></a>
                        </div>
                        <h5 class="text-center mt-5">Rj Janvi</h5>
                    </div>

                </div>
            </div>
        </div>
        <!-- Show schedule end -->
        <!-- Introduce our team start -->
        <div>
            <h2 class="template_main_heading">Introduce our team</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card main_card_img_main">
                        <div class="main_card_img_outer"><img src="{{asset('images/store_images/Janvi_Barot.JPG')}}" class="card-img-top" alt="..."></div>
                        <div class="card-body">
                            <h3>Janvi Barot</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card main_card_img_main">
                        <div class="main_card_img_outer"><img src="{{asset('images/store_images/Jay_Singh_Parmar.jpg')}}" class="card-img-top" alt="..."></div>
                        <div class="card-body">
                            <h3>Jay Singh Parmar</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card main_card_img_main">
                        <div class="main_card_img_outer"><img src="{{asset('images/store_images/Rajiv_Arya.jpeg')}}" class="card-img-top" alt="..."></div>
                        <div class="card-body">
                            <h3>Rajiv Arya</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card main_card_img_main">
                        <div class="main_card_img_outer"><img src="{{asset('images/store_images/Krunal_Vaghela.jpg')}}" class="card-img-top" alt="..."></div>
                        <div class="card-body">
                            <h3>Krunal Vaghela</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduce our team end -->
        <!-- Video Playlist start -->
        <div class="video_palylist_main" style="display: none;">
            <h2 class="template_main_heading">Video Playlist</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="video_iframe_outer">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                    <h3>Miron Mahmud</h3>
                    <p class="card-text">Radio Jockey</p>
                </div>
                <div class="col-md-4">
                    <div class="video_iframe_outer">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                    <h3>Miron Mahmud</h3>
                    <p class="card-text">Radio Jockey</p>
                </div>
                <div class="col-md-4">
                    <div class="video_iframe_outer">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                    <h3>Miron Mahmud</h3>
                    <p class="card-text">Radio Jockey</p>
                </div>
            </div>
        </div>
        <!-- Video Playlist end -->
        <!-- Radio 2 PI R galleries start -->
        <div class="our_gallery_radio" style="display:none;">
            <h2 class="template_main_heading">Introduce our Galleries</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <!-- Gallery -->
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="gallery_img_outer_div">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(13).webp" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" /></div>
                    <div class="gallery_img_outer_div">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain1.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Wintry Mountain Landscape" /></div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="gallery_img_outer_div">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain2.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Mountains in the Clouds" /></div>
                    <div class="gallery_img_outer_div">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(73).webp" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" /></div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="gallery_img_outer_div">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/Nature/4-col/img%20(18).webp" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" /></div>
                    <div class="gallery_img_outer_div">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Vertical/mountain3.webp" class="w-100 shadow-1-strong rounded mb-4" alt="Yosemite National Park" /></div>
                </div>
            </div>
            <!-- Gallery -->
        </div>
        <!-- Radio 2 PI R galleries end -->
    </div>
    <div class="play_pause_btn_bottom_sticky">

        <i class="fa fa-play" style="font-size:44px; color: red;"></i>
    </div>
    <!-- footer start -->
    <div class="footer_new">
        <div class="bg-custom mt-5 pt-30 pt-60">
            <h2 class="text-center text-white">Footer</h2>
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12 p-5">
                        <div class="row">
                            <div class="col-md-3">
                                <h3>About Us</h3>
                                <p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div class="col-md-3">
                                <h3>Service</h3>
                                <ul>
                                    <li><a href="#">First item</a></a>
                                    </li>
                                    <li><a href="#">Second item</a></li>
                                    <li><a href="#">Third item</a></li>
                                    <li><a href="#">Fourth item</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>Important</h3>
                                <ul>
                                    <li><a href="#">First item</a></a>
                                    </li>
                                    <li><a href="#">Second item</a></li>
                                    <li><a href="#">Third item</a></li>
                                    <li><a href="#">Fourth item</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mobile-none">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Subscribe</button>
                                    </div>
                                </div>
                                <h3>DownloadOur App</h3>
                                <div class="download">
                                    <a href="#"> <i class="fa fa-apple"></i></a>
                                    <a href="#"> <i class="fa fa-android"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="row bg-bottom">
                <div class="container container-fluid">
                    <div class="col-md-12">
                        <p class="text-center pt-2 mb-2">2023. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
</body>
<script type="text/javascript">
    $(document).scroll(function() {
        var y = $(this).scrollTop();
        if (y > 300) {
            $('.play_pause_btn_bottom_sticky').fadeIn();
        } else {
            $('.play_pause_btn_bottom_sticky').fadeOut();
        }
    });

    var playState = false;
    
    var audioPlayer;

    $(document).ready(function() {
        audioPlayer = document.getElementById("myAudio");

        $("#btn_play_pause").click(function() {
            console.log("clicked");
            handleBtnClick();

        });
    });



    function handleBtnClick() {
        if (playState === true) {
            audioPlayer.pause();
            audioPlayer.src = "";
            playState = false;

            $("#ic_btn_play_pause").attr('class', 'fa fa-play');

        } else {
            audioPlayer.src = "{{$page->music_url}}";
            audioPlayer.play();
            playState = true;

            $("#ic_btn_play_pause").attr('class', 'fa fa-pause');
        }
    }

</script>

</html>