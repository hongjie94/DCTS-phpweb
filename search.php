<?php

  // .Env Config
  require_once dirname(__FILE__) . '/vendor/autoload.php';
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv -> load();

  // API HOST / KEY
  $Host = $_ENV["API_HOST"];
  $Key = $_ENV["API_KEY"];

  // Get user input
  if(isset($_GET['submit'])){
    $Trouble_Code = $_GET['code'];
  }

  // Init curl_init
  $curl = curl_init();
  curl_setopt_array($curl, [
    CURLOPT_URL => "https://car-code.p.rapidapi.com/obd2/$Trouble_Code",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
      "x-rapidapi-host: $Host",
      "x-rapidapi-key: $Key"
    ],
  ]);

  // Get datas
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);

  // Error handler
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    $results = json_decode($response);
  }

?>

<!DOCTYPE html>
<html lang="en">
  <?php include('./templates/Header.php') ?>   
  <link rel="stylesheet" type="text/css" href="style.css"> 
  <title>DTC | Search </title>
  <body>
    <?php include('./templates/Navbar.php') ?>
    <section class="section is-medium min-80vh">
      <div class="panel-block p-0 mb-1 noBorder">
        <form 
          class="control has-icons-left"
          action="<?php echo '?code=' . ($_GET['code']) . '&submit=Search+Trouble+Codes' ?>"
          method="GET">
          <input class="input is-rounded column is-one-quarter" type="text" placeholder="Search" name='code' required>
          <span class="icon is-left">
            <svg class="w-6 h-6 p-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
          </span>
          <input type="submit" name="submit" value="Search Trouble Codes" class="button is-invisible">
        </form>
      </div>
      <div class="dropdown is-hoverable  negativeMargin">
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
          <a href="/phpweb/templates/DTCs/P0001-P0199.php" class="dropdown-item">
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
    <?php if($results->error) {?>
      <h1 class="title is-capitalized pt-5"> No Result found for: "<?php echo $Trouble_Code ?>"</h1>
      <h2 class="subtitle mb-5 is-capitalized has-text-danger">
        <?php echo $results->error ?>
      </h2>
    <?php }?>
    <?php if(!($results->error)) {?>
    
      <div class="content">
      <h1 class="title is-capitalized pt-5"> <?php echo $Trouble_Code ?> </h1>

      <h3>Definition:</h3>   
      <p><?php echo $results->definition ?></p>
      <h3>Cause:</h3>
        <ul class="ml-1rem">
          <?php foreach(($results->cause) as $cause){?>
            <li> <?php echo $cause ?> </li>
          <?php } ?>
        </ul>
      </div>
    <?php }?>
  </section>      
  <?php include('./templates/Footer.php') ?>
  </body>
</html> 