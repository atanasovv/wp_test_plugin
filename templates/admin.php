{% include "Base\Helpers" 
availableTemplates = enumerate_templates()
%}

<div class="wrap">
<div id="main-container">
  <div id="drag-container">
    {%  foreach (template in availableTemplates)
      echo(template) %}
    </div>
  </div>
  <div id="drop-container">
    <h2>My form Name</h2>
    <form class="form-container" action="POST" id="form-builder"  >
      <div id="droppable-area" ondrop="drop(event)" ondragover="allowDrop(event)">
        <h1>Drop here</h1>
      </div>
      <input type="submit" value="Submit">
    </form>
      
  </div>
</div>
</div>
