<p>
	Halo {{ $member->name }}.
</p>
<p>
	Admin telah mendaftarkan email Anda ({{ $member->email}}) ke Larapus. Untuk login, silahkan kunjungi <a href="{{ $login = url('login')  }}">{{ $login }}</a>. Login dengan email Anda dan password <strong>{{ $password }}</strong>
</p>

<p>
	Jika Andda ingin mengubah password, silakan kunjungi <a href="{{ $reset = url('password/reset')  }}">{{ $reset }}</a> dan masukan email Anda.
</p>