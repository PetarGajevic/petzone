<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> 
 
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="/css/welcome.css" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
        <script
  src="https://code.jquery.com/jquery-3.5.1.slim.js"
  integrity="sha256-DrT5NfxfbHvMHux31Lkhxg42LY6of8TaYyK50jnxRnM="
  crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>

            <div class="div-main">
                <div class="navigation-left" id="navigation-left" style="z-index: 1; ">
                    <div class="logo">
                      <a href="/">
                        <img src="/site-images/pet zoona LOGO vector horizontalni i vertikalni copy.svg" height=60>
                      </a>
                    </div>
                    <div class="pet-blog-main">
                    <div class="pet-blog">
                        <p style="white-space: nowrap;">petZoona blog</p>
                    </div>
                    <div class="pet-blog-right" style="display: block;">
                      <ul style="width: 120px;">
                        <li><img src="site-images/Drop_down_strelica.svg"><a onclick="onClickDog()">Psi</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a href="blog-cats">Macke</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a>Ostali kucni ljubmci</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a>U pricu sa</a></li>
                        <li><img src="site-images/Drop_down_strelica.svg"><a>Nesvrstani</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="about-us-main">
                    <div class="about-us">
                        <p style="white-space: nowrap;">About Us</p>
                    </div>
                    <div class="about-us-right" onclick="window.location='/about';">
                      <p style="font-size: 15px;">Sa mnogo sarma pet shop mali svima nudi sto im fali i oprema i vrh hrana najstrucnije odabrana</p>
                    </div>
                  </div>
                    <div class="social"> 
                        <div class="social-div">
                        {{-- <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-facebook-square"></i> --}}
                        <img src="site-images/iconfinder_icon-04_2515843.svg">
                        <img src="site-images/iconfinder_icon-social-youtube_211929.svg">
                        <img src="site-images/iconfinder_Colored_Facebook3_svg_5365678.svg">
                        </div>
                        <div class="social-div-right">
                          <ul style="width: 120px; margin-top: 24px;">
                            <li><img src="site-images/Drop_down_strelica.svg"><a>Instagram</a></li>
                            <li><img src="site-images/Drop_down_strelica.svg"><a>Youtube</a></li>
                            <li><img src="site-images/Drop_down_strelica.svg"><a>Facebook</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
                <div class="right-side">

                        <div class="dog-section" id="dog-section" >
                          <div class="dog-left">

                          </div>
                          <div class="dog-right" style="margin-left: 270px;">
                            <div class="dog-categories">
                              <ul>
                                <li>Rast i Razvoj</li>
                                <li>Ishrana</li>
                                <li>Odraslo</li>
                                
                              </ul>
                            </div>
                      
                            <div class="dog-blog-main" style="width: 95%;">
                              <div class="dog-blog">
                                <a href="/posts/{{$posts->id}}">
                                <h3>Mačor</h3>
                                <div class="dog-date">
                                  <p class="blog-date" style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                                  <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                  <img src="site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                </div>
                              </a>
                              </div>

                              <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">

                              <div class="dog-blog">
                                <a href="/posts/{{$posts->id}}">
                                <h3>Mačor</h3>
                                <div class="dog-date">
                                  <p class="blog-date" style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                                  <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                  <img src="site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                </div>
                                </a>
                              </div>

                              <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">

                              <div class="dog-blog">
                                <a href="/posts/{{$posts->id}}">
                                <h3>Mačka</h3>
                                <div class="dog-date">
                                  <p class="blog-date" style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                                  <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                  <img src="site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                </div>
                                </a>
                              </div>

                              <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">

                              <div class="dog-blog">
                                <a href="/posts/{{$posts->id}}">
                                <h3>Mačka</h3>
                                <div class="dog-date">
                                  <p class="blog-date" style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                                  <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                  <img src="site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                </div>
                                </a>
                              </div>

                              <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">

                              <div class="dog-blog">
                                <a href="/posts/{{$posts->id}}">
                                <h3>Mačka</h3>
                                <div class="dog-date">
                                  <p class="blog-date" style="margin-right: 80px; color:#F6921B;">Blog je objavljen 20. decembra 2020</p>
                                  <p class="blog-sound" style="margin-right: 10px;">Dostupan zvucni sadrzaj</p>
                                  <img src="site-images/iconfinder_volume_audio_music_sound_5402437.svg">
                                </div>
                                </a>
                              </div>

                              <hr style="height:1px;border-width:0;color:#D8D8D8;background-color:#D8D8D8;">
                            </div>
                          </div>
                        </div>

                </div>
                </div>

       

                <script type="text/javascript">

                    
                      
                  
                   
                    
                    var slideIndex = 0;
                    showSlides();
                    
                    function showSlides() {
                      var i;
                      var slides = document.getElementsByClassName("mySlides");
                      var dots = document.getElementsByClassName("dot");
                      for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                      }
                      slideIndex++;
                      if (slideIndex > slides.length) {slideIndex = 1}    
                      for (i = 0; i < dots.length; i++) {
                      //  dots[i].className = dots[i].className.replace(" active", "");
                      }
                      slides[slideIndex-1].style.display = "block";  
                     // dots[slideIndex-1].className += " active";
                      setTimeout(showSlides, 5000); // Change image every 2 seconds
                    }

                    function onClick(){
                      document.getElementById("about-section").style.display = "block";
                      document.getElementById("slideshow-container").style.display = "none";
                      document.getElementById("dog-section").style.display = "none";
                    //  document.getElementById("navigation-left").style.position = "fixed";
                
                    }

                    function onClickDog(){
                      document.getElementById("slideshow-container").style.display = "none";
                      document.getElementById("about-section").style.display = "none";
                      document.getElementById("dog-section").style.display = "flex";
                   //   document.getElementById("navigation-left").style.position = "fixed";
                      
                    }

                   
                
                    </script>
    </body>
</html>