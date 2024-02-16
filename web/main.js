/*function addComment() {
    var commentInput = document.getElementById("comment-input");
    var commentText = commentInput.value.trim();

    if (commentText !== "") {
        var commentList = document.getElementById("comment-list");
        var newComment = document.createElement("li");
        newComment.className = "comment";

        // Create a span for the comment text
        var commentTextSpan = document.createElement("span");
        commentTextSpan.textContent = commentText;
        newComment.appendChild(commentTextSpan);

        // Create a span for the timestamp
        var timestampSpan = document.createElement("span");
        timestampSpan.className = "timestamp";
        timestampSpan.textContent = getFormattedTimestamp();
        newComment.appendChild(timestampSpan);

        // Create a delete button
        var deleteButton = document.createElement("button");
        deleteButton.textContent = "Delete";
        deleteButton.onclick = function() {
            commentList.removeChild(newComment);
        };
        newComment.appendChild(deleteButton);

        commentList.appendChild(newComment);

        // Clear the input field after adding the comment
        commentInput.value = "";
    }
}*/

function ertekeles(csillagSzam) {
    aktivaltCsillag = csillagSzam;

    for (let i = 1; i <= 5; i++) {
        let csillagId = "csillag" + i;
        let csillagElem = document.getElementById(csillagId);

        if (i <= csillagSzam) {
            csillagElem.classList.add("checked");
        } else {
            csillagElem.classList.remove("checked");
        }
    }
}

function addComment() {
    var commentInput = document.getElementById("comment-input").value;
    // Ellenőrizze, hogy a commentInput nem üres
    if (commentInput.trim() !== "") {
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "velemeny.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Sikeres válasz esetén továbblendítheti a felhasználót egy másik oldalra vagy kezelheti a választ
                // pl.: window.location.href = "uj_oldal.php";
            }
        };
        xhr.send("velemeny=" + encodeURIComponent(commentInput));
    } else {
        alert("A comment cannot be empty.");
    }
}
const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')

let currentQuestionIndex // Már nem szükséges a shuffledQuestions vagy a setNextQuestion függvény

startButton.addEventListener('click', startGame)
nextButton.addEventListener('click', () => {
  currentQuestionIndex++
  showQuestion()
})

function startGame() {
  startButton.classList.add('hide')
  currentQuestionIndex = 0 // Csak az aktuális kérdés indexének nullázása szükséges
  score = 0
  questionContainerElement.classList.remove('hide')
  showQuestion() // Mindjárt meghívjuk, hogy megjelenítse az első kérdést
}

function showQuestion() {
  resetState()
  const currentQuestion = questions[currentQuestionIndex] // Az aktuális kérdést kiválasztjuk az index alapján
  questionElement.innerText = currentQuestion.question
  currentQuestion.answers.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
      button.dataset.correct = answer.correct
    }
    button.addEventListener('click', selectAnswer)
    answerButtonsElement.appendChild(button)
  })
}

function resetState() {
  clearStatusClass(document.body)
  nextButton.classList.add('hide')
  while (answerButtonsElement.firstChild) {
    answerButtonsElement.removeChild(answerButtonsElement.firstChild)
  }
}


function selectAnswer(e) {
  const selectedButton = e.target
  const correct = selectedButton.dataset.correct
  setStatusClass(document.body, correct)
  Array.from(answerButtonsElement.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
  })
  if (questions.length > currentQuestionIndex + 1) { // Ellenőrizzük, hogy van-e még további kérdés
    nextButton.classList.remove('hide')
  } else {
    startButton.innerText = 'Újra kitöltöm'
    startButton.classList.remove('hide')
  }
}

function setStatusClass(element, correct) {
  clearStatusClass(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }
}

function clearStatusClass(element) {
  element.classList.remove('correct')
  element.classList.remove('wrong')
}

function updateScore() {
    scoreDisplay.innerText = `Pontszám: ${score}` // Frissítsük a pontszám kijelzést
  }
  

