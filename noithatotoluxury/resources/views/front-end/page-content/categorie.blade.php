@extends('front-end.layout-final.default')
@section('content')
<div class="shop-page-title category-page-title page-title ">
	<div class="page-title-inner flex-row  medium-flex-wrap container">
	  	<div class="flex-col flex-grow medium-text-center">
	  	 	<h1 class="shop-page-title is-xlarge">Sản phẩm</h1>
			<div class="is-small">
				<nav class="woocommerce-breadcrumb breadcrumbs"><a href="https://mdbuddy.vn">Trang chủ</a> <span class="divider">&#47;</span> Sản phẩm</nav>
			</div>
			<div class="category-filtering category-filter-row show-for-medium">
				<a href="#" data-open="#shop-sidebar" data-visible-after="true" data-pos="left" class="filter-button uppercase plain"><i class="icon-menu"></i><strong>Lọc</strong></a>
				<div class="inline-block"></div>
			</div>
	  	</div><!-- .flex-left -->
	  
	   	<div class="flex-col medium-text-center"></div><!-- .flex-right -->
	</div><!-- flex-row -->
</div><!-- .page-title -->

<main id="main" class="">
<div class="row category-page-row">

		<div class="col large-3 hide-for-medium ">
			<div id="shop-sidebar" class="sidebar-inner col-inner">
				<aside id="woocommerce_product_search-2" class="widget woocommerce widget_product_search"><form role="search" method="get" class="searchform" action="https://mdbuddy.vn/">
		<div class="flex-row relative">
									<div class="flex-col flex-grow">
			  <input type="search" class="search-field mb-0" name="s" value="" placeholder="Tìm kiếm&hellip;" />
		    <input type="hidden" name="post_type" value="product" />
        			</div><!-- .flex-col -->
			<div class="flex-col">
				<button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
					<i class="icon-search" ></i>				</button>
			</div><!-- .flex-col -->
		</div><!-- .flex-row -->
	 <div class="live-search-results text-left z-top"></div>
