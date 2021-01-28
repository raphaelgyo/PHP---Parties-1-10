// DARK MODE
function myFunction() {
    var element = document.body;
    element.classList.toggle('dark-mode');
    var element2 = document.getElementById('buttonSwitchMode');
    if (element2.innerHTML == '<i class="fas fa-moon"></i>') {
        element2.innerHTML = '<i class="fas fa-sun"></i>';
        element2.classList.add('btn-light');
        element2.classList.remove('btn-dark');
    } else {
        element2.innerHTML = '<i class="fas fa-moon"></i>';
        element2.classList.add('btn-dark');
        element2.classList.remove('btn-light');
    }
}
