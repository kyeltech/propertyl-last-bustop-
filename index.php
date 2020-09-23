  <?php 
  include_once("./includes/header.php");

  ?>
<!-- slider start -->
 <div class="video">
  <div class="slider-wrap videoWrp" id="home">
    <div class="hero-image" style="background-image: url('images/banner2.jpg')">
      <video autoplay muted="" poster="#" id="bgvid" loop>
        <source src="videos/construction-background.mp4" type="video/mp4">
      </video>
    </div>
    <div class="videohover hero-wrapper">
      <div class="container">
        <div class="sliderTxt video_hoverText">
          <h1 style="font-size: 20px;">Find your new property</h1>
          <div id="exTab1" class="container">
            <ul  class="nav nav-pills">
              <li> <a href="#1a" class="active" data-toggle="tab">Buy Property</a> </li>
              <li><a href="#2a" data-toggle="tab">Rent Property</a> </li>
              <li><a href="#3a" data-toggle="tab">Short Let</a> </li>

            </ul>
            <div class="tab-content clearfix">
              <div class="tab-pane active" id="1a">
                <div class="form-wrap">
                  <form>
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="input-group origin">
                          <input type="text" name=" Origin" placeholder="Enter State, Location, Landmark ..." class="form-control">
                        </div>
                      </div>
                        <div class="col-lg-4">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Property Type</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Any</li>
                              <li data-value="Residential" class="option">Residential</li>
                              <li data-value="Commercial" class="option">Commercial</li>
                              <li data-value="Land" class="option">Land</li>
                              <li data-value="Luxury" class="option">Flat</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                       <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Bedrooms</span>
                            <ul class="list">
                              <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">Bedrooms</li>
                              <li data-value="1" class="option">1 </li>
                              <li data-value="2" class="option">2</li>
                              <li data-value="3" class="option">3</li>
                              <li data-value="4" class="option">4</li>
                              <li data-value="5" class="option">5</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    
                      <div class="col-lg-3 end_date">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Bathrooms</span>
                            <ul class="list">
                              <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">Any</li>
                              <li data-value="1" class="option">1</li>
                              <li data-value="2" class="option">2</li>
                              <li data-value="3" class="option">3</li>
                              <li data-value="4" class="option">4</li>
                              <li data-value="5" class="option">5</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 economy">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Min Price</span>
                            <ul class="list">
                              <li data-value="Bathrooms" data-display="Bathrooms" class="option selected">Any Price</li>
                              <li data-value="1" class="option">#250, 000</li>
                              <li data-value="2" class="option">#500, 000</li>
                              <li data-value="3" class="option">#750, 000</li>
                              <li data-value="4" class="option">1 Million</li>
                              <li data-value="5" class="option">2 Million</li>
                              <li data-value="6" class="option">3 Million</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Max Price</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Any Price</li>
                              <li data-value="Residential" class="option">4 Million</li>
                              <li data-value="Commercial" class="option">5 Million</li>
                              <li data-value="Land" class="option">6 Million</li>
                              <li data-value="Luxury" class="option">7 Million</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="input-btn">
                          <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Search </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="tab-pane" id="2a">
                <div class="form-wrap">
                  <form>
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="input-group origin">
                          <input type="text" name=" Origin" placeholder="Enter Property, Location, Landmark ..." class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Property Type</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Property Type</li>
                              <li data-value="Residential" class="option">Residential</li>
                              <li data-value="Commercial" class="option">Commercial</li>
                              <li data-value="Land" class="option">Land</li>
                              <li data-value="Luxury" class="option">Luxury</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                       <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Duration of Rent</span>
                            <ul class="list">
                              <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">How Long?</li>
                              <li data-value="1" class="option">6 Months</li>
                              <li data-value="2" class="option">1 Year</li>
                              <li data-value="3" class="option">2 Years</li>
                              <li data-value="4" class="option">3 Years</li>
                              <li data-value="5" class="option">4 Years</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 end_date">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Bedrooms</span>
                            <ul class="list">
                              <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus">Bedrooms</li>
                              <li data-value="1" class="option">1</li>
                              <li data-value="2" class="option">2</li>
                              <li data-value="3" class="option">3</li>
                              <li data-value="4" class="option">4</li>
                              <li data-value="5" class="option">5</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 economy">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Min Price</span>
                            <ul class="list">
                              <li data-value="Bathrooms" data-display="Bathrooms" class="option selected">Min Price</li>
                              <li data-value="1" class="option">#250, 000</li>
                              <li data-value="2" class="option">#500, 000</li>
                              <li data-value="3" class="option">#750, 000</li>
                              <li data-value="4" class="option">#1 Million</li>
                              <li data-value="5" class="option">#2 Million</li>
                              <li data-value="6" class="option">#3 Million</li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current"> Max Price</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Property Price</li>
                              <li data-value="Residential" class="option">#250, 000</li>
                              <li data-value="Commercial" class="option">#500, 000</li>
                              <li data-value="Land" class="option">#750, 000</li>
                              <li data-value="Luxury" class="option">#1 Million</li>
                              <li data-value="Luxury" class="option">#2 Million</li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="input-btn">
                          <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Search </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                 <div class="tab-pane" id="3a">
                <div class="form-wrap">
                  <form>
                    <div class="row">
                      <div class="col-lg-5">
                        <div class="input-group origin">
                          <input type="text" name=" Origin" placeholder="Enter Preferred State, Location, " class="form-control">
                        </div>
                      </div>
                      <div class="col-lg-4">
                          <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Property Type</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Property Type</li>
                              <li data-value="Residential" class="option">Residential</li>
                              <li data-value="Commercial" class="option">Commercial</li>
                              <li data-value="Land" class="option">Land</li>
                              <li data-value="Luxury" class="option">Luxury</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Let Duration</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Be Precise</li>
                              <li data-value="Residential" class="option">2 Month</li>
                              <li data-value="Commercial" class="option">3 Month</li>
                              <li data-value="Land" class="option">4 Month</li>
                              <li data-value="Luxury" class="option">5 Month</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2 end_date">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Bedrooms</span>
                            <ul class="list">
                              <li data-value="Bedrooms" data-display="Bedrooms" class="option selected focus"> Select Bedrooms</li>
                              <li data-value="1" class="option">1</li>
                              <li data-value="2" class="option">2</li>
                              <li data-value="3" class="option">3</li>
                              <li data-value="4" class="option">4</li>
                              <li data-value="5" class="option">5</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2 economy">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Bathrooms</span>
                            <ul class="list">
                              <li data-value="Bathrooms" data-display="Bathrooms" class="option selected">Select Bathrooms</li>
                              <li data-value="1" class="option">1</li>
                              <li data-value="2" class="option">2</li>
                              <li data-value="3" class="option">3</li>
                              <li data-value="4" class="option">4</li>
                              <li data-value="5" class="option">5</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Min Price</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Select your Min Budget</li>
                              <li data-value="Residential" class="option">#200, 000</li>
                              <li data-value="Commercial" class="option">#350, 000</li>
                              <li data-value="Land" class="option">#500, 000</li>
                              <li data-value="Luxury" class="option">#750, 000</li>
                              <li data-value="Luxury" class="option">#1 Million</li>

                            </ul>
                          </div>
                        </div>
                      </div>
                          <div class="col-lg-3">
                        <div class="input-group">
                          <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Max Price</span>
                            <ul class="list">
                              <li data-value="Property Type" data-display="Property Type" class="option selected focus">Select your Max Budget</li>
                              <li data-value="Residential" class="option">#300, 000</li>
                              <li data-value="Commercial" class="option">#500, 000</li>
                              <li data-value="Land" class="option">#750, 000</li>
                              <li data-value="Luxury" class="option">#1 Million</li>
                              <li data-value="Luxury" class="option">#2 Million</li>

                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="input-btn">
                          <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Search </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<!-- slider end --> 

