@extends('layouts.frontbase')

@section('title', 'YOUR GARAGE || Car renting')

@section('content')

@include("home.slider")

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Offers</h2>
                    <a href="{{route('products')}}">view more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach($data as $rs)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="{{route('detail',['pid'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}"  alt="" ></a>
                    <div class="down-content">
                        <a href="{{route('detail',['pid'=>$rs->id])}}"><h4>{{$rs->title}}</h4></a>
                        <h6><small>from</small> {{$rs->price}}$ <small>per weekend</small></h6>
                        <p>{{$rs->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>




<div class="services" style="background-image: url({{ asset('assets/images/other-image-fullscren-1-1920x900.jpg')}});" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Latest blog posts</h2>

                    <a href="blog.html">read more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a href="#" class="services-item-image"><img src="{{asset('assets')}}/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

                    <div class="down-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                        <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a href="#" class="services-item-image"><img src="{{asset('assets')}}/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

                    <div class="down-content">
                        <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                        <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a href="#" class="services-item-image"><img src="{{asset('assets')}}/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

                    <div class="down-content">
                        <h4><a href="#">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                        <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="happy-clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Happy Clients</h2>

                    <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="owl-clients owl-carousel text-center">
                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>John Doe</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Smith</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Antony Davis</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>John Doe</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Jane Smith</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>

                    <div class="service-item">
                        <div class="icon">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="down-content">
                            <h4>Antony Davis</h4>
                            <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">

                    <p style="font-size: 18px;"><span style=" font-weight: bold;font-size: 20px; color:blue" >Honesty and client satisfaction</span> what matter more to us.
                    Care to know what's behind this company and the foundation of it? Click on the button bellow!</p>

                    <a href="{{route('about')}}" class="filled-button">Read More..</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('assets')}}/images/about-1-570x350.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <a href="contact.html" class="filled-button">Contact Us</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
