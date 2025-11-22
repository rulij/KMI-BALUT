<?php
include 'includes/header.php';

$bidang = isset($_GET['bidang']) ? $_GET['bidang'] : '';
$bidangList = ["kaderisasi", "kominfo", "keagamaan", "advokasi", "olahraga", "usaha", "keperempuanan"];

$strukturUtama = [
  ["nama"=>"Muh Ikhsan Djira", "jabatan"=>"Ketua Umum", "foto"=>"ketua_umum.jpg"],
  ["nama"=>"Fadlin", "jabatan"=>"Sekretaris Umum", "foto"=>"sekretaris_umum.jpg"],
  ["nama"=>"Sa'ban Griansyah", "jabatan"=>"Bendahara", "foto"=>"bendahara.jpg"]
];

// Struktur lengkap 7 bidang
$strukturBidang = [
  "kaderisasi" => [
    "ketua_bidang" => ["nama"=>"Ketua Kaderisasi", "foto"=>"kaderisasi_ketua.jpg"],
    "sekretaris_bidang" => ["nama"=>"Sekretaris Kaderisasi", "foto"=>"kaderisasi_sekretaris.jpg"],
    "divisi" => [
      "Divisi Pelatihan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pelatihan", "foto"=>"divisi_pelatihan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota A", "foto"=>"divisi_pelatihan_a.jpg"],
          ["nama"=>"Anggota B", "foto"=>"divisi_pelatihan_b.jpg"],
          ["nama"=>"Anggota C", "foto"=>"divisi_pelatihan_c.jpg"]
        ]
      ],
      "Divisi Pengembangan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pengembangan", "foto"=>"divisi_pengembangan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota D", "foto"=>"divisi_pengembangan_a.jpg"],
          ["nama"=>"Anggota E", "foto"=>"divisi_pengembangan_b.jpg"],
          ["nama"=>"Anggota F", "foto"=>"divisi_pengembangan_c.jpg"]
        ]
      ],
      "Divisi Evaluasi" => [
        "ketua_divisi" => ["nama"=>"Ketua Evaluasi", "foto"=>"divisi_evaluasi_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota G", "foto"=>"divisi_evaluasi_a.jpg"],
          ["nama"=>"Anggota H", "foto"=>"divisi_evaluasi_b.jpg"],
          ["nama"=>"Anggota I", "foto"=>"divisi_evaluasi_c.jpg"]
        ]
      ]
    ]
  ],

  "kominfo" => [
    "ketua_bidang" => ["nama"=>"Ketua Kominfo", "foto"=>"kominfo_ketua.jpg"],
    "sekretaris_bidang" => ["nama"=>"Sekretaris Kominfo", "foto"=>"kominfo_sekretaris.jpg"],
    "divisi" => [
      "Divisi Media Sosial" => [
        "ketua_divisi" => ["nama"=>"Ketua Media Sosial", "foto"=>"divisi_mediasosial_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota J", "foto"=>"divisi_mediasosial_a.jpg"],
          ["nama"=>"Anggota K", "foto"=>"divisi_mediasosial_b.jpg"],
          ["nama"=>"Anggota L", "foto"=>"divisi_mediasosial_c.jpg"]
        ]
      ],
      "Divisi Publikasi" => [
        "ketua_divisi" => ["nama"=>"Ketua Publikasi", "foto"=>"divisi_publikasi_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota M", "foto"=>"divisi_publikasi_a.jpg"],
          ["nama"=>"Anggota N", "foto"=>"divisi_publikasi_b.jpg"],
          ["nama"=>"Anggota O", "foto"=>"divisi_publikasi_c.jpg"]
        ]
      ],
      "Divisi TIK" => [
        "ketua_divisi" => ["nama"=>"Ketua TIK", "foto"=>"divisi_tik_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota P", "foto"=>"divisi_tik_a.jpg"],
          ["nama"=>"Anggota Q", "foto"=>"divisi_tik_b.jpg"],
          ["nama"=>"Anggota R", "foto"=>"divisi_tik_c.jpg"]
        ]
      ]
    ]
  ],

  "keagamaan" => [
    "ketua_bidang" => ["nama" => "Dea Prananda", "foto" => "keagamaan_ketua.jpg"],
    "sekretaris_bidang" => ["nama" => "Sekretaris Keagamaan", "foto" => "keagamaan_sekretaris.jpg"],
    "divisi" => [
      "Divisi Pembinaan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pembinaan", "foto"=>"divisi_pembinaan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota S", "foto"=>"divisi_pembinaan_a.jpg"],
          ["nama"=>"Anggota T", "foto"=>"divisi_pembinaan_b.jpg"],
          ["nama"=>"Anggota U", "foto"=>"divisi_pembinaan_c.jpg"]
        ]
      ],
      "Divisi Pendidikan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pendidikan", "foto"=>"divisi_pendidikan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota V", "foto"=>"divisi_pendidikan_a.jpg"],
          ["nama"=>"Anggota W", "foto"=>"divisi_pendidikan_b.jpg"],
          ["nama"=>"Anggota X", "foto"=>"divisi_pendidikan_c.jpg"]
        ]
      ],
      "Divisi Sosial" => [
        "ketua_divisi" => ["nama"=>"Ketua Sosial", "foto"=>"divisi_sosial_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota Y", "foto"=>"divisi_sosial_a.jpg"],
          ["nama"=>"Anggota Z", "foto"=>"divisi_sosial_b.jpg"],
          ["nama"=>"Anggota AA", "foto"=>"divisi_sosial_c.jpg"]
        ]
      ]
    ]
  ],

  "advokasi" => [
    "ketua_bidang" => ["nama"=>"Ketua Advokasi", "foto"=>"advokasi_ketua.jpg"],
    "sekretaris_bidang" => ["nama"=>"Sekretaris Advokasi", "foto"=>"advokasi_sekretaris.jpg"],
    "divisi" => [
      "Divisi Pendampingan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pendampingan", "foto"=>"divisi_pendampingan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AB", "foto"=>"divisi_pendampingan_a.jpg"],
          ["nama"=>"Anggota AC", "foto"=>"divisi_pendampingan_b.jpg"],
          ["nama"=>"Anggota AD", "foto"=>"divisi_pendampingan_c.jpg"]
        ]
      ],
      "Divisi Sosialisasi" => [
        "ketua_divisi" => ["nama"=>"Ketua Sosialisasi", "foto"=>"divisi_sosialisasi_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AE", "foto"=>"divisi_sosialisasi_a.jpg"],
          ["nama"=>"Anggota AF", "foto"=>"divisi_sosialisasi_b.jpg"],
          ["nama"=>"Anggota AG", "foto"=>"divisi_sosialisasi_c.jpg"]
        ]
      ],
      "Divisi Kampanye" => [
        "ketua_divisi" => ["nama"=>"Ketua Kampanye", "foto"=>"divisi_kampanye_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AH", "foto"=>"divisi_kampanye_a.jpg"],
          ["nama"=>"Anggota AI", "foto"=>"divisi_kampanye_b.jpg"],
          ["nama"=>"Anggota AJ", "foto"=>"divisi_kampanye_c.jpg"]
        ]
      ]
    ]
  ],

  "olahraga" => [
    "ketua_bidang" => ["nama"=>"Ketua Olahraga", "foto"=>"olahraga_ketua.jpg"],
    "sekretaris_bidang" => ["nama"=>"Sekretaris Olahraga", "foto"=>"olahraga_sekretaris.jpg"],
    "divisi" => [
      "Divisi Turnamen" => [
        "ketua_divisi" => ["nama"=>"Ketua Turnamen", "foto"=>"divisi_turnamen_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AK", "foto"=>"divisi_turnamen_a.jpg"],
          ["nama"=>"Anggota AL", "foto"=>"divisi_turnamen_b.jpg"],
          ["nama"=>"Anggota AM", "foto"=>"divisi_turnamen_c.jpg"]
        ]
      ],
      "Divisi Senam" => [
        "ketua_divisi" => ["nama"=>"Ketua Senam", "foto"=>"divisi_senam_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AN", "foto"=>"divisi_senam_a.jpg"],
          ["nama"=>"Anggota AO", "foto"=>"divisi_senam_b.jpg"],
          ["nama"=>"Anggota AP", "foto"=>"divisi_senam_c.jpg"]
        ]
      ],
      "Divisi Fitness" => [
        "ketua_divisi" => ["nama"=>"Ketua Fitness", "foto"=>"divisi_fitness_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AQ", "foto"=>"divisi_fitness_a.jpg"],
          ["nama"=>"Anggota AR", "foto"=>"divisi_fitness_b.jpg"],
          ["nama"=>"Anggota AS", "foto"=>"divisi_fitness_c.jpg"]
        ]
      ]
    ]
  ],

  "usaha" => [
    "ketua_bidang" => ["nama"=>"Ketua Usaha Organisasi", "foto"=>"usaha_ketua.jpg"],
    "sekretaris_bidang" => ["nama"=>"Sekretaris Usaha", "foto"=>"usaha_sekretaris.jpg"],
    "divisi" => [
      "Divisi Pengembangan Usaha" => [
        "ketua_divisi" => ["nama"=>"Ketua Pengembangan Usaha", "foto"=>"divisi_usaha_pengembangan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AT", "foto"=>"divisi_usaha_pengembangan_a.jpg"],
          ["nama"=>"Anggota AU", "foto"=>"divisi_usaha_pengembangan_b.jpg"],
          ["nama"=>"Anggota AV", "foto"=>"divisi_usaha_pengembangan_c.jpg"]
        ]
      ],
      "Divisi Pelatihan Kewirausahaan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pelatihan Kewirausahaan", "foto"=>"divisi_pelatihan_kewirausahaan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AW", "foto"=>"divisi_pelatihan_kewirausahaan_a.jpg"],
          ["nama"=>"Anggota AX", "foto"=>"divisi_pelatihan_kewirausahaan_b.jpg"],
          ["nama"=>"Anggota AY", "foto"=>"divisi_pelatihan_kewirausahaan_c.jpg"]
        ]
      ],
      "Divisi Kemitraan" => [
        "ketua_divisi" => ["nama"=>"Ketua Kemitraan", "foto"=>"divisi_kemitraan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota AZ", "foto"=>"divisi_kemitraan_a.jpg"],
          ["nama"=>"Anggota BA", "foto"=>"divisi_kemitraan_b.jpg"],
          ["nama"=>"Anggota BB", "foto"=>"divisi_kemitraan_c.jpg"]
        ]
      ]
    ]
  ],

  "keperempuanan" => [
    "ketua_bidang" => ["nama"=>"Ketua Keperempuanan", "foto"=>"keperempuanan_ketua.jpg"],
    "sekretaris_bidang" => ["nama"=>"Sekretaris Keperempuanan", "foto"=>"keperempuanan_sekretaris.jpg"],
    "divisi" => [
      "Divisi Pengembangan Perempuan" => [
        "ketua_divisi" => ["nama"=>"Ketua Pengembangan Perempuan", "foto"=>"divisi_perempuan_pengembangan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota BC", "foto"=>"divisi_perempuan_pengembangan_a.jpg"],
          ["nama"=>"Anggota BD", "foto"=>"divisi_perempuan_pengembangan_b.jpg"],
          ["nama"=>"Anggota BE", "foto"=>"divisi_perempuan_pengembangan_c.jpg"]
        ]
      ],
      "Divisi Hak Perempuan" => [
        "ketua_divisi" => ["nama"=>"Ketua Hak Perempuan", "foto"=>"divisi_hakperempuan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota BF", "foto"=>"divisi_hakperempuan_a.jpg"],
          ["nama"=>"Anggota BG", "foto"=>"divisi_hakperempuan_b.jpg"],
          ["nama"=>"Anggota BH", "foto"=>"divisi_hakperempuan_c.jpg"]
        ]
      ],
      "Divisi Kepemimpinan" => [
        "ketua_divisi" => ["nama"=>"Ketua Kepemimpinan", "foto"=>"divisi_kepemimpinan_ketua.jpg"],
        "anggota" => [
          ["nama"=>"Anggota BI", "foto"=>"divisi_kepemimpinan_a.jpg"],
          ["nama"=>"Anggota BJ", "foto"=>"divisi_kepemimpinan_b.jpg"],
          ["nama"=>"Anggota BK", "foto"=>"divisi_kepemimpinan_c.jpg"]
        ]
      ]
    ]
  ],
];

