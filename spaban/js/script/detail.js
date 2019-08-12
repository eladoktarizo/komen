$(document).ready(function(){
	$('#msg').fadeOut();
	$("#download").click(function(){
		$('#msg').fadeIn();
	});
	//$('#datatbl').dataTable();
	$("#datatbl").dataTable({
		"sDom": '<"tbl-controls clearfix"lfrTC>tip',
		"oLanguage": {
			"oPaginate": {
				"sNext": "Selanjutnya",
				"sPrevious": "Sebelumnya",
			},
			"sLengthMenu": 'Tampilkan <select>'+
						   '<option value="10">10</option>'+
						   '<option value="20">20</option>'+
						   '<option value="30">30</option>'+
						   '<option value="40">40</option>'+
						   '<option value="50">50</option>'+
						   '<option value="-1">All</option>'+
						   '</select> Data',
			"sInfo": "Menampilkan data ke-_START_ sampai ke-_END_ dari _TOTAL_ data",
			"sSearch": "Cari Data",
		}
	});
	$('#submit_save').click(function() {
		var giat = $('#giat').val();
		var paket = $('#paket').val();
		var subpaket = $('#subpaket').val();
		var kRekening= $('#kRekening').val();
		var nmpaket= $('#nmpaket').val();
		var Lokasi= $('#Lokasi').val();
		var volum= $('#volum').val();
		var biayadpa= $('#biayadpa').val();
		var loan= $('#loan').val();
		var Nilai_Kontrak= $('#Nilai_Kontrak').val();
		var renc= $('#renc').val();
		var real= $('#real').val();
		var realkeu= $('#realkeu').val();
		var Kontraktor= $('#Kontraktor').val();
		var NoKontrak= $('#NoKontrak').val();
		var tglawal= $('#tglawal').val();
		var tglakhir= $('#tglakhir').val();
		var subdetail= $('#subdetail').val();
		if (subdetail == 'kosong') {
			alert("Sub Detail belum dipilih.");
		} else {
			if (giat == 'kosong') {
				alert("Kegiatan belum dipilih.");
			} else {
				$.post("detail_save.php",
				{
					giatnya:giat,
					paketnya:paket,
					subpaketnya:subpaket,
					kRekeningnya:kRekening,
					nmpaketnya:nmpaket,
					Lokasinya:Lokasi,
					volumnya:volum,
					biayadpanya:biayadpa,
					loannya:loan,
					Nilai_Kontraknya:Nilai_Kontrak,
					rencnya:renc,
					realnya:real,
					realkeunya:realkeu,
					Kontraktornya:Kontraktor,
					NoKontraknya:NoKontrak,
					tglawalnya:tglawal,
					tglakhirnya:tglakhir,
					subdetailnya:subdetail
				},
				function(data,status){
					if (data == "Registered") {
						alert("Sukses");
						$('#kRekening').val("");
						$('#nmpaket').val("");
						$('#volum').val("");
						$('#biayadpa').val("");
						$('#loan').val("");
						$('#Nilai_Kontrak').val("");
						$('#renc').val("");
						$('#real').val("");
						$('#realkeu').val("");
						$('#NoKontrak').val("");
						$('#tglawal').val("");
						$('#tglakhir').val("");
						$('#msg').fadeOut();
						location.reload();
					} else {							
						alert("Gagal");
					}
				});
			}
		}
	});
	$('#reset').click(function() {
		$('#kRekening').val("");
		$('#nmpaket').val("");
		$('#volum').val("");
		$('#biayadpa').val("");
		$('#loan').val("");
		$('#Nilai_Kontrak').val("");
		$('#renc').val("");
		$('#real').val("");
		$('#realkeu').val("");
		$('#NoKontrak').val("");
		$('#tglawal').val("");
		$('#tglakhir').val("");
	});
	$('#close').click(function() {
		$('#kRekening').val("");
		$('#nmpaket').val("");
		$('#volum').val("");
		$('#biayadpa').val("");
		$('#loan').val("");
		$('#Nilai_Kontrak').val("");
		$('#renc').val("");
		$('#real').val("");
		$('#realkeu').val("");
		$('#NoKontrak').val("");
		$('#tglawal').val("");
		$('#tglakhir').val("");
		$('#msg').fadeOut();
	});
	$('#msg').css({top:'50%',left:'50%',margin:'-'+($('#msg').height() / 2)+'px 0 0 -'+($('#msg').width() / 2)+'px'});
	$('#giat').prop('disabled', true);
	$('#paket').prop('disabled', true);
	$('#subpaket').prop('disabled', true);
	$('#kRekening').prop('disabled', true);
	$('#nmpaket').prop('disabled', true);
	$('#Lokasi').prop('disabled', true);
	$('#volum').prop('disabled', true);
	$('#biayadpa').prop('disabled', true);
	$('#loan').prop('disabled', true);
	$('#Nilai_Kontrak').prop('disabled', true);
	$('#renc').prop('disabled', true);
	$('#real').prop('disabled', true);
	$('#realkeu').prop('disabled', true);
	$('#Kontraktor').prop('disabled', true);
	$('#NoKontrak').prop('disabled', true);
	$('#tglawal').prop('disabled', true);
	$('#tglakhir').prop('disabled', true);
	$('#submit_save').prop('disabled', true);
})
function GiaT(str) {
	if (str == 'kosong') {
		$("#paket option").remove();
		$("#subpaket option").remove();
	} else {
		$.get(
			"ambil_prog.php?pakett="+str,
			function(data) {
				$("#paket").append(data);
			}
		);
	}
}
function PakeT(str) {
	if (str == 'kosong') {
		$("#subpaket option").remove();
	} else {
		$.get(
			"ambil_prog.php?subpaket="+str,
			function(data) {
				$("#subpaket").append(data);
			}
		);
	}
}
function SubDetaiL(str) {
	if (str == 'kosong') {
		$('#giat').prop('disabled', true);
		$('#paket').prop('disabled', true);
		$('#subpaket').prop('disabled', true);
		$('#kRekening').prop('disabled', true);
		$('#nmpaket').prop('disabled', true);
		$('#Lokasi').prop('disabled', true);
		$('#volum').prop('disabled', true);
		$('#biayadpa').prop('disabled', true);
		$('#loan').prop('disabled', true);
		$('#Nilai_Kontrak').prop('disabled', true);
		$('#renc').prop('disabled', true);
		$('#real').prop('disabled', true);
		$('#realkeu').prop('disabled', true);
		$('#Kontraktor').prop('disabled', true);
		$('#NoKontrak').prop('disabled', true);
		$('#tglawal').prop('disabled', true);
		$('#tglakhir').prop('disabled', true);
		$('#submit_save').prop('disabled', true);
	} else if (str == 'ada') {
		$('#giat').prop('disabled', false);
		$('#paket').prop('disabled', false);
		$('#subpaket').prop('disabled', false);
		$('#kRekening').prop('disabled', false);
		$('#nmpaket').prop('disabled', false);
		$('#Lokasi').prop('disabled', false);
		$('#volum').prop('disabled', false);
		$('#biayadpa').prop('disabled', true);
		$('#loan').prop('disabled', true);
		$('#Nilai_Kontrak').prop('disabled', true);
		$('#renc').prop('disabled', true);
		$('#real').prop('disabled', true);
		$('#realkeu').prop('disabled', true);
		$('#Kontraktor').prop('disabled', false);
		$('#NoKontrak').prop('disabled', false);
		$('#tglawal').prop('disabled', false);
		$('#tglakhir').prop('disabled', false);
		$('#submit_save').prop('disabled', false);
	} else {
		$('#giat').prop('disabled', false);
		$('#paket').prop('disabled', false);
		$('#subpaket').prop('disabled', false);
		$('#kRekening').prop('disabled', false);
		$('#nmpaket').prop('disabled', false);
		$('#Lokasi').prop('disabled', false);
		$('#volum').prop('disabled', false);
		$('#biayadpa').prop('disabled', false);
		$('#loan').prop('disabled', false);
		$('#Nilai_Kontrak').prop('disabled', false);
		$('#renc').prop('disabled', false);
		$('#real').prop('disabled', false);
		$('#realkeu').prop('disabled', false);
		$('#Kontraktor').prop('disabled', false);
		$('#NoKontrak').prop('disabled', false);
		$('#tglawal').prop('disabled', false);
		$('#tglakhir').prop('disabled', false);
		$('#submit_save').prop('disabled', false);
	}
}