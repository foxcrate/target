<!-- dashboard Menu -->
<div class="nav-scroller bg-body shadow-sm">
    <nav class="nav nav-underline" aria-label="Secondary navigation">
      <a class="nav-link active" aria-current="page" href="{{ route('user.dashboard') }}"><i class="fas fa-tachometer-alt"></i> لوحة تحكم</a>

        @guest
        @else
        @if ( Auth::user()->company )
        <a class="nav-link" href="{{ route('user.my_company') }}"><i class="fas fa-building"></i>  شركتي</a>
        @elseif( ! Auth::user()->company )
        <a class="nav-link" href="{{ route('company.add') }}"><i class="fas fa-building"></i> إضافة شركة</a>
        @endif
        @endguest

      <a class="nav-link" href="meeting.php"><i class="fas fa-business-time"></i> مواعيد محددة</a>
      <a class="nav-link" href="#"><i class="fas fa-window-restore"></i> حجوزاتي</a>
      <a class="nav-link" href="#"><i class="fas fa-shopping-basket"></i> مشترياتي</a>
      <a class="nav-link" href="package.php"><i class="fas fa-shopping-cart"></i> شراء باقة</a>
      <a class="nav-link" href="#"><i class="fas fa-ad"></i> أعلن معنا</a>
      <a class="nav-link" href="#"><i class="far fa-money-bill-alt"></i> محفظتي</a>
      <a class="nav-link" href="#"><i class="fas fa-id-badge"></i> ملفي الشخصي</a>
      <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> تسجيل الخروج </a>
    </nav>
  </div>