</form>
</aside><aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories"><span class="widget-title shop-sidebar">DANH MỤC</span><div class="is-divider small"></div><ul class="product-categories"><li class="cat-item cat-item-15 cat-parent"><a href="https://mdbuddy.vn/product-category/phu-kien-ho-tro1/">PHỤ KIỆN &amp; HỖ TRỢ</a><ul class='children'>
<li class="cat-item cat-item-547"><a href="https://mdbuddy.vn/product-category/phu-kien-ho-tro1/phu-kien-bao-ho/">Phụ kiện bảo hộ</a></li>
<li class="cat-item cat-item-548"><a href="https://mdbuddy.vn/product-category/phu-kien-ho-tro1/phu-kien-ho-tro/">Phụ kiện hỗ trợ</a></li>
</ul>
</li>
<li class="cat-item cat-item-1038 cat-parent"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/">DỤNG CỤ TẬP CÁ NHÂN</a><ul class='children'>
<li class="cat-item cat-item-1041"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/bong-power-ball/">Bóng Power Ball</a></li>
<li class="cat-item cat-item-1039"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/con-lan-tap-bung/">Con lăn tập bụng</a></li>
<li class="cat-item cat-item-915"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/day-nhay-the-duc/">Dây nhảy thể dục</a></li>
<li class="cat-item cat-item-926"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/day-tap-dan-hoi/">Dây tập đàn hồi</a></li>
<li class="cat-item cat-item-927"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/day-tap-khang-luc/">Dây tập kháng lực</a></li>
<li class="cat-item cat-item-1040"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/dia-xoay-thang-bang/">Đĩa xoay thăng bằng</a></li>
<li class="cat-item cat-item-918"><a href="https://mdbuddy.vn/product-category/dung-cu-tap-ca-nhan/dung-cu-ca-nhan-khac/">Dụng cụ cá nhân khác</a></li>
</ul>
</li>
<li class="cat-item cat-item-929 cat-parent"><a href="https://mdbuddy.vn/product-category/phuc-hoi-tri-lieu/">PHỤC HỒI &amp; TRỊ LIỆU</a><ul class='children'>
<li class="cat-item cat-item-931"><a href="https://mdbuddy.vn/product-category/phuc-hoi-tri-lieu/bong-massage/">Bóng Massage</a></li>
<li class="cat-item cat-item-930"><a href="https://mdbuddy.vn/product-category/phuc-hoi-tri-lieu/con-lan-massage/">Con lăn Massage</a></li>
<li class="cat-item cat-item-932"><a href="https://mdbuddy.vn/product-category/phuc-hoi-tri-lieu/gay-massage/">Gậy Massage</a></li>
</ul>
</li>
<li class="cat-item cat-item-933 cat-parent"><a href="https://mdbuddy.vn/product-category/ta-bo-ta/">TẠ &amp; BỘ TẠ</a><ul class='children'>
<li class="cat-item cat-item-938"><a href="https://mdbuddy.vn/product-category/ta-bo-ta/cac-loai-ta-khac/">Các loại tạ khác</a></li>
<li class="cat-item cat-item-936"><a href="https://mdbuddy.vn/product-category/ta-bo-ta/dia-ta/">Đĩa tạ</a></li>
<li class="cat-item cat-item-935"><a href="https://mdbuddy.vn/product-category/ta-bo-ta/ta-nap-am/">Tạ nắp ấm</a></li>
<li class="cat-item cat-item-934"><a href="https://mdbuddy.vn/product-category/ta-bo-ta/ta-tay/">Tạ tay</a></li>
<li class="cat-item cat-item-937"><a href="https://mdbuddy.vn/product-category/ta-bo-ta/thanh-ta-don/">Thanh tạ đòn</a></li>
</ul>
</li>
<li class="cat-item cat-item-939 cat-parent"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/">THIẾT BỊ PHÒNG GYM</a><ul class='children'>
<li class="cat-item cat-item-942"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/bong-the-luc/">Bóng thể lực</a></li>
<li class="cat-item cat-item-940"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/boxing/">Boxing</a></li>
<li class="cat-item cat-item-944"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/buc-tap-drop-jump/">Bục tập Box Jump</a></li>
<li class="cat-item cat-item-1036"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/day-thung-tap-gym/">Dây thừng tập Gym</a></li>
<li class="cat-item cat-item-1037"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/ghe-tap-ta/">Ghế tập tạ</a></li>
<li class="cat-item cat-item-943"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/gia-de-bong/">Giá để bóng</a></li>
<li class="cat-item cat-item-941"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/gia-de-ta/">Giá để tạ</a></li>
<li class="cat-item cat-item-945"><a href="https://mdbuddy.vn/product-category/thiet-bi-phong-gym/may-thiet-bi-co-lon/">Máy &amp; thiết bị cỡ lớn</a></li>
</ul>
</li>
<li class="cat-item cat-item-919 cat-parent"><a href="https://mdbuddy.vn/product-category/yoga-aerobic/">YOGA &amp; AEROBIC</a><ul class='children'>
<li class="cat-item cat-item-920"><a href="https://mdbuddy.vn/product-category/yoga-aerobic/bong-tap-yoga1/">Bóng tập Yoga</a></li>
<li class="cat-item cat-item-923"><a href="https://mdbuddy.vn/product-category/yoga-aerobic/buc-tap-aerobic/">Bục tập Aerobic</a></li>
<li class="cat-item cat-item-922"><a href="https://mdbuddy.vn/product-category/yoga-aerobic/con-lan-yoga-1/">Con lăn Yoga</a></li>
<li class="cat-item cat-item-924"><a href="https://mdbuddy.vn/product-category/yoga-aerobic/phu-kien-yoga-khac-yoga-aerobic/">Phụ kiện Yoga khác</a></li>
<li class="cat-item cat-item-921"><a href="https://mdbuddy.vn/product-category/yoga-aerobic/tham-tap-yoga1/">Thảm tập Yoga</a></li>
</ul>
</li>
</ul></aside><aside id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter"><span class="widget-title shop-sidebar">LỌC THEO GIÁ</span><div class="is-divider small"></div><form method="get" action="https://mdbuddy.vn/shop/">
			<div class="price_slider_wrapper">
				<div class="price_slider" style="display:none;"></div>
				<div class="price_slider_amount">
					<input type="text" id="min_price" name="min_price" value="49000" data-min="49000" placeholder="Giá thấp nhất" />
					<input type="text" id="max_price" name="max_price" value="2199000" data-max="2199000" placeholder="Giá cao nhất" />
					<button type="submit" class="button">Lọc</button>
					<div class="price_label" style="display:none;">
						Giá <span class="from"></span> &mdash; <span class="to"></span>
					</div>
					
					<div class="clear"></div>
				</div>
			</div>
		</form></aside><aside id="woocommerce_top_rated_products-2" class="widget woocommerce widget_top_rated_products"><span class="widget-title shop-sidebar">SẢN PHẨM NỔI BẬT</span><div class="is-divider small"></div><ul class="product_list_widget"><li>
	
	<a href="https://mdbuddy.vn/product/bo-day-tap-the-duc-dan-hoi-resistance-loops-md1319/">
		<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />		<span class="product-title">Bộ 4 dây tập thể dục đàn hồi Resistance Loops MD1319</span>
	</a>

			<div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(1)</div></div>	
	<del><span class="woocommerce-Price-amount amount">399.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">229.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
	</li>
