<?php header("Content-type: text/css; charset: UTF-8"); ?>

#top, #bottom, #left, #right {
	background: #fff;
	position: fixed;
	z-index: 3;
	}
	#left, #right {
		top: 0; bottom: 0;
		width: <?php echo $site_border ?>;
		}
		#left { left: 0; }
		#right { right: 0; }

	#top, #bottom {
		left: 0; right: 0;
		height: <?php echo $site_border ?>;
		}
		#top { top: 0; }
		#bottom { bottom: 0; }

<!--[if lte IE 6]>
	<style>#top, #bottom, #left, #right { display: none; }</style>
<![endif]-->

@media

/* Fairly small screens including iphones */
only screen and (max-width: 500px),

/* iPads */
only screen and (min-device-width: 768px) and (max-device-width: 1024px)

{
	#top, #bottom, #left, #right { display: none; }
}

.frame-top-company {
	top: 0;
	right: <?php echo $site_border ?>;
	z-index: 3;
	position: fixed;
	height: <?php echo $site_border ?>;
	line-height: <?php echo $site_border ?>;
	color:#868e96;
	font-size: 80%;
	font-weight: 400;
	text-transform: uppercase;
	}

/* Nav icon positioning */

.position {
  position: fixed;
  top: 10px;
  left: 10px;
  -webkit-transition: .21s ease-in-out;
  -moz-transition: .21s ease-in-out;
  -o-transition: .21s ease-in-out;
  transition: .21s ease-in-out;
  z-index: 4;
}

@media screen and (min-width: 900px) {
  .position {
    position: fixed;
  }
}
/* Nav button */

#nav-toggle {
  width: 26px;
  height: 20px;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .21s ease-in-out;
  -moz-transition: .21s ease-in-out;
  -o-transition: .21s ease-in-out;
  transition: .21s ease-in-out;
  cursor: pointer;
}

#nav-toggle span, #nav-toggle.active span {
  display: block;
  position: absolute;
  height: 4px;
  width: 100%;
  background: #a0a0a0;
  border-radius: 4px;
  opacity: 1;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .21s ease-in-out;
  -moz-transition: .21s ease-in-out;
  -o-transition: .21s ease-in-out;
  transition: .21s ease-in-out;
}

#nav-toggle span:nth-child(1) {
  top: 0px;
}

#nav-toggle span:nth-child(2),#nav-toggle span:nth-child(3) {
  top: 8px;
}

#nav-toggle span:nth-child(4) {
  top: 16px;
}

#nav-toggle.active span:nth-child(1) {
  top: 8px;
  width: 0%;
  left: 50%;
}

#nav-toggle.active span:nth-child(2) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

#nav-toggle.active span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

#nav-toggle.active span:nth-child(4) {
  top: 8px;
  width: 0%;
  left: 50%;
}

/* Off Canvas Navigation */

.nav-col {
	max-height: 100vh;
	padding-top: 10vh;
	}

main {
  position: absolute;
  -webkit-transition: .21s ease-in-out;
  -moz-transition: .21s ease-in-out;
  -o-transition: .21s ease-in-out;
  transition: .21s ease-in-out;
}

aside {
	z-index: 4;
	opacity: 0;
	left: 0;
  height: 100vh;
  position: fixed;
  top: 0;
  background: #f4f4f4;
  -webkit-transition: .1s ease-in;
  -moz-transition: .1s ease-in;
  -o-transition: .1s ease-in;
  transition: .1s ease-in;
  -webkit-box-shadow: inset -10px -10px 12px -10px rgba(137, 137, 137, 0.3);
     -moz-box-shadow: inset -10px -10px 12px -10px rgba(137, 137, 137, 0.3);
          box-shadow: inset -10px -10px 12px -10px rgba(137, 137, 137, 0.3);
  pointer-events: none;
}

aside p {
  color: #000;
  padding: 20px;
}
/* JavaScript toggle */

.show-nav aside {
	pointer-events: auto;
  opacity: 1;
  -webkit-transition: .21s ease-out;
  -moz-transition: .21s ease-out;
  -o-transition: .21s ease-out;
  transition: .21s ease-out;
}
.show-nav main {
	transform: translateX(25%);
  -webkit-transition: .21s ease-in-out;
  -moz-transition: .21s ease-in-out;
  -o-transition: .21s ease-in-out;
  transition: .21s ease-in-out;
	width: 100vw;
	}
.show-nav main .spread {
  -webkit-transition: .21s ease-in-out;
  -moz-transition: .21s ease-in-out;
  -o-transition: .21s ease-in-out;
  transition: .21s ease-in-out;
	}

