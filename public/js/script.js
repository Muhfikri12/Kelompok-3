$(document).ready(function() {
    $('.datatable').DataTable({
        responsive: true,
        ordering : false,
        columnDefs: [
            { targets: '_all', className: 'text-center' }
        ],
        language: {
            search: "Cari : ",
            lengthMenu: " _MENU_ Data",
            ordering : false,
            info: "Data _START_ - _END_ dari _TOTAL_ data",
        },
    });
});

$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
