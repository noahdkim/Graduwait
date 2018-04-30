function addItem(clickedButton){
  var id = document.getElementById(clickedButton);
  var target = document.getElementById(clickedButton + "-");
  console.log(id);
  if(id.style.visibility === "hidden"){
    id.style.visibility = "visible";
  }
  else{
    id.style.visibility = "hidden";
    target.style.visibility = "visible";
  }
}

function removeItem(clickedButton){
  var id = document.getElementById(clickedButton);
  var original = clickedButton.replace("-","");
  var target = document.getElementById(original);
  if(id.style.visibility === "hidden"){
    id.style.visibility = "visible";
  }
  else{
    id.style.visibility = "hidden";
    target.style.visibility = "visible";
  }
}


function makeButton(category, id, status, visible){
  var button = document.createElement('input');
  button.type = 'button';
  button.style = 'color: black';
  var cat = 'courses.' + category;
  console.log(cat);
  button.value = eval(cat)[id];
  category = category.toLowerCase();

  if(status=="sat"){
    button.onclick = function(){
      removeItem(this.id);
    }
    button.id = category + id + '-';
    var target = document.getElementById(category+'-sat-list');
    button.setAttribute('ng-click', "decrement()");

    button.setAttribute('class', 'btn ' + category)
  }
  else{
    button.id = category + id
    button.onclick = function(){
      addItem(this  .id);
    }
    var target = document.getElementById(category+'-reqs-list');
    button.setAttribute('ng-click', "counter = counter + 1");
    button.setAttribute('style', 'background-color: #C492B1; margin-bottom: 10px; font-weight: 400; text-align: center; border: 1px solid transparent; padding: .375rem .75rem; border-radius: .25rem; margin-right: 5px;');
  }
  if(!visible){
      button.setAttribute('style', 'visibility: hidden');
  }
  target.appendChild(button);
}
