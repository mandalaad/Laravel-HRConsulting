@extends('layout/app')
@section('Judul')
    Our Client
@endsection
@section('Style')
    <link rel="stylesheet" href="css/ourclient.css">

@endsection

@section('Content')
     <!-- section 2 -->
     <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-lg-6">
                <div class="keterangan">
                    <h3>Our Client</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <div class="gambar1">
                    <img src="images/image 5 (1).png" alt="#">
                </div>
            </div>
        </div>
    </div>
    <!-- section3 -->
    <div class="section3">
        <div class="container">
            <div class="logo">
                <img src="images/Group 25.png" alt="">
            </div>
        </div>
    </div>

    <!-- section 4 -->

    <div class="section4">
        <div class="container">
            <div class="row">
                <h2>What They Said</h2>
                <p style="width: 800px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus provident facere sit numquam, sequi eum eius ipsa nobis, eos, illo cum iste exercitationem iusto quaerat odio ipsam consequatur voluptatum unde.</p>
                <div class="background mt-4">
                    <div id="carouselExample" class="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active col-sm-12 col-lg-12">
                                <div class="foto" style="display: flex;">
                                    <div>
                                        <img src="images/Rectangle 46.png" alt="...">
                                    </div>
                                    <div style="margin-left: 20px; margin-top: 10px; color: white;">
                                        <h3>Scarlet witch</h3>
                                        <p>Human Resource Departement</p>
                                    </div>
                                </div>
                                <div class="p1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </div>
                            </div>
                            <div class="carousel-item col-sm-12 col-lg-12">
                                <div class="foto" style="display: flex;">
                                    <div>
                                        <img src="images/Rectangle 47.png" alt="...">
                                    </div>
                                    <div style="margin-left: 20px; margin-top: 10px; color: white;">
                                        <h3>Alex Zack</h3>
                                        <p>Human Resource Departement</p>
                                    </div>
                                </div>
                                <div class="p1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </div>

                            </div>
                            <div class="carousel-item col-sm-12 col-lg-12">
                                <div class="foto" style="display: flex;">
                                    <div>
                                        <img src="images/Rectangle 48.png" alt="...">
                                    </div>
                                    <div style="margin-left: 20px; margin-top: 10px; color: white;">
                                        <h3>Joanna</h3>
                                        <p>Human Resource Departement</p>
                                    </div>
                                </div>
                                <div class="p1">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been Lorem Ipsum is simply dummy
                                        text of the printing and typesetting industry. Lorem Ipsum has been</p>
                                </div>

                            </div>
                        </div>
                        <button class="carousel-control-next" style="width: 100px; height: 100px; margin-top: 100px;" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <img src="images/chevrons-right.svg" alt="#" style="height: 100px; width: 100px;">
                        </button>
                        <!-- <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- section 5 -->
    <div class="section5">
        <div class="container">
            <div class="gambar2">
                <img src="images/image 20.png" alt="#">
            </div>
        </div>
    </div>
@endsection
