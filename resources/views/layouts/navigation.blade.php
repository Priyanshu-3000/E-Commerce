<nav  class="navbar navbar-expand-lg navbar-light shadow-5-strong ">
    <!-- Primary Navigation Menu -->
    
            <div class="container-fluid">
     
                <!-- Navbar brand -->
                
                <a class="navbar-brand" href="{{url('/Home')}}" style="font-family: fantasy;">Pooja Printers</a>
          
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbar">
                  <!-- Left links -->
                  <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="{{url('/Home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/Product')}}">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/Contact')}}"  aria-disabled="true">
                        Contact Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('/About')}}"  aria-disabled="true">
                        About</a>
                    </li>
                  </ul>
                  
                    <ul class="navbar-nav justify-content-end" >
                    <li class="nav-item">
                      <a class=" btn-primary p-1" style="co" href="{{ url('/Cart') }}" aria-disabled="true">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart 
                      <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span></a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{-- {{ Auth::user()->name }} --}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          
                          <a class="dropdown-item" href="">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link></a>
                          <div class="dropdown-divider"></div>
                          {{-- <a class="dropdown-item" href=""> 
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form></a> --}}
                        </div>
                      </li>			 -->
                    </ul>
                  <!-- Left links -->
                </div>
                <!-- Collapsible wrapper -->
              </div>
</nav>
