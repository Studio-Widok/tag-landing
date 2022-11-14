<?php include 'header.php';?>
<div id="container">
  <img class="lazyload" alt=""
    data-srcset="./media/bg-500.jpg 500w, ./media/bg-800.jpg 800w, ./media/bg-1280.jpg 1280w, ./media/bg-1920.jpg 1920w, ./media/bg.jpg 3000w"
    data-sizes="auto" id="bg">
  <img src="./media/logo.svg" alt="" id="logo">
  <div id="content" class="content content--wide column-outer-growing">
    <div id="contact" class="flex flex-justify-space-between">
      <div class="contact-column contact-column--main column-inner-growing">
        <p>opening hours:</p>
        <p>
          wednesday + thursday 19:00 &ndash; 1:00 <small>/we close doors at
            00:30</small><br>
          friday + saturday 19:00 &ndash; 2:00 <small>/we close doors at
            1:30</small>
        </p>
        <div class="r"></div>
      </div>
      <div class="contact-column contact-column--social column-inner-growing">
        <a href="https://www.instagram.com/tag.cocktails/" target="_blank"
          rel="noopener noreferrer" class="social-link">
          <img src="./media/instagram.svg" alt="">
        </a>
        <a href="https://www.facebook.com/tag.cocktails" target="_blank"
          rel="noopener noreferrer" class="social-link">
          <img src="./media/facebook.svg" alt="">
        </a>
      </div>
      <div
        class="contact-column contact-column--main column-inner-growing text-right">
        <p>
          Podwale 7/2 31-118 Kraków <br>
          <a
            href="mailto:booking@tagcocktails.com">booking@tagcocktails.com</a><br>
          <a href="tel:+48507898463">+48 507 898 463</a><br>
          <small>phone available only during opening hours</small>
        </p>
        <div class="r"></div>
      </div>
    </div>
  </div>
</div>
<?php include 'footer.php';?>
