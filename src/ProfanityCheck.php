<?php

class ProfanityCheck
{
    protected $vocabulary = [

        // Basic words to filter. Can match anywhere in string
        // Special characters failed with the regex \b match.
        "partialBadWords" => [
            //ENGLISH
            'alabama hotpocket', 'alligatorbait', 'anal', 'analannie', 'analsex', 'anus', 'areola', 'arse', 'arsebagger', 'arsebandit', 'arseblaster', 'arsecowboy', 'arsefuck', 'arsefucker', 'arsehat', 'arsehole', 'arseholes', 'arsehore', 'arsejockey', 'arsekiss', 'arsekisser', 'arselick', 'arselicker', 'arselover', 'arseman', 'arsemonkey', 'arsemunch', 'arsemuncher', 'arsepacker', 'arsepirate', 'arsepuppies', 'arseranger', 'arses', 'arsewhore', 'arsewipe', 'assassinate', 'assassination', 'assbagger', 'assbandit', 'assblaster', 'assclown', 'asscowboy', 'assfuck', 'assfucker', 'asshat', 'asshole', 'assholes', 'asshore', 'assjockey', 'asskiss', 'asskisser', 'assklown', 'asslick', 'asslicker', 'asslover', 'assman', 'assmonkey', 'assmunch', 'assmuncher', 'asspacker', 'asspirate', 'asspuppies', 'assranger', 'asswhore', 'asswipe', 'backdoorman', 'badfuck', 'baldy', 'ball licker', 'balllicker', 'ballsack', 'banging', 'barelylegal', 'barface', 'barfface', 'bastard', 'bazongas', 'bazooms', 'beastality', 'beastial', 'beastiality', 'beatoff', 'beat-off', 'beatyourmeat', 'bestial', 'bestiality', 'biatch', 'bicurious', 'bigass', 'bigbastard', 'bigbutt', 'bitch', 'bitcher', 'bitches', 'bitchez', 'bitchin', 'bitching', 'bitchslap', 'bitchy', 'biteme', 'blackout', 'blow job', 'blowjob', 'bohunk', 'bollick', 'bollock', 'bollocks', 'bondage', 'boner', 'boob', 'boobies', 'boobs', 'booby', 'bootycall', 'bountybar', 'breastjob', 'breastlover', 'breastman', 'brothel', 'bugger', 'buggered', 'buggery', 'bukake', 'bullcrap', 'bulldike', 'bulldyke', 'bullshit', 'bum', 'bumblefuck', 'bumfuck', 'bungabunga', 'bunghole', 'butchbabes', 'butchdike', 'butchdyke', 'buttbang', 'butt-bang', 'buttcheeks', 'buttface', 'buttfuck', 'butt-fuck', 'buttfucker', 'butt-fucker', 'buttfuckers', 'butt-fuckers', 'butthead', 'buttman', 'buttmunch', 'buttmuncher', 'buttpirate', 'buttplug', 'buttstain', 'byatch', 'cacker', 'camel toe', 'cameljockey', 'cameltoe', 'carpet muncher', 'carpetmuncher', 'chav', 'cherrypopper', 'chickslick', 'clamdigger', 'clamdiver', 'clit', 'clitoris', 'clogwog', 'clunge', 'cockblock', 'cockblocker', 'cockcowboy', 'cockfight', 'cockhead', 'cockknob', 'cocklicker', 'cocklover', 'cocknob', 'cockqueen', 'cockrider', 'cocksman', 'cocksmith', 'cocksmoker', 'cocksucer', 'cocksuck ', 'cocksucked ', 'cocksucker', 'cocksucking', 'cocktease', 'cocky', 'coitus', 'commie', 'condom', 'coon', 'coondog', 'copulate', 'crackpipe', 'crackwhore', 'crack-whore', 'crap', 'crappy', 'crotchjockey', 'crotchmonkey', 'crotchrot', 'cumbubble', 'cumfest', 'cumjockey', 'cumm', 'cumquat', 'cumqueen', 'cumshot', 'cunilingus', 'cunillingus', 'cunnilingus', 'cunntt', 'cunt', 'cunteyed', 'cuntface', 'cuntfuck', 'cuntfucker', 'cuntlick ', 'cuntlicker ', 'cuntlicking ', 'cuntsucker', 'cybersex', 'cyberslimer', 'dago', 'dammit', 'damnation', 'damnit', 'darkie', 'darky', 'datnigga', 'deapthroat', 'deepthroat', 'defecate', 'dego', 'devilworshipper', 'dickbrain', 'dickforbrains', 'dickhead', 'dickless', 'dicklick', 'dicklicker', 'dickwad', 'dickweed', 'dildo', 'dipshit', 'dipstick', 'dixiedike', 'dixiedyke', 'doggiestyle', 'doggystyle', 'dripdick', 'dumbass', 'dumbbitch', 'dumbfuck', 'easyslut', 'eatballs', 'eatme', 'eatpussy', 'ejaculate', 'ejaculated', 'ejaculating ', 'ejaculation', 'enema', 'excrement', 'executioner', 'exhibitionist', 'extremist', 'facefucker', 'facist', 'faeces', 'fag', 'fagging', 'faggot', 'fagot', 'fannyfucker', 'fart', 'farted ', 'farting ', 'farty ', 'fastfuck', 'fatass', 'fatfuck', 'fatfucker', 'fatso', 'feces', 'felatio ', 'felch', 'felcher', 'felching', 'fellatio', 'feltch', 'feltcher', 'feltching', 'fetish', 'fingerfuck ', 'fingerfucked ', 'fingerfucker ', 'fingerfuckers', 'fingerfucking ', 'fister', 'fistfuck', 'fistfucked ', 'fistfucker ', 'fistfucking ', 'fisting', 'flasher', 'flatulence', 'flid', 'flyd', 'flydie', 'flydye', 'fondle', 'footaction', 'footfuck', 'footfucker', 'footlicker', 'foreskin', 'fornicate', 'foursome', 'freakfuck', 'freakyfucker', 'freefuck', 'fubar', 'fucck', 'fuck', 'fucka', 'fuckable', 'fuckbag', 'fuckbuddy', 'fucked', 'fuckedup', 'fucker', 'fuckers', 'fuckface', 'fuckfest', 'fuckfreak', 'fuckfriend', 'fuckhead', 'fuckher', 'fuckin', 'fuckina', 'fucking', 'fuckingbitch', 'fuckingcunt', 'fuckinnuts', 'fuckinright', 'fuckit', 'fuckknob', 'fuckme ', 'fuckmehard', 'fuckmonkey', 'fuckoff', 'fuckpig', 'fucks', 'fucktard', 'fuckwhore', 'fuckyou', 'fudge packer', 'fudgepacker', 'fugly', 'fuk', 'fuks', 'funfuck', 'fuuck', 'gang bang', 'gangbang', 'gangbanged ', 'gangbanger', 'gatorbait', 'gaymuthafuckinwhore', 'gaysex ', 'genital', 'genitals', 'getiton', 'givehead', 'glazeddonut', 'godammit', 'goddamit', 'goddammit', 'goddamn', 'goddamned', 'goddamnes', 'goddamnit', 'goddamnmuthafucker', 'goldenshower', 'gonorrehea', 'gonzagas', 'gook', 'gotohell', 'greaseball', 'gringo', 'grostulation', 'gypo', 'gypp', 'gyppie', 'gyppo', 'gyppy', 'handjob', 'hardon', 'hater', 'hatred', 'headfuck', 'herpes', 'hijack', 'hijacker', 'hijacking', 'hillbillies', 'hindoo', 'hitler', 'hitlerism', 'hitlerist', 'hobo', 'hoes', 'holestuffer', 'homo', 'homobangers', 'honger', 'honkers', 'honkey', 'honky', 'hookers', 'horney', 'horniest', 'horny', 'horseshit', 'hosejob', 'hotdamn', 'hotpussy', 'hottotrot', 'husky', 'hymen', 'iblowu', 'idiot', 'incest', 'insest', 'intercourse', 'internet wife', 'interracial', 'intheass', 'inthebuff', 'jackass', 'jackoff', 'jackshit', 'japcrap', 'jerkoff', 'jesuschrist', 'jigaboo', 'jiggabo', 'jihad', 'jijjiboo', 'jism', 'jizim', 'jizjuice', 'jizm ', 'jizz', 'jizzim', 'jizzum', 'jubblies', 'juggalo', 'junglebunny', 'kiddy fiddler', 'kinky', 'kissass', 'kondum', 'krap', 'krappy', 'kraut', 'kumbubble', 'kumbullbe', 'kummer', 'kumming', 'kums', 'kunilingus', 'kunnilingus', 'kunt', 'kyke', 'labia', 'lactate', 'lady boy', 'ladyboy', 'lapdance', 'lesbain', 'lesbayn', 'lesbin', 'lesbo', 'lezbe', 'lezbefriends', 'lezbo', 'lezz', 'lezzer', 'lezzo', 'libido', 'lickme', 'limpdick', 'livesex', 'lmfao', 'loadedgun', 'lovebone', 'lovegoo', 'lovegun', 'lovejuice', 'lovemuscle', 'lovepistol', 'loverocket', 'low life', 'lowlife', 'lubejob', 'lucifer', 'luckycameltoe', 'mafia', 'malicious', 'manhater', 'manpaste', 'marijuana', 'mastabate', 'mastabater', 'master bates', 'masterbate', 'masterbates', 'mastrabator', 'masturbate', 'masturbating', 'mattressprincess', 'meatbeater', 'meatrack', 'mgger', 'mggor', 'milf', 'mofo', 'molest', 'molestation', 'molester', 'molestor', 'moneyshot', 'mooncricket', 'moron', 'mothafuck', 'mothafucka', 'mothafuckaz', 'mothafucked ', 'mothafucker', 'mothafuckin', 'mothafucking ', 'mothafuckings', 'motherfuck', 'motherfucked', 'motherfucker', 'motherfuckin', 'motherfucking', 'motherfuckings', 'motherlovebone', 'muffdive', 'muffdiver', 'muffindiver', 'mufflikcer', 'muncher', 'murder', 'murderer', 'muthafucker', 'nastybitch', 'nastyho', 'nastyslut', 'nastywhore', 'nazi', 'necro', 'negroes', 'negroid', 'nigga', 'niggah', 'niggaracci', 'niggard', 'niggarded', 'niggarding', 'niggardliness', 'niggardliness\'s', 'niggardly', 'niggards', 'niggard\'s', 'niggaz', 'nigger', 'niggerhead', 'niggerhole', 'niggers', 'nigger\'s', 'niggle', 'niggled', 'niggles', 'niggling', 'nigglings', 'niggor', 'niggur', 'niglet', 'nignog', 'nigr', 'nigra', 'nigre', 'nipple', 'nipplering', 'nittit', 'nlgger', 'nlggor', 'nofuckingway', 'nonce', 'nookey', 'nookie', 'nudger', 'nut case', 'nutcase', 'nutfucker', 'ontherag', 'orgasim ', 'orgasm', 'orgies', 'orgy', 'osama bin laden', 'paedo', 'paedofile', 'paedophile', 'paki', 'palesimian', 'panti', 'pearlnecklace', 'peckerwood', 'peedo', 'peehole', 'peni5', 'penile', 'penis', 'penises', 'perv', 'perversion', 'pervert', 'phonesex', 'phuk', 'phuked', 'phuking', 'phukked', 'phukking', 'phungky', 'phuq', 'pi55', 'picaninny', 'piccaninny', 'pickaninny', 'pikey', 'piky', 'pimper', 'pimpjuic', 'pimpjuice', 'pimpsimp', 'pindick', 'piss', 'pissed', 'pisser', 'pisses ', 'pisshead', 'pissin ', 'pissing', 'pissoff ', 'play boy', 'play bunny', 'play girl', 'playboy', 'playbunny', 'playgirl', 'plumper', 'pocketpool', 'poontang', 'pooperscooper', 'pooping', 'poorwhitetrash', 'poostabber', 'popimp', 'porchmonkey', 'porn', 'pornflick', 'pornking', 'porno', 'pornography', 'pornprincess', 'premature', 'prickhead', 'pros', 'prostitute', 'protestant', 'pu55i', 'pu55y', 'pube', 'pubiclice', 'puke', 'puntang', 'purinaprincess', 'pussie', 'pussies', 'pussyeater', 'pussyfucker', 'pussylicker', 'pussylips', 'pussylover', 'pussypounder', 'pusy', 'queef', 'queer', 'quim', 'racist', 'rag head', 'raghead', 'raped', 'rapist', 'rearend', 'rearentry', 'rectum', 'redneck', 'rentafuck', 'retard', 'retarded', 'rimjob', 'rimming', 'robber', 'russki', 'russkie', 'sadist', 'sadom', 'saeema butt', 'sandm', 'sandnigger', 'satan', 'scag', 'scat', 'schlong', 'screwyou', 'scrotum', 'scum', 'scumbag', 'seaman staines', 'semen', 'sexed', 'sexfarm', 'sexhound', 'sexhouse', 'sexing', 'sexkitten', 'sexpot', 'sexslave', 'sextogo', 'sextoy', 'sextoys', 'sexwhore', 'sexymoma', 'sexy-slim', 'seymour butts', 'shag', 'shagger', 'shaggin', 'shagging', 'shat', 'shhit', 'shit', 'shitcan', 'shitdick', 'shite', 'shiteater', 'shited', 'shitface', 'shitfaced', 'shitfit', 'shitforbrains', 'shitfuck', 'shitfucker', 'shitfull', 'shithapens', 'shithappens', 'shithead', 'shithouse', 'shiting', 'shitlist', 'shitola', 'shitoutofluck', 'shits', 'shitstain', 'shitted', 'shitter', 'shitting', 'shitty ', 'shortfuck', 'sissy', 'sixtynine', 'sixtyniner', 'skank', 'skankbitch', 'skankfuck', 'skankwhore', 'skanky', 'skankybitch', 'skankywhore', 'skinflute', 'skum', 'skumbag', 'slanteye', 'slantyeye', 'slapper', 'slavedriver', 'sleezebag', 'sleezeball', 'slideitin', 'slimeball', 'slimebucket', 'slopehead', 'slopey', 'slopy', 'slut', 'sluts', 'slutt', 'slutting', 'slutty', 'slutwear', 'slutwhore', 'smackthemonkey', 'smelly', 'smut', 'snatchpatch', 'snot', 'snowback', 'snownigger', 'sodom', 'sodomise', 'sodomite', 'sodomize', 'sodomy', 'sonofabitch', 'sonofbitch', 'spac', 'spacca', 'spaghettibender', 'spaghettinigger', 'spank', 'spankthemonkey', 'spastic', 'spazza', 'sperm', 'spermacide', 'spermbag', 'spermhearder', 'spermherder', 'spig', 'spigotty', 'spik', 'spitter', 'splittail', 'spooge', 'spreadeagle', 'spunk', 'squaw', 'stabber', 'stiffy', 'strapon', 'stripclub', 'stripper', 'stroking', 'stupid', 'stupidfuck', 'stupidfucker', 'suckdick', 'sucker', 'suckme', 'suckmyass', 'suckmydick', 'suckmytit', 'suckoff', 'swallower', 'swastika', 'syphilis', 'tampon', 'tantra', 'tarbaby', 'tard', 'teat', 'terror', 'terrorist', 'teste', 'testicle', 'testicles', 'thai bride', 'thick as', 'thicklips', 'thicko', 'thirdeye', 'thirdleg', 'threesome', 'timbernigger', 'titbitnipply', 'titfuck', 'titfucker', 'titfuckin', 'titjob', 'titlicker', 'titlover', 'tits', 'tittie', 'titties', 'titty', 'tonguethrust', 'tonguethruster', 'tonguetramp', 'torture', 'tosser', 'tosspot', 'towel head', 'towelhead', 'trailertrash', 'tramp', 'trannie', 'tranny', 'transvestite', 'trisexual', 'trots', 'trouser snake', 'tuckahoe', 'tunneloflove', 'turd', 'turnon', 'twat', 'twink', 'twinkie', 'twobitwhore', 'unfuckable', 'upskirt', 'uptheass', 'upthebutt', 'urinate', 'urine', 'usama bin laden', 'uterus', 'vagina', 'vaginal', 'vibrater', 'vibrator', 'vietcong', 'violate', 'violation', 'virginbreaker', 'vomit', 'vulva', 'wank', 'wanker', 'wanking', 'waysted', 'welcher', 'wetback', 'wetspot', 'whacker', 'whigger', 'whiskeydick', 'whiskydick', 'whitenigger', 'whitetrash', 'whitey', 'whop', 'whore', 'whorefucker', 'whorehouse', 'wife beater', 'williewanker', 'wuss', 'wuzzie', 'xrated', 'x-rated', 'yellowman', 'zigabo', 'zipper head', 'zipperhead',

            //ITALIAN
            'stronzo', 'stronza', 'coglion', 'negr', 'merda', 'imbecille', 'cretin', 'deficient', 'pompin', 'trombat', 'culatton', 'fottut', 'rompiballe', 'rompicoglioni', 'vaffanculo', 'cagare', 'cacare', 'froci', 'mortacci'
        ],

        // Bad words that can only match as a stand alone word.
        'fullBadWords' => [

            //ENGLISH
            "anus", "asss", "areola", "assess", "boner", "clit", "cock", "cum", "damn", "damm", "jizz",
            "labia", "licker", "rapist", "slut", "shit", "twat", "vagina", "whore",

            //ITALIAN
            'bitcoin', 'crypto', 'btc', 'mona', 'cazzo', 'vacca', 'culona', 'pippa', 'troia', 'porco', 'porca', 'pirla', 'puttana', 'sega', 'cazzata', 'cazzate', 'terrone', 'terroni', 'polentone', 'polentoni', 'terrona', 'polentona'
        ],

        // Search for any of these characters
        'replace' => [
            'a' => ['4', '@', 'Á', 'á', 'À', 'Â', 'à', 'Â', 'â', 'Ä', 'ä', 'Ã', 'ã', 'Å', 'å', 'α', 'Δ', 'Λ', 'λ'],
            'b' => ['8', '3', 'ß', 'Β', 'β'],
            'c' => ['Ç', 'ç', '¢', '€', '<', '{', '©'],
            'd' => ['Þ', 'þ', 'Ð', 'ð'],
            'e' => ['3', '€', 'È', 'è', 'É', 'é', 'Ê', 'ê', '∑'], 'f' => ['f', 'f', 'f-', 'ƒ'],
            'g' => ['6', '9'],
            'i' => ['!', '[', ']', '1', '∫', 'Ì', 'Í', 'Î', 'Ï', 'ì', 'í', 'î', 'ï'],
            'k' => ['Κ', 'κ'],
            'l' => ['!', '[', ']', '£', '∫', 'Ì', 'Í', 'Î', 'Ï'],
            'n' => ['η', 'Ν', 'Π'],
            'o' => ['0', 'Ο', 'Φ', '¤', '°', 'ø'],
            'p' => ['ρ', 'Ρ', '¶', 'þ'],
            'r' => ['®'],
            's' => ['5', '$', '§'],
            't' => ['Τ', 'τ','7'],
            'u' => ['υ', 'µ'],
            'v' => ['υ', 'ν'],
            'w' => ['ω', 'ψ', 'Ψ'],
            'x' => ['Χ', 'χ'],
            'y' => ['¥', 'γ', 'ÿ', 'ý', 'Ÿ', 'Ý'],
            'z' => ['2', '/']
        ]
    ];

