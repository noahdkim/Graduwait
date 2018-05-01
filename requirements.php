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
      <ol id="seas-sat-list" style="list-style-type: none;">
      </ol>
      <h2 style='color: rgb(255,90,95);'> CS </h2><br>
      <ol id="cs-sat-list" style="list-style-type: none;">
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
  var req = <?php echo json_encode($_SESSION['req'])?>;
  var toTake = <?php echo json_encode($_SESSION['toTake'])?>;
  var major ='<?php echo $_SESSION['major'];?>';
  req = JSON.parse(req);
  //req.SEAS=$.map(req.SEAS, function(el) {return el});
  console.log(req);
  toTake = JSON.parse(toTake)
  toTake.SEAS=$.map(toTake.SEAS, function(el) {return el});

  // dynamically create buttons if csBS is set
  if(major == "csBS"){
    for(var j = 0; j < req.SEAS.length; j++){
      makeButton('SEAS', j, 'req', 1);
      makeButton('SEAS', j, 'sat', 0);
    }
    for(var i = 0; i < req.CS.length; i++){
      makeButton('CS', i, 'req', 1);
      makeButton('CS', i, 'sat', 0);
      // var csButton = document.createElement('input');
      // csButton.type = 'button';
      // csButton.value = courses.CS[i];
      // csButton.id = courses.CS[i];
      // csButton.onclick = function(){
      //   addItem(this.id);
      // }
      // csButton.setAttribute('ng-click', "counter = counter + 1");
      // csButton.setAttribute('style', 'background-color: #BCE7FD; margin-bottom: 10px; font-weight: 400; text-align: center; border: 1px solid transparent; padding: .375rem .75rem; border-radius: .25rem; margin-right: 5px;');
      // csTarget.appendChild(csButton);
    }
  }


</script>
</body>
