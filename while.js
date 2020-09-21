var noAngkot = 1;
var jumlahAngkot = 10;
var angkotBeroperasi = 5;

for( var noAngkot; noAngkot <= jumlahAngkot; noAngkot++){

	// Tampilkan angkot no 1- 5 yang beroperasi 
	if (noAngkot <= angkotBeroperasi) {
		console.log('  angkot no ' + '[' + noAngkot + ']' + ' sedang beroperasi');
	}
	// Tampilkan angkot no 6 atau 8 atau 10 sedang lembur
	else if (noAngkot === angkotBeroperasi +1 || noAngkot === angkotBeroperasi +3 || noAngkot === angkotBeroperasi +5 ) {
	console.log('  angkot no ' + '[' + noAngkot + ']' + ' sedang lembur');
	}
	// Tampilkan angkot no  7 dan 9 sedang rusak 
	else{
				console.log('  angkot no ' + '[' + noAngkot + ']' + ' sedang rusak');
	}
}