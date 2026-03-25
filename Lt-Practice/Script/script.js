document.getElementById("anlyBtn").addEventListener("click", analyzeText);

function analyzeText(){
    const text = document.getElementById("txtInput").value;
    const rst = document.getElementById("result");

    const charCount = text.length;

    console.log(charCount)
}