<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= __("MMCITE 9"); ?> | <?= $page->title; ?></title>
  <link rel="apple-touch-icon" sizes="180x180" href="<?= $config->urls->templates ?>assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= $config->urls->templates ?>assets/images/favicon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= $config->urls->templates ?>assets/images/favicon.png">
  <link rel="manifest" href="<?= $config->urls->templates ?>assets/images/site.webmanifest">
  <link rel="mask-icon" href="<?= $config->urls->templates ?>assets/images/safari-pinned-tab.svg" color="#1e191a">
  <meta name="apple-mobile-web-app-title" content="mmcit&eacute; 9">
  <meta name="application-name" content="mmcit&eacute; 9">
  <meta name="msapplication-TileColor" content="#1e191a">
  <meta name="theme-color" content="#ffffff">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" integrity="sha256-K3Njjl2oe0gjRteXwX01fQD5fkk9JFFBdUHy/h38ggY=" crossorigin="anonymous" rel="stylesheet">
  <link href="<?= $config->urls->templates ?>assets/styles/main.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates ?>assets/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?= $config->urls->templates ?>assets/slick/slick-theme.css"/>
  <meta name="description" content="<?= $page->desc; ?>"/>
  <meta property="og:locale" content="es_MX" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="MMCITE 9 | <?= $page->title; ?>" />
  <meta property="og:image" content="<?= $pages->get('/')->httpUrl.$page->images->first()->url ?>"/>
  <meta property="og:image:width" content="<?= $page->images->first()->width ?>"/>
  <meta property="og:image:height" content="<?= $page->images->first()->height ?>"/>
  <meta property="og:description" content="<?= $page->desc; ?>" />
  <meta property="og:url" content="<?= $page->httpUrl; ?>" />
  <meta property="og:site_name" content="MMCITE 9" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:title" content="MMCITE 9 | <?= $page->title; ?>" />
  <meta name="twitter:description" content="<?= $page->desc; ?>" />
  <meta name="twitter:image" content="<?= $pages->get('/')->httpUrl.$page->images->first()->url ?>" />
</head>

