
  
function dragStart(event) {
    var type = event.target.getAttribute('type'); // Get the type attribute
    event.dataTransfer.setData("type", type); // Set type as the data to transfer
}

function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function allowDrop(event) {
    // Prevent the default handling to allow dropping
    event.preventDefault();
  }
  
  function drop(event) {
    // Prevent the default handling
    event.preventDefault();
    // Get the data and append the dragged element to the drop target
    var data = event.dataTransfer.getData("type");
    switch (data) {
        case "textbox":
            createTextInput(event.target);
            break;
        case "checkbox":
            createCheckBox(event.target);
            break;
        default:
            break;
        }
  }

  
  function createTextInput(container) {
      const div = document.createElement('div');
      div.id = 'text-box';
      const label = document.createElement('label').appendChild(document.createTextNode('Textbox text'));
      div.append(label);
      const input = document.createElement('input');
      input.type = 'text';
      input.placeholder = 'Enter text here';
      div.append(input);
      insertElement(div);
  }
  
  function createCheckBox(container) {
    const div = document.createElement('div');
    div.id = 'check-box';
    const label = document.createElement('label').appendChild(document.createTextNode('checkbox text'));
    div.append(label);
    const checkbox = document.createElement('input');
    checkbox.setAttribute('type', 'checkbox');
    checkbox.checkVisibility = 'visible';
    checkbox.checked = true;
    checkbox.value = 'yes';
    div.append(checkbox);
    insertElement(div);
  }

  function insertElement(element) {
    let form = document.getElementById('droppable-area');    
    form.append(element);
  }

