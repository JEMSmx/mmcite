  <div class="header-container">
    <header class="main-nav"><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
      <div class="header-info">
        <div class="header-info-content" style="padding: 0 16px;">
          <div class="company-info">
            <div class="company-info-box">
              <img src="<?= $config->urls->templates ?>assets/images/phone-call.svg" alt="" height="16px">
              <a href="tel:+523338268184">+52 33 3826 8184</a>
            </div>
            <p>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</p>
            <div class="company-info-box">
              <img src="<?= $config->urls->templates ?>assets/images/envelope.svg" alt="" height="16px">
              <a href="mailto:sales@MMCITE.cz">ventas@mmcite.mx</a>
            </div>
          </div>
          <div class="company-register">
            <!--<div class="company-info-box">
              <img src="https://dummyimage.com/16x16/000/fff" alt="">
              <a href="#">SIGN IN</a>
            </div>
            <p>&nbsp;&nbsp;|&nbsp;&nbsp;</p>
            <div class="company-info-box">
              <img src="https://dummyimage.com/16x16/000/fff" alt="">
              <a href="#">REGISTRATION</a>
            </div>
            <p>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</p>
            <div class="company-info-box">
              <a href="#">EN-USA</a>
            </div>
            -->
            <div class="company-info-box">
              <!--<img src="https://dummyimage.com/16x16/000/fff" alt="">-->
              <a href="/cotizar">Cotización [<?=$cart->getTotalItem()?>]</a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-search-container">
        <div class="header-search-inner" style="padding: 16px;">
          <div class="header-search-images">
            <a href="/">
                <img src="<?= $config->urls->templates ?>assets/images/mmcite9_logo.svg" alt="">
            </a>
          </div>
          <div class="header-search-item">
            <form id="search">
              <input type="text" id="inputSearch" name="word" placeholder="Buscar">
              <button type="submit" class="img-button" style="background-image: url(<?= $config->urls->templates ?>assets/images/search.svg);"></button>
            </form>
          </div>
        </div>
      </div>
      <nav role="navigation">
        <ul>
          <a href="">
            <li>
              Acerca de
            </li>
          </a>
          <a href="/products">
            <li>
              Productos
            </li>
          </a>
          <a href="">
            <li>
              Noticias
            </li>
          </a>
          <a href="">
            <li>
              Referencias
            </li>
          </a>
          <a href="">
            <li>
              mmcite Social
            </li>
          </a>
          <a href="/contact">
            <li>
              Contacto
            </li>
          </a>
        </ul>
      </nav>
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </header>
  </div>
