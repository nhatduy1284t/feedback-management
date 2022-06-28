<?php
include "./views/inc/head.php";
 ?>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Studio!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <!-- <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Products</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <!-- <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i> -->
                        <i class="fa fa-coffee fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Coffee</h4>
                    <p class="text-muted">All coffee must meet Itec Coffee standards of high quality.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-leaf fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Tea</h4>
                    <p class="text-muted">Beside our delicious coffee, we also have a wide variety of teas for you to enjoy.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cheese fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Cake</h4>
                    <p class="text-muted">Taste good with coffee and tea.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">MENU</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 1-->
                    <div class="portfolio-item">
                        <div class="portfolio-link" href="#portfolioModal1">
                            <!-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> -->
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1587080413959-06b859fb107d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=592&q=80" alt="..." />
                        </div>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Expresso</div>
                            <div class="portfolio-caption-subheading text-muted">Deep</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 2-->
                    <div class="portfolio-item">
                        <div class="portfolio-link" href="#portfolioModal2">
                            <!-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> -->
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1576092768241-dec231879fc3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80" alt="..." />
                        </div>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Royal Tea</div>
                            <div class="portfolio-caption-subheading text-muted">Peaceful</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- Portfolio item 3-->
                    <div class="portfolio-item">
                        <div class="portfolio-link" href="#portfolioModal3">
                            <!-- <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div> -->
                            <img class="img-fluid" src="https://images.unsplash.com/photo-1558961363-fa8fdf82db35?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80" alt="..." />
                        </div>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">Cookies</div>
                            <div class="portfolio-caption-subheading text-muted">Delicious</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About-->
    <!-- <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="./views/assets/img/about/1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2009-2011</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="./views/assets/img/about/2.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2011</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="./views/assets/img/about/3.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="./views/assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>July 2020</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                Be Part
                                <br />
                                Of Our
                                <br />
                                Story!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section> -->
    <!-- Team-->
    <section class="page-section " id="team">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                <!-- <h3 class="section-subheading text-muted">Staff</h3> -->
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./views/assets/img/team/duy.jpg" alt="..." />
                        <h4>Trinh Nhat Duy</h4>
                        <p class="text-muted">Manager</p>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./views/assets/img/team/quan.jpg" alt="..." />
                        <h4>Nguyen Khac Anh Quan</h4>
                        <p class="text-muted">Barista</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="./views/assets/img/team/thu.jpg" alt="..." />
                        <h4>Nguyen Quoc Thu</h4>
                        <p class="text-muted">Car keeper</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <p class="large text-muted">Itec Coffee serves you the best service and best drinks from our warm-hearted staff. </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients-->
    <!-- <div class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="./views/assets/img/logos/microsoft.svg" alt="..." aria-label="Microsoft Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="./views/assets/img/logos/google.svg" alt="..." aria-label="Google Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="./views/assets/img/logos/facebook.svg" alt="..." aria-label="Facebook Logo" /></a>
                    </div>
                    <div class="col-md-3 col-sm-6 my-3">
                        <a href="#!"><img class="img-fluid img-brand d-block mx-auto" src="./views/assets/img/logos/ibm.svg" alt="..." aria-label="IBM Logo" /></a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase">Write your opinions</button>
                <h3 class="section-subheading text-muted">Make us better</h3>
            </div>
            <form action="">

            </form>

        </div>
    </section>


<?php
include "inc/footer.php";
?>