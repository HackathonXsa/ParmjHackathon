<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
<!-- <img src="{{ asset('assets/Untitled_design-13@2x-c.png') }}" alt="logo"> -->
<img src="https://i.ibb.co/fGwS6Bg/Untitled-design-13-2x-c.png" alt="logo">
@if (trim($slot) === 'Laravel')
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
