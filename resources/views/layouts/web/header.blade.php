<header class="header-area  clearfix" style="background-color: #009ABB; padding-top: 20px;">
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="logo">
                        <a href="{{ route('web.index') }}">
                            <img alt="" src="{{ asset('img/logo.svg') }}" style="width: 200px; height: 50px">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-6">
                    <div class="header-bottom-right" style="float: right;">
                        <div class="main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="{{ route('web.aboutus') }}">About</a>
                                    </li>
                                    
                                    <li class="top-hover">
                                        <a href="{{ route('web.categories.index') }}">Products</a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('web.contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
					</div>
                 </div>
            </div>
        </div>
     </div>   
</header>