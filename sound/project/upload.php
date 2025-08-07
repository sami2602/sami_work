<!DOCTYPE html>
<!-- 
Template Name: Miraculous - Online Music Store Html Template
Version: 1.0.0
Author: Kamleshyadav
Website: 
Purchase: 
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Miraculous - Online Music Store Html Template</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Music">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/swiper/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/nice_select/nice-select.css">
    <link rel="stylesheet" type="text/css" href="assets/js/plugins/player/volume.css">
	<link rel="stylesheet" type="text/css" href="assets/js/plugins/scroll/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>
    <!----Main Wrapper Start---->
    <div class="ms_main_wrapper ms_profile">
        <!---Side Menu Start--->
        <div class="ms_sidemenu_wrapper">
            <div class="ms_nav_close">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </div>
            <div class="ms_sidemenu_inner">
                <div class="ms_logo_inner">
                    <div class="ms_logo">
                        <a href="index.php"><img src="assets/images/logo.png" alt="" class="img-fluid"/></a>
                    </div>
                    <div class="ms_logo_open">
                        <a href="index.php"><img src="assets/images/open_logo.png" alt="" class="img-fluid"/></a>
                    </div>
                </div>
                <div class="ms_nav_wrapper">
                    <ul>
                        <li><a href="index.php" title="Discover">
						<span class="nav_icon">
							<span class="icon icon_discover"></span>
						</span>
						<span class="nav_text">
							discover
						</span>
						</a>
                        </li>
                        <li><a href="album.php" title="Albums">
						<span class="nav_icon">
							<span class="icon icon_albums"></span>
						</span>
						<span class="nav_text">
							albums
						</span>
						</a>
                        </li>
                        <li><a href="artist.php" title="Artists">
						<span class="nav_icon">
							<span class="icon icon_artists"></span>
						</span>
						<span class="nav_text">
							artists
						</span>
						</a>
                        </li>
                        <li><a href="genres.php" title="Genres">
						<span class="nav_icon">
							<span class="icon icon_genres"></span>
						</span>
						<span class="nav_text">
							genres
						</span>
						</a>
                        </li>
                        <li><a href="top_track.php" title="Top Tracks">
						<span class="nav_icon">
							<span class="icon icon_tracks"></span>
						</span>
						<span class="nav_text">
							top tracks
						</span>
						</a>
                        </li>
                        <li><a href="free_music.php" title="Free Music">
						<span class="nav_icon">
							<span class="icon icon_music"></span>
						</span>
						<span class="nav_text">
							free music
						</span>
						</a>
                        </li>
                        <li><a href="stations.php" title="Stations">
						<span class="nav_icon">
							<span class="icon icon_station"></span>
						</span>
						<span class="nav_text">
							stations
						</span>
						</a>
                        </li>
                    </ul>
                    <ul class="nav_downloads">
                        <li><a href="download.php" class="active" title="Downloads">
						<span class="nav_icon">
							<span class="icon icon_download"></span>
						</span>
						<span class="nav_text">
							downloads
						</span>
						</a>
                        </li>
                        <li><a href="purchase.php" title="Purchased">
						<span class="nav_icon">
							<span class="icon icon_purchased"></span>
						</span>
						<span class="nav_text">
							purchased
						</span>
						</a>
                        </li>
                        <li><a href="favourite.php" title="Favourites">
						<span class="nav_icon">
							<span class="icon icon_favourite"></span>
						</span>
						<span class="nav_text">
							favourites
						</span>
						</a>
                        </li>
                        <li><a href="history.php" title="History">
						<span class="nav_icon">
							<span class="icon icon_history"></span>
						</span>
						<span class="nav_text">
							history
						</span>
						</a>
                        </li>
                    </ul>
                    <ul class="nav_playlist">
                        <li><a href="feature_playlist.php" title="featured Playlist">
						<span class="nav_icon">
							<span class="icon icon_fe_playlist"></span>
						</span>
						<span class="nav_text">
							featured playlist
						</span>
						</a>
                        </li>
                        <li><a href="add_playlist.php" title="Create Playlist">
						<span class="nav_icon">
							<span class="icon icon_c_playlist"></span>
						</span>
						<span class="nav_text">
							create playlist
						</span>
						</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!---Main Content Start--->
        <div class="padder_top80">
            <!---Header--->
            <div class="ms_header">
                <div class="ms_top_left">
                    <div class="ms_top_search">
                        <input type="text" class="form-control" placeholder="Search Music Here..">
                        <span class="search_icon">
							<img src="assets/images/svg/search.svg" alt="">
						</span>
                    </div>
                    <div class="ms_top_trend">
                        <span><a href="#"  class="ms_color">Trending Songs :</a></span> <span class="top_marquee"><a href="#">Dream your moments, Until I Met You, Gimme Some Courage, Dark Alley (+8 More)</a></span>
                    </div>
                </div>
                <div class="ms_top_right">
                    <div class="ms_top_lang">
                        <span data-toggle="modal" data-target="#lang_modal">languages <img src="assets/images/svg/lang.svg" alt=""></span>
                    </div>
                    <div class="ms_top_btn">
                        <a href="upload.php" class="ms_btn">upload</a>
                        <a href="javascript:;" class="ms_admin_name">Hello Bella <span class="ms_pro_name">ns</span>													
						</a>
						<ul class="pro_dropdown_menu">
							<li><a href="profile.php">Profile</a></li>
							<li><a href="manage_acc.php" target="_blank">Pricing Plan</a></li>
							<li><a href="blog.php" target="_blank">Blog</a></li>
							<li><a href="">Setting</a></li>
							<li><a href="">Logout</a></li>
						</ul>
                    </div>
                </div>
            </div>
            <!----Upload and Share Wrapper Start---->
            <div class="ms_upload_wrapper marger_top60">
                <div class="ms_upload_box">
                    <h2>Upload & Share Your Music With The World</h2>
                    <img src="assets/images/svg/upload.svg" alt="">
                    <div class="ms_upload_btn">
                        <a href="#" class="ms_btn">save files</a>
                    </div>
                    <span> or </span>
                    <p>Drag And Drop Music Files</p>
                </div>
                <div class=" marger_top60">
                    <div class="ms_upload_box">
                        <div class="ms_heading">
                            <h1>Track Information</h1>
                        </div>
                        <div class="ms_pro_form">
                            <div class="form-group">
                                <label>Track Name *</label>
                                <input type="text" placeholder="Dream Your Moments" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Artist’s Name *</label>
                                <input type="text" placeholder="Ava Cornish, Brian Hill" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Select Album</label>
                                <select class="form-control">
								<option>Cloud Nine</option>
								<option value="1">Cyber Sonnet </option>
								<option value="2">Cloud Nine</option>
								<option value="3">Cyber Sonnet</option>
								<option value="4">Cloud Nine</option>
							</select>
                            </div>
                            <div class="form-group">
                                <label>Select Privacy</label>
                                <select class="form-control">
								<option>Public</option>
								<option value="1">Private</option>
								<option value="2">Public</option>
								<option value="3">Private</option>
								<option value="4">Public</option>
							</select>
                            </div>
                            <div class="pro-form-btn text-center marger_top15">
                                <div class="ms_upload_btn">
                                    <a href="#" class="ms_btn">Upload Now</a>
                                    <a href="#" class="ms_btn">cancle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----Main div close---->
        </div>
    <?php
include("footer.php")
?>