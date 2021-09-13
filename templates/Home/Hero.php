
<section class="hero is-info is-fullheight-with-navbar is-100vh">
  <!-- Hero Head -->
  <div class="hero-head">
    <?php include('./templates/Navbar.php') ?>
  </div>

  <div class="hero-body">
    <div class="container has-text-centered pb-6">
      <svg xmlns="http://www.w3.org/2000/svg" width="228" height="228" viewBox="0 0 24 24" style="fill: #ffffff;transform:; msFilter:;"><path d="m20.772 10.155-1.368-4.104A2.995 2.995 0 0 0 16.559 4H7.441a2.995 2.995 0 0 0-2.845 2.051l-1.368 4.104A2 2 0 0 0 2 12v5c0 .738.404 1.376 1 1.723V21a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2h12v2a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-2.277A1.99 1.99 0 0 0 22 17v-5a2 2 0 0 0-1.228-1.845zM7.441 6h9.117c.431 0 .813.274.949.684L18.613 10H5.387l1.105-3.316A1 1 0 0 1 7.441 6zM5.5 16a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 5.5 16zm13 0a1.5 1.5 0 1 1 .001-3.001A1.5 1.5 0 0 1 18.5 16z"></path></svg>
      <p class="title">
      OBD-II Trouble Codes
      </p>
      <p class="subtitle">
        Human readable version of DTC codes
      </p>
      <form 
        class="control m-5 is-flex is-flex-direction-column is-justify-content-center is-align-items-center" 
        action="<?php echo './search.php/' . ($_GET['code'] )?>"
        method="GET"
      >
        <div class="control has-icons-left m-3">
          <input class="input is-20rem is-rounded" type="text" placeholder="Search..." name="code" required>
          <span class="icon is-small is-left">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);"><path d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z"></path></svg>
          </span>
        </div>
        <input type="submit" name="submit" value="Search Trouble Codes" class="button is-rounded mt-5 has-text-weight-medium">
      </form>
    </div>
  </div>
</section>
