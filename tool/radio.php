<a href="#" id="toggle-player" class="togglebutton" style="background-color: #262626;bottom: 64px;height: 20px;left: 50%;right: 50%;opacity: .97;position: fixed;width: 30px;z-index: 9999;border-top-left-radius: 7px;border-top-right-radius: 7px;">

    <span class="fa fa-caret-up" style="margin: 0px 0px 0px 9px;font-size: 20px;"></span>

</a>

<div id="player-container" style="background-color: #262626;display: block;left: 0;position: fixed;bottom: 0;width: 100%;z-index: 999;opacity: .97">

    <div class="container">

        <div id="streamingplayer"></div>



        <div id="player-inner-container" style="height: 60px;background-color: #262626;margin-bottom: 0;margin-left: auto;margin-right: auto;margin-top: 0;position: relative;bottom: -4px;">

            <div class="row">

                <div class="col-md-1">

                    <div id="player_button_wrapper" style="text-align: center">

                        <button id="play-btn" style="cursor:pointer;background-image: url('https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/play_btn.png');background-repeat: no-repeat;background-color: #142AD4;background-size: 60px 60px;width: 60px;height: 60px;border: none;margin-left:5px;;background-position: center"></button>

                        <button id="stop-btn" style="cursor:pointer;background-image: url('https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/stop_btn.png');display: none;background-repeat: no-repeat;background-color: #142AD4;background-size: 60px 60px;width: 60px;height: 60px;border: none;margin-left:5px;background-position: center"></button>

                    </div>

                </div>

                <div class="col-md-2">

                    <p id="player-time-indicator" style="color: #fff;line-height: 55px;margin: 0 0 0 30px;">

                        00:00:00 / 00:00:00

                    </p>

                </div>

                <div class="col-md-5">

                    <div id="programa-selector" style="margin-left: 20px;margin-top: 9px">

                        <img id="imgpro1" class="proimg" src="https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro1.png?v=1.0.1" style="cursor:pointer;width: 80px;height: 45px;padding: 0 10px 0 10px">

                        <img id="imgpro2" class="proimg" src="https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro2.png?v=1.0.1" style="cursor:pointer;width: 80px;height: 45px;padding: 0 10px 0 10px">

                        <img id="imgpro3" class="proimg" src="https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro3.png?v=1.0.1" style="cursor:pointer;width: 80px;height: 45px;padding: 0 10px 0 10px">

                        <img id="imgpro4" class="proimg" src="https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro4.png?v=1.0.1" style="cursor:pointer;width: 80px;height: 45px;padding: 0 10px 0 10px">

                        <p id="add-text" style="color: #FFFFFF;font-size: 21px;line-height: 30px;"></p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div id="station-select" style="float: right">

                        <select id="station-option" class="form-control" style="margin-top: 9px;">

                            <option data-entrytitle="RRI Pro3" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="" data-entrypro2="" data-entrypro3="https://cdnpro3.rri.co.id/web-kbrn.mp3" data-entrypro4="" data-identity="Jaringan Berita Nasional" value="pro3" selected>

                                Pro3 </option>

                            <option data-entrytitle="RRI Voice of Indonesia" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="" data-entrypro2="" data-entrypro3="https://cdnvoi.rri.co.id/web-voi.mp3" data-entrypro4="" data-identity="Informing, Connecting, Dignifying" value="voi">

                                Voice of Indonesia </option>

                            <option data-entrytitle="RRI Channel 5" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="" data-entrypro2="" data-entrypro3="https://cdnch5.rri.co.id/web-chlima.mp3" data-entrypro4="" data-identity="Number One" value="channel5">

                                Channel 5 </option>

                            <option data-entrytitle="RRI Aceh Singkil" data-freq1="92.2 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnacehsingkilpro1.rri.co.id/web-rriacehsingkilpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="acehsingkil">

                                RRI Aceh Singkil </option>

                            <option data-entrytitle="RRI Ambon" data-freq1="105.1 MHz" data-freq2="98.2 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnambonpro1.rri.co.id/web-rriambonpro1.mp3" data-entrypro2="https://cdnambonpro2.rri.co.id/web-rriambonpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnambonpro4.rri.co.id/web-rriambonpro4.mp3" data-identity="" value="ambon">

                                RRI Ambon </option>

                            <option data-entrytitle="RRI Ampana" data-freq1="93.0 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnampanapro1.rri.co.id/web-rriampanapro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="ampana">

                                RRI Ampana </option>

                            <option data-entrytitle="RRI Atambua" data-freq1="91.5 MHz" data-freq2="99.8 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnatambuapro1.rri.co.id/web-rriatambuapro1.mp3" data-entrypro2="https://cdnatambuapro2.rri.co.id/web-rriatambuapro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="atambua">

                                RRI Atambua </option>

                            <option data-entrytitle="RRI Banda Aceh" data-freq1="97.7 MHz" data-freq2="88.6 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbandaacehpro1.rri.co.id/web-rribandaacehpro1.mp3" data-entrypro2="https://cdnbandaacehpro2.rri.co.id/web-rribandaacehpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnbandaacehpro4.rri.co.id/web-rribandaacehpro4.mp3" data-identity="" value="bandaaceh">

                                RRI Banda Aceh </option>

                            <option data-entrytitle="RRI Bandar Lampung" data-freq1="90.9 MHz" data-freq2="92.5 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnlampungpro1.rri.co.id/web-rrilampungpro1.mp3" data-entrypro2="https://cdnlampungpro2.rri.co.id/web-rrilampungpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnlampungpro4.rri.co.id/web-rrilampungpro4.mp3" data-identity="" value="lampung">

                                RRI Bandar Lampung </option>

                            <option data-entrytitle="RRI Bandung" data-freq1="97.6 MHz" data-freq2="96.0 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbandungpro1.rri.co.id/web-rribandungpro1.mp3" data-entrypro2="https://cdnbandungpro2.rri.co.id/web-rribandungpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnbandungpro4.rri.co.id/web-rribandungpro4.mp3" data-identity="" value="bandung">

                                RRI Bandung </option>

                            <option data-entrytitle="RRI Banjarmasin" data-freq1="97.6 MHz" data-freq2="95.2 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbanjarmasinpro1.rri.co.id/web-rribanjarmasinpro1.mp3" data-entrypro2="https://cdnbanjarmasinpro2.rri.co.id/web-rribanjarmasinpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnbanjarmasinpro4.rri.co.id/web-rribanjarmasinpro4.mp3" data-identity="" value="banjarmasin">

                                RRI Banjarmasin </option>

                            <option data-entrytitle="RRI Banten" data-freq1="94.9 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbantenpro1.rri.co.id/web-rribantenpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="banten">

                                RRI Banten </option>

                            <option data-entrytitle="RRI Batam" data-freq1="105.1 MHz" data-freq2="105.5 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbatampro1.rri.co.id/web-rribatampro1.mp3" data-entrypro2="https://cdnbatampro2.rri.co.id/web-rribatampro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="batam">

                                RRI Batam </option>

                            <option data-entrytitle="RRI Baubau" data-freq1="99.4 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbaubaupro1.rri.co.id/web-rribaubaupro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="baubau">

                                RRI Baubau </option>

                            <option data-entrytitle="RRI Belitung" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbelitungpro1.rri.co.id/web-rribelitungpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="belitung">

                                RRI Belitung </option>

                            <option data-entrytitle="RRI Bengkalis" data-freq1="90.6 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbengkalispro1.rri.co.id/web-rribengkalispro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="bengkalis">

                                RRI Bengkalis </option>

                            <option data-entrytitle="RRI Bengkulu" data-freq1="92.5 MHz" data-freq2="105.1 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbengkulupro1.rri.co.id/web-rribengkulupro1.mp3" data-entrypro2="https://cdnbengkulupro2.rri.co.id/web-rribengkulupro2.mp3" data-entrypro3="" data-entrypro4="https://cdnbengkulupro4.rri.co.id/web-rribengkulupro4.mp3" data-identity="" value="bengkulu">

                                RRI Bengkulu </option>

                            <option data-entrytitle="RRI Biak" data-freq1="96.1 MHz" data-freq2="94.5 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbiakpro1.rri.co.id/web-rribiakpro1.mp3" data-entrypro2="https://cdnbiakpro2.rri.co.id/web-rribiakpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="biak">

                                RRI Biak </option>

                            <option data-entrytitle="RRI Bima" data-freq1="91.4 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbimapro1.rri.co.id/web-rribimapro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="bima">

                                RRI Bima </option>

                            <option data-entrytitle="RRI Bintuhan" data-freq1="98.8 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbintuhanpro1.rri.co.id/web-rribintuhanpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="bintuhan">

                                RRI Bintuhan </option>

                            <option data-entrytitle="RRI Bogor" data-freq1="102 MHz" data-freq2="106.8 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbogorpro1.rri.co.id/web-rribogorpro1.mp3" data-entrypro2="https://cdnbogorpro2.rri.co.id/web-rribogorpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="bogor">

                                RRI Bogor </option>

                            <option data-entrytitle="RRI Bone" data-freq1="97.7 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbonepro1.rri.co.id/web-rribonepro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="bone">

                                RRI Bone </option>

                            <option data-entrytitle="RRI Bovendigul" data-freq1="90.3 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbovendigulpro1.rri.co.id/web-rribouvenpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="bovendigul">

                                RRI Bovendigul </option>

                            <option data-entrytitle="RRI Bukittinggi" data-freq1="94.8 MHz" data-freq2="97.2 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnbukittinggipro1.rri.co.id/web-rribkttinggipro1.mp3" data-entrypro2="https://cdnbukittinggipro2.rri.co.id/web-rribkttinggipro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="bukittinggi">

                                RRI Bukittinggi </option>

                            <option data-entrytitle="RRI Bula" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnbulapro1.rri.co.id/web-rribulapro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="bula">

                                RRI Bula </option>

                            <option data-entrytitle="RRI Cirebon" data-freq1="94.8 MHz" data-freq2="97.5 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdncirebonpro1.rri.co.id/web-rricirebonpro1.mp3" data-entrypro2="https://cdncirebonpro2.rri.co.id/web-rricirebonpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="cirebon">

                                RRI Cirebon </option>

                            <option data-entrytitle="RRI Denpasar" data-freq1="88.6 MHz" data-freq2="95.3 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdndenpasarpro1.rri.co.id/web-rridenpasarpro1.mp3" data-entrypro2="https://cdndenpasarpro2.rri.co.id/web-rridenpasarpro2.mp3" data-entrypro3="" data-entrypro4="https://cdndenpasarpro4.rri.co.id/web-rridenpasarpro4.mp3" data-identity="" value="denpasar">

                                RRI Denpasar </option>

                            <option data-entrytitle="RRI Ende" data-freq1="100.5 MHz" data-freq2="92.2 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdnendepro1.rri.co.id/web-rriendepro1.mp3" data-entrypro2="https://cdnendepro2.rri.co.id/web-rriendepro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="ende">

                                RRI Ende </option>

                            <option data-entrytitle="RRI Entikong" data-freq1="100.7 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnentikongpro1.rri.co.id/web-rrientikongpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="entikong">

                                RRI Entikong </option>

                            <option data-entrytitle="RRI Fak Fak" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnfakfakpro1.rri.co.id/web-rrifakfakpro1.mp3" data-entrypro2="https://cdnfakfakpro2.rri.co.id/web-rrifakfakpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="fakfak">

                                RRI Fak Fak </option>

                            <option data-entrytitle="RRI Gorontalo" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdngorontalopro1.rri.co.id/web-rrigorontalopro1.mp3" data-entrypro2="https://cdngorontalopro2.rri.co.id/web-rrigorontalopro2.mp3" data-entrypro3="" data-entrypro4="https://cdngorontalopro4.rri.co.id/web-rrigorontalopro4.mp3" data-identity="" value="gorontalo">

                                RRI Gorontalo </option>

                            <option data-entrytitle="RRI Gunung Sitoli" data-freq1="96.2" data-freq2="101.3" data-freq3="" data-freq4="" data-entrypro1="https://cdngunungsitolipro1.rri.co.id/web-rrisitolipro1.mp3" data-entrypro2="https://cdngunungsitolipro2.rri.co.id/web-rrisitolipro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="gunungsitoli">

                                RRI Gunung Sitoli </option>

                            <option data-entrytitle="RRI Jakarta" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnjakartapro1.rri.co.id/web-rrijakartapro1.mp3" data-entrypro2="https://cdnjakartapro2.rri.co.id/web-rrijakartapro2.mp3" data-entrypro3="" data-entrypro4="https://cdnjakartapro4.rri.co.id/web-rrijakartapro4.mp3" data-identity="" value="jakarta">

                                RRI Jakarta </option>

                            <option data-entrytitle="RRI Jambi" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnjambipro1.rri.co.id/web-rrijambipro1.mp3" data-entrypro2="https://cdnjambipro2.rri.co.id/web-rrijambipro2.mp3" data-entrypro3="" data-entrypro4="https://cdnjambipro4.rri.co.id/web-rrijambipro4.mp3" data-identity="" value="jambi">

                                RRI Jambi </option>

                            <option data-entrytitle="RRI Jayapura" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnjayapurapro1.rri.co.id/web-rrijayapurapro1.mp3" data-entrypro2="https://cdnjayapurapro2.rri.co.id/web-rrijayapurapro2.mp3" data-entrypro3="" data-entrypro4="https://cdnjayapurapro4.rri.co.id/web-rrijayapurapro4.mp3" data-identity="" value="jayapura">

                                RRI Jayapura </option>

                            <option data-entrytitle="RRI Jember" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnjemberpro1.rri.co.id/web-rrijemberpro1.mp3" data-entrypro2="https://cdnjemberpro2.rri.co.id/web-rrijemberpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="jember">

                                RRI Jember </option>

                            <option data-entrytitle="RRI Kaimana" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnkaimanapro1.rri.co.id/web-rrikaimanapro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="kaimana">

                                RRI Kaimana </option>

                            <option data-entrytitle="RRI Kediri" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnkediripro1.rri.co.id/web-rrikediripro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4=" " data-identity="" value="kediri">

                                RRI Kediri </option>

                            <option data-entrytitle="RRI Kendari" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnkendaripro1.rri.co.id/web-rrikendaripro1.mp3" data-entrypro2="https://cdnkendaripro2.rri.co.id/web-rrikendaripro2.mp3" data-entrypro3="" data-entrypro4="https://cdnkendaripro4.rri.co.id/web-rrikendaripro4.mp3" data-identity="" value="kendari">

                                RRI Kendari </option>

                            <option data-entrytitle="RRI Kupang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnkupangpro1.rri.co.id/web-rrikupangpro1.mp3" data-entrypro2="https://cdnkupangpro2.rri.co.id/web-rrikupangpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnkupangpro4.rri.co.id/web-rrikupangpro4.mp3" data-identity="" value="kupang">

                                RRI Kupang </option>

                            <option data-entrytitle="RRI Lhokseumawe" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnlhokseumawepro1.rri.co.id/web-rrilhokseumawepro1.mp3" data-entrypro2="https://cdnlhokseumawepro2.rri.co.id/web-rrilhokseumawepro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="lhokseumawe">

                                RRI Lhokseumawe </option>

                            <option data-entrytitle="RRI Madiun" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmadiunpro1.rri.co.id/web-rrimadiunpro1.mp3" data-entrypro2="https://cdnmadiunpro2.rri.co.id/web-rrimadiunpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="madiun">

                                RRI Madiun </option>

                            <option data-entrytitle="RRI Makassar" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmakassarpro1.rri.co.id/web-rrimakasarpro1.mp3" data-entrypro2="https://cdnmakassarpro2.rri.co.id/web-rrimakasarpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnmakassarpro4.rri.co.id/web-rrimakasarpro4.mp3" data-identity="" value="makassar">

                                RRI Makassar </option>

                            <option data-entrytitle="RRI Malang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmalangpro1.rri.co.id/web-rrimalangpro1.mp3" data-entrypro2="https://cdnmalangpro2.rri.co.id/web-rrimalangpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnmalangpro4.rri.co.id/web-rrimalangpro4.mp3" data-identity="" value="malang">

                                RRI Malang </option>

                            <option data-entrytitle="RRI Malinau" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmalinaupro1.rri.co.id/web-rrimalinaupro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="malinau">

                                RRI Malinau </option>

                            <option data-entrytitle="RRI Mamuju" data-freq1="96.00 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmamujupro1.rri.co.id/web-rrimamujupro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="mamuju">

                                RRI Mamuju </option>

                            <option data-entrytitle="RRI Manado" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmanadopro1.rri.co.id/web-rrimanadopro1.mp3" data-entrypro2="https://cdnmanadopro2.rri.co.id/web-rrimanadopro2.mp3" data-entrypro3="" data-entrypro4="https://cdnmanadopro4.rri.co.id/web-rrimanadopro4.mp3" data-identity="" value="manado">

                                RRI Manado </option>

                            <option data-entrytitle="RRI Manokwari" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmanokwaripro1.rri.co.id/web-rrimanokwaripro1.mp3" data-entrypro2="https://cdnmanokwaripro2.rri.co.id/web-rrimanokwaripro2.mp3" data-entrypro3="" data-entrypro4="https://cdnmanokwaripro4.rri.co.id/web-rrimanokwaripro4.mp3" data-identity="" value="manokwari">

                                RRI Manokwari </option>

                            <option data-entrytitle="RRI Mataram" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmatarampro1.rri.co.id/web-rrimatarampro1.mp3" data-entrypro2="https://cdnmatarampro2.rri.co.id/web-rrimatarampro2.mp3" data-entrypro3="" data-entrypro4="https://cdnmatarampro4.rri.co.id/web-rrimatarampro4.mp3" data-identity="" value="mataram">

                                RRI Mataram </option>

                            <option data-entrytitle="RRI Medan" data-freq1="94,3 MHz" data-freq2="92,4 MHz" data-freq3="" data-freq4="88,4 MHz" data-entrypro1="https://cdnmedanpro1.rri.co.id/web-rrimedanpro1.mp3" data-entrypro2="https://cdnmedanpro2.rri.co.id/web-rrimedanpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnmedanpro4.rri.co.id/web-rrimedanpro4.mp3" data-identity="" value="medan">

                                RRI Medan </option>

                            <option data-entrytitle="RRI Merauke" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmeraukepro1.rri.co.id/web-rrimeraukepro1.mp3" data-entrypro2="https://cdnmeraukepro2.rri.co.id/web-rrimeraukepro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="merauke">

                                RRI Merauke </option>

                            <option data-entrytitle="RRI Meulaboh" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnmeulabohpro1.rri.co.id/web-rrimeulabohpro1.mp3" data-entrypro2="https://cdnmeulabohpro2.rri.co.id/web-rrimeulabohpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="meulaboh">

                                RRI Meulaboh </option>

                            <option data-entrytitle="RRI Nabire" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnnabirepro1.rri.co.id/web-rrinabirepro1.mp3" data-entrypro2="https://cdnnabirepro2.rri.co.id/web-rrinabirepro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="nabire">

                                RRI Nabire </option>

                            <option data-entrytitle="RRI Nias Selatan" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnniasselatanpro1.rri.co.id/web-rriniasselatanpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="niasselatan">

                                RRI Nias Selatan </option>

                            <option data-entrytitle="RRI Nunukan" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnnunukanpro1.rri.co.id/web-rrinunukanpro1.mp3" data-entrypro2="https://cdnnunukanpro2.rri.co.id/web-rrinunukanpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="nunukan">

                                RRI Nunukan </option>

                            <option data-entrytitle="RRI Padang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnpadangpro1.rri.co.id/web-rripadangpro1.mp3" data-entrypro2="https://cdnpadangpro2.rri.co.id/web-rripadangpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnpadangpro4.rri.co.id/web-rripadangpro4.mp3" data-identity="" value="padang">

                                RRI Padang </option>

                            <option data-entrytitle="RRI Palangkaraya" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnpalangkarayapro1.rri.co.id/web-rripalangkarayapro1.mp3" data-entrypro2="https://cdnpalangkarayapro2.rri.co.id/web-rripalangkarayapro2.mp3" data-entrypro3="" data-entrypro4="https://cdnpalangkarayapro4.rri.co.id/web-rripalangkarayapro4.mp3" data-identity="" value="palangkaraya">

                                RRI Palangkaraya </option>

                            <option data-entrytitle="RRI Palembang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnpalembangpro1.rri.co.id/web-rripalembangpro1.mp3" data-entrypro2="https://cdnpalembangpro2.rri.co.id/web-rripalembangpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnpalembangpro4.rri.co.id/web-rripalembangpro4.mp3" data-identity="" value="palembang">

                                RRI Palembang </option>

                            <option data-entrytitle="RRI Palu" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnpalupro1.rri.co.id/web-rripalupro1.mp3" data-entrypro2="https://cdnpalupro2.rri.co.id/web-rripalupro2.mp3" data-entrypro3="" data-entrypro4="https://cdnpalupro4.rri.co.id/web-rripalupro4.mp3" data-identity="" value="palu">

                                RRI Palu </option>

                            <option data-entrytitle="RRI Pekanbaru" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnpekanbarupro1.rri.co.id/web-rripekanbarupro1.mp3" data-entrypro2="https://cdnpekanbarupro2.rri.co.id/web-rripekanbarupro2.mp3" data-entrypro3="" data-entrypro4="https://cdnpekanbarupro4.rri.co.id/web-rripekanbarupro4.mp3" data-identity="" value="pekanbaru">

                                RRI Pekanbaru </option>

                            <option data-entrytitle="RRI Pontianak" data-freq1="104.2 Mhz" data-freq2="101.8 Mhz" data-freq3="" data-freq4="94.3 Mhz" data-entrypro1="https://cdnpontianakpro1.rri.co.id/web-rripontianakpro1.mp3" data-entrypro2="https://cdnpontianakpro2.rri.co.id/web-rripontianakpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnpontianakpro4.rri.co.id/web-rripontianakpro4.mp3" data-identity="" value="pontianak">

                                RRI Pontianak </option>

                            <option data-entrytitle="RRI Purwokerto" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnpurwokertopro1.rri.co.id/web-rripurwokertopro1.mp3" data-entrypro2="https://cdnpurwokertopro2.rri.co.id/web-rripurwokertopro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="purwokerto">

                                RRI Purwokerto </option>

                            <option data-entrytitle="RRI Ranai" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnranaipro1.rri.co.id/web-rriranaipro1.mp3" data-entrypro2="https://cdnranaipro2.rri.co.id/web-rriranaipro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="ranai">

                                RRI Ranai </option>

                            <option data-entrytitle="RRI Rote" data-freq1="92.5 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnrotepro1.rri.co.id/web-rrirotepro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="rote">

                                RRI Rote </option>

                            <option data-entrytitle="RRI Sabang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsabangpro1.rri.co.id/web-rrisabangpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="sabang">

                                RRI Sabang </option>

                            <option data-entrytitle="RRI Samarinda" data-freq1="97,6" data-freq2="88,5" data-freq3="" data-freq4="98,4" data-entrypro1="https://cdnsamarindapro1.rri.co.id/web-rrisamarindapro1.mp3" data-entrypro2="https://cdnsamarindapro2.rri.co.id/web-rrisamarindapro2.mp3" data-entrypro3="" data-entrypro4="https://cdnsamarindapro4.rri.co.id/web-rrisamarindapro4.mp3" data-identity="" value="samarinda">

                                RRI Samarinda </option>

                            <option data-entrytitle="RRI Sampang" data-freq1="100.8 FM" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsampangpro1.rri.co.id/web-rrisampangpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="sampang">

                                RRI Sampang </option>

                            <option data-entrytitle="RRI Sanggau" data-freq1="97,0" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsanggaupro1.rri.co.id/rrisanggaupro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="sanggau">

                                RRI Sanggau </option>

                            <option data-entrytitle="RRI Saumlaki" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsaumlakipro1.rri.co.id/web-rrisaumlakipro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="saumlaki">

                                RRI Saumlaki </option>

                            <option data-entrytitle="RRI Semarang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsemarangpro1.rri.co.id/web-rrisemarangpro1.mp3" data-entrypro2="https://cdnsemarangpro2.rri.co.id/web-rrisemarangpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnsemarangpro4.rri.co.id/web-rrisemarangpro4.mp3" data-identity="" value="semarang">

                                RRI Semarang </option>

                            <option data-entrytitle="RRI Sendawar" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsendawarpro1.rri.co.id/web-rrisendawarpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="sendawar">

                                RRI Sendawar </option>

                            <option data-entrytitle="RRI Serui" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnseruipro1.rri.co.id/web-rriseruipro1.mp3" data-entrypro2="https://cdnseruipro2.rri.co.id/web-rriseruipro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="serui">

                                RRI Serui </option>

                            <option data-entrytitle="RRI Sibolga" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsibolgapro1.rri.co.id/web-rrisibolgapro1.mp3" data-entrypro2="https://cdnsibolgapro2.rri.co.id/web-rrisibolgapro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="sibolga">

                                RRI Sibolga </option>

                            <option data-entrytitle="RRI Singaraja" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsingarajapro1.rri.co.id/web-rrisingarajapro1.mp3" data-entrypro2="https://cdnsingarajapro2.rri.co.id/web-rrisingarajapro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="singaraja">

                                RRI Singaraja </option>

                            <option data-entrytitle="RRI Sintang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsintangpro1.rri.co.id/web-rrisintangpro1.mp3" data-entrypro2="https://cdnsintangpro2.rri.co.id/web-rrisintangpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="sintang">

                                RRI Sintang </option>

                            <option data-entrytitle="RRI Sorong" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsorongpro1.rri.co.id/web-rrisorongpro1.mp3" data-entrypro2="https://cdnsorongpro2.rri.co.id/web-rrisorongpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="sorong">

                                RRI Sorong </option>

                            <option data-entrytitle="RRI Sumenep" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsumeneppro1.rri.co.id/web-rrisumeneppro1.mp3" data-entrypro2="https://cdnsumeneppro2.rri.co.id/web-rrisumeneppro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="sumenep">

                                RRI Sumenep </option>

                            <option data-entrytitle="RRI Sungailiat" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsungailiatpro1.rri.co.id/web-rrisngliatpro1.mp3" data-entrypro2="https://cdnsungailiatpro2.rri.co.id/web-rrisngliatpro2.mp3" data-entrypro3="" data-entrypro4="https://cdnsungailiatpro4.rri.co.id/web-rrisngliatpro4.mp3" data-identity="" value="sungailiat">

                                RRI Sungailiat </option>

                            <option data-entrytitle="RRI Sungaipenuh" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsungaipenuhpro1.rri.co.id/web-rrisngpenuhpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="sungaipenuh">

                                RRI Sungaipenuh </option>

                            <option data-entrytitle="RRI Surabaya" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsurabayapro1.rri.co.id/web-rrisurabayapro1.mp3" data-entrypro2="https://cdnsurabayapro2.rri.co.id/web-rrisurabayapro2.mp3" data-entrypro3="" data-entrypro4="https://cdnsurabayapro4.rri.co.id/web-rrisurabayapro4.mp3" data-identity="" value="surabaya">

                                RRI Surabaya </option>

                            <option data-entrytitle="RRI Surakarta" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnsurakartapro1.rri.co.id/web-rrisurakartapro1.mp3" data-entrypro2="https://cdnsurakartapro2.rri.co.id/web-rrisurakartapro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="surakarta">

                                RRI Surakarta </option>

                            <option data-entrytitle="RRI Tahuna" data-freq1="FM 105,4 MHz" data-freq2="FM 92 MHz" data-freq3="" data-freq4="" data-entrypro1="https://cdntahunapro1.rri.co.id/web-rritahunapro1.mp3" data-entrypro2="https://cdntahunapro2.rri.co.id/web-rritahunapro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="tahuna">

                                RRI Tahuna </option>

                            <option data-entrytitle="RRI Takengon" data-freq1="93.00Mhz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdntakengonpro1.rri.co.id/web-rritakengonpro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="takengon">

                                RRI Takengon </option>

                            <option data-entrytitle="RRI Tanjung Balai" data-freq1="99,7 MHz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdntanjungbalaipro1.rri.co.id/web-rritjbalaipro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="tanjungbalai">

                                RRI Tanjung Balai </option>

                            <option data-entrytitle="RRI Tanjungpinang" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdntanjungpinangpro1.rri.co.id/web-rritjpinangpro1.mp3" data-entrypro2="https://cdntanjungpinangpro2.rri.co.id/web-rritjpinangpro2.mp3" data-entrypro3="" data-entrypro4="https://cdntanjungpinangpro4.rri.co.id/web-rritjpinangpro4.mp3" data-identity="" value="tanjungpinang">

                                RRI Tanjungpinang </option>

                            <option data-entrytitle="RRI Tarakan" data-freq1="97.9 Mhz" data-freq2="107 Mhz" data-freq3="" data-freq4="" data-entrypro1="https://cdntarakanpro1.rri.co.id/web-rritarakanpro1.mp3" data-entrypro2="https://cdntarakanpro2.rri.co.id/web-rritarakanpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="tarakan">

                                RRI Tarakan </option>

                            <option data-entrytitle="RRI Ternate" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnternatepro1.rri.co.id/web-rriternatepro1.mp3" data-entrypro2="https://cdnternatepro2.rri.co.id/web-rriternatepro2.mp3" data-entrypro3="" data-entrypro4="https://cdnternatepro4.rri.co.id/web-rriternatepro4.mp3" data-identity="" value="ternate">

                                RRI Ternate </option>

                            <option data-entrytitle="RRI Toli Toli" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdntolitolipro1.rri.co.id/web-rritolitolipro1.mp3" data-entrypro2="https://cdntolitolipro2.rri.co.id/web-rritolitolipro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="tolitoli">

                                RRI Toli Toli </option>

                            <option data-entrytitle="RRI Tual" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdntualpro1.rri.co.id/web-rritualpro1.mp3" data-entrypro2="https://cdntualpro2.rri.co.id/web-rritualpro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="tual">

                                RRI Tual </option>

                            <option data-entrytitle="RRI Wamena" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnwamenapro1.rri.co.id/web-rriwamenapro1.mp3" data-entrypro2="https://cdnwamenapro2.rri.co.id/web-rriwamenapro2.mp3" data-entrypro3="" data-entrypro4="" data-identity="" value="wamena">

                                RRI Wamena </option>

                            <option data-entrytitle="RRI Waykanan" data-freq1="103,6 Mhz" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnwaykananpro1.rri.co.id/web-rriwaykanapro1.mp3" data-entrypro2="" data-entrypro3="" data-entrypro4="" data-identity="" value="waykanan">

                                RRI Waykanan </option>

                            <option data-entrytitle="RRI Yogyakarta" data-freq1="" data-freq2="" data-freq3="" data-freq4="" data-entrypro1="https://cdnyogyakartapro1.rri.co.id/web-rrijogjapro1.mp3" data-entrypro2="https://cdnyogyakartapro2.rri.co.id/web-rrijogjapro2.mp3" data-entrypro3="" data-entrypro4="https://cdnyogyakartapro4.rri.co.id/web-rrijogjapro4.mp3" data-identity="" value="yogyakarta">

                                RRI Yogyakarta </option>



                        </select>

                        <div id="overlay-programa" style="display: none;bottom: 100px;height: 0;left: 30%;opacity: 1;position: fixed;width: 15px;z-index: 16;">

                            <img id="overlayimg" src="https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/overlay.png">

                        </div>

                    </div>

                </div>

            </div>







        </div>

    </div>

