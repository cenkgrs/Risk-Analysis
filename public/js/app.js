document.addEventListener('DOMContentLoaded', function () {
    const wrapper = document.getElementById('share_holders_wrapper');

    // Yeni satır ekleme
    wrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('add_row')) {
            const firstRow = wrapper.querySelector('.share_holder_row');
            const newRow = firstRow.cloneNode(true);

            // Input değerlerini sıfırla
            newRow.querySelectorAll('input').forEach(input => input.value = '');

            // Sil butonunu aktif et
            newRow.querySelector('.remove_row').disabled = false;

            wrapper.appendChild(newRow);
        }
    });

    // Satır silme
    wrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove_row')) {
            const rows = wrapper.querySelectorAll('.share_holder_row');
            if (rows.length > 1) {
                e.target.closest('.share_holder_row').remove();
            } else {
                alert('En az bir şirket ortağı olmalı!');
            }
        }
    });


    const board_wrapper = document.getElementById('board_wrapper');

    // Yeni satır ekleme
    board_wrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('add_row')) {
            const firstRow = board_wrapper.querySelector('.board_row');
            const newRow = firstRow.cloneNode(true);

            // Input değerlerini sıfırla
            newRow.querySelectorAll('input').forEach(input => input.value = '');

            // Sil butonunu aktif et
            newRow.querySelector('.remove_row').disabled = false;

            board_wrapper.appendChild(newRow);
        }
    });

    // Satır silme
    board_wrapper.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove_row')) {
            const rows = board_wrapper.querySelectorAll('.board_row');
            if (rows.length > 1) {
                e.target.closest('.board_row').remove();
            } else {
                alert('En az bir yönetim üyesi olmalı!');
            }
        }
    });
});