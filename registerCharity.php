<?php 
/*
     * @author Robin Nixon
     * @Date 10/03/2015
       @Source http://lpmj.net/4thedition/ 
     * 
     */
// Example 26-5: signup.php
  require_once 'header.php';

  echo <<<_END
  <script>
    function checkUser(user)
    {
      if (user.value == '')
      {
        O('info').innerHTML = ''
        return
      }

      params  = "user=" + user.value
      request = new ajaxRequest()
      request.open("POST", "checkuser.php", true)
      request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
      request.setRequestHeader("Content-length", params.length)
      request.setRequestHeader("Connection", "close")

      request.onreadystatechange = function()
      {
        if (this.readyState == 4)
          if (this.status == 200)
            if (this.responseText != null)
              O('info').innerHTML = this.responseText
      }
      request.send(params)
    }

    function ajaxRequest()
    {
      try { var request = new XMLHttpRequest() }
      catch(e1) {
        try { request = new ActiveXObject("Msxml2.XMLHTTP") }
        catch(e2) {
          try { request = new ActiveXObject("Microsoft.XMLHTTP") }
          catch(e3) {
            request = false
      } } }
      return request
    }
  </script>
  
_END;

  $error = $charity_name = $Reg_No = $charity_purpose = $charity_location = $CHY = $CRO = "";
  if (isset($_SESSION['charity_name'&&'Reg_No'&& 'charity_purpose'&&'charity_location' && 'CHY'&& 'CRO'])) destroySession();

  if (isset($_POST['charity_name'&&'Reg_No'&& 'charity_purpose'&&'charity_location' && 'CHY'&& 'CRO']))
  {
    $charity_name = sanitizeString($_POST['charity_name']);
    $Reg_No = sanitizeString($_POST['Reg_No']);
    $charity_purpose = sanitizeString($_POST['charity_purpose']);
    $charity_location = sanitizeString($_POST['charity_location']);
    $CHY = sanitizeString($_POST['CHY']);
    $CRO = sanitizeString($_POST['CRO']);

    if ($charity_name =="" || $Reg_No == "" || $charity_purpose == "" || $charity_location == ""|| $CHY =="" || $CRO =="" )
      $error = "Not all fields were entered<br><br>";
    else
    {
      $result = queryMysql("SELECT * FROM charities WHERE charity_name ='$charity_name");
      if ($result->num_rows)
        $error = "That charity already exists<br><br>";
      else
      {
        queryMysql("INSERT INTO charities VALUES('0','$charity_name', '$Reg_No','0','$charity_purpose', '$charity_location', '0', '$CHY', '$CRO', '0')");
        die("<h4>Charity is successfully registered!</h4>Please go to the homepage.<br><br>");
      }
    }
  }

  echo <<<_END
   <div class="container marketing">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <form name="Charity Register" method="post" action="registerCharity.php" role="form">$error
                <fieldset>
                    <h2>Register your Charity</h2>
          <br/>
                     <hr class="colorgraph">
                        <div class="form-group">
                             <input name="charity_name" type="text" id="charity_name" value"$charity_name" class="form-control input-lg" placeholder="Name of charity" required autofocus>
                        </div>   
                            <div class="form-group">
                             <input name="Reg_No" type="number" id="Reg_No" value"$Reg_No" class="form-control input-lg" placeholder="Charity Reg.No" required autofocus>
                        </div> 
                        <div class="form-group">
                             <input name="charity_purpose" type="text" id="charity_purpose" value"$charity_purpose" class="form-control input-lg" placeholder="Charity purpose" required autofocus>
                        </div> 
                        <div class="form-group">
                            <input type="text" name="charity_location" id="charity_location" value="$charity_location" class="form-control input-lg" placeholder="Principal location" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="CHY" id="CHY" value="$CHY" class="form-control input-lg" placeholder="CHY Number" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="CRO" id="CRO" value="$CRO" class="form-control input-lg" placeholder="CRO Number" required>
                        </div>
                      <div class="row">
                                 <div class="col-xs-6 col-sm-6 col-md-6">
                                <a href="index.php"  class="btn btn-lg btn-success btn-block">Back To HomePage</a> 
                            </div> 
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <input type="submit" name="submit" value="Register" class="btn btn-lg btn-primary btn-block">
                        </div>
                        </div>
                </fieldset>
            </form>
                <hr class="colorgraph">
        </div>
      </div>
        <hr class="featurette-divider">
   
            <!-- /END THE FEATURETTES -->
          
            <!-- FOOTER -->
            <footer>
                <p class="pull-right"><a href="#">Back to top</a></p>
                <p>2015 Students-NCI, &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
                </div>';
    
_END;
 ?> 

  </body>
</html>
