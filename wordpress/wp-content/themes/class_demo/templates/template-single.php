// include header
// include footer
// replace body with static single.html
// replace static info with wordpress loops (use general styles template as a ref

<?php get_header();
$categories = get_categories();

?>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row  wow fdeInUp">
    
    <!--Image block-->
    <div class="col-md-6 col-sm-12">
    <figure><img src="dist/img/Layer-22.jpg" class="img-responsive">
    </figure>
    </div><!--/Image block-->

    <!--content block-->
    <div class="col-md-6 col-sm-12 page-block ">
  
          <header class="entry-header" >
<!--       dynamic   -->
          <span><a href="#">Design</a> . <a href="#">Illustrations</a></span>
        <h2>Digital Mask illustration for Popo</h2>  
        <ul class=" custom-social">
        <li>Share :</li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-rss"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-linkedin-square"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-vimeo-square"></i></a></li>
              </ul>
           
  </header>
          
 
     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent orci est, posuere ac consectetur at, congue quis ipsum. Aliquam ac felis nec metus sagittis rhoncus quis nec erat. Praesent ex sem, sollicitudin id dui sed, feugiat mollis nisl. Praesent ac neque ante. Etiam quis ultrices magna, imperdiet facilisis leo. Ut sollicitudin risus quis metus dapibus lacinia. Vivamus nibh est, gravida nec mi sit amet, sagittis viverra nulla.</p>
    <ul>
          <li> <strong>Client:</strong> Designscrazed</li>
          <li> <strong>Task:</strong> Design, Prototype</li>
          <li> <strong>Dead line:</strong> 3 Months</li>
        </ul>
        
        <a class="btn btn-info chooser-btn" href="#">Visit website</a>
        
    </div><!--/content block-->
     <div class="clearfix"></div>
     
     <!--Portfolio nav-->
      <nav class="navigation posts-navigation" role="navigation">
          <ul>
            <li class="pull-left">
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i> Previous </a></div>
            </li>
            <li><a href="portfolio.html"><i class="fa fa-th-large"></i> Back to Porfolio</a></li>
            
            <li class="pull-right">
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/">Next  <i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav>  <!--/Portfolio nav-->
 
    </div>
  </div>
</div>
<!--/page body-->
<div class="clearfix"></div>


<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h4>Realated Projects</h4>
      
      </div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
            <figure><img src="dist/img/01-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Codetowp branding</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="dist/img/02-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="dist/img/03-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
       
        </ul>
         </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>