@extends('layout/app')
@section('Judul')
    HR Consulting
@endsection
@section('Style')
    <link rel="stylesheet" href="css/services.css">

@endsection

@section('Content')
    <!-- section 2 isi -->
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12 col-lg-6">
                <div class="keterangan1">
                    <h3>HR Outsorcing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio, esse? Sed voluptatum quasi, atque laudantium excepturi alias hic nostrum, sint ipsum nam voluptatem iusto consequuntur modi itaque facilis. Modi, inventore!</p>
                    <button class="btn btn-primary me-md-2" type="button">Consult Now</button>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6">
                <img src="images/image 10.png" alt="#">
            </div>
        </div>
    </div>

    <!-- section 3 isi -->
    <div class="container2">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <img src="images/image 11.png" alt="#" class="mx-5">
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="p-4">
                    <h1>About Services</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere ea eos cupiditate officia ipsum eaque minima voluptatem, repellat error quod sunt, aut eligendi blanditiis, doloremque necessitatibus ex est possimus. Impedit.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- section 4 isi -->
    <div class="container">
        <div class="text1">
            <h1>why should our sources?</h1>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <h2><img src="images/image 15.png" alt="" style="width: 100px; height: 100px;">Cuts Cost</h2>
                <p>Operational and labour costs are significantly reduced when you start outsourcing. You don’t have to fork out a fortune of your hard-earned money to develop and establish a department in your company. Through outsourcing, you can minimise
                    on unnecessary expenditures and inject your capital more in other aspects of your business</p>
                <h2><img src="images/image 15.png" alt="" style="width: 100px; height: 100px;">Save time andenergy</h2>
                <p>You thought that you’ll only save time, right? Well, more good news coming your way! Outsourcing also saves you a ton of your time and energy. You will be doing yourself a favour by freeing up your schedule, which will allow you to focus
                    on improving and scaling your business to the next level. </p>
            </div>
            <div class="col-6">
                <h2><img src="images/image 15.png" alt="" style="width: 100px; height: 100px;">Access to professionals</h2>
                <p>Just by outsourcing, you will short-cut your way into the pool of global knowledge and have the best experts in the field working alongside you and your company. Complex tasks will be operated by professionals with extensive knowledge
                    and vast experience. Outsourcing helps you to increase efficiency in your business. </p>
                <h2><img src="images/image 15.png" alt="" style="width: 100px; height: 100px;">Reduces risk</h2>
                <p>Outsourcing with a notable firm will help you to mitigate the risks in your company. Instead of pouring time, energy and money into creating areas of professional skills and development such as HR or ITs, it is much better to outsource
                    these responsibilities. </p>
            </div>
        </div>
    </div>

    <!-- section 4 isi -->
    <div class="container">
        <div class="text2 text-center">
            <p>"Let us supply you with trained professionals in that area who can help you to smoothly iron out these critical duties"</p>
        </div>
    </div>

    <div class="wave">
        <div class="container">
            <div class="row m-auto justify-content-between">
                <div class="col-sm-12 col-lg-12 text-center text-sm-start" style="margin-top: 150px;">
                    <h1 class="mx-3">Check our ther services</h1>
                </div>
                <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center align-items-sm-start justify-content-sm-start">
                    <div class="card">
                        <img src="images/image 16.png" alt="">
                        <p class="p1">Development <br> Human Capital Program 1</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center align-items-sm-start justify-content-sm-start">
                    <div class="card">
                        <img src="images/image 16 (1).png" alt="">
                        <p class="p1">Development <br> Human Capital Program 2</p>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-4 d-flex align-items-center justify-content-center align-items-sm-start justify-content-sm-start">
                    <div class="card">
                        <img src="images/image 14.png" alt="">
                        <p class="p1">Development <br> Human Capital Program 3</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- form -->
    <form class="mt-5 p-5">
        <div class="text-center mt-5 my-5">
            <h1>Consult Now</h1>
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputText" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputText">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputText" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="exampleInputText">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputText" class="form-label">Company Address</label>
            <input type="text" class="form-control" id="exampleInputText">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputText" class="form-label">PIC Number</label>
            <input type="text" class="form-control" id="exampleInputText">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputText" class="form-label">Request Services</label>
            <input type="text" class="form-control" id="exampleInputText">
        </div>
        <div class="mb-3 form-group">
            <label for="exampleInputText" class="form-label">Need Description</label>
            <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Consult now</button>
    </form>
@endsection
