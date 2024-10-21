<?php
return [
    'status_booking' => [
        'reserve'  => 1, // Đang đặt vé nhưng chưa chuyển khoản khoản
        'pending' => 2,
        'cancel' => 3, // Hủy đặt vé
        'paid' => 4,    // Đã thanh toán
        'refund' => 5   // hoàn tiền
    ],
];
