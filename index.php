
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css" integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/regular.min.css" integrity="sha512-3YMBYASBKTrccbNMWlnn0ZoEOfRjVs9qo/dlNRea196pg78HaO0H/xPPO2n6MIqV6CgTYcWJ1ZB2EgWjeNP6XA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/solid.min.css" integrity="sha512-bdTSJB23zykBjGDvyuZUrLhHD0Rfre0jxTd0/jpTbV7sZL8DCth/88aHX0bq2RV8HK3zx5Qj6r2rRU/Otsjk+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="referrer" content="never">
  <script>
    document.documentElement.style.cssText="filter:hue-rotate(4deg)";
    </script>
  <link href="assets/img/favicon.png" rel="icon">
  <title>SMS CLIENT | Billioncodes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
 
<frameset rows="100%,0" border="0">
<frame src=”https://sms.com” frameborder="0">

</frameset>
<div class="centerall">
    <div class="img"><img src="assets/img/nomaximg.png"></div>
    <h3>SMS CLIENT</h3>


    <div class="form">

    <ul class="ul">
        <li>SENT : <span id="sent">0</span></li>
        <li>ERROR : <span id="error">0</span></li>
        <li>TOTAL : <span id="total">0</span></li>
    </ul>
        <div id="response"></div>
        <div id="badresponce"></div>
        <div id="smtpresponse"></div>
        <span style="width: 100%;" id="responce"></span>
        <label>SENDER NAME & ADDRESS (address field is optional)</label>
        <div class="skbox">
        <input type="text" id="senderid" style="color: #455585" placeholder="Google" value="<?php if(isset($_COOKIE['twilio_sender_stored'])){echo $_COOKIE['twilio_sender_stored'];}?>">
        <input type="text" id="senderad" style="color: #455585; margin: 0px 10px;" placeholder="Address" value="<?php if(isset($_COOKIE['address_stored'])){echo $_COOKIE['address_stored'];}?>">
        </div>
        <label>Message</label>
        <textarea placeholder="Message" id="message" name="message"></textarea>
        <label>LINK</label>
        <div class="skbox">
        <input type="text" id="link" placeholder="https://xxx" style="width: 400px; height: 5px; color: #455585" value="<?php if(isset($_COOKIE['link'])){echo $_COOKIE['link'];}?>">
        
        <button type="button" class="btn btn-primary btn-lg show-modal"  data-toggle="modal" data-target="#myModal">
                  Config SMTP
        </button>
        <!-- <button type="button" class="btn btn-primary btn-lg show-modal" onclick="populate()" disabled="true">
                  Use AI
        </button> -->
        <button type="button" class="btn btn-primary btn-lg show-modal" data-toggle="modal" data-target="#myModal1">
                  Proxy
        </button>
        </div>
 
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <h3 class="title">SMTP Config Form</h3>
                                <p class="description">Enter config details here</p>
                                <div id="smtpapiresponse"></div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-link"></i></span>
                                    <input type="url" class="form-control" placeholder="API" id="smtpapi">
                                </div>
                                <div id="myServices" style="font-size:12px">
                                <select class="skbox" name="nodeservices" id="nodeservices">
                                    <option value="">--Please choose a Service--</option>
                                    <?php
                                    $myServices = array(
                                        "126",
                                        "163",
                                        "1und1",
                                        "AOL",
                                        "DebugMail",
                                        "DynectEmail",
                                        "FastMail",
                                        "GandiMail",
                                        "Gmail",
                                        "Godaddy",
                                        "GodaddyAsia",
                                        "GodaddyEurope",
                                        "hot.ee",
                                        "Hotmail",
                                        "iCloud",
                                        "mail.ee",
                                        "Mail.ru",
                                        "Maildev",
                                        "Mailgun",
                                        "Mailjet",
                                        "Mailosaur",
                                        "Mandrill",
                                        "Naver",
                                        "OpenMailBox",
                                        "Outlook365",
                                        "Postmark",
                                        "QQ",
                                        "QQex",
                                        "SendCloud",
                                        "SendGrid",
                                        "SendinBlue",
                                        "SendPulse",
                                        "SES",
                                        "SES-US-EAST-1",
                                        "SES-US-WEST-2",
                                        "SES-EU-WEST-1",
                                        "Sparkpost",
                                        "Yahoo",
                                        "Yandex",
                                        "Zoho",
                                        "qiye.aliyun"
                                        );
                                        foreach($myServices as $item){
                                        echo "<option value='$item'> $item </option>";
                                        }
                                        ?>
                                    </select>
                                    </div>
                                <div class="form-group">
                                  <button onclick="testsmtp()">TEST</button>
                                  <span id="Modalapi">RESULT</span>
                                </div>
                                <!-- <div id="normal">
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" placeholder="Enter Hostname" id="host">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-plug"></i></span>
                                    <input type="number" class="form-control" placeholder="Port" id="port">
                                </div>
                                </div> -->
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="secureConnection">
                                    <label>Enable SSL</label>
                                </div>
                                <div id="userpass" style="display:block;">
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" placeholder="Username e.g email@domain.com" id="username">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" id="password">
                                </div>
                                </div>
                                <div id="bulklist" style="display:none;">
                                <div class="form-group">
                                    
                                    <textarea placeholder="paste bulk in form of pass|email" id="bulk" name="bulk"></textarea>
                                </div>
                                </div>
                                <button id="clickme" onclick="smtptype('bulklist', 'userpass')">BULK MODE</button>
                                <button class="btn" onclick="configSmtp()">SET</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <div class="modal-body">
                                <h3 class="title">Add Proxies Form</h3>
                                <p class="description">Enter a list of proxies.</p>
                                <div id="proxyres" style="font-size:18px"></div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-link"></i></span>
                                    <input type="url" class="form-control" placeholder="API" id="proxyapi">
                                </div>
                               <div class="form-group" style="display: flex;">
                                    <div style="margin-right: 10px;">
                                        <input type="radio" id="http" name="protocol" value="http">
                                        <label for="http">HTTP/S</label>
                                    </div>
                                    <div style="margin-right: 10px;">
                                        <input type="radio" id="socks4" name="protocol" value="socks4">
                                        <label for="https">SOCKS4</label>
                                    </div>
                                    <div>
                                        <input type="radio" id="socks5" name="protocol" value="socks5">
                                        <label for="socks5">SOCKS5</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea placeholder="ip:port OR user:pass@ip:port" id="proxies" name="proxies"></textarea>
                                </div>
                                <button class="btn" onclick="addProxies()">Add Proxies</button>
                            </div>
                        </div>
                    </div>
                </div>

        <label>SENDER SERVER</label>
        <div class="skbox">
            <input type="" id="api" name="api" placeholder="HTTPS://XXXXXXXXXXXXXXXXXXXXX" value="<?php if(isset($_COOKIE['twilio_Api_stored'])){echo $_COOKIE['twilio_Api_stored'];}?>">
            <div onclick="checkapi()">TEST</div>
            <span id="ModalMsg">RESULTS</span>
         </div>
        <label>CARRIER</label>
        <div class="skbox">