<li>
	
	<a href="https://mdbuddy.vn/product/day-dan-hoi-tap-the-duc-mdbuddy-md1318/">
		<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />		<span class="product-title">Bộ 4 dây đàn hồi tập thể dục MDBuddy MD1318</span>
	</a>

			<div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(2)</div></div>	
	<del><span class="woocommerce-Price-amount amount">499.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">289.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
	</li>
<li>
	
	<a href="https://mdbuddy.vn/product/con-lan-tap-yoga-cao-cap-mdbuddy-mdf059/">
		<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/11/con-lan-tap-yoga-cao-cap-MDBuddy-7.jpg 720w" sizes="(max-width: 250px) 100vw, 250px" />		<span class="product-title">Con lăn tập Yoga cao cấp MDBuddy MDF059</span>
	</a>

			<div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(3)</div></div>	
	<del><span class="woocommerce-Price-amount amount">799.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">499.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
	</li>
<li>
	
	<a href="https://mdbuddy.vn/product/con-lan-tap-yoga-cao-cap-mdbuddy-mdf027/">
		<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/con-lan-tap-Yoga-cao-cap-chinh-hang-MDBuddy-MDF058-1-1.jpg 800w" sizes="(max-width: 250px) 100vw, 250px" />		<span class="product-title">Con lăn tập YOGA cao cấp chính hãng MDBuddy MDF058</span>
	</a>

			<div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(6)</div></div>	
	<del><span class="woocommerce-Price-amount amount">899.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">499.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
	</li>
<li>
	
	<a href="https://mdbuddy.vn/product/dich-dam-boxing-cam-tay-cao-cap-mdbuddy-md1903/">
		<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10.jpg 900w" sizes="(max-width: 250px) 100vw, 250px" />		<span class="product-title">Bộ 2 đích đấm boxing cầm tay cao cấp MDBuddy MD1903 (1 đôi)</span>
	</a>

			<div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(1)</div></div>	
	<del><span class="woocommerce-Price-amount amount">1.299.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">699.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins>
	</li>
</ul></aside>			</div><!-- .sidebar-inner -->
		</div><!-- #shop-sidebar -->

		<div class="col large-9">
		<div class="shop-container">
	   <div class="flex-col medium-text-center woocommerce-order">
	  	 	

<p class="woocommerce-result-count hide-for-medium">
	Hiển thị 1&ndash;12 trong 76 kết quả</p>
<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby">
					<option value="menu_order"  selected='selected'>Thứ tự mặc định</option>
					<option value="popularity" >Thứ tự theo mức độ phổ biến</option>
					<option value="rating" >Thứ tự theo điểm đánh giá</option>
					<option value="date" >Mới nhất</option>
					<option value="price" >Thứ tự theo giá: thấp đến cao</option>
					<option value="price-desc" >Thứ tự theo giá: cao xuống thấp</option>
			</select>
	<input type="hidden" name="paged" value="1" />
	</form>
	   </div><!-- .flex-right -->

		
		<div class="woocommerce-notices-wrapper"></div>	<div class="products row row-small large-columns-3 medium-columns-3 small-columns-2 has-equal-box-heights">
	