<!-- featured real estate companies  starts-->

<div class="property-wrap wow fadeInUp">
  <div class="container">
    <div class="title pb-2">
      <h1 style="font-size:20px; font-weight: 400" >Featured Real Estate Companies</h1>
    </div>
    <div class="row">
    <div class="col-12">
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1000">
    <div class="row">
    <div class="col-3">
      <img src="./images/company01.jpg" class="d-block w-100" width="30%"alt="estate1">

    </div>
    <div class="col-3">
        <img src="./images/company02.jpg" class="d-block w-100" alt="estate1">
    </div>
    <div class="col-3">
      <img src="./images/company03.jpg" class="d-block w-100" alt="estate1">
    </div>
       <div class="col-3">
      <img src="./images/company04.jpg" class="d-block w-100" alt="estate1">
    </div>
    </div>
    </div>
    <div class="carousel-item" data-interval="1000">
<div class="row">
    <div class="col-3">
      <img src="./images/company05.jpg" class="d-block w-100" alt="estate1">

    </div>
    <div class="col-3">
        <img src="./images/company06.jpg" class="d-block w-100" alt="estate1">
    </div>
    <div class="col-3">
      <img src="./images/property.jpeg" class="d-block w-100" alt="estate1">
    </div>
       <div class="col-3">
      <img src="./images/company04.jpg" class="d-block w-100" alt="estate1">
    </div>
    </div>
    </div>
    <div class="carousel-item">
 <div class="row">
    <div class="col-3">
      <img src="./images/property.jpeg" class="d-block w-100" alt="estate1">

    </div>
    <div class="col-3">
        <img src="./images/company06.jpg" class="d-block w-100" alt="estate1">
    </div>
    <div class="col-3">
      <img src="./images/property.jpeg" class="d-block w-100" alt="estate1">
    </div>
       <div class="col-3">
      <img src="./images/company04.jpg" class="d-block w-100" alt="estate1">
    </div>
    </div>
    </div>
  </div>

