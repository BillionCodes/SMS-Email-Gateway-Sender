
<html>
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="referrer" content="never">
  <link href="assets/img/favicon.png" rel="icon">
  <title>SMS CLIENT | Billioncodes</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
   
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
        <span style="width: 100%;" id="responce"></span>
        <label>FROM ADDRESS</label>
        <div class="skbox">
        <input type="text" id="senderid" placeholder="Google" value="<?php if(isset($_COOKIE['twilio_sender_stored'])){echo $_COOKIE['twilio_sender_stored'];}?>">
        </div>
        <label>Message</label>
        <textarea placeholder="Message" id="message"></textarea>
        <button type="button" class="btn btn-primary btn-lg show-modal" data-toggle="modal" data-target="#myModal">
                  Config SMTP
                </button>
 
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content clearfix">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
                            <div class="modal-body">
                                <h3 class="title">SMTP Config Form</h3>
                                <p class="description">Enter config details here</p>
                                <div id="smtpresponse"></div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-link"></i></span>
                                    <input type="url" class="form-control" placeholder="API" id="smtpapi">
                                </div>
                                <div class="form-group">
                                  <button onclick="testsmtp()">TEST</button>
                                  <span id="Modalapi">RESULT</span>
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-user"></i></span>
                                    <input class="form-control" placeholder="Enter Hostname" id="host">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-plug"></i></span>
                                    <input type="number" class="form-control" placeholder="Port" id="port">
                                </div>
                                <div class="form-group checkbox">
                                    <input type="checkbox" id="secureConnection">
                                    <label>Enable SSL</label>
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-envelope"></i></span>
                                    <input class="form-control" placeholder="Username e.g email@domain.com" id="username">
                                </div>
                                <div class="form-group">
                                    <span class="input-icon"><i class="fa fa-key"></i></span>
                                    <input type="password" class="form-control" placeholder="Password" id="password">
                                </div>
                                
                                <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                                <button class="btn" onclick="configSmtp()">SET</button>
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
  'telus',
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
    var sender = $("#senderid").val();
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
    if (sender.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">FROM ADDRESS empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    if (message.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Message empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    
    if (api.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Sender server.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    if (numbers.length == 0){
        $('#responce').html('<div class="cap" style="width: 100%;color: red;position: relative; background: #f2dede;color: #a94442;text-align: center;font-size: 13px;font-weight: bold;border-radius: 5px;margin-top: 15px;">Numbers empty.<i style="position: absolute;right: 15px;top: 50%;transform: translate(0,-50%);cursor: pointer;" class="fa fa-close" onclick="removeDiv()"></i></div>');
        return;
    }
    lines.forEach(function(value, index) {
      setTimeout(
        function() {
          $.ajax({
            url: 'lib/sender.php?number=' + value + '&message=' + message + '&api=' + api + '&sender=' + sender + '&carrier=' + carrier,
            type: 'GET',
            async: true,
            success: function(Results) {
              if (Results.match("Message Sent => ")) {
                var myarr = [message, value, sender, api, carrier];
                console.log(myarr)
                removeline();
                st++;
                $('#response').html(Results);
              } else if(Results.match("Invalid Data")) {
                var myarr = [message, value, sender, api, carrier];
                console.log(myarr)
                removeline();
                dd++;
                $('#response').html(Results);
              }else if(Results.match("")){
                removeline();
                dd++;
                $('#response').html('<span style="width: 100%;margin: 5px 0;color: #9c2a43;font-size: 15px;">Error Check Your API</span>');
              }else{
                removeline();
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
  function configSmtp() {
    var smtp = $("#smtpapi").val();
    var host = $("#host").val();
    var port = $("#port").val();
    var username = $("#username").val();
    console.log(username);
    var password = $("#password").val();
    var secureConnection = $("#secureConnection").is(":checked");
    var data  = {"host":host,"port":port,"user":username,"password":password,"ssl":secureConnection, "smtp":smtp};
    console.log(data);
    //if($('#secureConnection').prop('checked')){ secureConnection = 1; }else{ secureConnection = 0; }
    setTimeout(
        function(){
            $.ajax({
            url: 'lib/smtpconfig.php',
            type: 'GET',
            data: (data),
            async: true,
            beforeSend: function () {
                $('#smtpresponse').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">FAILED</span>');
            },
            success: function(data){
                if (data.match("FAILED")) {
                    $('#smtpresponse').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">FAILED</span>');
                }else if(data.match("SUCCESS")){
                    $('#smtpresponse').html('<span style="color: #fc424a;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">SUCCESS</span>');
                }else {
                    $('#smtpresponse').html('<span style="color: #5f785f;height: 5%;background: transparent;display: flex;justify-content: center;align-items: center;">'+ data +'</span>');
                }
            }
        });
    }, 2000);
  }
</script>

<script type="text/javascript">
    function checkapi(){
    var api = $("#api").val();
    if (api.length == 0) {
        
        $('#ModalMsg').text("API EMPTY.");
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
            url: 'lib/apicheck.php?api=' + api,
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
    function removeDiv() {
    $(".cap").remove();
}
</script>

</body>
</html>