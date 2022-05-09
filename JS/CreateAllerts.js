//Err variables
if (!notes) {
  notes = document.createElement("div");
  notes.id = "notes";
  notes.class = "Notes";

}else if (notes) {
var notes = document.getElementById('notes');
}

// Create allert function with form error messeges
function CreateAllert(falt,folt) {
  //create the allert with classes
  var element = document.createElement("div");
  element.classList.add('alert', 'alert-danger');

  //create strong text title
  var strong = document.createElement("STRONG");
  var errTittleText = document.createTextNode(falt +" ");
  strong.appendChild(errTittleText);
  //create text massage
  var errMsg = document.createTextNode(folt);

  //apend tittle and text
  element.appendChild(strong);
  element.appendChild(errMsg);
  notes.appendChild(element);

}
