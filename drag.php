<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dragObject.css">
    <title>Document</title>
</head>

<body>
    
  <!-- drag box w/ picture -->
  <div class="container-box custom-box">
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
            <button id="start" class="btn"> Simula </button>
        </div>
    </div>

<script type="text/javascript">

const draggableElements = document.querySelectorAll(".draggable");
const droppableElements = document.querySelectorAll(".droppable");
const resultContainer = document.querySelector("#result");

let draggableElement = null;


// add event listeners to draggable elements
draggableElements.forEach((elem) => {
  elem.addEventListener("dragstart", dragStart);
  elem.addEventListener("dragend", dragEnd);
});

// add event listeners to droppable elements
droppableElements.forEach((elem) => {
  elem.addEventListener("dragover", dragOver);
  elem.addEventListener("drop", drop);
});

function dragStart(event) {
  draggableElement = this;
  event.dataTransfer.setData("text/plain", event.target.id);
}

function dragEnd(event) {
  draggableElement = null;
 }

 function dragOver(event) {
  event.preventDefault();
 }

 document.addEventListener('dragover', function (e) {
  e.preventDefault();
  });


function dragEnter(event) {
  event.preventDefault();
  this.classList.add("droppable-hover");
}

document.addEventListener('dragenter', function (e) {
  e.preventDefault();
      });


function dragOver(event) {
  event.preventDefault();
}


// function dragLeave(event) {
  // this.classList.remove("droppable-hover");
// }

function drop(event) {
  event.preventDefault();
  const droppableId = this.dataset.draggableId;
  const draggableId = event.dataTransfer.getData("text/plain");

  
  // check if the droppable id matches the draggable id
  if (droppableId === draggableId) {
    this.classList.remove("droppable-hover");
    this.appendChild(draggableElement);
    resultContainer.innerText = "Tama!";
  } else {
    this.classList.remove("droppable-hover");
    this.appendChild(droppableElements);
    resultContainer.innerText = "Mali";
  }


  


}


</script>

</body>
</html>