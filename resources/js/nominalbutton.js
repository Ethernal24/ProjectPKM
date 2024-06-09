const btnElList = document.querySelectorAll('.voucher');

btnElList.forEach(btnEL => {
    btnEL.addEventListener('click',()=>{
        document.querySelector('.voucheractive')?.classList.remove('voucheractive')
        btnEL.classList.add('voucheractive');
    });
});