<?php
if ( isset( $_GET['class'] ) ) {
	class Comments
	{
        public $author;
        public $body;
        public $email;
        public $date; 
	}
    class News
    {
    	public function getComments( $comment )
    	{
            return $comment->body; 
    	}
	    public $title = "Title";
	    public $author = "Author";
	    public $src = "Source";
	    public $datePublic = "DatePublic";
	    public $content = "Content";

	    public function getTitle()
	    {
	    	return $this->title;
	    }
	    public function getAuthor()
	    {
	    	return $this->author;
	    }
	    public function getSrc()
	    {
	    	return $this->src;
	    }
	    public function getDatePublic()
	    {
	    	return $this->datePublic;
	    }
	    public function getContent()
	    {
	    	return $this->content;
	    }
    }
    $news = new News();
    echo "<div>";
    $news->title = "Title статьи";
    echo "<br>";
    echo $news->getTitle();
    echo "<br>";
    echo $news->getAuthor();
    echo "<br>";
    echo $news->getSrc();
    echo "<br>";
    echo $news->getDatePublic();
    echo "<br>";
    $news->content = "Phytoflagellata cycling valerianate nominately Tunnit thirdsman unappreciableness uncongested tutor minicamera previctorious habitable lalling conation prodigalish sniggering blimy acetaniside Olympieion karstenite horridly amortization adaptometer anorthicMograbi conspecific unaccessibility Doronicum prosish seat unpostponable wafflike signate noncircular genitival macrochaeta overdistance officialization Glossopteris catchword disallowableness forestudy myelolymphocyte bedfast prepollence gadman unpass overpaintphraseograph colongitude maturation ardish brimstonewort moidore stypticalness staysail bracker lieutenancy enteradenological reticule Muscicapa acescency predetermine tediosity Roxbury liveness Uintatherium ringeye paschal pantographer tossingly oxycobaltammineantivenom cololite rakishness toparchia apospory macrocephalism ultrademocratic outfangthief cormorant lineolated habitation temporally thronger Norma illegal megalith Casimir ferronatrite hydatomorphism unconsigned Aspasia antivice unlustily indenehysteromorphous roquist moisten slotting selflessness Satanistic cangan creatinine merger biscuitroot Fagara puppetism gleet whitevein hoopstick riskproof stomenorrhagia sentiendum weedproof lithoxyl unstrange aerenchyma covenanted unfulfilledzabeta triadist Pactolus bihamate immersionist retranslation manacle detectable infrarimal persulphuric unimmigrating Mareotic culbut classicism masturbator rectus astray kyphotic rhopaloceral smuggery propheticly granitite perifistular leatmagistrant physocele platitude governesshood alcalizate sulpharsphenamine Bechtler tilmus garrot antichresis subnitrate Indiaman recruitment atmidalbumin loudering unaccustomedly rattleskull Inachidae pollution pensility submontane parol psychony macuta";
    echo $news->getContent();
    echo "<br><hr><b>";
    echo "Комментарии comment->body";
    echo "<br>";
    $comment = new Comments;
    $comment->body = "Тело комментария news->getComments";
    echo $news->getComments( $comment );
    echo "<hr></b></div>";
    echo "<p><a href=index.php>На главную</a></p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
	<title>ООП(PHP). Начальный уровень. Теория.</title>
</head>
<body>
<header>
<p>
<a href="index.php?class=go">Дополнителное задание. Класс новостей.</a>
</p>
<h1>3.1 Классы и объекты.</h1>
	<marquee behavior="scroll" direction="right">
	    <p><<<Объектно-ориентированное программирование>>></p>
	</marquee>
</header>
<h1>Часть 1.Распишите свое понимание инкапсуляции.</h1>
<p>
Инкапсуляция - "помещение в капсулу" т.е. сокрытие свойсв и методов от основной логики. Легко понять на примере "машина".
Детали автомобиля( рулевое колесо, педали, акустика, цвет кузова ), которые мы видим реально - публичные свойсва и методы, остальные ( двигатель, шестеренки, прокладки, болтики ) - скрытые от нас т.е. инкапсулированы.
Или - инкапсулированые свойства и методы нужны для нормальной работы публичных свойсв и методов.
***
И доступ к инкапсулированым методам и свойствам закрыт от основной логики. 
Инкапсулированные методы и свойства доступны, только внутри класса.
Интерфейс класса - это публичный набор свойств(полей) и методов класса.(т.е. через который мы общаемся с ним)!
</p>
<h1>Часть 2.Сформулируйте своими словами в чем плюсы объектов, а в чем минусы.</h1>
<p>
<br>
(+)
<br>
Логика программы читается проще. 
Возможность расширить код, дописать-изменить программу. Свойства(поля) создаются ( изменяются ) в момент выполнения.
<br>
(-)
<br> Много теории( классы, объекты, абстракция, инкапсуляция, полиморфизм, пространство имен и т.д.). Новое мировозрение ( программозрение ) на программирование! 
</p>
<h1>Часть 3.Придумайте 5 объектов реального мира в коде с пятью свойствами и пятью методами. Подумайте над областью видимости свойств и методов. </h1>
<pre>
<div>
<?php
class bookComputer
    {
	    public $name = "Наименование";
	    public $harakteristika = "Сфера";
	    public $kategoria = "Автор";
	    public $pages = 175;
	    private $p = "Цитата";
	    private $const = 10;

	    private function getName($name)
	    {
	    	return "<<<".$name.">>>";
	    }
	    public function getPages()
	    {
	    	$this->pages = 200;
            return $this->pages;
	    }
	    public function getKategoria()
	    {
            return $this->kategoria;
	    }
	    private function blablabla()
	    {
	    	return $this->const;
	    }
	    private function getHarakteristika()
	    {
	    	return $this->harakteristika;
	    }
	}
$bC = new bookComputer();
$bC->name = "Основы ООП на примере языка PHP";
echo "<br>";
echo $bC->name;
echo "<br>";
echo $bC->getPages();
echo "<br>";
echo $bC->harakteristika;
echo "<br>";
?>
</div>
<div>
<?php
class kartochkaTovara
    {
	    public $name = "Наименование товара";
	    public $harakteristika = "Характеристики";
	    public $kategoria = "Категория";
	    public $price = 175;
	    public $akciya = "предложение-акция";
	    private $tmp = 0;

	    private function getName($name)
	    {
	    	return "<<<".$name.">>>";
	    }
	    public function getPrice( $discount )
	    {
            return $this->price-$this->price*$discount/100;
	    }
	    public function getKategoria()
	    {
            return $this->getName($this->kategoria);
	    }
	    private function getAkciya()
	    {
	    	return $this->akciya."####";
	    }
	    private function getHarakteristika()
	    {
	    	return $this->harakteristika;
	    }
	}
$kT = new kartochkaTovara();
$kT->kategoria = "Компьютеры";
echo $kT->getKategoria();
echo "<br>";
echo $kT->harakteristika;
echo "<br>";
$kT->price = 100;
echo "Цена ".$kT->price.". Цена со скидкой ".$kT->getPrice(5).".";
echo "<br>";
?>
</div>
<div>
<?php
class voditelskiePrava
    {
    	private $i = 1234567890;
	    public $name = "ФИО";
	    public $date = "Когда получил, типа time()";
	    public $kategoria = "Категория";
	    public $lokation = "Где получил";
	    public $blood = "резус-фактор";

	    private function getName($name)
	    {
	    	return "<<<".$name.">>>";
	    }
	    public function getDate()
	    {
	    	if ( time() - $this->date < 60*60*24*365*10 ) return true;
	    	else return false;
	    	    }
	    public function getKategoria()
	    {
            return $this->getName($this->kategoria);
	    }
	    private function getBlood()
	    {
	    	return $this->blood;
	    }
	    public function getI()
	    {
	    	return $this->i;
	    }
	}
$vP = new voditelskiePrava();
echo $vP->name."<br>";
$vP->kategoria = "Категория Б";
echo $vP->getKategoria();
echo "<br>";
$vP->date = time ();
echo $vP->getDate();
echo "<br>";
echo $vP->getI();
?>
</div>
<div>
<?php
class sportZal
    {
	    public $name = "Фирменное название";
	    public $harakteristika = "Тренажоры";
	    public $kategoria = "Фитнес или бодибилдинг, направление";
	    private $str = "";
	    public $price = "цена в биткоинтах";
	    public $akciya = "предложение-акция";
	    public $adress = "Адресс зала";
        
        public function getAkciya( $akciya )
        {
        	if ( isset( $akciya ) ) $this->akciya = $akciya;
        	return $this->akciya;
        }
        private function getAdress()
        {
        	if ( strlen( $this->adress ) < 2 ) return false; else return true;
        }
	    private function getName($name)
	    {
	    	return "<<<".$name.">>>";
	    }
	    public function getPrice( $discount )
	    {
            return $this->price-$this->price*$discount/100;
	    }
	    public function getKategoria()
	    {
            return $this->getName($this->kategoria);
	    }
	}
$sZ = new sportZal();
$sZ->harakteristika = "Ketler";
$sZ->kategoria = "Тяжелая атлетика";
echo $sZ->name;
echo "<br>";
echo $sZ->adress;
echo "<br>";
echo $sZ->price;
?>
</div>
<div>
<?php
class libReal
    {
	    public $name = "Наименование библиотеки";
	    private $str = "Привет мир";
	    public $harakteristika = "сфера.детская.взросла.научная.";
	    public $adress = "Физический адресс";
	    public $time = "часы работы";
	    public $site = "url";

	    private function getName($name)
	    {
	    	return "<<<".$name.">>>";
	    }
	    public function getTime( $time )
	    {
            $this->time = $time;
            return $this->time;
	    }
	    public function getSite()
	    {
            return $this->site;
	    }
	    private function getHarakteristika()
	    {
            $this->harakteristika = "***".$this->harakteristika."***";
	    	return $this->harakteristika;
	    }
	    private function getAdress()
	    {
	    	$adress = $this->adress."GoGoGo";
	    	return $adress;
	    }
	}
$lR = new libReal();
$lR->name = "Библиотека имени Белинского";
$lR->adress = "г. Екатеринбург ул. Белинского д. 5";
$lR->site = "url";
echo $lR->name;
echo "<br>";
echo $lR->adress;
echo "<br>";
echo $lR->getSite();
?>
</div>
</pre>
<p>
<a href="index.php?class=go">Дополнителное задание. Класс новостей.</a>
</p>
<footer>
	<p>Copyright. Андрей Мурашов.</p>
</footer>
</body>
</html>