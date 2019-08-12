<?php
$level =$info['level'];
if ($level =='ADMIN'){ 
echo "
	<li><a href='user.php'>Data Login User</a></li>
 	<li><a href='apbn.php'>APBN</a></li>
	<li><a href='bersejarahtradisional.php'>Bersejarah Tradisional</a></li>
	<li><a href='desa_pnpm.php'>Desa PNPM</a></li>
	<li><a href='desapotensial.php'>Desa Potensial</a></li>
	<li><a href='kebakaran.php'>Kawasan Rawan Kebakaran</a></li>
	<li><a href='hijau.php'>Kota Hijau</a></li>
	<li><a href='kek.php'>KEK</a></li>
	<li><a href='kinerjapdam.php'>Kinerja PDAM</a></li>
	<li><a href='kota_pusaka.php'>Kota Pusaka</a></li>
	<li><a href='kpi.php'>KPI</a></li>
	<li><a href='ksn.php'>KSN</a></li>
	<li><a href='kumuh_desa.php'>Perdesaan Kumuh</a></li>
	<li><a href='kumuh_infra_kec.php'>Kumuh Infrastruktur Kecamatan</a></li>
	<li><a href='lestari.php'>Perdesaan Lestari</a></li>
	<li><a href='miskindesa.php'>Miskin Desa</a></li>
	<li><a href='penataanbangunan.php'>Penataan Bangunan</a></li>
	<li><a href='pisew_desa.php'>PISEW Desa</a></li>
	<li><a href='pkn.php'>PKN</a></li>
	<li><a href='pksn.php'>PKSN</a></li>
	<li><a href='ppip.php'>PPIP</a></li>
	<li><a href='pusaka.php'>PUSAKA</a></li>
	<li><a href='resikosanitasi.php'>Resiko Sanitasi</a></li>
	<li><a href='rpijm.php'>RPIJM</a></li>
	<li><a href='rsh_desa.php'>RSH Desa</a></li>
	<li><a href='rsh_infra_kec.php'>RSH Infrastruktur Kecamatan</a></li>
	<li><a href='rtrw.php'>RTRW</a></li>
	<li><a href='rusunawa_point.php'>Rusunawa (Point)</a></li>
	<li><a href='sppip.php'>SPPIP</a></li>
	<li><a href='rpkpp.php'>RPKPP</a></li>
	<li><a href='limbah.php'>Limbah</a></li>
	<li><a href='miskin_kota_kel.php'>Miskin Kota Kelurahan</a></li>
	<li><a href='rawanair.php'>Rawan Air</a></li>
 	";
}else
if($level=='PLP'){
echo "
	<li><a href='resikosanitasi.php'>Resiko Sanitasi</a></li>
	<li><a href='limbah.php'>Limbah</a></li>
	";
}else
if($level=='AIR MINUM'){
echo "
	<li><a href='rawanair.php'>Rawan Air</a></li>
	<li><a href='kinerjapdam.php'>Kinerja PDAM</a></li>
	";
}else
if($level=='BANGKIM'){
echo "
	<li><a href='apbn.php'>APBN</a></li>
 	<li><a href='desa_pnpm.php'>Desa PNPM</a></li>
	<li><a href='desapotensial.php'>Desa Potensial</a></li>
 	<li><a href='kumuh_desa.php'>Perdesaan Kumuh</a></li>
	<li><a href='kumuh_infra_kec.php'>Kumuh Infrastruktur Kecamatan</a></li>
 	<li><a href='miskindesa.php'>Miskin Desa</a></li>

	<li><a href='pisew_desa.php'>PISEW Desa</a></li>
 	<li><a href='ppip.php'>PPIP</a></li>
 	<li><a href='rpijm.php'>RPIJM</a></li>
	<li><a href='rsh_desa.php'>RSH Desa</a></li>
	<li><a href='rsh_infra_kec.php'>RSH Infrastruktur Kecamatan</a></li>
 	<li><a href='rusunawa_point.php'>Rusunawa (Point)</a></li>
	<li><a href='sppip.php'>SPPIP</a></li>
	<li><a href='rpkpp.php'>RPKPP</a></li>
  	<li><a href='miskin_kota_kel.php'>Miskin Kota Kelurahan</a></li>
 	";
}else
if($level=='PBL'){
echo "
 	<li><a href='bersejarahtradisional.php'>Bersejarah Tradisional</a></li>
 	<li><a href='kebakaran.php'>Kawasan Rawan Kebakaran</a></li>
 	<li><a href='kota_pusaka.php'>Kota Pusaka</a></li>
 	<li><a href='lestari.php'>Perdesaan Lestari</a></li>
 	<li><a href='penataanbangunan.php'>Penataan Bangunan</a></li>
	<li><a href='perdabangunan.php'>Perda Bangunan</a></li>
  	";	 
}else
 	
?>