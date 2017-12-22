
<?php $this->fetch('title', $title); ?>

<!-- Top liner element -->
<?= $this->element('top-liner') ?>



<div class="section">
     <div class="container">
         <div class="columns has-text-centered">
            <div class="column">
               <figure class="image is-inline-block">
                   <img src="/webroot/img/assets/logo/switchographie.png">   
               </figure>
            </div>
         </div>
     </div>
</div>

<section class="hero is-white pad-bot-10 pad-top-10 is-hidden-mobile" style="border-top:2px solid black; border-bottom: 2px solid black;">
    <div class="container">
        <div class="columns has-text-centered">
            <div class="column">
              <span class="pad-rgt-10 pad-lft-10 is-uppercase is-family-second is-font-600 has-text-switch-orange">
                  Bienvenue 
              </span>
              <i class="fa fa-dot-circle-o has-text-switch-grey" aria-hidden="true"></i>
              <span class="pad-rgt-10 pad-lft-10 is-uppercase is-family-second is-font-600">
                  SwitchMe
              </span>
              <i class="fa fa-dot-circle-o has-text-switch-grey" aria-hidden="true"></i>
              <span class="pad-rgt-10 pad-lft-10 is-uppercase is-family-second is-font-600">
                  SwitchBlog
              </span>
              <i class="fa fa-dot-circle-o has-text-switch-grey" aria-hidden="true"></i>
              <span class="pad-rgt-10 pad-lft-10 is-uppercase is-family-second is-font-600">
                  Contact
              </span>
              <i class="fa fa-dot-circle-o has-text-switch-grey" aria-hidden="true"></i>
              <span class="pad-rgt-10 pad-lft-10 is-uppercase is-family-second is-font-600">
                  A Propos
              </span>
            </div>
        </div>
    </div>
</section>
<!-- Loader switchography main-slider -->
<?= $this->element('switchography_main') ?>

<!-- Switchography business description -->
<section class="section hero is-medium is-white">
  <div class="container">
    <div class="columns has-text-centered">
      <div class="column is-one-third has-text-centered is-centered">
           <div>
               <figure class="image is-96x96 is-inline-block">
                 <img src="/webroot/img/home/asset-1.png" alt="">
               </figure>             
           </div> 
           <h2 class="is-size-5-widescreen is-size-6-mobile is-uppercase mar-top-50 is-font-700">
               Wedding &amp; Portrait Photographer
           </h2>
           <p class="pad-top-20">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi, voluptatibus iusto accusamus beatae exercitationem magnam corporis quis quia esse adipisci quod ratione nulla fugit? Doloremque repellendus, perferendis asperiores exercitationem!
           </p>
      </div>
      <div class="column is-one-third has-text-centered is-centered">
           <div>
               <figure class="image is-96x96 is-inline-block">
                 <img src="/webroot/img/home/asset-2-alt.png" alt="">
               </figure>             
           </div> 
           <h2 class="is-size-5-widescreen is-size-6-mobile is-uppercase mar-top-50 is-font-700">
               Qualité Professionnelle Garantie...Souriez!
           </h2>
           <p class="pad-top-20">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi, voluptatibus iusto accusamus beatae exercitationem magnam corporis quis quia esse adipisci quod ratione nulla fugit? Doloremque repellendus, perferendis asperiores exercitationem!
           </p>

      </div>
      <div class="column is-one-third has-text-centered is-centered">
           <div>
               <figure class="image is-96x96 is-inline-block">
                 <img src="/webroot/img/home/asset-3.png" alt="">
               </figure>             
           </div> 
           <h2 class="is-size-5-widescreen is-size-6-mobile is-uppercase mar-top-50 is-font-700">
               Une expérience marquée par bientôt 10 ans de clichés
           </h2>
           <p class="pad-top-20">
             Lorem ipsum dolor sit amet, consectetur adipisicing elit. A eligendi, voluptatibus iusto accusamus beatae exercitationem magnam corporis quis quia esse adipisci quod ratione nulla fugit? Doloremque repellendus, perferendis asperiores exercitationem!
           </p>
      </div>
    </div>
  </div>
</section>


