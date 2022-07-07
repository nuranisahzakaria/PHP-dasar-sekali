<?php 
//pengulangan
	//for
	//while
	//do..while
	//foreach : pengulangan khusus array

//for
echo 'perulangan dengan for <br><br>';
for( $i = 6; $i < 12; $i++ ){
echo "hello world! <br>";
}


//while
echo '<br>perulangan dengan while <br><br>';
$i = 0;
while( $i < 7 ){
	echo 'hello world! <br>';
$i++;
}


//do..while
//jika kondisi false kode akan tetap dijalankan 1 kali
echo '<br>perulangan dengan do..while <br><br>';
$i = 0;
do {
	echo 'hello world! <br>';
$i++;	
} while( $i < 5 );

 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan 1</title>
    <style>
        .warna-baris{
            background-color: yellow;
        }
    </style>
 </head>
 <body>
 	<br><br><br>
 	<p>membuat tabel menggunakan html</p>
 <table border="1" cellpadding="10" cellspacing="8">
 	<tr>
 		<td>1.1</td>
 		<td>1.2</td>
 		<td>1.3</td>
 		<td>1.4</td>
 		<td>1.5</td>
 	</tr>
 	<tr>
 		<td>2.1</td>
 		<td>2.2</td>
 		<td>2.3</td>
 		<td>2.4</td>
 		<td>2.5</td>
 	</tr>
 </table>
<br><br>
<p>membuat tabel menggunakan for</p>
<!-- membuat bentuk kolom -->
	<table border="1" cellpadding="10" cellspacing="8"> 
		<!-- menulis sintaks php di html -->
		<?php 
			//bentuk pengulangan di php untuk membuat kolom 3 x 5
			for($i = 1; $i <=3; $i++){
				echo "<tr>";
				//mengulang angka didalam tabel diambil nilai dari variabel i dan j, karena variabel tsb otomatis bertambah
				for($j=1; $j<=5; $j++){
					//println jikao didlm echo ditulis 1.1, maka nilai 1.1 yg akan terus dituliskan, bukan nilai baris keberapa dan kolom berapa
					echo "<td>$i.$j</td>";
				}
				echo "</tr>";
			}
 		?>
     </table>
<br>

     <!----------------------- GAYA PENULISAN TEMPLATING--------------------------->
<p>mengunakan sintaks templating</p>
    <table border="1" cellpadding="10" cellspacing="8"> 
    	<?php for($i=1; $i <=3; $i++){ ?>
    		<tr>
    			<?php for($j=1; $j<=5; $j++){ ?>
					<td><?php echo "$i.$j"; ?></td>    				
    			<?php } ?>
    		</tr>
    	<?php } ?>
    </table>

<p>merapikan sintaks templaring agar tidak membingungkan</p>
    <table border="1" cellpadding="10" cellspacing="8"> 
    	<!-- kurung kurawal buka ganti dengan : -->
    	<?php for($i=1; $i <=3; $i++) : ?>
    		<tr>
    			<?php for($j=1; $j<=5; $j++): ?>
					<td><?php echo "$i.$j"; ?></td>    				
    			<?php endfor; ?>
    		</tr>
    	<!-- kurung kurawal tutup ganti dengan endfor;  agar ketahuan kurungnya hasil blok yg mana -->
    	<?php endfor; ?>
    </table>

<p>menyingkat tulisan echo</p>
    <table border="1" cellpadding="10" cellspacing="8"> 
    	<?php for($i=1; $i <=3; $i++) : ?>
    			<?php for($j=1; $j<=5; $j++): ?>
    				<!-- untuk lebih mempersingkat penulisan php, menghilangkan 
    					tulisan php echo dan mengganti dengan samadengan(=)-->
					<td><?= "$i.$j"; ?></td>    				
    			<?php endfor; ?>
    		</tr>
    	<?php endfor; ?>
    </table>




<p>mermberi background</p>
    <table border="1" cellpadding="10" cellspacing="8"> 
        <?php for($i=1; $i <=3; $i++) : ?>

            <!-- jika baris genap, beri background kuning -->
            <?php if($i % 2 == 1):?>
                <tr class="warna-baris">
            <?php  else : ?>
                <tr>
            <?php endif; ?>

            <tr>
                <?php for($j=1; $j<=5; $j++): ?>
                    <td><?php echo "$i.$j"; ?></td>                 
                <?php endfor; ?>
            </tr>
        
        <?php endfor; ?>
    </table>

 </body>
 </html>