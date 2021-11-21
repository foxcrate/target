@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


<div class="container-fluid dash-main">
    <h1>{{ Auth::user()->name }}</h1>
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-building"></i> عدد الشركات</div>
                <div class="card-body">
                    <h5 class="card-title">  3 شركات</h5>
                    <p class="card-text-dash">لديك عدد شركات يمكنك التعديل والتحكم الكامل بهم .</p>
                    <a class="btn btn-outline-light d-grid gap-2" href="">زيارة شركاتك</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-shopping-basket"></i> عدد مشترياتي</div>
                <div class="card-body">
                    <h5 class="card-title">6 عناصر</h5>
                    <p class="card-text-dash">مشترياتك هى كل وأى شئ تم شراءه على منصة تارجت مثل الباقة</p>
                    <a class="btn btn-outline-light d-grid gap-2" href="">مشاهدة مشترياتك</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-color text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="fas fa-ad"></i> الإعلانات النشطة</div>
                <div class="card-body">
                    <h5 class="card-title">3إعلانات نشطة</h5>
                    <p class="card-text-dash">Some quick example text to build on the card title and make up</p>
                    <a class="btn btn-outline-light d-grid gap-2" href="">مشاهدة إعلاناتك</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header"><i class="far fa-money-bill-alt"></i> رصيد محفظتي</div>
                <div class="card-body">
                    <h5 class="card-title">800 جنيه</h5>
                    <p class="card-text-dash">Some quick example text to build on the card title and make </p>
                    <a class="btn btn-outline-light d-grid gap-2" href=""> إضافة رصيد</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-12">
            <h2 class="block-title">فواتيري</h2>
                <div class="table-responsive-sm">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">م</th>
                                <th scope="col">إسم العنصر</th>
                                <th scope="col">الكمية</th>
                                <th scope="col">سعر الوحدة</th>
                                <th scope="col">السعر الإجمالي</th>
                                <th scope="col">تاريخ الطلب</th>
                                <th scope="col">حالة الطلب</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td> باقة معلومات ذهبية</td>
                                <td>1</td>
                                <td> 200 جنيه</td>
                                <td> 200 جنيه</td>
                                <td> 1-10-2020</td>
                                <td> قيد المراجعة</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td> باقة إعلانات فضية</td>
                                <td>1</td>
                                <td> 2500 جنيه</td>
                                <td> 2500 جنيه</td>
                                <td> 1-10-2020</td>
                                <td> قيد المراجعة</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td> باقة اعلانات ذهبية</td>
                                <td>1</td>
                                <td> 3500 جنيه</td>
                                <td> 3500 جنيه</td>
                                <td> 1-10-2020</td>
                                <td> قيد المراجعة</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>شحن رصيد محفظتي</td>
                                <td>2000</td>
                                <td> 1 جنيه</td>
                                <td>2000 جنيه</td>
                                <td> 1-10-2020</td>
                                <td> قيد المراجعة</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>شحن رصيد محفظتي</td>
                                <td>500</td>
                                <td> 1 جنيه</td>
                                <td> 500 جنيه</td>
                                <td> 1-10-2020</td>
                                <td> قيد المراجعة</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>شحن رصيد محفظتي</td>
                                <td>1500</td>
                                <td> 1 جنيه</td>
                                <td> 1500 جنيه</td>
                                <td> 1-10-2020</td>
                                <td> قيد المراجعة</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    </div>
</div>


@endsection
