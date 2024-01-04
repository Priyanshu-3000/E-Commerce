<x-app-layout>

    <section class="">
        <div class="container-fluid py-2">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center my-4">
                    <div class="col-md-9">
                        <div class="card-header py-3">
                            <h5 class="mb-0">Your Cart</h5>
                        </div>
                        <div class="card-body">
                            {{-- Cart --}}
                            <?php 
                             $cart = session()->get('cart',[]);
                            // dd($cart);
                            ?>
                            {{-- @if(!empty($cart)) --}}
                            
                            {{-- @foreach ($cart as $Product)


        <div class="col-md-3" style="float:left;">
          <div class="card shadow-2-strong pro">
              <img src="{{$Product['image'] }}" class="card-img-top img">
              <div class="card-body d-flex flex-column">
                  <div class="d-flex flex-row">
                    <h5 class="card-title">&#8377;{{$Product['price']}}</h5>
              
                  </div><p class="card-text">{{$Product['name']}}</p>
                  
              </div>
          </div>
      </div>
        @endforeach
        @endif --}}
                            @if (session('cart'))
                                @foreach (session('cart') as $id => $details)
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">

                                            <div class="bg-image hover-overlay hover-zoom ripple rounded"
                                                data-mdb-ripple-color="light">
                                                <img class="img" src="{{ $details['image'] }}" class="w-100"
                                                    alt="Blue Jeans Jacket" />
                                                <a href="#!">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                                            <p><strong>{{ $details['name'] }}</strong></p>
                                            <p class="text-start">
                                                <strong>{{'₹'}} {{ $details['price'] }}</strong>
                                            </p>
                                                <a href="{{url('remove-from-cart/'.$id)}}"><i class="fas fa-trash"></i></a>
                                        </div>
                                       
                                    </div>
                                    <hr class="my-4" />
                                @endforeach
                            @endif
                        </div>
                        
                        @php $total = 0 @endphp
                        @foreach ((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                    </div>
                    <div class="col-md-3">
                        <div class="card mb-4">
                            <div class="card-header py-3">
                                <h5 class="mb-0">Summary</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                                        Products
                                        <span>{{'₹'}} {{ $total  }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        Shipping
                                        <span>Gratis</span>
                                    </li>
                                    <li
                                        class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                        <div>
                                            <strong>Total amount</strong>
                                            <strong>
                                                <p class="mb-0">(including VAT)</p>
                                            </strong>

                                        </div>
                                        <span><strong>{{'₹'}} {{ $total  }}</strong></span>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <p><strong>Expected shipping delivery</strong></p>
                                        <p class="mb-0">Contact TO US</p>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary btn-lg btn-block">
                                    Go to checkout
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ 'Product' }}" class="btn btn-primary btn-block">Add More Product</a>
                        </div>
                    </div>

                </div>
            </div>


            <div class="container">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


            </div>
            {{-- <div class="card mb-4 mb-lg-0">
                <div class="card-body">
                    <p><strong>We accept</strong></p>
                    <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                        alt="Visa" />
                    <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                        alt="American Express" />
                    <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                        alt="Mastercard" />
                    <img class="me-2" width="45px"
                        src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.webp"
                        alt="PayPal acceptance mark" />
                </div>
            </div> --}}
        </div>







    </section>

</x-app-layout>
