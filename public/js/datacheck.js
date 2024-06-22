document.getElementById('dataForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const validData = "123";  // Replace this with your valid data
    const inputData = document.getElementById('dataInput').value;
    const dataDetail = document.getElementById('dataDetail');
    const errorMessage = document.getElementById('errorMessage');

    if (inputData === validData) {
        dataDetail.classList.remove('hidden');
        errorMessage.classList.add('hidden');
    } else {
        dataDetail.classList.add('hidden');
        errorMessage.classList.remove('hidden');
    }
});
