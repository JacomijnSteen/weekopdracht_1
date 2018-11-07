<!DOCTYPE html>
<html>
    <head>
        <title>My portfolio</title>
        <link rel="stylesheet" type="text/CSS" href="portfolio home css.css">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php

        // formulier moet gepost zijn:

        if()!isset($_POST["submit"]))
          {echo:"Vergeet niet het formulier te versturen";
            }

          $name = $_POST['name'];
          $visitor_email = $_POST['email'];
          $message = $_POST['message'];
          $message = wordwrap($message, 70, "\r\n");

          //valideren dat velden ingevuld zijn

          if(empty($name)|| empty ($visitor_email))
              { echo: "naam of email niet ingevuld";
                exit;
              }

          $email_from = 'jacomijnsteen@gmail.com';
          $email_subject = "bezoeker portfolio";
          $email_body = "Bericht via portfolio van $name.\n"
                        "zijn of haar mailadres is: $visitor_email\n"
                        "Dit is het bericht: $message " ;
          $to="jacomijnsteen@gmail.com";

          //mailsturen naar mijzelf

          mail($to,$email_subject,$email_body,)

          //mail sturen naar afzender van bericht

          $to_v = $visitor_email;
          $email_subject_v = "van Jacomijn Steen";
          $email_body_v = "Bedankt voor het sturen van dit bericht.\"
                          "Jacomijn Steen zal zo snel mogelijk contact met u opnemen via dit mailadres.";

          Mail($to_v, $email_subject_v, $email_body_v)

          //en nu maar hopen dat alles werkt.

          ?>


    </head>

    <body>

        <header>
            <h2>Welkom op het portfolio van Jacomijn Steen. Lees en bekijk hieronder meer.
            </h2>
        </header>

        <section class="list">

              <ul>
              <li><a href="Portfolio Projecten html.html">Projecten</a></li>

              <li> <a href="portfolio over mij html.html">Over mijzelf</a></li>

              <li> <a href="portfolio Beeldend Kunstenaar html.html">Beeldend Kunstenaar</a></li>

              <li> <a href="portfolio opleidingen html.html">opleidingen en<br/> werkervaringen</a></li>

              <li> <a href="portfolio vrijwilligerswerk html.html">vrijwilligerswerk</a></li>
             </ul>
        </section>

        <section class="contactme">
              <h2><span>Stuur me een bericht</span></h2>
                <form method="post" name="mycontactform" action="form-to-email.php">

                  <label>Naam:</label>
                    <input name="name" type="text" />
                    <br/>
                   <label> email-adres</label>
                    <input name="email" type="text">
                    <br/>
                    <h4>bericht</h4><textarea name="message" ></textarea>
                    <input type="submit" value="Sent Form"  />
                </form>
        </section>

        <section class="profielfoto" alt="profielfoto">

        </section>


        <section class="footer">
          <h6>You must be the change you want to see in the world.
            <br/>(Mahadma Gandhi)<br/></h6>
        </section>

    </body>
  </html>
