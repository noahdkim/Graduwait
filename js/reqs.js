function addItem(clickedButton){
  var ol = document.getElementById("sat-seas-reqs");
  var item = document.getElementById("seas-req-button");
  var button = document.createElement("button");
  // no current work around this for setting button css attributes
  button.setAttribute("style", "background-color: #C492B1; border-radius: .25rem; margin-bottom: 10px; text-align: center; font-weight: 400; border: 1px solid transparent; padding: .375rem .75rem;");
  button.innerHTML = clickedButton;
  if(ol)
  ol.appendChild(button);
}
