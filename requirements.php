<?php
  if ($_SESSION['isLogged'] != 1){
      header("Location: login.php");
  }
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
</head>
<body ng-app="CounterApp">
<div ng-controller="CounterController" class="container">
  <div class="row">
    <div class="col-10">
      <div class="container" id="container">
        <h1>Requirements</h1>
        <h2> SEAS</h2>
        <ol id="seas-reqs-list" style="list-style-type: none;">
          <!-- <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="APMA 1110" class="btn seas">APMA 1110</button></li>
          <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="APMA 2120" class="btn seas">APMA 2120</button></li>
          <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CHEM 1610" class="btn seas">CHEM 1610</button></li>
          <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CHEM 1611" class="btn seas">CHEM 1611</button></li> -->
        </ol>
        <h2> CS </h2>
        <ol id="cs-reqs-list" style="list-style-type: none;">
          <!-- <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 111X" class="btn cs">CS 111X</button></li>
          <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 2102" class="btn cs">CS 2102</button></li>
          <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 2110" class="btn cs">CS 2110</button></li>
          <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 2150" class="btn cs">CS 2150</button></li> -->
        </ol>
        <h2>Courses Taken: {{counter}}</h2>
      </div>
    </div>
    <div class="col-2">
      <h5>Satisfied Requirements</h5>
      <h2> SEAS </h2>
      <ol id="sat-seas-reqs2" style="list-style-type: none;">
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 1110-" class="btn seas">APMA 1110</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 2120-" class="btn seas">APMA 2120</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1610-" class="btn seas">CHEM 1610</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1611-" class="btn seas">CHEM 1611</button></li>
      </ol>
      <h2> CS </h2><br>
      <ol id="sat-cs-reqs2" style="list-style-type: none;">
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 111X-" class="btn cs">CS 111X</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2102-" class="btn cs">CS 2102</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2110-" class="btn cs">CS 2110</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2150-" class="btn cs">CS 2150</button></li>
      </ol>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/reqs.js"></script>
<script>
angular.module("CounterApp", [])
  .controller("CounterController", function($scope){
    $scope.counter = 0;
    $scope.decrement = function() {
      $scope.counter--;
    };
  })
</script>
<script>
  // get JSON from PHP and parse into String
  var courses = <?php echo json_encode($_SESSION['courses'])?>;
  courses = JSON.parse(courses);

  // CSS selectors for container elements
  var seasTarget = document.getElementById('seas-reqs-list');
  var csTarget = document.getElementById('cs-reqs-list');

  // dynamically create buttons
  for(var j = 0; j < courses.seas.length; j++){
    var seasButton = document.createElement('input');
    seasButton.type = 'button';
    seasButton.style = 'color: black';
    seasButton.value = courses.seas[j];
    seasButton.id = courses.seas[j];
    seasButton.onclick = function(){
      addItem(this.id);
    }
    seasButton.setAttribute('ng-click', "counter = counter + 1");
    seasTarget.appendChild(seasButton);
  }
  for(var i = 0; i < courses.CS.length; i++){
    var csButton = document.createElement('input');
    csButton.type = 'button';
    csButton.value = courses.CS[i];
    csButton.id = courses.CS[i];
    csButton.onclick = function(){
      addItem(this.id);
    }
    csButton.setAttribute('ng-click', "counter = counter + 1");
    csTarget.appendChild(csButton);
  }
</script>
</body>
