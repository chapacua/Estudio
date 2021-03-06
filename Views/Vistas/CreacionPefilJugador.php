<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="../../Views/Styles/Bootstrap/css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="../../Views/Styles/Bootstrap/js/bootstrap.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="../../../Imagenes/ico.png"/>
  <link rel="stylesheet" type="text/css" href="../../../Views/Styles/Bootstrap/calendario/tcal.css" />
  <script type="text/javascript" src="../../Views/Styles/Bootstrap/calendario/tcal.js"></script>
  <title>Soccer File</title>
</head>
<body>
<br>
<div class="well">
  <div class="container">
        <div class="panel panel-primary">

            <div class="panel-heading">!Ya haces parte de Soccer File ®!</FONT>

                <div class="progress">
                    <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:10%"> 10%
                    </div>
                </div>

                <label>Estado creacion de pefil basico: En proceso</label>
                
                </div>

            <div class="jumbotron">
                    <h3>Bienvenido a la creacion de perfil para jugadores.</h3>
                    <p>A continuacion te pediremos que ingreses unos datos personales y profesionales, para así formar un perfil completo y tengas mas probabilidades de cumplir tu sueño</p>
            </div>
            
    <div class="panel-body">

    <form role="form" name="f1"  method="POST" action="CreacionPefilJugador2.php" class="form">
                        <div class="form-group">
                                <label for="Name">Nombre(s)</label>
                                <input type="text" name="Name" id="Name" class="form-control"  placeholder="Tu nombre" required="required">
                        </div>
                         <div class="form-group">
                                <label for="Lastname">Apellido(s)</label>
                                <input type="text" name="Lastname" id="Lastname"class="form-control" placeholder="Tu apellido" required="required">
                        </div>
                        <div class="form-group">
                                <label for="Country">Pais de nacimiento</label>
                                <select name="Country" id="Country" class="form-control" onchange="cambia_Country()"  required="required">
                                    <option value="0" selected="Selected">Seleccione...
                                    </option><option value="1">Afganistán
                                    </option><option value="2">Albania
                                    </option><option value="3">Alemania
                                    </option><option value="4">American Samoa
                                    </option><option value="5">Andorra
                                    </option><option value="6">Angola
                                    </option><option value="7">Anguila
                                    </option><option value="8">Antigua and Barbuda
                                    </option><option value="9">Antillas Holandesas
                                    </option><option value="10">Antártida
                                    </option><option value="11">Arabia Saudita
                                    </option><option value="12">Argelia
                                    </option><option value="13">Argentina
                                    </option><option value="14">Armenia
                                    </option><option value="15">Aruba
                                    </option><option value="17">Australia
                                    </option><option value="18">Austria
                                    </option><option value="19">Azerbaijan
                                    </option><option value="20">Bahamas
                                    </option><option value="21">Bahrein
                                    </option><option value="22">Bangladesh
                                    </option><option value="23">Barbados
                                    </option><option value="24">Belice
                                    </option><option value="25">Benin
                                    </option><option value="26">Bermuda
                                    </option><option value="27">Bielorrusia
                                    </option><option value="28">Bolivia
                                    </option><option value="29">Bosnia y Herzegovina
                                    </option><option value="30">Botsuana
                                    </option><option value="31">Bouvet Island
                                    </option><option value="32">Brasil
                                    </option><option value="33">British Indian Ocean Territory
                                    </option><option value="34">Brunei Darussalam
                                    </option><option value="35">Bulgaria
                                    </option><option value="36">Burkina Faso
                                    </option><option value="37">Burundi
                                    </option><option value="38">Bután
                                    </option><option value="39">Bélgica
                                    </option><option value="40">Cabo Verda
                                    </option><option value="41">Camboya
                                    </option><option value="42">Camerún
                                    </option><option value="43">Canadá
                                    </option><option value="45">Chad
                                    </option><option value="46">Chile
                                    </option><option value="47">China
                                    </option><option value="48">Chipre
                                    </option><option value="49">Colombia
                                    </option><option value="50">Comores
                                    </option><option value="51">Congo
                                    </option><option value="52">Corea del Norte
                                    </option><option value="53">Corea del Sur
                                    </option><option value="54">Costa Rica
                                    </option><option value="55">Cote D Ivoire
                                    </option><option value="56">Croacia
                                    </option><option value="57">Cuba
                                    </option><option value="58">Dinamarca
                                    </option><option value="59">Djibouti
                                    </option><option value="60">Dominica
                                    </option><option value="61">East Timor
                                    </option><option value="62">Ecuador
                                    </option><option value="63">Egipto
                                    </option><option value="64">El Salvador
                                    </option><option value="65">El Vaticano
                                    </option><option value="66">Emiratos Arabes Unidos
                                    </option><option value="67">Eritrea
                                    </option><option value="68">Eslovaquia
                                    </option><option value="69">Eslovenia
                                    </option><option value="70">España
                                    </option><option value="71">Estados Unidos
                                    </option><option value="72">Estonia
                                    </option><option value="73">Etiopía
                                    </option><option value="74">Fiji
                                    </option><option value="75">Filipinas
                                    </option><option value="76">Finlandia
                                    </option><option value="77">Francia
                                    </option><option value="78">French Guiana
                                    </option><option value="79">French Polynesia
                                    </option><option value="80">French Southern Territories
                                    </option><option value="81">Gabón
                                    </option><option value="82">Gambia
                                    </option><option value="83">Georgia
                                    </option><option value="84">Ghana
                                    </option><option value="85">Gibraltar
                                    </option><option value="86">Granada
                                    </option><option value="87">Grecia
                                    </option><option value="88">Groenlandia
                                    </option><option value="89">Guadalupe
                                    </option><option value="90">Guam
                                    </option><option value="91">Guatemala
                                    </option><option value="92">Guinea
                                    </option><option value="93">Guinea Ecuatorial
                                    </option><option value="94">Guinea-Bissau
                                    </option><option value="95">Guyana
                                    </option><option value="96">Haití
                                    </option><option value="97">Heard Island and McDonald Isla
                                    </option><option value="98">Holanda
                                    </option><option value="99">Honduras
                                    </option><option value="100">Hong Kong
                                    </option><option value="101">Hungría
                                    </option><option value="102">India
                                    </option><option value="103">Indonesia
                                    </option><option value="104">Iraq
                                    </option><option value="105">Irlanda
                                    </option><option value="106">Isalas Cocos
                                    </option><option value="107">Isla Christmas
                                    </option><option value="108">Islandia
                                    </option><option value="109">Islas Caimán
                                    </option><option value="110">Islas Cook
                                    </option><option value="111">Islas Feroe
                                    </option><option value="112">Islas Malvinas
                                    </option><option value="113">Islas Marshall
                                    </option><option value="114">Islas Mauricio
                                    </option><option value="115">Islas Salomón
                                    </option><option value="116">Islas Sandwhich
                                    </option><option value="117">Islas Turks y Caicos
                                    </option><option value="118">Islas Wallis y Futuna
                                    </option><option value="119">Israel
                                    </option><option value="120">Italia
                                    </option><option value="121">Jamaica
                                    </option><option value="122">Japón
                                    </option><option value="123">Jordania
                                    </option><option value="124">Kazakhstán
                                    </option><option value="125">Kenia
                                    </option><option value="126">Kiribati
                                    </option><option value="127">Kuwait
                                    </option><option value="128">Kyrgyzstán
                                    </option><option value="129">Laos
                                    </option><option value="130">Latvia
                                    </option><option value="131">Lesoto
                                    </option><option value="132">Liberia
                                    </option><option value="133">Libia
                                    </option><option value="134">Liechtenstein
                                    </option><option value="135">Lituania
                                    </option><option value="136">Luxemburgo
                                    </option><option value="137">Líbano
                                    </option><option value="138">Macao
                                    </option><option value="139">Macedonia
                                    </option><option value="140">Madagascar
                                    </option><option value="141">Malasia
                                    </option><option value="142">Malaui
                                    </option><option value="143">Maldivas
                                    </option><option value="144">Malta
                                    </option><option value="145">Malí
                                    </option><option value="146">Marruecos
                                    </option><option value="147">Martinique
                                    </option><option value="148">Mauritania
                                    </option><option value="149">Mayotte
                                    </option><option value="150">Micronesia
                                    </option><option value="151">Moldavia
                                    </option><option value="152">Mongolia
                                    </option><option value="153">Montserrat
                                    </option><option value="154">Mozambique
                                    </option><option value="155">Myanmar
                                    </option><option value="156">México
                                    </option><option value="157">Mónaco
                                    </option><option value="158">Namibia
                                    </option><option value="159">Nauru
                                    </option><option value="160">Nepal
                                    </option><option value="161">Nicaragua
                                    </option><option value="162">Nigeria
                                    </option><option value="163">Niue
                                    </option><option value="164">Norfolk Island
                                    </option><option value="165">Northern Mariana Islands
                                    </option><option value="166">Noruega
                                    </option><option value="167">Nueva Caledonia
                                    </option><option value="168">Nueva Zelanda
                                    </option><option value="169">Níger
                                    </option><option value="170">Omán
                                    </option><option value="171">Pakistán
                                    </option><option value="172">Palau
                                    </option><option value="173">Palestinian Territory
                                    </option><option value="174">Panamá
                                    </option><option value="175">Papúa Nueva Guinea
                                    </option><option value="176">Paraguay
                                    </option><option value="177">Perú
                                    </option><option value="178">Pitcairn
                                    </option><option value="179">Polonia
                                    </option><option value="180">Portugal
                                    </option><option value="181">Puerto Rico
                                    </option><option value="182">Qatar
                                    </option><option value="183">Reino Unido
                                    </option><option value="184">República Centroafricana
                                    </option><option value="185">República Checa
                                    </option><option value="186">República Democrática del Cong
                                    </option><option value="187">República Dominicana
                                    </option><option value="188">República Islámica de Irán
                                    </option><option value="189">Ruanda
                                    </option><option value="190">Rumania
                                    </option><option value="191">Rusian
                                    </option><option value="192">Saint Kitts and Nevis
                                    </option><option value="193">Saint Pierre y Miquelon
                                    </option><option value="194">Samoa
                                    </option><option value="195">San Marino
                                    </option><option value="196">San Vicente y Las Granadinas
                                    </option><option value="197">Santa Elena
                                    </option><option value="198">Santa Lucía
                                    </option><option value="199">Sao Tome and Principe
                                    </option><option value="200">Senegal
                                    </option><option value="201">Serbia y Montenegro
                                    </option><option value="202">Seychelles
                                    </option><option value="203">Sierra Leona
                                    </option><option value="204">Singapur
                                    </option><option value="205">Siria
                                    </option><option value="206">Somalía
                                    </option><option value="207">Sri Lanka
                                    </option><option value="208">Suazilandia
                                    </option><option value="209">Sudáfrica
                                    </option><option value="210">Sudán
                                    </option><option value="211">Suecia
                                    </option><option value="212">Suiza
                                    </option><option value="213">Surinam
                                    </option><option value="214">Svalbard and Jan Mayen
                                    </option><option value="215">Tailandia
                                    </option><option value="216">Taiwan
                                    </option><option value="217">Tajikistán
                                    </option><option value="218">Tanzania
                                    </option><option value="219">Togo
                                    </option><option value="220">Tonga
                                    </option><option value="221">Toquelau
                                    </option><option value="222">Trinidad y Tobago
                                    </option><option value="223">Turkmenistán
                                    </option><option value="224">Turquía
                                    </option><option value="225">Tuvalu
                                    </option><option value="226">Túnez
                                    </option><option value="227">Ucrania
                                    </option><option value="228">Uganda
                                    </option><option value="229">United States Minor Outlying I
                                    </option><option value="230">Uruguay
                                    </option><option value="231">Uzbekistan
                                    </option><option value="232">Vanuatu
                                    </option><option value="233">Venezuela
                                    </option><option value="234">Vietnam
                                    </option><option value="235">Virgin Islands British
                                    </option><option value="236">Virgin Islands U.S.
                                    </option><option value="237">Western Sahara
                                    </option><option value="238">Yemen
                                    </option><option value="239">Zaire
                                    </option><option value="240">Zambia
                                    </option><option value="241">Zimbabue
                                    </option>
                                </select>
                                
                        <div class="form-group">
                                <label for="State">Estado de nacimiento</label>
                                    <select name="State" id="State" class="form-control" required="required">
                                        <option value="">Seleccione un pais primero</option>
                                    </select>
                        </div>
                        <div class="form-group">
                                <label for="City">Ciudad de nacimiento</label>
                                <input type="text" name="City"  id="City" class="form-control" placeholder="Ciudad donde naciste" required="required">
                        </div>
                        <div class="form-group">
                                <label for="ResidenceCity">Ciudad de residencia</label>
                                <input type="text" name="ResidenceCity" id="ResidenceCity" class="form-control" placeholder="Ciudad donde vives actualmente" required="required">
                        </div>
                        <div class="form-group">
                                <label for="BornDate">Fecha Nacimiento:</label>
                                <input  type="text" name="BornDate" id="BornDate" class="tcal tcalInput form-control" size="20" required="required">
                                <br>
                        </div>
                        <div class="form-group">  
                            <br>
                            <br>
                                <button type="submit" class="btn btn-block btn-soccer">Continuar</button>
                            </div>
                        </div>

    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
