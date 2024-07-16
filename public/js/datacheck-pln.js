document.getElementById('noPLN-Form').addEventListener('submit', function(event) {
    event.preventDefault();

    const inputData = document.getElementById('noPLN-Input').value;
    const dataDetail = document.getElementById('noPLN-Detail'); 
    const errorMessage = document.getElementById('errorMessage');

    fetch('/shop/pln/check', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ m_list_no_pln: inputData })
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        if (data.valid) {
            dataDetail.classList.remove('hidden');
            errorMessage.classList.add('hidden');
            document.getElementById('noPLN-ID').value = data.list_no_pln_id;
        } else {
            errorMessage.classList.remove('hidden');
            dataDetail.classList.add('hidden');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
