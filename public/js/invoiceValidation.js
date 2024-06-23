document.getElementById('submitButton').addEventListener('click', function() {
    var content1 = document.getElementById('tittleTokenPLN');
    var content = document.getElementById('tokenPLN');
    if (content1.classList.contains('hidden') && content.classList.contains('hidden')) {
        content1.classList.remove('hidden');
        content.classList.remove('hidden');
    }
});
