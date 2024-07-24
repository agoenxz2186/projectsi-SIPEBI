@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjXPQJJgdpzIPlp_GxlQzCupnA6X_Vt8KtFg&s" alt="" width="100px" height="100px" class="img-fluid">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
