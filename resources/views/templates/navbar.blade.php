
<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Target Business</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    {{-- <a class="btn btn-outline-primary login" href="{{ route('login') }}" type="button"><i class="fas fa-sign-in-alt"></i> دخول </a> --}}

    @guest
        <a class="btn btn-outline-primary login" href="{{ route('login') }}" type="button"><i class="fas fa-sign-in-alt"></i> دخول </a>
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('user.dashboard') }}" >Profile</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest


    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav nave-menu me-auto mb-2 mb-lg-0 ">
        <li class="nav-item sameh">
          <a class="nav-link active" aria-current="page" href="{{ route('index') }}">الرئيسية</a>
        </li>
        <li class="nav-item sameh">
          <a class="nav-link" href="#">عن الشركة</a>
        </li>
        <li class="nav-item sameh">
          <a class="nav-link" href="#"> خطط الأسعار</a>
        </li>
        <li class="nav-item sameh">
          <a class="nav-link" href="#">  إتصل بنا</a>
        </li>
      </ul>
      {{-- <form class="d-flex"> --}}
        @guest
        <a class="btn btn-outline-primary btn-lg btn-block" href="{{ route('login') }}" type="button"><i class="far fa-plus-square"></i> أضف شركتك مجاناَ </a>
        @else

        @endguest

      {{-- </form> --}}
    </div>
  </div>
</nav>
