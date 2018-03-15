<?php
  if ($_SESSION['isLogged'] != 1){
      header("Location: login.php");
  }
?>
<div class="container">
  <div class="row">
    <div class="col-10">
      <div class="container">
        <h1>Requirements</h1>
        <h2> SEAS</h2>
        <ol id="seas-reqs-list" style="list-style-type: none;">
          <li id="seas-req-button"><button onclick="addItem(this.id)" type="button" id="APMA 1110" class="btn seas">APMA 1110</button></li>
          <li id="seas-req-button"><button onclick="addItem(this.id)" type="button" id="APMA 2120" class="btn seas">APMA 2120</button></li>
          <li id="seas-req-button"><button onclick="addItem(this.id)" type="button" id="CHEM 1610" class="btn seas">CHEM 1610</button></li>
          <li id="seas-req-button"><button onclick="addItem(this.id)" type="button" id="CHEM 1611" class="btn seas">CHEM 1611</button></li>
        </ol>
        <h2> CS </h2>
        <ol id="cs-reqs-list" style="list-style-type: none;">
          <li id="cs-req-button"><button onclick="addItem(this.id)" type="button" id="CS 111X" class="btn cs">CS 111X</button></li>
          <li id="cs-req-button"><button onclick="addItem(this.id)" type="button" id="CS 2102" class="btn cs">CS 2102</button></li>
          <li id="cs-req-button"><button onclick="addItem(this.id)" type="button" id="CS 2110" class="btn cs">CS 2110</button></li>
          <li id="cs-req-button"><button onclick="addItem(this.id)" type="button" id="CS 2150" class="btn cs">CS 2150</button></li>
        </ol>
      </div>
    </div>
    <div class="col-2">
      <h5>Satisfied Requirements</h5>
      <h2> SEAS </h2>
      <ol id="sat-seas-reqs2" style="list-style-type: none;">
        <li id="seas-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 1110-" class="btn seas">APMA 1110</button></li>
        <li id="seas-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 2120-" class="btn seas">APMA 2120</button></li>
        <li id="seas-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1610-" class="btn seas">CHEM 1610</button></li>
        <li id="seas-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1611-" class="btn seas">CHEM 1611</button></li>
      </ol>
      <h2> CS </h2><br>
      <ol id="sat-cs-reqs2" style="list-style-type: none;">
        <li id="cs-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 111X-" class="btn cs">CS 111X</button></li>
        <li id="cs-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2102-" class="btn cs">CS 2102</button></li>
        <li id="cs-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2110-" class="btn cs">CS 2110</button></li>
        <li id="cs-req-button2"><button style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2150-" class="btn cs">CS 2150</button></li>
      </ol>
      </ol>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/reqs.js"></script>
<script src="js/load_classes.js"></script>
