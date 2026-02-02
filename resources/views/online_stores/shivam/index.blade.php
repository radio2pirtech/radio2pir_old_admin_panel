<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$page->store_name?$page->store_name." | ":""}}Radio 2 PI R</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
    
    <link rel="icon" type="image/x-icon" href="{{asset('images/store_images/stores/chappan_logo.png')}}">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

* {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  text-transform: capitalize;
}

.navbar-light .navbar-toggler {
  color: white;
  border-color: white;
}

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
  text-decoration: none;
}

.nopadding {
  padding-left: 0 !important;
  padding-right: 0 !important;
}

.navbar_div_main a {
  margin-top: 32px;
  margin-right: 32px;
  color: #333;
  font-size: 16px;
  text-decoration: none;
}

.navbar_div_main span {
  background-image: url(public/images/store_images/stores/headphone_nav.png);
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

  padding-bottom: 20px;
}

.main_carousel_outer:before {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
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
  object-fit: contain;
  background-color: goldenrod;
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
  border-radius: 100px;
}

.play_pause_main_inner i {
  position: absolute;
  color: #c32c71;
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

.carousel-caption a {
  color: #fff;
  background-color: red;
  font-size: 16px;
  font-weight: 500;
  padding: 8px 24px;
  border: 2px solid red;
  border-radius: 25px;
  padding-left: 24px !important;
  padding-right: 24px !important;
  text-decoration: none;
}
.carousel-caption a:focus,
.carousel-caption a:hover {
  color: red;
  background-color: #fff;
  cursor: pointer;
}

.carousel-caption .wrapper{
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  width: fit-content;
  height:auto;
}
.carousel-caption button{
  width:200px;
  height:50px;
  background: linear-gradient(to left top,  #c32c71 50%, #b33771 50%);
  border-style: none;
  color:#fff;
  font-size: 16px;
  font-weight: 500;
  padding: 8px 24px;
  outline: none;
  cursor: pointer;
  position: relative;
  padding: 0px;
  overflow: hidden;
  transition: all .5s;
  box-shadow: 0px 1px 2px rgba(0,0,0,.2);
  text-decoration: none;
}
.carousel-caption button span{
  position: absolute;
  display: block;
}
.carousel-caption button span:nth-child(1){
  height: 3px;
  width:200px;
  top:0px;
  left:-200px;
  background: linear-gradient(to right, rgba(0,0,0,0), #8deff6);
  border-top-right-radius: 1px;
  border-bottom-right-radius: 1px;
  animation: span1 2s linear infinite;
  animation-delay: 1s;
}

@keyframes span1{
  0%{
      left:-200px
  }
  100%{
      left:200px;
  }
}
.carousel-caption button span:nth-child(2){
  height: 70px;
  width: 3px;
  top:-70px;
  right:0px;
  background: linear-gradient(to bottom, rgba(0,0,0,0), #8deff6);
  border-bottom-left-radius: 1px;
  border-bottom-right-radius: 1px;
  animation: span2 2s linear infinite;
  animation-delay: 2s;
}
@keyframes span2{
  0%{
      top:-70px;
  }
  100%{
      top:70px;
  }
}
.carousel-caption button span:nth-child(3){
  height:3px;
  width:200px;
  right:-200px;
  bottom: 0px;
  background: linear-gradient(to left, rgba(0,0,0,0), #8deff6);
  border-top-left-radius: 1px;
  border-bottom-left-radius: 1px;
  animation: span3 2s linear infinite;
  animation-delay: 3s;
}
@keyframes span3{
  0%{
      right:-200px;
  }
  100%{
      right: 200px;
  }
}

.carousel-caption button span:nth-child(4){
  height:70px;
  width:3px;
  bottom:-70px;
  left:0px;
  background: linear-gradient(to top, rgba(0,0,0,0), #8deff6);
  border-top-right-radius: 1px;
  border-top-left-radius: 1px;
  animation: span4 2s linear infinite;
  animation-delay: 4s;
}
@keyframes span4{
  0%{
      bottom: -70px;
  }
  100%{
      bottom:70px;
  }
}

.carousel-caption button:hover{
  transition: all .5s;
  transform: rotate(-3deg) scale(1.1);
  box-shadow: 0px 3px 5px rgba(0,0,0,.4);
}
.carousel-caption button:hover span{
  animation-play-state: paused;
}

.carousel-caption h3 {
  font-size: 44px;
  font-weight: 700;
}

.carousel-caption h2 {
  font-size: 44px;
  font-weight: 700;
  text-transform: uppercase;
  color: #fff;
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
  text-align: justify;
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
  width: 260px;
  height: 220px;
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
.our_gallery_radio1 img {
  border-radius: 0px;
  background: linear-gradient(grey, grey);
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
  font-size: 34px;
  font-weight: 600;
  margin-bottom: 30px;
  margin-top: 0;
}

.show_schedule_main .padded {
  padding: 100px 0;
}

.show_schedule_main .wrapper-grey {
  background: #f4f4f4;
}

.show_schedule_main .avatar {
  width: 30px;
  border-radius: 50%;
}

.crd:hover img {
  transform: scale(1.4);
}

.crd img {
  border: 2px solid transparent; /* Set initial border style */
  animation: borderAnimation 5s infinite; /* Apply animation to the border */
}

@keyframes borderAnimation {
  0% {
    border-color: red; /* Start color of the border animation */
  }
  50% {
    border-color: red; /* Midpoint color of the border animation */
  }
  100% {
    border-color: red; /* End color of the border animation */
  }
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
  color: white;
  position: relative;
  border-radius: 10px;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 25px;
}
.show_schedule_main .card2 {
  height: 450px;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.6);
  color: white;
  position: relative;
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 25px;
}

.show_schedule_main .card1 {
  height: 600px;
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
  background-color: red !important;
}

.show_schedule_main .card-category {
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 20px;
}

.show_schedule_main .card-description h2 {
  font-size: 22px;
  color: white !important;
}

.show_schedule_main .card-description p {
  font-size: 18px;
  color: white !important;
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

.pc-tab > input,
.pc-tab section > div {
  display: none;
}

#tab1:checked ~ section .tab1,
#tab2:checked ~ section .tab2,
#tab3:checked ~ section .tab3,
#tab4:checked ~ section .tab4,
#tab5:checked ~ section .tab5,
#tab6:checked ~ section .tab6,
#tab7:checked ~ section .tab7 {
  display: block;
}

#tab1:checked ~ nav .tab1,
#tab2:checked ~ nav .tab2,
#tab3:checked ~ nav .tab3,
#tab4:checked ~ nav .tab4,
#tab5:checked ~ nav .tab5,
#tab6:checked ~ nav .tab6,
#tab7:checked ~ nav .tab7 {
  color: red;
}

/* Visual Styles */

/* $activeColor: #ffffff;
        $unactiveColor: #eeeeee;
        $unactiveHoverColor: #dddddd; */
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
  /* background: $unactiveColor; */
  color: #444;
  width: 14%;
  text-align: center;
}

/* .pc-tab ul li label &:hover {
            background: $unactiveHoverColor;
        } */

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

.pc-tab section > div {
  margin-top: 50px;
}

#tab1:checked ~ nav .tab1 label,
#tab2:checked ~ nav .tab2 label,
#tab3:checked ~ nav .tab3 label,
#tab4:checked ~ nav .tab4 label,
#tab5:checked ~ nav .tab5 label,
#tab6:checked ~ nav .tab6 label,
#tab7:checked ~ nav .tab7 label {
  background: linear-gradient(#c52929, #250d0d);
  color: #fff;
  position: relative;
}

#tab1:checked ~ nav .tab1 label &:after,
#tab2:checked ~ nav .tab2 label &:after,
#tab3:checked ~ nav .tab3 label &:after,
#tab4:checked ~ nav .tab4 label &:after,
#tab5:checked ~ nav .tab5 label &:after,
#tab6:checked ~ nav .tab6 label &:after,
#tab7:checked ~ nav .tab7 label &:after {
  content: "";
  display: block;
  position: absolute;
  height: 2px;
  width: 100%;
  /* background: $activeColor; */
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
.gallery_img_outer_div1 {
  border-radius: 8px;
  max-width: 100%;
}

.gallery_img_outer_div1 img {
  position: relative;
  z-index: -1;
  display: block;
  height: 100%;
  width: 100%;
  padding: 2px;
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

.contact-form {
  cursor: pointer;
  position: fixed;
  right: 30px;
  bottom: 30px;
  box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100%;
  width: 80px;
  height: 80px;
  text-decoration: none;
}

.contact-form1 {
  cursor: pointer;
  position: fixed;
  right: 30px;
  bottom: 5px;
  box-shadow: 0 3px 6px rgb(0 0 0 / 16%), 0 3px 6px rgb(0 0 0 / 23%);
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100%;
  width: 80px;
  height: 80px;
  text-decoration: none;
}

.contact-form button {
  width: 100px;
  height: 80px;
  color: #fff;
  background-color: crimson;
  font-size: 16px;
  font-weight: 500;
  border: 2px solid crimson;
  padding: 3px;
  border-radius: 25px;
  text-decoration: none;
}

.contact-form1 button {
  width: 80px;
  height: 80px;
  color: #fff;
  background-color: red;
  font-size: 16px;
  font-weight: 500;
  border: 2px solid red;
  padding: 3px;
  border-radius: 25px;
  text-decoration: none;
}

.contact-form button:hover {
  color: crimson;
  background-color: #fff;
}

.contact-form1 button:hover {
  color: crimson;
  background-color: #fff;
}

.audio {
  width: 50%;
  margin-top: 20px;
}

.audio {
  background-color: #f7a9a9;
  padding: 10px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.audio::-webkit-media-controls {
  background-color: #f7a9a9;
  color: #333;
  border-radius: 5px;
}

.audio::-webkit-media-controls-play-button {
  background-color: #f7a9a9;
  border-radius: 20px;
}

.audio::-webkit-media-controls-volume-slider {
  background-color: #f7a9a9;
}

.audio::-webkit-media-controls-seek-back-button {
  background-color: #f7a9a9;
}

.audio::-webkit-media-controls-seek-forward-button {
  background-color: #f7a9a9;
}

@media (max-width: 992px) {
  .footer_new h3 {
    font-size: 18px;
  }
  .footer_new .p-5 {
    padding: 2rem !important;
  }
  .carousel-caption h3{
    font-size: 40px; 
  }
  .carousel-caption h2{
    font-size: 40px; 
  }
  .desc_content_heading span {
    font-size: 26px;
  }
  .main_logo_two_pie img{
    height: 40px;
 }
 .navbar_div_main {
  margin: 2px;
}
}

@media (max-width: 830px) {
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
  .carousel-caption h3{
    font-size: 36px; 
  }
  .carousel-caption h2{
    font-size: 36px; 
  }
  .desc_content_heading span {
    font-size: 26px;
  }
  .main_logo_two_pie img{
    height: 40px;
 }
 .navbar_div_main {
  margin: 2px;
}
}

@media (max-width: 768px) {
  .footer_new .col-md-3 {
    text-align: center;
  }
  .footer_new h3 {
    font-size: 16px;
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
  .carousel-caption h3{
    font-size: 36px; 
  }
  .carousel-caption h2{
    font-size: 36px; 
  }
  .desc_content_heading span {
    font-size: 26px;
  }
  .main_logo_two_pie img{
    height: 40px;
 }
 .navbar_div_main {
  margin: 2px;
}
}

@media (max-width: 475px) {
  .footer_new h3 {
    font-size: 30px;
    padding-top: 30px;
  }
  .footer_new .mobile-none {
    display: none;
  }
} 

.col-md-3 h3 {
  text-transform: capitalize;
}
.col-md-3 ul li a {
  text-transform: uppercase;
}

.location1 {
  padding-left: 30px;
  background: url('{{asset('images/store_images/stores/icon-location.png')}}') 0 5px no-repeat;
  color: #fff;
  margin-bottom: 10px;
}

.address {
  text-transform: uppercase;
}

.phone1 {
  padding-left: 30px;
  background: url('{{asset('images/store_images/stores/icon-phone.png')}}') 0 5px no-repeat;
  color: #fff;
  margin-bottom: 10px;
}

.mail1 {
  padding-left: 30px;
  background: url('{{asset('images/store_images/stores/icon-mail.png')}}') 0 5px no-repeat;
  color: #fff;
  margin-bottom: 10px;
}
</style>

</head>

<body id="body">
    
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
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">
                            
                            <input type="hidden" name="access_key" value="a561802e-54fa-4124-a226-e107abaacb70" />
                            <input type="hidden" name="subject" value="New Slot Submission">
                            <input type="hidden" name="from_name" value="Tea Post -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://live.radio2pir.com/shivam">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                        
                        <p class="text-base text-center text-gray-400" id="result"></p>
                       
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required
                            onBlur="if(this.value=='') this.value='Full Name'"
                            onFocus="if(this.value =='Full Name' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number" required
                            onBlur="if(this.value=='') this.value='Phone Number'"
                            onFocus="if(this.value =='Phone Number' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address" required
                            onBlur="if(this.value=='') this.value='E-mail address'"
                            onFocus="if(this.value =='E-mail address' ) this.value=''"/>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea class="form-control" rows="5" name="message" id="message" required
                            onBlur="if(this.value=='') this.value='Message'"
                            onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                            </div>
                            <div class="form-group">
                            <label for="recipient-time" class="col-form-label">Date:*</label>
                            <input type="datetime-local" class="form-control" name="recipient-time" id="recipient-name" required>
                            </div>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Book Slot</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar start -->
    <div style="display: flex; justify-content: center;">
        <nav class="navbar navbar-expand-lg navbar-light header_background navbar_div_outer">
            <div class="container-fluid container nopadding">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nopadding" id="navbarCollapse">
                    <div class="navbar-nav navbar_div_main row nopadding">
                        <div class="col-md-6 d-flex nopadding">
                            <a href="#" class="nav-item nav-link d-flex align-items-center">Home</a>
                            <a href="#radio" class="nav-item nav-link d-flex align-items-center">Radios</a>
                            <a href="#description" class="nav-item nav-link d-flex align-items-center">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->
    
    <div class="container container-fluid">
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="d-flex align-items-center main_logo_two_pie">
                    <img src="{{$page->store_logo?asset('storage/logo/'.$page->store_logo):asset('images/2pir_logo.png')}}" height="100" alt="CoolBrand">
                </div>
                
            </div>
        </div>
        <audio id="myAudio"></audio>
        <div class="play_pause_main">
            <div class="play_pause_main_inner" id="btn_play_pause">
                <img src="{{asset('images/store_images/stores/2pir_logo.png')}}" class="play_pause_main_inner_img" height="60px">
                <i class="fa fa-play" id="ic_btn_play_pause" style="font-size:44px;"></i>
            </div>
        </div>

    </div>

    <!-- header end -->
    <!-- myCarousel start -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item main_carousel_outer active">
                <img src="{{asset('images/store_images/stores/radio_image7.webp')}}" alt="" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button data-toggle="modal" data-target="#exampleModal">
                        Advertise with us 
                          <span></span>
                          <span></span>
                          <span></span>
                          <span></span>
                          </button>
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

    <!-- body start -->
    <div class="container container-fluid">

        <!-- description start -->
        <div class="row my-5" id="description">
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{asset('images/store_images/stores/radio_image2.webp')}}" class="Description_image1" height="300" alt="CoolBrand">
                <img src="{{asset('images/store_images/stores/chappan_logo.png')}}" height="150" class="Description_image2" alt="CoolBrand">
            </div>
            <div class="col-md-6">
                <div class="second_section_desc">
                    <h2 class="desc_content_heading"><span>Radio 2 PI R</span></h2>
                    <p>
                         Radio 2 PI R is World’s First Personalized Radio Station. In an era dominated by digital connectivity, our proposal
                         unveils an innovative venture: the establishment of an Internet Radio platform. As traditional radio gives way to the boundless
                         possibilities of online broadcasting, our initiative aims to carve a niche in the dynamic realm of virtual airwaves. 
                         Offering a diverse range of curated content, our Internet Radio promises an immersive auditory experience, 
                         seamlessly blending entertainment, information, and community engagement. Embracing the limitless reach of the web,
                         we aspire to redefine radio, fostering a global community united by the power of sound. 
                     </p>
                    <div>
                    </div>
                </div>
            </div>
        </div>
        <!-- description end -->

                <!-- Radio Elements starts-->
        <!-- Affair-with-air -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase;">Affair with air</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/affair_with_air.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_affairwithair.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3a">To Avail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="exampleModal3a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact Us!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form1">
                                
                            <input type="hidden" name="access_key" value="a561802e-54fa-4124-a226-e107abaacb70" />
                            <input type="hidden" name="subject" value="New affair with air form Submission">
                            <input type="hidden" name="from_name" value="Tea Post -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://live.radio2pir.com/shivam">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                        
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required
                            onBlur="if(this.value=='') this.value='Full Name'"
                            onFocus="if(this.value =='Full Name' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number" required
                            onBlur="if(this.value=='') this.value='Phone Number'"
                            onFocus="if(this.value =='Phone Number' ) this.value=''"/>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea class="form-control" rows="5" name="message" id="message" required
                            onBlur="if(this.value=='') this.value='Message'"
                            onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                            </div>
                            
                            </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Contact Us!</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- khat_dil_se_dil_tak -->
        <div class="modal fade" id="exampleModal2a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase;">khat dil se dil tak</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/khat_dil_se_dil_tak.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_khat.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3b">To Avail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="exampleModal3b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact Us!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form2">

                            <input type="hidden" name="access_key" value="a561802e-54fa-4124-a226-e107abaacb70" />
                            <input type="hidden" name="subject" value="New khat dil se dil tak form Submission">
                            <input type="hidden" name="from_name" value="Tea Post -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://live.radio2pir.com/shivam">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                        
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required
                            onBlur="if(this.value=='') this.value='Full Name'"
                            onFocus="if(this.value =='Full Name' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number" required
                            onBlur="if(this.value=='') this.value='Phone Number'"
                            onFocus="if(this.value =='Phone Number' ) this.value=''"/>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea class="form-control" rows="5" name="message" id="message" required
                            onBlur="if(this.value=='') this.value='Message'"
                            onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                            </div>
                            
                            </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Contact Us!</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- fun_with_tadka -->
        <div class="modal fade" id="exampleModal2b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase;">Fun with tadka</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/fun_with_tadka.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_funwithtadka.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3c">To Avail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="exampleModal3c" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact Us!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form3">
                                            
                            <input type="hidden" name="access_key" value="a561802e-54fa-4124-a226-e107abaacb70" />
                            <input type="hidden" name="subject" value="New fun with tadka form Submission">
                            <input type="hidden" name="from_name" value="Tea Post -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://live.radio2pir.com/shivam">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                        
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required
                            onBlur="if(this.value=='') this.value='Full Name'"
                            onFocus="if(this.value =='Full Name' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number" required
                            onBlur="if(this.value=='') this.value='Phone Number'"
                            onFocus="if(this.value =='Phone Number' ) this.value=''"/>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea class="form-control" rows="5" name="message" id="message" required
                            onBlur="if(this.value=='') this.value='Message'"
                            onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                            </div>
                            
                            </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Contact Us!</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

       <!-- get_popular -->
        <div class="modal fade" id="exampleModal2c" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content"> 
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-transform: uppercase;">Get popular</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/get_popular.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_getpopular.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3d">To Avail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="exampleModal3d" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contact Us!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="https://api.web3forms.com/submit" method="POST" id="form4">
                                            
                            <input type="hidden" name="access_key" value="a561802e-54fa-4124-a226-e107abaacb70" />
                            <input type="hidden" name="subject" value="New get popular form Submission">
                            <input type="hidden" name="from_name" value="Tea Post -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://live.radio2pir.com/shivam">
                            <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                        
                        <div class="form-group">
                            <label for="name">Full Name*</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required
                            onBlur="if(this.value=='') this.value='Full Name'"
                            onFocus="if(this.value =='Full Name' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number" required
                            onBlur="if(this.value=='') this.value='Phone Number'"
                            onFocus="if(this.value =='Phone Number' ) this.value=''"/>
                            </div>
                            <div class="row">
                            <div class="col-sm-12">
                            <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea class="form-control" rows="5" name="message" id="message" required
                            onBlur="if(this.value=='') this.value='Message'"
                            onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                            </div>
                            
                            </div>
                            </div>
                            <button type="submit" class="btn btn-secondary">Contact Us!</button>
                    </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- radio starts -->
        <div id="radio" class="wrapper-grey padded show_schedule_main">
            <div class="container">
                <h2 class="template_main_heading">Radio Elements</h2>
                <div class="big_border_headline "></div>
                <div class="small_border_headline"></div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="card2 crd" style="background: url('{{asset('images/store_images/stores/affair_with_air.jpeg')}}');
                        background-size: 262px 450px; background-position: center; background-repeat: no-repeat;">
                           <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2"><img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/playbtn.png')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5" >Affair with air</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card2 crd" style="background: url('{{asset('images/store_images/stores/khat_dil_se_dil_tak.jpeg')}}');
                        background-size: 262px 450px; background-position: center; background-repeat: no-repeat;">
                            <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2a"><img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/playbtn.png')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5">Khat dil se dil tak</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card2 crd" style="background: url('{{asset('images/store_images/stores/fun_with_tadka.jpeg')}}');
                        background-size: 262px 450px; background-position: center; background-repeat: no-repeat;">
                            <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2b"><img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/playbtn.png')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5">Fun with tadka</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card2 crd" style="background: url('{{asset('images/store_images/stores/get_popular.jpeg')}}');
                        background-size: 262px 450px; background-position: center; background-repeat: no-repeat;">
                            <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2c"><img class="card-user avatar avatar-large" src="{{asset('images/store_images/stores/playbtn.png')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5">Get popular</h5>
                    </div>

                </div>
            </div>
        </div>
        <!-- Radio Elements ends -->

        <!-- clientele start -->
        <div class="our_gallery_radio1" id="client">
            <h2 class="template_main_heading">Our Clientele</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="gallery_img_outer_div1 text-center">
                        <img src="{{asset('images/store_images/stores/advertisingpartner.jpeg')}}" class="w-100 shadow-1-strong rounded mb-4" alt="" /></div>
                    </div>
            </div>
        </div>
        <!-- clientele end -->

        <!-- Show schedule start -->
        <div class="wrapper-grey padded show_schedule_main" id="shows">
            <div class="container">
                <h2 class="template_main_heading">Show Schedule</h2>
                <div class="big_border_headline "></div>
                <div class="small_border_headline"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/store_images/stores/jr-rj-heer.jpeg')}}');
                        background-size: 350px 170px; background-position: center; background-repeat: no-repeat; background-repeat: no-repeat;">
                        <div class="card-description">
                                <p>08:00 - 09:00 AM</p>
                                <p>Bhaktiras</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Heer</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/store_images/stores/Rajiv_Arya.jpeg')}}');
                        background-size: 350px 170px; background-position: center; background-repeat: no-repeat;">
                        <div class="card-description">
                                <p>01:00 - 06:00 PM</p>
                                <p>Rang De Indori</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Rajiv</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/store_images/stores/jr-rj-palak.jpeg')}}');
                        background-size: 350px 170px; background-position: center; background-repeat: no-repeat;">
                        <div class="card-description">
                                <p>06:00 - 09:00 PM</p>
                                <p>Chappan Ka Charger</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Palak</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/store_images/stores/Janvi_Barot.JPG')}}');
                        background-size: 350px 170px; background-position: center; background-repeat: no-repeat;">
                       <div class="card-description">
                                <p>09:00 - 10:00 PM</p>
                                <p>Nagme-e-khas</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Janvi</h5>
                    </div>

                </div>
            </div>
        </div>
        <!-- Show schedule end -->

        <!-- Introduce our team start -->
        <div id="team">
            <h2 class="template_main_heading">Introduce our team</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/store_images/stores/Janvi_Barot.JPG')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Janvi Barot</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/store_images/stores/jr-rj-palak.jpeg')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Palak Raiya</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/store_images/stores/Rajiv_Arya.jpeg')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Rajiv Arya</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/store_images/stores/jr-rj-heer.jpeg')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Heer Dhakan</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduce our team end -->

    </div>
   <!--body end  -->

    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contact Us!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="https://api.web3forms.com/submit" method="POST" id="form5">
                            
                        <input type="hidden" name="access_key" value="a561802e-54fa-4124-a226-e107abaacb70" />
                        <input type="hidden" name="subject" value="New ContactForm Submission">
                        <input type="hidden" name="from_name" value="Tea Post -Radio 2 PIR">
                        <input type="hidden" name="redirect" value="http://live.radio2pir.com/shivam">
                        <input type="checkbox" name="botcheck" class="hidden" style="display: none;">
                   
                    <div class="form-group">
                        <label for="name">Full Name*</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required
                        onBlur="if(this.value=='') this.value='Full Name'"
                        onFocus="if(this.value =='Full Name' ) this.value=''"/>
                        </div>
                        <div class="form-group">
                            <label for="number">Phone Number*</label>
                            <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number" required
                            onBlur="if(this.value=='') this.value='Phone Number'"
                            onFocus="if(this.value =='Phone Number' ) this.value=''"/>
                            </div>
                            <div class="form-group">
                            <label for="email">Email Address*</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address" required
                            onBlur="if(this.value=='') this.value='E-mail address'"
                            onFocus="if(this.value =='E-mail address' ) this.value=''"/>
                            </div>
                        <div class="row">
                        <div class="col-sm-12">
                        <div class="form-group">
                        <label for="message">Your Message*</label>
                        <textarea class="form-control" rows="5" name="message" id="message" required
                        onBlur="if(this.value=='') this.value='Message'"
                        onFocus="if(this.value =='Message' ) this.value=''">Message</textarea>
                        </div>
                        </div>
                        </div>
                        <button type="submit" class="btn btn-secondary">Contact Us!</button>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <button data-toggle="modal" data-target="#exampleModal1"><i class="fa fa-comment"></i></button>
    </div>

    <!-- footer start -->
    <div class="footer_new">
        <div class="bg-custom mt-5 pt-30 pt-60">
            <div class="container container-fluid">
                <div class="row">
                    <div class="col-md-12 p-5">
                        <div class="row">
                            <div class="col-md-3">
                                <h3>reach out us</h3>
                                <p class="pt-1"> </p>
                                <div class="location1"><p class="address">RADIO 2 PI R CHAPPAN ON AIR DESK CHAPPAN DUKAN,  new Palasia,
                                    Indore, Madhya Pradesh, IN</p></div>
           
                               <div class="phone1"><a href="tel:+9109687453588">+91 7417415741</a></div>
           
                               <div class="mail1"><a href="mailto: radio2pir@gmail.com">radio2pir@gmail.com</a></div>
                            </div>
                            <div class="col-md-3">
                                <h3>Service</h3>
                                <ul>
                                    <li><a href="#radio">Radios</a></li>
                                    <li><a href="#client">Clients</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>Radio 2 PI R in media</h3>
                                <ul>
                                    <li><a href="https://timesofindia.indiatimes.com/city/indore/local-live-radio-to-entertain-visitors-at-56-dukan/articleshow/94063606.cms" >TOI</a></li>
                                    <li><a href="https://www.abplive.com/states/madhya-pradesh/indore-56-dukan-radio-station-starts-now-customers-will-get-entertainment-and-good-taste-at-one-place-ann-2350690" >ABP</a></li>
                                    <li><a href="https://www.naidunia.com/madhya-pradesh/indore-world-radio-day-2023-chhappan-dukan-of-indore-will-start-its-own-radio-station-from-today-8015263" >Naidunia</a></li>
                                    <li><a href="https://www.agniban.com/live-radio-will-soon-be-heard-at-chappan-shop-in-indore-you-will-be-able-to-listen-to-your-favorite-song/" >Agniban</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>Socialise with us</h3>
                                <div class="download">
                                    <a href="https://www.instagram.com/radio2pir_/?igsh=MjBsanEwMmVnbXVt" ><i class="fa fa-instagram"></i></a>
                                    <a href="https://m.facebook.com/people/Radio-2-PI-R/100066714981288/" ><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-bottom">
                <div class="container container-fluid">
                    <div class="col-md-12" style="text-transform: uppercase;">
                        <a href="#"><p class="text-center pt-2 mb-2">Indore - Radio 2 PI R </a> | Copyright © 2025</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
</body>


<!-- javascript started -->
    <script src="https://web3forms.com/client/script.js" async defer></script>
    
    <!-- audio js started-->
    <script>
    var audioPlayers = document.querySelectorAll(".audio");
    var myAudio = document.getElementById("myAudio");
    
    var isMyAudioPlaying = false;
    
    function stopOtherAudio(player) {
    audioPlayers.forEach(function(audio) {
        if (audio !== player && !audio.paused) {
            audio.pause();
            audio.currentTime = 0;
        }
    });
    
    if (myAudio !== player && !myAudio.paused) {
        myAudio.pause();
        myAudio.currentTime = 0;
        isMyAudioPlaying = false;
    }
    }
    
    audioPlayers.forEach(function(player) {
    player.addEventListener('play', function() {
        stopOtherAudio(player);
    });
    });
    
    myAudio.addEventListener('play', function() {
    stopOtherAudio(myAudio);
    isMyAudioPlaying = true;
    });
    
    myAudio.addEventListener('pause', function() {
    isMyAudioPlaying = false;
    });
    
    // Resume myAudio when other audio stops
    audioPlayers.forEach(function(player) {
    player.addEventListener('ended', function() {
        if (isMyAudioPlaying) {
            myAudio.play();
        }
    });
    });
    </script>
    <!-- audio js end -->
    
    <!-- message js started -->
    <script>
    const form = document.getElementById("form");
    const result = document.getElementById("result");
    
    form.addEventListener("submit", function (e) {
    e.preventDefault();
    
    const formData = new FormData(form);
    const object = Object.fromEntries(formData);
    const json = JSON.stringify(object);
    
    result.innerHTML = "Please wait...";
    
    fetch("https://api.web3forms.com/submit", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
      Accept: "application/json",
    },
    body: json,
    })
    .then(async (response) => {
      let json = await response.json();
      if (response.status == 200) {
        result.innerHTML = json.message;
        result.classList.remove("text-gray-500");
        result.classList.add("text-green-500");
      } else {
        console.log(response);
        result.innerHTML = json.message;
        result.classList.remove("text-gray-500");
        result.classList.add("text-red-500");
      }
    })
    .catch((error) => {
      console.log(error);
      result.innerHTML = "Something went wrong!";
    })
    .then(function () {
      form.reset();
      setTimeout(() => {
        result.style.display = "none";
      }, 2000);
    });
    });
    </script>
    <!-- message js end -->
    
    <!-- play button js start -->
    <script>
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
    <!-- play button js end-->
    
    <!-- radio audio stop js start-->
    <script>
    var audioPlayers = document.querySelectorAll(".audio");
    var closeButtons = document.querySelectorAll(".close");
    
    function stopAllAudio() {
    audioPlayers.forEach(function(audio) {
        audio.pause();
        audio.currentTime = 0;
    });
    }
    
    closeButtons.forEach(function(button) {
    button.addEventListener('click', function() {
        stopAllAudio();
    });
    });
    </script>
    <!-- radio audio stop js end -->
    
<!-- javascript end -->

</html>