<?php
if (!defined('ABSPATH')) exit;
if (!class_exists('ACL_WPAS_iKits')) {

    class ACL_WPAS_iKits
    {
        //Country, Site and Affiliate Tag
        public static $product_attr_names;

        public static function store_categories()
        {
            $store = get_option('acl_wpas_amazon_country');

            switch ($store) {
                case "com":
                    ?>
                    <option value="aps">All Departments</option>
                    <option value="arts-crafts-intl-ship">Arts &amp; Crafts</option>
                    <option value="automotive-intl-ship">Automotive</option>
                    <option value="baby-products-intl-ship">Baby</option>
                    <option value="beauty-intl-ship">Beauty &amp; Personal Care</option>
                    <option value="stripbooks-intl-ship">Books</option>
                    <option value="computers-intl-ship">Computers</option>
                    <option value="digital-music">Digital Music</option>
                    <option value="electronics-intl-ship">Electronics</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="instant-video">Prime Video</option>
                    <option value="fashion-womens-intl-ship">Women's Fashion</option>
                    <option value="fashion-mens-intl-ship">Men's Fashion</option>
                    <option value="fashion-girls-intl-ship">Girls' Fashion</option>
                    <option value="fashion-boys-intl-ship">Boys' Fashion</option>
                    <option value="deals-intl-ship">Deals</option>
                    <option value="hpc-intl-ship">Health &amp; Household</option>
                    <option value="kitchen-intl-ship">Home &amp; Kitchen</option>
                    <option value="industrial-intl-ship">Industrial &amp; Scientific</option>
                    <option value="luggage-intl-ship">Luggage</option>
                    <option value="movies-tv-intl-ship">Movies &amp; TV</option>
                    <option value="music-intl-ship">Music, CDs &amp; Vinyl</option>
                    <option value="pets-intl-ship">Pet Supplies</option>
                    <option value="software-intl-ship">Software</option>
                    <option value="sporting-intl-ship">Sports &amp; Outdoors</option>
                    <option value="tools-intl-ship">Tools &amp; Home Improvement</option>
                    <option value="toys-and-games-intl-ship">Toys &amp; Games</option>
                    <option value="videogames-intl-ship">Video Games</option>
                    <?php
                    break;
                case "co.uk":
                    ?>
                    <option value="aps">All Departments</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Devices</option>
                    <option value="amazon-global-store">Amazon Global Store</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="warehouse-deals">Amazon Warehouse Deals</option>
                    <option value="mobile-apps">Apps &amp; Games</option>
                    <option value="baby">Baby</option>
                    <option value="beauty">Beauty</option>
                    <option value="stripbooks">Books</option>
                    <option value="automotive">Car &amp; Motorbike</option>
                    <option value="popular">CDs &amp; Vinyl</option>
                    <option value="classical">Classical Music</option>
                    <option value="clothing">Clothing</option>
                    <option value="computers">Computers &amp; Accessories</option>
                    <option value="digital-music">Digital Music</option>
                    <option value="diy">DIY &amp; Tools</option>
                    <option value="dvd">DVD &amp; Blu-ray</option>
                    <option value="electronics">Electronics &amp; Photo</option>
                    <option value="fashion">Fashion</option>
                    <option value="outdoor">Garden &amp; Outdoors</option>
                    <option value="gift-cards">Gift Cards</option>
                    <option value="grocery">Grocery</option>
                    <option value="handmade">Handmade</option>
                    <option value="drugstore">Health &amp; Personal Care</option>
                    <option value="local-services">Home &amp; Business Services</option>
                    <option value="kitchen">Home &amp; Kitchen</option>
                    <option value="industrial">Industrial &amp; Scientific</option>
                    <option value="jewelry">Jewellery</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="appliances">Large Appliances</option>
                    <option value="lighting">Lighting</option>
                    <option value="luggage">Luggage</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="mi">Musical Instruments &amp; DJ</option>
                    <option value="videogames">PC &amp; Video Games</option>
                    <option value="pets">Pet Supplies</option>
                    <option value="instant-video">Prime Video</option>
                    <option value="shoes">Shoes &amp; Bags</option>
                    <option value="software">Software</option>
                    <option value="sports">Sports &amp; Outdoors</option>
                    <option value="office-products">Stationery &amp; Office Supplies</option>
                    <option value="toys">Toys &amp; Games</option>
                    <option value="vhs">VHS</option>
                    <option value="watches">Watches</option>
                    <?php
                    break;
                case "es":
                    ?>
                    <option value="aps">Todos los departamentos</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="grocery">Alimentaci??n y bebidas</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="mobile-apps">Appstore para Android</option>
                    <option value="baby">Beb??</option>
                    <option value="beauty">Belleza</option>
                    <option value="diy">Bricolaje y herramientas</option>
                    <option value="gift-cards">Cheques regalo</option>
                    <option value="automotive">Coche y moto</option>
                    <option value="sporting">Deportes y aire libre</option>
                    <option value="amazon-devices">Dispositivos de Amazon</option>
                    <option value="electronics">Electr??nica</option>
                    <option value="luggage">Equipaje</option>
                    <option value="appliances">Grandes electrodom??sticos</option>
                    <option value="handmade">Handmade</option>
                    <option value="kitchen">Hogar y cocina</option>
                    <option value="lighting">Iluminaci??n</option>
                    <option value="industrial">Industria y ciencia</option>
                    <option value="computers">Inform??tica</option>
                    <option value="mi">Instrumentos musicales</option>
                    <option value="lawngarden">Jard??n</option>
                    <option value="jewelry">Joyer??a</option>
                    <option value="toys">Juguetes y juegos</option>
                    <option value="stripbooks">Libros</option>
                    <option value="english-books">Libros en idiomas extranjeros</option>
                    <option value="fashion">Moda</option>
                    <option value="digital-music">M??sica Digital</option>
                    <option value="popular">M??sica: CDs y vinilos</option>
                    <option value="office-products">Oficina y papeler??a</option>
                    <option value="dvd">Pel??culas y TV</option>
                    <option value="pets">Productos para mascotas</option>
                    <option value="warehouse-deals">Productos Reacondicionados</option>
                    <option value="watches">Relojes</option>
                    <option value="apparel">Ropa y accesorios</option>
                    <option value="hpc">Salud y cuidado personal</option>
                    <option value="software">Software</option>
                    <option value="digital-text">Tienda Kindle</option>
                    <option value="videogames">Videojuegos</option>
                    <option value="shoes">Zapatos y complementos</option>
                    <?php
                    break;
                case "com.mx":
                    ?>
                    <option selected="selected" value="aps">Todos los departamentos</option>
                    <option value="automotive">Auto</option>
                    <option value="baby">Beb??</option>
                    <option value="amazon-devices">Dispositivos de Amazon</option>
                    <option value="electronics">Electr??nicos</option>
                    <option value="dvd">Pel??culas y Series de TV</option>
                    <option value="digital-text">Tienda Kindle</option>
                    <option value="fashion">Ropa, Zapatos y Accesorios</option>
                    <option value="fashion-womens">&nbsp;&nbsp;&nbsp;Mujeres</option>
                    <option value="fashion-mens">&nbsp;&nbsp;&nbsp;Hombres</option>
                    <option value="fashion-girls">&nbsp;&nbsp;&nbsp;Ni??as</option>
                    <option value="fashion-boys">&nbsp;&nbsp;&nbsp;Ni??os</option>
                    <option value="fashion-baby">&nbsp;&nbsp;&nbsp;Beb??</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="grocery">Alimentos y Bebidas</option>
                    <option value="sporting">Deportes y Aire Libre</option>
                    <option value="hi">Herramientas y Mejoras del Hogar</option>
                    <option value="kitchen">Hogar y Cocina</option>
                    <option value="industrial">Industria y ciencia</option>
                    <option value="mi">Instrumentos musicales</option>
                    <option value="toys">Juegos y juguetes</option>
                    <option value="stripbooks">Libros</option>
                    <option value="pets">Mascotas</option>
                    <option value="popular">M??sica</option>
                    <option value="office-products">Oficina y Papeler??a</option>
                    <option value="handmade">Productos Handmade</option>
                    <option value="hpc">Salud, Belleza y Cuidado Personal</option>
                    <option value="software">Software</option>
                    <option value="videogames">Videojuegos</option>
                    <?php
                    break;
                case "co.jp":
                    ?>
                    <option value="aps">???????????????????????????</option>
                    <option value="amazon-devices">Amazon ????????????</option>
                    <option value="digital-text">Kindle?????????</option>
                    <option value="instant-video">Prime Video</option>
                    <option value="alexa-skills">Alexa?????????</option>
                    <option value="digital-music">??????????????????????????????</option>
                    <option value="mobile-apps">Android ?????????</option>
                    <option value="stripbooks">???</option>
                    <option value="english-books">??????</option>
                    <option value="popular">??????????????????</option>
                    <option value="classical">???????????????</option>
                    <option value="dvd">DVD</option>
                    <option value="videogames">TV?????????</option>
                    <option value="software">PC?????????</option>
                    <option value="computers">???????????????????????????</option>
                    <option value="electronics">??????&amp;?????????</option>
                    <option value="office-products">??????????????????????????????</option>
                    <option value="kitchen">?????????&amp;????????????</option>
                    <option value="pets">???????????????</option>
                    <option value="hpc">?????????????????????</option>
                    <option value="beauty">??????????????????</option>
                    <option value="luxury-beauty">???????????????????????????????????????</option>
                    <option value="food-beverage">????????????????????????</option>
                    <option value="baby">?????????&amp;???????????????</option>
                    <option value="fashion">??????????????????</option>
                    <option value="fashion-womens">&nbsp;&nbsp;&nbsp;???????????????</option>
                    <option value="fashion-mens">&nbsp;&nbsp;&nbsp;?????????</option>
                    <option value="fashion-baby-kids">&nbsp;&nbsp;&nbsp;?????????????????????</option>
                    <option value="apparel">??????????????????????????????</option>
                    <option value="shoes">????????????????????????</option>
                    <option value="watch">?????????</option>
                    <option value="jewelry">???????????????</option>
                    <option value="toys">????????????</option>
                    <option value="hobby">?????????</option>
                    <option value="mi">??????</option>
                    <option value="sporting">????????????&amp;???????????????</option>
                    <option value="automotive">???????????????</option>
                    <option value="diy">DIY????????????????????????</option>
                    <option value="appliances">????????????</option>
                    <option value="financial">????????????????????????</option>
                    <option value="gift-cards">????????????</option>
                    <option value="industrial">???????????????????????????</option>
                    <option value="pantry">Amazon???????????????</option>
                    <option value="warehouse-deals">Amazon??????????????????</option>
                    <?php
                    break;
                case "it":
                    ?>
                    <option value="aps">Tutte le categorie</option>
                    <option value="apparel">Abbigliamento</option>
                    <option value="alexa-skills">Alexa Skill</option>
                    <option value="grocery">Alimentari e cura della casa</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="warehouse-deals">Amazon Warehouse Deals</option>
                    <option value="mobile-apps">App e Giochi</option>
                    <option value="automotive">Auto e Moto</option>
                    <option value="beauty">Bellezza</option>
                    <option value="gift-cards">Buoni Regalo</option>
                    <option value="office-products">Cancelleria e prodotti per ufficio</option>
                    <option value="kitchen">Casa e cucina</option>
                    <option value="popular">CD e Vinili</option>
                    <option value="amazon-devices">Dispositivi Amazon</option>
                    <option value="electronics">Elettronica</option>
                    <option value="diy">Fai da te</option>
                    <option value="dvd">Film e TV</option>
                    <option value="garden">Giardino e giardinaggio</option>
                    <option value="toys">Giochi e giocattoli</option>
                    <option value="jewelry">Gioielli</option>
                    <option value="appliances">Grandi elettrodomestici</option>
                    <option value="handmade">Handmade</option>
                    <option value="lighting">Illuminazione</option>
                    <option value="industrial">Industria e Scienza</option>
                    <option value="computers">Informatica</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="stripbooks">Libri</option>
                    <option value="english-books">Libri in altre lingue</option>
                    <option value="fashion">Moda</option>
                    <option value="digital-music">Musica Digitale</option>
                    <option value="watches">Orologi</option>
                    <option value="baby">Prima infanzia</option>
                    <option value="pets">Prodotti per animali domestici</option>
                    <option value="hpc">Salute e cura della persona</option>
                    <option value="shoes">Scarpe e borse</option>
                    <option value="software">Software</option>
                    <option value="sporting">Sport e tempo libero</option>
                    <option value="mi">Strumenti musicali e DJ</option>
                    <option value="luggage">Valigeria</option>
                    <option value="videogames">Videogiochi</option>
                    <?php
                    break;
                case "in":
                    ?>
                    <option value="aps">All Categories</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Devices</option>
                    <option value="fashion">Amazon Fashion</option>
                    <option value="amazon-global-store">Amazon Global Store</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="appliances">Appliances</option>
                    <option value="mobile-apps">Apps &amp; Games</option>
                    <option value="baby">Baby</option>
                    <option value="beauty">Beauty</option>
                    <option value="stripbooks">Books</option>
                    <option value="automotive">Car &amp; Motorbike</option>
                    <option value="apparel">Clothing &amp; Accessories</option>
                    <option value="collectibles">Collectibles</option>
                    <option value="computers">Computers &amp; Accessories</option>
                    <option value="electronics">Electronics</option>
                    <option value="furniture">Furniture</option>
                    <option value="lawngarden">Garden &amp; Outdoors</option>
                    <option value="gift-cards">Gift Cards</option>
                    <option value="grocery">Grocery &amp; Gourmet Foods</option>
                    <option value="hpc">Health &amp; Personal Care</option>
                    <option value="kitchen">Home &amp; Kitchen</option>
                    <option value="industrial">Industrial &amp; Scientific</option>
                    <option value="jewelry">Jewellery</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="luggage">Luggage &amp; Bags</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="dvd">Movies &amp; TV Shows</option>
                    <option value="popular">Music</option>
                    <option value="mi">Musical Instruments</option>
                    <option value="office-products">Office Products</option>
                    <option value="pets">Pet Supplies</option>
                    <option value="shoes">Shoes &amp; Handbags</option>
                    <option value="software">Software</option>
                    <option value="sporting">Sports, Fitness &amp; Outdoors</option>
                    <option value="home-improvement">Tools &amp; Home Improvement</option>
                    <option value="toys">Toys &amp; Games</option>
                    <option value="videogames">Video Games</option>
                    <option value="watches">Watches</option>
                    <?php
                    break;
                case "de":
                    ?>
                    <option value="aps">Alle Kategorien</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Ger??te</option>
                    <option value="amazon-global-store">Amazon Global Store</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="warehouse-deals">Amazon Warehouse Deals</option>
                    <option value="mobile-apps">Apps &amp; Spiele</option>
                    <option value="automotive">Auto &amp; Motorrad</option>
                    <option value="baby">Baby</option>
                    <option value="diy">Baumarkt</option>
                    <option value="beauty">Beauty</option>
                    <option value="clothing">Bekleidung</option>
                    <option value="lighting">Beleuchtung</option>
                    <option value="stripbooks">B??cher</option>
                    <option value="english-books">B??cher (Fremdsprachig)</option>
                    <option value="office-products">B??robedarf &amp; Schreibwaren</option>
                    <option value="computers">Computer &amp; Zubeh??r</option>
                    <option value="drugstore">Drogerie &amp; K??rperpflege</option>
                    <option value="dvd">DVD &amp; Blu-ray</option>
                    <option value="appliances">Elektro-Gro??ger??te</option>
                    <option value="electronics">Elektronik &amp; Foto</option>
                    <option value="fashion">Fashion</option>
                    <option value="videogames">Games</option>
                    <option value="outdoor">Garten</option>
                    <option value="gift-cards">Geschenkgutscheine</option>
                    <option value="industrial">Gewerbe, Industrie &amp; Wissenschaft</option>
                    <option value="handmade">Handmade</option>
                    <option value="pets">Haustier</option>
                    <option value="photo">Kamera &amp; Foto</option>
                    <option value="digital-text">Kindle-Shop</option>
                    <option value="classical">Klassik</option>
                    <option value="luggage">Koffer, Rucks??cke &amp; Taschen</option>
                    <option value="kitchen">K??che, Haushalt &amp; Wohnen</option>
                    <option value="grocery">Lebensmittel &amp; Getr??nke</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="popular">Musik-CDs &amp; Vinyl</option>
                    <option value="digital-music">Musik-Downloads</option>
                    <option value="mi">Musikinstrumente &amp; DJ-Equipment</option>
                    <option value="instant-video">Prime Video</option>
                    <option value="jewelry">Schmuck</option>
                    <option value="shoes">Schuhe &amp; Handtaschen</option>
                    <option value="software">Software</option>
                    <option value="toys">Spielzeug</option>
                    <option value="sports">Sport &amp; Freizeit</option>
                    <option value="watches">Uhren</option>
                    <option value="magazines">Zeitschriften</option>
                    <?php
                    break;
                case "fr":
                    ?>
                    <option value="aps">Toutes nos cat??gories</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="warehouse-deals">Amazon Offres Reconditionn??es</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="pets">Animalerie</option>
                    <option value="amazon-devices">Appareils Amazon</option>
                    <option value="mobile-apps">Applis &amp; Jeux</option>
                    <option value="automotive">Auto et Moto</option>
                    <option value="luggage">Bagages</option>
                    <option value="beauty">Beaut?? et Parfum</option>
                    <option value="luxury-beauty">Beaut?? Prestige</option>
                    <option value="jewelry">Bijoux</option>
                    <option value="gift-cards">Boutique ch??ques-cadeaux</option>
                    <option value="digital-text">Boutique Kindle</option>
                    <option value="diy">Bricolage</option>
                    <option value="baby">B??b??s &amp; Pu??riculture</option>
                    <option value="shoes">Chaussures et Sacs</option>
                    <option value="kitchen">Cuisine &amp; Maison</option>
                    <option value="dvd">DVD &amp; Blu-ray</option>
                    <option value="grocery">Epicerie</option>
                    <option value="office-products">Fournitures de bureau</option>
                    <option value="appliances">Gros ??lectrom??nager</option>
                    <option value="handmade">Handmade</option>
                    <option value="electronics">High-Tech</option>
                    <option value="hpc">Hygi??ne et Sant??</option>
                    <option value="computers">Informatique</option>
                    <option value="mi">Instruments de musique &amp; Sono</option>
                    <option value="garden">Jardin</option>
                    <option value="toys">Jeux et Jouets</option>
                    <option value="videogames">Jeux vid??o</option>
                    <option value="english-books">Livres anglais et ??trangers</option>
                    <option value="stripbooks">Livres en fran??ais</option>
                    <option value="software">Logiciels</option>
                    <option value="lighting">Luminaires et Eclairage</option>
                    <option value="fashion">Mode</option>
                    <option value="watches">Montres</option>
                    <option value="popular">Musique : CD &amp; Vinyles</option>
                    <option value="classical">Musique classique</option>
                    <option value="industrial">Secteur industriel &amp; scientifique</option>
                    <option value="sports">Sports et Loisirs</option>
                    <option value="digital-music">T??l??chargement de musique</option>
                    <option value="clothing">V??tements et accessoires</option>
                    <?php
                    break;
                case "cn":
                    ?>
                    <option value="All">????????????</option>
                    <option value="Apparel">????????????</option>
                    <option value="Appliances">?????????</option>
                    <option value="Automotive">????????????</option>
                    <option value="Baby">????????????</option>
                    <option value="Beauty">????????????</option>
                    <option value="Books">??????</option>
                    <option value="Electronics">??????</option>
                    <option value="GiftCards">?????????</option>
                    <option value="Grocery">??????</option>
                    <option value="HealthPersonalCare">????????????</option>
                    <option value="Home">??????</option>
                    <option value="HomeImprovement">????????????</option>
                    <option value="Jewelry">????????????</option>
                    <option value="KindleStore">Kindle??????</option>
                    <option value="Kitchen">??????</option>
                    <option value="MobileApps">?????????????????????</option>
                    <option value="Music">??????</option>
                    <option value="MusicalInstruments">??????</option>
                    <option value="OfficeProducts">????????????</option>
                    <option value="PCHardware">??????/IT</option>
                    <option value="PetSupplies">????????????</option>
                    <option value="Photo">??????/??????</option>
                    <option value="Shoes">??????</option>
                    <option value="Software">??????</option>
                    <option value="SportingGoods">??????????????????</option>
                    <option value="Toys">??????</option>
                    <option value="Video">??????</option>
                    <option value="VideoGames">??????/??????</option>
                    <option value="Watches">??????</option>
                    <?php
                    break;
                case "ca":
                    ?>
                    <option value="aps">All Departments</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Devices</option>
                    <option value="warehouse-deals">Amazon Warehouse Deals</option>
                    <option value="mobile-apps">Apps &amp; Games</option>
                    <option value="automotive">Automotive</option>
                    <option value="baby">Baby</option>
                    <option value="beauty">Beauty</option>
                    <option value="stripbooks">Books</option>
                    <option value="apparel">Clothing &amp; Accessories</option>
                    <option value="electronics">Electronics</option>
                    <option value="gift-cards">Gift Cards</option>
                    <option value="grocery">Grocery</option>
                    <option value="handmade">Handmade</option>
                    <option value="hpc">Health &amp; Personal Care</option>
                    <option value="kitchen">Home &amp; Kitchen</option>
                    <option value="industrial">Industrial &amp; Scientific</option>
                    <option value="jewelry">Jewelry</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="french-books">Livres en fran??ais</option>
                    <option value="luggage">Luggage &amp; Bags</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="dvd">Movies &amp; TV</option>
                    <option value="popular">Music</option>
                    <option value="mi">Musical Instruments, Stage &amp; Studio</option>
                    <option value="office-products">Office Products</option>
                    <option value="lawngarden">Patio, Lawn &amp; Garden</option>
                    <option value="pets">Pet Supplies</option>
                    <option value="shoes">Shoes &amp; Handbags</option>
                    <option value="software">Software</option>
                    <option value="sporting">Sports &amp; Outdoors</option>
                    <option value="tools">Tools &amp; Home Improvement</option>
                    <option value="toys">Toys &amp; Games</option>
                    <option value="videogames">Video Games</option>
                    <option value="watches">Watches</option>
                    <?php
                    break;
                case "com.br":
                    ?>
                    <option value="aps">Todos os departamentos</option>
                    <option value="mobile-apps">Apps e Jogos</option>
                    <option value="baby">Beb??s</option>
                    <option value="beauty">Beleza</option>
                    <option value="fashion-luggage">Bolsas, Malas e Mochilas</option>
                    <option value="toys">Brinquedos e Jogos</option>
                    <option value="home">Casa</option>
                    <option value="computers">Computadores e Inform??tica</option>
                    <option value="kitchen">Cozinha</option>
                    <option value="amazon-devices">Dispositivos Amazon</option>
                    <option value="appliances">Eletrodom??sticos</option>
                    <option value="electronics">Eletr??nicos</option>
                    <option value="sporting">Esportes e Aventura</option>
                    <option value="hi">Ferramentas e Materiais de Constru????o</option>
                    <option value="videogames">Games</option>
                    <option value="stripbooks">Livros</option>
                    <option value="digital-text">Loja Kindle</option>
                    <option value="office-products">Material para Escrit??rio e Papelaria</option>
                    <option value="furniture">M??veis e Decora????o</option>
                    <option value="fashion">Roupas, Cal??ados e Joias</option>
                    <option value="fashion-womens">&nbsp;&nbsp;&nbsp;Feminino</option>
                    <option value="fashion-mens">&nbsp;&nbsp;&nbsp;Masculino</option>
                    <option value="fashion-girls">&nbsp;&nbsp;&nbsp;Meninas</option>
                    <option value="fashion-boys">&nbsp;&nbsp;&nbsp;Meninos</option>
                    <option value="fashion-baby">&nbsp;&nbsp;&nbsp;Beb??s</option>
                    <option value="hpc">Sa??de e Cuidados Pessoais</option>
                    <?php
                    break;
                case "com.au":
                    ?>
                    <option value="aps">All Departments</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Devices</option>
                    <option value="amazon-global-store">Amazon Global Store</option>
                    <option value="mobile-apps">Apps &amp; Games</option>
                    <option value="audible">Audible Audiobooks</option>
                    <option value="automotive">Automotive</option>
                    <option value="baby">Baby</option>
                    <option value="beauty">Beauty</option>
                    <option value="stripbooks">Books</option>
                    <option value="popular">CDs &amp; Vinyl</option>
                    <option value="fashion">Clothing, Shoes &amp; Accessories</option>
                    <option value="fashion-womens">&nbsp;&nbsp;&nbsp;Women</option>
                    <option value="fashion-mens">&nbsp;&nbsp;&nbsp;Men</option>
                    <option value="fashion-girls">&nbsp;&nbsp;&nbsp;Girls</option>
                    <option value="fashion-boys">&nbsp;&nbsp;&nbsp;Boys</option>
                    <option value="fashion-baby">&nbsp;&nbsp;&nbsp;Baby</option>
                    <option value="computers">Computers</option>
                    <option value="electronics">Electronics</option>
                    <option value="gift-cards">Gift Cards</option>
                    <option value="hpc">Health, Household &amp; Personal Care</option>
                    <option value="home">Home</option>
                    <option value="home-improvement">Home Improvement</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="fashion-luggage">Luggage &amp; Travel Gear</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="movies-tv">Movies &amp; TV</option>
                    <option value="grocery">Pantry Food &amp; Drinks</option>
                    <option value="pets">Pet Supplies</option>
                    <option value="software">Software</option>
                    <option value="sporting">Sports, Fitness &amp; Outdoors</option>
                    <option value="office-products">Stationery &amp; Office Products</option>
                    <option value="toys">Toys &amp; Games</option>
                    <option value="videogames">Video Games</option>
                    <?php
                    break;
                default:
                    ?>
                    <option value="aps">All Departments</option>
                    <option value="alexa-skills">Alexa Skills</option>
                    <option value="amazon-devices">Amazon Devices</option>
                    <option value="amazon-global-store">Amazon Global Store</option>
                    <option value="pantry">Amazon Pantry</option>
                    <option value="warehouse-deals">Amazon Warehouse Deals</option>
                    <option value="mobile-apps">Apps &amp; Games</option>
                    <option value="baby">Baby</option>
                    <option value="beauty">Beauty</option>
                    <option value="stripbooks">Books</option>
                    <option value="automotive">Car &amp; Motorbike</option>
                    <option value="popular">CDs &amp; Vinyl</option>
                    <option value="classical">Classical Music</option>
                    <option value="clothing">Clothing</option>
                    <option value="computers">Computers &amp; Accessories</option>
                    <option value="digital-music">Digital Music</option>
                    <option value="diy">DIY &amp; Tools</option>
                    <option value="dvd">DVD &amp; Blu-ray</option>
                    <option value="electronics">Electronics &amp; Photo</option>
                    <option value="fashion">Fashion</option>
                    <option value="outdoor">Garden &amp; Outdoors</option>
                    <option value="gift-cards">Gift Cards</option>
                    <option value="grocery">Grocery</option>
                    <option value="handmade">Handmade</option>
                    <option value="drugstore">Health &amp; Personal Care</option>
                    <option value="local-services">Home &amp; Business Services</option>
                    <option value="kitchen">Home &amp; Kitchen</option>
                    <option value="industrial">Industrial &amp; Scientific</option>
                    <option value="jewelry">Jewellery</option>
                    <option value="digital-text">Kindle Store</option>
                    <option value="appliances">Large Appliances</option>
                    <option value="lighting">Lighting</option>
                    <option value="luggage">Luggage</option>
                    <option value="luxury-beauty">Luxury Beauty</option>
                    <option value="mi">Musical Instruments &amp; DJ</option>
                    <option value="videogames">PC &amp; Video Games</option>
                    <option value="pets">Pet Supplies</option>
                    <option value="instant-video">Prime Video</option>
                    <option value="shoes">Shoes &amp; Bags</option>
                    <option value="software">Software</option>
                    <option value="sports">Sports &amp; Outdoors</option>
                    <option value="office-products">Stationery &amp; Office Supplies</option>
                    <option value="toys">Toys &amp; Games</option>
                    <option value="vhs">VHS</option>
                    <option value="watches">Watches</option>
                <?php
            }
        }

        public static function no_pa_search($search_url, $search_from)
        {
            $products = array();
            // Create a DOM object
            $html = new simple_html_dom();
            //$html->load_file($search_url);
            $html->load(urldecode(base64_decode($search_url)));//Search Result
            //return $html->plaintext;
            if (gettype($html->find('span[data-component-type=s-result-info-bar]', 0)) != "NULL") {
                $result_bar = $html->find('span[data-component-type=s-result-info-bar]', 0)->plaintext;
                $results = explode(" ", $result_bar);
                $pages = explode("-", $results[0]);
                $start_page = intval($pages[0]);
                $end_page = intval($pages[1]);
            } else {
                $start_page = 1;
                $end_page = 10;
            }
            if (gettype($html->find('div.s-result-item', 0)) != "NULL") {
                $products_dom = $html->find('div.s-result-item');
                foreach ($products_dom as $product_dom) {
                    if (gettype($product_dom->find('a span', 0)) != "NULL") {
                        $title = $product_dom->find('a span', 0)->plaintext;
                        $title_url = $product_dom->find('a', 0)->href;
                        $asin = ACL_WPAS_iKits::get_asin_by_url($title_url);
                    }
                    //Get thumb
                    if (gettype($product_dom->find('img', 0)) != "NULL") {
                        $image_url = $product_dom->find('img', 0)->src;
                    }
                    if (gettype($product_dom->find('.a-price span', 0)) != "NULL") {
                        $price_label = $product_dom->find('.a-price span', 0)->plaintext;
                    }
                    if (gettype($product_dom->find('.a-icon-alt', 0)) != "NULL") {
                        $review_rating = $product_dom->find('.a-icon-alt', 0)->plaintext;
                        $ratings = explode(" ", $review_rating);
                    }
                    $product['ASIN'] = isset($asin) ? $asin : '';
                    $product['Title'] = isset($title) ? str_replace(array('\'', '"', ',', ';', '<', '>'), '', $title) : '';
                    $product['LowestNewPriceFormattedPrice'] = isset($price_label) ? $price_label : '';
                    $product['MediumImage'] = isset($image_url) ? $image_url : ACL_WPAS_IMG_PATH . 'dummy-product.jpg';
                    //$product['DetailPageURL'] =$title_url;
                    $product['DetailPageURL'] = isset($title_url) ? 'https://www.amazon.' . get_option('acl_wpas_amazon_country') . '/dp/' . $asin : '';
                    $product['rating'] = isset($ratings) ? $ratings[0] : '';
                    if ($product['ASIN'] != "") {
                        $products[] = $product;
                    }

                }
            } else {
                $start_page = 0;
                $end_page = 0;
                $products = 0;
            }
            return array('start' => $start_page, 'end' => $end_page, 'products' => $products);
        }

        private static function get_asin_by_url($url)
        {
            $url_parts = explode('?', $url);
            if (isset($url_parts[0]) && $url_parts[0] != "") {
                $product_url = $url_parts[0];
            } else {
                $product_url = $url;
            }
            $result = "";
            $pattern = "([A-Z0-9]{10})(?:[/?]|$)";
            $pattern = escapeshellarg($pattern);

            preg_match($pattern, $product_url, $matches);

            if ($matches && isset($matches[1])) {
                $result = $matches[1];
            }

            return $result;
        }

        public static function search_item_display($product)
        {
            ob_start();

            ?>
            <div class="acl-col-md-2-ex">
                <div class="acl-product-box" id="wpas-import-<?php echo $product['ASIN']; ?>">
                    <!--acl-product-box-label-->
                    <div class="acl-product-box-thumb">
                        <img src="<?php echo $product['MediumImage']; ?>" alt="<?php echo $product['Title']; ?>">
                    </div>
                    <!--acl-product-box-thumb-->
                    <div class="acl-product-box-info">
                        <h3 title="<?php echo $product['Title']; ?>"> <?php echo $product['Title']; ?></h3>
                        <h4><?php echo $product['LowestNewPriceFormattedPrice']; ?></h4>
                    </div>
                    <!--acl-product-box-info-->
                    <div class="acl-product-box-action">
                        <button type="button" data-asin="<?php echo $product['ASIN']; ?>"
                                data-title="<?php echo $product['Title']; ?>"
                                data-price="<?php echo $product['LowestNewPriceFormattedPrice']; ?>"
                                data-url="<?php echo $product['DetailPageURL']; ?>"
                                data-thumb="<?php echo $product['MediumImage']; ?>"> <?php _e('Add to Import Queue', 'wp-amazon-shop'); ?></button>
                    </div>
                    <!--acl-product-box-action-->
                </div>
                <!-- acl-product-box-->
            </div>
            <?php
            $content = ob_get_clean();
            return $content;
        }

        /**
         * Product details
         */
        //title
        public static function get_product_title($html)
        {
            if (gettype($html->find('#productTitle', 0)) != "NULL") {
                $title = $html->find('#productTitle', 0)->plaintext;
            } else if (gettype($html->find('#mas-title', 0)) != "NULL") {
                $title = $html->find('#mas-title', 0)->plaintext;
            } else if (gettype($html->find('#ebooksProductTitle', 0)) != "NULL") {
                $title = $html->find('#ebooksProductTitle', 0)->plaintext;
            } else {
                $title = "";
            }
            return trim($title);
        }

        //brand
        public static function get_product_brand($html)
        {
            if (gettype($html->find('#bylineInfo', 0)) != "NULL") {
                $brand = $html->find('#bylineInfo', 0)->plaintext;
            } else {
                $brand = "";
            }
            return $brand;
        }

        //Author
        public static function get_product_author($html)
        {
            if (gettype($html->find('#bylineInfo', 0)) != "NULL") {
                $authors = $html->find('#bylineInfo', 0)->plaintext;
            } else {
                $authors = "";
            }
            return $authors;
        }
        //Description
        public static function get_product_description($html)
        {
            if (gettype($html->find('#productDescription', 0)) != "NULL") {
                $description = $html->find('#productDescription', 0)->innertext;
            } else if (gettype($html->find('#mas-product-description', 0)) != "NULL") {
                $description = $html->find('#mas-product-description', 0)->innertext;
            } else if (gettype($html->find('#featurebullets_feature_div ul li', 0)) != "NULL") {
                $description = $html->find('#featurebullets_feature_div ul', 0)->innertext;
            } else if (gettype($html->find('#mas-product-feature ul li', 0)) != "NULL") {
                $description = $html->find('#mas-product-feature ul', 0)->innertext;
            } else {
                $description = "";
            }
            return base64_encode(trim(preg_replace('/<\/?a[^>]*>/', '', $description)));
        }

        //Categories
        public static function get_product_categories($html)
        {
            $categories = array();
            if (gettype($html->find('#wayfinding-breadcrumbs_feature_div ul li', 0)) != "NULL") {
                $categories_dom = $html->find('#wayfinding-breadcrumbs_feature_div ul li');
                if (!empty($categories_dom)) {
                    foreach ($categories_dom as $category_dom) {
                        $categories[] = $category_dom->plaintext;
                    }
                }
            } else if (gettype($html->find('#wayfinding-breadcrumbs_container ul li', 0)) != "NULL") {
                $categories_dom = $html->find('#wayfinding-breadcrumbs_container ul li');
                if (!empty($categories_dom)) {
                    foreach ($categories_dom as $category_dom) {
                        $categories[] = $category_dom->plaintext;
                    }
                }
            } else {
                $categories = array();
            }
            return $categories;
        }

        //Gallery Images
        public static function get_product_image_gallery($html)
        {
            //Image processing Start.
            $formatted_images = array();
            $raw_images_gallery = "";
            foreach ($html->find('script') as $script) {
                if (strpos($script->innertext, 'ImageBlockATF') && strpos($script->innertext, 'initial')) {
                    $raw_images_gallery = $script->innertext;
                    break;
                } else if (strpos($script->innertext, 'ImageBlockATF')) {
                    $raw_images_gallery = $script->innertext;
                    break;
                }
            }
            if ($raw_images_gallery != "") {
                preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $raw_images_gallery, $match);
                //  Formatting the images as api
                $images = array();
                $counter=0;
                if (is_array($match[0]) && !empty($match[0])) {
                    foreach ($match[0] as $img) {
                        $img_url = ACL_WPAS_iKits::image_url_to_modify_size($img, "");
                        if (!in_array($img_url, $images) && $counter<2) {
                            $images[] = $img_url;
                            $formatted_image['LargeImage']['URL'] = ACL_WPAS_iKits::image_url_to_modify_size($img, '._UX800.jpg');
                            $formatted_images[] = $formatted_image;
                            $counter++;
                        }
                    }
                }
                $filter_gallery = array_filter($formatted_images, function ($input) {
                    return $input & 1;
                }, ARRAY_FILTER_USE_KEY);
                return $filter_gallery;
            } else {
                return array();
            }
        }
        public static function image_url_to_modify_size($img,$size){
            $slash_img=explode("/",$img);
            $slash_img_end=end($slash_img);
            $img_end_parts=explode(".",$slash_img_end);
            $unique_img=$img_end_parts[0];
            $img_http_parts=explode($unique_img,$img);
            if($size!=""){
                return $img_http_parts[0].$unique_img.$size;
            }else{
                if (strpos($img, 'dummy-product.jpg') !== false){
                    return $img;
                }else{
                    return $img_http_parts[0].$unique_img.'.jpg';
                }
            }
        }

        public static function insert_single_image($image_url, $image_name, $post_id){
            // Add Featured Image to Post
            try {
                $upload_dir = wp_upload_dir(); // Set upload folder
                // Get image data
                $response = wp_remote_get( $image_url );
                if( !is_wp_error( $response ) ){
                    $image_data = $response['body'];
                    //$image_data = file_get_contents($image_url);
                    $unique_file_name = wp_unique_filename($upload_dir['path'], $image_name); // Generate unique name
                    $filename = basename($unique_file_name); // Create image file name

                    // Check folder permission and define file location
                    if (wp_mkdir_p($upload_dir['path'])) {
                        $file = $upload_dir['path'] . '/' . $filename;
                    } else {
                        $file = $upload_dir['basedir'] . '/' . $filename;
                    }

                    // Create the image  file on the server
                    file_put_contents($file, $image_data);

                    // Check image file type
                    $wp_filetype = wp_check_filetype($filename, null);

                    // Set attachment data
                    $attachment = array(
                        'post_mime_type' => $wp_filetype['type'],
                        'post_title' => sanitize_file_name($filename),
                        'post_content' => '',
                        'post_status' => 'inherit'
                    );

                    // Create the attachment
                    $attach_id = wp_insert_attachment($attachment, $file, $post_id);

                    // Include image.php
                    require_once(ABSPATH . 'wp-admin/includes/image.php');

                    // Define attachment metadata
                    $attach_data = wp_generate_attachment_metadata($attach_id, $file);

                    // Assign metadata to attachment
                    wp_update_attachment_metadata($attach_id, $attach_data);
                    return $attach_id;
                }else{
                    return "";
                }
            }catch (\Exception $e) {
                return "";
            }
        }
        public static function import_image_gallery($endcode_gallery, $post_title, $post_id){
            $raw_gallery = unserialize(base64_decode($endcode_gallery));
            $gallery_images = $raw_gallery['large'];

            $gallery_id = array();
            if (count($gallery_images)>0 ) {
                $counter = 0;
                foreach ($gallery_images as $image_url) {
                    if ($counter <= 1) {
                        //$image_name = 'test20190205_' . $counter . '.jpg';
                        if (strlen($post_title) > 15) {
                            $image_name = substr($post_title, 0, 15) . '_' . $counter . '.jpg';
                        } else {
                            $image_name = $post_title . '_' . $counter . '.jpg';
                        }
                        if(ACL_WPAS_iKits::insert_single_image($image_url, $image_name, $post_id)!=""){
                            $gallery_id[] = ACL_WPAS_iKits::insert_single_image($image_url, $image_name, $post_id);
                        }
                    }
                    $counter++;
                }
                return implode(',', $gallery_id);
            } else {
                return "";
            }
        }
        public static function build_image_gallery($images){
            $image_gallery_large = array();
            foreach ($images as $image) {
                if($image['LargeImage']['URL']!=NULL){
                    $image_gallery_large[] = $image['LargeImage']['URL'];
                }
            }
            return array('large' => $image_gallery_large);
        }

        
    }//End of Class
}