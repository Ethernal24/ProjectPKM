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
        if (data.valid) {
            dataDetail.classList.remove('hidden');
            errorMessage.classList.add('hidden');
            document.getElementById('noPDAM-ID').textContent = data.cust_pdam_id;
            document.getElementById('noPDAM-Detail-Input').textContent = data.cust_pdam_no;
            document.getElementById('alamatPDAM').textContent = data.cust_pdam_alamat;
            document.getElementById('periodePDAM').textContent = data.cust_pdam_periode;
            // const tagihan = Number(data.cust_pdam_total)
            document.getElementById('tagihanPDAM').textContent = data.cust_pdam_total
        } else {
            errorMessage.classList.remove('hidden');
            dataDetail.classList.add('hidden');
        }
    }).catch(error => {
        console.error('Error:', error);
    });
});
