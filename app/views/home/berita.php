<?= $locations = $data['lokasi'] ?>
<div id='map' style="width: 100%; height: 600px;"></div>
    <script>
        var locations = [
            <?php foreach ($locations as $bencana) { ?>
                        ["<?=$bencana['Sumber']?>", <?=$bencana['latitude']?>, <?=$bencana['longitude']?>, "<?=$bencana['Tanggal']?>", "<?=$bencana['magnitudo']?>"],
                    <?php } ?>
        ];

        initializeMap('map', locations, [-0.7722370167997215, 113.8200279595692], 5);
    </script>
    <p style="text-align: center;">Source : BMKG, katalog Tsunami Tahun 2010-2018</p>

    <br>
    <h2>Update Peringatan Tsunami</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Waktu Gempa</th>
                    <th>Lintang</th>
                    <th>Bujur</th>
                    <th>Magnitudo</th>
                    <th>Kedalaman</th>
                    <th>Wilayah</th>
                </tr>
            </thead>
        <tbody>
        <tr><td>1</td><td>2023-04-25 03:00:57</td><td>-0.93</td><td>98.39</td><td>7.3</td><td>84 Km</td><td>177 km BaratLaut KEP-MENTAWAI-SUMBAR (Warning Tsunami PD-4)</td></tr>
            <tr><td>2</td><td>2023-04-25 03:00:57</td><td>-0.93</td><td>98.39</td><td>7.3</td><td>84 Km</td><td>177 km BaratLaut KEP-MENTAWAI-SUMBAR (Warning Tsunami PD-1)</td></tr>
            <tr><td>3</td><td>2023-01-10 00:47:33</td><td>-7.37</td><td>130.23</td><td>7.5</td><td>130 Km</td><td>136 km BaratLaut MALUKUTENGGARABRT (Warning Tsunami PD-4)</td></tr>
            <tr><td>4</td><td>2023-01-10 00:47:34</td><td>-7.25</td><td>130.18</td><td>7.9</td><td>131 Km</td><td>148 km BaratLaut MALUKUTENGGARABRT (Warning Tsunami PD-1)</td></tr>
            <tr><td>5</td><td>2021-12-14 10:20:23</td><td>-7.59</td><td>122.24</td><td>7.4</td><td>10 Km</td><td>113 km BaratLaut LARANTUKA-NTT (Warning Tsunami PD-4)</td></tr>
            <tr><td>6</td><td>2021-12-14 10:20:23</td><td>-7.59</td><td>122.24</td><td>7.4</td><td>10 Km</td><td>113 km BaratLaut LARANTUKA-NTT (Warning Tsunami PD-3.1)</td></tr>
            <tr><td>7</td><td>2021-12-14 10:20:23</td><td>-7.59</td><td>122.24</td><td>7.4</td><td>10 Km</td><td>113 km BaratLaut LARANTUKA-NTT (Warning Tsunami PD-2)</td></tr>
            <tr><td>8</td><td>2021-12-14 10:20:22</td><td>-7.59</td><td>122.26</td><td>7.5</td><td>12 Km</td><td>112 km BaratLaut LARANTUKA-NTT (Warning Tsunami PD-1)</td></tr>
            <tr><td>9</td><td>2019-11-14 23:17:43</td><td>1.67</td><td>126.39</td><td>7.1</td><td>73 Km</td><td>137 km BaratLaut JAILOLO-MALUT (Warning Tsunami PD-4)</td></tr>
            <tr><td>10</td><td>2019-11-14 23:17:43</td><td>1.67</td><td>126.39</td><td>7.1</td><td>73 Km</td><td>137 km BaratLaut JAILOLO-MALUT (Warning Tsunami PD-3.2)</td></tr>
            <tr><td>11</td><td>2019-11-14 23:17:43</td><td>1.67</td><td>126.39</td><td>7.1</td><td>73 Km</td><td>137 km BaratLaut JAILOLO-MALUT (Warning Tsunami PD-3.1)</td></tr>
            <tr><td>12</td><td>2019-11-14 23:17:43</td><td>1.67</td><td>126.39</td><td>7.1</td><td>73 Km</td><td>137 km BaratLaut JAILOLO-MALUT (Warning Tsunami PD-2)</td></tr>
            <tr><td>13</td><td>2019-11-14 23:17:41</td><td>1.63</td><td>126.40</td><td>7.4</td><td>10 Km</td><td>134 km BaratLaut JAILOLO-MALUT (Warning Tsunami PD-1)</td></tr>
            <tr><td>14</td><td>2019-08-02 19:03:25</td><td>-7.54</td><td>104.58</td><td>7.4</td><td>10 Km</td><td>147 km BaratDaya SUMUR-BANTEN (Warning Tsunami PD-4)</td></tr>
            <tr><td>15</td><td>2019-08-02 19:03:21</td><td>-7.54</td><td>104.58</td><td>7.4</td><td>10 Km</td><td>147 km BaratDaya SUMUR-BANTEN (Warning Tsunami PD-1)</td></tr>
            <tr><td>16</td><td>2019-07-07 22:08:42</td><td>0.54</td><td>126.19</td><td>7.0</td><td>36 Km</td><td>133 km BaratDaya TERNATE-MALUT (Warning Tsunami PD-4)</td></tr>
            <tr><td>17</td><td>2019-07-07 22:08:42</td><td>0.54</td><td>126.19</td><td>7.0</td><td>36 Km</td><td>133 km BaratDaya TERNATE-MALUT (Warning Tsunami PD-2)</td></tr>
            <tr><td>18</td><td>2019-07-07 22:08:39</td><td>0.51</td><td>126.18</td><td>7.1</td><td>10 Km</td><td>135 km BaratDaya TERNATE-MALUT (Warning Tsunami PD-1)</td></tr>
            <tr><td>19</td><td>2019-04-12 18:40:49</td><td>-1.90</td><td>122.54</td><td>6.9</td><td>10 Km</td><td>85 km BaratDaya BANGGAIKEP-SULTENG (Warning Tsunami PD-4)</td></tr>
            <tr><td>20</td><td>2019-04-12 18:40:49</td><td>-1.90</td><td>122.54</td><td>6.9</td><td>10 Km</td><td>85 km BaratDaya BANGGAIKEP-SULTENG (Warning Tsunami PD-1)</td></tr>
            <tr><td>21</td><td>2018-09-28 17:02:44</td><td>-0.18</td><td>119.85</td><td>7.7</td><td>10 Km</td><td>27 km TimurLaut DONGGALA-SULTENG (Warning Tsunami PD-1)</td></tr>
            <tr><td>22</td><td>2018-08-05 18:46:35</td><td>-8.37</td><td>116.48</td><td>7.0</td><td>15 Km</td><td>18 km BaratLaut LOMBOKTIMUR-NTB (Warning Tsunami PD-4)</td></tr>
            <tr><td>23</td><td>2018-08-05 18:46:35</td><td>-8.37</td><td>116.48</td><td>7.0</td><td>15 Km</td><td>18 km BaratLaut LOMBOKTIMUR-NTB (Warning Tsunami PD-3.3)</td></tr>
            <tr><td>24</td><td>2018-08-05 18:46:35</td><td>-8.37</td><td>116.48</td><td>7.0</td><td>15 Km</td><td>18 km BaratLaut LOMBOKTIMUR-NTB (Warning Tsunami PD-3.2)</td></tr>
            <tr><td>25</td><td>2018-08-05 18:46:35</td><td>-8.37</td><td>116.48</td><td>7.0</td><td>15 Km</td><td>18 km BaratLaut LOMBOKTIMUR-NTB (Warning Tsunami PD-3.1)</td></tr>
            <tr><td>26</td><td>2018-08-05 18:46:35</td><td>-8.37</td><td>116.48</td><td>7.0</td><td>15 Km</td><td>18 km BaratLaut LOMBOKTIMUR-NTB (Warning Tsunami PD-2)</td></tr>
            <tr><td>27</td><td>2018-07-11 11:04:25</td><td>-10.48</td><td>112.83</td><td>7.8</td><td>10 Km</td><td>261 km Tenggara KEPANJEN-MALANG-JATIM (Hanya TEST Event, Warning Tsunami PD-4)</td></tr>
            <tr><td>28</td><td>2018-07-11 11:04:25</td><td>-10.48</td><td>112.83</td><td>7.8</td><td>10 Km</td><td>261 km Tenggara KEPANJEN-MALANG-JATIM (Hanya TEST Event, Warning Tsunami PD-3.1)</td></tr>
            <tr><td>29</td><td>2018-07-11 11:04:25</td><td>-10.48</td><td>112.83</td><td>7.8</td><td>10 Km</td><td>261 km Tenggara KEPANJEN-MALANG-JATIM (Hanya TEST Event, Warning Tsunami PD-2)</td></tr>
            <tr><td>30</td><td>2018-07-11 11:04:25</td><td>-10.48</td><td>112.83</td><td>7.8</td><td>10 Km</td><td>261 km Tenggara KEPANJEN-MALANG-JATIM (Hanya TEST Event, Warning Tsunami PD-1)</td></tr>
            <tr><td colspan="7">Source : BMKG</td></tr>
        </tbody>
    </table>
    </div>


        <h2>Artikel Relevan</h2>
        <div class="news-container">
            <div class="news-box">
                <div class="image">
                    <img src="https://akcdn.detik.net.id/visual/2021/12/26/indonesia-tsunami-mosque-as-refuge_169.jpeg?w=715&q=90" alt="10 Tsunami terbesar RI">
                </div>
                <div class="content">
                    <h3><a href="https://www.cnbcindonesia.com/research/20230426074723-128-432271/10-tsunami-terbesar-di-ri-korban-jiwa-hingga-ratusan-ribu">10 Tsunami terbesar di Indonesia</a></h3>
                    <p style="text-align: justify;">Jakarta, CNBC Indonesia - Badan Meteorologi, Klimatologi dan Geofisika (BMKG) mengungkapkan gempa M6,9 pada pukul 03.00.57 WIB yang mengguncang Kepulauan Mentawai, Sumatera Barat (Sumbar). BMKG sempat mengeluarkan peringatan dini tsunami. Kemudian, pada pukul 05:17 WIB BMKG menyebut peringatan dini tsunami tersebut sudah diakhiri. Namun, kabarnya masyarakat tetap waspada dan sebagian masih mengungsi. Tentu demikian, masyarakat sekitar masih waspada dan takut terjadinya tsunami sebelumnya terulang di Sumatera Barat. Tsunami merupakan salah satu bencana alam yang berpotensi terjadi di seluruh wilayah Indonesia.</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://www.djkn.kemenkeu.go.id/files/images/2022/12/WhatsApp_Image_2022-12-26_at_10_35_36.jpeg" alt="Mengenang Tsunami Aceh 2004">
                </div>
                <div class="content">
                    <h3><a href="https://www.djkn.kemenkeu.go.id/kanwil-aceh/baca-artikel/15784/18-Tahun-Bencana-Tsunami-Aceh-Duka-Indonesia-dan-Dunia.html">Mengenang Tsunami Aceh 2004</a></h3>
                    <p style="text-align: justify;">Setelah 18 tahun berlalu, peristiwa gempa bumi dan gelombang tsunami pada 26 Desember 2004 masih tergambar jelas bagi seluruh masyarakat Aceh. Bagaimana tidak, bermula dari gempa magnitudo berkekuatan 9,3 yang terjadi sekitar pukul 07.59 WIB selama 10 menit dan berpusat di Samudra Hindia pada kedalaman sekitar 10 kilometer di dasar laut disusul gelombang laut dengan ketinggian hingga 30 meter dan kecepatan mencapai 100 meter per detik atau 360 kilometer per jam, dalam 30 menit terjangan gelombang tsunami yang meluluh-lantakkan sebagian wilayah pesisir Aceh.Total nilai kerugian ditaksir menyentuh angka US$4,5 miliar kala itu dimana bencana aceh merupakan salah satu bencana terbesar.</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://akcdn.detik.net.id/community/media/visual/2018/12/29/3ce50192-6bd1-4866-9ade-2ab7da42863b_169.jpeg?w=700&q=90" alt="BMKG">
                </div>
                <div class="content">
                    <h3><a href="https://news.detik.com/berita/d-7322922/bmkg-tegaskan-waspada-ada-tsunami-di-sumatera-2024-hoax">BMKG Tegaskan 'Waspada Ada Tsunami di Sumatera 2024' Hoax!.</a></h3>
                    <p style="text-align: justify;">Jakarta - BMKG merespons adanya informasi beredar terkait unggahan waspada tsunami di Sumatera 2024. BMKG menegaskan informasi tersebut hoax. Informasi hoax itu diunggah di akun media sosial instagram. Dinarasikan, Sesar berpotensi terjadi gempa darat.Adapaun dalam video yang diunggah, dituliskan waspada terjadinya tsunami tahun ini di Sumatera.Kepala Pusat Gempabumi dan Tsunami BMKG, Daryono menegaskan, Sesar Besar Sumatera tidak akan memicu tsunami. Meski demikian, Daryono mengimbau warga untuk selalu siaga, terutama yang tinggal di kawasan rawan gempa.</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://geosciences.ui.ac.id/wp-content/uploads/sites/292/2021/06/Paleotsunami02-600x399.jpg" alt="yahaha">
                </div>
                <div class="content">
                    <h3><a href="https://geosciences.ui.ac.id/pangkalan-data-paleotsunami-indonesia/">Pangkalan Data Paleotsunami Indonesia</a></h3>
                    <p style="text-align: justify;">Aktivitas tektonik Indonesia merupakan salah satu yang paling aktif di dunia. Kondisi tersebut menjadikan Indonesia rawan bencana gempa bumi, tsunami, dan letusan gunung berapi. Tsunami adalah gelombang laut besar yang terbentuk melalui beberapa proses seperti gempa bumi di bawah laut, longsor bawah laut, aktivitas gunung berapi, dan tumbukan asteroid. Indonesia telah mengalami berbagai kejadian tsunami. Namun, mekanisme dan karakter tsunami belum banyak diketahui. Mengetahui sejarah keterjadian tsunami sangat penting untuk memahami frekuensi dan intensitas tsunami saat ini.</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://img.inews.co.id/media/822/files/inews_new/2018/09/13/gelombang2.jpg" alt="bantul">
                </div>
                <div class="content">
                    <h3><a href="https://www.merdeka.com/peristiwa/sejarah-gempa-besar-dan-tsunami-di-yogyakarta.html">Sejarah Gempa Besar dan Tsunami di Yogyakarta</a></h3>
                    <p style="text-align: justify;">Merdeka.com - Bantul, Daerah Istimewa Yogyakarta (DIY), diguncang gempa bermagnitudo 6,0 malam ini, Jumat (30/6). Data sementara, gempa membuat 15 rumah warga dan sejumlah fasilitas umum rusak. Kepala Pusat Gempa bumi dan Tsunami BMKG, Daryono mengatakan, gempa magnitudo 6,0 Bantul menjadi alarm bahwa zona subduksi di Pulau Jawa masih aktif. Subduksi merupakan zona batas lempeng sangat luas yang bisa menimbulkan gempa besar.“Gempa malam ini merupakan alarm, mengingatkan kita bahwa zona subduksi Jawa memang masih aktif,” kata Daryono saat konferensi pers daring, Jumat (30/6).</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Coast_of_Banda_Aceh_2-12-05_050212-N-1450G-012.jpg/417px-Coast_of_Banda_Aceh_2-12-05_050212-N-1450G-012.jpg" alt="Tsunami 2004">
                </div>
                <div class="content">
                    <h3><a href="https://id.wikipedia.org/wiki/Gempa_bumi_dan_tsunami_Samudra_Hindia_2004">Gempa bumi dan Tsunami Samudera Hindia 2004</a></h3>
                    <p style="text-align: justify;">Gempa bumi dan tsunami Samudra Hindia 2004 atau lebih dikenal sebagai (Gempa bumi dan tsunami Aceh) adalah peristiwa gempa bumi berskala besar yang terjadi pada pukul 07:58:53 WIB hari Minggu, 26 Desember 2004. Pusat gempa terletak di lepas pantai barat Sumatra, Indonesia.[13] Guncangan gempa bumi tersebut berskala 9.1–9.3 dalam Skala kekuatan magnitudo dan IX (Hebat) dalam Skala intensitas Mercalli.Bencana gempa bumi dan tsunami ini menewaskan sekitar 227.898 jiwa pada 14 negara; Indonesia, Sri Lanka, India, Thailand, Somalia, dan Maladewa adalah negara yang paling parah terkena dampaknya.</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1634025439/01j5yyv8vs7z1kgvv5qexbw61s.jpg" alt="Tsunami">
                </div>
                <div class="content">
                    <h3><a href="https://kumparan.com/pandangan-jogja/bmkg-gempa-megathrust-bisa-sebabkan-tsunami-di-pesisir-selatan-jogja-23Nk8Eyn5W8">BMKG: Gempa Megathrust Bisa Sebabkan Tsunami di pesisir pantai selatan jogja</a></h3>
                    <p style="text-align: justify;">Daerah Istimewa Yogyakarta (DIY) jadi salah satu kawasan yang rawan terdampak gempa megathrust. Gempa megathrust ini juga berpotensi mengakibatkan gelombang tsunami di wilayah pesisir selatan Jogja. Hal itu disampaikan oleh Koordinator Observasi Stasiun Geofisika BMKG DIY, Budiarta. Ia menyebut, jika gempa megathrust terjadi di wilayah selatan Jawa, maka DIY akan ikut terdampak.Secara umum jika gempa bumi megathrust di selatan Jawa terjadi hingga menyebabkan tsunami, maka pesisir selatan DIY akan berpotensi terkena gelombang tsunaminya,” kata Budiarta saat dihubungi Pandangan Jogja, Jumat (23/8).</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://img.harianjogja.com/posts/2024/02/29/1166384/pantai-parangtritis.jpg" alt="PANTAI PARANGTRITIS">
                </div>
                <div class="content">
                    <h3><a href="https://jogjapolitan.harianjogja.com/read/2024/02/29/511/1166384/peta-evakuasi-tsunami-dipasang-di-enam-lokasi-sepanjang-pantai-selatan-bantul">Peta Evakuasi Tsunami Dipasang di Enam Lokasi Sepanjang Pantai Selatan Bantul</a></h3>
                    <p style="text-align: justify;">Harianjogja.com, BANTUL—Badan Penanggulangan Bencana Daerah Kabupaten Bantul telah memasang peta evakuasi tsunami di enam lokasi sepanjang pantai selatan sampai awal 2024 ini. Peta tersebut untuk memberikan pemahaman tentang ancaman bencana itu kepada masyarakat pesisir.enam titik pantai yang sudah dipasangi peta evakuasi tsunami itu adalah kawasan Pantai Parangtritis, Pantai Depok, kawasan Mangrove Baros Tirtohargo, Pantai Samas, Pantai Gua Cemara dan Pantai Baru.Poin penting yang ada dalam papan peta evakuasi tsunami itu pertama adalah adanya informasi tentang tiga langkah tanggap tsunami,</p>
                </div>
            </div>
            <div class="news-box">
                <div class="image">
                    <img src="https://cdn.rri.co.id/berita/Takengon/o/1724511269830-Gempa_megathrust_dari_dasar_laut_penting_untuk_dipahami_dan_menjadi_ancaman_nyata_di_Inodnesia,_khususnya_wilayah_pesisir._Foto_Nopri_IsmiMongabay_Indonesia/937pst51xtgkuk7.jpeg" alt="gempa berpotensi tsunami">
                </div>
                <div class="content">
                    <h3><a href="https://www.rri.co.id/iptek/926737/megathrust-gempa-berpotensi-tsunami-di-indonesia">Megathrust: Gempa Berpotensi Tsunami di Indonesia</a></h3>
                    <p style="text-align: justify;">KBRN, Takengon: Indonesia, yang terletak di sepanjang Cincin Api Pasifik, menghadapi ancaman potensial dari gempa megathrust—salah satu jenis gempa terbesar di Bumi. Gempa ini berpotensi memicu tsunami yang sangat berbahaya bagi masyarakat yang tinggal di wilayah pesisir. Dikutip dari Mongabay Indonesia, menurut Badan Meteorologi, Klimatologi, dan Geofisika (BMKG), saat ini belum ada indikasi bahwa gempa besar akan terjadi dalam waktu dekat.BMKG mengingatkan bahwa pembahasan mengenai potensi gempa di zona megathrust belum merupakan peringatan dini atau tanda bahwa gempa besar akan segera terjadi.</p>
                </div>
            </div>

            <div class="news-box">
                <div class="image">
                    <img src="https://www.esdm.go.id/assets/imagecache/bodyView/default-thumb-esdm.jpg" alt="thumb">
                </div>
                <div class="content">
                    <h3><a href="https://www.esdm.go.id/id/media-center/arsip-berita/19-wilayah-indonesia-rawan-tsunami-masyarakat-diminta-waspada">19 Wilayah Indonesia Rawan Tsunami, Masyarakat Diminta Waspada</a></h3>
                    <p style="text-align: justify;">JAKARTA - Badan Geologi, Kementerian Energi Dan Sumber Daya Mineral telah mengindentifikasi wilayah-wilayah di Indonesia yang rawan gerakan tanah, gempa bumi dan tsunami. 19 wilayah Indonesia terindikasi rawan terhadap terjadi gelombang tsunami.19 wilayah di Indonesia yang rawan terhadap terjadinya gelombang tsunami yaitu,Nangroe Aceh Darussalam (P. Simeulue, Pantai Barat NAD (Lhok Nga, Calang, Meulaboh), Lhokseumawe) Sumatera Utara (Pulau Nias, Pantai Barat Sumatera Utara (Singkil, Sibolga) Sumatera Barat (Kep. Mentawai, Pantai Barat Sumatera Barat (termasuk Siri Sori)</p>
                </div>
            </div>
        </div>
        <footer class="footer">
    <div class="footer-content">
        <p>&copy; 2024 Tsunami Coordination System. All rights reserved.</p>
        <div>
                <img src="<?=baseurl?>img/REMOVE.svg" class="logo">
        </div>
    </div>
</footer>