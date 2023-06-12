
<?php
$xmlFile = 'kontakt.xml';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

 
    if (file_exists($xmlFile)) {

        $xml = simplexml_load_file($xmlFile);


        $contact = $xml->addChild('contact');
        $contact->addChild('name', $name);
        $contact->addChild('email', $email);
        $contact->addChild('message', $message);
    } else {

        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><contacts></contacts>');


        $contact = $xml->addChild('contact');
        $contact->addChild('name', $name);
        $contact->addChild('email', $email);
        $contact->addChild('message', $message);
    }


    $xml->asXML($xmlFile);
}

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Auto Logistika Boss</title>
  <link rel="stylesheet" href="indexstyle.css">
</head>

<body>
  <header>
    <h1>Auto Logistika Boss</h1>

    <nav>
      <ul class="menu">
        <li class="item"><a href="druga.php">Tablica</a></li>
        <li class="item"><a href="#about">O nama</a></li>
        <li class="item"><a href="#equipment">Oprema i Kamioni</a></li>
        <li class="item"><a href="#services">Usluge</a></li>
        <li class="item"><a href="#services">Kontakt</a></li>  
      </ul>
    </nav>
  </header>

  <div class="container1" id="about">
    
    <div class="o_nama">
      <h1>Auto Logistika Boss </h1>

      <p>Auto Logistika Boss je specijalizirana tvrtka za prijevoz vozila koja nudi siguran, siguran i diskretan prijevoz vozila u potpuno zatvorenim 
        prikolicama za prijevoz automobila. Sa više od 25 godina iskustva u automobilskoj industriji, pružamo personaliziranu, stručnu i 
        uglednu uslugu svim našim klijentima. Naša flota neoznačenih i nenamjenski izgrađenih prikolica za prijevoz automobila zajedno s našim 
        timom profesionalnih vozača može se brinuti o prijevozu vozila bilo koje vrste. Ova obiteljska tvrtka se vodi isključivo reputacijom i 
        ponosi se profesionalnim radom. </p>


    </div>


  </div>
  
  <div class="container2" id="equipment">

    <div class="truck">
      <img src="img/volvo.jpg" alt="truck 1">
      <h2>Volvo</h2>
      <p>Naziv:Volvo</p>
      <p>Snaga:750hp</p>
      <p>Moze prevoziti utomobila:6</p>
      <p>Model:FH750</p>
      <button class="button button1">Uzmi</button>
    </div>
    
    <div class="truck">
      <img src="img/daf.jpg" alt="truck 2">
      <h2>Daf</h2>
      <p>Naziv:Daf</p>
      <p>Snaga:480hp</p>
      <p>Moze prevoziti utomobila:2</p>
      <p>Model:XC</p>
      <button class="button button1">Uzmi</button>
    </div>
    
    <div class="truck">
      <img src="img/daf2.jpg" alt="truck 3">
      <h2>Daf</h2>
      <p>Naziv:Daf</p>
      <p>Snaga:540hp</p>
      <p>Moze prevoziti utomobila:6</p>
      <p>Model:XF</p>
      <button class="button button1">Uzmi</button>
    </div> 

    <div class="truck">
      <img src="img/mercedes.jpg" alt="truck 4">
      <h2>Mercedes-benz</h2>
      <p>Naziv:Mercedes-benz</p>
      <p>Snaga:450hp</p>
      <p>Moze prevoziti utomobila:6</p>
      <p>Model:Actros</p>
      <button class="button button1">Uzmi</button>
    </div>
    
    <div class="truck">
      <img src="img/scania.jpg" alt="truck 5">
      <h2>Scania</h2>
      <p>Naziv:Scania</p>
      <p>Snaga:770hp</p>
      <p>Moze prevoziti utomobila:6</p>
      <p>Model:s770</p>
      <button class="button button1">Uzmi</button>
    </div>
    
    <div class="truck">
      <img src="img/scania2.jpg" alt="truck 6">
      <h2>Scania</h2>
      <p>Naziv:Scania</p>
      <p>Snaga:730hp</p>
      <p>Moze prevoziti utomobila:6</p>
      <p>Model:r730</p>
      <button class="button button1">Uzmi</button>
    </div> 


  </div>

  <div class="container3" id="services">

    

    <section class="contact">
      <h2>Kontakt</h2>
      <form method="POST">
          <div class="form-group">
              <label for="name">Ime:</label>
              <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
              <label for="message">Poruka:</label>
              <br>
              <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit">Submit</button>
      </form>
  </section>

    <div> 
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11103.169766845273!2d15.866006826432518!3d45.91545946592594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765c4cd8fb2a899%3A0xdabffeb2482b203e!2s10298%2C%20Oborovo%20Bistransko!5e0!3m2!1shr!2shr!4v1686510887109!5m2!1shr!2shr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    

  </div>

  <footer class="footer">
    <div class="footer-item">
      <p>Vlasnik: Juraj Poljak</p>
    </div>
    <div class="footer-item">
      <p>Broj: 0913302911</p>
    </div>
    <div class="footer-item">
      <p>Email: ACBoss@gmail.com</p>
    </div>
    <div class="footer-item">
      <p>Lokacija: Brezinska 16, oborovo bistransko, 10298</p>
    </div>
  </footer>



</body>
</html>
