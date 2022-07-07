<?php
//FUNCTION
//dibuat untuk mempermudah kita dalam memprogram, karna kode di function bisa dipanggil berulang2
//fungsi di PHP ada 2 jenis
//1. Built-in function
//2. User defined function

//diantara fungsi2 yg akan sering digunakan adalah
//1. time() waktu didunia IT dimulai sejak 1 januari 1970
//2. date() untuk menampilkan tanggal dgn format tertentu --> BUTUH PARAMETER (isi dlm kurung)
//3. mktime() untuk membuat sendiri detik 
	//mktime(0,0,0,0,0,0) ada 6 parameter
	//jam, menit, detik,bulan, tanggal, tahun
//4. strtotime

echo time();
echo "----------------------------------------------------";
echo date("l, d-M-Y");

echo "----------------------------------------------------";
//tampilkan hari pada saat berikut ditambah sekian detik(gabisa jam atau satuan waktu lainnya, harus pake detik)
echo date(" l, d-M-Y", time()+172800);

echo "--------------------------------------------------";
//mencari tahu seratus hari lagi hari apa
echo date(" l, d-M-Y", time()+60*60*24*100);

echo "--------------------------------------------------";
//seratus hari kebelakang hari apa
echo date(" l, d-M-Y", time()-60*60*24*100);

//menghitung detik yg sudah berlalu dari tahun 1970
echo date("l, d-M-Y", mktime(0,0,0,10,27,2002));
echo "----------------------------------------------------";

//strtotimt
echo date ("l, d-M-Y", strtotime("27 oct 2002"));

?>