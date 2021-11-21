@extends('templates.main')
@section('content')

@include('templates.navbar')

@include('templates.dash_navbar')


<div class="container py-3">
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class=" mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><i class="far fa-handshake"></i> مجاناً</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">إشترك مجانا</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="package1 mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3 text-white pack-gold ">
            <h4 class="my-0 fw-normal"><i class="far fa-gem"></i> الأكثر مبيعاً</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-dark">إحجزها الأن</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class=" mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><i class="fas fa-align-justify"></i> الشركات الكبيرة</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">إحجزها الأن</button>
          </div>
        </div>
      </div>
    </div>
</div>


@endsection
