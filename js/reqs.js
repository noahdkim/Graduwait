function addItem(clickedButton){
  var id = document.getElementById(clickedButton);
  var target = document.getElementById(clickedButton + "-");
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
