<?php
require_once 'Newsletter.php';
require_once 'Subscriber.php';

// Buat objek Newsletter
$newsletter = new Newsletter();

// Buat objek Subscriber
$subscriber1 = new Subscriber("Alice");
$subscriber2 = new Subscriber("Bob");

// Daftarkan Subscriber ke Newsletter
$newsletter->subscribe($subscriber1);
$newsletter->subscribe($subscriber2);

// Terbitkan edisi baru
$newsletter->newEdition("Newsletter June 2024");

// Hapus Subscriber1
$newsletter->unsubscribe($subscriber1);

// Terbitkan edisi baru lagi
$newsletter->newEdition("Newsletter July 2024");
?>