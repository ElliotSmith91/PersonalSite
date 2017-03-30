    <footer class="footer cf" role="contentinfo">
      <div class="wrap section--center">
        <p class="footer-copyright l--text-center"><?php
          // Parse Kirbytext to support dynamic year,
          // but remove all HTML like paragraph tags:
          echo html::decode($site->copyright()->kirbytext())
        ?></p>

        <p class="footer-madewithkirby l--text-center">
          <a href="http://getkirby.com/made-with-kirby-and-love">Made with Kirby and <b class="heart">♥</b></a>
        </p>

      </div>
    </footer>
    <a href="#" class="to-top" id="to-top" style="display:none" style="opacity: 0">
      Top
    </a>
    <?= js('assets/js/app.js') ?>
    <?= js('@auto') ?>
  </body>
</html>