a {
  text-decoration: none;
  color: #6699cc;
}

a:hover {
  text-decoration: underline;
}
/* Remove radius from nav pills */
.nav-pills .nav-link {
  border-radius: 0rem !important;
}

/* Portfolio Spreads */
@media (min-width: 576px) {
.spread {
	padding-left: 16.666%;
}
}

.spread {
	min-height: 100vh;
	padding-top: 6%;
	position: relative;
	z-index: 1;
}

.padding-top-20 {
	padding-top: 20vh;
}

.title {
	background: #f4f4f4;
	padding-right: 16.666%;
}
.title:before {
	content: "";
  position: absolute;
  z-index: -1;
  max-width: 100%;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #f4f4f4;
  background-size: cover;
  background-repeat: no-repeat;
	}

.title-bg:before {
	content: "";
  position: absolute;
  z-index: -1;
  max-width: 100%;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-size: cover;
  background-repeat: no-repeat;
	}

.title-bg-<?php echo $project_1_nav ?>:before {
  background: url('../<?php echo $project_1_url ?>/0.jpg') center center;
  opacity: 0.1;
}

.title-bg-<?php echo $project_2_nav ?>, .title-bg-<?php echo $project_2_nav ?> small {
	color: #fff;
	}
.title-bg-project_2 small {
	text-shadow: 0px 0px 30px black;
	}

p.display-4 { display: inline; }

p.display-4 span {
	line-height: 1.5em;
	padding: 0.1em 0;
	box-shadow: 0.3em 0 0 <?php echo $txt_highlight ?>, -0.3em 0 0 <?php echo $txt_highlight ?>;
	background-color: <?php echo $txt_highlight ?>;
	}

.title-bg-<?php echo $project_2_nav ?>:before {
  background: url('../<?php echo $project_1_url ?>/0.jpg') center center;
  opacity: 0.8;
}

.gallery {
	padding-bottom: 75px;
}

img.gap-small {
	margin-bottom: 5px !important;
}

img.gap-wide {
	margin-bottom: 25px;
}

.mt-25 {
	padding-top: 25vh;
	}

/* Seamless responsive photo grid by Chris Coyier
	https://css-tricks.com/seamless-responsive-photo-grid/
 */

.masonry {
  /* Prevent vertical gaps */
  line-height: 0;

  -webkit-column-count: 2;
  -webkit-column-gap:   0px;
  -moz-column-count:    2;
  -moz-column-gap:      0px;
  column-count:         2;
  column-gap:           0px;
}

.masonry.gap-small {
  -webkit-column-gap:   5px;
  -moz-column-gap:      5px;
  column-gap:           5px;
}

.masonry.gap-wide {
  -webkit-column-gap:   25px;
  -moz-column-gap:      25px;
  column-gap:           25px;
}

.masonry img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
}

@media (max-width: 1200px) {
  .masonry {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 1000px) {
  .masonry {
  -moz-column-count:    2;
  -webkit-column-count: 2;
  column-count:         2;
  }
}
@media (max-width: 800px) {
	.show-nav main .spread {
	padding-left: 0%;
	}
  .masonry {
  -moz-column-count:    1;
  -webkit-column-count: 1;
  column-count:         1;
  }
}
}

/* SCROLLSPY */
/* based on spy by luismgonzalves
	 https://github.com/lmgonzalves/spy
*/

.page-header {
	position:fixed;
	top:0;
	left:<?php echo $site_border ?>;
	z-index:5;
	}

.page-nav {
	display:inline-block;
	position:fixed;
	height:<?php echo $site_border ?>;
	top:0;
	left:46px;
	overflow:hidden;
	z-index:5;
	}

.page-nav:before,.page-nav:after {
	position:absolute;
	content:"";
	left:0;
	width:100%;
	height:30%;
	opacity:1;
	z-index:1;
	pointer-events:none;
	-webkit-transition:0s 0.3s;
	transition:0s 0.3s;
	}

.page-nav:before{
  top:0;
  background-image:-webkit-linear-gradient(#fff, rgba(255,255,255,0));
  background-image:linear-gradient(#fff, rgba(255,255,255,0))
}
.page-nav:after{
  bottom:0;
  background-image:-webkit-linear-gradient(rgba(255,255,255,0), #fff);
  background-image:linear-gradient(rgba(255,255,255,0), #fff)
}

nav.active-spy {
	position:relative;
	width:100%;
	line-height:<?php echo $site_border ?>;
	pointer-events: none;
	}

nav.active-spy a {
	text-decoration: none;
	display:block;
	color:#868e96;
	font-size: 80%;
	font-weight: 400;
	text-transform: uppercase;
	}
