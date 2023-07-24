<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit-no">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/dragObject.css">
    <title>Document</title>
</head>

<body>
    
<div class="home-box custom-box hide">
        <h2> Pagsusulit  </h2>
        <p> Bilang ng mga Tanong: <span class="tanong"> </span></p>
        <button type="button" class="btn" onclick="simulaQuiz()"> Simula </button>
    </div>

  <!-- drag box w/ picture -->
  <div  id="container-box-1" class="container-box custom-box">
        <div class="tanong-bilang">
           
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

        <div class="sunod-tanong-btn">
        <button id="myBtn" type="button" class="btn" onclick="sunod()"> Sunod </button>
      </div>
      <br>
    
       <div class="sagot-indicator">
          
        </div>
  </div>
  
        <div id="container-box-2" class="container-box custom-box hide ">
        <div class="tanong-bilang">
          <h2> Mga Imahe <span id="question-number">1</span></h2>
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
  

<script src="js/images.js"></script>
<script type="text/javascript">

const answersIndicatorContainer = document.querySelectorAll(".sagot-indicator");
const sagotIndicator = document.querySelector('.sagot-indicator');

// Get all draggable elements
const draggableElements = document.querySelectorAll('.draggable');


// Function to update the question number
function updateQuestionNumber(number) {
  const questionNumberElement = document.getElementById('question-number');
  questionNumberElement.innerText = number;
}
// Add event listeners to enable dragging
  draggableElements.forEach((element) => {
    element.addEventListener('dragstart', (e) => {
    e.dataTransfer.setData('text/plain', e.target.id);
    console.log(draggableElements)
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
    
    
    if (draggableId === expectedAnswer) {
      // Correct answer
      draggableElement.classList.add('correct');
      element.classList.add('correct');
      console.log('Correct answer!');
    } else {
      // Wrong answer
      draggableElement.classList.add('wrong');
      element.classList.add('wrong');
      console.log('Wrong answer!');

    }

    if (element.querySelector('.draggable')) {
      // An answer has already been placed, handle accordingly (e.g., display an error message)
      console.log('An answer has already been placed in the droppable element.');
      return;

    }


    element.appendChild(draggableElement);

  




});
});


</script>

</body>
</html>