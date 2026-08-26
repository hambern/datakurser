# Webbserverprogrammering 1 - Teori & Handbok

[toc]

Välkommen till Webbserverprogrammering 1! I förra kursen lärde du dig bygga *utsidan* (Frontend). Nu ska vi dyka ner under huven och bygga *motorn* (Backend). Här händer magin: inloggningar, databaser och smarta funktioner.

---

## 1. Backend-utvecklingens Grunder

### Klient vs Server (Repetition)
*   **Frontend (Klient):** HTML, CSS, JavaScript. Körs i användarens webbläsare.
*   **Backend (Server):** PHP, Python, Java, Databaser. Körs på servern i en hall någonstans.
Backendens jobb är att ta emot data, tugga på den, spara/hämta från databasen, och spotta ut HTML tillbaka till Klienten.

### HTTP-protokollet
Webben pratar språket HTTP. Det består av en dialog:
1.  **Request (Förfrågan):** "Hej, jag vill se `index.php`!" (Kan också skicka data med POST).
2.  **Response (Svar):** "Här har du sidan!" (följt av HTML-kod).

Svaret har alltid en **Statuskod**:
*   `200 OK` = Allt gick bra.
*   `404 Not Found` = Sidan finns inte.
*   `500 Internal Server Error` = Något kraschade i din PHP-kod (Oops!).

---

## 2. PHP - Språket

PHP (*PHP: Hypertext Preprocessor*) är motorn vi använder i denna kurs.

### Syntax och Variabler
Variabler i PHP börjar alltid med ett dollartecken `$`.
```php
$name = "Kalle";
$age = 17;
echo "Hej " . $name; // Punkten sätter ihop textsträngar
```

### Arrayer och Loopar
En array är en lista med saker.
```php
$fruits = ["Äpple", "Banan", "Citron"];

// Foreach är din bästa vän för att loopa igenom listor
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
```

### Funktioner och Scope
Funktioner kapslar in kod så du kan återanvända den.
**Viktigt:** Variabler utanför funktionen syns inte inuti den (Scope). Du måste skicka in dem som argument.

### Superglobals ($_POST, $_GET, $_SESSION)
Detta är speciella arrayer som PHP fyller åt dig automatiskt:
*   `$_GET`: Data från URL:en (t.ex. `sida.php?id=5`).
*   `$_POST`: Data från hemliga formulär (inloggning etc).
*   `$_SESSION`: Data som sparas mellan sidladdningar (t.ex. "är användaren inloggad?").

---

## 3. Databaser & SQL

Tänka dig databasen som ett super-avancerat Excel-ark. Vi använder **MySQL**.

### Relationsdatabaser
Vi sparar data i **Tabeller** (t.ex. `users`, `posts`). Tabellerna har **Relationer**:
*   *En-till-Många:* EN användare kan skriva MÅNGA inlägg.

### SQL-språket (CRUD)
SQL är språket vi använder för att prata med databasen. De fyra viktigaste kommandona (CRUD):
*   **C**reate: `INSERT INTO users (name) VALUES ('Kalle')`
*   **R**ead: `SELECT * FROM users`
*   **U**pdate: `UPDATE users SET name='Olle' WHERE id=1`
*   **D**elete: `DELETE FROM users WHERE id=1`

### Databasdesign och Normalisering
**Normalisering** betyder att man städar upp datan så den inte dubbleras.
Istället för att spara "Stockholm" på varje användare, sparar vi `city_id` som pekar på en rad i stads-tabellen.

### Koppla PHP till MySQL (PDO/MySQLi)
Vi använder **PDO** (PHP Data Objects) för att koppla upp oss. Det är säkrare och modernare än gamla `mysql_connect`.

```php
$pdo = new PDO("mysql:host=localhost;dbname=test", "user", "pass");
$stmt = $pdo->query("SELECT * FROM users");
```

---

## 4. Webbens Säkerhet

