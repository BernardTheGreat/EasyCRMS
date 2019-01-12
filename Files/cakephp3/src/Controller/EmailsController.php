<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
class EmailsController extends AppController
{


	public function index() {
		/* connect to gmail */

		set_time_limit(4000);

		$hostname = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
		$username = 'bernard.gresola@easy.com.ph';
		$password = 'Dranreb0912';

		/* try to connect */
		$inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());

		/* grab emails */
		$emails = imap_search($inbox,'UNSEEN');

		/* if emails are returned, cycle through each... */
		
		

		if($emails) {
			
			/* begin output var */
			
			
			/* put the newest emails on top */
			rsort($emails);

			$this->set(compact('emails'));
			
		} 

		/* close the connection */
		imap_close($inbox);

	}

}



?>