@extends('templates.main')
@section('content')

@include('templates.navbar')


<!-- Start Header -->
<div class="container-fluid header ">
    {{-- <h1>{{ $companies }}</h1> --}}
    <div class="col-md-12 search">
        <h2 class="head-title ">مجتمع الشركات والمصانع الأول في مصر</h2>
        <p class="head-p">تارجت هيوصلك بكل الشركات وأصحاب القرار في كل المجالات، ويوصلهم بيك. ابحث / انضم بخطوة واحدة</p>
        <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card p-3 py-4 ">
                <h5>إبحث عن شركتك بأكثر من طريقة</h5>
                <div class="row g-3 mt-2">
                    <div class="col-md-3">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>البحث بالقطاع</option>
                        <option value="1">التجاري</option>
                        <option value="2">الصناعي</option>
                        <option value="3">الخدمي</option>
                    </select>
                    </div>
                    <div class="col-md-6"> <input type="text" class="form-control" placeholder="Enter address e.g. street, city and state or zip"> </div>
                    <div class="col-md-3"> <button class="btn btn-secondary btn-block">نتيجة البحث</button> </div>
                </div>
                <div class="mt-3"> <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" class="advanced"> البحث المتطور <i class="fa fa-angle-down"></i> </a>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <div class="row">
                                <div class="col-md-4"> <input type="text" placeholder="البحث بالمسمى الوظيفي" class="form-control"> </div>
                                <div class="col-md-4"> <input type="text" class="form-control" placeholder="البحث بالنشاط"> </div>
                                <div class="col-md-4"> <input type="text" class="form-control" placeholder="البحث برقم الهاتف"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Header -->
<!-- Start Top Company Slider -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="vip-slider">
                                        <img class="img-fluid" alt="100%x280" src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                        <div class="card-body">
                                            <h4 class="card-title">Special title treatment</h4>
                                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            <a class="btn - btn-outline-dark d-grid gap-2" href="company.php">مشاهدة الشركة</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 text-right">
                <a class="btn btn-dark mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-dark mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Top Company Slider -->
<!-- strat category -->
<div class="container category">
    <h2 class="block-title">تبحث عن قطاع محدد؟</h2>
    <p class="block-title">ابحث حسب قطاعك المستهدف (عقارات، استيراد وتصدير،..)</p>
    <div class="row">
        @foreach( $categories as $category )
        <div class="col-md-6">
            <div class="cat-card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img class="cat-img img-fluid rounded-start" src="images/cat-img1.jpg"  alt="Category-img">
                    </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <p class="card-text">{{$category->description}}</p>
                                <p class="card-text"><small class="cat-number">يحتوي <span class="cat-span">{{count($category->companies)}}</span> شركة</small></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12 text-center pt-4 pb-3">
            <a class="btn btn-dark " href="{{route('category_index')}}">جميع القطاعات</a>
        </div>
    </div>
</div>
<!-- End category -->
<!-- Start Company -->
<div class="container-fluid company-all">
    <h2 class="block-title">بيانات وطرق التواصل لأكثر من 30.000 شركة ومصنع اطلع عليها مجانًا4.5</h2>
    <div class="row" >
    @foreach ( $companies as $company )
        <div class="col-md-3 company-ro">
            <div class="company-card" style="width: 18rem;">
                    @if ($company->image_1 == null)
                    <img src="images/company.jpg" class="card-img-top" alt="...">
                    @else
                    <img src='{{ asset($company->image_1) }}' class="card-img-top" alt="...">
                    @endif

                    <div class="card-body">
                        <h5 class="view-span">{{ $company->title }}</h5>
                        <p class="card-text">{{ $company->description }}</p>
                    </div>
                        <div class="row card-icon">
                            <div class="view-all col-md-6"><i class="fas fa-eye"></i> <span class="view-span">225</span></div>
                            <div class="card-adress col-md-6"><i class="fas fa-map-marker-alt"></i><span class="adress-span"> {{ $company->address }} </span> </div>
                            <div class="card-clicktocall col-md-12">
                            <a class="card-phone btn btn-outline-primary d-grid gap-2" href="tel:{{ $company->phone_number }}" >Call: {{ $company->phone_number }}</a>
                            </div>
                        </div>
                        <div class="card-button">
                            <a href="https://wa.me/{{$company->whatsapp_number}}" target="_blank" class="btn btn-success">واتساب</a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="far fa-envelope"></i> إرسال بريد الكتروني</button>
                            {{-- <a href="#" class="btn btn-danger">إرسال بريد الكتروني</a> --}}
                        </div>
                    <div>
                    <a href="{{route( 'company_profile',[ 'company_id' => $company->id ] )}}" class="btn btn-outline-dark d-grid gap-2">مشاهدة التفاصيل</a>
                </div>
            </div>
        </div>
        @endforeach
        <div class="col-md-12 text-center pt-4 ">
            <a class="btn btn-dark " href="{{route( 'all_companies' )}}">جميع الشركات</a>
        </div>
    </div>
</div>
<!-- End Company -->

<div class="modal fade" id="exampleModal2" tabindex="-2" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">يمكنك مراسلة الشركة من هنا</h5>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-user-edit"></i></span>
                <input type="text" class="form-control" placeholder="الأسم بالكامل" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                <input type="text" class="form-control" placeholder="البريد الألكتروني" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                <input type="number" class="form-control" placeholder="رقم الهاتف" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
                <span class="input-group-text">رسالتك</span>
                <textarea class="form-control" placeholder="أكتب رسالتك هنا " aria-label="With textarea"></textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-dark ">إرسال</button>
        </div>
        </div>
    </div>
</div>


@endsection
