    <div class="col-md-12 left-block-side add-pid">
        <div class="row">
           <div class="col-xl-12 col-lg-6 col-md-6 col-sm-6 col-12 border-design-bottom position-relative">
              <div class="inner">
                 <div class="cart_inner px-4">
                    <h3 class="heading1 fw-bold fs-4 py-2">Choose a Domain...</h3>
                    @if(Session::get('cart')) 
                    <div class="form-check my-3 fw-light radio_b p-3 choose_domain_option active" data-choose_option="alreay_configure"> 
                       <!--<input class="form-check-input" type="radio" name="domain_name" checked="checked">-->
                       <div class="d-flex">
                       <div class="me-3 circle-check">
                           <i class="fa fa-check" aria-hidden="true"></i>
                       </div>
                       <label class="form-check-label  fw-light fs-normal" for="flexRadioDefault1">Use a domain already in my shopping cart </label>
                       </div>
                       <div class="domain-fields-com already_cart_domain mt-3">
                          <form action="#" method="POST" id="already_domain_config" class="d-flex">
                              @csrf
                              <input type="hidden" name="pid" value="{{ app('request')->input('pid') }}
">
                             <select class="form-select fw-light swiss_select" name="domain_name">
                                @foreach(Session::get('cart') as $key => $cart)
                                    @php $domain_data = $cart['domain_data']; @endphp
                                    @if($domain_data['domain_register_type'] == "domain")
                                        @if($domain_data['is_hosting'] == "Yes")
                                        @else
                                            <option value="{{ $domain_data['domain_name'] }}">{{ $domain_data['domain_name'] }}</option>
                                        @endif
                                    @endif
                                @endforeach
                             </select>
                             <div class="checkout_button ms-5">
                                <button type="submit" class="btn btn-primary already_domain_config_submit">Use</button>
                             </div>
                          </form>
                       </div>
                    </div>
                    @endif
                    <div class="form-check my-3 fw-light radio_b p-3 choose_domain_option @if(Session::get('cart')) @else active @endif" data-choose_option="register">
                       <div class="d-flex">
                       <div class="me-3 circle-check">
                           <i class="fa fa-check" aria-hidden="true"></i>
                       </div>
                       <label class="form-check-label fw-light fs-normal" for="flexRadioDefault1">Register a new domain</label>
                       </div>
                       <div class="domain-fields-com register_domain mt-3"  @if(Session::get('cart')) style="display: none" @endif>
                          <form action="#" method="POST" id="config_domain_search" class="d-flex" enctype="multipart/form-data">
                                @csrf
                             <div class="input-group flex-nowrap bg-light">
                                <span class="input-group-text fw-light">www.</span>
                                <input type="text" class="form-control w-50" name="domain_name" value="">
                             </div>
                             <select class="form-select fw-light swiss_select ms-3" name="domain_tld">
                                <option value=".com">.com</option>
                                <option value=".net">.net</option>
                                <option value=".org">.org</option>
                                <option value=".ch">.ch</option>
                                <option value=".us">.us</option>
                                <option value=".me">.me</option>
                                <option value=".blog">.blog</option>
                                <option value=".ngo">.ngo</option>
                                <option value=".ong">.ong</option>
                                <option value=".info">.info</option>
                                <option value=".la">.la</option>
                                <option value=".asia">.asia</option>
                                <option value=".mobi">.mobi</option>
                                <option value=".biz">.biz</option>
                                <option value=".co.uk">.co.uk</option>
                                <option value=".uk">.uk</option>
                                <option value=".org.uk">.org.uk</option>
                                <option value=".tw">.tw</option>
                                <option value=".com.tw">.com.tw</option>
                                <option value=".org.tw">.org.tw</option>
                                <option value=".idv.tw">.idv.tw</option>
                                <option value=".ca">.ca</option>
                                <option value=".cn">.cn</option>
                                <option value=".eu">.eu</option>
                                <option value=".name">.name</option>
                                <option value=".cc">.cc</option>
                                <option value=".ac">.ac</option>
                                <option value=".io">.io</option>
                                <option value=".sh">.sh</option>
                                <option value=".tv">.tv</option>
                                <option value=".bz">.bz</option>
                                <option value=".nu">.nu</option>
                                <option value=".ws">.ws</option>
                                <option value=".com.cn">.com.cn</option>
                                <option value=".net.cn">.net.cn</option>
                                <option value=".org.cn">.org.cn</option>
                                <option value=".de">.de</option>
                                <option value=".be">.be</option>
                                <option value=".tc">.tc</option>
                                <option value=".vg">.vg</option>
                                <option value=".ms">.ms</option>
                                <option value=".cm">.cm</option>
                                <option value=".gs">.gs</option>
                                <option value=".jp">.jp</option>
                                <option value=".net.nz">.net.nz</option>
                                <option value=".co.nz">.co.nz</option>
                                <option value=".org.nz">.org.nz</option>
                                <option value=".com.mx">.com.mx</option>
                                <option value=".br.com">.br.com</option>
                                <option value=".cn.com">.cn.com</option>
                                <option value=".jpn.com">.jpn.com</option>
                                <option value=".eu.com">.eu.com</option>
                                <option value=".uk.com">.uk.com</option>
                                <option value=".uk.net">.uk.net</option>
                                <option value=".us.com">.us.com</option>
                                <option value=".co.com">.co.com</option>
                                <option value=".com.de">.com.de</option>
                                <option value=".ar.com">.ar.com</option>
                                <option value=".pw">.pw</option>
                                <option value=".uy.com">.uy.com</option>
                                <option value=".hu.com">.hu.com</option>
                                <option value=".no.com">.no.com</option>
                                <option value=".qc.com">.qc.com</option>
                                <option value=".ru.com">.ru.com</option>
                                <option value=".sa.com">.sa.com</option>
                                <option value=".shop">.shop</option>
                                <option value=".se.com">.se.com</option>
                                <option value=".se.net">.se.net</option>
                                <option value=".za.com">.za.com</option>
                                <option value=".tel">.tel</option>
                                <option value=".abogado">.abogado</option>
                                <option value=".accountant">.accountant</option>
                                <option value=".academy">.academy</option>
                                <option value=".accountants">.accountants</option>
                                <option value=".actor">.actor</option>
                                <option value=".adult">.adult</option>
                                <option value=".agency">.agency</option>
                                <option value=".airforce">.airforce</option>
                                <option value=".am">.am</option>
                                <option value=".radio.am">.radio.am</option>
                                <option value=".apartments">.apartments</option>
                                <option value=".archi">.archi</option>
                                <option value=".army">.army</option>
                                <option value=".associates">.associates</option>
                                <option value=".art">.art</option>
                                <option value=".at">.at</option>
                                <option value=".attorney">.attorney</option>
                                <option value=".audio">.audio</option>
                                <option value=".band">.band</option>
                                <option value=".auto">.auto</option>
                                <option value=".bar">.bar</option>
                                <option value=".barcelona">.barcelona</option>
                                <option value=".bargains">.bargains</option>
                                <option value=".bayern">.bayern</option>
                                <option value=".beer">.beer</option>
                                <option value=".berlin">.berlin</option>
                                <option value=".best">.best</option>
                                <option value=".bet">.bet</option>
                                <option value=".bid">.bid</option>
                                <option value=".bike">.bike</option>
                                <option value=".bingo">.bingo</option>
                                <option value=".bio">.bio</option>
                                <option value=".black">.black</option>
                                <option value=".blackfriday">.blackfriday</option>
                                <option value=".blue">.blue</option>
                                <option value=".boston">.boston</option>
                                <option value=".boutique">.boutique</option>
                                <option value=".build">.build</option>
                                <option value=".builders">.builders</option>
                                <option value=".business">.business</option>
                                <option value=".buzz">.buzz</option>
                                <option value=".cab">.cab</option>
                                <option value=".cafe">.cafe</option>
                                <option value=".cam">.cam</option>
                                <option value=".camp">.camp</option>
                                <option value=".capital">.capital</option>
                                <option value=".car">.car</option>
                                <option value=".cards">.cards</option>
                                <option value=".care">.care</option>
                                <option value=".careers">.careers</option>
                                <option value=".cars">.cars</option>
                                <option value=".casa">.casa</option>
                                <option value=".cash">.cash</option>
                                <option value=".casino">.casino</option>
                                <option value=".catering">.catering</option>
                                <option value=".center">.center</option>
                                <option value=".ceo">.ceo</option>
                                <option value=".chat">.chat</option>
                                <option value=".cheap">.cheap</option>
                                <option value=".christmas">.christmas</option>
                                <option value=".church">.church</option>
                                <option value=".city">.city</option>
                                <option value=".claims">.claims</option>
                                <option value=".cleaning">.cleaning</option>
                                <option value=".click">.click</option>
                                <option value=".clinic">.clinic</option>
                                <option value=".clothing">.clothing</option>
                                <option value=".cloud">.cloud</option>
                                <option value=".club">.club</option>
                                <option value=".co">.co</option>
                                <option value=".com.co">.com.co</option>
                                <option value=".net.co">.net.co</option>
                                <option value=".nom.co">.nom.co</option>
                                <option value=".coach">.coach</option>
                                <option value=".codes">.codes</option>
                                <option value=".coffee">.coffee</option>
                                <option value=".college">.college</option>
                                <option value=".de.com">.de.com</option>
                                <option value=".gr.com">.gr.com</option>
                                <option value=".community">.community</option>
                                <option value=".company">.company</option>
                                <option value=".computer">.computer</option>
                                <option value=".condos">.condos</option>
                                <option value=".construction">.construction</option>
                                <option value=".consulting">.consulting</option>
                                <option value=".contractors">.contractors</option>
                                <option value=".cooking">.cooking</option>
                                <option value=".cool">.cool</option>
                                <option value=".country">.country</option>
                                <option value=".courses">.courses</option>
                                <option value=".credit">.credit</option>
                                <option value=".creditcard">.creditcard</option>
                                <option value=".cricket">.cricket</option>
                                <option value=".cruises">.cruises</option>
                                <option value=".cymru">.cymru</option>
                                <option value=".dance">.dance</option>
                                <option value=".date">.date</option>
                                <option value=".auction">.auction</option>
                                <option value=".camera">.camera</option>
                                <option value=".coupons">.coupons</option>
                                <option value=".dating">.dating</option>
                                <option value=".deals">.deals</option>
                                <option value=".degree">.degree</option>
                                <option value=".delivery">.delivery</option>
                                <option value=".democrat">.democrat</option>
                                <option value=".dental">.dental</option>
                                <option value=".dentist">.dentist</option>
                                <option value=".desi">.desi</option>
                                <option value=".design">.design</option>
                                <option value=".diamonds">.diamonds</option>
                                <option value=".diet">.diet</option>
                                <option value=".digital">.digital</option>
                                <option value=".direct">.direct</option>
                                <option value=".directory">.directory</option>
                                <option value=".discount">.discount</option>
                                <option value=".doctor">.doctor</option>
                                <option value=".dog">.dog</option>
                                <option value=".download">.download</option>
                                <option value=".earth">.earth</option>
                                <option value=".education">.education</option>
                                <option value=".email">.email</option>
                                <option value=".energy">.energy</option>
                                <option value=".engineer">.engineer</option>
                                <option value=".engineering">.engineering</option>
                                <option value=".enterprises">.enterprises</option>
                                <option value=".equipment">.equipment</option>
                                <option value=".es">.es</option>
                                <option value=".com.es">.com.es</option>
                                <option value=".nom.es">.nom.es</option>
                                <option value=".org.es">.org.es</option>
                                <option value=".estate">.estate</option>
                                <option value=".eus">.eus</option>
                                <option value=".events">.events</option>
                                <option value=".exchange">.exchange</option>
                                <option value=".expert">.expert</option>
                                <option value=".exposed">.exposed</option>
                                <option value=".express">.express</option>
                                <option value=".fail">.fail</option>
                                <option value=".faith">.faith</option>
                                <option value=".family">.family</option>
                                <option value=".fans">.fans</option>
                                <option value=".farm">.farm</option>
                                <option value=".fashion">.fashion</option>
                                <option value=".film">.film</option>
                                <option value=".finance">.finance</option>
                                <option value=".financial">.financial</option>
                                <option value=".fish">.fish</option>
                                <option value=".fishing">.fishing</option>
                                <option value=".fit">.fit</option>
                                <option value=".fitness">.fitness</option>
                                <option value=".flights">.flights</option>
                                <option value=".florist">.florist</option>
                                <option value=".flowers">.flowers</option>
                                <option value=".fm">.fm</option>
                                <option value=".radio.fm">.radio.fm</option>
                                <option value=".football">.football</option>
                                <option value=".forsale">.forsale</option>
                                <option value=".foundation">.foundation</option>
                                <option value=".fr">.fr</option>
                                <option value=".fun">.fun</option>
                                <option value=".fund">.fund</option>
                                <option value=".furniture">.furniture</option>
                                <option value=".futbol">.futbol</option>
                                <option value=".fyi">.fyi</option>
                                <option value=".gal">.gal</option>
                                <option value=".gallery">.gallery</option>
                                <option value=".game">.game</option>
                                <option value=".games">.games</option>
                                <option value=".garden">.garden</option>
                                <option value=".gift">.gift</option>
                                <option value=".gifts">.gifts</option>
                                <option value=".gives">.gives</option>
                                <option value=".glass">.glass</option>
                                <option value=".global">.global</option>
                                <option value=".gmbh">.gmbh</option>
                                <option value=".gold">.gold</option>
                                <option value=".golf">.golf</option>
                                <option value=".graphics">.graphics</option>
                                <option value=".gratis">.gratis</option>
                                <option value=".green">.green</option>
                                <option value=".gripe">.gripe</option>
                                <option value=".group">.group</option>
                                <option value=".guide">.guide</option>
                                <option value=".guitars">.guitars</option>
                                <option value=".guru">.guru</option>
                                <option value=".hamburg">.hamburg</option>
                                <option value=".haus">.haus</option>
                                <option value=".healthcare">.healthcare</option>
                                <option value=".help">.help</option>
                                <option value=".hiphop">.hiphop</option>
                                <option value=".hockey">.hockey</option>
                                <option value=".holdings">.holdings</option>
                                <option value=".holiday">.holiday</option>
                                <option value=".horse">.horse</option>
                                <option value=".hospital">.hospital</option>
                                <option value=".host">.host</option>
                                <option value=".hosting">.hosting</option>
                                <option value=".house">.house</option>
                                <option value=".how">.how</option>
                                <option value=".immo">.immo</option>
                                <option value=".immobilien">.immobilien</option>
                                <option value=".in">.in</option>
                                <option value=".industries">.industries</option>
                                <option value=".ink">.ink</option>
                                <option value=".institute">.institute</option>
                                <option value=".insure">.insure</option>
                                <option value=".international">.international</option>
                                <option value=".investments">.investments</option>
                                <option value=".irish">.irish</option>
                                <option value=".it">.it</option>
                                <option value=".jetzt">.jetzt</option>
                                <option value=".jewelry">.jewelry</option>
                                <option value=".juegos">.juegos</option>
                                <option value=".kaufen">.kaufen</option>
                                <option value=".kim">.kim</option>
                                <option value=".kitchen">.kitchen</option>
                                <option value=".kiwi">.kiwi</option>
                                <option value=".land">.land</option>
                                <option value=".law">.law</option>
                                <option value=".lawyer">.lawyer</option>
                                <option value=".lease">.lease</option>
                                <option value=".legal">.legal</option>
                                <option value=".lgbt">.lgbt</option>
                                <option value=".li">.li</option>
                                <option value=".life">.life</option>
                                <option value=".lighting">.lighting</option>
                                <option value=".limited">.limited</option>
                                <option value=".limo">.limo</option>
                                <option value=".link">.link</option>
                                <option value=".live">.live</option>
                                <option value=".loan">.loan</option>
                                <option value=".loans">.loans</option>
                                <option value=".domains">.domains</option>
                                <option value=".lol">.lol</option>
                                <option value=".london">.london</option>
                                <option value=".love">.love</option>
                                <option value=".ltd">.ltd</option>
                                <option value=".ltda">.ltda</option>
                                <option value=".luxury">.luxury</option>
                                <option value=".maison">.maison</option>
                                <option value=".management">.management</option>
                                <option value=".market">.market</option>
                                <option value=".marketing">.marketing</option>
                                <option value=".mba">.mba</option>
                                <option value=".media">.media</option>
                                <option value=".melbourne">.melbourne</option>
                                <option value=".memorial">.memorial</option>
                                <option value=".men">.men</option>
                                <option value=".menu">.menu</option>
                                <option value=".miami">.miami</option>
                                <option value=".moda">.moda</option>
                                <option value=".moe">.moe</option>
                                <option value=".mom">.mom</option>
                                <option value=".money">.money</option>
                                <option value=".mortgage">.mortgage</option>
                                <option value=".movie">.movie</option>
                                <option value=".nagoya">.nagoya</option>
                                <option value=".navy">.navy</option>
                                <option value=".network">.network</option>
                                <option value=".news">.news</option>
                                <option value=".ninja">.ninja</option>
                                <option value=".nl">.nl</option>
                                <option value=".nyc">.nyc</option>
                                <option value=".okinawa">.okinawa</option>
                                <option value=".one">.one</option>
                                <option value=".onl">.onl</option>
                                <option value=".online">.online</option>
                                <option value=".ooo">.ooo</option>
                                <option value=".us.org">.us.org</option>
                                <option value=".osaka">.osaka</option>
                                <option value=".paris">.paris</option>
                                <option value=".partners">.partners</option>
                                <option value=".parts">.parts</option>
                                <option value=".party">.party</option>
                                <option value=".pe">.pe</option>
                                <option value=".com.pe">.com.pe</option>
                                <option value=".net.pe">.net.pe</option>
                                <option value=".nom.pe">.nom.pe</option>
                                <option value=".org.pe">.org.pe</option>
                                <option value=".photo">.photo</option>
                                <option value=".photography">.photography</option>
                                <option value=".photos">.photos</option>
                                <option value=".physio">.physio</option>
                                <option value=".pics">.pics</option>
                                <option value=".pictures">.pictures</option>
                                <option value=".pink">.pink</option>
                                <option value=".pizza">.pizza</option>
                                <option value=".place">.place</option>
                                <option value=".plumbing">.plumbing</option>
                                <option value=".plus">.plus</option>
                                <option value=".poker">.poker</option>
                                <option value=".porn">.porn</option>
                                <option value=".press">.press</option>
                                <option value=".pro">.pro</option>
                                <option value=".aaa.pro">.aaa.pro</option>
                                <option value=".aca.pro">.aca.pro</option>
                                <option value=".acct.pro">.acct.pro</option>
                                <option value=".avocat.pro">.avocat.pro</option>
                                <option value=".cpa.pro">.cpa.pro</option>
                                <option value=".eng.pro">.eng.pro</option>
                                <option value=".jur.pro">.jur.pro</option>
                                <option value=".law.pro">.law.pro</option>
                                <option value=".med.pro">.med.pro</option>
                                <option value=".recht.pro">.recht.pro</option>
                                <option value=".productions">.productions</option>
                                <option value=".promo">.promo</option>
                                <option value=".properties">.properties</option>
                                <option value=".property">.property</option>
                                <option value=".protection">.protection</option>
                                <option value=".pub">.pub</option>
                                <option value=".qpon">.qpon</option>
                                <option value=".quebec">.quebec</option>
                                <option value=".racing">.racing</option>
                                <option value=".recipes">.recipes</option>
                                <option value=".red">.red</option>
                                <option value=".rehab">.rehab</option>
                                <option value=".reise">.reise</option>
                                <option value=".reisen">.reisen</option>
                                <option value=".rent">.rent</option>
                                <option value=".rentals">.rentals</option>
                                <option value=".repair">.repair</option>
                                <option value=".report">.report</option>
                                <option value=".republican">.republican</option>
                                <option value=".rest">.rest</option>
                                <option value=".restaurant">.restaurant</option>
                                <option value=".review">.review</option>
                                <option value=".reviews">.reviews</option>
                                <option value=".rich">.rich</option>
                                <option value=".rip">.rip</option>
                                <option value=".rocks">.rocks</option>
                                <option value=".rodeo">.rodeo</option>
                                <option value=".run">.run</option>
                                <option value=".ryukyu">.ryukyu</option>
                                <option value=".sale">.sale</option>
                                <option value=".salon">.salon</option>
                                <option value=".sarl">.sarl</option>
                                <option value=".school">.school</option>
                                <option value=".schule">.schule</option>
                                <option value=".science">.science</option>
                                <option value=".scot">.scot</option>
                                <option value=".security">.security</option>
                                <option value=".services">.services</option>
                                <option value=".sex">.sex</option>
                                <option value=".sexy">.sexy</option>
                                <option value=".sg">.sg</option>
                                <option value=".com.sg">.com.sg</option>
                                <option value=".shiksha">.shiksha</option>
                                <option value=".shoes">.shoes</option>
                                <option value=".shopping">.shopping</option>
                                <option value=".show">.show</option>
                                <option value=".singles">.singles</option>
                                <option value=".site">.site</option>
                                <option value=".ski">.ski</option>
                                <option value=".soccer">.soccer</option>
                                <option value=".social">.social</option>
                                <option value=".software">.software</option>
                                <option value=".pet">.pet</option>
                                <option value=".bar.pro">.bar.pro</option>
                                <option value=".solar">.solar</option>
                                <option value=".solutions">.solutions</option>
                                <option value=".soy">.soy</option>
                                <option value=".space">.space</option>
                                <option value=".srl">.srl</option>
                                <option value=".store">.store</option>
                                <option value=".stream">.stream</option>
                                <option value=".studio">.studio</option>
                                <option value=".study">.study</option>
                                <option value=".style">.style</option>
                                <option value=".sucks">.sucks</option>
                                <option value=".supplies">.supplies</option>
                                <option value=".supply">.supply</option>
                                <option value=".support">.support</option>
                                <option value=".surf">.surf</option>
                                <option value=".surgery">.surgery</option>
                                <option value=".sydney">.sydney</option>
                                <option value=".systems">.systems</option>
                                <option value=".tattoo">.tattoo</option>
                                <option value=".tax">.tax</option>
                                <option value=".taxi">.taxi</option>
                                <option value=".team">.team</option>
                                <option value=".tech">.tech</option>
                                <option value=".technology">.technology</option>
                                <option value=".tennis">.tennis</option>
                                <option value=".theater">.theater</option>
                                <option value=".theatre">.theatre</option>
                                <option value=".tienda">.tienda</option>
                                <option value=".tips">.tips</option>
                                <option value=".tires">.tires</option>
                                <option value=".today">.today</option>
                                <option value=".tokyo">.tokyo</option>
                                <option value=".tools">.tools</option>
                                <option value=".top">.top</option>
                                <option value=".tours">.tours</option>
                                <option value=".town">.town</option>
                                <option value=".toys">.toys</option>
                                <option value=".trade">.trade</option>
                                <option value=".training">.training</option>
                                <option value=".tube">.tube</option>
                                <option value=".me.uk">.me.uk</option>
                                <option value=".university">.university</option>
                                <option value=".uno">.uno</option>
                                <option value=".vacations">.vacations</option>
                                <option value=".vegas">.vegas</option>
                                <option value=".ventures">.ventures</option>
                                <option value=".vet">.vet</option>
                                <option value=".viajes">.viajes</option>
                                <option value=".video">.video</option>
                                <option value=".villas">.villas</option>
                                <option value=".vin">.vin</option>
                                <option value=".vip">.vip</option>
                                <option value=".vision">.vision</option>
                                <option value=".vodka">.vodka</option>
                                <option value=".vote">.vote</option>
                                <option value=".voting">.voting</option>
                                <option value=".voto">.voto</option>
                                <option value=".voyage">.voyage</option>
                                <option value=".wales">.wales</option>
                                <option value=".watch">.watch</option>
                                <option value=".webcam">.webcam</option>
                                <option value=".website">.website</option>
                                <option value=".wedding">.wedding</option>
                                <option value=".wiki">.wiki</option>
                                <option value=".win">.win</option>
                                <option value=".wine">.wine</option>
                                <option value=".work">.work</option>
                                <option value=".works">.works</option>
                                <option value=".world">.world</option>
                                <option value=".wtf">.wtf</option>
                                <option value=".xxx">.xxx</option>
                                <option value=".xyz">.xyz</option>
                                <option value=".yoga">.yoga</option>
                                <option value=".yokohama">.yokohama</option>
                                <option value=".zone">.zone</option>
                             </select>
                             <div class="checkout_button ms-5">
                                <button type="submit" class="btn main-button text-white rounded-0 config_domain_submit">Check</button>
                             </div>
                          </form>
                       </div>
                    </div>
                    <div class="form-check my-3 fw-light radio_b p-3 choose_domain_option" data-choose_option="transfer">
                       <!--<input class="form-check-input" type="radio" name="domain_name">-->
                       <div class="d-flex">
                       <div class="me-3 circle-check">
                           <i class="fa fa-check" aria-hidden="true"></i>
                       </div>
                       <label class="form-check-label" for="flexRadioDefault1">Transfer your domain from another registrar</label>
                       </div>
                       <div class="domain-fields-com register_another_domain mt-3" style="display: none">
                          <form action="#" method="POST" id="config_domain_transfer" class="d-flex">
                              @csrf
                             <div class="input-group flex-nowrap bg-light">
                                <span class="input-group-text fw-light">www.</span>
                                <input type="text" class="form-control w-50" name="domain_name" value="">
                             </div>
                             <select class="form-select fw-light swiss_select ms-3" name="domain_type">
                                <option value=".com">.com</option
                                <option value=".net">.net</option>
                                <option value=".org">.org</option>
                                <option value=".ch">.ch</option>
                                <option value=".us">.us</option>
                                <option value=".me">.me</option>
                                <option value=".blog">.blog</option>
                                <option value=".ngo">.ngo</option>
                                <option value=".ong">.ong</option>
                                <option value=".info">.info</option>
                                <option value=".la">.la</option>
                                <option value=".asia">.asia</option>
                                <option value=".mobi">.mobi</option>
                                <option value=".biz">.biz</option>
                                <option value=".co.uk">.co.uk</option>
                                <option value=".uk">.uk</option>
                                <option value=".org.uk">.org.uk</option>
                                <option value=".tw">.tw</option>
                                <option value=".com.tw">.com.tw</option>
                                <option value=".org.tw">.org.tw</option>
                                <option value=".idv.tw">.idv.tw</option>
                                <option value=".ca">.ca</option>
                                <option value=".cn">.cn</option>
                                <option value=".eu">.eu</option>
                                <option value=".name">.name</option>
                                <option value=".cc">.cc</option>
                                <option value=".ac">.ac</option>
                                <option value=".io">.io</option>
                                <option value=".sh">.sh</option>
                                <option value=".tv">.tv</option>
                                <option value=".bz">.bz</option>
                                <option value=".nu">.nu</option>
                                <option value=".ws">.ws</option>
                                <option value=".com.cn">.com.cn</option>
                                <option value=".net.cn">.net.cn</option>
                                <option value=".org.cn">.org.cn</option>
                                <option value=".de">.de</option>
                                <option value=".be">.be</option>
                                <option value=".tc">.tc</option>
                                <option value=".vg">.vg</option>
                                <option value=".ms">.ms</option>
                                <option value=".cm">.cm</option>
                                <option value=".gs">.gs</option>
                                <option value=".jp">.jp</option>
                                <option value=".net.nz">.net.nz</option>
                                <option value=".co.nz">.co.nz</option>
                                <option value=".org.nz">.org.nz</option>
                                <option value=".com.mx">.com.mx</option>
                                <option value=".br.com">.br.com</option>
                                <option value=".cn.com">.cn.com</option>
                                <option value=".jpn.com">.jpn.com</option>
                                <option value=".eu.com">.eu.com</option>
                                <option value=".uk.com">.uk.com</option>
                                <option value=".uk.net">.uk.net</option>
                                <option value=".us.com">.us.com</option>
                                <option value=".co.com">.co.com</option>
                                <option value=".com.de">.com.de</option>
                                <option value=".ar.com">.ar.com</option>
                                <option value=".pw">.pw</option>
                                <option value=".uy.com">.uy.com</option>
                                <option value=".hu.com">.hu.com</option>
                                <option value=".no.com">.no.com</option>
                                <option value=".qc.com">.qc.com</option>
                                <option value=".ru.com">.ru.com</option>
                                <option value=".sa.com">.sa.com</option>
                                <option value=".shop">.shop</option>
                                <option value=".se.com">.se.com</option>
                                <option value=".se.net">.se.net</option>
                                <option value=".za.com">.za.com</option>
                                <option value=".tel">.tel</option>
                                <option value=".abogado">.abogado</option>
                                <option value=".accountant">.accountant</option>
                                <option value=".academy">.academy</option>
                                <option value=".accountants">.accountants</option>
                                <option value=".actor">.actor</option>
                                <option value=".adult">.adult</option>
                                <option value=".agency">.agency</option>
                                <option value=".airforce">.airforce</option>
                                <option value=".am">.am</option>
                                <option value=".radio.am">.radio.am</option>
                                <option value=".apartments">.apartments</option>
                                <option value=".archi">.archi</option>
                                <option value=".army">.army</option>
                                <option value=".associates">.associates</option>
                                <option value=".art">.art</option>
                                <option value=".at">.at</option>
                                <option value=".attorney">.attorney</option>
                                <option value=".audio">.audio</option>
                                <option value=".band">.band</option>
                                <option value=".auto">.auto</option>
                                <option value=".bar">.bar</option>
                                <option value=".barcelona">.barcelona</option>
                                <option value=".bargains">.bargains</option>
                                <option value=".bayern">.bayern</option>
                                <option value=".beer">.beer</option>
                                <option value=".berlin">.berlin</option>
                                <option value=".best">.best</option>
                                <option value=".bet">.bet</option>
                                <option value=".bid">.bid</option>
                                <option value=".bike">.bike</option>
                                <option value=".bingo">.bingo</option>
                                <option value=".bio">.bio</option>
                                <option value=".black">.black</option>
                                <option value=".blackfriday">.blackfriday</option>
                                <option value=".blue">.blue</option>
                                <option value=".boston">.boston</option>
                                <option value=".boutique">.boutique</option>
                                <option value=".build">.build</option>
                                <option value=".builders">.builders</option>
                                <option value=".business">.business</option>
                                <option value=".buzz">.buzz</option>
                                <option value=".cab">.cab</option>
                                <option value=".cafe">.cafe</option>
                                <option value=".cam">.cam</option>
                                <option value=".camp">.camp</option>
                                <option value=".capital">.capital</option>
                                <option value=".car">.car</option>
                                <option value=".cards">.cards</option>
                                <option value=".care">.care</option>
                                <option value=".careers">.careers</option>
                                <option value=".cars">.cars</option>
                                <option value=".casa">.casa</option>
                                <option value=".cash">.cash</option>
                                <option value=".casino">.casino</option>
                                <option value=".catering">.catering</option>
                                <option value=".center">.center</option>
                                <option value=".ceo">.ceo</option>
                                <option value=".chat">.chat</option>
                                <option value=".cheap">.cheap</option>
                                <option value=".christmas">.christmas</option>
                                <option value=".church">.church</option>
                                <option value=".city">.city</option>
                                <option value=".claims">.claims</option>
                                <option value=".cleaning">.cleaning</option>
                                <option value=".click">.click</option>
                                <option value=".clinic">.clinic</option>
                                <option value=".clothing">.clothing</option>
                                <option value=".cloud">.cloud</option>
                                <option value=".club">.club</option>
                                <option value=".co">.co</option>
                                <option value=".com.co">.com.co</option>
                                <option value=".net.co">.net.co</option>
                                <option value=".nom.co">.nom.co</option>
                                <option value=".coach">.coach</option>
                                <option value=".codes">.codes</option>
                                <option value=".coffee">.coffee</option>
                                <option value=".college">.college</option>
                                <option value=".de.com">.de.com</option>
                                <option value=".gr.com">.gr.com</option>
                                <option value=".community">.community</option>
                                <option value=".company">.company</option>
                                <option value=".computer">.computer</option>
                                <option value=".condos">.condos</option>
                                <option value=".construction">.construction</option>
                                <option value=".consulting">.consulting</option>
                                <option value=".contractors">.contractors</option>
                                <option value=".cooking">.cooking</option>
                                <option value=".cool">.cool</option>
                                <option value=".country">.country</option>
                                <option value=".courses">.courses</option>
                                <option value=".credit">.credit</option>
                                <option value=".creditcard">.creditcard</option>
                                <option value=".cricket">.cricket</option>
                                <option value=".cruises">.cruises</option>
                                <option value=".cymru">.cymru</option>
                                <option value=".dance">.dance</option>
                                <option value=".date">.date</option>
                                <option value=".auction">.auction</option>
                                <option value=".camera">.camera</option>
                                <option value=".coupons">.coupons</option>
                                <option value=".dating">.dating</option>
                                <option value=".deals">.deals</option>
                                <option value=".degree">.degree</option>
                                <option value=".delivery">.delivery</option>
                                <option value=".democrat">.democrat</option>
                                <option value=".dental">.dental</option>
                                <option value=".dentist">.dentist</option>
                                <option value=".desi">.desi</option>
                                <option value=".design">.design</option>
                                <option value=".diamonds">.diamonds</option>
                                <option value=".diet">.diet</option>
                                <option value=".digital">.digital</option>
                                <option value=".direct">.direct</option>
                                <option value=".directory">.directory</option>
                                <option value=".discount">.discount</option>
                                <option value=".doctor">.doctor</option>
                                <option value=".dog">.dog</option>
                                <option value=".download">.download</option>
                                <option value=".earth">.earth</option>
                                <option value=".education">.education</option>
                                <option value=".email">.email</option>
                                <option value=".energy">.energy</option>
                                <option value=".engineer">.engineer</option>
                                <option value=".engineering">.engineering</option>
                                <option value=".enterprises">.enterprises</option>
                                <option value=".equipment">.equipment</option>
                                <option value=".es">.es</option>
                                <option value=".com.es">.com.es</option>
                                <option value=".nom.es">.nom.es</option>
                                <option value=".org.es">.org.es</option>
                                <option value=".estate">.estate</option>
                                <option value=".eus">.eus</option>
                                <option value=".events">.events</option>
                                <option value=".exchange">.exchange</option>
                                <option value=".expert">.expert</option>
                                <option value=".exposed">.exposed</option>
                                <option value=".express">.express</option>
                                <option value=".fail">.fail</option>
                                <option value=".faith">.faith</option>
                                <option value=".family">.family</option>
                                <option value=".fans">.fans</option>
                                <option value=".farm">.farm</option>
                                <option value=".fashion">.fashion</option>
                                <option value=".film">.film</option>
                                <option value=".finance">.finance</option>
                                <option value=".financial">.financial</option>
                                <option value=".fish">.fish</option>
                                <option value=".fishing">.fishing</option>
                                <option value=".fit">.fit</option>
                                <option value=".fitness">.fitness</option>
                                <option value=".flights">.flights</option>
                                <option value=".florist">.florist</option>
                                <option value=".flowers">.flowers</option>
                                <option value=".fm">.fm</option>
                                <option value=".radio.fm">.radio.fm</option>
                                <option value=".football">.football</option>
                                <option value=".forsale">.forsale</option>
                                <option value=".foundation">.foundation</option>
                                <option value=".fr">.fr</option>
                                <option value=".fun">.fun</option>
                                <option value=".fund">.fund</option>
                                <option value=".furniture">.furniture</option>
                                <option value=".futbol">.futbol</option>
                                <option value=".fyi">.fyi</option>
                                <option value=".gal">.gal</option>
                                <option value=".gallery">.gallery</option>
                                <option value=".game">.game</option>
                                <option value=".games">.games</option>
                                <option value=".garden">.garden</option>
                                <option value=".gift">.gift</option>
                                <option value=".gifts">.gifts</option>
                                <option value=".gives">.gives</option>
                                <option value=".glass">.glass</option>
                                <option value=".global">.global</option>
                                <option value=".gmbh">.gmbh</option>
                                <option value=".gold">.gold</option>
                                <option value=".golf">.golf</option>
                                <option value=".graphics">.graphics</option>
                                <option value=".gratis">.gratis</option>
                                <option value=".green">.green</option>
                                <option value=".gripe">.gripe</option>
                                <option value=".group">.group</option>
                                <option value=".guide">.guide</option>
                                <option value=".guitars">.guitars</option>
                                <option value=".guru">.guru</option>
                                <option value=".hamburg">.hamburg</option>
                                <option value=".haus">.haus</option>
                                <option value=".healthcare">.healthcare</option>
                                <option value=".help">.help</option>
                                <option value=".hiphop">.hiphop</option>
                                <option value=".hockey">.hockey</option>
                                <option value=".holdings">.holdings</option>
                                <option value=".holiday">.holiday</option>
                                <option value=".horse">.horse</option>
                                <option value=".hospital">.hospital</option>
                                <option value=".host">.host</option>
                                <option value=".hosting">.hosting</option>
                                <option value=".house">.house</option>
                                <option value=".how">.how</option>
                                <option value=".immo">.immo</option>
                                <option value=".immobilien">.immobilien</option>
                                <option value=".in">.in</option>
                                <option value=".industries">.industries</option>
                                <option value=".ink">.ink</option>
                                <option value=".institute">.institute</option>
                                <option value=".insure">.insure</option>
                                <option value=".international">.international</option>
                                <option value=".investments">.investments</option>
                                <option value=".irish">.irish</option>
                                <option value=".it">.it</option>
                                <option value=".jetzt">.jetzt</option>
                                <option value=".jewelry">.jewelry</option>
                                <option value=".juegos">.juegos</option>
                                <option value=".kaufen">.kaufen</option>
                                <option value=".kim">.kim</option>
                                <option value=".kitchen">.kitchen</option>
                                <option value=".kiwi">.kiwi</option>
                                <option value=".land">.land</option>
                                <option value=".law">.law</option>
                                <option value=".lawyer">.lawyer</option>
                                <option value=".lease">.lease</option>
                                <option value=".legal">.legal</option>
                                <option value=".lgbt">.lgbt</option>
                                <option value=".li">.li</option>
                                <option value=".life">.life</option>
                                <option value=".lighting">.lighting</option>
                                <option value=".limited">.limited</option>
                                <option value=".limo">.limo</option>
                                <option value=".link">.link</option>
                                <option value=".live">.live</option>
                                <option value=".loan">.loan</option>
                                <option value=".loans">.loans</option>
                                <option value=".domains">.domains</option>
                                <option value=".lol">.lol</option>
                                <option value=".london">.london</option>
                                <option value=".love">.love</option>
                                <option value=".ltd">.ltd</option>
                                <option value=".ltda">.ltda</option>
                                <option value=".luxury">.luxury</option>
                                <option value=".maison">.maison</option>
                                <option value=".management">.management</option>
                                <option value=".market">.market</option>
                                <option value=".marketing">.marketing</option>
                                <option value=".mba">.mba</option>
                                <option value=".media">.media</option>
                                <option value=".melbourne">.melbourne</option>
                                <option value=".memorial">.memorial</option>
                                <option value=".men">.men</option>
                                <option value=".menu">.menu</option>
                                <option value=".miami">.miami</option>
                                <option value=".moda">.moda</option>
                                <option value=".moe">.moe</option>
                                <option value=".mom">.mom</option>
                                <option value=".money">.money</option>
                                <option value=".mortgage">.mortgage</option>
                                <option value=".movie">.movie</option>
                                <option value=".nagoya">.nagoya</option>
                                <option value=".navy">.navy</option>
                                <option value=".network">.network</option>
                                <option value=".news">.news</option>
                                <option value=".ninja">.ninja</option>
                                <option value=".nl">.nl</option>
                                <option value=".nyc">.nyc</option>
                                <option value=".okinawa">.okinawa</option>
                                <option value=".one">.one</option>
                                <option value=".onl">.onl</option>
                                <option value=".online">.online</option>
                                <option value=".ooo">.ooo</option>
                                <option value=".us.org">.us.org</option>
                                <option value=".osaka">.osaka</option>
                                <option value=".paris">.paris</option>
                                <option value=".partners">.partners</option>
                                <option value=".parts">.parts</option>
                                <option value=".party">.party</option>
                                <option value=".pe">.pe</option>
                                <option value=".com.pe">.com.pe</option>
                                <option value=".net.pe">.net.pe</option>
                                <option value=".nom.pe">.nom.pe</option>
                                <option value=".org.pe">.org.pe</option>
                                <option value=".photo">.photo</option>
                                <option value=".photography">.photography</option>
                                <option value=".photos">.photos</option>
                                <option value=".physio">.physio</option>
                                <option value=".pics">.pics</option>
                                <option value=".pictures">.pictures</option>
                                <option value=".pink">.pink</option>
                                <option value=".pizza">.pizza</option>
                                <option value=".place">.place</option>
                                <option value=".plumbing">.plumbing</option>
                                <option value=".plus">.plus</option>
                                <option value=".poker">.poker</option>
                                <option value=".porn">.porn</option>
                                <option value=".press">.press</option>
                                <option value=".pro">.pro</option>
                                <option value=".aaa.pro">.aaa.pro</option>
                                <option value=".aca.pro">.aca.pro</option>
                                <option value=".acct.pro">.acct.pro</option>
                                <option value=".avocat.pro">.avocat.pro</option>
                                <option value=".cpa.pro">.cpa.pro</option>
                                <option value=".eng.pro">.eng.pro</option>
                                <option value=".jur.pro">.jur.pro</option>
                                <option value=".law.pro">.law.pro</option>
                                <option value=".med.pro">.med.pro</option>
                                <option value=".recht.pro">.recht.pro</option>
                                <option value=".productions">.productions</option>
                                <option value=".promo">.promo</option>
                                <option value=".properties">.properties</option>
                                <option value=".property">.property</option>
                                <option value=".protection">.protection</option>
                                <option value=".pub">.pub</option>
                                <option value=".qpon">.qpon</option>
                                <option value=".quebec">.quebec</option>
                                <option value=".racing">.racing</option>
                                <option value=".recipes">.recipes</option>
                                <option value=".red">.red</option>
                                <option value=".rehab">.rehab</option>
                                <option value=".reise">.reise</option>
                                <option value=".reisen">.reisen</option>
                                <option value=".rent">.rent</option>
                                <option value=".rentals">.rentals</option>
                                <option value=".repair">.repair</option>
                                <option value=".report">.report</option>
                                <option value=".republican">.republican</option>
                                <option value=".rest">.rest</option>
                                <option value=".restaurant">.restaurant</option>
                                <option value=".review">.review</option>
                                <option value=".reviews">.reviews</option>
                                <option value=".rich">.rich</option>
                                <option value=".rip">.rip</option>
                                <option value=".rocks">.rocks</option>
                                <option value=".rodeo">.rodeo</option>
                                <option value=".run">.run</option>
                                <option value=".ryukyu">.ryukyu</option>
                                <option value=".sale">.sale</option>
                                <option value=".salon">.salon</option>
                                <option value=".sarl">.sarl</option>
                                <option value=".school">.school</option>
                                <option value=".schule">.schule</option>
                                <option value=".science">.science</option>
                                <option value=".scot">.scot</option>
                                <option value=".security">.security</option>
                                <option value=".services">.services</option>
                                <option value=".sex">.sex</option>
                                <option value=".sexy">.sexy</option>
                                <option value=".sg">.sg</option>
                                <option value=".com.sg">.com.sg</option>
                                <option value=".shiksha">.shiksha</option>
                                <option value=".shoes">.shoes</option>
                                <option value=".shopping">.shopping</option>
                                <option value=".show">.show</option>
                                <option value=".singles">.singles</option>
                                <option value=".site">.site</option>
                                <option value=".ski">.ski</option>
                                <option value=".soccer">.soccer</option>
                                <option value=".social">.social</option>
                                <option value=".software">.software</option>
                                <option value=".pet">.pet</option>
                                <option value=".bar.pro">.bar.pro</option>
                                <option value=".solar">.solar</option>
                                <option value=".solutions">.solutions</option>
                                <option value=".soy">.soy</option>
                                <option value=".space">.space</option>
                                <option value=".srl">.srl</option>
                                <option value=".store">.store</option>
                                <option value=".stream">.stream</option>
                                <option value=".studio">.studio</option>
                                <option value=".study">.study</option>
                                <option value=".style">.style</option>
                                <option value=".sucks">.sucks</option>
                                <option value=".supplies">.supplies</option>
                                <option value=".supply">.supply</option>
                                <option value=".support">.support</option>
                                <option value=".surf">.surf</option>
                                <option value=".surgery">.surgery</option>
                                <option value=".sydney">.sydney</option>
                                <option value=".systems">.systems</option>
                                <option value=".tattoo">.tattoo</option>
                                <option value=".tax">.tax</option>
                                <option value=".taxi">.taxi</option>
                                <option value=".team">.team</option>
                                <option value=".tech">.tech</option>
                                <option value=".technology">.technology</option>
                                <option value=".tennis">.tennis</option>
                                <option value=".theater">.theater</option>
                                <option value=".theatre">.theatre</option>
                                <option value=".tienda">.tienda</option>
                                <option value=".tips">.tips</option>
                                <option value=".tires">.tires</option>
                                <option value=".today">.today</option>
                                <option value=".tokyo">.tokyo</option>
                                <option value=".tools">.tools</option>
                                <option value=".top">.top</option>
                                <option value=".tours">.tours</option>
                                <option value=".town">.town</option>
                                <option value=".toys">.toys</option>
                                <option value=".trade">.trade</option>
                                <option value=".training">.training</option>
                                <option value=".tube">.tube</option>
                                <option value=".me.uk">.me.uk</option>
                                <option value=".university">.university</option>
                                <option value=".uno">.uno</option>
                                <option value=".vacations">.vacations</option>
                                <option value=".vegas">.vegas</option>
                                <option value=".ventures">.ventures</option>
                                <option value=".vet">.vet</option>
                                <option value=".viajes">.viajes</option>
                                <option value=".video">.video</option>
                                <option value=".villas">.villas</option>
                                <option value=".vin">.vin</option>
                                <option value=".vip">.vip</option>
                                <option value=".vision">.vision</option>
                                <option value=".vodka">.vodka</option>
                                <option value=".vote">.vote</option>
                                <option value=".voting">.voting</option>
                                <option value=".voto">.voto</option>
                                <option value=".voyage">.voyage</option>
                                <option value=".wales">.wales</option>
                                <option value=".watch">.watch</option>
                                <option value=".webcam">.webcam</option>
                                <option value=".website">.website</option>
                                <option value=".wedding">.wedding</option>
                                <option value=".wiki">.wiki</option>
                                <option value=".win">.win</option>
                                <option value=".wine">.wine</option>
                                <option value=".work">.work</option>
                                <option value=".works">.works</option>
                                <option value=".world">.world</option>
                                <option value=".wtf">.wtf</option>
                                <option value=".xxx">.xxx</option>
                                <option value=".xyz">.xyz</option>
                                <option value=".yoga">.yoga</option>
                                <option value=".yokohama">.yokohama</option>
                                <option value=".zone">.zone</option>
                             </select>
                             <div class="checkout_button ms-5">
                                <button type="submit" class="btn main-button text-white rounded-0 domain_transfer_config_submit">Transfer</button>
                             </div>
                          </form>
                       </div>
                    </div>
                    <div class="form-check mt-3 fw-light radio_b p-3 choose_domain_option" data-choose_option="existing">
                       <!--<input class="form-check-input" type="radio" name="domain_name">-->
                       <div class="d-flex">
                       <div class="me-3 circle-check">
                           <i class="fa fa-check" aria-hidden="true"></i>
                       </div>
                       <label class="form-check-label" for="flexRadioDefault1">I will use my existing domain and update my nameservers</label>
                       </div>
                       <div class="domain-fields-com existing_domain mt-3" style="display: none;">
                          <form action="#" method="POST" id="my_existing_domain_config" class="d-flex">
                              @csrf
                             <div class="input-group flex-nowrap bg-light">
                                <span class="input-group-text fw-light">www.</span>
                                <input type="text" class="form-control w-50" name="domain_name" value="" placeholder="Example">
                             </div>
                             <input type="text" class="form-control w-25 ms-3 " name="domain_type" value="" placeholder="com">
                             <div class="checkout_button ms-5">
                                <button type="submit" class="btn main-button text-white rounded-0 my_existing_config_submit">Use</button>
                             </div>
                          </form>
                       </div>
                    </div>
                    <div class="domain_already_conf" style="display:none;">
                        <div id="Domain-search-results">
                            <div class="domain_already_conf_responce"></div> 
                            <div class="domain_already_conf_default text-center">
                                <p><i class="fa fa-spinner fa-pulse text-black"></i> Searching...</p>
                                <a href="#" class="btn btn-success text-white w-100 disabled"> Continue <i class="fa fa-arrow-right ps-2" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="domain_register_conf" style="display:none;"> 
                        <div id="Domain-search-results">
                            <div class="domain_search_responce"></div> 
                                <div class="domain_search_default text-center">
                                    <p><i class="fa fa-spinner fa-pulse text-black"></i> Searching...</p>
                                </div>
                        </div>
                        <!--multiple domain-->
                        <div class="row pt-2">
                            <div class="row spotlight_search_responce"></div>
                            <div class="row spotlight_search_default">
                                <div class="col-md-3">
                                    <div class="spotlightcom text-center position-relative p-3">
                                        <div class="spotlight-tld-hot">Hot</div>
                                        <p class=" fw-bold mb-0"> .com </p>
                                   <p class="com_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                                </div>
                             </div> 
                             <div class="col-md-3">
                                <div class="spotlightcom text-center position-relative p-3">
                                   <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                                   <p class=" fw-bold mb-0"> .ch</p>
                                   <p class="ch_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="spotlightcom text-center position-relative p-3">
                                   <p class=" fw-bold mb-0"> .me </p>
                                   <p class="me_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                                </div>
                             </div>
                             <div class="col-md-3">
                                <div class="spotlightcom text-center position-relative p-3">
                                   <div class="spotlight-tld-hot spotlight-sale">Sale</div>
                                   <p class="fw-bold mb-0"> .us </p>
                                   <p class="us_result_default"><i class="fa fa-spinner fa-pulse text-black"></i></p>
                                </div>
                             </div>
                            </div>
                        </div>
                        <!--suggested-domains-->
                        <div class="suggested-domains py-4">
                            <div class="panel-heading pb-2 px-2"> Suggested Domains</div>
                            <div class="suggestion_search_default text-center pt-3">
                                <p class="mb-0"><i class="fa fa-spinner fa-pulse text-black"></i>  Generating suggestions for you </p>
                            </div>
                            <div class="suggestion_search_responce"></div>
                        </div>
                    </div>
                    <div class="domain_transfer_conf" style="display:none;">
                        <div id="Domain-search-results">
                            <div class="domain_transfer_conf_responce"></div> 
                            <div class="domain_transfer_conf_default text-center">
                                <p><i class="fa fa-spinner fa-pulse text-black"></i> Verifying transfer eligibility...</p>
                                <a href="#" class="btn btn-success text-white w-100 disabled"> Continue <i class="fa fa-arrow-right ps-2" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="domain_my_existing_conf" style="display:none;">
                        <div id="Domain-search-results">
                            <div class="my_existing_conf_responce"></div> 
                            <div class="my_existing_conf_default text-center">
                                <p><i class="fa fa-spinner fa-pulse text-black"></i> Verifying your domain selection...</p>
                                <a href="#" class="btn btn-success text-white w-100 disabled"> Continue <i class="fa fa-arrow-right ps-2" aria-hidden="true"></i> </a>
                            </div>
                        </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>