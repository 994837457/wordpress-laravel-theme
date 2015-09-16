<section id="blog" class=" parallax" style=" background-image:url(<?php bloginfo('template_url'); ?>/public/images/bkgs/gplaypattern.png); ">     
                <div class="blog-bkg mutualWrap">
        <div class="container">
        <div class="row">

        <div class="alignc">
                <h1 class="section-title">Blog</h1><br>
                <a class="section-rm" href="blog">Read More</a>      
        </div>
        
        </div><!--end row -->             

<article {{ post_class() }}>
  <header>
    <h2 class="entry-title"><a href="{{ the_permalink() }}" title="{{ the_title() }}">{{ the_title() }}</a></h2>
    @include('templates.includes.entry-meta')
  </header>
  <div class="entry-summary">
    {{ the_excerpt() }}
  </div>
</article>

</div>
</div>
</div><!--end .blog-more-->
        
         </div><!--end row--> 
                 
 </div><!--end container -->
</div><!--end blog-bkg-->
        
 </section>