</div>

</div>

<!-- External JavaScripts -->

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/jquery/jquery-3.1.1.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/bootstrap/bootstrap.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/jquery/jquery-ui.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/bootstrap-select/bootstrap-select.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/easy-ticker/jquery.easy-ticker.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/fittext/jquery.fittext.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/fitvids/jquery.fitvids.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/flexslider/flexslider-min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/headroom/headroom.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/imgliquid/imgLiquid-min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/jquery-easing/jquery.easing.1.3.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/jquery-parallax/jquery.parallax-1.1.3.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/ketchup/jquery.ketchup.all.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/li-scroller/jquery.li-scroller.1.0.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/lightbox2/lightbox.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/mcustom-scrollbar/jquery.mCustomScrollbar.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/owlcarousel/owl.carousel.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/sidenav/sidenav.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/smoothscroll/smoothscroll.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/stickykit/sticky-kit.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/uitotop/jquery.ui.totop.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/lazysizes/lazysizes.min.js"></script>

<script src="https://assetcdn.rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/jquery-copy-to-clipboard/jquery.copy-to-clipboard.min.js"></script>

<script src="https://assetcdn.rri.co.id/theme/js/md5.min.js"></script>

<script src="https://assetcdn.rri.co.id/theme/js/blockui.min.js"></script>

