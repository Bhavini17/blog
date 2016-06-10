@extends('layouts.master')

@section('body')

                
        <!-- Sub-header area -->
        
        <div class="pm-sub-header-container">
        
        	<div class="pm-sub-header-info">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <p class="pm-page-title">Gallery</p>
                            <p class="pm-page-message">Get an in depth look through our medical gallery</p>
                           
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="pm-sub-header-breadcrumbs">
            	
                <div class="container">
                	<div class="row">
                    	<div class="col-lg-12">
                        	
                            <ul class="pm-breadcrumbs">
                            	<li><a href="{{URL:: asset('index')}}">Home </a></li>
                                <li><i class="fa fa-angle-right"></i></li>
                                <li>Gallery</li>
                            </ul>
                            
                            <!--<ul class="pm-post-navigation">
                            	<li class="pm_tip_static_top" title="Prev. Post"><a href="#" class="fa fa-angle-left"></a></li>
                                <li class="pm_tip_static_top" title="Next Post"><a href="#" class="fa fa-angle-right"></a></li>
                            </ul>-->
                            
                        </div>
                    </div>
                </div>
                
            </div>
        
        </div>
        
 		<!-- Sub-header area end -->
        
        <!-- BODY CONTENT starts here -->
        
        <!-- PANEL 1 -->
        <div class="container pm-containerPadding-top-80 pm-containerPadding-bottom-30">
        
        	<div class="row">
            	<div class="col-lg-12">
                	
                    <ul class="pm-isotope-filter-system">
                    	<li class="pm-isotope-filter-system-expand">Currently viewing <i class="fa fa-angle-down"></i>
                        </li>
                    	<li><a href="#" class="current">All</a></li>
                        <li><a href="#">Advanced Technology</a></li>
                        <li><a href="#">Kids Care</a></li>
                        <li><a href="#">Patient Care</a></li>
                        <li><a href="#">Professional Staff</a></li>
                        <li><a href="#">Pharmaceutical Care</a></li>
                        <li><a href="#">Research &amp; Development</a></li>
                    </ul>
                    
                </div>
            </div>
        
        </div>
        <!-- PANEL 1 end -->
                
        <!-- PANEL 2 -->
        <div class="container pm-containerPadding-top-20 pm-containerPadding-bottom-30">
        
        	<div class="row isotope" id="gallery-posts">
            
            	<!-- Gallery post -->
                <div class="isotope-item size1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                
                    <div class="pm-gallery-post-item-container" style="background-image:url(img/gallery/post1.jpg);">
                    
                    	<div class="pm-gallery-post-item-info-container">
                        
                        	<div class="pm-gallery-item-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu porta elit, in pulvinar elit. Aenean finibus fringilla lorem et vulputate. Nunc gravida ut ante sit amet lobortis <a href="#">[...]</a></p>
                                
                                <ul class="pm-gallery-item-btns">
            	                                    
                    				<li><a class="fa fa-video-camera lightbox" data-rel="prettyPhoto[gallery]" href="https://www.youtube.com/watch?v=CvIr-2lMLsk"></a></li>
            						<li><a class="fa-bars" href="#"></a></li>
        						</ul>
                                
                            </div>
                        
                        </div>
                        
                        <a class="pm-gallery-item-expander fa fa-plus" href="#"></a>
                         
                    </div>
                    
                    <div class="pm-gallery-item-title">
                        <p>Medical Record Keeping</p>
                    </div>
                    
                </div>
                <!-- Gallery post -->
                
                <div class="isotope-item size2 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="pm-gallery-post-item-container" style="background-image:url(img/gallery/post2.jpg);">
                    
                    	<div class="pm-gallery-post-item-info-container">
                        
                        	<div class="pm-gallery-item-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu porta elit, in pulvinar elit. Aenean finibus fringilla lorem et vulputate. Nunc gravida ut ante sit amet lobortis <a href="#">[...]</a></p>
                                
                                <ul class="pm-gallery-item-btns">
            	                                    
                    				<li><a class="fa fa-camera lightbox" data-rel="prettyPhoto[gallery]" href="img/gallery/post6.jpg"></a></li>
            						<li><a class="fa-bars" href="#"></a></li>
        						</ul>
                                
                            </div>
                        
                        </div>
                        
                        <a class="pm-gallery-item-expander fa fa-plus" href="#"></a>
                         
                    </div>
                    
                    <div class="pm-gallery-item-title">
                        <p>Blood Pressure Checkup</p>
                    </div>
                    
                </div>
                
                <div class="isotope-item size3 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="pm-gallery-post-item-container" style="background-image:url(img/gallery/post3.jpg);">
                    
                    	<div class="pm-gallery-post-item-info-container">
                        
                        	<div class="pm-gallery-item-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu porta elit, in pulvinar elit. Aenean finibus fringilla lorem et vulputate. Nunc gravida ut ante sit amet lobortis <a href="#">[...]</a></p>
                                
                                <ul class="pm-gallery-item-btns">
            	                                    
                    				<li><a class="fa fa-camera lightbox" data-rel="prettyPhoto[gallery]" href="img/gallery/post3.jpg"></a></li>
            						<li><a class="fa-bars" href="#"></a></li>
        						</ul>
                                
                            </div>
                        
                        </div>
                        
                        <a class="pm-gallery-item-expander fa fa-plus" href="#"></a>
                         
                    </div>
                    
                    <div class="pm-gallery-item-title">
                        <p>Kids Treatment</p>
                    </div>
                    
                </div>
                
                <div class="isotope-item size2 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="pm-gallery-post-item-container" style="background-image:url(img/gallery/post4.jpg);">
                    
                    	<div class="pm-gallery-post-item-info-container">
                        
                        	<div class="pm-gallery-item-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu porta elit, in pulvinar elit. Aenean finibus fringilla lorem et vulputate. Nunc gravida ut ante sit amet lobortis <a href="#">[...]</a></p>
                                
                                <ul class="pm-gallery-item-btns">
            	                                    
                    				<li><a class="fa fa-camera lightbox" data-rel="prettyPhoto[gallery]" href="img/gallery/post4.jpg"></a></li>
            						<li><a class="fa-bars" href="#"></a></li>
        						</ul>
                                
                            </div>
                        
                        </div>
                        
                        <a class="pm-gallery-item-expander fa fa-plus" href="#"></a>
                         
                    </div>
                    
                    <div class="pm-gallery-item-title">
                        <p>Health Counseling</p>
                    </div>
                    
                </div>
                
                <div class="isotope-item size3 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="pm-gallery-post-item-container" style="background-image:url(img/gallery/post5.jpg);">
                    
                    	<div class="pm-gallery-post-item-info-container">
                        
                        	<div class="pm-gallery-item-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu porta elit, in pulvinar elit. Aenean finibus fringilla lorem et vulputate. Nunc gravida ut ante sit amet lobortis <a href="#">[...]</a></p>
                                
                                <ul class="pm-gallery-item-btns">
            	                                    
                    				<li><a class="fa fa-camera lightbox" data-rel="prettyPhoto[gallery]" href="img/gallery/post5.jpg"></a></li>
            						<li><a class="fa-bars" href="#"></a></li>
        						</ul>
                                
                            </div>
                        
                        </div>
                        
                        <a class="pm-gallery-item-expander fa fa-plus" href="#"></a>
                         
                    </div>
                    
                    <div class="pm-gallery-item-title">
                        <p>Advanced Lab</p>
                    </div>
                    
                </div>
                
                <div class="isotope-item size1 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    
                    <div class="pm-gallery-post-item-container" style="background-image:url(img/gallery/post6.jpg);">
                    
                    	<div class="pm-gallery-post-item-info-container">
                        
                        	<div class="pm-gallery-item-excerpt">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu porta elit, in pulvinar elit. Aenean finibus fringilla lorem et vulputate. Nunc gravida ut ante sit amet lobortis <a href="#">[...]</a></p>
                                
                                <ul class="pm-gallery-item-btns">
            	                                    
                    				<li><a class="fa fa-camera lightbox" data-rel="prettyPhoto[gallery]" href="img/gallery/post6.jpg"></a></li>
            						<li><a class="fa-bars" href="#"></a></li>
        						</ul>
                                
                            </div>
                        
                        </div>
                        
                        <a class="pm-gallery-item-expander fa fa-plus" href="#"></a>
                         
                    </div>
                    
                    <div class="pm-gallery-item-title">
                        <p>Well Trained Staff</p>
                    </div>
                    
                </div>
                              
            
            </div>
        
        </div>
        <!-- PANEL 2 end -->
        
        <!-- PANEL 3 -->
        <div class="container pm-containerPadding-bottom-80">
        
        	<div class="row">
            
            	<div class="col-lg-12">
                	
                    <ul class="pm-post-loaded-info">
                    	<li>
                        	<p>Viewing <strong>4</strong> of <strong>19</strong> posts</p>
                        </li>
                        <li>
                        	<a href="#">Load more &nbsp; <i class="fa fa-cloud-download"></i></a>
                        </li>
                    </ul>
                    
                </div>
            
            </div>
        
        </div>
        <!-- PANEL 3 end -->

    
    @endsection
        