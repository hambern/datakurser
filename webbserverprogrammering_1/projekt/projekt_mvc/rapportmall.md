# Rapportmall: [Projektnamn]

Denna fil ska fyllas i löpande under projektets gång. Börja med projektplanen innan du skriver kod.

---

## DEL 1: Projektplan

_Fylls i och godkänns av lärare innan programmering påbörjas._

### 1. Inledning

**Vad ska du bygga?**
_(Beskriv kortfattat din applikation och dess huvudsyfte.)_

**Målgrupp**
_(Vem är applikationen till för?)_

### 2. Teknisk Specifikation

**MVC-Struktur**
_(Vilka Models kommer du behöva? Vilka Controllers?)_

- Models: t.ex. `User`, `Post`...
- Controllers: t.ex. `AuthController`, `BlogController`...

**Databasdesign**
_(Beskriv dina tabeller och relationer. Bifoga gärna en bild på ER-diagram eller beskriv i text.)_

- Tabell: `users` (id, username, password_hash...)
- Tabell: `posts` (id, user_id, title, content...)

**Säkerhet**
_(Vilka säkerhetsrisker ser du och hur ska du hantera dem? T.ex. SQL-injection, lösenordshantering.)_

### 3. Tidsplan

_(Grov planering vecka för vecka)_

- **V.x:** Setup av miljö & Databasmodellering
- **V.y:** Inloggning & Registrering
- **V.z:** CRUD-funktionalitet för temat
- **V.å:** Styling & Rapportskrivning

---

## DEL 2: Slutrapport & Utvärdering

_Fylls i när projektet är färdigt._

### 4. Genomförande

**Hur gick arbetet?**
_(Följde du tidsplanen? Stötte du på några oväntade problem?)_

**Avvikelser**
_(Har du ändrat något från den ursprungliga planen? Varför?)_

### 5. Teknisk Lösning

**Beskriv din kodstruktur**
_(Hur interagerar dina Views, Controllers och Models? Ge exempel på en funktion du är nöjd med.)_

**Kvalitet & Prestanda**
_(Hur har du säkerställt att koden är bra? Har du använt Composer?)_

### 6. Reflektion

**Vad var svårast?**

**Vad har du lärt dig?**

**Vad skulle du gjort annorlunda?**
_(Om du fick börja om idag, vad hade du gjort på ett annat sätt?)_

---

### Inlämningschecklista

- [ ] Koden är formatterad och kommenterad.
- [ ] Databasexport (.sql) finns i repot.
- [ ] `.gitignore` används (vendor-mappen är **inte** uppladdad).
- [ ] Rapporten ovan är ifylld.