    public function __construct(
        $partialBadWords = null,
        $fullBadWords = null
    ) {

        $this->partialBadWords = $partialBadWords ? $partialBadWords : $this->vocabulary['partialBadWords'];
        $this->fullBadWords = $fullBadWords ? $fullBadWords : $this->vocabulary['fullBadWords'];
        $this->replace = $this->vocabulary['replace'];
    }

    public function isClean($string)
    {
        if (empty($string)) return true;

        $string = $this->convertFromLeetspeak($string);
        $hasPartialBadWords = $this->checkForPartialBadWords($string);
        $hasFullBadWords = $this->checkForFullBadWords($string);

        return !($hasPartialBadWords || $hasFullBadWords);
    }

    private function convertFromLeetspeak($string)
    {
        $output = '';
        foreach (str_split(strtolower($string)) as $letter) {
            $converted = false;
            foreach ($this->replace as $key => $value) {
                if (!$converted && in_array($letter, $value)) {
                    $output .= $key;
                    $converted = true;
                }
            }
            if (!$converted) $output .= $letter;
        }

        return $output;
    }

    private function checkForPartialBadWords($string)
    {
        $output = false;
        $lowercaseString = strtolower($string);
        foreach ($this->partialBadWords as $word) {
            if (strpos($lowercaseString, $word)) $output = true;
        }
        return $output;
    }

    private function checkForFullBadWords($string)
    {
        $output = false;

        $lowercaseString = strtolower(preg_replace("![^a-z0-9]+!i", " ", $string));

        foreach ($this->partialBadWords as $word) {
            if (strpos($lowercaseString, " $word ")) $output = true;
        }
        return $output;
    }
}
