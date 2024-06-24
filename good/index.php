<?php
require_once 'Newsletter.php';
require_once 'Subscriber.php';

// Buat objek Newsletter
$newsletter = new Newsletter();

// Buat objek Subscriber
$subscriber1 = new Subscriber("Zojo");
$subscriber2 = new Subscriber("Bima");

// Daftarkan Subscriber ke Newsletter
$id1 = $newsletter->subscribe($subscriber1);
$id2 = $newsletter->subscribe($subscriber2);

// Terbitkan edisi baru
$newsletter->newEdition("Newsletter June 2024");

// Hapus Subscriber1
$newsletter->unsubscribe($id1);

// Terbitkan edisi baru lagi
$newsletter->newEdition("Newsletter July 2024");
?>
