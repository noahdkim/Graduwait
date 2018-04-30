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
        <h1 style='font-weight: bold; color: white; margin-top: 10px;'>Requirements</h1>
        <h2 style='color: rgb(255,90,95);'> SEAS</h2>
        <ol id="seas-reqs-list" style="list-style-type: none;">
          <!-- <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="APMA 1110" class="btn seas">APMA 1110</button></li>
          <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="APMA 2120" class="btn seas">APMA 2120</button></li>
          <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CHEM 1610" class="btn seas">CHEM 1610</button></li>
          <li id="seas-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CHEM 1611" class="btn seas">CHEM 1611</button></li> -->
        </ol>
        <h2 style='color: rgb(255,90,95);'> CS </h2>
        <ol id="cs-reqs-list" style="list-style-type: none;">
          <!-- <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 111X" class="btn cs">CS 111X</button></li>
          <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 2102" class="btn cs">CS 2102</button></li>
          <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 2110" class="btn cs">CS 2110</button></li>
          <li id="cs-req-button"><button ng-click="counter = counter + 1" onclick="addItem(this.id)" type="button" id="CS 2150" class="btn cs">CS 2150</button></li> -->
        </ol>
        <h2 style='color: white; font-weight: bold;'>Courses Taken: {{counter}}</h2>
      </div>
    </div>
    <div class="col-2">
      <h1 style='font-weight: bold; color: white; margin-top: 10px;'>Satisfied</h1>
      <h2 style='color: rgb(255,90,95);'> SEAS </h2>
      <ol id="sat-seas-reqs2" style="list-style-type: none;">
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 1110-" class="btn seas">APMA 1110</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 2120-" class="btn seas">APMA 2120</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 3100-" class="btn seas">APMA 2120</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 2130/3080/3120/3150-" class="btn seas">APMA Choice 1</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="APMA 2130/3080/3120/3150-" class="btn seas">APMA Choice 2</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1610-" class="btn seas">CHEM 1610</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1611-" class="btn seas">CHEM 1611</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CHEM 1620-" class="btn seas">CHEM 1620</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="ENGR 1620-" class="btn seas">ENGR 1620</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="ENGR 1621-" class="btn seas">ENGR 1621</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="PHYS 1425-" class="btn seas">PHYS 1425</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="PHYS 1429-" class="btn seas">PHYS 1429</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="PHYS 2414-" class="btn seas">PHYS 2414</button></li>
        <li id="seas-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="PHYS 2419-" class="btn seas">PHYS 2419</button></li>
      </ol>
      <h2 style='color: rgb(255,90,95);'> CS </h2><br>
      <ol id="sat-cs-reqs2" style="list-style-type: none;">
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 111X-" class="btn cs">CS 111X</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2102-" class="btn cs">CS 2110</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2110-" class="btn cs">CS 2102</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2150-" class="btn cs">CS 2150</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS/ECE 2330-" class="btn cs">CS/ECE 2330</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 2190-" class="btn cs">CS 2190</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 3102-" class="btn cs">CS 3102</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 3330-" class="btn cs">CS 3330</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 3240-" class="btn cs">CS 3240</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 4414-" class="btn cs">CS 4414</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 4102-" class="btn cs">CS 4102</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="CS 4971/4980-" class="btn cs">CS 4971/4980</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="Elective 1-" class="btn cs">Elective 1</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="Elective 2-" class="btn cs">Elective 2</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="Elective 3-" class="btn cs">Elective 3</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="Elective 4-" class="btn cs">Elective 4</button></li>
        <li id="cs-req-button2"><button ng-click="decrement()" style="visibility: hidden" onclick="removeItem(this.id)" type="button" id="Elective 5-" class="btn cs">Elective 5</button></li>
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
  // get JSON from PHP and parse into String, store major var for checking
  var courses = <?php echo json_encode($_SESSION['courses'])?>;
  var major ='<?php echo $_SESSION['major'];?>';
  courses = JSON.parse(courses);

  // CSS selectors for container elements
  var seasTarget = document.getElementById('seas-reqs-list');
  var csTarget = document.getElementById('cs-reqs-list');

  // dynamically create buttons if csBS is set
  if(major == "csBS"){
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
      seasButton.setAttribute('style', 'background-color: #C492B1; margin-bottom: 10px; font-weight: 400; text-align: center; border: 1px solid transparent; padding: .375rem .75rem; border-radius: .25rem; margin-right: 5px;');
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
      csButton.setAttribute('style', 'background-color: #BCE7FD; margin-bottom: 10px; font-weight: 400; text-align: center; border: 1px solid transparent; padding: .375rem .75rem; border-radius: .25rem; margin-right: 5px;');
      csTarget.appendChild(csButton);
    }
  }
</script>
</body>
