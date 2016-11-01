<div class="opti-state">

  <h2> Optimization status : </h2>
  <ul>
    <!-- Scripts states -->
    <li>
      <?php if (SCRIPT !== "footer"): ?>
        <span class="error">
          Scripts are loaded in the header :/
        </span>
        <a href="<?= URL;?>&script=footer"> we can optimize that... </a>
      <?php else: ?>
        <span class="success">
          Yohoo ! JS are not blocking the critical rendering path :)
        </span>
      <?php endif; ?>
    </li>
    <!-- CSS States -->

    <li>
      <?php if (CSS !== "inline"): ?>
        <span class="error">
          CSS above the fold are in an external stylesheet :(
          <a href="<?= URL;?>&css=inline"> we can optimize that... </a>
        </span>
      <?php else: ?>
        <span class="success">
          Yohoo ! CSS are not blocking the critical rendering path :)
        </span>
      <?php endif; ?>
    </li>


    <li>
      <?php if (JS !== "min"): ?>
        <span class="error">
          JS files are not minified :
          <a href="<?= URL;?>&js=min"> we can optimize that... </a>
        </span>
      <?php else: ?>
        <span class="success">
          Yohoo ! JS files are optimized thanks to the minification :)
        </span>
      <?php endif; ?>
    </li>


    <li>
      <?php if (SRCSET == "false"): ?>
        <span class="error">
          Img are too big, they are resized in CSS :/
          <a href="<?= URL;?>&srcset"> we can optimize that... </a>
        </span>
      <?php else: ?>
        <span class="success">
          Yohoo ! IMG are in perfect size thanks to srcset :)
        </span>
      <?php endif; ?>
    </li>



  </ul>


  <a href="<?= BASEURL;?>"> Click here to unoptimize this page </a>
</div>
