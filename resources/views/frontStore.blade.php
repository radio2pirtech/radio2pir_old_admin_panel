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
    
    <link rel="icon" type="image/x-icon" href="{{$page->store_logo?asset('storage/logo/'.$page->store_logo):asset('images/2pir_logo.png')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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

                            <input type="hidden" name="access_key" value="69fbd05e-c90a-42ac-8e5a-8143c85726a7" />
                            <input type="hidden" name="subject" value="New Slot Submission">
                            <input type="hidden" name="from_name" value="Connplex -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://127.0.0.1:5500/connplex.html">
                        
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
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address"
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
    <div class="header_background">
        <nav class="navbar navbar-expand-lg navbar-light header_background navbar_div_outer">
            <div class="container-fluid container nopadding">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nopadding" id="navbarCollapse">
                    <div class="navbar-nav navbar_div_main row nopadding">
                        <div class="col-md-6 d-flex nopadding">
                            <a href="#" class="nav-item nav-link d-flex align-items-center"><span></span>Home</a>
                            <a href="#Radio" class="nav-item nav-link d-flex align-items-center"><span></span>Radios</a>
                            <a href="#Description" class="nav-item nav-link d-flex align-items-center"><span></span>About Us</a>
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
                <img src="{{asset('images/assets/logo.png')}}" class="play_pause_main_inner_img" height="60px">
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
                <img src="{{asset('images/assets/premium.jpg')}}" alt="" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h2>premium</h2>
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button data-toggle="modal" data-target="#exampleModal">Advertise with us</button>
                </div>
            </div>

            <div class="item main_carousel_outer">
                <img src="{{asset('images/assets/express.jpg')}}" alt="" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h2>express</h2>
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button data-toggle="modal" data-target="#exampleModal">Advertise with us</button>
                </div>
            </div>

            <div class="item main_carousel_outer">
                <img src="{{asset('images/assets/mini.jpg')}}" alt="" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h2>MINI</h2>
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button data-toggle="modal" data-target="#exampleModal">Advertise with us</button>
                </div>
            </div>

            <div class="item main_carousel_outer">
                <img src="{{asset('images/assets/radio_image7.webp')}}" alt="" style="width:100%; height: 450px;">
                <div class="carousel-caption">
                    <h3>Radio 2 PI R</h3>
                    <p>Listen with the ears & understand with the heart</p>
                    <button data-toggle="modal" data-target="#exampleModal">Advertise with us</button>
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
        <div class="row my-5" id="Description">
            <div class="col-md-6 d-flex align-items-center">
                <img src="{{asset('images/assets/radio_image2.webp')}}" class="Description_image1" height="300" alt="CoolBrand">
                <img src="{{asset('images/assets/logo.png')}}" height="150" class="Description_image2" alt="CoolBrand">
            </div>
            <div class="col-md-6">
                <div class="second_section_desc">
                    <h2 class="desc_content_heading"><span>Radio 2 PI R - CONNPLEX</span></h2>
                    <p>
                        <b>Radio 2 PI R is World’s First Personalized Radio Station.</b> In an era dominated by digital connectivity, our proposal
                         unveils an innovative venture: the establishment of an Internet Radio platform. As traditional radio gives way to the boundless
                         possibilities of online broadcasting, our initiative aims to carve a niche in the dynamic realm of virtual airwaves. 
                         Offering a diverse range of curated content, our Internet Radio promises an immersive auditory experience, 
                         seamlessly blending entertainment, information, and community engagement. Embracing the limitless reach of the web,
                         we aspire to redefine radio, fostering a global community united by the power of sound. 
                     </p>
                    <h2 class="desc_content_heading"><span>WHY CONNPLEX??</span></h2>
                    <p> 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati aspernatur quo nam quam ratione alias magni. Incidunt distinctio illo ex ipsa eum.
                         Officia eaque vitae ipsum tempore dolores facilis natus. 
                     </p>
                    
                </div>
            </div>
        </div>
        <!-- description end -->

        <!-- Show schedule start -->
        <div class="wrapper-grey padded show_schedule_main" id="Shows">
            <div class="container">
                <h2 class="template_main_heading">Show Schedule</h2>
                <div class="big_border_headline "></div>
                <div class="small_border_headline"></div>
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/assets/jr-rj-heer.jpeg')}}');">
                        <div class="card-description">
                                <p>08:00 - 09:00 AM</p>
                                <p>Bhaktiras</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Heer</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/assets/Rajiv_Arya.jpeg')}}');">
                        <div class="card-description">
                                <p>01:00 - 06:00 PM</p>
                                <p>Rang De Indori</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Rajiv</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/assets/jr-rj-palak.jpeg')}}');">
                        <div class="card-description">
                                <p>06:00 - 09:00 PM</p>
                                <p>Chappan Ka Charger</p>
                            </div>
                        </div>
                        <h5 class="text-center mt-5">Rj Palak</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset('images/assets/Janvi_Barot.JPG')}}');">
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
                        <img class="card-user avatar avatar-large" src="{{asset('images/assets/affair_with_air.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_affairwithair.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3a">To Avail</button>
                            <!-- <button class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal3a">To Avail</button> -->
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
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">
                                            
                            <input type="hidden" name="access_key" value="69fbd05e-c90a-42ac-8e5a-8143c85726a7" />
                            <input type="hidden" name="subject" value="New affair with air form Submission">
                            <input type="hidden" name="from_name" value="Connplex -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://127.0.0.1:5500/connplex.html">
                        
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
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address"
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
                        <img class="card-user avatar avatar-large" src="{{asset('images/assets/khat_dil_se_dil_tak.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_khat.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3b">To Avail</button>
                            <!-- <button class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal3b">To Avail</button> -->
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
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">

                            <input type="hidden" name="access_key" value="69fbd05e-c90a-42ac-8e5a-8143c85726a7" />
                            <input type="hidden" name="subject" value="New khat dil se dil tak form Submission">
                            <input type="hidden" name="from_name" value="Connplex -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://127.0.0.1:5500/connplex.html">
                        
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
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address"
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
                        <img class="card-user avatar avatar-large" src="{{asset('images/assets/fun_with_tadka.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_funwithtadka.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3c">To Avail</button>
                            <!-- <button class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal3c">To Avail</button> -->
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
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">
                                            
                            <input type="hidden" name="access_key" value="69fbd05e-c90a-42ac-8e5a-8143c85726a7" />
                            <input type="hidden" name="subject" value="New fun with tadka form Submission">
                            <input type="hidden" name="from_name" value="Connplex -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://127.0.0.1:5500/connplex.html">
                        
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
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address"
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
                        <img class="card-user avatar avatar-large" src="{{asset('images/assets/get_popular.jpeg')}}" style="height: 200px; width: 200px; border-radius: 10px; margin: 10px;">        
                        
                        <audio class="audio" controls><source src="{{asset('audio/radio_element_getpopular.mpeg')}}" type="audio/mp3"></audio>
                        
                        <div class="contact-form1"> 
                            <button data-toggle="modal" data-target="#exampleModal3d">To Avail</button>
                            <!-- <button class="nav-item nav-link" data-toggle="modal" data-target="#exampleModal3d">To Avail</button> -->
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
                        <form action="https://api.web3forms.com/submit" method="POST" id="form">
                                            
                            <input type="hidden" name="access_key" value="69fbd05e-c90a-42ac-8e5a-8143c85726a7" />
                            <input type="hidden" name="subject" value="New get popular form Submission">
                            <input type="hidden" name="from_name" value="Connplex -Radio 2 PIR">
                            <input type="hidden" name="redirect" value="http://127.0.0.1:5500/connplex.html">
                        
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
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail address"
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

        <!-- radio starts -->
        <div id="Radio" class="wrapper-grey padded show_schedule_main">
            <div class="container">
                <h2 class="template_main_heading">Radio Elements</h2>
                <div class="big_border_headline "></div>
                <div class="small_border_headline"></div>
                
                <div class="row">
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset("images/assets/affair_with_air.jpeg")}}');">
                           <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2"><img class="card-user avatar avatar-large" src="{{asset('images/assets/affair_with_air.jpeg')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5" >Affair with air</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset("images/assets/khat_dil_se_dil_tak.jpeg")}}');">
                            <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2a"><img class="card-user avatar avatar-large" src="{{asset('images/assets/khat_dil_se_dil_tak.jpeg')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5">Khat dil se dil tak</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset("images/assets/fun_with_tadka.jpeg")}}');">
                            <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2b"><img class="card-user avatar avatar-large" src="{{asset('images/assets/fun_with_tadka.jpeg')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5">Fun with tadka</h5>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <div class="card" style="background: url('{{asset("images/assets/get_popular.jpeg")}}');">
                            <a href="#" class="nav-item nav-link" data-toggle="modal" 
                            data-target="#exampleModal2c"><img class="card-user avatar avatar-large" src="{{asset('images/assets/get_popular.jpeg')}}">
                        </a>
                        </div>
                        <h5 class="text-center mt-5">Get popular</h5>
                    </div>

                </div>
            </div>
        </div>
        <!-- Radio Elements ends -->
        
        <!-- Introduce our team start -->

        <div id="Team">
            <h2 class="template_main_heading">Introduce our team</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/assets/Janvi_Barot.JPG')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Janvi Barot</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/assets/jr-rj-palak.jpeg')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Palak Raiya</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/assets/Rajiv_Arya.jpeg')}}" alt="" 
                        style="border-radius: 8px; height: 220px;">
                        <div class="card-body main_card_img_main">
                            <h3>Rajiv Arya</h3>
                            <p class="card-text">Radio Jockey</p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <div class="card" style="border: unset; "><img src="{{asset('images/assets/jr-rj-heer.jpeg')}}" alt="" 
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

        <!-- clientele start -->
        <div class="our_gallery_radio1" id="Client">
            <h2 class="template_main_heading">Our Clientele</h2>
            <div class="big_border_headline "></div>
            <div class="small_border_headline"></div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                    <div class="gallery_img_outer_div1 text-center">
                        <img src="{{asset('images/assets/advertisingpartner.png')}}" class="w-100 shadow-1-strong rounded mb-4" alt="" /></div>
                    </div>
                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                     <div class="gallery_img_outer_div1 text-center">
                        <img src="{{asset('images/assets/radioclientpartener.png')}}" class="w-100 shadow-1-strong rounded mb-4" alt="" /></div>
                </div>
            </div>
        </div>
        <!-- clientele end -->
    
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
                    <form action="https://api.web3forms.com/submit" method="POST" id="form">
                            
                        <input type="hidden" name="access_key" value="69fbd05e-c90a-42ac-8e5a-8143c85726a7" />
                        <input type="hidden" name="subject" value="New ContactForm Submission">
                        <input type="hidden" name="from_name" value="Connplex -Radio 2 PIR">
                        <input type="hidden" name="redirect" value="http://127.0.0.1:5500/connplex.html">
                   
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
        <button data-toggle="modal" data-target="#exampleModal1">Start your luxury theatre</button>
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
                                    <li><a href="#Radio">Radios</a></li>
                                    <li><a href="#Client">Clients</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3">
                                <h3>Radio 2 PI R in media</h3>
                                <ul>
                                    <li><a href="https://timesofindia.indiatimes.com/city/indore/local-live-radio-to-entertain-visitors-at-56-dukan/articleshow/94063606.cms" target="_blank">TOI</a></li>
                                    <li><a href="https://www.abplive.com/states/madhya-pradesh/indore-56-dukan-radio-station-starts-now-customers-will-get-entertainment-and-good-taste-at-one-place-ann-2350690" target="_blank">ABP</a></li>
                                    <li><a href="https://www.naidunia.com/madhya-pradesh/indore-world-radio-day-2023-chhappan-dukan-of-indore-will-start-its-own-radio-station-from-today-8015263" target="_blank">Naidunia</a></li>
                                    <li><a href="https://www.agniban.com/live-radio-will-soon-be-heard-at-chappan-shop-in-indore-you-will-be-able-to-listen-to-your-favorite-song/" target="_blank">Agniban</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 mobile-none">
                                <h3>Socialise with us</h3>
                                <div class="download">
                                    <a href="https://www.instagram.com/radio2pir_/?igsh=MjBsanEwMmVnbXVt" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="https://m.facebook.com/people/Radio-2-PI-R/100066714981288/" target="_blank"><i class="fa fa-facebook"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-bottom">
                <div class="container container-fluid">
                    <div class="col-md-12" style="text-transform: uppercase;">
                        <a href="#"><p class="text-center pt-2 mb-2">Connplex Radio 2 PI R </a> | Copyright © 2024</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer end -->
</body>

<!-- form -->
<script src="https://web3forms.com/client/script.js" async defer></script>
<!-- play button -->
<script type="text/javascript">

    //Js file start
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
    // Js file end

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