@php
    $rows = [
        'Họ tên' => $lead['name'] ?? '',
        'Email' => $lead['email'] ?? '',
        'Điện thoại' => $lead['phone'] ?? '',
        'Công ty' => $lead['company'] ?? '',
        'Loại dự án' => $lead['project_type'] ?? '',
        'Ngân sách' => $lead['budget'] ?? '',
        'Ngôn ngữ' => $lead['locale'] ?? '',
        'Trang gửi' => $lead['page_url'] ?? '',
        'Thời điểm' => $lead['submitted_at'] ?? '',
        'IP' => $lead['ip'] ?? '',
    ];
@endphp
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ mới</title>
</head>
<body style="margin:0; padding:0; background:#f4f6fa; font-family:-apple-system,Segoe UI,Roboto,Helvetica,Arial,sans-serif; color:#0b0f15;">
    <div style="max-width:640px; margin:0 auto; padding:24px 16px;">
        <div style="background:#183060; border-radius:14px 14px 0 0; padding:20px 24px;">
            <div style="color:#ffffff; font-size:18px; font-weight:600;">Yêu cầu liên hệ mới</div>
            <div style="color:#c9d6ea; font-size:13px; margin-top:4px;">Hoàng Khang Incotech · Landing contact form</div>
        </div>
        <div style="background:#ffffff; border:1px solid #e6eaf0; border-top:0; border-radius:0 0 14px 14px; padding:8px 24px 20px;">
            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
                @foreach($rows as $label => $value)
                    @if(trim((string) $value) !== '')
                        <tr>
                            <td style="padding:10px 0; width:130px; vertical-align:top; color:#5b6675; font-size:13px; border-bottom:1px solid #eef1f6;">{{ $label }}</td>
                            <td style="padding:10px 0; vertical-align:top; color:#0b0f15; font-size:14px; font-weight:600; border-bottom:1px solid #eef1f6;">{{ $value }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>

            <div style="margin-top:18px;">
                <div style="color:#5b6675; font-size:13px; margin-bottom:6px;">Nội dung</div>
                <div style="background:#f6f8fb; border:1px solid #eef1f6; border-radius:10px; padding:14px 16px; font-size:14px; line-height:1.6; white-space:pre-wrap; color:#0b0f15;">{{ $lead['message'] ?? '' }}</div>
            </div>

            @if(! empty($lead['email']))
                <div style="margin-top:20px;">
                    <a href="mailto:{{ $lead['email'] }}" style="display:inline-block; background:#183060; color:#ffffff; text-decoration:none; font-size:14px; font-weight:600; padding:11px 20px; border-radius:8px;">Trả lời khách hàng</a>
                </div>
            @endif
        </div>
        <div style="text-align:center; color:#9aa5b5; font-size:12px; padding:16px 0;">
            Email tự động từ website Hoàng Khang Incotech · Trả lời email này sẽ gửi trực tiếp tới khách hàng.
        </div>
    </div>
</body>
</html>
