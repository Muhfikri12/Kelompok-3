
$(document).ready(function () {
    $('.datatable').DataTable({
        responsive: true,
        ordering: false,
        columnDefs: [
            { targets: '_all', className: 'text-center' }
        ],
        language: {
            search: "Cari : ",
            searchPlaceholder: "Tahun",
            lengthMenu: " _MENU_ Data",
            ordering: false,
            info: "Data _START_ - _END_ dari _TOTAL_ data",
        },
    });
});

