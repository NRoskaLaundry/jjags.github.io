<?php require_once('_header.php') ?>

   <div class="video-btn">
      <a href="#overlay">
         <img src="<?=url('_assets/img/play.svg')?>" alt="play icon">
         <p>Company Video</p>
      </a>
   </div>

   <div class="overlay video-play" id="overlay"> 
      <a href="#">&times;</a>
      <div class="konten-video">
      <iframe width="100%" height="500" src="https://www.youtube.com/embed/4XWmUrc0CRE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
   </div>
   <div id="about" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-body">
                     <div class="card-flex-column">
                        <div class="about_header">
                           <img src="<?=url('_assets/img/logo/logo.png')?>" alt="Logo rumah laundry" width="220">
                           <p>Jasa laundry tercepat dan termurah se-Panam.</p>
                        </div>
                        <div class="about_us">
                           <h2>- Tentang Kami -</h2>
                           <p>Rumah Laundry merupakan suatu pelayanan di bidang jasa yang menggunakan media online untuk memudahkan pelanggan menemukan jasa laundry. Selain mudah dan cepat, kami menyediakan berbagai macam paket laundry yang sesuai dengan budget masyarakat Panam.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

<?php require_once('_footer.php') ?>