function tampilProfil($nama, $jabatan, $foto) {
  $fotoPath = "images/" . $foto;
  echo '<div class="card">';
  echo '<img src="' . $fotoPath . '" alt="' . $nama . '">';
  echo '<h4>' . $nama . '</h4>';
  echo '<p>' . $jabatan . '</p>';
  echo '</div>';
}

?>
<main class="container">
  <h2 class="text-center">Struktur Kepengurusan KMI-BALUT 2025</h2>

<?php if (!$bidang): ?>
  <h3 class="text-center mt-25">Pengurus Inti</h3>
  <div class="profile-grid">
    <?php foreach ($strukturUtama as $pengurus): ?>
      <?php tampilProfil($pengurus['nama'], $pengurus['jabatan'], $pengurus['foto']); ?>
    <?php endforeach; ?>
  </div>

  <h3 class="text-center mt-40">Bidang Organisasi</h3>
  <div class="profile-grid">
    <?php foreach ($bidangList as $b):
      $bidNamaDisplay = ucfirst($b);
      if (!isset($strukturBidang[$b])) continue;
      $ketua = $strukturBidang[$b]["ketua_bidang"];
      $sekretaris = $strukturBidang[$b]["sekretaris_bidang"];
    ?>
      <div class="card" style="width: 260px;">
        <img src="images/<?= $ketua['foto'] ?>" alt="<?= $bidNamaDisplay ?>">
        <h4><?= $ketua['nama']; ?></h4>
        <p>Ketua Bidang <?= $bidNamaDisplay ?></p>
        <p style="font-size: 0.9rem; color:#444; margin-top: 15px;">
          <a href="kepengurusan.php?bidang=<?= $b ?>">Lihat Detail</a>
        </p>
      </div>
      <div class="card" style="width: 260px;">
        <img src="images/<?= $sekretaris['foto'] ?>" alt="Sekretaris <?= $bidNamaDisplay ?>">
        <h4><?= $sekretaris['nama']; ?></h4>
        <p>Sekretaris Bidang <?= $bidNamaDisplay ?></p>
      </div>
    <?php endforeach; ?>
  </div>

