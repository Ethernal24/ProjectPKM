document.getElementById('noPDAM-form').addEventListener('submit', function (event) {
    event.preventDefault();

    const inputData = document.getElementById('noPDAM-input').value;
    const dataDetail = document.getElementById('noPDAM-Detail');
    const errorMessage = document.getElementById('errorMessagePdam');

    fetch('/shop/pdam/check', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ m_cust_pdam: inputData })
    }).then(response => response.json()).then(data => {
        console.log(data);
        console.log(inputData);
        console.log({ m_cust_pdam: inputData });
        if (data.valid) {
            dataDetail.classList.remove('hidden');
            errorMessage.classList.add('hidden');
            document.getElementById('noPDAM-ID').value = data.cust_pdam_id;
            document.getElementById('alamatPDAM').value = data.cust_pdam_alamat;
            document.getElementById('periodePDAM').value = data.cust_pdam_id;
        } else {
            dataDetail.classList.remove('hidden');
            errorMessage.classList.add('hidden');
            document.getElementById('noPDAM-ID').value = data.cust_pdam_id;
            // errorMessage.classList.remove('hidden');
            // dataDetail.classList.add('hidden');
        }
        console.log(data.cust_pdam_id)
    }).catch(error => {
        console.error('Error:', error);
    });
});
