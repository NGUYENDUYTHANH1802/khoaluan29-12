@extends('user.layout.index')

@section('content')

<section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
          <div class="aa-contact-area">
            <div class="aa-contact-top">
              <div class="aa-contact-top-left">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.451563517555!2d107.57905331408453!3d16.452657133419947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a14ebe84c0ad%3A0xdc3295e68e6454ff!2zMTA0IMSQaeG7h24gQmnDqm4gUGjhu6csIHThu5UgNCwgVHLGsOG7nW5nIEFuLCBUaMOgbmggcGjhu5EgSHXhur8sIFRo4burYSBUaGnDqm4gSHXhur8sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1618451903546!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
              <div class="aa-contact-top-right">
                <h2>Liên hệ với chúng tôi</h2>
                <p>Với những sản phẩm và dịch vụ chất lượng uy tín đối với khách hàng.</p>
                <ul class="contact-info-list">
                  <li> <i class="fa fa-phone"></i> 0977485234</li>
                  <li> <i class="fa fa-envelope-o"></i> nguyenduythanh77777@gmail.com</li>
                  <li> <i class="fa fa-map-marker"></i> 104-Điện Biên Phủ-Thành Phố Huế</li>
                </ul>
              </div>
            </div>
            <div class="aa-contact-bottom">
              <div class="aa-title">
                <h2>Gửi tin nhắn của bạn</h2>
                <span></span>
                <p> Các trường bắt buộc được đánh dấu <strong class="required">*</strong></p>
              </div>
              <div class="aa-contact-form">
                <form class="contactform">                  
                  <p class="comment-form-author">
                    <label for="author">Tên <span class="required">*</span></label>
                    <input type="text" name="author" value="" size="30" required="required">
                  </p>
                  <p class="comment-form-email">
                    <label for="email">Email <span class="required">*</span></label>
                    <input type="email" name="email" value="" aria-required="true" required="required">
                  </p>
                  <p class="comment-form-url">
                    <label for="subject">Số Điện Thoại</label>
                    <input type="text" name="subject">  
                  </p>
                  <p class="comment-form-comment">
                    <label for="comment">Lời Nhắn</label>
                    <textarea name="comment" cols="45" rows="8" aria-required="true" required="required"></textarea>
                  </p>                
                  <p class="form-submit">
                    <input type="submit" name="submit" class="aa-browse-btn" value="Gửi Tin">
                  </p>        
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </section>



@endsection