<script type='text/javascript'>
  $(document).ready(function() {
    // Check for click events on the navbar burger icon
    $(".navbar-burger").click(function() {
        // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");

    });
  });
</script>

<section class="hero is-info">
  <nav class="navbar has-background-info">
    <div class="container">
      <div class="navbar-brand">
        <a class="navbar-item" href="/phpweb">
          <img src="https://firebasestorage.googleapis.com/v0/b/imagesbucket-468ae.appspot.com/o/DTC.png?alt=media&token=6b836723-0d3b-40dc-8ba7-bab345b42d96" alt="Logo">
        </a>
        <span class="navbar-burger" data-target="navbarMenuHeroB">
          <span></span>
          <span></span>
          <span></span>
        </span>
      </div>
      <div id="navbarMenuHeroB" class="navbar-menu has-background-info">
        <div class="navbar-end has-background-info">
          <a 
            <?php if ($_SERVER['SCRIPT_NAME'] == "/phpweb/index.php") { ?> 
              class="navbar-item is-active has-text-light" 
            <?php } else {  ?>
              class="navbar-item has-text-light"
            <?php } ?> 
            href="/phpweb"
            >
            Home
          </a>
          <a 
          class="navbar-item has-text-light" 
          href="/phpweb/#About">
          About
          </a>
          <a 
            <?php if ($_SERVER['SCRIPT_NAME'] == "/phpweb/documentation.php") { ?> 
              class="navbar-item is-active has-text-light" 
            <?php } else {  ?>
              class="navbar-item has-text-light"
            <?php } ?> 
            href="/phpweb/#Documentation"
            >
            Documentation
          </a>
          <span class="navbar-item">
            <a class="button is-info is-inverted button is-rounded" href="https://www.dmv.de.gov/VehicleServices/inspections/pdfs/dtc_list.pdf" download target="_blank">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M11.25 9.331V.75a.75.75 0 011.5 0v8.58l1.949-2.11A.75.75 0 1115.8 8.237l-3.25 3.52a.75.75 0 01-1.102 0l-3.25-3.52A.75.75 0 119.3 7.22l1.949 2.111z"></path><path fill-rule="evenodd" d="M2.5 3.75a.25.25 0 01.25-.25h5.5a.75.75 0 100-1.5h-5.5A1.75 1.75 0 001 3.75v11.5c0 .966.784 1.75 1.75 1.75h6.204c-.171 1.375-.805 2.652-1.77 3.757A.75.75 0 007.75 22h8.5a.75.75 0 00.565-1.243c-.964-1.105-1.598-2.382-1.769-3.757h6.204A1.75 1.75 0 0023 15.25V3.75A1.75 1.75 0 0021.25 2h-5.5a.75.75 0 000 1.5h5.5a.25.25 0 01.25.25v11.5a.25.25 0 01-.25.25H2.75a.25.25 0 01-.25-.25V3.75zM10.463 17c-.126 1.266-.564 2.445-1.223 3.5h5.52c-.66-1.055-1.098-2.234-1.223-3.5h-3.074z"></path></svg>
              </span>
              <span >Download</span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </nav>
</section>