<body>
<?php include('./_nav.php');  ?>

  <!--  Main content -->
  <main class="j-workspace ">
      <div class="j-wrap">
      <!-- section welcome -->
      <div class="menu-a">
            <h3><a href="/" class="inactive">HOME</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="/productos" class="inactive">PRODUCTS</a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="<?=$page->parent()->url?>" class="inactive"><?=$page->parent()->title?></a></h3>
            <p>&nbsp;&nbsp;>>&nbsp;&nbsp;</p>
            <h3><a href="<?=$page->url?>" class="active"><?=$page->title?></a></h3>
      </div>
         <!-- section individual-product  -->
         <section class="individual-product">
            <div class="carousel-container" >
               <div class="slider-for">
            <?php foreach ($page->images as $key => $img) {
                   $imgCar=$img->width(800, array('quality' => 90, 'upscaling' => true, 'cropping' => false));?>
              <img src="<?=$imgCar->url?>" alt="">
            <?php } ?>
          </div>
          <div class="slider-nav">
            <?php foreach ($page->images as $key => $img) {
                   $imgCar=$img->width(800, array('quality' => 90, 'upscaling' => true, 'cropping' => false));?>
              <img class="slider-nav-product" src="<?=$imgCar->url?>" alt="">
            <?php } ?>
          </div>

            </div>
            <div class="individual-product-container">
               <div class="individual-title-content">
                  <h2><?=$page->title?></h2>
               </div>
               <div class="quantity-container">
                  <div class="quantity-item">
                     <p>Cantidad :</p>
                     <input class="appearance-number-input" type="number" name="quantity-number" id="quantity-number" min="1" max="9999" value="1">
                  </div>
               </div>
               <div class="social-shares">
                  <button id="shareBtn" class="redes-btn ripple" style="background-color: #4266b2;"><img src="<?= $config->urls->templates ?>assets/images/facebook-logo.svg" height="16px"> Compartir</button>
                  <button class="redes-btn ripple" style="background-color: #217415;" data-type="whatsapp"><img src="<?= $config->urls->templates ?>assets/images/whatsapp.svg" height="16px" >Compartir</button>
                  <button class="redes-btn ripple" style="background-color: #c5c5c5;" data-type="e-mail"><img src="<?= $config->urls->templates ?>assets/images/close-envelope.svg" height="16px" >Compartir</button>
               </div>
               <?=str_replace("<p>","<p class='p-individual-text'>",$page->desc)?>

               <?=$page->specifications?>

          <a href="#openModal" >
          <button class="individual-btn">
              <!--<img src="https://dummyimage.com/24x24/000/fff" alt="">-->
              Cotizar
          </button></a>
            </div>
         </section>
         <!-- Modal section  -->
      <section id="openModal" class="openModal">
        <div class="modal">
          <a href="#closeModal" class="closeModal">X</a>
          <h2>PARK BENCHES-RIVAGE</h2>
          <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sequia consequuntur magni.</p>
          <table>
            <tbody>
              <tr>
                <th>Product</th>
                <th class="th-description">Description</th>
                <th>quantity</th>
              </tr>
            <form id="addCart">
            <?php foreach ($page->model as $key => $model) { ?>
              <tr>
                <input type="hidden" name="idProduct[]" value="<?=$page->id?>">
                <input type="hidden" name="idModel[]" value="<?=$model->id?>">
                <th><img src="<?=$model->img->url?>" alt="<?=$model->title?>"></th>
                <th class="th-description"><p><?=$model->title?></p></th>
                <th class="th-quantity">
                  <input type="number" name="quantity[]" id="quantity-input" max="9999" value="0">
                </th>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <button id="btn-quotation">Cotizar</button>
           </form>
        </div>
      </section>
      <!-- section Tab
      <div class="tabs">
        <input type="radio" name="tabs" id="tabone" checked="checked">
        <label for="tabone">Description</label>
        <div class="tab">

        </div>

        <input type="radio" name="tabs" id="tabtwo">
        <label for="tabtwo">specifications</label>
        <div class="tab">

        </div>

        <input type="radio" name="tabs" id="tabthree">
        <label for="tabthree">Reviews</label>
        <div class="tab">

        </div>

            <input type="radio" name="tabs" id="tabfour">
        <label for="tabfour">Downloads</label>
        <div class="tab">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatnon proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
         </div> -->

         <!--  Section Disqus  -->
         <!-- <div id="disqus_thread"></div>
         <script>
           /**
           *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
           *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
           /*
           var disqus_config = function () {
           this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
           this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
           };
           */
           (function() { // DON'T EDIT BELOW THIS LINE
           var d = document, s = d.createElement('script');
           s.src = 'https://mmcite9-1.disqus.com/embed.js';
           s.setAttribute('data-timestamp', +new Date());
           (d.head || d.body).appendChild(s);
           })();
         </script>
         <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript> -->

     </div>
    <?php include('./_subs.php'); ?>
  </main>

<?php include('./_foot.php'); ?>
<script type="text/javascript">
  document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    mobile_iframe: true,
    href: '<?= $page->httpUrl ?>',
  }, function(response){});
}
$( "#addCart" ).submit(function( event ) {
  $("#openModal").css('opacity', '0');
    $.ajax({
      url      : '/add-cart',
      type     : 'post',
      dataType : 'html',
      data     : $(this).serialize(),
      success  : function(res){
        console.log(res);
        swal({
          title: "",
          text: "¿Qué desea hacer?",
          type: "success",
          showCancelButton: true,
          confirmButtonColor: "red",
          cancelButtonColor: "#000",
          confirmButtonText: "Ir a mi cotización",
          cancelButtonText: "Seguir agregando"
        }).then((result) => {
          if (result.value)
            window.location.href="/cotizar";
            
        });
      },error: function(){
          alert('Error al conectar al servidor...');
        }
      });
  event.preventDefault();
});
</script>