<div class="product-small col has-hover post-8359 product type-product status-publish has-post-thumbnail product_cat-phu-kien-ho-tro1 product_cat-phu-kien-ho-tro product_tag-binh-lac-mdbuddy product_tag-binh-lac-shaker-bottle-4-trong-1-chinh-hang-mdbuddy first instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/binh-lac-shaker-bottle-4-trong-1-chinh-hang-mdbuddy/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2019/09/Binh-lac-Shaker-Bottle-4-trong-1-chinh-hang-MDBuddy-0-1.jpg 820w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="8359" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/binh-lac-shaker-bottle-4-trong-1-chinh-hang-mdbuddy/">Bình lắc Shaker Bottle 4 trong 1 chính hãng MDBuddy</a></p></div><div class="price-wrapper">
	<span class="price"><del><span class="woocommerce-Price-amount amount">219.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">149.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=8359" rel="nofollow" data-product_id="8359" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-7087 product type-product status-publish has-post-thumbnail product_cat-boxing product_cat-thiet-bi-phong-gym product_tag-dich-dam-boxing product_tag-dich-dam-boxing-cam-tay product_tag-do-tap-boxing product_tag-phu-kien-boxing instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/dich-dam-boxing-cam-tay-cao-cap-mdbuddy-md1903/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/dich-dam-boxing-cam-tay-cao-cap-10.jpg 900w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="7087" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/dich-dam-boxing-cam-tay-cao-cap-mdbuddy-md1903/">Bộ 2 đích đấm boxing cầm tay cao cấp MDBuddy MD1903 (1 đôi)</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(1)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">1.299.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">699.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=7087" rel="nofollow" data-product_id="7087" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-7127 product type-product status-publish has-post-thumbnail product_cat-phu-kien-ho-tro1 product_cat-phu-kien-ho-tro product_tag-khoa-ta product_tag-khoa-ta-inox product_tag-khoa-ta-lo-xo product_tag-phu-kien-tap-gym product_tag-phu-kien-the-thao last instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/khoa-ta-lo-xo-chinh-hang-mdbuddy-md4033/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/khoa-ta-lo-xo-md4033-1.jpg 900w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="7127" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/khoa-ta-lo-xo-chinh-hang-mdbuddy-md4033/">Bộ 2 khóa tạ lò xo chính hãng MDBuddy MD4033 (1 cặp)</a></p></div><div class="price-wrapper">
	<span class="price"><del><span class="woocommerce-Price-amount amount">159.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">99.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=7127" rel="nofollow" data-product_id="7127" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-4379 product type-product status-publish has-post-thumbnail product_cat-phu-kien-yoga-khac-yoga-aerobic product_cat-yoga-aerobic product_tag-bong-can-bang product_tag-bong-can-bang-cao-su product_tag-bong-dem-chan-can-bang product_tag-bong-gai-can-bang first instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bong-can-bang-chat-lieu-cao-su-pvc-mdbuddy-md1431/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18-250x250.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18-250x250.png 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18-150x150.png 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18-300x300.png 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18-510x510.png 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18-100x100.png 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/Screen-Shot-2018-07-06-at-09.22.18.png 750w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="4379" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bong-can-bang-chat-lieu-cao-su-pvc-mdbuddy-md1431/">Bộ 4 bóng cân bằng chất liệu cao su PVC MDBuddy MD1431</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(3)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">799.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">449.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=4379" rel="nofollow" data-product_id="4379" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-4282 product type-product status-publish has-post-thumbnail product_cat-day-tap-dan-hoi product_cat-dung-cu-tap-ca-nhan product_tag-day-dan-hoi product_tag-day-khang-luc product_tag-day-tap-da-nang product_tag-day-tap-dan-hoi product_tag-day-tap-giam-mo instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/day-dan-hoi-tap-the-duc-mdbuddy-md1318/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1318-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="4282" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/day-dan-hoi-tap-the-duc-mdbuddy-md1318/">Bộ 4 dây đàn hồi tập thể dục MDBuddy MD1318</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(2)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">499.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">289.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=4282" rel="nofollow" data-product_id="4282" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-4274 product type-product status-publish has-post-thumbnail product_cat-day-tap-dan-hoi product_cat-dung-cu-tap-ca-nhan product_tag-day-cao-su-dan-hoi product_tag-day-dan-hoi product_tag-day-tap-chan product_tag-day-tap-mong product_tag-day-tap-mong-dui-da-nang last instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bo-day-tap-the-duc-dan-hoi-resistance-loops-md1319/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1319-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="4274" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bo-day-tap-the-duc-dan-hoi-resistance-loops-md1319/">Bộ 4 dây tập thể dục đàn hồi Resistance Loops MD1319</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(1)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">399.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">229.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=4274" rel="nofollow" data-product_id="4274" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-7084 product type-product status-publish has-post-thumbnail product_cat-day-tap-dan-hoi product_cat-dung-cu-tap-ca-nhan product_tag-bo-5-day-dan-hoi product_tag-bo-day-dan-hoi-the-duc product_tag-bo-day-tap-the-thao-tai-nha product_tag-day-khang-luc product_tag-day-ngu-sac-the-duc first instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bo-5-day-tap-the-duc-dan-hoi-chinh-hang-mdbuddy-md1366/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/bo-5-day-tap-the-duc-dan-hoi-12.jpg 900w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="7084" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bo-5-day-tap-the-duc-dan-hoi-chinh-hang-mdbuddy-md1366/">Bộ 5 dây tập thể dục đàn hồi chính hãng MDBuddy MD1366</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(2)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">1.499.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">899.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=7084" rel="nofollow" data-product_id="7084" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-4069 product type-product status-publish has-post-thumbnail product_cat-dung-cu-ca-nhan-khac product_tag-bo-5-tham-cao-su-bao-ve-khuyu-tay-dau-goi product_tag-bo-tham-tap product_tag-dung-cu-bao-ve-khuyu-tay-khop-goi product_tag-dung-cu-tap-luyen product_tag-tham-tap instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bo-5-tham-cao-su-tap-luyen-doi-chan-mdbudyd-md1373/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-550x550.jpg 550w, https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/06/MDbudyd-MD1373-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="4069" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bo-5-tham-cao-su-tap-luyen-doi-chan-mdbudyd-md1373/">Bộ 5 thảm cao su tập luyện đôi chân MDBuddy MD1373</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(1)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">399.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">199.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=4069" rel="nofollow" data-product_id="4069" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-4735 product type-product status-publish has-post-thumbnail product_cat-day-tap-dan-hoi product_cat-dung-cu-tap-ca-nhan product_tag-day-dan-hoi product_tag-day-dan-hoi-tap-the-duc product_tag-day-khang-luc product_tag-dung-cu-da-nang product_tag-dung-cu-tap-chan product_tag-dung-cu-tap-tay last instock sale shipping-taxable purchasable product-type-variable has-default-attributes">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bo-day-dan-hoi-tap-the-duc-resistance-tube-md1317-moi-tap/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1317-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="4735" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bo-day-dan-hoi-tap-the-duc-resistance-tube-md1317-moi-tap/">Bộ dây đàn hồi tập thể dục Resistance Tube MD1317</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(4)</div></div>
	<span class="price"><span class="woocommerce-Price-amount amount">169.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> &ndash; <span class="woocommerce-Price-amount amount">199.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
