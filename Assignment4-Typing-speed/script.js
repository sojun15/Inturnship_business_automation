// catch the html elements by their Ids
let user_input = document.getElementById("userInput");
let start_button = document.getElementById("startButton");
let paragraph = document.getElementById("paragraph"); 
let output = document.getElementById("output");
let count = document.getElementById("count");
let timer_display = document.getElementById("timer");

// remove space from last and first of the paragraph
let paragraphText = paragraph.textContent.trim();
// split the words in the paragraph by space, comma, or dot
let paragraphWords = paragraphText.split(/[ ,.]+/).filter(word => word.length > 0);

// when the user clicks the start button then it will work
start_button.addEventListener("click", () => {
    user_input.disabled = false;
    user_input.value = "";
    let seconds = 30;
    user_input.focus();

    let timerInterval = setInterval(() => {
        
        timer_display.textContent = `Time remaining: ${seconds} seconds`;
        seconds--;

        if(seconds < 0){
            // stop the setInterval function when the time is up
            clearInterval(timerInterval);
            user_input.disabled = true;

            let text = user_input.value.trim();
            let words = text.split(/[ ,.]+/).filter(word => word.length > 0);
    
            let correctWord = 0;
    
            for(let i = 0; i < words.length ; i++) {
            if(words[i] === paragraphWords[i]) {
                correctWord++;
                }
            }
    
        if(words.length === 0) {
            output.textContent = "You didn't type anything!";  
        }
        else{
            count.textContent = `You typed ${correctWord} correct words out of ${words.length}`;
            output.textContent = `Accurency: ${((correctWord / words.length) * 100).toFixed(2)}%`;
        }
    }
    }, 1000);
});