</div></div></div>
 
    
  </div>
</div>

<!-- featured real estate companies ends  -->
<!--Properties Start-->
<div class="property-wrap wow fadeInUp">
  <div class="container">
    <div class="title">
      <h1 style="font-size: 20px; font-weight: 300">Featured Properties <span>We Offer Affordable houses at reasonable</span></h1>
    </div>

      <div id="carouselExampleIntervals" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1000">
       <ul class="row">
      <li class="col-lg-3">
        <div class="property_box   wow fadeInUp">
          <div class="propertyImg  "><img alt="" src="images/propertyImg01.jpg"></div>
          <h3><a href="#">Upper Apartment for sale</a></h3>
          <div class="property_location border"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Victory Island / </div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">#600.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 4</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">For Sale</div>
            <div class="sale"><a href="#" class>Buy Now</a></div>
          </div>
        </div>
      </li>
  
      <li class="col-lg-3">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg02.jpg"></div>
          <h3><a href="#">Apartment for sale quality</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Mary Land</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price"># 340.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
      <li class="col-lg-3">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg03.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Lekki</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
         <li class="col-lg-3">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg03.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Lekki</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
    </ul>
    </div>
    <div class="carousel-item" data-interval="2000">
       <ul class="row">
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/innerapt.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Victory Island / </div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">#600.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 4</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
  
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg02.jpg"></div>
          <h3><a href="#">Apartment for sale quality</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Mary Land</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price"># 340.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg03.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Lekki</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
    </ul>
    </div>
    <div class="carousel-item">
       <ul class="row">
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg01.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Victory Island / </div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">#600.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 4</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
  
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg02.jpg"></div>
          <h3><a href="#">Apartment for sale quality</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Mary Land</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price"># 340.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg03.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Lekki</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
    </ul>
    </div>
  </div>
  <a class="carousel-control-prev border" href="#carouselExampleIntervals" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIntervals" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  
 
    
  </div>
