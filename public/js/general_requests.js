// $(document).ready(function() {
//     var dataTable = $('#data_table').DataTable({
//         lengthMenu: [
//             [20, 50, 100, -1],
//             [20, 50, 100, 'ทั้งหมด']
//         ],
//         language: {
//             url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json',
//         },
//     });
// });
$(document).ready(function() {
    var dataTable = $('#data_table').DataTable({
        lengthMenu: [
            [20, 50, 100, -1],
            [20, 50, 100, 'ทั้งหมด']
        ],
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/th.json',
        },
        order: [[0, 'desc']], // เปลี่ยน `0` เป็นหมายเลขคอลัมน์ของวันที่ (เริ่มนับจาก 0)
        columnDefs: [
            {
                targets: 0, // เปลี่ยน `0` ให้ตรงกับหมายเลขคอลัมน์ของวันที่
                render: function(data, type, row) {
                    if (type === 'sort' || type === 'type') {
                        // แปลงวันที่ให้อยู่ในรูปแบบ sortable (yyyy-mm-dd)
                        var dateParts = data.split('/'); // สมมติรูปแบบเป็น dd/mm/yyyy
                        return dateParts[2] + '-' + dateParts[1] + '-' + dateParts[0];
                    }
                    return data; // คืนค่าปกติสำหรับการแสดงผล
                }
            }
        ]
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const dateColumns = document.querySelectorAll('.date-column');
    dateColumns.forEach(function(cell) {
        const dateText = cell.textContent.trim();
        const dateParts = dateText.split('-');
        if (dateParts.length === 3) {
            let year = parseInt(dateParts[0], 10);
            const month = dateParts[1];
            const day = dateParts[2];
            year += 543;
            cell.textContent = `${day}/${month}/${year}`;
        }
    });
});
