document.getElementById('menu').onclick = function() {
    document.getElementById('menubar').classList.toggle('right')
}
buttons = document.querySelectorAll('button[type="button"]');
numberOfButton = buttons.length;
console.log(numberOfButton);
for (let i = 1; i <= numberOfButton; i++) {
    document.getElementsByClassName(`button-show-code-${i}`)[0].onclick = function() {
        document.getElementsByClassName(`pre-${i}`)[0].classList.toggle('display-code')
        document.getElementsByClassName(`pre-${i}`)[0].classList.toggle('hidden-code')
        if (document.getElementsByClassName(`pre-${i}`)[0].classList.contains('display-code')) {
            document.getElementsByClassName(`button-show-code-${i}`)[0].innerHTML = 'hidden code';
        } else {
            document.getElementsByClassName(`button-show-code-${i}`)[0].innerHTML = 'show the code';
        }
    }
}