<!--[if lt IE 9]>

        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

        <![endif]-->

<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>

<script>
    /*var OneSignal = window.OneSignal || [];

            OneSignal.push(function() {

                OneSignal.init({

                    appId: "a8b86d73-7ae0-4e0c-aa71-dcf4d963d776",

                    notifyButton: {

                        enable: true,

                    },

                });

            });*/

    var OneSignal = window.OneSignal || [];

    OneSignal.push(function() {

        OneSignal.init({

            appId: "a8b86d73-7ae0-4e0c-aa71-dcf4d963d776",

        });

    });
</script>

<!--<script src=""></script>-->

<!--<script src="https://track.rri.co.id/tracker.min.js" async></script>-->

<script>
    function getCookie(name) {

        var nameEQ = name + "=";

        var ca = document.cookie.split(';');

        for (var i = 0; i < ca.length; i++) {

            var c = ca[i];

            while (c.charAt(0) == ' ') c = c.substring(1, c.length);

            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);

        }

        return null;

    }



    function extractHostname(url) {

        var hostname;

        //find & remove protocol (http, ftp, etc.) and get hostname



        if (url.indexOf("//") > -1) {

            hostname = url.split('/')[2];

        } else {

            hostname = url.split('/')[0];

        }



        //find & remove port number

        hostname = hostname.split(':')[0];

        //find & remove "?"

        hostname = hostname.split('?')[0];



        return hostname;

    }

    var __baseUrl = "https://rri.co.id/";

    var __currentUrl = "https://rri.co.id/";

    var __currentCampaign = "General Campaign";

    var __payload = "&cookie_ga=" + getCookie("_ga") + "&cookie_gid=" + getCookie("_gid") + "&id_daerah=1&daerah=kbrn&url_path=" + window.location.pathname + "&screen_width=" + screen.width + "&screen_height=" + screen.height + "&platform=" + navigator.platform + "&referrer=" + document.referrer + "&domain_referrer=" + extractHostname(document.referrer);
