<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <link rel="stylesheet" href="css/dragObject.css">
    <title>Document</title>
</head>

<body>
    
  <!-- drag box w/ picture -->
  <div class="container-box custom-box hide">
        <div class="imahe">
            Pindutin ang imahe at ilagay sa tamang panagalan
        </div>
        <div class="draggable-element">
        <img class="draggable" draggable="true" src="pics/girl.jpg" id="Babae"> </img>
        <img class="draggable" draggable="true" src="pics/lalaki.png" id="Lalaki"> </img>
        <img class="draggable" draggable="true" src="pics/kamay.png" id="Kamay"> </img>
        </div>
        <div class="droppable-points">
            <div class="droppable" data-draggable-id="Lalaki"> <span> Lalaki </span> </div> 
            <div class="droppable" data-draggable-id="Kamay"> <span> Kamay </span> </div>
            <div class="droppable" data-draggable-id="Babae"> <span> Babae </span> </div>
        </div>
        <div class="controls-container">
            <div id="result"> </div>
            
        </div>
    </div>
    <div class="container-box custom-box">
        <div class="imahe">
            Pindutin ang imahe at ilagay sa tamang panagalan
        </div>
        <div class="draggable-element">
        <img class="draggable" draggable="true" src="pics/Aso.jpg" id="Aso"> </img>
        <img class="draggable" draggable="true" src="pics/paru-paro.jpg" id="Paru-paro"> </img>
        <img class="draggable" draggable="true" src="pics/ibon.jpg" id="Ibon"> </img>
        </div>
        <div class="droppable-points">
            <div class="droppable" data-draggable-id="aso"> <span> Aso </span> </div> 
            <div class="droppable" data-draggable-id="Paru-paro"> <span> Paru-paro </span> </div>
            <div class="droppable" data-draggable-id="ibon"> <span> Ibon </span> </div>
        </div>
        <div class="controls-container">
            <div id="result"> </div>
            <button id="start" class="btn"> Simula </button>
        </div>
    </div>

<script type="text/javascript">
 let correctDrops = 0;
 let incorrectDrops = 0;

// Get all draggable elements
const draggableElements = document.querySelectorAll('.draggable');

// Add event listeners to enable dragging
draggableElements.forEach((element) => {
  element.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id);
  });
});

// Get all droppable elements
const droppableElements = document.querySelectorAll('.droppable');

// Add event listeners to enable dropping
droppableElements.forEach((element) => {
  element.addEventListener('dragover', (e) => {
    e.preventDefault();
  });

  element.addEventListener('drop', (e) => {
    e.preventDefault();
    const draggableId = e.dataTransfer.getData('text/plain');
    const draggableElement = document.getElementById(draggableId);
    element.appendChild(draggableElement);

    
if (droppableId === draggableId) {
    this.classList.remove("droppable-hover");
    this.appendChild(draggableElement);
    resultContainer.innerText = "Tama!";
  } else {
    this.classList.remove("droppable-hover");
    resultContainer.innerText = "Mali";
  }

});
});


</script>

</body>
</html>