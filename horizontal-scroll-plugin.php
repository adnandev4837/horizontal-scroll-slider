<?php
/*
Plugin Name: Horizontal Scroll Slider
Plugin URI:  https://theadnan.com
Description: Use the shortcode [horizontal_scroll_slider] in posts or pages to display the horizontal scroll section.
Version:     1.0
Author:      Muhammad Adnan
Author URI:  https://theadnan.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined('ABSPATH') or die('Unauthorized request.');

function horizontal_scroll_section_shortcode() {?>
 <style>
.link-slide-content {
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  display: block;
  margin: 20px 0 0 0;
  transition: all 0.3s ease-in-out;
 font-size: 15px;
   color: #343434;
  text-decoration: none;
   font-weight:600;
}

/*a:hover {*/
/*  color: #6e4ce1;*/
/*}*/

#horizontal-scoll {
  padding: 10px 0;

}

.horizontal-scoll-wrapper {
  overflow: hidden;
  height: 525px;
}

.horizontal {
  display: flex;
 height: 525px;
}

.horizontal > div {
  display: flex;
  flex-shrink: 0;
  padding: 0 5px;
}

.horizontal > div:first-child {
  padding: 0 5px 0 15px;
}

.horizontal > div:last-child {
  padding: 0 15px 0 5px;
}

.horizontal .card {
  align-items: stretch;
  width: 350px;
margin:40px 0  0 20px;
}
.slide-img{
    width: 420px;
    height:330px !important;
}
.hed-slide-content{
    font-size:20px;
    color:#141414;
}
.inner-slide-content{
    color: #9CA3AF;
    font-size:13px;
}
.animate-up{
flex-direction: column;
margin:180px 40px 0 100px;
}

.link-end-slide-content{
  
      font-size:20px;
    color:#141414;
}
.link-start-slide-content{
  
      font-size:20px;
    color:#141414;
}
.end-card{
      margin-top:180px; 
}
@media screen and (max-width: 992px) {
 .animate-up{
margin:180px 0 0 0;
}
}
@media only screen and (max-width: 700px) and (min-width: 320px) {
#horizontal-scoll {
top: 100px;
}
}
  </style>

<section id="horizontal-scoll">
  <div class="horizontal-scoll-wrapper">
      
    <div class="horizontal">
               <div class="animate-up">
          <h3 class="first-hed">Case Studies</h3>
             <a class="link-start-slide-content" href="/">See All Case Studies <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a>
          </div>
     
         <div class="nav-horzontal-scroller">
      <div>
        <div class="card">
          <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/Perfect-SaaS-solution-1.png'; ?>" alt="portfilio" class="slide-img">
          <div classs="slide-content">
  <h3 class="hed-slide-content">Perfect SaaS solution</h3>
  <p class="inner-slide-content">Create the perfect SaaS solution for Startups: How BinaryCodeBarn can help validate your business idea.</p>
  <a class="link-slide-content" href="/" target="_blank">Read case study  <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a></div>
        </div>
      </div>
      <div>
           
        <div class="card">
           <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/Future-of-Home-1.png'; ?>" alt="portfilio" class="slide-img">
          <div classs="slide-content">
  <h3 class="hed-slide-content">Future of Home Renovation</h3>
  <p class="inner-slide-content">Embark on the journey of home renovation, you may be seeking innovative solutions to visualise design ideas.</p>
  <a class="link-slide-content" href="/" target="_blank">Read case study <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a></div>
        </div>
      </div>
      <div>
        <div class="card">
		<img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/Unlock-Agility-Scalability-1.png'; ?>" alt="portfilio" class="slide-img">
          <div classs="slide-content">
  <h3 class="hed-slide-content">Unlock Agility & Scalability</h3>
  <p class="inner-slide-content">Navigate the evolving landscape of software development and understand it's importance.</p>
  <a class="link-slide-content" href="/" target="_blank">Read case study <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a></div>
        </div>
      </div>
      <div>
        <div class="card">
		  <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/Health-Tech-Appointment-1.png'; ?>" alt="portfilio" class="slide-img">
          <div classs="slide-content">
  <h3 class="hed-slide-content">Healthtech Appointment App</h3>
  <p class="inner-slide-content">Navigate the automotive industry and understand the role of innovation in driving growth.</p>
  <a class="link-slide-content" href="/" target="_blank">Read case study <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a></div>
        </div>
      </div>
      <div>
        <div class="card">
		<img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/Journey-Towards-Sustainable-1.png'; ?>" alt="portfilio" class="slide-img">
          <div classs="slide-content">
  <h3 class="hed-slide-content">Sustainable Recycling with AI</h3>
  <p class="inner-slide-content">Venture into the realm of sustainable recycling & seek innovative solutions to maximise efficiency.</p>
  <a class="link-slide-content" href="/" target="_blank">Read case study <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a></div>
        </div>
      </div>
      <div>
        <div class="card">
		<img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/Elevate-Your-Financial-1.png'; ?>" alt="portfilio" class="slide-img">
          <div classs="slide-content">
  <h3 class="hed-slide-content">Financial Management</h3>
  <p class="inner-slide-content">Navigate the landscape of finance & understand the importance of financial planning.</p>
  <a class="link-slide-content" href="/" target="_blank">Read case study  <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a></div>
        </div>
      </div>
      <div class="end-card">
          <div class="card">
        <a class="link-end-slide-content" href="/">See All Case Studies <img src="<?php echo plugin_dir_url(__FILE__) . 'assets/images/expand_circle_down.png'; ?>" alt="portfilio" width="20"></a>
    </div>  </div>
     </div>
    </div>
  </div>
</section>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js'></script>
<script>
if (window.innerWidth > 700)  {
  gsap.registerPlugin(ScrollTrigger);

let horizontalSection = document.querySelector('.horizontal');

console.log(horizontalSection.scrollWidth);

gsap.to('.horizontal', {
  x: () => horizontalSection.scrollWidth * -1,
  xPercent: 100,
  scrollTrigger: {
    trigger: '.horizontal',
    start: 'center center',
    end: '+=2000px',
    pin: '#horizontal-scoll',
    scrub: true,
    invalidateOnRefresh: true
  }
});}

  if ( window.innerWidth < 700) {
  gsap.registerPlugin(ScrollTrigger);

let horizontalSection = document.querySelector('.horizontal');

console.log(horizontalSection.scrollWidth);

gsap.to('.horizontal', {
  x: () => horizontalSection.scrollWidth * -1,
  xPercent: 100,
  scrollTrigger: {
    trigger: '.horizontal',
     start: '0',
    end: '+=2000px',
    pin: '#horizontal-scoll',
    scrub: 1,
    invalidateOnRefresh: true
  }
});}
</script>
<?php
}

add_shortcode('horizontal_scroll_slider', 'horizontal_scroll_section_shortcode');