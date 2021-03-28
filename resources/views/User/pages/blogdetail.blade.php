@extends('user.layout.index')

@section('content')
 <!-- Start Blog  -->
  <section id="aa-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-area">
            <div class="row">
              <div class="col-md-12">
                <div class="aa-blog-content">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="aa-blog-single aa-blog-details">
                        <div class="aa-blog-single-content">
                          <h2>{{ $blog->tieude }}</h2>
                          <div class="aa-blog-single-bottom">
                            <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> {{ $blog->nguoiDung->ten }}</a>
                            <a class="aa-blog-comments" href="#"><i class="fa fa-comment-o"></i>6</a>
                          </div>
                          {{ $blog->noidung }}
                          
                        </div>                   
                      </article>
                    </div>
                    <!-- Social Share -->
                    <div class="col-md-12">
                      <div class="aa-properties-social">
                       <ul>
                         <li>Share</li>
                         <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                         <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                       </ul>
                     </div>
                    </div>
                    
                    <!-- comment threats -->
                    <div class="col-md-12">
                      <div class="aa-comments-area">
                        <h3>5 Comments</h3>
                        <div class="comments">
                          <ul class="commentlist">
                            <li>
                              <div class="media">
                                <div class="media-left">    
                                    <img alt="img" src="img/testimonial-1.png" class="media-object news-img">      
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Adam Barney</h4>
                                 <span class="comments-date"> 20th April, 2016</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply</a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="media">
                                <div class="media-left">    
                                    <img alt="img" src="img/testimonial-2.png" class="media-object news-img">      
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">John Smith</h4>
                                 <span class="comments-date"> 20th April, 2016</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply</a>
                                </div>
                              </div>
                            </li>
                            <ul class="children">
                              <li class="author-comments">
                                <div class="media">
                                  <div class="media-left">    
                                      <img alt="img" src="img/testimonial-3.png" class="media-object news-img">      
                                  </div>
                                  <div class="media-body">
                                   <h4 class="author-name">Admin</h4>
                                   <span class="comments-date"> 20th April, 2016</span>
                                   <span class="author-tag">Author</span>
                                   <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                   <a class="reply-btn" href="#">Reply</a>
                                  </div>
                                </div>
                              </li>
                              <ul class="children">
                                <li>
                                  <div class="media">
                                    <div class="media-left">    
                                        <img alt="img" src="img/testimonial-1.png" class="media-object news-img">      
                                    </div>
                                    <div class="media-body">
                                     <h4 class="author-name">Adam Barney</h4>
                                     <span class="comments-date"> 20th April, 2016</span>
                                     <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                     <a class="reply-btn" href="#">Reply</a>
                                    </div>
                                  </div>
                                </li>
                              </ul>
                            </ul>
                            <li>
                              <div class="media">
                                <div class="media-left">    
                                    <img alt="img" src="img/testimonial-2.png" class="media-object news-img">      
                                </div>
                                <div class="media-body">
                                 <h4 class="author-name">Jhon Smith</h4>
                                 <span class="comments-date"> 20th April, 2016</span>
                                 <p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                                 <a class="reply-btn" href="#">Reply</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                          <!-- comments pagination -->
                          <nav>
                            <ul class="pagination comments-pagination">
                              <li>
                                <a aria-label="Previous" href="#">
                                  <span aria-hidden="true">«</span>
                                </a>
                              </li>
                              <li><a href="#">1</a></li>
                              <li><a href="#">2</a></li>
                              <li><a href="#">3</a></li>
                              <li><a href="#">4</a></li>
                              <li><a href="#">5</a></li>
                              <li>
                                <a aria-label="Next" href="#">
                                  <span aria-hidden="true">»</span>
                                </a>
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                    </div>   
                    <!-- Respond box -->
                    <div class="col-md-12">
                      <div id="respond">
                        <h3 class="reply-title">Leave a Comment</h3>
                        <form id="commentform">
                          <p class="comment-notes">
                            Your email address will not be published. Required fields are marked <span class="required">*</span>
                          </p>
                          <p class="comment-form-author">
                            <label for="author">Name <span class="required">*</span></label>
                            <input type="text" required="required" size="30" value="" name="author">
                          </p>
                          <p class="comment-form-email">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" required="required" aria-required="true" value="" name="email">
                          </p>
                          <p class="comment-form-url">
                            <label for="url">Website</label>
                            <input type="url" value="" name="url">
                          </p>
                          <p class="comment-form-comment">
                            <label for="comment">Comment</label>
                            <textarea required="required" aria-required="true" rows="8" cols="45" name="comment"></textarea>
                          </p>
                          <p class="form-allowed-tags">
                            You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:  <code>&lt;a href="" title=""&gt; &lt;abbr title=""&gt; &lt;acronym title=""&gt; &lt;b&gt; &lt;blockquote cite=""&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=""&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=""&gt; &lt;s&gt; &lt;strike&gt; &lt;strong&gt; </code>
                          </p>
                          <p class="form-submit">
                            <input type="submit" value="Post Comment" class="aa-browse-btn" name="submit">
                          </p>        
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
    </div>
  </section>

@endsection