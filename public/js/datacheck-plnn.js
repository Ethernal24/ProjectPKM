document.getElementById('noPLN-Form').addEventListener('submit', function(event) {
    event.preventDefault();


    const validData = "123";  // Replace this with your valid data 
    const inputData = document.getElementById('noPLN-Input').value;
    const dataDetail = document.getElementById('noPLN-Detail'); 
    const errorMessage = document.getElementById('errorMessage');

    if (inputData === validData) {
        dataDetail.classList.remove('hidden');
        errorMessage.classList.add('hidden');
    } else {
        dataDetail.classList.add('hidden');
        errorMessage.classList.remove('hidden');
    }
});



