window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    // dashboard-project/account-view.php

    const datatablesSimple = document.getElementById('dataTableAccountView');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple);
    }

});