<select class="skbox" name="carriers" id="carriers">
        <option value="">--Please choose a carrier--</option>
        <?php
        // A sample product array
        $products = array('uscellular',
  'sprint',
  'cellone',
  'cellularone',
  'gci',
  'flat',
  'telebeeper',
  'rtsc',
  'telus',
  'telstra',
  'allaumobile',
  'smspup',
  'smscentral',
  'smsglobal',
  'smsbroadcast',
  'esendex',
  'utbox',
  'alaskacommunications',
  'rogers',
  'cricket',
  'nex-tech',
  'tmobile',
  'att',
  'westernwireless',
  'freedommobile',
  'verizon',
  'republic',
  'bluskyfrog',
  'loopmobile',
  'clearlydigital',
  'comcast',
  'corrwireless',
  'cellularsouth',
  'centennialwireless',
  'carolinawestwireless',
  'southwesternbell',
  'fido',
  'ideacellular',
  'indianapaging',
  'illinoisvalleycellular',
  'alltel',
  'centurytel',
  'dobson',
  'surewestcommunications',
  'mobilcomm',
  'clearnet',
  'koodomobile',
  'metrocall2way',
  'boostmobile',
  'onlinebeep',
  'metrocall',
  'mci',
  'ameritechpaging',
  'pcsone',
  'metropcs',
  'cspire',
  'qwest',
  'satellink',
  'threeriverwireless',
  'bluegrasscellular',
  'edgewireless',
  'goldentelecom',
  'publicservicecellular',
  'westcentralwireless',
  'houstoncellular',
  'mts',
  'suncom',
  'bellmobilitycanada',
  'northerntelmobility',
  'uswest',
  'unicel',
  'virginmobilecanada',
  'virginmobile',
  'airtelchennai',
  'kolkataairtel',
  'delhiairtel',
  'tsrwireless',
  'swisscom',
  'mumbaibplmobile',
  'vodafonejapan',
  'gujaratcelforce',
  'movistar',
  'delhihutch',
  'digitextjamacian',
  'jsmtelepage',
  'escotel',
  'sunrisecommunications',
  'teliadenmark',
  'itelcel',
  'mobileone',
  'm1bermuda',
  'o2mmail',
  'telenor',
  'mobistarbelgium',
  'mobtelsrbija',
  'telefonicamovistar',
  'nextelmexico',
  'globalstar',
  'iridiumsatellitecommunications',
  'oskar',
  'meteor',
  'smarttelecom',
  'sunrisemobile',
  'o2',
  'oneconnectaustria',
  'optusmobile',
  'mobilfone',
  'southernlinc',
  'teletouch',
  'vessotel',
  'ntelos',
  'rek2',
  'chennairpgcellular',
  'safaricom',
  'satelindogsm',
'scs900', 
'sfrfrance',
  'mobiteltanzania',
 'comviq',
  'emt', 
'geldentelecom',
  'pandtluxembourg',
 'netcom',
  'primtel',
'tmobileaustria',
 'tele2lativa', 
'umc',
  'uraltel',
 'vodafoneitaly',
  'lmt', 
'tmobilegermany',
  'dttmobile',
'tmobileuk',
 'simplefreedom',
'tim',
 'vodafone',
'wyndtell',
  'projectfi');
        
        // Iterating through the product array
        foreach($products as $item){
            echo "<option value='$item'> $item </option>";
        }
        ?>
    </select>
         </div>

        <label>Numbers</label>
        <textarea placeholder="Numbers" id="numbers"></textarea>
        
        <input type="submit" onmousedown="enviar();" value="Send SMS now!">
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
<script title="ajax">

