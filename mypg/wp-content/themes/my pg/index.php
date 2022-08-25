
   <?php get_header(); ?>
   


        
                        <!-- my carosal start -->


<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner my-5 xl-12 md-10 sm-5">
  <div class="carousel-item active">
    <img src="https://upload.wikimedia.org/wikipedia/commons/3/36/Hopetoun_falls.jpg" alt="Los Angeles" width="1100" height="500">
    <div class="carousel-caption d-visible d-md-block">
            <h2>Utshav Rai</h2>
            <p>Hi im Utshav rai and im a student</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="https://d1whtlypfis84e.cloudfront.net/guides/wp-content/uploads/2019/07/23090714/nature-1024x682.jpeg" alt="Chicago" width="1100" height="500">
  </div>
  <div class="carousel-item">
    <img src="https://www.eea.europa.eu/highlights/latest-evaluation-shows-europes-nature/image" alt="New York" width="1100" height="500">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
</div>


<!-- my carosal stope -->

<!-- about me card start -->


<div class="contain-area">
                  <section class="my-5">
                          <h2 class=" text-center ">About Me</h2>
                  </section>


 <!-- about me card stop -->


  <div class="news col-md-9">
          <?php 
          // if their are any post
          if(have_posts()):
          // while have post show them
            while(have_posts()):the_post(); 

          ?>

          <article>
          <div class="container">
              <div class="card" style="width:200px">
             
                <//?php the_post_thumbnail('thumbnail'); ?>
                <img src="http://localhost/webpage/wp-content/uploads/2022/08/utshav.jpg" alt="utshav" width="100%">
                <div class="card-body">
                  <h4 class="card-title" <?php the_title();?>>Utshav Rai</h4>
                  <p class="card-text" ><?php the_content(); ?> </p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>
              <br>
              </div>

          </article>
          <?php 
          endwhile;

          else:

          ?>
          <p>no post</p>

          <?php 
          endif;?>
  </div>

    <?php get_footer(); ?>
   