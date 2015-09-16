@wpposts
  <div class="container">
@include('templates.includes.page-header')
  <article {{ post_class() }}>
    <header>
      @include('templates.includes.entry-meta')
    </header>
    <div class="entry-content">
      {{ the_content() }}
    </div>
    <footer>
      {{ wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'cutlass'), 'after' => '</p></nav>')) }}
    </footer>
    
  </article>
   </div>
@wpempty
  @include('templates.content.empty')
@wpend