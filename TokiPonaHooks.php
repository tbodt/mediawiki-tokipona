<?php
class TokiPonaHooks {
	public static function onGetMessagesFileName( $code, &$file ) {
		if ( $code === 'tok' ) {
			$file = __DIR__ . DIRECTORY_SEPARATOR . 'MessagesTok.php';
		}
	}
}
