<?php

  switch ($_SESSION['ROLE']) {
    case 'LOKET': ?>
      <li>
        <a href="#"><i class="fa fa-money fa-fw"></i> <b>Pembayaran</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a href="/admaresi/sismiop-minut/pages/pembayaran/">Pembayaran PBB per OP</a>
          </li>
        </ul>
      </li>
      <?php break;
      case 'ADMINISTRATOR':
      echo '<li>
          <a href="/admaresi/sismiop-minut/pages/index.php"><i class="fa fa-home fa-fw"></i> <b>Dashboard</b> </a>
      </li>
      <li>
        <a href="#"><i class="fa fa-check-square-o fa-fw"></i> <b>Persiapan</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="/admaresi/sismiop-minut/pages/persiapan/tabelblok.php">Pembuatan Tabel Blok</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/persiapan/rekamznt.php">Pembuatan Tabel Peta ZNT</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/persiapan/pemetaanzntblok.php">Pemetaan ZNT Pada Blok</a>
            </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-pencil-square-o fa-fw"></i> <b>Pendataan</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="/admaresi/sismiop-minut/pages/pendataan/spop.php">SPOP</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/pendataan/updatejalanstandar.php">Update Jalan Standar</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/pendataan/dbkb-material.php">DBKB Material</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/pendataan/dbkb-standar.php">DBKB Standar</a>
            </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-book fa-fw"></i> <b>Referensi</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/tempatpembayaran.php">Tempat Pembayaran</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/userlist.php">Manajemen Pengguna</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/pekerjaan-wp.php">Pekerjaan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/select-ketbatal.php">Keterangan Batal</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/select-klstanahbng.php">Kelas Tanah/Bangunan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-jenispelayanan.php">Jenis Pelayanan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-status-wp.php">Status WP</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-jenisbangunan.php">Jenis Bangunan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-kondisibangunan.php">Kondisi Bangunan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-konstruksi.php">Konstruksi</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-atap.php">Atap</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-dinding.php">Dinding</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-lantai.php">Lantai</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-langit.php">Langit-langit</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-finishingkolam.php">Finishing Kolam</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-bahanpagar.php">Bahan Pagar</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-pekerjaan.php">Pekerjaan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-pekerjaankegiatan.php">Pekerjaan Kegiatan</a>
            </li>
            <li>
                <a href="/admaresi/sismiop-minut/pages/referensi/ref-tipebangunan.php">Tipe Bangunan</a>
            </li>
        </ul>
      </li>
      <li>
          <a href="#"><i class="fa fa-eye fa-fw"></i> <b>Monitoring</b><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li>
                  <a href="/admaresi/sismiop-minut/pages/monitoring/index.php">Pencarian Data</a>
              </li>
              <li>
                  <a href="/admaresi/sismiop-minut/pages/monitoring/penerimaanpembayaran.php">Penerimaan Pembayaran</a>
              </li>
              <li>
                  <a href="/admaresi/sismiop-minut/pages/monitoring/penerimaanharianbank.php">Penerimaan Harian Bank</a>
              </li>
           </ul>
          <!-- /.nav-second-level -->
      </li>
      <li>
        <a href="#"><i class="fa fa-money fa-fw"></i> <b>Pembayaran</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/pembayaran/index.php">Pembayaran PBB per OP</a>
          </li>
          <li>
              <a href="/admaresi/sismiop-minut/pages/pembatalan/index.php">Pembatalan SSPD</a>
          </li>
          <li>
              <a href="/admaresi/sismiop-minut/pages/pembatalansppt/index.php">Pembatalan SPPT</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-fire fa-fw"></i> <b>Penilaian</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/penilaian/bukunjoptkptarif.php">Buku/NJOPTKP/Tarif</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-users fa-fw"></i> <b>Pelayanan</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/pelayanan/index.php">Permohonan Pelayanan PST</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-paperclip fa-fw"></i> <b>Penetapan</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/penetapan/penetapan.php">Penetapan Massal</a>
          </li>
          <li>
              <a href="/admaresi/sismiop-minut/pages/penetapan/pencetakan.php">Pencetakan Massal</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-paperclip fa-fw"></i> <b>Perubahan</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/perubahan/sppt.php">Perubahan SPPT</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="#"><i class="fa fa-paperclip fa-fw"></i> <b>Pengurangan</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/pengurangan/sk-pengurangan.php">Pengurangan (Diskon SPPT)</a>
          </li>
        </ul>
      </li>
      ';
      break;
      case 'PEMBATALAN':
      echo '
      <li>
          <a href="#"><i class="fa fa-eye fa-fw"></i> <b>Monitoring</b><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
              <li>
                  <a href="/admaresi/sismiop-minut/pages/monitoring">Pencarian Data</a>
              </li>
              <li>
                  <a href="/admaresi/sismiop-minut/pages/monitoring/penerimaanpembayaran.php">Penerimaan Pembayaran</a>
              </li>
              <li>
                  <a href="/admaresi/sismiop-minut/pages/monitoring/penerimaanharianbank.php">Penerimaan Harian Bank</a>
              </li>
           </ul>
          <!-- /.nav-second-level -->
      </li>
      <li>
        <a href="#"><i class="fa fa-money fa-fw"></i> <b>Pembayaran</b><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
              <a href="/admaresi/sismiop-minut/pages/pembatalan/index.php">Pembatalan SSPD</a>
          </li>
          <li>
              <a href="/admaresi/sismiop-minut/pages/pembatalansppt/index.php">Pembatalan SPPT</a>
          </li>
        </ul>
      </li>
      ';
      break;
    default:
    break;
  }

?>
