window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    // dashboard-project/accounts-list.php

    const datatablesSimple = document.getElementById('dataAccountsList');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }

});