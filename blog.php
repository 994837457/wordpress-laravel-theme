
{{-- Template Name: Sidebar
<article>
<div class="col-md-4 blog-col">
<div class="blog-img">
<img class="thumb" src="<?php bloginfo('template_url'); ?>/public/img/blog_1.jpg" alt=""/>
</div><!--end blog-img-->
<div class="blog-info"> <span>{{ get_the_date() }}</span> </div>
<div class="blog-text">
<div class="title-blog-post">
 <h4 class="entry-title"><a href="{{ the_permalink() }}" title="{{ the_title() }}">{{ get_the_title() }}</a></h4>
                </div>
 <p> {{ get_the_excerpt() }}</p></div>
</div></article>