</script>

<script src="https://assetcdn.rri.co.id/theme/js/functions.js?v=1.1.0"></script>

<script>
    (function(i, s, o, g, r, a, m) {

        i['GoogleAnalyticsObject'] = r;

        i[r] = i[r] || function() {

            (i[r].q = i[r].q || []).push(arguments)

        }, i[r].l = 1 * new Date();

        a = s.createElement(o),

            m = s.getElementsByTagName(o)[0];

        a.async = 1;

        a.src = g;

        m.parentNode.insertBefore(a, m)

    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');



    ga('create', 'UA-46009705-1', 'auto');

    ga(function(tracker) {

        var originalSendHitTask = tracker.get('sendHitTask');

        tracker.set('sendHitTask', function(model) {

            var payLoad = model.get('hitPayload') + __payload;

            originalSendHitTask(model);

            var gifRequest = new XMLHttpRequest();

            var gifPath = "//backend.rri.co.id/ga/track";

            gifRequest.open('get', gifPath + '?' + payLoad, true);

            gifRequest.send();

        });

    });

    ga('send', 'pageview');
</script>

<script src="https://rri.co.id/__srct/d2d8976043bc53707ee82621f52ce43c/js/sap.js"></script>

<script>
    /**

     * Created by mdhugol on 7/26/17.

     */

    var __selectedStation;

    var __selectedPrograma = 0;

    var __isPlayed = false;

    var __intervalTimer;

    FWDEAPUtils.onReady(function() {

        new FWDEAP({

            /*main settings*/

            instanceName: "streaming",

            parentId: "streamingplayer",

            mainFolderPath: "https://rri.co.id/__srct/d2d8976043bc53707ee82621f52ce43c/content",

            skinPath: "minimal_skin_white",

            sourcePath: "https://cdnpro3.rri.co.id/web-kbrn.mp3",

            facebookAppId: "",

            useOnlyAPI: "yes",

            rightClickContextMenu: "developer",

            autoPlay: "no",

            loop: "yes",

            maxWidth: 470,

            volume: .8,

            /*controller settings*/

            animateOnIntro: "yes",

            showOnlyPlayButton: "no",

            showBackgroundBar: "yes",

            showMainScrubber: "yes",

            showFacebookButton: "no",

            showVolumeScrubber: "yes",

            showVolumeButton: "yes",

            showTime: "yes",

            repeatBackground: "no",

            controllerHeight: 43,

            startSpaceBetweenButtons: 7,

            spaceBetweenButtons: 8,

            volumeScrubberWidth: 80,

            scrubbersOffsetWidth: 2,

            scrubbersOffestTotalWidth: 3,

            timeOffsetLeftWidth: 3,

            timeOffsetRightWidth: 2,

            timeOffsetTop: 0,

            timeOffestTotalWidth: 4,

            timeColor: "#888888"

        })



        streaming.addListener(FWDEAP.READY, readyHandler);

        streaming.addListener(FWDEAP.ERROR, errorHandler);

        streaming.addListener(FWDEAP.PLAY, playHandler);

        streaming.addListener(FWDEAP.PAUSE, pauseHandler);

        streaming.addListener(FWDEAP.STOP, stopHandler);

        streaming.addListener(FWDEAP.UPDATE, udpateHandler);

        streaming.addListener(FWDEAP.UPDATE_TIME, udpateTime);

        streaming.addListener(FWDEAP.PLAY_COMPLETE, playCompleteHandler);

    });



    function pad(time) {

        return (time < 10 ? '0' : '') + time;

    }



    function loadProgress(e) {

        //console.log("Loaded " + e.percent);

        //_progressLoaded = Number(e.percent.toString().substr(0,6));

    }





    function readyHandler(e) {

        //console.log("ready handler");

        streaming.audioScreen_do.addListener(FWDEAPAudioScreen.LOAD_PROGRESS, loadProgress);

    }



    function errorHandler(e) {

        //console.log("error handler");

    }



    function playHandler(e) {

        //console.log("play handler");

        $("button#play-btn").css("display", "none");

        $("button#stop-btn").css("display", "");

        __isPlayed = true;

        var sec = 0;

        __intervalTimer = setInterval(function() {

            sec++

            var s = parseInt(sec % 60);

            var m = parseInt((sec / 60) % 60);

            var h = parseInt(((sec / 60) / 60) % 60);

            $("#player-time-indicator").html((pad(h) + ':' + pad(m) + ':' + pad(s)) + ' / 00:00:00');

        }, 1000);

        _tmpPayload = __payload;

        __payload += "&stream_station=" + __selectedStation.val() + "&programa=" + __selectedPrograma;

        ga('send', {

            hitType: 'event',

            eventCategory: 'AudioStreaming',

            eventAction: 'play',

            eventLabel: 'General Campaign'

        });

        __payload = _tmpPayload;

    }



    function pauseHandler(e) {

        //console.log("pause handler");



    }



    function stopHandler(e) {

        //console.log("stop handler");

        clearInterval(__intervalTimer);

        $("button#play-btn").css("display", "");

        $("button#stop-btn").css("display", "none");

        normalProLogo();

        __isPlayed = false;

        $("#player-time-indicator").html('00:00:00 / 00:00:00');

        _tmpPayload = __payload;

        __payload += "&stream_station=" + __selectedStation.val() + "&programa=" + __selectedPrograma;

        ga('send', {

            hitType: 'event',

            eventCategory: 'AudioStreaming',

            eventAction: 'stop',

            eventLabel: 'General Campaign'

        });

        __payload = _tmpPayload;

    }



    function udpateHandler(e) {

        //console.log("Current Playing " + e.percent);

        //_progressCurrent = Number(e.percent.toString().substr(0,6));

    }



    function udpateTime(e) {

        //console.log("udpateTimeHandler handler " + e.time);

        //console.log(e);

        /*var curTime = e.time.substr(0,5);

         var totalTime = e.time.substr(6,5);

         var a = curTime.split(':');

         var b = totalTime.split(':');

         var curSec = (+a[0]) * 60 + (+a[1]);

         var totalSec = (+b[0]) * 60 + (+b[1]);

         var progress = (curSec * 100) / totalSec;

         console.log(progress);*/

    }



    function playCompleteHandler(e) {

        //console.log("play complete");

    }



    function displayProLogo() {

        __selectedPrograma = 1;

        streaming.setSource(__selectedStation.data("entrypro1"));

        if (__selectedStation.data("entrypro3") != "") {

            if (__selectedStation.val() == "pro3") {

                $("#imgpro3").css("display", "");

                $("#imgpro1").fadeOut("fast");

                $("#imgpro2").fadeOut("fast");

                $("#imgpro4").fadeOut("fast");

                $("#add-text").css("display", "none");

            } else {

                $("#imgpro3").css("display", "none");

                $("#imgpro1").css("display", "none");

                $("#imgpro2").css("display", "none");

                $("#imgpro4").css("display", "none");

                $("#add-text").fadeIn("fast").html(__selectedStation.data("entrytitle"));

            }

            $("#overlay-programa").css("display", "none");

            __selectedPrograma = 3;

            streaming.setSource(__selectedStation.data("entrypro3"));

        } else if (__selectedStation.data("entrypro4") != "") {

            $("#imgpro3").fadeOut("fast");

            $("#imgpro1").fadeIn("fast");

            $("#imgpro2").fadeIn("fast");

            $("#imgpro4").fadeIn("fast");

            $("#add-text").css("display", "none");

            $("#overlay-programa").fadeIn("fast");

        } else if (__selectedStation.data("entrypro2") != "") {

            $("#imgpro3").fadeOut("fast");

            $("#imgpro1").fadeIn("fast");

            $("#imgpro2").fadeIn("fast");

            $("#imgpro4").fadeOut("fast");

            $("#add-text").css("display", "none");

            $("#overlay-programa").fadeIn("fast");

        } else {

            $("#imgpro3").fadeOut("fast");

            $("#imgpro1").fadeIn("fast");

            $("#imgpro2").fadeOut("fast");

            $("#imgpro4").fadeOut("fast");

            $("#add-text").css("display", "none");

            $("#overlay-programa").fadeOut("fast");

        }

    };



    function diplayPlayedProLogo() {

        normalProLogo();

        if (__selectedPrograma == 1) {

            $("#imgpro1").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/l.pro1.png");

        }

        if (__selectedPrograma == 2) {

            $("#imgpro2").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/l.pro2.png");

        }

        if (__selectedPrograma == 3) {

            if (__selectedStation.val() == "pro3") {

                $("#imgpro3").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/l.pro3.png");

            } else {



            }

        }

        if (__selectedPrograma == 4) {

            $("#imgpro4").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/l.pro4.png");

        }

    }



    function normalProLogo() {

        $("#imgpro1").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro1.png");

        $("#imgpro2").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro2.png");

        $("#imgpro3").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro3.png");

        $("#imgpro4").attr("src", "https://rri.co.id/__srct/d86b4a3e7f28244630eb1859175d3f41/player/assets/ll.pro4.png");

    }

    $(document).ready(function() {

        __selectedStation = $("#station-option").find("option:selected");

        displayProLogo();

        $("#station-option").change(function(e) {

            __selectedStation = $("#station-option").find("option:selected");

            streaming.stop();

            displayProLogo();

        });

        $("#toggle-player").click(function(event) {

            event.preventDefault();

            var togglePlayer = $("#toggle-player");

            var playerContainer = $("#player-container");

            if (togglePlayer.hasClass("hidenow")) {

                //togglePlayer.removeClass("show-toggler");

                //togglePlayer.toggleClass("hide-toggler", 1000, "swing");



                playerContainer.fadeIn("slow");

                togglePlayer.animate({

                    bottom: 64,



                }, 500, function() {

                    togglePlayer.removeClass("hidenow");

                })

            } else {

                //togglePlayer.removeClass("hide-toggler");

                //togglePlayer.toggleClass("hide-toggler", 1000, "swing");

                playerContainer.fadeOut("slow");

                togglePlayer.animate({

                    bottom: 0,



                }, 500, function() {

                    togglePlayer.addClass("hidenow");



                })

            }

        });

        $("#imgpro1").click(function(e) {

            if (!__isPlayed) {

                __selectedPrograma = 1;

                streaming.setSource(__selectedStation.data("entrypro1"));

                diplayPlayedProLogo();

                streaming.play();

            } else {

                if (__selectedPrograma != 1) {

                    __selectedPrograma = 1;

                    streaming.setSource(__selectedStation.data("entrypro1"));

                    diplayPlayedProLogo();

                    streaming.play();

                } else {

                    streaming.stop();

                }

            }

        })

        $("#imgpro2").click(function(e) {

            if (!__isPlayed) {

                __selectedPrograma = 2;

                streaming.setSource(__selectedStation.data("entrypro2"));

                diplayPlayedProLogo();

                streaming.play();

            } else {

                if (__selectedPrograma != 2) {

                    __selectedPrograma = 2;

                    streaming.setSource(__selectedStation.data("entrypro2"));

                    diplayPlayedProLogo();

                    streaming.play();

                } else {

                    streaming.stop();

                }

            }

        })

        $("#imgpro3").click(function(e) {

            if (!__isPlayed) {

                __selectedPrograma = 3;

                streaming.setSource(__selectedStation.data("entrypro3"));

                diplayPlayedProLogo();

                streaming.play();

            } else {

                if (__selectedPrograma != 3) {

                    __selectedPrograma = 3;

                    streaming.setSource(__selectedStation.data("entrypro3"));

                    diplayPlayedProLogo();

                    streaming.play();

                } else {

                    streaming.stop();

                }

            }

        })

        $("#imgpro4").click(function(e) {

            if (!__isPlayed) {

                __selectedPrograma = 4;

                streaming.setSource(__selectedStation.data("entrypro4"));

                diplayPlayedProLogo();

                streaming.play();

            } else {

                if (__selectedPrograma != 4) {

                    __selectedPrograma = 4;

                    streaming.setSource(__selectedStation.data("entrypro4"));

                    diplayPlayedProLogo();

                    streaming.play();

                } else {

                    streaming.stop();

                }

            }

        })

        $("button#play-btn").click(function() {

            streaming.play();

            diplayPlayedProLogo();

        });

        $("button#stop-btn").click(function() {

            streaming.stop();

        });

    })
</script>

<script>
    var __loadUrl = 'https://rri.co.id/loadmore';

    __loadUrl = addParam(__loadUrl, '__cdx', '17a805c0a147381d3a511c357fc4710597d646170f35e2f786815e3b48a718b84b96214a0ec2dd3e21eebe32a7b72d769c4e9260c5802a9827685351362ec1efFKA1kZQIropvL0I_p_WkRICs8ML_s_Ti9lB4dL8J_p_yY7OXM_e_');

    __loadUrl = addParam(__loadUrl, '__up', 'bd41a3f6bf38e6a57434d0970275bad86cff510250f9aa653067f810ea79052fc5cc2801f1e943d428ea5d6763ca748825b883ea1b175d92e27a15746c9710a980uF04ke_p__s_RDSRHCLiSsSjCiyq6A_s_9hU3SahJJ7SIcU_e_');

    __loadUrl = addParam(__loadUrl, '__ups', 'e427f89ce25e31a0bb53f2ce589b8caa822d57ba12e28ef50a703dd82d8a8b4b913aa0bca046b8dc7ddb6cc93f7c959bfc35a81ac9408f98fea20900156287f4jDbzDAgRMXuSmOwDBKQcJ2VAhRcBTy77aQqlWuw4WfE_e_');

    $(document).ready(function() {



        $("button#loadmore").click(function() {

            $("i#loadmore-refresh-icon").addClass("fa-spin");

            $("span#loadmore-text").text("Memproses Data");

            $.ajax({

                type: "GET", //POST OR GET

                url: __loadUrl, //URL

                success: function(data, status) {

                    if (data.status == 'success') {

                        $("div.news.home.berita-terkini").append(data.__rst);

                        $(window).scroll();

                        $(".imgLiquidFill").imgLiquid({

                            fill: true

                        });

                        __loadUrl = addParam(__loadUrl, '__cdx', data.__cdx);

                        __loadUrl = addParam(__loadUrl, '__up', data.__up);

                        __loadUrl = addParam(__loadUrl, '__ups', data.__ups);

                        if (data.__nto < 20) {

                            $("button#loadmore").css("display", "none");

                        }

                        setTimeout(function() {

                            $("i#loadmore-refresh-icon").removeClass("fa-spin");

                            $("span#loadmore-text").text("Muat Data Sebelumnya");



                        }, 1000)

                    }

                },

                error: function(request, status, error) {

                    console.log("AJAX ERROR");

                    $("i#loadmore-refresh-icon").removeClass("fa-spin");

                    $("span#loadmore-text").text("Muat Data Sebelumnya");

                    alert("Data yang diminta sementara tidak tersedia");

                }

            });

        })

    })
</script>