const btn = document.getElementById('cancel');

function cancel()  {
    window.history.back();
}
btn.addEventListener('click', cancel);