//defino una serie de varibles Array para cada ciudad
var continente1 = new Array('-', "Badakhshan", "Badghis", "Baghlan", "Balkh", "Bamian", "Farah", "Faryab", "Ghazni", "Ghowr", "Helmand", "Herat", "Jowzjan", "Kabol", "Kandahar", "Kapisa", "Khowst", "Konar", "Konar", "Kondoz", "Laghman", "Laghman", "Lowgar", "Nangarhar", "Nimruz", "Nurestan", "Oruzgan", "Paktia", "Paktia", "Paktika", "Parvan", "Samangan", "Sar-e Pol", "Takhar", "Vardak", "Zabol");
var continente2 = new Array('-', "Berat", "Diber", "Durres", "Elbasan", "Fier", "Gjirokaster", "Korce", "Kukes", "Lezhe", "Shkoder", "Tirane", "Vlore");
var continente3 = new Array('-', "Baden-Wberg Bayern", "Berlin", "Brandenburg", "Bremen", "Hamburg", "Hessen", "Mecklenburg-Vorpommern", "Niedersachsen", "Nordrhein-Westfalen", "Rheinland-Pfalz", "Saarland", "Sachsen", "Sachsen-Anhalt", "Schleswig-Holstein", "Thuringen");
var continente4 = new Array('-', "American Samoa (General)");
var continente5 = new Array('-', "Andorra la Vella", "Canillo", "Encamp", "Escaldes-Engordany", "La Massana", "Ordino", "Sant Julia de Loria", "Barbuda", "Saint George", "Saint John", "Saint Mary", "Saint Paul", "Saint Peter", "Saint Philip");
var continente6 = new Array('-', "Bengo", "Benguela", "Bie", "Cabinda", "Cuando Cubango", "Cuanza Norte", "Cuanza Sul", "Cunene", "Huambo", "Huila", "Luanda", "Luanda Province", "Lunda Norte", "Lunda Sul", "Malanje", "Moxico", "Uige", "Zaire");
var continente7 = new Array('-', "Anguilla (General)");
var continente8 = new Array('-', "Barbuda", "Saint George", "Saint John", "Saint Mary", "Saint Paul", "Saint Peter", "Saint Philip");
var continente9 = new Array('-', "Netherlands Antilles (General)");
var continente10 = new Array('-', "Antarctica (General)");
var continente11 = new Array('-', "Al Bahah", "Al Hudud ash Shamaliyah", "Al Jawf", "Al Jawf", "Al Madinah", "Al Qasim", "Al Qurayyat", "Ar Riyad", "Ash Sharqiyah", "Hail", "Jizan", "Makkah", "Najran", "Tabuk");
var continente12 = new Array('-', "Adrar", "Ain Defla", "Ain Temouchent", "Alger", "Annaba", "Batna", "Bechar", "Bejaia", "Biskra", "Blida", "Bordj Bou Arreridj", "Bouira", "Boumerdes", "Chlef", "Constantine", "Djelfa", "El Bayadh", "El Oued", "El Tarf", "Ghardaia", "Guelma", "Illizi", "Jijel", "Khenchela", "Laghouat", "Msila", "Mascara", "Medea", "Mila", "Mostaganem", "Naama", "Oran", "Ouargla", "Oum el Bouaghi", "Relizane", "Saida", "Setif", "Sidi Bel Abbes", "Skikda", "Souk Ahras", "Tamanghasset", "Tebessa", "Tiaret", "Tindouf", "Tipaza", "Tissemsilt", "Tizi Ouzou", "Tlemcen");
var continente13 = new Array('-', "Buenos Aires", "Catamarca", "Chaco", "Chubut", "Cordoba", "Corrientes", "Distrito Federal", "Entre Rios", "Formosa", "Jujuy", "La Pampa", "La Rioja", "Mendoza", "Misiones", "Neuquen", "Rio Negro", "Salta", "San Juan", "San Luis", "Santa Cruz", "Santa Fe", "Santiago del Estero", "Tierra del Fuego", "Tucuman");
var continente14 = new Array('-', "Aragatsotn", "Ararat", "Armavir", "Gegharkunik", "Kotayk", "Lorri", "Shirak", "Syunik", "Tavush", "Vayots Dzor", "Yerevan");
var continente15 = new Array('-', "Aruba (General)");
var continente17 = new Array('-', "Australian Capital Territory", "New South Wales", "Northern Territory", "Queensland", "South Australia", "Tasmania", "Victoria", "Western Australia");
var continente18 = new Array('-', "Burgenland", "Karnten", "Niederosterreich", "Oberosterreich", "Salzburg", "Steiermark", "Tirol", "Vorarlberg", "Wien");
var continente19 = new Array('-', "Abseron", "Agcabadi", "Agdam", "Agdas", "Agstafa", "Agsu", "Ali Bayramli", "Astara", "Baki", "Balakan", "Barda", "Beylaqan", "Bilasuvar", "Cabrayil", "Calilabad", "Daskasan", "Davaci", "Fuzuli", "Gadabay", "Ganca", "Goranboy", "Goycay", "Haciqabul", "Imisli", "Ismayilli", "Kalbacar", "Kurdamir", "Lacin", "Lankaran", "Lankaran", "Lerik", "Masalli", "Mingacevir", "Naftalan", "Naxcivan", "Neftcala", "Oguz", "Qabala", "Qax", "Qazax", "Qobustan", "Quba", "Qubadli", "Qusar", "Saatli", "Sabirabad", "Saki", "Saki", "Salyan", "Samaxi", "Samkir", "Samux", "Siyazan", "Sumqayit", "Susa", "Susa", "Tartar", "Tovuz", "Ucar", "Xacmaz", "Xankandi", "Xanlar", "Xizi", "Xocali", "Xocavand", "Yardimli", "Yevlax", "Yevlax", "Zangilan", "Zaqatala", "Zardab");
var continente20 = new Array('-', "Acklins and Crooked Islands", "Bimini", "Cat Island", "Exuma", "Freeport", "Fresh Creek", "Governors Harbour", "Green Turtle Cay", "Harbour Island", "High Rock", "Inagua", "Kemps Bay", "Long Island", "Marsh Harbour", "Mayaguana", "New Providence", "Nichollstown and Berry Islands", "Ragged Island", "Rock Sound", "San Salvador and Rum Cay", "Sandy Point");
var continente21 = new Array('-', "Al Hadd", "Al Manamah", "Al Mintaqah al Gharbiyah", "Al Mintaqah al Wusta", "Al Mintaqah ash Shamaliyah", "Al Muharraq", "Ar Rifa", "Jidd Hafs", "Madinat", "Madinat Hamad", "Mintaqat Juzur Hawar", "Sitrah");
var continente22 = new Array('-', "Bagerhat", "Bandarban", "Barguna", "Barisal", "Barisal Division", "Bhola", "Bogra", "Brahmanbaria", "Chandpur", "Chapai Nawabganj", "Chattagram", "Chuadanga", "Comilla", "Coxs Bazar", "Dhaka", "Dhaka Division", "Dinajpur", "Faridpur", "Feni", "Gaibandha", "Gazipur", "Gopalganj", "Habiganj", "Jaipurhat", "Jamalpur", "Jessore", "Jhalakati", "Jhenaidah", "Khagrachari", "Khulna", "Khulna Division", "Kishorganj", "Kurigram", "Kushtia", "Laksmipur", "Lalmonirhat", "Madaripur", "Magura", "Manikganj", "Meherpur", "Moulavibazar", "Munshiganj", "Mymensingh", "Naogaon", "Narail", "Narayanganj", "Narsingdi", "Nator", "Netrakona", "Nilphamari", "Noakhali", "Pabna", "Panchagar", "Parbattya Chattagram", "Patuakhali", "Pirojpur", "Rajbari", "Rajshahi", "Rangpur", "Rajshahi Division", "Satkhira", "Shariyatpur", "Sherpur", "Sirajganj", "Sunamganj", "Sylhet", "Sylhet Division", "Tangail", "Thakurgaon");
var continente23 = new Array('-', "Christ Church", "Saint Andrew", "Saint George", "Saint James", "Saint John", "Saint Joseph", "Saint Lucy", "Saint Michael", "Saint Peter", "Saint Philip", "Saint Thomas");
var continente24 = new Array('-', "Belize", "Cayo", "Corozal", "Orange Walk", "Stann Creek", "Toledo");
var continente25 = new Array('-', "Atakora", "Atlantique", "Borgou", "Littoral Department", "Mono", "Oueme", "Zou");
var continente26 = new Array('-', "Devonshire", "Hamilton", "Hamilton", "Paget", "Pembroke", "Saint George", "Saint Georges", "Sandys", "Smiths", "Southampton", "Warwick");
var continente27 = new Array('-', "Brestskaya Voblasts", "Homyel skaya Voblasts", "Hrodzyenskaya Voblasts", "Mahilyowskaya Voblasts", "Minsk", "Minskaya Voblasts", "Vitsyebskaya Voblasts");
var continente28 = new Array('-', "Chuquisaca", "Cochabamba", "El Beni", "La Paz", "Oruro", "Pando", "Potosi", "Santa Cruz", "Tarija");
var continente29 = new Array('-', "Bosanska Dubica", "Federation of Bosnia and Herzegovina", "Republika Srpska");
var continente30 = new Array('-', "Central", "Chobe", "Ghanzi", "Kgalagadi", "Kgatleng", "Kweneng", "Ngamiland", "North-East", "South-East", "Southern");
var continente31 = new Array('-', "Bouvet Island (General)");
var continente32 = new Array('-', "Acre", "Alagoas", "Amapa", "Amazonas", "Bahia", "Ceara", "Distrito Federal", "Espirito Santo", "Goias", "Maranhao", "Mato Grosso", "Mato Grosso do Sul", "Minas Gerais", "Para", "Paraiba", "Parana", "Pernambuco", "Piaui", "Rio Grande do Norte", "Rio Grande do Sul", "Rio de Janeiro", "Rondonia", "Roraima", "Santa Catarina", "Sao Paulo", "Sergipe", "Tocantins");
var continente33 = new Array('-', "British Indian Ocean Territory (General)");
var continente34 = new Array('-', "Alibori", "Belait", "Brunei and Muara", "Collines", "Donga", "Kouffo", "Littoral", "Oueme", "Plateau", "Temburong", "Tutong", "Zou");
var continente35 = new Array('-', "Blagoevgrad", "Burgas", "Dobrich", "Gabrovo", "Grad Sofiya", "Khaskovo", "Kurdzhali", "Kyustendil", "Lovech", "Mikhaylovgrad", "Montana", "Pazardzhik", "Pernik", "Pleven", "Plovdiv", "Razgrad", "Ruse", "Shumen", "Silistra", "Sliven", "Smolyan", "Sofiya", "Stara Zagora", "Turgovishte", "Varna", "Veliko Turnovo", "Vidin", "Vratsa", "Yambol");
var continente36 = new Array('-', "Bale", "Bam", "Banwa", "Bazega", "Bougouriba", "Boulgou", "Boulkiemde", "Ganzourgou", "Gnagna", "Gourma", "Houet", "Ioba", "Kadiogo", "Kenedougou", "Komoe", "Komondjari", "Kompienga", "Kossi", "Koulpelogo", "Kouritenga", "Kourweogo", "Leraba", "Loroum", "Mouhoun", "Namentenga", "Naouri", "Nayala", "Noumbiel", "Oubritenga", "Oudalan", "Passore", "Poni", "Sanguie", "Sanmatenga", "Seno", "Sissili", "Soum", "Sourou", "Tapoa", "Tuy", "Yagha", "Yatenga", "Ziro", "Zondoma", "Zoundweogo");
var continente37 = new Array('-', "Bubanza", "Bujumbura", "Bururi", "Cankuzo", "Cibitoke", "Gitega", "Karuzi", "Kayanza", "Kirundo", "Makamba", "Muramvya", "Muyinga", "Mwaro", "Ngozi", "Rutana", "Ruyigi");
var continente38 = new Array('-', "Bumthang", "Chhukha", "Chirang", "Daga", "Geylegphug", "Ha", "Lhuntshi", "Mongar", "Paro", "Pemagatsel", "Punakha", "Samchi", "Samdrup", "Shemgang", "Tashigang", "Thimphu", "Tongsa", "Wangdi Phodrang");
var continente39 = new Array('-', "Antwerpen", "Brabant", "Brabant Wallon", "Brussels Hoofdstedelijk Gewest", "Hainaut", "Liege", "Limburg", "Luxembourg", "Namur", "Oost-Vlaanderen", "Vlaams-Brabant", "West-Vlaanderen");
var continente40 = new Array('-', "Boa Vista", "Brava", "Maio", "Mosteiros", "Paul", "Praia", "Ribeira Grande", "Sal", "Santa Catarina", "Santa Cruz", "Sao Domingos", "Sao Filipe", "Sao Miguel", "Sao Nicolau", "Sao Vicente", "Tarrafal");
var continente41 = new Array('-', "Batdambang", "Kampong Cham", "Kampong Chhnang", "Kampong Spoe", "Kampong Thum", "Kampot", "Kandal", "Kaoh Kong", "Kracheh", "Mondol Kiri", "Pailin", "Phnum Penh", "Pouthisat", "Preah Vihear", "Prey Veng", "Rotanokiri", "Siemreab-Otdar Meanchey", "Stoeng Treng", "Svay Rieng", "Takev");
var continente42 = new Array('-', "Adamaoua", "Centre", "Est", "Extreme-Nord", "Littoral", "Nord", "Nord-Ouest", "Ouest", "Sud", "Sud-Ouest");
var continente43 = new Array('-');
var continente45 = new Array('-', "Batha", "Biltine", "Borkou-Ennedi-Tibesti", "Chari-Baguirmi", "Guera", "Kanem", "Lac", "Logone Occidental", "Logone Oriental", "Mayo-Kebbi", "Moyen-Chari", "Ouaddai", "Salamat", "Tandjile");
var continente46 = new Array('-', "Aisen del General Carlos Ibanez del Campo", "Antofagasta", "Araucania", "Atacama", "Bio-Bio", "Coquimbo", "Libertador General Bernardo OHiggins", "Los Lagos", "Magallanes y de la Antartica Chilena", "Maule", "Region Metropolitana", "Tarapaca", "Valparaiso");
var continente47 = new Array('-', "Anhui", "Beijing", "Chongqing", "Fujian", "Gansu", "Guangdong", "Guangxi", "Guizhou", "Hainan", "Hebei", "Heilongjiang", "Henan", "Hubei", "Hunan", "Jiangsu", "Jiangxi", "Jilin", "Liaoning", "Nei Mongol", "Ningxia", "Qinghai", "Shaanxi", "Shandong", "Shanghai", "Shanxi", "Sichuan", "Tianjin", "Xinjiang", "Xizang", "Yunnan", "Zhejiang");
var continente48 = new Array('-', "Famagusta", "Kyrenia", "Larnaca", "Limassol", "Nicosia", "Paphos");
var continente49 = new Array('-', "Amazonas", "Antioquia", "Arauca", "Atlantico", "Bolivar", "Boyaca", "Caldas", "Caqueta", "Casanare", "Cauca", "Cesar", "Choco", "Cordoba", "Cundinamarca", "Distrito Especial", "Guainia", "Guaviare", "Huila", "La Guajira", "Magdalena", "Meta", "Narino", "Norte de Santander", "Putumayo", "Quindio", "Risaralda", "San Andres y Providencia", "Santander", "Sucre", "Tolima", "Valle del Cauca", "Vaupes", "Vichada");
var continente50 = new Array('-', "Anjouan", "Grande Comore", "Moheli");
var continente51 = new Array('-', "Bouenza", "Brazzaville", "Cuvette", "Kouilou", "Lekoumou", "Likouala", "Niari", "Plateaux", "Pool", "Sangha");
var continente52 = new Array('-', "Chagang-do", "Hamgyong-bukto", "Hamgyong-namdo", "Hwanghae-bukto", "Hwanghae-namdo", "Kaesong-si", "Kangwon-do", "Najin Sonbong-si", "Nampo-si", "P yongan-bukto", "P yongan-namdo", "P yongyang-si", "Yanggang-do");
var continente53 = new Array('-', "Ch ungch ong-bukto", "Ch ungch ong-namdo", "Cheju-do", "Cholla-bukto", "Cholla-namdo", "Inch on-jikhalsi", "Kangwon-do", "Kwangju-jikhalsi", "Kyonggi-do", "Kyongsang-bukto", "Kyongsang-namdo", "Pusan-jikhalsi", "Seoul-tukpyolsi", "Taegu-jikhalsi", "Taejon-jikhalsi", "Ulsan-gwangyoksi");
var continente54 = new Array('-', "Alajuela", "Cartago", "Guanacaste", "Heredia", "Limon", "Puntarenas", "San Jose");
var continente55 = new Array('-', "Abengourou", "Abidjan", "Aboisso", "Adiake", "Adzope", "Agboville", "Alepe", "Bangolo", "Beoumi", "Biankouma", "Bocanda", "Bondoukou", "Bongouanou", "Bouafle", "Bouake", "Bouna", "Boundiali", "Dabakala", "Dabou", "Daloa", "Danane", "Daoukro", "Dimbokro", "Divo", "Duekoue", "Ferkessedougou", "Gagnoa", "Grand-Bassam", "Grand-Lahou", "Guiglo", "Haut-Sassandra Region", "Issia", "Jacqueville", "Katiola", "Korhogo", "Lagunes Region", "Lakota", "Man", "Mankono", "Mbahiakro", "Odienne", "Oume", "Sakassou", "San Pedro", "Sassandra", "Seguela", "Sinfra", "Soubre", "Tabou", "Tanda", "Tiassale", "Tiebissou", "Tingrela", "Touba", "Toulepleu", "Toumodi", "Vavoua", "Yamoussoukro", "Zuenoula");
var continente56 = new Array('-', "Bjelovarsko-Bilogorska", "Brodsko-Posavska", "Dubrovacko-Neretvanska", "Grad Zagreb", "Istarska", "Karlovacka", "Koprivnicko-Krizevacka", "Krapinsko-Zagorska", "Licko-Senjska", "Medimurska", "Osjecko-Baranjska", "Pozesko-Slavonska", "Primorsko-Goranska", "Sibensko-Kninska", "Sisacko-Moslavacka", "Splitsko-Dalmatinska", "Varazdinska", "Viroviticko-Podravska", "Vukovarsko-Srijemska", "Zadarska", "Zagrebacka");
var continente57 = new Array('-', "Camaguey", "Ciego de Avila", "Cienfuegos", "Ciudad de la Habana", "Granma", "Guantanamo", "Holguin", "Isla de la Juventud", "La Habana", "Las Tunas", "Matanzas", "Pinar del Rio", "Sancti Spiritus", "Santiago de Cuba", "Villa Clara");
var continente58 = new Array('-', "Arhus", "Bornholm", "Frederiksborg", "Fyn", "Kobenhavn", "Nordjylland", "Ribe", "Ringkobing", "Roskilde", "Sonderjylland", "Staden Kobenhavn", "Storstrom", "Vejle", "Vestsjalland", "Viborg");
var continente59 = new Array('-', "Dikhil", "Djibouti", "Obock", "Tadjoura");
var continente60 = new Array('-', "Saint Andrew", "Saint David", "Saint George", "Saint John", "Saint Joseph", "Saint Luke", "Saint Mark", "Saint Patrick", "Saint Paul", "Saint Peter");
var continente61 = new Array('-', "East Timor (General)");
var continente62 = new Array('-', "Azuay", "Bolivar", "Canar", "Carchi", "Chimborazo", "Cotopaxi", "El Oro", "Esmeraldas", "Galapagos", "Guayas", "Imbabura", "Loja", "Los Rios", "Manabi", "Morona-Santiago", "Napo", "Orellana", "Pastaza", "Pichincha", "Sucumbios", "Tungurahua", "Zamora-Chinchipe");
var continente63 = new Array('-', "Ad Daqahliyah", "Al Bahr al Ahmar", "Al Buhayrah", "Al Fayyum", "Al Gharbiyah", "Al Iskandariyah", "Al Isma iliyah", "Al Jizah", "Al Minufiyah", "Al Minya", "Al Qahirah", "Al Qalyubiyah", "Al Wadi al Jadid", "As Suways", "Ash Sharqiyah", "Aswan", "Asyut", "Bani Suwayf", "Bur Said", "Dumyat", "Janub Sina", "Kafr ash Shaykh", "Matruh", "Qina", "Shamal Sina", "Suhaj");
var continente64 = new Array('-', "Ahuachapan", "Cabanas", "Chalatenango", "Cuscatlan", "La Libertad", "La Paz", "La Union", "Morazan", "San Miguel", "San Salvador", "San Vicente", "Santa Ana", "Sonsonate", "Usulutan");
var continente65 = new Array('-', "Holy See (Vatican City State) (General)");
var continente66 = new Array('-', "Abu Dhabi", "Ajman", "Dubai", "Fujairah", "Ras Al Khaimah", "Sharjah", "Umm Al Quwain");
var continente67 = new Array('-', "Eritrea (General)");
var continente68 = new Array('-', "Banska Bystrica", "Bratislava", "Kosice", "Nitra", "Presov", "Trencin", "Trnava", "Zilina");
var continente69 = new Array('-', "Ajdovscina", "Beltinci", "Bled", "Bohinj", "Borovnica", "Bovec", "Brda", "Brezice", "Brezovica", "Celje", "Cerklje na Gorenjskem", "Cerknica", "Cerkno", "Crensovci", "Crna na Koroskem", "Crnomelj", "Divaca", "Dobrepolje", "Dobrova-Horjul-Polhov Gradec", "Dol pri Ljubljani", "Domzale", "Dornava", "Dravograd", "Duplek", "Gorenja Vas-Poljane", "Gorisnica", "Gornja Radgona", "Gornji Grad", "Gornji Petrovci", "Grosuplje", "Hrastnik", "Hrpelje-Kozina", "Idrija", "Ig", "Ilirska Bistrica", "Ivancna Gorica", "Izola-Isola", "Jesenice", "Jursinci", "Kamnik", "Kanal", "Kidricevo", "Kobarid", "Kobilje", "Kocevje", "Komen", "Koper-Capodistria", "Kozje", "Kranj", "Kranjska Gora", "Krsko", "Kungota", "Kuzma", "Lasko", "Lenart", "Litija", "Ljubljana", "Ljubno", "Ljutomer", "Logatec", "Loska Dolina", "Loski Potok", "Luce", "Lukovica", "Majsperk", "Maribor", "Medvode", "Menges", "Metlika", "Mezica", "Miren-Kostanjevica", "Mislinja", "Moravce", "Moravske Toplice", "Mozirje", "Murska Sobota", "Muta", "Naklo", "Nazarje", "Nova Gorica", "Novo Mesto", "Odranci", "Ormoz", "Osilnica", "Pesnica", "Piran", "Pivka", "Podcetrtek", "Postojna", "Preddvor", "Ptuj", "Puconci", "Racam", "Radece", "Radenci", "Radlje ob Dravi", "Radovljica", "Ribnica", "Rogaska Slatina", "Rogasovci", "Rogatec", "Ruse", "Semic", "Sencur", "Sentilj", "Sentjernej", "Sentjur pri Celju", "Sevnica", "Sezana", "Skocjan", "Skofja Loka", "Skofljica", "Slovenj Gradec", "Slovenska Bistrica", "Slovenske Konjice", "Smarje pri Jelsah", "Smartno ob Paki", "Sostanj", "Starse", "Store", "Sveti Jurij", "Tolmin", "Trbovlje", "Trebnje", "Trzic", "Turnisce", "Velenje", "Velike Lasce", "Videm", "Vipava", "Vitanje", "Vodice", "Vojnik", "Vrhnika", "Vuzenica", "Zagorje ob Savi", "Zalec", "Zavrc", "Zelezniki", "Ziri", "Zrece");
var continente70 = new Array('-', "Andalucia", "Aragon", "Asturias", "Canarias", "Cantabria", "Castilla y Leon", "Castilla-La Mancha", "Cataluna", "Comunidad Valenciana", "Extremadura", "Galicia", "Islas Baleares", "La Rioja", "Madrid", "Murcia", "Navarra", "Country Vasco");
var continente71 = new Array('-', "Alabama", "Alaska", "American Samoa", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "District of Columbia", "Federated States of Micronesia", "Florida", "Georgia", "Guam", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Marshall Islands", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Northern Mariana Islands", "Ohio", "Oklahoma", "Oregon", "Palau", "Pennsylvania", "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virgin Islands", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
var continente72 = new Array('-', "Harjumaa", "Hiiumaa", "Ida-Virumaa", "Jarvamaa", "Jogevamaa", "Kohtla-Jarve", "Laane-Virumaa", "Laanemaa", "Narva", "Parnu", "Parnumaa", "Polvamaa", "Raplamaa", "Saaremaa", "Sillamae", "Tallinn", "Tartu", "Tartumaa", "Valgamaa", "Viljandimaa", "Vorumaa");
var continente73 = new Array('-', "Addis Abeba", "Adis Abeba", "Afar", "Afar", "Amara", "Amhara", "Benishangul", "Binshangul Gumuz", "Dire Dawa", "Gambela Hizboch", "Gambella", "Hareri Hizb", "Oromiya", "Somali", "Southern", "Sumale", "Tigray", "Tigray", "YeDebub Biheroch Bihereseboch na Hizboch");
var continente74 = new Array('-', "Central", "Eastern", "Northern", "Rotuma", "Western");
var continente75 = new Array('-', "Abra", "Agusan del Norte", "Agusan del Sur", "Aklan", "Albay", "Angeles", "Antique", "Aurora", "Bacolod", "Bago", "Baguio", "Bais", "Basilan", "Basilan City", "Bataan", "Batanes", "Batangas", "Batangas City", "Benguet", "Bohol", "Bukidnon", "Bulacan", "Butuan", "Cabanatuan", "Cadiz", "Cagayan", "Cagayan de Oro", "Calbayog", "Caloocan", "Camarines Norte", "Camarines Sur", "Camiguin", "Canlaon", "Capiz", "Catanduanes", "Cavite", "Cavite City", "Cebu", "Cebu City", "Cotabato", "Dagupan", "Danao", "Dapitan", "Davao", "Davao City", "Davao Oriental", "Davao del Sur", "Dipolog", "Dumaguete", "Eastern Samar", "General Santos", "Gingoog", "Ifugao", "Iligan", "Ilocos Norte", "Ilocos Sur", "Iloilo", "Iloilo City", "Iriga", "Isabela", "Kalinga-Apayao", "La Carlota", "La Union", "Laguna", "Lanao del Norte", "Lanao del Sur", "Laoag", "Lapu-Lapu", "Legaspi", "Leyte", "Lipa", "Lucena", "Maguindanao", "Mandaue", "Manila", "Marawi", "Marinduque", "Masbate", "Mindoro Occidental", "Mindoro Oriental", "Misamis Occidental", "Misamis Oriental", "Mountain", "Naga", "Negros Occidental", "Negros Oriental", "North Cotabato", "Northern Samar", "Nueva Ecija", "Nueva Vizcaya", "Olongapo", "Ormoc", "Oroquieta", "Ozamis", "Pagadian", "Palawan", "Palayan", "Pampanga", "Pangasinan", "Pasay", "Puerto Princesa", "Quezon", "Quezon City", "Quirino", "Rizal", "Romblon", "Roxas", "Samar", "San Carlos", "San Carlos", "San Jose", "San Pablo", "Silay", "Siquijor", "Sorsogon", "South Cotabato", "Southern Leyte", "Sultan Kudarat", "Sulu", "Surigao", "Surigao del Norte", "Surigao del Sur", "Tacloban", "Tagaytay", "Tagbilaran", "Tangub", "Tarlac", "Tawitawi", "Toledo", "Trece Martires", "Zambales", "Zamboanga", "Zamboanga del Norte", "Zamboanga del Sur");
var continente76 = new Array('-', "Eastern Finland", "Lapland", "Oulu", "Southern Finland", "Western Finland");
var continente77 = new Array('-', "Alsace", "Aquitaine", "Auvergne", "Basse-Normandie", "Bourgogne", "Bretagne", "Centre", "Champagne-Ardenne", "Corse", "Franche-Comte", "Haute-Normandie", "Ile-de-France", "Languedoc-Roussillon", "Limousin", "Lorraine", "Midi-Pyrenees", "Nord-Pas-de-Calais", "Pays de la Loire", "Picardie", "Poitou-Charentes", "Provence-Alpes-Cote d Azur", "Rhone-Alpes");
var continente78 = new Array('-', "Guyane Département");
var continente79 = new Array('-', "Polynésie Française Territoire");
var continente80 = new Array('-', "French Southern Territories (General)");
var continente81 = new Array('-', "Estuaire", "Haut-Ogooue", "Moyen-Ogooue", "Ngounie", "Nyanga", "Ogooue-Ivindo", "Ogooue-Lolo", "Ogooue-Maritime", "Woleu-Ntem");
var continente82 = new Array('-', "Banjul", "Lower River", "MacCarthy Island", "North Bank", "Upper River", "Western");
var continente83 = new Array('-', "Abashis Raioni", "Abkhazia", "Adigenis Raioni", "Ajaria", "Akhalgoris Raioni", "Akhalk alakis Raioni", "Akhalts ikhis Raioni", "Akhmetis Raioni", "Ambrolauris Raioni", "Aspindzis Raioni", "Baghdat is Raioni", "Bolnisis Raioni", "Borjomis Raioni", "Ch khorotsqus Raioni", "Ch okhatauris Raioni", "Chiat ura", "Dedop listsqaros Raioni", "Dmanisis Raioni", "Dushet is Raioni", "Gardabanis Raioni", "Gori", "Goris Raioni", "Gurjaanis Raioni", "Javis Raioni", "K arelis Raioni", "K ut aisi", "Kaspis Raioni", "Kharagaulis Raioni", "Khashuris Raioni", "Khobis Raioni", "Khonis Raioni", "Lagodekhis Raioni", "Lanch khut is Raioni", "Lentekhis Raioni", "Marneulis Raioni", "Martvilis Raioni", "Mestiis Raioni", "Mts khet is Raioni", "Ninotsmindis Raioni", "Onis Raioni", "Ozurget is Raioni", "P ot i", "Qazbegis Raioni", "Qvarlis Raioni", "Rust avi", "Sach kheris Raioni", "Sagarejos Raioni", "Samtrediis Raioni", "Senakis Raioni", "Sighnaghis Raioni", "T bilisi", "T elavis Raioni", "T erjolis Raioni", "T et ritsqaros Raioni", "T ianet is Raioni", "Tqibuli", "Ts ageris Raioni", "Tsalenjikhis Raioni", "Tsalkis Raioni", "Tsqaltubo", "Vanis Raioni", "Zestap onis Raioni", "Zugdidi", "Zugdidis Raioni");
var continente84 = new Array('-', "Ashanti", "Brong-Ahafo", "Central", "Eastern", "Greater Accra", "Northern", "Upper East", "Upper West", "Volta", "Western");
var continente85 = new Array('-', "Gibraltar (General)");
var continente86 = new Array('-', "Saint Andrew", "Saint David", "Saint George", "Saint John", "Saint Mark", "Saint Patrick");
var continente87 = new Array('-', "Aitolia kai Akarnania", "Akhaia", "Argolis", "Arkadhia", "Arta", "Attiki", "Dhodhekanisos", "Drama", "Evritania", "Evros", "Evvoia", "Florina", "Fokis", "Fthiotis", "Grevena", "Ilia", "Imathia", "Ioannina", "Iraklion", "Kardhitsa", "Kastoria", "Kavala", "Kefallinia", "Kerkira", "Khalkidhiki", "Khania", "Khios", "Kikladhes", "Kilkis", "Korinthia", "Kozani", "Lakonia", "Larisa", "Lasithi", "Lesvos", "Levkas", "Magnisia", "Messinia", "Pella", "Pieria", "Preveza", "Rethimni", "Rodhopi", "Samos", "Serrai", "Thesprotia", "Thessaloniki", "Trikala", "Voiotia", "Xanthi", "Zakinthos");
var continente88 = new Array('-', "Nordgronland", "Ostgronland", "Vestgronland");
var continente89 = new Array('-', "Guadeloupe Département");
var continente90 = new Array('-', "Guam (General)");
var continente91 = new Array('-', "Alta Verapaz", "Baja Verapaz", "Chimaltenango", "Chiquimula", "El Progreso", "Escuintla", "Guatemala", "Huehuetenango", "Izabal", "Jalapa", "Jutiapa", "Peten", "Quetzaltenango", "Quiche", "Retalhuleu", "Sacatepequez", "San Marcos", "Santa Rosa", "Solola", "Suchitepequez", "Totonicapan", "Zacapa");
var continente92 = new Array('-', "Beyla", "Boffa", "Boke", "Conakry", "Coyah", "Dabola", "Dalaba", "Dinguiraye", "Dubreka", "Faranah", "Forecariah", "Fria", "Gaoual", "Gueckedou", "Kankan", "Kerouane", "Kindia", "Kissidougou", "Koubia", "Koundara", "Kouroussa", "Labe", "Lelouma", "Lola", "Macenta", "Mali", "Mamou", "Mandiana", "Nzerekore", "Pita", "Siguiri", "Telimele", "Tougue", "Yomou");
var continente93 = new Array('-', "Annobon", "Bioko Norte", "Bioko Sur", "Centro Sur", "Kie-Ntem", "Litoral", "Wele-Nzas");
var continente94 = new Array('-', "Bafata", "Biombo", "Bissau", "Bolama", "Cacheu", "Gabu", "Oio", "Quinara", "Tombali");
var continente95 = new Array('-', "Barima-Waini", "Cuyuni-Mazaruni", "Demerara-Mahaica", "East Berbice-Corentyne", "Essequibo Islands-West Demerara", "Mahaica-Berbice", "Pomeroon-Supenaam", "Potaro-Siparuni", "Upper Demerara-Berbice", "Upper Takutu-Upper Essequibo");
var continente96 = new Array('-', "Artibonite", "Centre", "Grand Anse", "Nord", "Nord-Est", "Nord-Ouest", "Ouest", "Sud", "Sud-Est");
var continente97 = new Array('-', "Heard Island and McDonald Islands (General)");
var continente98 = new Array('-', "Drenthe", "Dronten", "Flevoland", "Friesland", "Gelderland", "Groningen", "Lelystad", "Limburg", "Noord-Brabant", "Noord-Holland", "Overijssel", "Overijssel", "Utrecht", "Zeeland", "Zuid-Holland", "Zuidelijke IJsselmeerpolders");
var continente99 = new Array('-', "Atlantida", "Choluteca", "Colon", "Comayagua", "Copan", "Cortes", "El Paraiso", "Francisco Morazan", "Gracias a Dios", "Intibuca", "Islas de la Bahia", "La Paz", "Lempira", "Ocotepeque", "Olancho", "Santa Barbara", "Valle", "Yoro");
var continente100 = new Array('-', "Hong Kong (General)");
var continente101 = new Array('-', "Bacs-Kiskun", "Baranya", "Bekes", "Bekescsaba", "Borsod-Abauj-Zemplen", "Budapest", "Csongrad", "Debrecen", "Dunaujvaros", "Eger", "Fejer", "Gyor", "Gyor-Moson-Sopron", "Hajdu-Bihar", "Heves", "Hodmezovasarhely", "Jasz-Nagykun-Szolnok", "Kaposvar", "Kecskemet", "Komarom-Esztergom", "Miskolc", "Nagykanizsa", "Nograd", "Nyiregyhaza", "Pecs", "Pest", "Somogy", "Sopron", "Szabolcs-Szatmar-Bereg", "Szeged", "Szekesfehervar", "Szolnok", "Szombathely", "Tatabanya", "Tolna", "Vas", "Veszprem", "Veszprem", "Zala", "Zalaegerszeg");
var continente102 = new Array('-', "Andaman and Nicobar Islands", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttar Pradesh", "Uttaranchal", "West Bengal");
var continente103 = new Array('-', "Aceh", "Bali", "Banten", "Bengkulu", "Gorontalo", "Jakarta Raya", "Jambi", "Jawa Barat", "Jawa Tengah", "Jawa Timur", "Kalimantan Barat", "Kalimantan Selatan", "Kalimantan Tengah", "Kalimantan Timur", "Kepulauan Bangka Belitung", "Lampung", "Maluku", "Maluku Province", "Maluku Utara", "Nusa Tenggara Barat", "Nusa Tenggara Timur", "Papua", "Riau", "Sulawesi Selatan", "Sulawesi Tengah", "Sulawesi Tenggara", "Sulawesi Utara", "Sumatera Barat", "Sumatera Selatan", "Sumatera Utara", "Yogyakarta");
var continente104 = new Array('-', "Al Anbar", "Al Basrah", "Al Muthanna", "Al Qadisiyah", "An Najaf", "Arbil", "As Sulaymaniyah", "At Tamim", "Babil", "Baghdad", "Dahuk", "Dhi Qar", "Diyala", "Karbala", "Maysan", "Ninawa", "Salah ad Din", "Wasit");
var continente105 = new Array('-', "Carlow", "Cavan", "Clare", "Cork", "Donegal", "Dublin", "Galway", "Kerry", "Kildare", "Kilkenny", "Laois", "Leitrim", "Limerick", "Longford", "Louth", "Mayo", "Meath", "Monaghan", "Offaly", "Roscommon", "Sligo", "Tipperary", "Waterford", "Westmeath", "Wexford", "Wicklow");
var continente106 = new Array('-', "Cocos (Keeling) Islands (General)");
var continente107 = new Array('-', "Christmas Island (General)");
var continente108 = new Array('-', "Akranes", "Akureyri", "Arnessysla", "Austur-Bardastrandarsysla", "Austur-Hunavatnssysla", "Austur-Skaftafellssysla", "Borgarfjardarsysla", "Dalasysla", "Eyjafjardarsysla", "Gullbringusysla", "Hafnarfjordur", "Husavik", "Isafjordur", "Keflavik", "Kjosarsysla", "Kopavogur", "Myrasysla", "Neskaupstadur", "Nordur-Isafjardarsysla", "Nordur-Mulasysla", "Nordur-Tingeyjarsysla", "Olafsfjordur", "Rangarvallasysla", "Reykjavik", "Saudarkrokur", "Seydisfjordur", "Siglufjordur", "Skagafjardarsysla", "Snafellsnes- og Hnappadalssysla", "Strandasysla", "Sudur-Mulasysla", "Sudur-Tingeyjarsysla", "Vestmannaeyjar", "Vestur-Bardastrandarsysla", "Vestur-Hunavatnssysla", "Vestur-Isafjardarsysla", "Vestur-Skaftafellssysla");
var continente109 = new Array('-', "Creek", "Eastern", "Midland", "South Town", "Spot Bay", "Stake Bay", "West End", "Western");
var continente110 = new Array('-', "Cook Islands (General)");
var continente111 = new Array('-', "Færøerne");
var continente112 = new Array('-', "Falkland Islands (Malvinas) (General)");
var continente113 = new Array('-', "Marshall Islands (General)");
var continente114 = new Array('-', "Agalega Islands", "Black River", "Cargados Carajos", "Flacq", "Grand Port", "Moka", "Pamplemousses", "Plaines Wilhems", "Port Louis", "Riviere du Rempart", "Rodrigues", "Savanne");
var continente115 = new Array('-', "Central", "Guadalcanal", "Isabel", "Makira", "Malaita", "Temotu", "Western");
var continente116 = new Array('-', "South Georgia and the South Sandwich Islands (General)");
var continente117 = new Array('-', "Turks and Caicos Islands (General)");
var continente118 = new Array('-', "Wallis and Futuna (General)");
var continente119 = new Array('-', "HaDarom", "HaMerkaz", "HaZafon", "Hefa", "Tel Aviv", "Yerushalayim");
var continente120 = new Array('-', "Abruzzi", "Basilicata", "Calabria", "Campania", "Emilia-Romagna", "Friuli-Venezia Giulia", "Italy (General)", "Lazio", "Liguria", "Lombardia", "Marche", "Molise", "Piemonte", "Puglia", "Sardegna", "Sicilia", "Toscana", "Trentino-Alto Adige", "Umbria", "Valle d Aosta", "Veneto");
var continente121 = new Array('-', "Clarendon", "Hanover", "Kingston", "Manchester", "Portland", "Saint Andrew", "Saint Ann", "Saint Catherine", "Saint Elizabeth", "Saint James", "Saint Mary", "Saint Thomas", "Trelawny", "Westmoreland");
var continente122 = new Array('-', "Aichi", "Akita", "Aomori", "Chiba", "Ehime", "Fukui", "Fukuoka", "Fukushima", "Gifu", "Gumma", "Hiroshima", "Hokkaido", "Hyogo", "Ibaraki", "Ishikawa", "Iwate", "Kagawa", "Kagoshima", "Kanagawa", "Kochi", "Kumamoto", "Kyoto", "Mie", "Miyagi", "Miyazaki", "Nagano", "Nagasaki", "Nara", "Niigata", "Oita", "Okayama", "Okinawa", "Osaka", "Saga", "Saitama", "Shiga", "Shimane", "Shizuoka", "Tochigi", "Tokushima", "Tokyo", "Tottori", "Toyama", "Wakayama", "Yamagata", "Yamaguchi", "Yamanashi");
var continente123 = new Array('-', "Al Balqa", "Al Karak", "Al Mafraq", "Amman", "At Tafilah", "Az Zarqa", "Irbid", "Ma");
var continente124 = new Array('-', "Almaty", "Almaty City", "Aqmola", "", "Astana City", "Atyrau", "Bayqonyr", "East Kazakhstan", "Mangghystau", "North Kazakhstan", "Pavlodar", "Qaraghandy", "Qostanay", "Qyzylorda", "South Kazakhstan", "West Kazakhstan", "Zhambyl");
var continente125 = new Array('-', "Central", "Coast", "Eastern", "Nairobi Area", "North-Eastern", "Nyanza", "Rift Valley", "Western");
var continente126 = new Array('-', "Gilbert Islands", "Line Islands", "Phoenix Islands");
var continente127 = new Array('-', "Al Ahmadi", "Al Jahra", "Al Kuwayt", "Hawalli");
var continente128 = new Array('-', "Batken", "Bishkek", "Chuy", "Jalal-Abad", "Naryn", "Osh", "Osh", "Talas", "Ysyk-Kol");
var continente129 = new Array('-', "Attapu", "Champasak", "Houaphan", "Khammouan", "Louang Namtha", "Louangphrabang", "Oudomxai", "Phongsali", "Saravan", "Savannakhet", "Vientiane", "Xaignabouri", "Xiangkhoang");
var continente130 = new Array('-', "Aizkraukles", "Aluksnes", "Balvu", "Bauskas", "Daugavpils", "Daugavpils", "Dobeles", "Gulbenes", "Jelgava", "Jelgavas", "Jurmala", "Kuldigas", "Limbazu", "Ludzas", "Madonas", "Ogres", "Preilu", "Riga", "Rigas", "Saldus", "Talsu", "Tukuma", "Valkas", "Valmieras", "Ventspils", "Ventspils");
var continente131 = new Array('-', "Berea", "Butha-Buthe", "Leribe", "Mafeteng", "Maseru", "Mohales Hoek", "Mokhotlong", "Qachas Nek", "Quthing", "Thaba-Tseka");
var continente132 = new Array('-', "Bong", "Grand Bassa", "Grand Cape Mount", "Grand Jide", "Lofa", "Maryland", "Monrovia", "Montserrado", "Nimba", "Sino");
var continente133 = new Array('-', "Ajdabiya", "Al", "Al Fatih", "Al Jabal al Akhdar", "Al Jufrah", "Al Khums", "Al Kufrah", "An Nuqat al Khams", "Ash Shati", "Awbari", "Az Zawiyah", "Banghazi", "Darnah", "Ghadamis", "Gharyan", "Misratah", "Murzuq", "Sabha", "Sawfajjin", "Surt", "Tarabulus", "Tarhunah", "Tubruq", "Yafran", "Zlitan");
var continente134 = new Array('-', "Balzers", "Eschen", "Gamprin", "Mauren", "Planken", "Ruggell", "Schaan", "Schellenberg", "Triesen", "Triesenberg", "Vaduz");
var continente135 = new Array('-', "Alytaus Apskritis", "Kauno Apskritis", "Klaipedos Apskritis", "Marijampoles Apskritis", "Panevezio Apskritis", "Siauliu Apskritis", "Taurages Apskritis", "Telsiu Apskritis", "Utenos Apskritis", "Vilniaus Apskritis");
var continente136 = new Array('-', "Diekirch", "Grevenmacher", "Luxembourg");
var continente137 = new Array('-', "Beqaa", "Beyrouth", "Liban-Nord", "Liban-Sud", "Mont-Liban", "Nabatiye");
var continente138 = new Array('-', "Ilhas", "Macau");
var continente139 = new Array('-', "Aracinovo", "Bac", "Belcista", "Berovo", "Bistrica", "Bitola", "Blatec", "Bogdanci", "Bogomila", "Bogovinje", "Bosilovo", "Brvenica", "Cair", "Capari", "Caska", "Cegrane", "Centar", "Centar Zupa", "Cesinovo", "Cucer-Sandevo", "Debar", "Delcevo", "Delogozdi", "Demir Hisar", "Demir Kapija", "Dobrusevo", "Dolna Banjica", "Dolneni", "Dorce Petrov", "Drugovo", "Dzepciste", "Gazi Baba", "Gevgelija", "Gostivar", "Gradsko", "Ilinden", "Izvor", "Jegunovce", "Kamenjane", "Karbinci", "Karpos", "Kavadarci", "Kicevo", "Kisela Voda", "Klecevce", "Kocani", "Konce", "Kondovo", "Konopiste", "Kosel", "Kratovo", "Kriva Palanka", "Krivogastani", "Krusevo", "Kuklis", "Kukurecani", "Kumanovo", "Labunista", "Lipkovo", "Lozovo", "Lukovo", "Makedonska Kamenica", "Makedonski Brod", "Mavrovi Anovi", "Meseista", "Miravci", "Mogila", "Murtino", "Negotino", "Negotino-Polosko", "Novaci", "Novo Selo", "Oblesevo", "Ohrid", "Orasac", "Orizari", "Oslomej", "Pehcevo", "Petrovec", "Plasnica", "Podares", "Prilep", "Probistip", "Radovis", "Rankovce", "Resen", "Rosoman", "Rostusa", "Samokov", "Saraj", "Sipkovica", "Sopiste", "Sopotnica", "Srbinovo", "Star Dojran", "Staravina", "Staro Nagoricane", "Stip", "Struga", "Strumica", "Studenicani", "Suto Orizari", "Sveti Nikole", "Tearce", "Tetovo", "Topolcani", "Valandovo", "Vasilevo", "Veles", "Velesta", "Vevcani", "Vinica", "Vitoliste", "Vranestica", "Vrapciste", "Vratnica", "Vrutok", "Zajas", "Zelenikovo", "Zelino", "Zitose", "Zletovo", "Zrnovci", "Ilhas", "Macau");
var continente140 = new Array('-', "Antananarivo", "Antsiranana", "Fianarantsoa", "Mahajanga", "Toamasina", "Toliara");
var continente141 = new Array('-', "Johor", "Kedah", "Kelantan", "Labuan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Selangor", "Terengganu", "Wilayah Persekutuan");
var continente142 = new Array('-', "Balaka", "Blantyre", "Chikwawa", "Chiradzulu", "Chitipa", "Dedza", "Dowa", "Karonga", "Kasungu", "Likoma", "Lilongwe", "Machinga", "Mangochi", "Mchinji", "Mulanje", "Mwanza", "Mzimba", "Nkhata Bay", "Nkhotakota", "Nsanje", "Ntcheu", "Ntchisi", "Phalombe", "Rumphi", "Salima", "Thyolo", "Zomba");
var continente143 = new Array('-', "Aliff", "Baa", "Daalu", "Faafu", "Gaafu Aliff", "Gaafu Daalu", "Haa Aliff", "Haa Daalu", "Kaafu", "Laamu", "Laviyani", "Male", "Meemu", "Naviyani", "Noonu", "Raa", "Seenu", "Shaviyani", "Thaa", "Waavu");
var continente144 = new Array('-', "Malta (General)");
var continente145 = new Array('-', "Bamako", "Gao", "Kayes", "Kidal", "Koulikoro", "Mopti", "Segou", "Sikasso", "Tombouctou");
var continente146 = new Array('-', "Agadir", "Al Hoceima", "Azilal", "Ben Slimane", "Beni Mellal", "Boulemane", "Casablanca", "Chaouen", "El Jadida", "El Kelaa des Srarhna", "Er Rachidia", "Essaouira", "Fes", "Figuig", "Guelmim", "Ifrane", "Kenitra", "Khemisset", "Khenifra", "Khouribga", "Laayoune", "Larache", "Marrakech", "Meknes", "Nador", "Ouarzazate", "Oujda", "Rabat-Sale", "Safi", "Settat", "Sidi Kacem", "Tan-Tan", "Tanger", "Taounate", "Taroudannt", "Tata", "Taza", "Tetouan", "Tiznit");
var continente147 = new Array('-', "Martinique Département");
var continente148 = new Array('-', "Adrar", "Assaba", "Brakna", "Dakhlet Nouadhibou", "Gorgol", "Guidimaka", "Hodh Ech Chargui", "Hodh El Gharbi", "Inchiri", "Tagant", "Tiris Zemmour", "Trarza");
var continente149 = new Array('-', "Mayotte (General)");
var continente150 = new Array('-', "Chuuk", "Kosrae", "Pohnpei", "Yap");
var continente151 = new Array('-', "Balti", "Cahul", "Chisinau", "Edinet", "Gagauzia", "Lapusna", "Orhei", "Soroca", "Stinga Nistrului", "Tighina", "Ungheni");
var continente152 = new Array('-', "Arhangay", "Bayan-Olgiy", "Bayanhongor", "Bulgan", "Darhan", "Darhan Uul", "Dornod", "Dornogovi", "Dundgovi", "Dzavhan", "Erdenet", "Govi-Altay", "Govi-Sumber", "Hentiy", "Hovd", "Hovsgol", "Omnogovi", "Orhon", "Ovorhangay", "Selenge", "Suhbaatar", "Tov", "Ulaanbaatar", "Uvs");
var continente153 = new Array('-', "Saint Anthony", "Saint Georges", "Saint Peter");
var continente154 = new Array('-', "Cabo Delgado", "Gaza", "Inhambane", "Manica", "Maputo", "Nampula", "Niassa", "Sofala", "Tete", "Zambezia");
var continente155 = new Array('-', "Chin State", "Irrawaddy", "Kachin State", "Karan State", "Kayah State", "Magwe", "Mandalay", "Mon State", "Pegu", "Rakhine State", "Rangoon", "Sagaing", "Shan State", "Tenasserim", "Yangon");
var continente156 = new Array('-', "Aguascalientes", "Baja California", "Baja California Sur", "Campeche", "Chiapas", "Chihuahua", "Coahuila de Zaragoza", "Colima", "Distrito Federal", "Durango", "Guanajuato", "Guerrero", "Hidalgo", "Jalisco", "Mexico", "Michoacan de Ocampo", "Morelos", "Nayarit", "Nuevo Leon", "Oaxaca", "Puebla", "Queretaro de Arteaga", "Quintana Roo", "San Luis Potosi", "Sinaloa", "Sonora", "Tabasco", "Tamaulipas", "Tlaxcala", "Veracruz-Llave", "Yucatan", "Zacatecas");
var continente157 = new Array('-', "La Condamine", "Monaco", "Monte-Carlo");
var continente158 = new Array('-', "Bethanien", "Boesmanland", "Caprivi", "Caprivi Oos", "Damaraland", "Erongo", "Gobabis", "Grootfontein", "Hardap", "Hereroland Oos", "Hereroland Wes", "Kaokoland", "Karas", "Karasburg", "Karibib", "Kavango", "Keetmanshoop", "Khomas Region", "Kunene", "Luderitz", "Maltahohe", "Mariental", "Namaland", "Ohangwena", "Okahandja", "Okavango", "Omaheke", "Omaruru", "Omusati", "Oshana", "Oshikoto", "Otjiwarongo", "Otjozondjupa", "Outjo", "Owambo", "Rehoboth", "Swakopmund", "Tsumeb", "Windhoek");
var continente159 = new Array('-', "Aiwo", "Anabar", "Anetan", "Anibare", "Baiti", "Boe", "Buada", "Denigomodu", "Ewa", "Ijuw", "Meneng", "Nibok", "Uaboe", "Yaren");
var continente160 = new Array('-', "Bagmati", "Bheri", "Bagmati Zone", "Dhawalagiri", "Gandaki", "Janakpur", "Karnali", "Kosi", "Lumbini", "Mahakali", "Mechi", "Narayani", "Rapti", "Sagarmatha", "Seti");
var continente161 = new Array('-', "Boaco", "Carazo", "Chinandega", "Chontales", "Esteli", "Granada", "Jinotega", "Leon", "Madriz", "Managua", "Masaya", "Matagalpa", "Nueva Segovia", "Rio San Juan", "Rivas", "Zelaya");
var continente162 = new Array('-', "Abia", "Abuja Capital Territory", "Adamawa", "Akwa Ibom", "Anambra", "Bauchi", "Bayelsa", "Benue", "Borno", "Cross River", "Delta", "Ebonyi", "Edo", "Ekiti", "Enugu", "Gombe", "Imo", "Jigawa", "Kaduna", "Kano", "Katsina", "Kebbi", "Kogi", "Kwara", "Lagos", "Nassarawa", "Niger", "Ogun", "Ondo", "Ondo", "Osun", "Oyo", "Plateau", "Rivers", "Rivers", "Sokoto", "Taraba", "Yobe", "Zamfara");
var continente163 = new Array('-', "Niue (General)");
var continente164 = new Array('-', "Norfolk Island (General)");
var continente165 = new Array('-', "Northern Mariana Islands (General)");
var continente166 = new Array('-', "Akershus", "Aust-Agder", "Buskerud", "Finnmark", "Hedmark", "Hordaland", "More og Romsdal", "Nord-Trondelag", "Nordland", "Oppland", "Oslo", "Ostfold", "Rogaland", "Sogn og Fjordane", "Sor-Trondelag", "Telemark", "Troms", "Vest-Agder", "Vestfold");
var continente167 = new Array('-', "Nouvelle-Calédonie");
var continente168 = new Array('-', "Akaroa", "Amuri", "Ashburton", "Bay of Islands", "Bruce", "Buller", "Chatham Islands", "Cheviot", "Clifton", "Clutha", "Cook", "Dannevirke", "Egmont", "Eketahuna", "Ellesmere", "Eltham", "Eyre", "Featherston", "Franklin", "Golden Bay", "Great Barrier Island", "Grey", "Hauraki Plains", "Hawera", "Hawkes Bay", "Heathcote", "Hikurangi", "Hobson", "Hokianga", "Horowhenua", "Hurunui", "Hutt", "Inangahua", "Inglewood", "Kaikoura", "Kairanga", "Kiwitea", "Lake", "Mackenzie", "Malvern", "Manaia", "Manawatu", "Mangonui", "Maniototo", "Marlborough", "Masterton", "Matamata", "Mount Herbert", "Ohinemuri", "Opotiki", "Oroua", "Otamatea", "Otorohanga", "Oxford", "Pahiatua", "Paparua", "Patea", "Piako", "Pohangina", "Raglan", "Rangiora", "Rangitikei", "Rodney", "Rotorua", "Runanga", "Saint Kilda", "Silverpeaks", "Southland", "Stewart Island", "Stratford", "Strathallan", "Taranaki", "Taumarunui", "Taupo", "Tauranga", "Thames-Coromandel", "Tuapeka", "Vincent", "Waiapu", "Waiheke", "Waihemo", "Waikato", "Waikohu", "Waimairi", "Waimarino", "Waimate", "Waimate West", "Waimea", "Waipa", "Waipawa", "Waipukurau", "Wairarapa South", "Wairewa", "Wairoa", "Waitaki", "Waitomo", "Waitotara", "Wallace", "Wanganui", "Waverley", "Westland", "Whakatane", "Whangarei", "Whangaroa", "Woodville");
var continente169 = new Array('-', "Agadez", "Diffa", "Dosso", "Maradi", "Niamey", "Tahoua", "Zinder");
var continente170 = new Array('-', "Ad Dakhiliyah", "Al Batinah", "Al Wusta", "Ash Sharqiyah", "Az Zahirah", "Masqat", "Musandam", "Zufar");
var continente171 = new Array('-', "Azad Kashmir", "Balochistan", "Federally Administered Tribal Areas", "Islamabad", "North-West Frontier", "Northern Areas", "Punjab", "Sindh");
var continente172 = new Array('-', "Palau (General)");
var continente173 = new Array('-', "Palestinian Territory (General)");
var continente174 = new Array('-', "Bocas del Toro", "Chiriqui", "Cocle", "Colon", "Darien", "Herrera", "Los Santos", "Panama", "San Blas", "Veraguas");
var continente175 = new Array('-', "Central", "Chimbu", "East New Britain", "East Sepik", "Eastern Highlands", "Enga", "Gulf", "Madang", "Manus", "Milne Bay", "Morobe", "National Capital", "New Ireland", "North Solomons", "Northern", "Sandaun", "Southern Highlands", "West New Britain", "Western", "Western Highlands");
var continente176 = new Array('-', "Alto Paraguay", "Alto Parana", "Amambay", "Boqueron", "Caaguazu", "Caazapa", "Canindeyu", "Central", "Chaco", "Concepcion", "Cordillera", "Guaira", "Itapua", "Misiones", "Neembucu", "Nueva Asuncion", "Paraguari", "Presidente Hayes", "San Pedro");
var continente177 = new Array('-', "Amazonas", "Ancash", "Apurimac", "Arequipa", "Ayacucho", "Cajamarca", "Callao", "Cusco", "Huancavelica", "Huanuco", "Ica", "Junin", "La Libertad", "Lambayeque", "Lima", "Loreto", "Madre de Dios", "Moquegua", "Pasco", "Piura", "Puno", "San Martin", "Tacna", "Tumbes", "Ucayali");
var continente178 = new Array('-', "Pitcairn (General)");
var continente179 = new Array('-', "Biala Podlaska", "Bialystok", "Bielsko", "Bydgoszcz", "Chelm", "Ciechanow", "Czestochowa", "Dolnoslaskie", "Elblag", "Gdansk", "Gorzow", "Jelenia Gora", "Kalisz", "Katowice", "Kielce", "Konin", "Koszalin", "Krakow", "Krosno", "Kujawsko-Pomorskie", "Legnica", "Leszno", "Lodz", "Lodzkie", "Lomza", "Lubelskie", "Lublin", "Lubuskie", "Malopolskie", "Mazowieckie", "Nowy Sacz", "Olsztyn", "Opole", "Opolskie", "Ostroleka", "Pila", "Piotrkow", "Plock", "Podkarpackie", "Podlaskie", "Pomorskie", "Poznan", "Przemysl", "Radom", "Rzeszow", "Siedlce", "Sieradz", "Skierniewice", "Slaskie", "Slupsk", "Suwalki", "Swietokrzyskie", "Szczecin", "Tarnobrzeg", "Tarnow", "Torun", "Walbrzych", "Warminsko-Mazurskie", "Warszawa", "Wielkopolskie", "Wloclawek", "Wroclaw", "Zachodniopomorskie", "Zamosc", "Zielona Gora");
var continente180 = new Array('-', "Aveiro", "Azores", "Beja", "Braga", "Braganca", "Castelo Branco", "Coimbra", "Evora", "Faro", "Guarda", "Leiria", "Lisboa", "Madeira", "Portalegre", "Porto", "Santarem", "Setubal", "Viana do Castelo", "Vila Real", "Viseu");
var continente181 = new Array('-', "Puerto Rico (General)");
var continente182 = new Array('-', "Ad Dawhah", "Al Ghuwariyah", "Al Jumaliyah", "Al Khawr", "Al Wakrah", "Al Wakrah Municipality", "Ar Rayyan", "Jariyan al Batnah", "Madinat ach Shamal", "Umm Said", "Umm Salal");
var continente183 = new Array('-', "Aberdeen City", "Aberdeenshire", "Angus", "Antrim", "Ards", "Argyll and Bute", "Armagh", "Avon", "Ballymena", "Ballymoney", "Banbridge", "Barking and Dagenham", "Barnet", "Barnsley", "Bath and North East Somerset", "Bedfordshire", "Belfast", "Berkshire", "Bexley", "Birmingham", "Blackburn with Darwen", "Blackpool", "Blaenau Gwent", "Bolton", "Bournemouth", "Bracknell Forest", "Bradford", "Brent", "Bridgend", "Brighton and Hove", "Bristol, City of", "Bromley", "Buckinghamshire", "Bury", "Caerphilly", "Calderdale", "Cambridgeshire", "Camden", "Cardiff", "Carmarthenshire", "Carrickfergus", "Castlereagh", "Central", "Ceredigion", "Cheshire", "Clackmannanshire", "Cleveland", "Clwyd", "Coleraine", "Conwy", "Cookstown", "Cornwall", "Coventry", "Craigavon", "Croydon", "Cumbria", "Darlington", "Denbighshire", "Derby", "Derbyshire", "Derry", "Devon", "Doncaster", "Dorset", "Down", "Dudley", "Dumfries and Galloway", "Dundee City", "Dungannon", "Durham", "Dyfed", "Ealing", "East Ayrshire", "East Dunbartonshire", "East Lothian", "East Renfrewshire", "East Riding of Yorkshire", "East Sussex", "Edinburgh, City of", "Eilean Siar", "Enfield", "Essex", "Falkirk", "Fermanagh", "Fife", "Flintshire", "Gateshead", "Glasgow City", "Gloucestershire", "Grampian", "Greater London", "Greater Manchester", "Greenwich", "Gwent", "Gwynedd", "Hackney", "Halton", "Hammersmith and Fulham", "Hampshire", "Haringey", "Harrow", "Hartlepool", "Havering", "Hereford and Worcester", "Herefordshire", "Hertford", "Highland", "Hillingdon", "Hounslow", "Humberside", "Inverclyde", "Isle of Anglesey", "Isle of Wight", "Islington", "Kensington and Chelsea", "Kent", "Kingston upon Hull, City of", "Kingston upon Thames", "Kirklees", "Knowsley", "Lambeth", "Lancashire", "Larne", "Leeds", "Leicester", "Leicestershire", "Lewisham", "Limavady", "Lincolnshire", "Lisburn", "Liverpool", "London, City of", "Lothian", "Luton", "Magherafelt", "Manchester", "Medway", "Merseyside", "Merthyr Tydfil", "Merton", "Mid Glamorgan", "Middlesbrough", "Midlothian", "Milton Keynes", "Monmouthshire", "Moray", "Moyle", "Neath Port Talbot", "Newcastle upon Tyne", "Newham", "Newport", "Newry and Mourne", "Newtownabbey", "Norfolk", "North Ayrshire", "North Down", "North East Lincolnshire", "North Lanarkshire", "North Lincolnshire", "North Somerset", "North Tyneside", "North Yorkshire", "Northamptonshire", "Northumberland", "Nottingham", "Nottinghamshire", "Oldham", "Omagh", "Orkney", "Oxfordshire", "Pembrokeshire", "Perth and Kinross", "Peterborough", "Plymouth", "Poole", "Portsmouth", "Powys", "Reading", "Redbridge", "Redcar and Cleveland", "Renfrewshire", "Rhondda Cynon Taff", "Richmond upon Thames", "Rochdale", "Rotherham", "Rutland", "Salford", "Sandwell", "Scottish Borders", "The Sefton", "Sheffield", "Shetland Islands", "Shropshire", "Slough", "Solihull", "Somerset", "South Ayrshire", "South Glamorgan", "South Gloucestershire", "South Lanarkshire", "South Tyneside", "South Yorkshire", "Southampton", "Southend-on-Sea", "Southwark", "St. Helens", "Staffordshire", "Stirling", "Stockport", "Stockton-on-Tees", "Stoke-on-Trent", "Strabane", "Strathclyde", "Suffolk", "Sunderland", "Surrey", "Sutton", "Swansea", "Swindon", "Tameside", "Tayside", "Telford and Wrekin", "Thurrock", "Torbay", "Torfaen", "Tower Hamlets", "Trafford", "Tyne and Wear", "Vale of Glamorgan, The", "Wakefield", "Walsall", "Waltham Forest", "Wandsworth", "Warrington", "Warwickshire", "West Berkshire", "West Dunbartonshire", "West Glamorgan", "West Lothian", "West Midlands", "West Sussex", "West Yorkshire", "Westminster", "Wigan", "Wiltshire", "Windsor and Maidenhead", "Wirral", "Wokingham", "Wolverhampton", "Worcestershire", "Wrexham", "York");
var continente184 = new Array('-', "Bamingui-Bangoran", "Bangui", "Basse-Kotto", "Haut-Mbomou", "Haute-Kotto", "Kemo", "Lobaye", "Mambere-Kadei", "Mbomou", "Nana-Grebizi", "Nana-Mambere", "Ombella-Mpoko", "Ouaka", "Ouham", "Ouham-Pende", "Sangha-Mbaere", "Vakaga");
var continente185 = new Array('-', "Blansko", "Breclav", "Hlavni Mesto Praha", "Hradec Kralove", "Jablonec nad Nisou", "Jiein", "Jihlava", "Jihocesky Kraj", "Jihomoravsky Kraj", "Karlovarsky Kraj", "Kolin", "Kralovehradecky Kraj", "Liberec", "Liberecky Kraj", "Melnik", "Mlada Boleslav", "Moravskoslezsky Kraj", "Nachod", "Nymburk", "Olomoucky Kraj", "Pardubice", "Pardubicky Kraj", "Plzensky Kraj", "Semily", "Stredocesky Kraj", "Trutnov", "Ustecky Kraj", "Vysocina", "Zlinsky Kraj");
var continente186 = new Array('-', "Congo, The Democratic Republic of the (General)");
var continente187 = new Array('-', "Azua", "Baoruco", "Barahona", "Dajabon", "Distrito Nacional", "Duarte", "El Seibo", "Elias Pina", "Espaillat", "Hato Mayor", "Independencia", "La Altagracia", "La Romana", "La Vega", "Maria Trinidad Sanchez", "Monsenor Nouel", "Monte Cristi", "Monte Plata", "Pedernales", "Peravia", "Puerto Plata", "Salcedo", "Samana", "San Cristobal", "San Juan", "San Pedro De Macoris", "Sanchez Ramirez", "Santiago", "Santiago Rodriguez", "Valverde");
var continente188 = new Array('-', "Ardabil", "Azarbayjan-e Bakhtari", "Azarbayjan-e Khavari", "Bakhtaran", "Bushehr", "Chahar Mahall va Bakhtiari", "East Azarbaijan", "Esfahan", "Fars", "Gilan", "Golestan", "Hamadan", "Hormozgan", "Ilam", "Kerman", "Khorasan", "Khuzestan", "Kohkiluyeh va Buyer Ahmadi", "Kordestan", "Lorestan", "Markazi", "Markazi", "Mazandaran", "Mazandaran", "Qazvin", "Qom", "Semnan", "Sistan va Baluchestan", "Tehran", "Yazd", "Zanjan", "Zanjan");
var continente189 = new Array('-', "Butare", "Byumba", "Cyangugu", "Gikongoro", "Gisenyi", "Gitarama", "Kibungo", "Kibuye", "Kigali", "Ruhengeri");
var continente190 = new Array('-', "Alba", "Arad", "Arges", "Bacau", "Bihor", "Bistrita-Nasaud", "Botosani", "Braila", "Brasov", "Bucuresti", "Buzau", "Calarasi", "Caras-Severin", "Cluj", "Constanta", "Covasna", "Dambovita", "Dolj", "Galati", "Giurgiu", "Gorj", "Harghita", "Hunedoara", "Ialomita", "Iasi", "Ilfov", "Maramures", "Mehedinti", "Mures", "Neamt", "Olt", "Prahova", "Salaj", "Satu Mare", "Sibiu", "Suceava", "Teleorman", "Timis", "Tulcea", "Valcea", "Vaslui", "Vrancea");
var continente191 = new Array('-', "Adygeya, Republic of", "Aginsky Buryatsky AO", "Altaisky krai", "Amur", "Arkhangel sk", "Astrakhan", "Bashkortostan", "Belgorod", "Bryansk", "Buryat", "Chechnya", "Chechnya Republic", "Chelyabinsk", "Chita", "Chukot", "Chuvashia", "Dagestan", "Evenk", "Gorno-Altay", "Ingush", "Irkutsk", "Ivanovo", "JA", "Kabardin-Balkar", "Kaliningrad", "Kalmyk", "Kaluga", "Kamchatka", "Karachay-Cherkess", "Karelia", "Kemerovo", "Khabarovsk", "Khakass", "Khanty-Mansiy", "Kirov", "Komi", "Komi-Permyak", "Koryak", "Kostroma", "Krasnodar", "Krasnoyarsk", "Kurgan", "Kursk", "Leningrad", "Lipetsk", "Magadan", "Mariy-El", "Mordovia", "Moscow City", "Moskva", "Murmansk", "Nenets", "Nizhegorod", "North Ossetia", "Novgorod", "Novosibirsk", "Omsk", "Orel", "Orenburg", "Penza", "Perm", "Primor ye", "Pskov", "Rostov", "Ryazan", "Saint Petersburg City", "Sakha", "Sakhalin", "Samara", "Saratov", "Smolensk", "Stavropol", "Sverdlovsk", "Tambovskaya oblast", "Tatarstan", "Taymyr", "Tomsk", "Tula", "Tuva", "Tver", "Tyumen", "Udmurt", "Ul yanovsk", "Ust-Orda Buryat", "Vladimir", "Volgograd", "Vologda", "Voronezh", "Yamal-Nenets", "Yaroslavl", "Yevrey");
var continente192 = new Array('-', "Christ Church Nichola Town", "Saint Anne Sandy Point", "Saint George Basseterre", "Saint George Gingerland", "Saint James Windward", "Saint John Capisterre", "Saint John Figtree", "Saint Mary Cayon", "Saint Paul Capisterre", "Saint Paul Charlestown", "Saint Peter Basseterre", "Saint Thomas Lowland", "Saint Thomas Middle Island", "Trinity Palmetto Point");
var continente193 = new Array('-', "Saint-Pierre et Miquelon Collectivité Territoriale");
var continente194 = new Array('-', "Aiga-i-le-Tai", "Atua", "Fa", "Gaga", "Gagaifomauga", "Palauli", "Satupa", "Tuamasaga", "Va", "Vaisigano");
var continente195 = new Array('-', "Acquaviva", "Borgo Maggiore", "Chiesanuova", "Domagnano", "Faetano", "Fiorentino", "Monte Giardino", "San Marino", "Serravalle");
var continente196 = new Array('-', "Charlotte", "Grenadines", "Saint Andrew", "Saint David", "Saint George", "Saint Patrick");
var continente197 = new Array('-', "Ascension", "Saint Helena", "Tristan da Cunha");
var continente198 = new Array('-', "Anse-la-Raye", "Castries", "Choiseul", "Dauphin", "Dennery", "Gros-Islet", "Laborie", "Micoud", "Praslin", "Soufriere", "Vieux-Fort");
var continente199 = new Array('-', "Principe", "Sao Tome");
var continente200 = new Array('-', "Dakar", "Diourbel", "Fatick", "Kaolack", "Kolda", "Louga", "Saint-Louis", "Saint-Louis Region", "Tambacounda", "Thies", "Ziguinchor");
var continente201 = new Array('-', "Kosovo", "Vojvodina");
var continente202 = new Array('-', "Anse Boileau", "Anse Etoile", "Anse Louis", "Anse Royale", "Anse aux Pins", "Baie Lazare", "Baie Sainte Anne", "Beau Vallon", "Bel Air", "Bel Ombre", "Cascade", "Glacis", "Grand Anse", "Grand Anse", "La Digue", "La Riviere Anglaise", "Mont Buxton", "Mont Fleuri", "Plaisance", "Pointe La Rue", "Port Glaud", "Saint Louis", "Takamaka");
var continente203 = new Array('-', "Eastern", "Northern", "Southern", "Western Area");
var continente204 = new Array('-', "Singapore (General)");
var continente205 = new Array('-', "Al Hasakah", "Al Ladhiqiyah", "Al Qunaytirah", "Ar Raqqah", "As Suwayda", "Dar", "Dayr az Zawr", "Dimashq", "Halab", "Hamah", "Hims", "Idlib", "Rif Dimashq", "Tartus");
var continente206 = new Array('-', "Bakool", "Banaadir", "Bari", "Bay", "Galguduud", "Gedo", "Hiiraan", "Jubbada Dhexe", "Jubbada Hoose", "Mudug", "Nugaal", "Sanaag", "Shabeellaha Dhexe", "Shabeellaha Hoose", "Togdheer", "Woqooyi Galbeed");
var continente207 = new Array('-', "Amparai", "Anuradhapura", "Badulla", "Batticaloa", "Central Province", "Colombo", "Galle", "Gampaha", "Hambantota", "Jaffna", "Kalutara", "Kandy", "Kegalla", "Kurunegala", "Mannar", "Matale", "Matara", "Moneragala", "Mullaittivu", "North Central Province", "North Eastern Province", "North Western Province", "Nuwara Eliya", "Polonnaruwa", "Puttalam", "Ratnapura", "Sabaragamuwa Province", "Southern Province", "Trincomalee", "Uva Province", "Vavuniya", "Western Province");
var continente208 = new Array('-', "Hhohho", "Lubombo", "Manzini", "Praslin", "Shiselweni");
var continente209 = new Array('-', "Eastern Cape", "Free State", "Gauteng", "KwaZulu-Natal", "Limpopo", "Mpumalanga", "North-West", "Northern Cape", "Western Cape");
var continente210 = new Array('-', "Al Istiwaiyah", "Al Khartum", "Al Wusta", "Ash Shamaliyah", "Ash Sharqiyah", "Bahr al Ghazal", "Darfur", "Kurdufan");
var continente211 = new Array('-', "Alvsborgs Lan", "Blekinge Lan", "Dalarnas Lan", "Gavleborgs Lan", "Goteborgs och Bohus Lan", "Gotlands Lan", "Hallands Lan", "Jamtlands Lan", "Jonkopings Lan", "Kalmar Lan", "Kristianstads Lan", "Kronobergs Lan", "Malmohus Lan", "Norrbottens Lan", "Orebro Lan", "Ostergotlands Lan", "Skane Lan", "Skaraborgs Lan", "Sodermanlands Lan", "Stockholms Lan", "Uppsala Lan", "Varmlands Lan", "Vasterbottens Lan", "Vasternorrlands Lan", "Vastmanlands Lan", "Vastra Gotaland");
var continente212 = new Array('-', "Aargau", "Ausser-Rhoden", "Basel-Landschaft", "Basel-Stadt", "Bern", "Fribourg", "Geneve", "Glarus", "Graubunden", "Inner-Rhoden", "Jura", "Luzern", "Neuchatel", "Nidwalden", "Obwalden", "Sankt Gallen", "Schaffhausen", "Schwyz", "Solothurn", "Thurgau", "Ticino", "Uri", "Valais", "Vaud", "Zug", "Zurich");
var continente213 = new Array('-', "Brokopondo", "Commewijne", "Coronie", "Marowijne", "Nickerie", "Para", "Paramaribo", "Saramacca", "Sipaliwini", "Wanica");
var continente214 = new Array('-', "Svalbard and Jan Mayen (General)");
var continente215 = new Array('-', "Ang Thong", "Buriram", "Chachoengsao", "Chai Nat", "Chaiyaphum", "Chanthaburi", "Chiang Mai", "Chiang Rai", "Chon Buri", "Chumphon", "Kalasin", "Kamphaeng Phet", "Kanchanaburi", "Khon Kaen", "Krabi", "Krung Thep", "Lampang", "Lamphun", "Loei", "Lop Buri", "Mae Hong Son", "Maha Sarakham", "Mukdahan", "Nakhon Nayok", "Nakhon Pathom", "Nakhon Phanom", "Nakhon Ratchasima", "Nakhon Sawan", "Nakhon Si Thammarat", "Nan", "Narathiwat", "Nong Khai", "Nonthaburi", "Pathum Thani", "Pattani", "Phangnga", "Phatthalung", "Phayao", "Phetchabun", "Phetchaburi", "Phichit", "Phitsanulok", "Phra Nakhon Si Ayutthaya", "Phrae", "Phuket", "Prachin Buri", "Prachuap Khiri Khan", "Ranong", "Ratchaburi", "Rayong", "Roi Et", "Sakon Nakhon", "Samut Prakan", "Samut Sakhon", "Samut Songkhram", "Saraburi", "Satun", "Sing Buri", "Sisaket", "Songkhla", "Sukhothai", "Suphan Buri", "Surat Thani", "Surin", "Tak", "Trang", "Trat", "Ubon Ratchathani", "Ubon Ratchathani Province", "Udon Thani", "Uthai Thani", "Uttaradit", "Yala", "Yasothon");
var continente216 = new Array('-', "Fu-chien", "Kao-hsiung", "T ai-pei", "T ai-wan");
var continente217 = new Array('-', "Khatlon", "Kuhistoni Badakhshon", "Sughd");
var continente218 = new Array('-', "Arusha", "Arusha Region", "Dar es Salaam", "Dodoma", "Iringa", "Kagera", "Kigoma", "Kilimanjaro", "Lindi", "Mara", "Mbeya", "Morogoro", "Mtwara", "Mwanza", "Pemba North", "Pemba South", "Pwani", "Rukwa", "Ruvuma", "Shinyanga", "Singida", "Tabora", "Tanga", "Zanzibar Central", "Zanzibar North", "Zanzibar Urban");
var continente219 = new Array('-', "Amlame", "Aneho", "Atakpame", "Badou", "Bafilo", "Bassar", "Dapaong", "Kante", "Klouto", "Kpagouda", "Lama-Kara", "Lome", "Mango", "Maritime Region", "Niamtougou", "Notse", "Sotouboua", "Tabligbo", "Tchamba", "Tchaoudjo", "Tsevie", "Vogan");
var continente220 = new Array('-', "Ha", "Tongatapu", "Vava");
var continente221 = new Array('-', "Tokelau (General)");
var continente222 = new Array('-', "Arima", "Caroni", "Mayaro", "Nariva", "Port-of-Spain", "Saint Andrew", "Saint David", "Saint George", "Saint Patrick", "San Fernando", "Tobago", "Victoria");
var continente223 = new Array('-', "Ahal", "Balkan", "Dashoguz", "Lebap", "Mary");
var continente224 = new Array('-', "Adana", "Adiyaman", "Afyon", "Agri", "Aksaray", "Amasya", "Ankara", "Antalya", "Ardahan", "Artvin", "Aydin", "Balikesir", "Bartin", "Batman", "Bayburt", "Bilecik", "Bingol", "Bitlis", "Bolu", "Burdur", "Bursa", "Canakkale", "Cankiri", "Corum", "Denizli", "Diyarbakir", "Duzce", "Edirne", "Elazig", "Erzincan", "Erzurum", "Eskisehir", "Gaziantep", "Giresun", "Gumushane", "Hakkari", "Hatay", "Icel", "Igdir", "Isparta", "Istanbul", "Izmir", "Kahramanmaras", "Karabuk", "Karaman", "Kars", "Kastamonu", "Kayseri", "Kilis", "Kirikkale", "Kirklareli", "Kirsehir", "Kocaeli", "Konya", "Kutahya", "Malatya", "Manisa", "Mardin", "Mugla", "Mus", "Nevsehir", "Nigde", "Ordu", "Osmaniye", "Rize", "Sakarya", "Samsun", "Sanliurfa", "Siirt", "Sinop", "Sirnak", "Sivas", "Tekirdag", "Tokat", "Trabzon", "Tunceli", "Usak", "Van", "Yalova", "Yozgat", "Zonguldak");
var continente225 = new Array('-', "Tuvalu (General)");
var continente226 = new Array('-', "Al Mahdiyah", "Al Munastir", "Al Qasrayn", "Al Qayrawan", "Ariana", "Ariana Governorate", "Bajah", "Banzart", "Bin", "Jundubah", "Kef", "Madanin", "Manouba", "Nabul", "Qabis", "Qafsah", "Qibili", "Safaqis", "Sidi Bu Zayd", "Silyanah", "Susah", "Tatawin", "Tawzar", "Tunis", "Zaghwan");
var continente227 = new Array('-', "Cherkas ka Oblast", "Chernihivska Oblast", "Chernivets ka Oblast", "Dnipropetrovs ka Oblast", "Donets ka Oblast", "Ivano-Frankivs ka Oblast", "Kharkivs ka Oblast", "Khersons ka Oblast", "Khmel nyts ka Oblast", "Kirovohrads ka Oblast", "Krym", "Kyyiv", "Kyyivs ka Oblast", "L vivs ka Oblast", "Luhans ka Oblast", "Mykolayivs ka Oblast", "Odes ka Oblast", "Poltavs ka Oblast", "Rivnens ka Oblast", "Sevastopol", "Sums ka Oblast", "Ternopils ka Oblast", "Vinnyts ka Oblast", "Volyns ka Oblast", "Zakarpats ka Oblast", "Zaporiz ka Oblast", "Zhytomyrs ka Oblast");
var continente228 = new Array('-', "Adjumani", "Arua", "Bugiri", "Busia", "Busoga", "Central", "Eastern", "Iganga", "Kabarole", "Kaberamaido", "Kampala", "Kamwenge", "Kanungu", "Karamoja", "Katakwi", "Kayunga", "Kitgum", "Kyenjojo", "Mayuge", "Mbale", "Moroto", "Mpigi", "Mukono", "Nakapiripirit", "Nakasongola", "Nile", "North Buganda", "Northern", "Pader", "Rukungiri", "Sembabule", "Sironko", "Soroti", "South Buganda", "Southern", "Wakiso", "Western", "Yumbe");
var continente229 = new Array('-', "United States Minor Outlying Islands (General)");
var continente230 = new Array('-', "Artigas", "Canelones", "Cerro Largo", "Colonia", "Durazno", "Flores", "Florida", "Lavalleja", "Maldonado", "Montevideo", "Paysandu", "Rio Negro", "Rivera", "Rocha", "Salto", "San Jose", "Soriano", "Tacuarembo", "Treinta y Tres");
var continente231 = new Array('-', "Andijon", "Bukhoro", "Farghona", "Jizzakh", "Khorazm", "Namangan", "Nawoiy", "Qashqadaryo", "Qoraqalpoghiston", "Samarqand", "Sirdaryo", "Sirdaryo Province", "Surkhondaryo", "Toshkent");
var continente232 = new Array('-', "Ambrym", "Aoba", "Efate", "Epi", "Malakula", "Malampa", "Paama", "Penama", "Pentecote", "Sanma", "Shefa", "Shepherd", "Tafea", "Torba");
var continente233 = new Array('-', "Amazonas", "Anzoategui", "Apure", "Aragua", "Barinas", "Bolivar", "Carabobo", "Cojedes", "Delta Amacuro", "Dependencias Federales", "Distrito Federal", "Falcon", "Guarico", "Lara", "Merida", "Miranda", "Monagas", "Nueva Esparta", "Portuguesa", "Sucre", "Tachira", "Trujillo", "Vargas", "Yaracuy", "Zulia");
var continente234 = new Array('-', "An Giang", "An Giang Province", "Ba Ria-Vung Tau", "Bac Thai", "Ben Tre", "Binh Dinh", "Binh Thuan", "Binh Tri Thien", "Can Tho", "Cao Bang", "Cuu Long", "Dac Lac", "Dac Lak Province", "Dong Nai", "Dong Nai", "Dong Thap", "Gia Lai", "Gia Lai-Kon Tum", "Ha Bac", "Ha Giang", "Ha Nam Ninh", "Ha Noi", "Ha Son Binh", "Ha Tay", "Ha Tinh", "Ha Tuyen", "Hai Hung", "Hai Phong", "Hanoi", "Hau Giang", "Ho Chi Minh", "Hoa Binh", "Hung Yên Province", "Hà Nam Province", "H?i Duong Province", "H? Chí Minh Municipality", "Khanh Hoa", "Kien Giang", "Ki?n Giang Province", "Kon Tum", "Lai Chau", "Lam Dong", "Lang Son", "Lao Cai", "Long An", "Minh Hai", "Minh H?i T?nh", "Nam Ha", "Nghe An", "Nghe Tinh", "Nghia Binh", "Ninh Binh", "Ninh Thuan", "Phu Khanh", "Phu Yen", "Quang Binh", "Quang Nam-Da Nang", "Quang Ngai", "Quang Ninh", "Quang Tri", "Qu?ng Nam Province", "Soc Trang", "Son La", "Song Be", "Tay Ninh", "Thai Binh", "Thanh Hoa", "Thua Thien", "Thái Nguyên Province", "Tien Giang", "Tra Vinh", "Tuyen Quang", "Vinh Long", "Vinh Phu", "Vinh Phú T?nh", "Yen Bai", "Ð?ng Tháp Province");
var continente235 = new Array('-', "Virgin Islands, British (General)");
var continente236 = new Array('-', "Virgin Islands, U.S. (General)");
var continente237 = new Array('-', "Western Sahara (General)");
var continente238 = new Array('-', "Abyan", "Adan", "Adan Governorate", "Al Bayda", "Al Hudaydah", "Al Jawf", "Al Mahrah", "Al Mahwit", "Dhamar", "Hadramawt", "Hajjah", "Ibb", "Lahij", "Ma rib", "Sa", "San", "Shabwah", "Ta", "Taizz Governorate");
var continente239 = new Array('-', "Bandundu", "Bas-Congo", "Equateur", "Kasai-Occidental", "Kasai-Oriental", "Katanga", "Kinshasa", "Kivu", "Maniema", "Nord-Kivu", "Orientale", "Sud-Kivu");
var continente240 = new Array('-', "Central", "Copperbelt", "Eastern", "Luapula", "Lusaka", "North-Western", "Northern", "Southern", "Western");
var continente241 = new Array('-', "Bulawayo", "Harare", "Manicaland", "Mashonaland Central", "Mashonaland East", "Mashonaland West", "Masvingo", "Matabeleland North", "Matabeleland South", "Midlands");


//función que cambia las provincias del select de provincias en función del Country que se haya escogido en el select de continente.
function cambia_Country(){
  //tomo el valor del select del continente elegido
  var Country
  Country = document.f1.Country[document.f1.Country.selectedIndex].value
  //miro a ver si el continente está definido
  if (Country != 0) {
    //si estaba definido, entonces coloco las opciones de la provincia correspondiente.
    //selecciono el array de provincia adecuado
    mis_provincias=eval("continente" + Country)
    //calculo el numero de provincias
    num_provincias = mis_provincias.length
    //marco el número de provincias en el select
    document.f1.State.length = num_provincias
    //para cada provincia del array, la introduzco en el select
    for(i=0;i<num_provincias;i++){
       document.f1.State.options[i].value=mis_provincias[i]
       document.f1.State.options[i].text=mis_provincias[i]
    } 
  }else{
    //si no había provincia seleccionada, elimino las provincias del select
    document.f1.State.length = 1
    //coloco un guión en la única opción que he dejado
    document.f1.State.options[0].value = "-"
      document.f1.State.options[0].text = "-"
  }
  //marco como seleccionada la opción primera de provincia
  document.f1.State.options[0].selected = true
}
</script>
</body>
</html>
<!--
                    d8888   888          d8b           888     888 
                   d88888   888          Y8P           888     888 
                  d88P888   888                        888     888 
                 d88P 888   888 .d88b.  8888 .d88b.    Y88b   d88P 
                d88P  888   888d8P  Y8b "888d88""88b    Y88b d88P  
               d88P   888   88888888888  888888  888     Y88o88P   
              d8888888888   888Y8b.      888Y88..88P      Y888P    
             d88P     888   888 "Y8888   888 "Y88P"        Y8P     
                                         888                       
                                        d88P                       
                                      888P"                ____
                                                       .~))>>
                                                      .~)>>
                                                    .~))))>>>
                                                  .~))>>             ___
                                                .~))>>)))>>      .-~))>>  
                                              .~)))))>>       .-~))>>)>
                                            .~)))>>))))>>  .-~)>>)>
                        )                 .~))>>))))>>  .-~)))))>>)>
                     ( )@@*)             //)>))))))  .-~))))>>)>
                   ).@(@@               //))>>))) .-~))>>)))))>>)>
                 (( @.@).              //))))) .-~)>>)))))>>)>
               ))  )@@*.@@ )          //)>))) //))))))>>))))>>)>
            ((  ((@@@.@@             |/))))) //)))))>>)))>>)>
           )) @@*. )@@ )   (\_(\-\b  |))>)) //)))>>)))))))>>)>
         (( @@@(.@(@ .    _/`-`  ~|b |>))) //)>>)))))))>>)>
          )* @@@ )@*     (@) (@)  /\b|))) //))))))>>))))>>
        (( @. )@( @ .   _/       /  \b)) //))>>)))))>>>_._
         )@@ (@@*)@@.  (6,   6) / ^  \b)//))))))>>)))>>   ~~-.
      ( @jgs@@. @@@.*@_ ~^~^~, /\  ^  \b/)>>))))>>      _.     `,
       ((@@ @@@*.(@@ .   \^^^/' (  ^   \b)))>>        .'         `,
        ((@@).*@@ )@ )    `-'   ((   ^  ~)_          /             `,
          (@@. (@@ ).           (((   ^    `\        |               `.
            (*.@*              / ((((        \        \      .         `.
                              /   (((((  \    \    _.-~\     Y,         ;
                             /   / (((((( \    \.-~   _.`" _.-~`,       ;
                            /   /   `(((((()    )    (((((~      `,     ;
                          _/  _/      `"""/   /'                  ;     ;
                      _.-~_.-~           /  /'                _.-~   _.'
                    ((((~~              / /'              _.-~ __._-~
                                       ((((          __.-~ _.-~
                                                   .'   .~~
                                                   :_,'
                                                   ~~~~~ -->