</div>
 

<!--Buy and Sell Start-->
<!-- <div class="buy-wrap wow fadeInUp">
  <div class="container">
    <div class="title">
      <h1>Buy or sell your house</h1>
    </div>
    <p>citudin magna luctus sem ultrices convallis. Sed quis ex vel tellus ullamcorper malesuada. Aenean facilisis ex dolor, id vehicula nisl consectetur dapibus. Phasellus mollis mauris semper placerat convallis. Morbi varius facilisis dignissim. Donec eu sollicitudin nunc. Aliquam in nisi id arcu gravida vehicula quis nec sapien. Fusce at dolor ex.</p>
    <div class="start_btn"> <span><a href="#">Start Search Now</a></span> <span><a href="#">Browse Properties</a></span> </div>
  </div>
</div> -->
<!--Buy and Sell Start--> 

<!-- popular start -->
<!-- <section class="popular_wrap wow fadeInUp">
  <div class="container">
    <h1>POPULAR PLACES</h1>
    <span>Lorem ipsum dolor sit amet consectetur</span>
    <div class="row">
      <div class="col-md-8">
        <div class="popular_img position-relative"> <img alt="" src="images/california.jpg">
          <div class="popular_img_text"><a href="#">California</a></div>
        </div>
      </div>
      <div class="col-md-4 mt_md">
        <div class="popular_img position-relative"> <img alt="" src="images/new_york.jpg">
          <div class="popular_img_text"><a href="#">New York</a></div>
        </div>
        <div class="popular_img position-relative mt"> <img alt="" src="images/miami.jpg">
          <div class="popular_img_text"><a href="#">Miami</a></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="popular_img position-relative mt"> <img alt="" src="images/san_francisco.jpg">
          <div class="popular_img_text"><a href="#">San Francisco</a></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="popular_img position-relative mt"> <img alt="" src="images/dubai.jpg">
          <div class="popular_img_text"><a href="#">Dubai</a></div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="popular_img position-relative mt"> <img alt="" src="images/australia.jpg">
          <div class="popular_img_text"><a href="#">Australia</a></div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- popular end --> 

<!--Properties rent Start-->
<!-- <div class="property-wrap property_rent wow fadeInUp">
  <div class="container">
    <div class="title">
      <h1>Properties For Rent <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span></h1>
    </div>
 
    <ul class="row">
 
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg01.jpg"></div>
          <h3><a href="#">Apartment for sale quality</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Staten Island / Queens</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
      <li class="col-lg-4">
        <div class="property_box wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg02.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Staten Island / Queens</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
      <li class="col-lg-4">
        <div class="property_box  wow fadeInUp">
          <div class="propertyImg"><img alt="" src="images/propertyImg03.jpg"></div>
          <h3><a href="#">Upper portion Apartment for sale</a></h3>
          <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Staten Island / Queens</div>
          <div class="heart_info">
            <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
            <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
            <div class="property_price">$ 488.00</div>
          </div>
          <div class="propert_info">
            <ul class="row">
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bedroom_icon.png"></div>
                <h5>Bedrooms 3</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/bathroom_icon.png"></div>
                <h5>Bathrooms 2</h5>
              </li>
              <li class="col-4">
                <div class="proprty_icon"><img alt="" src="images/garage_icon.png"></div>
                <h5>Garage 1</h5>
              </li>
            </ul>
          </div>
          <div class="rent_info">
            <div class="apart">Apartment</div>
            <div class="sale">For Sale</div>
          </div>
        </div>
      </li>
 
    </ul>
 
    
  </div>
</div> -->
<!--Properties End--> 

