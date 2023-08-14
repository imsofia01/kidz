<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="css/dragObject.css">
    <title>Document</title>
</head>

<body>
<div class="home-box custom-box ">
        <h2> Pagsusulit  </h2>
        <p> Bilang ng mga Tanong: <span class="tanong"> </span></p>
        <button id="btn" type="button" class="btn" onclick="simulaQuiz()"> Simula </button>
    </div>

  <!-- drag box w/ picture -->
  <div  id="container-box-1" class="container-box custom-box hide" >
        <div class="tanong-bilang">
    
        </div>
        <div class="draggable-element">
          <img class="draggable" draggable="true" src="pics/girl.jpg" id="Babae"> </img>
          <img class="draggable" draggable="true" src="pics/lalaki.png" id="Lalaki"> </img>
          <img class="draggable" draggable="true" src="pics/kamay.png" id="Kamay"> </img>
        </div>

        <div class="droppable-points" id="drop">
          <div class="droppable" data-draggable-id="Lalaki"> <span> Lalaki </span> </div> 
          <div class="droppable" data-draggable-id="Kamay"> <span> Kamay </span> </div>
          <div class="droppable" data-draggable-id="Babae"> <span> Babae </span> </div>
        </div>
          
        <div class="draggable-element">
        <img class="draggable" draggable="true" src="pics/Aso.jpg" id="Aso"> </img>
        <img class="draggable" draggable="true" src="pics/paru-paro.jpg" id="Paru-paro"> </img>
        <img class="draggable" draggable="true" src="pics/ibon.jpg" id="Ibon"> </img>
        </div>
        <div class="droppable-points" id="drop">
            <div class="droppable" data-draggable-id="Aso"> <span> Aso </span> </div> 
            <div class="droppable" data-draggable-id="Paru-paro"> <span> Paru-paro </span> </div>
            <div class="droppable" data-draggable-id="Ibon"> <span> Ibon </span> </div>
        </div>  
        <div class="score-indicator">
      <span id="correctCount">0</span> 
        <span id="wrongCount">0</span>
    </div>
    <br>

        <div class="sunod-tanong-btn">
        <button id="btn" type="button" class="btn" onclick="sunod()"> Sunod </button>
   
      </div>
  </div>
  
  

<!-- <script src="js/images.js"></script> -->
<script type="text/javascript">

const customBox = document.querySelector(".custom-box")
const dropNumber = document.querySelector(".tanong-bilang");
const container =document.querySelector("#container-box-1");
const containerBox =document.querySelector("#container-box-2");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".container-box");
const nextBtn = document.getElementById('myBtn');
const answersIndicatorContainer = document.querySelectorAll(".sagot-indicator");
const sagotIndicator = document.querySelector('.sagot-indicator');

let questionCounter = 0;
let results = [];

function getNewQuestion(){
  dropNumber.innerHTML = "Tanong " + (questionCounter + 1) + " hanggang " + containerBox;
}


// Get all draggable elements
const draggableElements = document.querySelectorAll('.draggable');

// Add event listeners to enable dragging
  draggableElements.forEach((element) => {
    element.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id);

    //console.log(draggableElements)
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
    const expectedAnswer = element.getAttribute('data-draggable-id');
    const isCorrect = draggableId === expectedAnswer;
    
     // Check if the droppable element already contains an image
      // An answer has already been placed, handle accordingly (e.g., display an error message)
     if (element.querySelector('.draggable')) {
      console.log('An answer has already been placed in the droppable element.');
      return;
    }
    
    if (isCorrect) {
      // Correct answer
      draggableElement.classList.add('correct');
      element.classList.add('correct');
      console.log('Correct answer!');

    // Disable drag functionality for the dropped image
    draggableElement.draggable = false;

    } else {
      // Wrong answer
      draggableElement.classList.add('wrong');
      element.classList.add('wrong');
      console.log('Wrong answer!');

       // Disable drag functionality for the dropped image
    draggableElement.draggable = false;

    }

      // Remove the element from its previous parent
      if (draggableElement.parentElement !== null) {
      draggableElement.parentElement.removeChild(draggableElement);
    }

    element.appendChild(draggableElement);
    

      // Store the result in the results array
      results.push(isCorrect);
  

  let correctCount = 0;
  let wrongCount = 0;
  for(let i = 0; i < results.length; i++){
    if( results[i] === true){
      correctCount++;
    }else{
      wrongCount++;
    }
  }
  document.getElementById('correctCount').textContent = correctCount;
  document.getElementById('wrongCount').textContent = wrongCount;
});
});

function sunod() {
  
 
    container.classList.add("hide");
    containerBox.classList.remove("hide");

    console.log('Next button clicked!');
 
  }



function simulaQuiz() {

// HIDE HOME BOX 
    homeBox.classList.add("hide");
    // show quiz box
    container.classList.remove("hide");
}


</script>

</body>
</html>