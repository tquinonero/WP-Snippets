add_filter(
	'login_errors',
	function ( $error ) {
		// Edit the line below to customize the message.
		return 'Something is wrong! 2 attempts left before locking the account';
	}
);