<!-- perfect home start -->
<!-- <section class="perfect_home_wrap wow fadeInUp">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="perfect_text">
          <h1>Want to find your perfect home?</h1>
          <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultricies, ex eu cursus viverra, lorem turpis feugiat augue, non viverra ipsum nunc in magna.</span> </div>
      </div>
      <div class="col-lg-4">
        <div class="readmore"><a href="#">Browse Properties</a></div>
      </div>
    </div>
  </div>
</section> -->
<!-- perfect home end --> 

<!-- our team start -->
<!-- <section class="our_team_wrap wow fadeInUp">
  <div class="container">
    <h1>Meet Our Agents</h1>
    <span>Lorem ipsum dolor sit amet consectetur</span>
    <div class="row">
      <div class="col-lg-4">
        <div class="team_wrp">
          <div class="team_member  wow fadeInUp">
            <div class="team_img"><img alt="" src="images/team_1.png"></div>
            <div class="team_icons">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="team_name">
              <h3>David Strozier</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team_wrp">
          <div class="team_member wow fadeInUp">
            <div class="team_img"><img alt="" src="images/team_2.png"></div>
            <div class="team_icons">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="team_name">
              <h3>James Adult</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="team_wrp">
          <div class="team_member wow fadeInUp">
            <div class="team_img"><img alt="" src="images/team_3.png"></div>
            <div class="team_icons">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
              </ul>
            </div>
            <div class="team_name">
              <h3>Jennie Wilson</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- our team  end --> 

<!--Footer Start-->
<!-- <footer class="footer bg-style wow fadeInUp">
  <div class="container">
    <div class="footer-upper">
      <div class="row">
        <div class="col-lg-3 col-md-12">
          <div class="footer-widget about-widget"> <a href="#"> <img alt="" src="images/logo2.png"> </a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean urna magna, mattis at ullamcorper in, pharetra in lorem. Etiam mollis.</p>
            <div class="readmore"><a href="#">Read More </a></div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3">
          <div class="footer-widget quick-links">
            <h3 class="title">Quick links</h3>
            <ul>
              <li><a href="#."> Home</a> </li>
              <li><a href="#."> Properties</a> </li>
              <li><a href="#."> Agents</a> </li>
              <li><a href="#."> Blogs</a> </li>
              <li><a href="#."> Contact Us</a> </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="footer-widget contact">
            <h3 class="title">Recent Properties</h3>
            <ul class="property_sec">
              <li>
                <div class="rec_proprty">
                  <div class="propertyImg"><img alt="" src="images/property_small01.jpg"></div>
                  <div class="property_info">
                    <h4><a href="#">1324 Tennessee Road</a></h4>
                    <p>Minneapolis, MN 55402</p>
                    <div class="priceWrp">$98.00</div>
                  </div>
                </div>
              </li>
              <li>
                <div class="rec_proprty">
                  <div class="propertyImg"><img alt="" src="images/property_small02.jpg"></div>
                  <div class="property_info">
                    <h4><a href="#">1324 Tennessee Road</a></h4>
                    <p>Minneapolis, MN 55402</p>
                    <div class="priceWrp">$98.00</div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="footer-widget contact">
            <h3 class="title">Contact Info</h3>
            <ul class="footer-adress">
              <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>123 Lorem Ipsum, 45 sit Atlanta</span> </li>
              <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:info@realestate.com"> info@realestate.com </a></span> </li>
              <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:7704282433"> 770-123-4567</a></span> </li>
            </ul>
            <div class="social-icons footer_icon">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer> -->
<!--Footer End--> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Owl Carousel --> 
<script src="js/owl.carousel.js"></script> 
<!-- wow js --> 
<script src="js/animate.js"></script> 
<script src="js/jquery.nice-select.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- general script file --> 
<script src="js/wow.js"></script> 
<script src="js/script.js"></script>
</body>

<!-- Mirrored from malikhassan.com/html/evernest/index_video.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Sep 2020 19:28:16 GMT -->
</html>