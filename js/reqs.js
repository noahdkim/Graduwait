function addItem(clickedButton){
  var button = document.getElementById(clickedButton);
  var target = document.getElementById(clickedButton + "-");
  var courseID = button.value; // course id
  var category = clickedButton.replace(/[0-9]/g, ''); // category
  if(button.style.visibility === "hidden"){
    button.style.visibility = "visible";
  }
  else{
    button.style.visibility = "hidden";
    target.style.visibility = "visible";
  }
  id_numbers = new Array();
  $.ajax({
      url:"php/removeCourse.php",
      type:"POST",
      data: {courseID: courseID, category: category.toUpperCase()},
      method:'POST',
      success:function(msg){
          console.log(msg);
      }
  });
}

function removeItem(clickedButton){
  var button = document.getElementById(clickedButton);
  var original = clickedButton.replace("-","");
  var target = document.getElementById(original);
  var courseID = button.value.replace("-",""); // course id
  var category = clickedButton.replace(/[0-9]/g, '').replace("-", ""); // category
  if(button.style.visibility === "hidden"){
    button.style.visibility = "visible";
  }
  else{
    button.style.visibility = "hidden";
    target.style.visibility = "visible";
  }
  $.ajax({
      url:"php/addCourse.php",
      type:"POST",
      data: {courseID: courseID, category: category.toUpperCase()},
      method:'POST',
      success:function(msg){
          console.log(msg);
      }
  });
}


function makeButton(category, id, status){
  var button = document.createElement('input');
  button.type = 'button';
  button.style = 'color: black';
  var reqName = 'req.' + category; // req.CS req.SEAS
  var toTakeName = 'toTake.' + category;
  button.value = eval(reqName)[id];
  category = category.toLowerCase();

  if(status=="sat"){
    button.onclick = function(){
      removeItem(this.id);
    }
    button.id = category + id + '-';
    var target = document.getElementById(category+'-sat-list');
    button.setAttribute('ng-click', "decrement()");
  //  button.setAttribute('style', 'visibility: hidden');
    button.setAttribute('class', 'btn ' + category);
  }
  else{
    button.id = category + id
    button.onclick = function(){
      addItem(this.id);
    }
    var target = document.getElementById(category+'-reqs-list');
    button.setAttribute('ng-click', "counter = counter + 1");
    button.setAttribute('style', 'background-color:; margin-bottom: 10px; font-weight: 400; text-align: center; border: 1px solid transparent; padding: .375rem .75rem; border-radius: .25rem; margin-right: 5px;');
    button.setAttribute('class', 'btn ' + category);
  }
  var value = eval(toTakeName);
  value=$.map(value, function(el) {return el});
  // console.log(value);
  // Course has not been taken, hide satisfied
  if(value.indexOf(eval(reqName)[id])>=0 && status=='sat'){
      button.setAttribute('style', 'visibility: hidden');
  }
  // Course has been taken, hide required
  else if(value.indexOf(eval(reqName)[id])<0 && status=='req'){
    button.setAttribute('style', button.getAttribute('style') + '; visibility: hidden');
    button.setAttribute('ng-init', "counter = counter + 1");
  }
  // if(eval(toTakeName).indexOf(eval(reqName)[id]==-1)){
  //
  // }
  target.appendChild(button);
}
