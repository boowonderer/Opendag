<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="script.js"></script>


<div class="content">
    <strong style="font-size:1.5rem;">MBO Utrecht</strong>
    <ul>
        <strong>Bij MBO Utrecht zijn we bereikbaar via telefoon, e-mail en WhatsApp. Heb je een vraag over onze Open
            Dagen, opleidingen of aanmelden neem contact op via WhatsApp.<strong>


    </ul>
    <br>
    <strong style="font-size:1.5rem;">Contact</strong>
    <ul>
        <li>Vragen over je aanmelding, plaatsing of kennismaking:
            <ul>WhatsApp: 06-25705051 (op schooldagen bereikbaar tussen 10.00 en 17.00 uur) </ul>
            Mail: <ul>aanmelden@mboutrecht.nl </ul>
            Telefoon: <ul> 030 – 281 51 80 (op schooldagen bereikbaar tussen van 10.00 tot 12.00 en van 13.00 tot
                15.00
                uur)</ul>
            Vragen over studiekeuze of opleidingen:
            <ul> WhatsApp: 06-25705051 (op schooldagen bereikbaar tussen 10.00 en 17.00 uur)
                <br> Mail: studiekeuze@mboutrecht.nl
            </ul>
            Locatie:
            <ul>Daltonlaan 300
                3584 BtK Utrecht</ul>

    </ul>
    </li>
    </ul>

    <br>
    <?php if (isset($message)) : ?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
    <?php endif ?>

    <form action="index.php" method="post">
        <header>
            <h1>Contact</h1>
        </header>
        <br>
        <ul>
            <div>
                <label for="name">Naam:</label>
                <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Naam">
                <small><?= $errors['name'] ?? '' ?></small>
            </div>
        </ul>
        <ul>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="<?= $inputs['email'] ?? '' ?>"
                    placeholder="Email address">
                <small><?= $errors['email'] ?? '' ?></small>
            </div>
        </ul>
        <ul>
            <div>
                <label for="subject">Onderwerp:</label>
                <input type="subject" name="subject" id="subject" value="<?= $inputs['subject'] ?? '' ?>"
                    placeholder="Onderwerp">
                <small><?= $errors['subject'] ?? '' ?></small>
            </div>
        </ul>
        <ul>
            <div>
                <label for="message">Bericht:</label>
                <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
                <small><?= $errors['message'] ?? '' ?></small>
            </div>
        </ul>
        <ul>
            <br>
            <button onclick="myFunction()">Verzend</button>
    </form>
    </ul>
</div>