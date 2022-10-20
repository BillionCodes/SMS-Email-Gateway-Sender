
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="referrer" content="never">
  <link href="assets/img/favicon.png" rel="icon">
  <title>SMS CLIENT | Billioncodes</title>
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



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js" type="text/javascript"></script>
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
                removeline();
                st++;
                $('#response').html(Results);
              } else if(Results.match("Invalid Data")) {
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