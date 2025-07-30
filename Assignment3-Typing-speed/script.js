let userInput = document.getElementById("userInput");
let startButton = document.getElementById("startButton");
let paragraph = document.getElementById("paragraph"); 

startButton.addEventListener("click", () => {
    let text = userInput.value.trim();
    // split the input text into words, discarding all empty strings
    let words = text.split(/[ ,.]+/).filter(word => word.length > 0);

    let output = document.getElementById("output");
    let count = document.getElementById("count");
    let paragraphText = paragraph.textContent.trim();
    let paragraphWords = paragraphText.split(/[ ,.]+/).filter(word => word.length > 0);
    
    let correctWord = 0;
    
    for(let i = 0; i < words.length && i < paragraphWords.length; i++) {
        if(words[i] === paragraphWords[i]) {
            correctWord++;
        }
    }
    
    count.textContent = `You typed ${correctWord} correct words out of ${words.length}.`;
    output.textContent = `Accurency: ${((correctWord / words.length) * 100).toFixed(2)}%`;
});
