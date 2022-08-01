<?php

	/* membuat variable $data dengan tipe data array
	dan memasukan beberapa data nama trainer*/

	$data_trainer  = array(' Samuel', 'Ellyakim', 'Marthen', 'Sulenias');

	echo "<h3> Trainer</h3>";

	foreach ($data_trainer as   $trainer) {
		echo 'trainer : ' . $trainer . " <br>";
	};

	/* $peserta_kursus merupakan variable dengan tipe data array ddi dalamnya adadata peserta kursus*/

	$peserta_kursus = ['Lidia', 'Dimas', 'Melpen', 'Nicklas'];

	echo "<h3>Siswa</h3"; // buat judul

	echo $peserta_kursus[0];
	echo "<br>"; // membuat bait baru dengan HTML

	echo $peserta_kursus[1];
	echo "<br>"; // membuat bait baru dengan HTML

	echo $peserta_kursus[2];
	echo "<br>"; // membuat bait baru dengan HTML

	echo $peserta_kursus[3];
	echo "<br>"; // membuat bait baru dengan HTML



?>