</div><div class="add-to-cart-button"><a href="https://mdbuddy.vn/product/bo-day-dan-hoi-tap-the-duc-resistance-tube-md1317-moi-tap/" rel="nofollow" data-product_id="4735" class=" add_to_cart_button product_type_variable button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-7834 product type-product status-publish has-post-thumbnail product_cat-day-tap-dan-hoi product_tag-day-dan-hoi product_tag-day-dan-hoi-tap-yoga product_tag-day-tap-yoga product_tag-phu-kien-tap-yoga first instock sale shipping-taxable purchasable product-type-variable has-default-attributes">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bo-day-tap-the-duc-dan-hoi-resistance-band-md1320/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/12/6369187279_682788216.jpg 900w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="7834" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bo-day-tap-the-duc-dan-hoi-resistance-band-md1320/">Bộ dây tập thể dục đàn hồi Resistance Band MD1320</a></p></div><div class="price-wrapper">
	<span class="price"><span class="woocommerce-Price-amount amount">219.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> &ndash; <span class="woocommerce-Price-amount amount">399.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
</div><div class="add-to-cart-button"><a href="https://mdbuddy.vn/product/bo-day-tap-the-duc-dan-hoi-resistance-band-md1320/" rel="nofollow" data-product_id="7834" class=" add_to_cart_button product_type_variable button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-4634 product type-product status-publish has-post-thumbnail product_cat-day-tap-khang-luc product_tag-day-khang-luc product_tag-day-tap-bung product_tag-day-tap-chan product_tag-day-tap-tay product_tag-day-tap-the-duc instock sale shipping-taxable purchasable product-type-simple">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/bo-day-tap-the-luc-toan-than-suspension-md1361a/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/07/MDbuddy-MD1361A-1-1.jpg 750w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="4634" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/bo-day-tap-the-luc-toan-than-suspension-md1361a/">Bộ dây tập thể lực toàn thân Suspension MD1361A</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(2)</div></div>
	<span class="price"><del><span class="woocommerce-Price-amount amount">990.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">499.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></span>
