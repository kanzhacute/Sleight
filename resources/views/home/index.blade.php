@extends('layout/app')

@section('content')
    <section class="home bg-white" id="home">
        <div
        class="container-fluid"
        style="background-color: #F8F6F4; padding-top: 150px; padding-bottom: 90px"
        >
            <div class="container container-satu">
                <div class="row align-items-center align-content-center">
                    <div class="col-md order-md-2">
                        <div class="card ml-auto" style="width: 18rem">
                            <img
                                src="{{ asset('img/product/makeup.jpg') }}"
                                class="card-img-top"
                                alt="..."
                            />
                            <div class="card-body">
                                <h3 class="card-title text-center fw-bold mt--1">All Stuff</h3>
                                <h4 class="text-center mb-2 mt--3" style="color: ##27374D">Do u want?</h4>
                                
                                <div class="d-grid gap-2">
                                    <a href="{{route('produk')}}" class="d-grid gap-2"><button
                                        class="btn"
                                        type="button"
                                        style="color: #27374D; background-color: #A4B494"
                                    >
                                        Go to Catalog
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md order-md-1" style="color: #27374D">
                        <div class="row mb-3 mt-5">
                            <h1 style="font-weight: bolder; font-size: 48px; color: #27374D;">
                                Sleight Apparel <br />For Unique People
                            </h1>
                        </div>
                        <div class="row mb-5">
                            <p class="fs-6 fw-light">
                                May ur day be as flawless<br />
                                as your ???????.
                            </p>
                        </div>
                        <div class="row">
                            <a href="{{route('produk')}}" style="width: 260px"
                                ><div class="button1 mb-5">
                                <div class="button1-left" style="float: left">
                                    Explore Menu
                                </div>
                                <div class="button1-right">
                                    <img src="{{ asset('img/icons/next.png') }}" alt="" />
                                </div></div
                            ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
        class="container-fluid container container-satu"
        style="margin-top: 110px; margin-bottom: 110px"
        >
            <div class="row justify-content-center p-4">
                <div class="col-md mb-5">
                <img class="img-koki" src="{{asset('img/home/img1.jpg')}}" alt="" />
                </div>
                <div class="col-md">
                <div class="row">
                    <h2 class="fw-bold" style="font-size: 40px; color: #27374D">
                    Explore The Best Product by Categories.
                    </h2>
                </div>
                <div class="row">
                    <p style="color: #883838; font-size: 14px; font-weight: 500">
                    Beauty is power, and makeup is something that really enhances that; it's a women secret.
                    </p>
                </div>
                <div class="row mb-4">
                    <div class="container2-img">
                    <img
                        class="mb-3"
                        src="{{asset('img/home/lipdior.jpg')}}"
                        alt=""
                    />
                    <h4 class="fw-bold">T-Shirt</h4>
                    </div>
                    <div class="container2-img">
                    <img
                        class="mb-3"
                        src="{{asset('img/home/masdior.jpg')}}"
                        alt=""
                    />
                    <h4 class="fw-bold">Jacket</h4>
                    </div>
                    <div class="container2-img">
                    <img
                        class="mb-3"
                        src="{{asset('img/home/rare.jpg')}}"
                        alt=""
                    />
                    <h4 class="fw-bold">Pants</h4>
                    </div>
                </div>
                <div class="row">
                    <a
                    href="{{route('produk')}}"
                    class="ml-auto"
                    style="text-decoration: none;"
                    ><div class="container-btn-2">Show more</div></a
                    >
                </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin: 150px auto">
            <div class="my-5"
                style="background-image: url('{{ asset('img/home/makeupstuff.jpg') }}');
                    color: white;
                    background-size: cover;
                    border-radius: 15px;
                    width: 97%;
                    margin: auto;
                    text-align: center;
                    padding: 80px 0;">
                <h2 style="color: white; font-size: 25pt;">
                    Get up to 50% off when<br />
                    You buy more than 10 items
                </h2>
                <p>
                    Eat the food ou dream about at affroddable prices. No need to come to
                <br />
                    us just call us. Explore The Best Foods by Categories
                </p>
                <a href="{{route('produk')}}" style="text-decoration: none; width: 140px;">
                    <div style="padding: 10px; background-color: #A4B494; width: 120px; color: #ffffff; margin: auto; border-radius: 5px;">Buy Now</div>
                </a>
            </div>
        </div>
    </section>
@endsection