Säkerhet är INTE valfritt. Du *måste* bygga säkra system.

### SQL Injection & Prepared Statements
Om du klistrar in användarens data direkt i SQL-frågan kan de hacka dig.
*DÅLIGT:* `SELECT * FROM users WHERE name = '$name'`
*SÄKERT:* Använd **Prepared Statements**:
```php
$stmt = $pdo->prepare("SELECT * FROM users WHERE name = ?");
$stmt->execute([$name]);
```
Databasen fattar då att `$name` bara är text, inte kod.

### XSS (Cross-Site Scripting)
Om en användare skriver `<script>alert('Hackad')</script>` i din gästbok och du visar det, kommer koden köras hos alla som besöker sidan!
**Lösning:** Tvätta alltid data med `htmlspecialchars($text)` innan du skriver ut den på skärmen.

### Lösenordshantering
Spara ALDRIG lösenord i klartext. Om databasen läcker ser alla "hemligt123".
Använd `password_hash()` när du sparar, och `password_verify()` när du loggar in.

---

## 5. Arkitektur & Struktur

### MVC (Model-View-Controller)
När projekten växer blir det rörigt ("Spagettikod"). MVC är ett sätt att organisera koden:
1.  **Model (Kocken):** Hanterar datan och logiken (SQL, beräkningar).
2.  **View (Tallriken):** Det som visas för kunden (HTML, CSS).
3.  **Controller (Kyparen):** Tar emot beställningen, ber kocken om mat, och serverar den på tallriken.

> **Reflektionsfråga:** Varför är det bra att inte blanda HTML och SQL i samma fil?

### Objektorienterad PHP (OOP)
Istället för lösa funktioner bygger vi **Klasser** och **Objekt**.
En klass `User` kan ha funktioner som `$user->login()` eller `$user->getName()`.

---

## 6. API & Datautbyte

### Vad är ett API?
Ett API (Application Programming Interface) är ett sätt för två program att prata med varandra. Oftast skickar vi inte HTML, utan ren data.

### JSON-formatet
Data skickas oftast som **JSON** (JavaScript Object Notation). Det ser ut så här:
```json
{
  "namn": "Kalle",
  "alder": 17,
  "hobbies": ["Koda", "Simma"]
}
```
PHP kan göra om detta till en array med `json_decode()`.

### Autentisering (Tokens)
När appar pratar med ditt API kan de inte "logga in" med cookies som en webbläsare. Istället skickar de en **Token** (en lång hemlig nyckel) i varje anrop för att visa vilka de är.

---

## 7. Moderna Verktyg

Riktiga proffs använder verktyg för att jobba snabbare och säkrare.

### Versionshantering (Git & GitLab)
*   **Git** är en tidsmaskin. Du kan spara "checkpoints" (commits) av din kod.
*   **GitLab/GitHub** är stället där vi sparar koden online för att kunna samarbeta.

### Beroendehantering (Composer)
Varför uppfinna hjulet? **Composer** är ett program som laddar ner färdiga bibliotek (paket) som andra skrivit. Vill du ha en funktion för att skicka mail? `composer require phpmailer/phpmailer`. Klart!

### Ramverk (Flight PHP)
Ett ramverk ger dig en färdig grundstruktur (MVC, Routing, Databaskoppling) så du slipper bygga allt från noll varje gång. I denna kurs använder vi mikroramverket **Flight PHP** tillsammans med [skolans startmall på GitLab](https://gitlab.com/ornskoldsviks-gymnasium/flight) för att det är snabbt, enkelt och ger full förståelse för hur koden hänger ihop.

> **Tips:** I branschen är även **Laravel** mycket vanligt för större PHP-applikationer. Det är större och mer komplext än Flight PHP, men bygger på samma grundläggande principer (MVC, Routing, Composer).

---

> **Kom ihåg:**
> Ingen kan allt utantill. Programmering handlar om att veta *vad* man ska googla på.
> Lycka till med kodandet!