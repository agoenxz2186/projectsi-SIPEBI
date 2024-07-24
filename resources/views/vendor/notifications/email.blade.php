<x-mail::message>
{{-- Greeting --}}
# @lang('Halo!')



{{-- Custom Intro Lines --}}
<p>Anda menerima email ini karena kami menerima permintaan pengaturan ulang kata sandi untuk akun Anda.</p>

{{-- Action Button --}}
@isset($actionText)
<?php
    $color = $level === 'error' ? 'error' : 'primary';
?>
<x-mail::button :url="$actionUrl" :color="$color">
{{ $actionText }}
</x-mail::button>
@endisset



{{-- Custom Outro Lines --}}
<p>Tautan pengaturan ulang kata sandi ini akan kedaluwarsa dalam 60 menit. Jika Anda tidak meminta pengaturan ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan.</p>

{{-- Salutation --}}
@lang('Salam Hormat'),<br>
@lang('Admin Desa Sungai Ambangah')


{{-- Subcopy --}}
@isset($actionText)
<x-slot:subcopy>
@lang(
    "Jika Anda mengalami kesulitan mengklik tombol \":actionText\", salin dan tempel URL di bawah ini\n".
    'ke dalam peramban web Anda:',
    [
        'actionText' => $actionText,
    ]
) <span class="break-all">[{{ $displayableActionUrl }}]({{ $actionUrl }})</span>
</x-slot:subcopy>
@endisset
</x-mail::message>
