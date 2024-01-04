<x-app-layout>
    <div id="carouselExampleDark" class="carousel carousel-dark slide mb-3" style="height:">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="{{ url('/img/1.jpg') }}" class=" w-100" alt="...">
                <div class="carousel-caption d-none d-block">
                    <h1>Pooja Printers</h1>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="{{ url('/img/2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ url('/img/3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <div class="text-center p-3">
        <h2 class="text-justify text-center">Our Best Selling<h2>
                <p> We brings ideas to life, adding vibrant colors and crisp details to every project. With our press, you
                    can turn imagination into reality, leaving a lasting impression with every print.
                </p>
                <div class="row mt-3">

                    <div class="col-md-3">
                        <div class="card shadow-2-strong pro">
                            <img src="{{ url('/img/Tshirt_1.jpg') }}" class="card-img-top img">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <h5 class="mb-1 me-1">Customizable T-shirts </h5>

                                </div>
                                <p class="card-text">Starting From ₹249 -></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-2-strong pro">
                            <img src="{{ url('/img/Poster_1.jpg') }}" class="card-img-top img">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <h5 class="mb-1 me-1">Customizable Posters </h5>

                                </div>
                                <p class="card-text"> Starting From ₹49 -></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 ">
                        <div class="card shadow-2-strong pro">
                            <img src="{{ url('/img/Card_1.jpg') }}" class="card-img-top img">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <h5 class="mb-1 me-1">Invitation/Greetings </h5>
                                </div>
                                <p class="card-text">Starting From ₹99 -></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card shadow-2-strong pro">
                            <img src="{{ url('/img/Pen_1.jpg') }}" class="card-img-top img">
                            <div class="card-body d-flex flex-column">
                                <div class="d-flex flex-row">
                                    <h5 class="mb-1 me-1">Customizable Stationery Item </h5>

                                </div>
                                <p class="card-text"> Starting From ₹49 -></p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="text-justify text-center">Festival special<h2>
                        <div class="row mt-3">

                            <div class="col-md-3">
                                <div class="card shadow-2-strong pro">
                                    <img src="{{ url('/img/Rakhi_1.jpg') }}" class="card-img-top img">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">Customizable Rakhi</h5>

                                        </div>
                                        <p class="card-text">Starting From ₹249 -></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card shadow-2-strong pro">
                                    <img src="{{ url('/img/diwali_1.webp') }}" class="card-img-top img">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">Customizable Dewali Gift Box</h5>

                                        </div>
                                        <p class="card-text"> Starting From ₹299 -></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 ">
                                <div class="card shadow-2-strong pro">
                                    <img src="{{ url('/img/Holi_1.jpg') }}" class="card-img-top img">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">Customizable Holi Item</h5>
                                        </div>
                                        <p class="card-text">Starting From ₹199 -></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card shadow-2-strong pro">
                                    <img src="{{ url('/img/Kite_1.png') }}" class="card-img-top img">
                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">Makar Sankranti Item </h5>

                                        </div>
                                        <p class="card-text"> Starting From ₹99 -></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <h2 class="text-justify text-center">Trending Products<h2>
                          <div class="row mt-3">
  
                              <div class="col-md-3">
                                  <div class="card shadow-2-strong pro">
                                      <img src="{{ url('/img/Standees_1.jpg') }}" class="card-img-top img">
                                      <div class="card-body d-flex flex-column">
                                          <div class="d-flex flex-row">
                                              <h5 class="mb-1 me-1">Standees</h5>
  
                                          </div>
                                          <p class="card-text">According To Size<br>(Min-₹199) -></p>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-md-3">
                                  <div class="card shadow-2-strong pro">
                                      <img src="{{ url('/img/Mug_1.webp') }}" class="card-img-top img">
                                      <div class="card-body d-flex flex-column">
                                          <div class="d-flex flex-row">
                                              <h5 class="mb-1 me-1">Customizable Mug</h5>
  
                                          </div>
                                          <p class="card-text"> Starting From ₹99 -></p>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-md-3 ">
                                  <div class="card shadow-2-strong pro">
                                      <img src="{{ url('/img/Visiting_Card_1.jpg') }}" class="card-img-top img">
                                      <div class="card-body d-flex flex-column">
                                          <div class="d-flex flex-row">
                                              <h5 class="mb-1 me-1">Visiting Card</h5>
                                          </div>
                                          <p class="card-text">Starting From ₹1 per piece -></p>
                                      </div>
                                  </div>
                              </div>
  
                              <div class="col-md-3">
                                  <div class="card shadow-2-strong pro">
                                      <img src="{{ url('/img/Letterhead_1.webp') }}" class="card-img-top img">
                                      <div class="card-body d-flex flex-column">
                                          <div class="d-flex flex-row">
                                              <h5 class="mb-1 me-1">Letterhead</h5>
  
                                          </div>
                                          <p class="card-text"> Starting From ₹199 -></p>
                                      </div>
                                  </div>
                              </div>
                          </div>
    </div>
</x-app-layout>