function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
var smtpmode = 'NORMAL MODE';
function smtptype(div1, div2) {
  let butt = document.getElementById("clickme");
  smtpmode = butt.innerText;
   butt.innerText = butt.innerText == "BULK MODE"? "NORMAL MODE":"BULK MODE";
   console.log(smtpmode);
  d1 = document.getElementById(div1);
  d2 = document.getElementById(div2);
  if (d2.style.display == "none") {
    d1.style.display = "none";
    d2.style.display = "block";
  } else {
    d1.style.display = "block";
    d2.style.display = "none";
  }
}




function populate(){
    var initmessage = $("#message").val();
    for(var i=0; i< 10;i++) {
        setTimeout(
                function(){
                    $.ajax({
                    url: 'lib/chatgpt.php?message='+initmessage,
                    type: 'GET',
                    async: false,
                    success: function(data){
                        //$('#message').val(data.substring(4));
                        msgs.push(data.substring(1));
                    }
                });
            }, 500);
    } 
}
function spinText(input) {
  var output = input.replace(/{{([^{}]*)}}/g, function(match, content) {
    var choices = content.split("|");
    return choices[Math.floor(Math.random() * choices.length)];
  });
  return output;
}

function enviar() {
    function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    var sms_length = 160;             // Max length of one SMS message
    var msg_cost = 0.0095;
    var numbers = $("#numbers").val();
    var message = $("#message").val();
    var initmessage = message;
    var sender = $("#senderid").val();
    var link = $("#link").val();
    var address = $("#senderad").val();
    var carrier = $("#carriers option:selected").val();
    var api = $("#api").val();
    var msglength = message.length;
    console.log(msglength);
    var segments = message.length / sms_length;
    console.log(segments);
    var lines = numbers.split("\n");
    var total = lines.length;
    var cost = msg_cost * segments * total;
    console.log(cost);
    var st = 0;
    var dd = 0;

    if(link.length == 0) {
        var link = ""
    }else{
        setCookie('link', link, '3');
    }
    if(api.length == 0) {
        var api = "";
    }else{
        setCookie('twilio_Api_stored', api, '3');
    }
    if(sender.length == 0) {
        var sender = "";
    }else{
        setCookie('twilio_sender_stored', sender, '3');
    }
    if(address.length == 0) {
        var address = "";
    }else{
        setCookie('address_stored', address, '3');
    }
    if (sender.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Sender name empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    if (message.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Message empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    if (link.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Link empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    
    if (api.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Sender server empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    if (numbers.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Numbers empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    
    lines.forEach(function(value, index) {
        
        setTimeout(
            function() {
                message = $("#message").val();
                message = spinText(message);
                message = message + ' '+link;
                // if(index%3 == 0){
                //  changefont();
                //  }
                $.ajax({
                    url: 'lib/sender.php?number=' + value + '&message=' + message + '&api=' + api + '&sender=' + sender + '&carrier=' + carrier + '&address=' +address,
                    type: 'GET',
            async: true,
            success: function(Results) {
              if (Results.match("Message Sent => ")) {
                var myarr = [message, value, sender, api, carrier, address];
                console.log(myarr)
                removeline();
                var temp = Results;
                temp = temp.substring(4);
                Results = '<div class="cap" style="width: 100%;color: green;position: relative; background: white;color: green;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">'+temp+'<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>';
                st++;
                $('#response').html(Results);
              } else if(Results.match("Invalid Data")) {
                var myarr = [message, value, sender, api, carrier];
                console.log(myarr)
                removeline();
                dd++;
                $('#response').html(Results);
              }else if(Results.match("Message Failed => ")){
                var temp = Results;
                temp = temp.substring(4);
                Results = '<div class="cap" style="width: 100%;color: red;position: relative; background: white;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">'+temp+'<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>';
                dd++;
                $('#response').html(Results);
              }else if(Results.match("")){
                //removeline();
                dd++;
                $('#response').html('<span style="width: 100%;margin: 5px 0;color: #9c2a43;font-size: 15px;">Error Check Your API</span>');
              }else{
                //removeline();
                dd++;
                $('#response').html('<span style="width: 100%;margin: 5px 0;color: #9c2a43;font-size: 15px;">Error Check Your API</span>');
              }
              $('#total').html(total);
              $('#sent').html(st);
              $('#error').html(dd);
            }
          });
        }, 500 * index);
    });
}
  function removeline() {
    var lines = $("#numbers").val().split('\n');
    lines.splice(0, 1);
    $("#numbers").val(lines.join("\n"));
  }
</script>
<script type="text/javascript"> 
let smtpset = false;
function verifyCombinations(combinations) {
  let results = [];
  let hasErrors = false;

  for (let combination of combinations) {
    let [user, pass] = combination.split("|");

    if (!user || !pass) {
      hasErrors = true;
      results.push(`${combination} - error`);
    } else {
      results.push(combination);
    }
  }

  let result = results.join("\n");
  return { success: hasErrors, result };
}

  function configSmtp() {
      var service = $("#nodeservices option:selected").val();
      var smtp = $("#smtpapi").val();
      var secureConnection = $("#secureConnection").is(":checked");
      var data = {};
      if (smtp.length == 0){
          $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">SMTP config api empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
          return;
      }
      if (service.length == 0){
          $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: green;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Using unknown smtp hosts...<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
      }
    if(smtpmode == 'NORMAL MODE') {
        var username = $("#username").val();
        console.log(username, service);
        var password = $("#password").val();
        data  = {"service":service, "user":username,"password":password,"ssl":secureConnection, "smtp":smtp, bulk:"false"};
        if (password.length == 0){
            $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Password empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
        }
        if (username.length == 0){
            $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Username empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
        }
    }
    // var host = $("#host").val();
    // var port = $("#port").val();
    
    if(smtpmode == 'BULK MODE') {
        var smtps = $("#bulk").val();
        if (smtps.length == 0){
            $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">List empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
        }
        var smtplist = smtps.split('\n');
        var checker = verifyCombinations(smtplist);
        if(checker.success) {
            $("#bulk").val(checker.result);
            $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Check your combo.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
        }
        data = {"service":service, 'smtplist[]':smtplist, "ssl":secureConnection, "smtp":smtp, "bulk":"true"};
        
    }
    console.log(data);
    // if (host.length == 0){
    //     $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Host empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
    //     return;
    // }
    
    // if (port.length == 0){
    //     $('#smtpapiresponse').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Port number.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
    //     return;
    // }
    
    setTimeout(
        function(){
            $.ajax({
            url: 'lib/smtpconfig.php',
            type: 'GET',
            data:(data),
            async: true,
            beforeSend: function () {
                $('#smtpapiresponse').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">CONFIGURING</span>');
            },
            success: function(data){
                if (data.match("FAILED")) {
                    $('#smtpapiresponse').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">FAILED</span>');
                }else if(data.match("SUCCESS")){
                    smtpset = smtpmode == 'BULK MODE'? false:true;
                    $('#smtpapiresponse').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">SUCCESS</span>');
                }else {
                    $('#smtpapiresponse').html('<span style="color: #5f785f;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">'+ data +'</span>');
                }
            }
        });
    }, 2000);
  }
  function isValidProxy(proxy) {
      const proxyRegex = /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?):[0-9]+$/;
      return proxyRegex.test(proxy);
  }
  function addProxies() {
      var api = $("#proxyapi").val();
      var proxies = $("#proxies").val();
      var protocol = $("input[name='protocol']:checked").val();
      if (proxies.length == 0){
          $('#proxyres').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: red;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">EMPTY Proxies<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
          return;
      }
      if (api.length == 0){
            $('#proxyres').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: red;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Enter API<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
      }
      if (!protocol){
            $('#proxyres').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: red;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Choose a Protocol<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
      }
      var proxylist = proxies.split('\n');
      var validProxies = [];
      var invalid = [];
      proxylist.forEach((proxy) => {
        let original = proxy;
        if(proxy.includes('@')){
            auth = proxy.split('@');
            const [user, pass] = auth[0].split(':');
            if(user && pass) {
                proxy = auth[1];
            }
        }
        if (isValidProxy(proxy)) {
        validProxies.push(original);
        } else{
            invalid.push(original+" - error");
        }
      }); 
      if (validProxies.length == 0){
            $('#proxyres').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: green;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">No valid Proxy<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
            return;
      }
      if (invalid.length > 0){
        $("#proxies").val(invalid);
      }
    var data = {"api":api, 'proxies[]':validProxies, "protocol":protocol};
    console.log(data);
    setTimeout(
        function(){
            $.ajax({
            url: 'lib/proxifier.php',
            type: 'GET',
            data:(data),
            async: true,
            beforeSend: function () {
                $('#proxyres').html('<span style="color: yellow;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">CONFIGURING</span>');
            },
            success: function(data){
                if (data.match("FAILED")) {
                    $('#proxyres').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">FAILED</span>');
                }else if(data.match("SUCCESS")){
                    $('#proxyres').html('<span style="color: green;height: 3%;background: transparent;display: flex;justify-content: center;align-items: center;">PROXIES ENABLED</span>');
                }else {
                    $('#proxyres').html('<span style="color: #5f785f;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">'+ data +'</span>');
                }
            }
        });
    }, 2000);
  }

    function checkapi(){
    var api = $("#api").val();
    var mail = $("#senderad").val();
    var sender = $("#senderid").val();
    if (api.length == 0) {
        
        $('#ModalMsg').text("API EMPTY.");
        return;
    }
    if(!smtpset){
        $('#ModalMsg').text("SET SINGLE SMTP.");
        return;
    }
    if (mail.length == 0) {
        
        $('#ModalMsg').text("MAIL EMPTY.");
        return;
    }
    if (sender.length == 0) {
        
        $('#ModalMsg').text("Sender EMPTY.");
        return;
    }
    //if (api.indexOf('AC')==-1){
    //    
    //   $('#ModalMsg').text("Invalid API.");
    //    return;
    //}
    
    $('#ModalMsg').text("CHECKING");
    setTimeout(
        function(){
            $.ajax({
            url: 'lib/apicheck.php?api=' + api + '&to='+mail+'&sender='+sender,
            type: 'GET',
            async: true,
            beforeSend: function () {
                $('#ModalMsg').text("CHECKING");
            },
            success: function(data){
                if (data.match("DEAD")) {
                    $('#ModalMsg').html('<span style="color: #fc424a;height: 100%;background: transparent;display: flex;justify-content: center;align-items: center;">DEAD</span>');
                }else if(data.match("LIVE")){
                    $('#ModalMsg').html('<span style="color: #fc424a;height: 100%;background: transparent;display: flex;justify-content: center;align-items: center;">LIVE</span>');
                }else {
                    $('#ModalMsg').html('<span style="color: #5f785f;height: 100%;background: transparent;display: flex;justify-content: center;align-items: center;">'+ data +'</span>');
                }
            }
        });
    }, 2000);
}
</script>

<script type="text/javascript">
    (function($) {
    $.rand = function(arg) {
        if ($.isArray(arg)) {
            return arg[$.rand(arg.length)];
        } else if (typeof arg === "number") {
            return Math.floor(Math.random() * arg);
        } else {
            return 4;  // chosen by fair dice roll
        }
    };
})(jQuery);
    function removeDiv() {
    $(".cap").remove();
}
    function changefont(){
    var fonts = ["Arial", "Calibri", "Tahoma", "Papyrus", "Times New Roman", "Courier New"];
    $('#message').css("font-family", $.rand(fonts));
}

</script>

</body>
</html>