  // variable pour enregister les réponses du sondage

  const answerRecord = [];

  function clickAnswer(clicked) {
      answerRecord.push(clicked);
  }

  // Définition de fonctions
  (function() {

      function buildQuiz() {
          // variable pour stocker ce qui va être affiché sur la page HTML
          const output = [];

          // Pour chaque question

          //questionNumber est la position (ou l'index) dans la structure myQuestions et currentQuestion est l valeur à cette position
          myQuestions.forEach((currentQuestion, questionNumber) => {

              // variable pour stocker la liste des réponses
              const answers = [];

              // pour chaque bonne réponse
              for (letter in currentQuestion.answers) {

                  // ajout de boutons
                  // answers.push permet d'écrire dans le tableau answers
                  answers.push(
                      `<label>
                <input id="${letter}" type="button" name="question${questionNumber}" value="${currentQuestion.answers[letter]}" onclick="clickAnswer(this.id)">
              </label>`
                  );
              }

              // Remplissage du tableau output avec chaque questions et réponses
              output.push(
                  `<div class="slide">
              <div class="question"> ${currentQuestion.question} </div>
              <div class="answers"> ${answers.join('')} </div>
            </div>`
              );
          });

          // Afficher ce qui correspond à la div quiz 
          quizContainer.innerHTML = output.join('');
      }


      // fonction résultats
      function showResults() {

          // compteur de bonnes réponses
          let numCorrect = 0;

          // pour  chaque question
          //questionNumber est la position (ou l'index) dans la structure myQuestions et currentQuestion est l valeur à cette position

          myQuestions.forEach((currentQuestion, questionNumber) => {

              // variables qui contient les réponses de l'utilisateur
              const userAnswer = answerRecord[questionNumber];

              // si la réponse est bonne on incrémente le compteur
              if (userAnswer === currentQuestion.correctAnswer) {
                  numCorrect += 1;
              }
          });

          // Calcul du résultat + affichage
          numCorrect *= 25;
          resultsContainer.innerHTML = `Tu as terminé le sondage et a obtenu un score de ${numCorrect}/100.`;
      }
      // affichage slides
      //ajout de la class active slide à la div slide
      function showSlide(n) {
          slides[currentSlide].classList.remove('active-slide');
          slides[n].classList.add('active-slide');
          currentSlide = n;
          // si on est sur la dernière slide, afficher le bouton submit
          if (currentSlide === slides.length - 1) {

              submitButton.style.display = 'inline-block';
          } else {

              submitButton.style.display = 'none';
          }
      }
      // aller à la slide suivante sauf si on est sur la dernière
      function showNextSlide() {
          if (currentSlide !== slides.length - 1) {
              showSlide(currentSlide + 1);
          }
      }


      // Variables

      const quizContainer = document.getElementById('quiz');
      const resultsContainer = document.getElementById('results');
      const submitButton = document.getElementById('submit');
      const myQuestions = [{
              question: "Quel est le pays ayant remporté le plus de Coupe du monde ?",
              answers: {
                  1: "Argentine",
                  2: "Brésil",
                  3: "Allemagne"
              },
              correctAnswer: "2"
          },
          {
              question: "De quand date la première Coupe du Monde ?",
              answers: {
                  1: "1930",
                  2: "1940",
                  3: "1950"
              },
              correctAnswer: "1"
          },
          {
              question: "Qui a été le meilleur buteur lors de la Coupe du Monde de 2018 ?",
              answers: {
                  1: "Kylian Mbappé",
                  2: "Cristiano Ronaldo",
                  3: "Harry Kane",
                  4: "Eden Hazard"
              },
              correctAnswer: "3"
          },
          {
              question: "Dans quel pays se déroulera la prochaine Coupe du Monde ?",
              answers: {
                  1: "Russie",
                  2: "Qatar",
                  3: "Japon",
                  4: "France"
              },
              correctAnswer: "2"
          }
      ];

      // affichage
      buildQuiz();

      // création boutons et slides

      const answerButtons = document.querySelectorAll('input[type="button"]');
      const slides = document.querySelectorAll(".slide");
      let currentSlide = 0;

      // Montrer la 1ère slide
      showSlide(currentSlide);

      // Surle clic du bouton "submit quiz" afficher les résultats
      submitButton.addEventListener("click", showResults);
      // sur clic d'une réponse passer au slide suivant
      for (const answerButton of answerButtons) {
          answerButton.addEventListener("click", showNextSlide);
      }
  })();