<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                        <ul class="contact_detail text-center text-lg-start">
                            <li><i class="ti-mobile"></i><span>01518-729991</span></li>
                            <li><i class="ti-email"></i><span>akbarhossain5813@gmail.com</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-end">
                        <ul class="header_list">
                            <li><a href="/policy?name=about"><span>About</span></a></li>
                            @if (Cookie::get('token') !== null)
                                <li><a href="{{ url('/profile') }}"><i class="ti-user"></i><span>Account</span></a></li>
                                <li><a class="btn btn-fill-out btn-xs" href="{{ url('/logout') }}"><span>LogOut</span></a></li>
                            @else
                                <li><a class="btn btn-line-fill btn-xs" href="{{ url('/login') }}"><span>Login</span></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="logo_light" src="{{ asset('assets/images/logo_light.png')}}" alt="logo">
                    <img class="logo_dark" src="{{ asset('assets/images/logo_dark.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-expanded="false">
                    <span class="ion-android-menu"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li><a class="nav-link nav_item active" href="{{ url('/') }}">Home</a></li>
                        <li class="dropdown">
                            <a data-bs-toggle="dropdown" class="nav-link dropdown-toggle" href="{{ url('/') }}">Products</a>
                            <div class="dropdown-menu">
                                <ul id="CategoryItem">

                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link nav_item" href="{{ url('/wishlist') }}"><i class="ti-heart"></i><span class="mx-2">Wishlist</span></a>
                        </li>
                        <li>
                            <a class="nav-link nav_item" href="{{ url('/cart-list') }}"><i class="linearicons-cart"></i><span class="mx-2">Cart</span></a>
                        </li>

                    </ul>
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i
                                class="linearicons-magnifier"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="ion-ios-close-empty"></i></span>
                            <form>
                                <input type="text" placeholder="Search" class="form-control" id="search_input">
                                <button type="submit" class="search_icon"><i
                                class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>
                        <div class="search_overlay"></div>
                        <div class="search_overlay"></div>
                    </li>

                </ul>
            </nav>
        </div>
    </div>
</header>


<script>

    async function Category() {
        let res=await axios.get("/CategoryList");
        $("#CategoryItem").empty();
        res.data['data'].forEach((item,i)=>{
            let EachItem=`<li><a class="dropdown-item nav-link nav_item" href="/by-category?id=${item['id']}">${item['categoryName']}</a></li>`;
            $("#CategoryItem").append(EachItem);
        })

    }
</script>