const questions = [
  {
    question: '1. Hány gólt szerzett eddig ifj Lisztes krisztián a Ferencváros csapatában?',
    answers: [
      { text: '6', correct: false },
      { text: '7', correct: true },
      { text: '8', correct: false },
      { text: '10', correct: false }
    ]
  },
  {
    question: '2. Hány KTE futballista Magyar válogatott jelenleg?',
    answers: [
      { text: '5', correct: false },
      { text: '4', correct: false },
      { text: '1', correct: false },
      { text: '3', correct: true }
    ]
  },
  {
    question: '3. Hanyadik selejtező körig jutott el a DVSC a legutóbbi Konferencia liga kiírásban?',
    answers: [
      { text: '3', correct: true },
      { text: '5', correct: false },
      { text: '2', correct: false },
      { text: '1', correct: false }
    ]
  },
  {
    question: '4. Ki az Újpest FC házi gólkirálya jelenleg?',
    answers: [
      { text: 'Peter Ambrose', correct: false },
      { text: 'Csoboth Kevin', correct: false },
      { text: 'Matija Ljujic', correct: true },
      { text: 'Heinz Morschel', correct: false }
    ]
  },
  {
    question: '5. A bajnokság hanyadik helyen végzett az előző szezonban a Puskás Akadémia?',
    answers: [
      { text: 'negyedik', correct: true },
      { text: 'ötödik', correct: false },
      { text: 'hetedik', correct: false },
      { text: 'második', correct: false }
    ]
  },
  {
    question: '6. Az NB1 előző szezonjában melyik két csapat esett ki?',
    answers: [
      { text: 'Budapest Honvéd/Kisvárda', correct: false },
      { text: 'Vasas/Mezőkövesd', correct: false },
      { text: 'Budapest Honvéd/Vasas', correct: true },
      { text: 'ZTE/Fehérvár FC', correct: false }
    ]
  },
  {
    question: '7. Hány mérkőzést nyert meg a Vasas tavaly az NB1-ben?',
    answers: [
      { text: '5', correct: false },
      { text: '4', correct: true },
      { text: '7', correct: false },
      { text: '10', correct: false }
    ]
  },
  {
    question: '8. Melyik csapat nyerte tavaly a Mol Magyar kupát?',
    answers: [
      { text: 'ZTE', correct: true },
      { text: 'Ferencvárosi TC', correct: false },
      { text: 'Budafok', correct: false },
      { text: 'Újpest FC', correct: false }
    ]
  },
  {
    question: '9. Hány külföldi játékos szerepel a Paksi FC csapatában?',
    answers: [
      { text: '2', correct: false },
      { text: '5', correct: false },
      { text: '3', correct: false },
      { text: '0', correct: true }
    ]
  },
  {
    question: '10. Mennyit fizetett a Liverpool Szoboszlai Dominikért a nyáron?',
    answers: [
      { text: '35 millió eurót', correct: false },
      { text: '50 millió eurót', correct: false },
      { text: '80 millió eurót', correct: true },
      { text: '70 millió eurót', correct: false }
    ]
  },
  {
    question: '11. Melyik Angol csapatba igazolt nyáron Kerkez Milos',
    answers: [
      { text: 'Bournemouth', correct: true },
      { text: 'Wolverhampton', correct: false },
      { text: 'Leicester City', correct: false},
      { text: 'Fulham', correct: false }
    ]
  },
  {
    question: '12. Melyik bajnokságban futballozik jelenleg Vancsa Zalán?',
    answers: [
      { text: 'Holland Bajnokság', correct: false },
      { text: 'Belga Bajnokság', correct: true },
      { text: 'Norvég Bajnokság', correct: false },
      { text: 'Lengyel Bajnokság', correct: false }
    ]
  },
  {
    question: '13. Ki volt az NB1 gólkirálya a tavalyi szezonban?',
    answers: [
      { text: 'Horváth Krisztofer', correct: false },
      { text: 'Dorian Babunski', correct: false },
      { text: 'Adama Traore', correct: false },
      { text: 'Varga Barnabás', correct: true }
    ]
  },
  {
    question: '14. Melyik két csapat jutott fel újoncként az NB1-be 2023 nyarán?',
    answers: [
      { text: 'DVTK/Győri Eto', correct: false },
      { text: 'Nyíregyháza/Szeged', correct: false },
      { text: 'DVTK/MTK', correct: true },
      { text: 'MTK/Haladás FC', correct: false }
    ]
  },
  {
    question: '15. Melyik az NB1 legnagyobb stadionja?',
    answers: [
      { text: 'Groupama Aréna(Ferencváros)', correct: true },
      { text: 'Nagyerdei Stadion(Debrecen)', correct: false },
      { text: 'MOl Aréna Sóstó(Fehérvár FC)', correct: false },
      { text: 'Pancho Aréna(Puskás Akadémia)', correct: false }
    ]
  },
]