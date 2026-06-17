<?php

return [
    '400' => [
        'title' => 'Yêu cầu không hợp lệ',
        'message' => 'Máy chủ không thể hiểu yêu cầu của bạn. Vui lòng kiểm tra lại thông tin và thử lại.',
    ],
    '401' => [
        'title' => 'Chưa được ủy quyền',
        'message' => 'Bạn không có quyền truy cập vào tài nguyên này. Vui lòng kiểm tra lại thông tin đăng nhập và thử lại.',
    ],
    '402' => [
        'title' => 'Yêu cầu thanh toán',
        'message' => 'Hành động này yêu cầu thanh toán. Vui lòng thanh toán tài khoản của bạn để tiếp tục.',
    ],
    '403' => [
        'title' => 'Bị cấm truy cập',
        'message' => 'Bạn không có quyền truy cập vào trang này hoặc thực hiện hành động này.',
    ],
    '404' => [
        'title' => 'Không tìm thấy trang',
        'message' => 'Chúng tôi không thể tìm thấy trang bạn đang tìm kiếm. Nó có thể đã bị di chuyển hoặc xóa.',
    ],
    '405' => [
        'title' => 'Phương thức không được phép',
        'message' => 'Hành động bạn đang thử không được phép. Vui lòng kiểm tra lại phương thức yêu cầu.',
    ],
    '406' => [
        'title' => 'Không được chấp nhận',
        'message' => 'Máy chủ không thể cung cấp phản hồi phù hợp với các tiêu chí yêu cầu của bạn.',
    ],
    '407' => [
        'title' => 'Yêu cầu xác thực Proxy',
        'message' => 'Vui lòng cung cấp thông tin xác thực proxy hợp lệ để truy cập tài nguyên này.',
    ],
    '408' => [
        'title' => 'Hết thời gian yêu cầu',
        'message' => 'Yêu cầu của bạn mất quá nhiều thời gian. Vui lòng kiểm tra kết nối mạng và thử lại.',
    ],
    '409' => [
        'title' => 'Xung đột dữ liệu',
        'message' => 'Có sự xung đột với trạng thái hiện tại của tài nguyên. Vui lòng xem lại yêu cầu của bạn.',
    ],
    '410' => [
        'title' => 'Đã biến mất',
        'message' => 'Tài nguyên bạn đang cố gắng truy cập đã bị xóa vĩnh viễn.',
    ],
    '411' => [
        'title' => 'Yêu cầu độ dài',
        'message' => 'Vui lòng bao gồm một tiêu đề Content-Length hợp lệ trong yêu cầu của bạn.',
    ],
    '412' => [
        'title' => 'Điều kiện tiên quyết thất bại',
        'message' => 'Yêu cầu của bạn không đáp ứng các điều kiện tiên quyết do máy chủ quy định.',
    ],
    '413' => [
        'title' => 'Dữ liệu quá lớn',
        'message' => 'Yêu cầu của bạn quá lớn để xử lý. Vui lòng giảm dung lượng và thử lại.',
    ],
    '414' => [
        'title' => 'URI quá dài',
        'message' => 'Đường dẫn URL bạn yêu cầu quá dài. Hãy thử rút ngắn nó và gửi lại.',
    ],
    '415' => [
        'title' => 'Định dạng phương tiện không được hỗ trợ',
        'message' => 'Máy chủ không thể xử lý định dạng này. Vui lòng điều chỉnh định dạng yêu cầu của bạn.',
    ],
    '416' => [
        'title' => 'Phạm vi không thỏa mãn',
        'message' => 'Phạm vi yêu cầu của bạn không có sẵn cho tài nguyên này.',
    ],
    '417' => [
        'title' => 'Kỳ vọng thất bại',
        'message' => 'Máy chủ không thể đáp ứng các kỳ vọng được chỉ định trong yêu cầu của bạn.',
    ],
    '418' => [
        'title' => 'Yêu cầu không được hỗ trợ',
        'message' => 'Máy chủ từ chối xử lý yêu cầu này vì nó không được hỗ trợ. Vui lòng xem lại yêu cầu và thử lại.',
    ],
    '419' => [
        'title' => 'Trang đã hết hạn',
        'message' => 'Phiên làm việc của bạn đã hết hạn. Vui lòng tải lại trang và thử lại.',
    ],
    '421' => [
        'title' => 'Yêu cầu sai hướng',
        'message' => 'Yêu cầu của bạn đã được gửi đến sai máy chủ. Vui lòng thử lại.',
    ],
    '422' => [
        'title' => 'Thực thể không thể xử lý',
        'message' => 'Chúng tôi không thể xử lý yêu cầu do dữ liệu không hợp lệ. Vui lòng kiểm tra lại thông tin.',
    ],
    '423' => [
        'title' => 'Bị khóa',
        'message' => 'Tài nguyên hiện đang bị khóa và không thể sửa đổi. Vui lòng thử lại sau.',
    ],
    '424' => [
        'title' => 'Phụ thuộc thất bại',
        'message' => 'Yêu cầu này thất bại vì một yêu cầu liên quan trước đó đã không thành công.',
    ],
    '425' => [
        'title' => 'Quá sớm',
        'message' => 'Máy chủ chưa sẵn sàng xử lý yêu cầu này. Vui lòng thử lại sau.',
    ],
    '426' => [
        'title' => 'Yêu cầu nâng cấp',
        'message' => 'Vui lòng nâng cấp giao thức hoặc máy khách của bạn để thực hiện yêu cầu này.',
    ],
    '428' => [
        'title' => 'Yêu cầu điều kiện tiên quyết',
        'message' => 'Yêu cầu này đòi hỏi một số điều kiện phải được đáp ứng. Vui lòng thêm các tiêu đề cần thiết.',
    ],
    '429' => [
        'title' => 'Quá nhiều yêu cầu',
        'message' => 'Bạn đã gửi quá nhiều yêu cầu trong một thời gian ngắn. Vui lòng chờ một lát rồi thử lại.',
    ],
    '431' => [
        'title' => 'Trường tiêu đề yêu cầu quá lớn',
        'message' => 'Các tiêu đề trong yêu cầu của bạn quá lớn. Vui lòng giảm kích thước và thử lại.',
    ],
    '444' => [
        'title' => 'Kết nối đã đóng',
        'message' => 'Máy chủ đã đóng kết nối mà không gửi lại phản hồi nào.',
    ],
    '451' => [
        'title' => 'Không khả dụng vì lý do pháp lý',
        'message' => 'Quyền truy cập vào tài nguyên này bị hạn chế vì lý do pháp lý hoặc quy định.',
    ],
    '499' => [
        'title' => 'Khách hàng đóng yêu cầu',
        'message' => 'Kết nối đã bị ngắt bởi khách hàng trước khi yêu cầu kịp hoàn thành.',
    ],
    '500' => [
        'title' => 'Lỗi máy chủ',
        'message' => 'Đã xảy ra lỗi không mong muốn trên hệ thống máy chủ. Vui lòng thử lại sau hoặc liên hệ hỗ trợ nếu sự cố vẫn tiếp diễn.',
    ],
    '501' => [
        'title' => 'Chưa được triển khai',
        'message' => 'Chức năng này hiện chưa được máy chủ hỗ trợ.',
    ],
    '502' => [
        'title' => 'Lỗi Gateway',
        'message' => 'Máy chủ nhận được phản hồi không hợp lệ từ máy chủ tuyến trên. Vui lòng thử lại.',
    ],
    '503' => [
        'title' => 'Dịch vụ không khả dụng',
        'message' => 'Nền tảng của chúng tôi hiện đang được bảo trì định kỳ. Chúng tôi sẽ hoạt động trở lại sớm nhất có thể. Cảm ơn sự kiên nhẫn của bạn.',
    ],
    '504' => [
        'title' => 'Hết thời gian Gateway',
        'message' => 'Máy chủ đã hết thời gian chờ phản hồi từ máy chủ khác. Vui lòng thử lại sau.',
    ],
    '505' => [
        'title' => 'Phiên bản HTTP không được hỗ trợ',
        'message' => 'Máy chủ không hỗ trợ phiên bản HTTP được sử dụng trong yêu cầu này.',
    ],
    '506' => [
        'title' => 'Biến thể cũng thương lượng',
        'message' => 'Máy chủ gặp lỗi cấu hình nội bộ. Vui lòng thử lại sau.',
    ],
    '507' => [
        'title' => 'Không đủ bộ nhớ lưu trữ',
        'message' => 'Máy chủ không thể lưu trữ dữ liệu cần thiết để hoàn thành yêu cầu này.',
    ],
    '508' => [
        'title' => 'Phát hiện vòng lặp',
        'message' => 'Máy chủ phát hiện một vòng lặp vô hạn trong quá trình xử lý yêu cầu.',
    ],
    '509' => [
        'title' => 'Vượt quá giới hạn băng thông',
        'message' => 'Trang web này đã vượt quá giới hạn băng thông được phân bổ. Vui lòng thử lại sau.',
    ],
    '510' => [
        'title' => 'Không được mở rộng',
        'message' => 'Yêu cầu này đòi hỏi các tiện ích mở rộng bổ sung mà máy chủ không hỗ trợ.',
    ],
    '511' => [
        'title' => 'Yêu cầu xác thực mạng',
        'message' => 'Bạn cần xác thực để có quyền truy cập mạng. Vui lòng cung cấp thông tin đăng nhập.',
    ],
];
