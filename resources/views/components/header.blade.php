@php
$categories = App\Http\Controllers\ModelControllers\CategoryController::getAllCategories()
@endphp
    <div class="wrapper">
        <section id="htc__header" class="htc__header__area header--one">
            <div class="container">
                <div class="row">
                    <div class="menumenu__container clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                            <div class="logo">
                                <a href="index.html"><img src={{ URL::asset('server/images/logo.png'); }} alt="logo images"></a>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                            <nav class="main__menu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="/">Home</a></li>
                                    @foreach ($categories as $category)
                                        <li class="drop"><a href="/productlist/{{$category->catid}}">{{$category->catname}}</a></li>
                                    @endforeach
                                    <li><a href="./contact.php">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        @foreach ($categories as $category)
                                        <li class="drop"><a href="/productlist/{{$category->catid}}">{{$category->catname}}</a></li>
                                        @endforeach 
                                        <li><a href="./contact.php">contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                            <div class="header__right">
                                <div class="header__search search search__open">
                                    <a href="#"><i class="icon-magnifier icons"></i></a>
                                </div>
                                @if (Session::get('user'))
                                <div class='header__account'>
                                    <a href='/logout'><i class='icon-lock icons'></i></a>
                                </div>
                                <div class='header__account'>
                                    <a href='/orders'><i class='icon-envelope icons'></i></a>
                                </div>
                                <div class='htc__shopping__cart'>
                                    <a href='/cart' class='cart__menu'><i class='icon-handbag icons'></i></a>
                                    <a href="/cart"><span class="htc__qua">{{ App\Http\Controllers\ModelControllers\CartController::TotalPrd(Session::get('user')) }}</span></a>
                                </div>
                                @else
                                <div class='header__account'>
                                    <a href='/loginregister'><i class='icon-user icons'></i></a>
                                </div>        
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
        </section>
    </div>
    
    @if(Session::has('error'))
    <!-- Error Alert -->
    <div class="alertcus">
        <span class="closebtncus" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ Session::get('error') }}
    </div>
    <!-- Success Alert --> 
    @endif
    @if (Session::has('success'))
    <div class="successcus">
        <span class="closebtncus" onclick="this.parentElement.style.display='none';">&times;</span>
        {{ Session::get('success') }}
    </div>
    @endif
    