<!-- Switchography Blog and other stuff -->
<section class="hero pad-top-50 pad-bot-50" style="background:#f7f7f7;">
    <div class="container is-widescreen is-overflow-hidden">
        <div class="columns is-5 is-variable">
          <!-- Articles area -->
          <div class="column is-8">
             <div class="has-text-centered is-white box is-none-shadow is-none-radius">
                <article>
                    <h3 class="is-size-6-widescreen is-size-7-mobile is-font-600 is-family-second has-text-switch-grey is-uppercase">FRONT PAGE SLIDESHOW, PHOTOGRAPHY</h3>
                    <h1 class="is-size-2-widescreen is-size-4-mobile is-font-700 has-text-switch-black is-uppercase">A TIMELY PHOTOSHOOTING IN NATURE</h1>
                    <figure class="image">
                      <img src="/webroot/img/home/articles/mock.jpg" alt="">
                    </figure>
                    <p class="has-text-left pad-top-20">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolore ipsam beatae minus fugit ab voluptates molestiae asperiores, quos cum! Harum assumenda porro iusto aperiam rerum illo deleniti, eum tenetur.
                    </p>

                    <button class="button is-outlined is-none-radius is-medium is-switch-black mar-top-30 mar-bot-50">Continuer la lecture</button>

                    <div class="level is-mobile">
                      <div class="level-left">
                          <div class="level-item">
                             <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black">Temps de lecture: 3 min</h4>
                          </div>  
                      </div>
                      <div class="level-right">
                        <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black level-item">Partage: |</h4>
                        <span class="level-item"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                      </div>
                    </div>

                </article>
             </div>
             <div class="has-text-centered is-white box is-none-shadow is-none-radius">
                <article>
                    <h3 class="is-size-6-widescreen is-size-7-mobile is-font-600 is-family-second has-text-switch-grey is-uppercase">FRONT PAGE SLIDESHOW, PHOTOGRAPHY</h3>
                    <h1 class="is-size-2-widescreen is-size-4-mobile is-font-700 has-text-switch-black is-uppercase">A TIMELY PHOTOSHOOTING IN NATURE</h1>
                    <figure class="image">
                      <img src="/webroot/img/home/articles/mock.jpg" alt="">
                    </figure>
                    <p class="has-text-left pad-top-20">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolore ipsam beatae minus fugit ab voluptates molestiae asperiores, quos cum! Harum assumenda porro iusto aperiam rerum illo deleniti, eum tenetur.
                    </p>

                    <button class="button is-outlined is-none-radius is-medium is-switch-black mar-top-30 mar-bot-50">Continuer la lecture</button>

                    <div class="level is-mobile">
                      <div class="level-left">
                          <div class="level-item">
                             <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black">Temps de lecture: 3 min</h4>
                          </div>  
                      </div>
                      <div class="level-right">
                        <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black level-item">Partage: |</h4>
                        <span class="level-item"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                      </div>
                    </div>

                </article>
             </div>


             <div class="has-text-centered is-white box is-none-shadow is-none-radius">
                <article>
                    <h3 class="is-size-6-widescreen is-size-7-mobile is-font-600 is-family-second has-text-switch-grey is-uppercase">FRONT PAGE SLIDESHOW, PHOTOGRAPHY</h3>
                    <h1 class="is-size-2-widescreen is-size-4-mobile is-font-700 has-text-switch-black is-uppercase">A TIMELY PHOTOSHOOTING IN NATURE</h1>
                    <figure class="image">
                      <img src="/webroot/img/home/articles/mock1.jpg" alt="">
                    </figure>
                    <p class="has-text-left pad-top-20">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolore ipsam beatae minus fugit ab voluptates molestiae asperiores, quos cum! Harum assumenda porro iusto aperiam rerum illo deleniti, eum tenetur.
                    </p>

                    <button class="button is-outlined is-none-radius is-medium is-switch-black mar-top-30 mar-bot-50">Continuer la lecture</button>

                    <div class="level is-mobile">
                      <div class="level-left">
                          <div class="level-item">
                             <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black">Temps de lecture: 3 min</h4>
                          </div>  
                      </div>
                      <div class="level-right">
                        <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black level-item">Partage: |</h4>
                        <span class="level-item"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                      </div>
                    </div>

                </article>
             </div>

             <div class="has-text-centered is-white box is-none-shadow is-none-radius">
                <article>
                    <h3 class="is-size-6-widescreen is-size-7-mobile is-font-600 is-family-second has-text-switch-grey is-uppercase">FRONT PAGE SLIDESHOW, PHOTOGRAPHY</h3>
                    <h1 class="is-size-2-widescreen is-size-4-mobile is-font-700 has-text-switch-black is-uppercase">A TIMELY PHOTOSHOOTING IN NATURE</h1>
                    <figure class="image">
                      <img src="/webroot/img/home/articles/mock1.jpg" alt="">
                    </figure>
                    <p class="has-text-left pad-top-20">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi dolore ipsam beatae minus fugit ab voluptates molestiae asperiores, quos cum! Harum assumenda porro iusto aperiam rerum illo deleniti, eum tenetur.
                    </p>

                    <button class="button is-outlined is-none-radius is-medium is-switch-black mar-top-30 mar-bot-50">Continuer la lecture</button>

                    <div class="level is-mobile">
                      <div class="level-left">
                          <div class="level-item">
                             <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black">Temps de lecture: 3 min</h4>
                          </div>  
                      </div>
                      <div class="level-right">
                        <h4 class="is-size-6-widescreen is-size-7-mobile is-uppercase is-family-second is-font-600 has-text-switch-black level-item">Partage: |</h4>
                        <span class="level-item"><i class="fa fa-facebook" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-twitter" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-pinterest-p" aria-hidden="true"></i></span>
                        <span class="level-item"><i class="fa fa-google-plus" aria-hidden="true"></i></span>
                      </div>
                    </div>

                </article>
             </div>

          </div>
          <!-- Other stuff here - about me - newsletter -->
          <div class="column is-4">
              <!-- About Me Box -->
              <div class="box is-none-radius is-none-shadow">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700">
                      A propos
                  </h3>  
                  <figure class="image">
                    <img src="/webroot/img/home/me.jpg" alt="Aimcy Switch Switchography" title="Aimcy Switch Switchography">
                  </figure>
                  <p class="is-family-second">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, non? Beatae voluptate autem nam iure eum ullam animi doloremque odit consectetur, cumque, vero explicabo, asperiores facilis sapiente architecto dignissimos laborum!
                  </p>
              </div>
              <!-- Popular posts -->
              <div class="box is-none-radius is-none-shadow">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700 pad-bot-20">
                      Billets Populaires
                  </h3>  
                  
                  <div class="">
                    <article class="media">
                        <figure class="media-left">
                          <p class="image is-128x128">
                            <img src="/webroot/img/home/articles/mock.jpg" alt="">
                          </p>
                        </figure>
                        <div class="media-content">
                          <h3 class="is-font-500 is-family-second is-uppercase ">How to style the perfect look</h3>
                          <h4 class="has-text-switch-grey">23 Mai 2017</h4>
                        </div>
                    </article>
                  </div>

                  <div class="dotted-top-border pad-top-30">
                    <article class="media">
                        <figure class="media-left">
                          <p class="image is-128x128">
                            <img src="/webroot/img/home/articles/mock.jpg" alt="">
                          </p>
                        </figure>
                        <div class="media-content">
                          <h3 class="is-font-500 is-family-second is-uppercase ">How to style the perfect look </h3>
                          <h4 class="has-text-switch-grey">23 Mai 2017</h4>
                        </div>
                    </article>
                  </div>

                  <div class="dotted-top-border pad-top-30">
                    <article class="media">
                        <figure class="media-left">
                          <p class="image is-128x128">
                            <img src="/webroot/img/home/articles/mock.jpg" alt="">
                          </p>
                        </figure>
                        <div class="media-content">
                          <h3 class="is-font-500 is-family-second is-uppercase ">How to style the perfect look </h3>
                          <h4 class="has-text-switch-grey">23 Mai 2017</h4>
                        </div>
                    </article>
                  </div>
              </div>
              <!-- Advertising section -->
              <div class="box is-none-radius is-none-shadow">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700">
                      Publicité
                  </h3>  
                  <figure class="image">
                    <img src="/webroot/img/home/ads.jpg" alt="Publicité" title="Publicité">
                  </figure>
              </div>
              
              <!-- Newsletter -->
              <div class="box hero is-switch-black is-none-radius is-none-shadow">
                <h3 class="title is-size-4">Souscrivez à ma newsletter</h3>
                <h4 class="subtitle is-size-6 pad-top-10">
                  Afin d'être au courant de mes dernières publications, clichés et offres exclusives by Switchography
                </h4>
                  <form name="newsletter-subscribe">
                    <div class="field">
                       <div class="control is-expanded">
                          <input type="email" class="input is-medium" placeholder="Email" />
                       </div>
                    </div>

                    <div class="field">
                      <div class="control">
                          <button class="button is-medium is-fullwidth is-switch-orange has-text-white" type="submit">
                                <span class="icon">
                                  <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                <span>Souscrire</span>
                          </button>
                      </div>
                    </div>
                  </form>
              </div>

              <!-- Posts Récents -->
              <div class="box is-none-radius is-none-shadow">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700 pad-bot-20">
                      Billets Récents
                  </h3>  
                  
                  <div class="">
                    <article class="media">
                        <figure class="media-left">
                          <p class="image is-128x128">
                            <img src="/webroot/img/home/articles/mock.jpg" alt="">
                          </p>
                        </figure>
                        <div class="media-content">
                          <h3 class="is-font-500 is-family-second is-uppercase ">How to style the perfect look</h3>
                          <h4 class="has-text-switch-grey">23 Mai 2017</h4>
                        </div>
                    </article>
                  </div>

                  <div class="dotted-top-border pad-top-30">
                    <article class="media">
                        <figure class="media-left">
                          <p class="image is-128x128">
                            <img src="/webroot/img/home/articles/mock.jpg" alt="">
                          </p>
                        </figure>
                        <div class="media-content">
                          <h3 class="is-font-500 is-family-second is-uppercase ">How to style the perfect look </h3>
                          <h4 class="has-text-switch-grey">23 Mai 2017</h4>
                        </div>
                    </article>
                  </div>

                  <div class="dotted-top-border pad-top-30">
                    <article class="media">
                        <figure class="media-left">
                          <p class="image is-128x128">
                            <img src="/webroot/img/home/articles/mock.jpg" alt="">
                          </p>
                        </figure>
                        <div class="media-content">
                          <h3 class="is-font-500 is-family-second is-uppercase ">How to style the perfect look </h3>
                          <h4 class="has-text-switch-grey">23 Mai 2017</h4>
                        </div>
                    </article>
                  </div>
              </div>

              <!-- Advertising section -->
              <div class="box is-none-radius is-none-shadow is-hidden-mobile">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700 pad-bot-20">
                    Publicité
                  </h3>  
                  <div class="columns has-text-centered">

                    <div class="column">
                        <figure class="image">
                          <img src="/webroot/img/home/ads/ads1.jpg" alt="ads" title="ads">
                        </figure>
                    </div>
                    <div class="column">
                        <figure class="image">
                          <img src="/webroot/img/home/ads/ads2.jpg" alt="ads" title="ads">
                        </figure>
                    </div>
                  </div>

                  <div class="columns">
                                        <div class="column">
                        <figure class="image">
                          <img src="/webroot/img/home/ads/ads3.png" alt="ads" title="ads">
                        </figure>
                    </div>

                    <div class="column">
                        <figure class="image">
                          <img src="/webroot/img/home/ads/ads4.jpg" alt="ads" title="ads">
                        </figure>
                    </div>
                  </div>
            

              </div>

              <!-- Search Tag -->
              <div class="box is-none-radius is-none-shadow">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700 pad-bot-20">
                    Tags
                  </h3>  


              <div class="buttons">
                <span class="button is-outlined is-none-radius is-switch-black">One</span>
                <span class="button is-outlined is-none-radius is-switch-black">Two</span>
                <span class="button is-outlined is-none-radius is-switch-black">Three</span>
                <span class="button is-outlined is-none-radius is-switch-black">Four</span>
                <span class="button is-outlined is-none-radius is-switch-black">Five</span>
                <span class="button is-outlined is-none-radius is-switch-black">Six</span>
                <span class="button is-outlined is-none-radius is-switch-black">Seven</span>
                <span class="button is-outlined is-none-radius is-switch-black">Eight</span>
                <span class="button is-outlined is-none-radius is-switch-black">Nine</span>
                <span class="button is-outlined is-none-radius is-switch-black">Ten</span>
                <span class="button is-outlined is-none-radius is-switch-black">Eleven</span>
                <span class="button is-outlined is-none-radius is-switch-black">Twelve</span>
                <span class="button is-outlined is-none-radius is-switch-black">Thirteen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Fourteen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Fifteen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Sixteen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Seventeen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Eighteen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Nineteen</span>
                <span class="button is-outlined is-none-radius is-switch-black">Twenty</span>
              </div>


              </div>
              <!-- Mini search bar -->
              <div class="box is-none-radius is-none-shadow">
                  <h3 class="is-size-6-widescreen is-size-5-mobile is-uppercase is-font-700 pad-bot-20">
                    Recherche
                  </h3>  

                  <form name="side-form">
                    <div class="field has-addons">
                      <div class="control is-expanded">   
                          <input type="text" class="input is-medium">
                      </div>
                      <div class="control">
                          <button type="submit" class="button is-medium">
                                <i class="fa fa-search is-medium" aria-hidden="true"></i>                          
                          </button>
                      </div>
                    </div>
                  </form>
              </div>
  

          </div>
        </div>
    </div>
</section>