<?php else: 
  if(!isset($strukturBidang[$bidang])):
    echo "<p>Bidang tidak ditemukan.</p>";
  else:
    $bidangData = $strukturBidang[$bidang];
    $bidangJudul = ucfirst($bidang);
?>
  <h3><?= $bidangJudul ?></h3>
  <div class="profile-grid" style="justify-content: flex-start;">
    <?php tampilProfil($bidangData['ketua_bidang']['nama'], "Ketua Bidang", $bidangData['ketua_bidang']['foto']); ?>
    <?php tampilProfil($bidangData['sekretaris_bidang']['nama'], "Sekretaris Bidang", $bidangData['sekretaris_bidang']['foto']); ?>
  </div>

  <h4 style="margin-top: 40px;">Divisi</h4>
  <?php foreach ($bidangData["divisi"] as $divisiNama => $divisiData): ?>
    <section style="margin-bottom: 30px;">
      <h5><?= $divisiNama ?></h5>
      <div class="profile-grid" style="justify-content: flex-start;">
        <?php tampilProfil($divisiData['ketua_divisi']['nama'], "Ketua Divisi", $divisiData['ketua_divisi']['foto']); ?>
        <?php foreach ($divisiData['anggota'] as $anggota): ?>
          <?php tampilProfil($anggota['nama'], "Anggota Divisi", $anggota['foto']); ?>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endforeach; ?>

  <p><a href="kepengurusan.php">← Kembali ke daftar bidang</a></p>
<?php 
  endif;
endif;
?>
</main>
<?php include 'includes/footer.php'; ?>
