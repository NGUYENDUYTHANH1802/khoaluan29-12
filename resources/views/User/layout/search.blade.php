
<!-- Advance Search -->
<section id="aa-advance-search">
  <form action="timkiem" method="get"> 
    <div class="container">
      <div class="aa-advance-search-area">
        <div class="form">
          <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Nhập tên sản phẩm" name="ten_san_pham">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="trang_thai_sp">
                    <option value="0" selected>Trạng Thái</option>
                    <option value="1">Đang Bán</option>
                    <option value="2">Đã Bán</option>
                    <option value="3">Chưa Bán</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="loai_san_pham">
                    <option value="0" selected>Loại Sản Phẩm</option>
                    @foreach ($shareUS_loai_sp as $share_loai_san_pham)
                    <option value="{{ $share_loai_san_pham->id }}">{{ $share_loai_san_pham->ten }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="nguoi_ban" >
                    <option value="0" selected>Người Bán</option>
                    @foreach ($shareUS_nguoi_Dung as $nd)
                    <option value="$nd->id">{{ $nd->ten }}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <button class="aa-search-btn" type="submit">Tìm kiếm</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</section>
<!-- / Advance Search -->