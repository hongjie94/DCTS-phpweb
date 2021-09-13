<?php
  $jsonFile = file_get_contents("../../codes.json");
  $array = json_decode($jsonFile, true);
  $DctArray = ($array['codes']);
?>

<!DOCTYPE html>
<html lang="en">
  <?php include('../Header.php') ?>
  <link rel="stylesheet" type="text/css" href="../../style.css"> 
  <title>DTC | P0001-P0199</title>
</head>
<body>
<?php include('../Navbar.php') ?>
  <div class="panel-block pt-6 noBorder">
    <form 
      class="control has-icons-left"
      action="../../search.php<?php echo '?code=' . ($_GET['code']) . '&submit=Search+Trouble+Codes' ?>"
      method="GET"
      >
      <input class="input is-rounded column is-one-quarter" type="text" placeholder="Search..." name="code" required>
      <span class="icon is-left">
      <svg class="w-6 h-6 p-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      </span>
      <input type="submit" name="submit" value="Search Trouble Codes" class="is-invisible">
    </form>
  </div>
  <div class="dropdown is-hoverable px-3 negativeMargin">
    <div class="dropdown-trigger py-2">
      <button class="button is-rounded" aria-haspopup="true" aria-controls="dropdown-menu">
        <span>DTC Codes</span>
        <span class="icon is-small">
          <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </span>
      </button>
    </div>
    <div class="dropdown-menu" id="dropdown-menu" role="menu">
      <div class="dropdown-content">
        <a href="/phpweb/templates/DTCs/P0001-P0199.php" class="dropdown-item is-active">
          P0001-P0199
        </a>
        <a href="/phpweb/templates/DTCs/P0200-P0299.php" class="dropdown-item">
          P0200-P0299
        </a>
        <a href="/phpweb/templates/DTCs/P0300-P0399.php" class="dropdown-item">
          P0300-P0399
        </a>
        <a href="/phpweb/templates/DTCs/P0400-P0499.php" class="dropdown-item">
          P0400-P0499
        </a>
        <a href="/phpweb/templates/DTCs/P0500-P0599.php" class="dropdown-item">
          P0500-P0599
        </a>
        <a href="/phpweb/templates/DTCs/P0600-P0699.php" class="dropdown-item">
          P0600-P0699
        </a>
        <a href="/phpweb/templates/DTCs/P0700-P0899.php" class="dropdown-item">
          P0700-P0899
        </a>
      </div>
    </div>
  </div>
  <div class="container is-fluid my-6 is-flex is-justify-content-center">
    <table class="table is-hoverable">
      <caption class="is-size-3 has-text-weight-semibold">DTC Codes - P0001-P0199 </caption>
      <caption class="is-size-5 mb-5 has-text-weight-medium">Fuel and Air Metering </caption>
      <thead>
        <tr>
          <th>DTC</th>
          <th>Description</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($DctArray as $key => $val){ ?>
          
          <tr>
            <?php if(preg_match("/^[P]{1}\d{4}$/", $key) && substr($key, 1) >= 1 && substr($key, 1) <= 199 ) {?>
                <th class='pr-4'> <?php echo $key ?> </th>
                <td>
                  <a class="has-text-dark"
                    href="/phpweb/search.php?code=<?php echo $key ?>&submit=Search+Trouble+Codes">
                    <?php echo htmlspecialchars($val) ?>
                  </a>
                </td>
            <?php }?>
          </tr>  
        <?php } ?>
      </tbody>
    </table>
  </div>
<?php include('../Footer.php') ?>
</body>
</html>

