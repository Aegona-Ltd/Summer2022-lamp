
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.js" integrity="sha512-Xo0Jh8MsOn72LGV8kU5LsclG7SUzJsWGhXbWcYs2MAmChkQzwiW/yTQwdJ8w6UA9C6EVG18GHb/TrYpYCjyAQw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css" integrity="sha512-KXol4x3sVoO+8ZsWPFI/r5KBVB/ssCGB5tsv2nVOKwLg33wTFP3fmnXa47FdSVIshVTgsYk/1734xSk9aFIa4A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="index.css">
  <script src='https://www.google.com/recaptcha/api.js?' async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="index.js" type="text/javascript"></script>
</head>
<body>
    
    <div id="a" class="ui container ">
        <div class="ui two column very relaxed stackable grid">
          <div class="column bg-image">
            <div class="field">
                <button id="btn1" class="ui button" ><i class="address card icon"></i>CONTACT US</button>
            </div>
            <form  class="ui form" id="myform" method="POST">
                <div class="field">
                    <h1 style="color: darkblue;">SEND US A MESSAGE</h1>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" id="fullname" name="fullname" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})+$" placeholder="FULL NAME" required >
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="home icon"></i>
                        <input type="text" id="companyname" name="companyname" pattern="^([a-zA-Z0-9]+|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{1,}|[a-zA-Z0-9]+\s{1}[a-zA-Z0-9]{3,}\s{1}[a-zA-Z0-9]{1,})+$" placeholder="COMPANY NAME" required >
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="mobile icon"></i>
                        <input type="text" id="businessphone" name="businessphone" pattern="^\d{10}$" placeholder="BUSINESS PHONE" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="envelope icon"></i>
                        <input type="email" id="email" name="email" pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$" placeholder="EMAIL" required>
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="envelope icon"></i>
                        <input type="password" id="password" name="password"  placeholder="PASSWORD" required>
                    </div>
                </div>
                    <div class="g-recaptcha" data-sitekey="6Le90ZUjAAAAAFpiWYrO31ETaTEcE1x877I5mCU3"  data-callback="verifyCaptcha"></div><br>
                    <button id="btn2" type="submit" name="submit" onclick ='load_ajax()' class="ui button">SEND MESSAGE</button>
              </form>
          </div>
          <div class="column bg-image" style="background-image: url('https://images.pexels.com/photos/1707823/pexels-photo-1707823.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
            <div class="ui form" style="margin-top: 50px;">
                <div class="ui logo-area">
                    <img src="https://www.aegona.com/themes/gavias_comely/assets/image/contact-us-page/logo.png" >
                </div>
                <div id="text">
                    <h3>Aegona is an IT service company based in Ho Chi Minh city, VietNam. At Aegona we provide.</h3>
                </div>
                <div id="text">
                    <ul>
                        <li>Software Development</li>
                        <li>Software Testing</li>
                        <li>Automation Testing and Software Maintenance services for North America, Japan, Singapore and VietNam.</li>
                     </ul>
                </div>

                <hr/>
                <div id="text">
                    <h2>INFORMATION</h2>
                </div>
                <div id="text">
                    <ul>
                        <li>Address: QTSC Building 9 Quang Trung Software City Tan Chanh Hiep Ward, District 12, Ho Chi Minh City, Viet Nam</li>
                        <li>Email: contact@aegona.com</li>
                        <li>Phone: +84 28 7109 2939</li>
                     </ul>
                </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>