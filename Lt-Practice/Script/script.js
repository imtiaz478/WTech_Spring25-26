document.getElementById("anlyBtn").addEventListener("click", analyzeText);

function analyzeText(){
    const text = document.getElementById("txtInput").value;
    const rst = document.getElementById("result");

    const charCount = text.length;

    const words = text.trim().split(" ");
    const wordsCount = words.length;

    console.log(charCount)
    console.log(wordsCount)

    const reversedText = text.split("").reverse().join("");

    console.log(reversedText)

    rst.innerHTML = `
    <p>Character Count: ${charCount}</p>
    <p>word Count: ${wordsCount}</p>
    <p>Reverse string: ${reversedText}</p>

    `
}