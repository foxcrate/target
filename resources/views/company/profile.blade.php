@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


<div class="container">
    <div class="row company-discr">
        <div class="col-md-4 company-ro">
            <img class="company-img" src="images/company.jpg" alt="">
        </div>
        <div class="col-md-8 company-ro">
            <h2>شركة فاروق جروب</h2>
            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                 The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here,
                 content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                 default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
                Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <a class="company-category" href="#"><i class="fas fa-table"></i> قطاع الدعاية والأعلان</a>
        </div>
            <div class="col-md-12 call_to_action ">
              <!-- Modal -->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <div class="modal-body">
                                <a class="phone_number" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a>
                            </div>
                            </div>
                        </div>
                    </div>
                            <!-- Modal -->
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
                    <div class="modal fade" id="exampleModal3" tabindex="-3" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <div class="modal-body">
                                <a class="phone_number" href="tel:01022630272"><i class="fas fa-fax"></i> 01022630272</a>
                            </div>
                            </div>
                        </div>
                    </div>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fas fa-mobile-alt"></i> إتصال</button>
                <a class="btn btn-dark" href="https://www.targetbusiness.solutions/" target="_blank"><i class="fas fa-globe"></i> الموقع الألكتروني</a>
                <a class="btn btn-dark" href="tel:01022630272"><i class="fas fa-map-marker-alt"></i> الخريطة</a>
                <a class="btn btn-success" href="https://wa.me/201022630272" target="_blank"><i class="fab fa-whatsapp"></i> واتساب</a>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="far fa-envelope"></i> إرسال بريد الكتروني</button>
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fab fa-telegram-plane"></i> جروب تليجرام</button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fab fa-facebook-messenger"></i>  فيس بوك ماسينجر</button>
                <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal3"><i class="fas fa-reply"></i> رسالة خاصة</button>
            </div>
            <div class="col-md-12 vip-data ">
                 <h2 class="block-title">بيانات أكثر دقة </h2>
                 <div class="table-responsive-sm">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">الأسم</th>
                                <th scope="col">الرقم</th>
                                <th scope="col">الأسم</th>
                                <th scope="col">الرقم</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                            <tr>
                                <th scope="row"><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</th>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                                <td><i class="fas fa-tasks"></i> رئيس مجلس الأدارة</td>
                                <td> <a class="btn btn-outline-dark" href="tel:01022630272"><i class="fas fa-mobile-alt"></i> 01022630272</a></td>
                            </tr>
                    <tbody>
                    </table>
                 </div>
            </div>
    </div>
</div>


@endsection
