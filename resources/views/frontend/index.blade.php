@extends('layouts.frontend')

@section('content')
<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active">
                <img src="{{ asset('img/hero-carousel/hero-carousel-1.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2><span style="color: #5cdfab;">Accept </span> <span style="color: rgb(0, 0, 0);">Design</span> <span style="color: black;">co.,Ltd.</span></h2>
                    <p>Event Organizer & Production</p>
                    <a href="#featured-services" class="btn-get-started">YOU & ME
                        INNOVATE TOGETHER, SUCCEED TOGETHER</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item active">
                <img src="{{ asset('img/hero-carousel/hero-carousel-2.jpg') }}" alt="">
                <div class="carousel-container">
                    <h2><span style="color: #5cdfab;">Accept </span> <span style="color: rgb(0, 0, 0);">Design</span> <span style="color: black;">co.,Ltd.</span></h2>
                    <p>Event Organizer & Production</p>
                    <a href="#featured-services" class="btn-get-started">YOU & ME
                        INNOVATE TOGETHER, SUCCEED TOGETHER</a>
                </div>
            </div><!-- End Carousel Item -->

            <div class="carousel-item active">
                <img src="{{ asset('img/hero-carousel/hero-carousel-3.png') }}" alt="">
                <div class="carousel-container">
                    <h2><span style="color: #5cdfab;">Accept </span> <span style="color: rgb(0, 0, 0);">Design</span> <span style="color: black;">co.,Ltd.</span></h2>
                    <p>Event Organizer & Production</p>
                    <a href="#featured-services" class="btn-get-started">YOU & ME
                        INNOVATE TOGETHER, SUCCEED TOGETHER</a>
                </div>
            </div><!-- End Carousel Item -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>

    </section><!-- /Hero Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">
        <section id="custom-hr-section">
            <hr class="custom-hr">
        </section>
        <!-- Section Title -->
        <!-- <div class="container section-title" data-aos="fade-up">
            <h2>อัลบัมการจัดงาน</h2>
            <p style="color: black;">ตัวอย่างผลงานอัลบัมการจัดงาน</p>
        </div> -->
        <div class="container">
            <div class="row gy-4">

                @foreach($event as $news)

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="gallery-item h-100 d-flex flex-column">
                        <!-- Image -->
                        <div class="image-container">
                            <img src="{{ asset('/backend/product/'. $news->image) }}" class="img-fluid" alt="{{ $news->name }}" width="400px" height="auto">
                        </div>
                        <!-- Name at the Bottom of Image -->
                        <div class="gallery-details mt-auto text-left">
                            <h5 class="news-title" style="color: #828282; margin-top: 10px; font-weight: 700; font-size: 18px;">{{ $news->name }}</h5> <!-- Light Grey Text and Margin -->
                        </div>
                        <!-- Light Grey "Read More" Button at the Bottom -->
                        <div class="read-more-btn mt-auto">
                            <a href="{{ url('show/' . $news->id) }}" class="btn w-100" style="color: grey; background-color: f5f5f5; font-weight: 700; font-size: 16px;">อ่านเพิ่มเติม</a>
                        </div>
                    </div>
                </div><!-- End Gallery Item -->

                @endforeach

                {{ $event->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </section>

    <section id="custom-hr-section">
        <hr class="custom-hr">
    </section>

    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Q&A</h2>
            <p style="color: black;">คำถามที่พบบ่อย</p>
        </div>

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-briefcase icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a>ทำไมต้องทำงานกับ ACCEPT DESIGN</a></h4>
                            <p class="description">คำบรรยาย (ยังไม่ได้คิด)</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-card-checklist icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a>ACCEPT DESIGN ทำไรได้บ้าง</a></h4>
                            <p class="description">คำบรรยาย (ยังไม่ได้คิด)</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-bar-chart icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a>ACCEPT DESIGN มีจุดเด้นอะไรบาง</a></h4>
                            <p class="description">คำบรรยาย (ยังไม่ได้คิด)</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-binoculars icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a>ช่องทางการติดต่อ</a></h4>
                            <p class="description">คำบรรยาย (ยังไม่ได้คิด)</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-brightness-high icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a>สิ่งที่น่าสนใจและเป็นจุดเด่นของบริษัท</a></h4>
                            <p class="description">คำบรรยาย (ยังไม่ได้คิด)</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-facebook icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a>สามารถเข้าไปติดต่องานได้ที่ไหนบาง</a></h4>
                            <p class="description">คำบรรยาย (ยังไม่ได้คิด)</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <section id="custom-hr-section">
        <hr class="custom-hr">
    </section>


    <section id="" class="blog-posts section">
        <div class="container section-title" data-aos="fade-up">
            <h2>รูปแบบการจัดงานหลัก</h2>
            <p style="color: black;">รายละเอียดการจัดงาน</p>
        </div><!-- End Section Title -->

        @foreach ($newwy as $new)

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-12">
                    <article class="d-flex">
                        <!-- Image on the Left -->
                        <div class="post-img">
                            <img src="{{ asset('/backend/product/'. $new->image) }}" alt="" class="img-fluid">
                        </div>
                        <!-- Content on the Right -->
                        <div class="post-content">
                            <h2 class="title">
                                <a>{{ $new->name }}</a>
                            </h2>
                            <div class="content">
                                <p>
                                    {{ $new->detail }}
                                </p>
                            </div>
                        </div>
                    </article>
                </div><!-- End post list item -->
            </div><!-- End blog posts list -->
        </div>

        @endforeach

    </section><!-- /Blog Posts Section -->

    <section id="custom-hr-section">
        <hr class="custom-hr">
    </section>

    <section id="three-boxes" class="three-boxes section">
        <div class="container section-title" data-aos="fade-up">
            <h2>WORK EXPERIENCE</h2>
            <p style="color: black;">ประสบการณ์การทำงาน</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3 class="box-header">CONSTRION</h3>
                        <p class="box-paragraph">มีโรงงาน และ ทีมงานสำหรับผลิต
                            โครงสร้าง ขนส่ง ติดตั้ง รื้อถอน</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3 class="box-header">MANPOWER</h3>
                        <p class="box-paragraph">จัดงานด้านออแกรไนท์แซอร์และสร้างสรรค์
                            ผลงานด้วยทีมงานมืออาชีพ</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <h3 class="box-header">CREATIVE & DESIGN</h3>
                        <p class="box-paragraph">ด้านการออกแบบและทีมดีไซน์คิดงาน
                            ประสบการณ์มากกว่า 10 ปี</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