</div><div class="add-to-cart-button"><a href="/shop/?add-to-cart=4634" rel="nofollow" data-product_id="4634" class="ajax_add_to_cart add_to_cart_button product_type_simple button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->

<div class="product-small col has-hover post-7090 product type-product status-publish has-post-thumbnail product_cat-boxing product_cat-thiet-bi-phong-gym product_tag-do-tap-boxing product_tag-gang-tay-boxing product_tag-gang-tay-dam-boc product_tag-gang-tay-muay-thai product_tag-phu-kien-boxing last instock sale shipping-taxable purchasable product-type-variable has-default-attributes">
	<div class="col-inner">
	
<div class="badge-container absolute left top z-1">
		<div class="callout badge badge-circle"><div class="badge-inner secondary on-sale"><span class="onsale">Giảm giá!</span></div></div>
</div>
	<div class="product-small box ">
		<div class="box-image">
			<div class="image-zoom">
				<a href="https://mdbuddy.vn/product/gang-tay-boxing-chinh-hang-mdbuddy/">
					<img width="250" height="250" src="https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-250x250.jpg" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" srcset="https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-250x250.jpg 250w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-150x150.jpg 150w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-300x300.jpg 300w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-768x768.jpg 768w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-510x510.jpg 510w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3-100x100.jpg 100w, https://mdbuddy.vn/home/wp-content/uploads/2018/09/gang-tay-boxing-md1902-10oz-3.jpg 900w" sizes="(max-width: 250px) 100vw, 250px" />				</a>
			</div>
			<div class="image-tools is-small top right show-on-hover">
							</div>
			<div class="image-tools is-small hide-for-small bottom left show-on-hover">
							</div>
			<div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
				  <a class="quick-view" data-prod="7090" href="#quick-view">Xem nhanh</a>			</div>
					</div><!-- box-image -->

		<div class="box-text box-text-products">
			<div class="title-wrapper"><p class="name product-title"><a href="https://mdbuddy.vn/product/gang-tay-boxing-chinh-hang-mdbuddy/">Bộ đôi găng tay boxing chính hãng MDBuddy MD1902 (1 đôi)</a></p></div><div class="price-wrapper"><div class="container-rating"><div class="star-rating"><span style="width:100%">Được xếp hạng <strong class="rating">5.00</strong> 5 sao</span></div> <div class="count-rating">(1)</div></div>
	<span class="price"><span class="woocommerce-Price-amount amount">649.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span> &ndash; <span class="woocommerce-Price-amount amount">699.000<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></span>
</div><div class="add-to-cart-button"><a href="https://mdbuddy.vn/product/gang-tay-boxing-chinh-hang-mdbuddy/" rel="nofollow" data-product_id="7090" class=" add_to_cart_button product_type_variable button primary is-flat mb-0 is-small">Thêm vào giỏ</a></div>		</div><!-- box-text -->
	</div><!-- box -->
		</div><!-- .col-inner -->
</div><!-- col -->
</div><!-- row --><div class="container">
<nav class="woocommerce-pagination">
	<ul class="page-numbers nav-pagination links text-center"><li><span aria-current='page' class='page-number current'>1</span></li><li><a class='page-number' href='https://mdbuddy.vn/shop/page/2/'>2</a></li><li><a class='page-number' href='https://mdbuddy.vn/shop/page/3/'>3</a></li><li><a class='page-number' href='https://mdbuddy.vn/shop/page/4/'>4</a></li><li><a class='page-number' href='https://mdbuddy.vn/shop/page/5/'>5</a></li><li><a class='page-number' href='https://mdbuddy.vn/shop/page/6/'>6</a></li><li><a class='page-number' href='https://mdbuddy.vn/shop/page/7/'>7</a></li><li><a class="next page-number" href="https://mdbuddy.vn/shop/page/2/"><i class="icon-angle-right"></i></a></li></ul></nav>
</div>

		</div><!-- shop container -->
		</div>
</div>

</main><!-- #main -->
@endsection