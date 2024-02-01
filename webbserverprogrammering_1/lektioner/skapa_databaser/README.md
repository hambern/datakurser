# Databastabeller: En grundläggande guide

[toc]

Databastabeller är fundamentala för att strukturera och lagra data i relationella databaser. De består av rader och kolumner och används för att representera och organisera information effektivt. I detta material utforskar vi grunderna i databastabeller och deras komponenter.

## Grundläggande komponenter i en databastabell

### Tabeller

- **Definition:** En tabell är ett tvådimensionellt rutnät bestående av rader och kolumner.
- **Användning:** Varje tabell representerar vanligtvis en sorts entitet, såsom användare, kommentarer, filmer, eller highscores.

### Rader och poster

- **Rad/Post:** Varje rad i tabellen motsvarar en unik entitet eller ett objekt (t.ex. en person, en kommentar). Dessa rader kallas ofta för "poster".
- **Attribut:** Varje post innehåller information i form av attribut, vilka är dataelement i de olika kolumnerna.

### Kolumner och attribut

- **Kolumn/Attribut:** Varje kolumn i en databastabell representerar en specifik egenskap eller ett attribut hos entiteten (t.ex. "username", "password").
- **Celler/Värden:** Där en rad och en kolumn möts ligger en cell, som innehåller det specifika värdet för ett attribut hos en entitet.

### Nycklar i databastabeller

- **Primärnyckel:** En kolumn eller en kombination av kolumner som unikt identifierar varje post i tabellen. Inga två rader får ha samma primärnyckel och den får inte vara tom.
- **Kandidatnyckel:** En potentiell primärnyckel. I ditt exempel med användare kan kandidatnycklar vara "id", "username", "id+username", etc.
- **Alternativ nyckel:** Alla kandidatnycklar som inte är primärnyckeln.
- **Främmande nyckel:** Används för att skapa relationer mellan tabeller. Det är en kolumn som refererar till primärnyckeln i en annan tabell.

### Datatyper

Vid definiering av kolumner i en databastabell är det viktigt att noggrant välja lämpliga datatyper som matchar den typ av data som kommer att lagras. Rätt datatyp säkerställer inte bara korrekt datarepresentation men också effektivitet i datalagring och bearbetning. Här är några av de vanligaste datatyperna:

- **INTEGER:** Ett heltal som används för att lagra numeriska värden utan decimaler. Typiska användningsområden inkluderar ålder, antal artiklar i lager eller poäng i ett spel. Det är en vanlig datatyp för primärnycklar och främmande nycklar på grund av dess effektivitet i jämförelser och indexering.
  - Exempel: `id INTEGER AUTO_INCREMENT PRIMARY KEY`

- **VARCHAR (eller STRING):** En textsträng med variabel längd, idealisk för de flesta typer av textbaserad information. Används ofta för att lagra namn, adresser och e-postadresser. VARCHAR kräver specificering av en maximal längd, vilket hjälper till att optimera lagringsutrymmet.
  - Exempel: `email VARCHAR(255)`

- **TEXT:** En datatyp för mycket långa textsträngar. Det är användbart för text som kan överstiga längden på en VARCHAR, såsom produktbeskrivningar, användarrecensioner eller blogginlägg.
  - Exempel: `article_content TEXT`

- **DATETIME/TIMESTAMP:** Används för att lagra datum och tider, med TIMESTAMP som ofta används för att automatiskt registrera tiden för en händelse, såsom när en rad skapas eller uppdateras. Dessa datatyper är avgörande för att spåra tidrelaterade händelser och loggar.
  - Exempel: `created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP`

- **BOOLEAN:** Representerar ett sanningsvärde, antingen sant eller falskt. Det är användbart för att hantera statusflaggor, såsom att indikera om ett konto är aktivt eller om en uppgift är slutförd.
  - Exempel: `is_active BOOLEAN`

- **FLOAT/DOUBLE:** Dessa datatyper används för att lagra decimaltal. FLOAT är lämplig för de flesta behov av decimaltal, medan DOUBLE erbjuder större precision och är användbar för vetenskapliga beräkningar eller finansiella data där extra precision krävs.
  - Exempel: `price DOUBLE`

Utöver dessa finns det flera andra datatyper som **DECIMAL** för finansiella beräkningar, **BLOB** för att lagra binär data som bilder eller dokument, och **ENUM** för att definiera en uppsättning fördefinierade värden. Valet av rätt datatyp är kritiskt för databasens prestanda och integritet.

## Namngivning

Att namnge tabeller, kolumner och andra komponenter i en databas är en viktig del av databasdesign och det finns flera etablerade bästa praxis för detta. Här är en detaljerad genomgång av några grundläggande principer för namngivning:

### Namngivning av tabeller

- **Pluralform:** Tabellnamn bör vanligtvis vara i pluralform för att indikera att de innehåller samlingar av entiteter. Till exempel: `users`, `orders`, `products`.
  
### Namngivning av kolumner

- **Singularform:** Kolumnnamn bör vanligtvis vara i singularform och tydligt beskriva innehållet i kolumnen. Till exempel: `user`, `order_date`, `product_name`.
- **Undvik prefix:** Undvik att använda tabellnamnet som prefix i kolumnnamnet, såvida det inte är för att undvika kollisioner mellan kolumnnamn i JOIN-operationer.
- **Tydliga namn:** Namnge kolumner så tydligt som möjligt. Till exempel, istället för `date`, använd `created_at` eller `updated_at` för att beskriva när en post skapades eller senast uppdaterades.
  
### Primära och främmande nycklar

- **Primärnycklar:** Använd ofta `id` som primärnyckel för enkelhet. Om du använder sammansatta nycklar, inkludera tabellnamnet, till exempel `user_id`.
- **Främmande nycklar:** Namnge främmande nycklar genom att kombinera måltabellens singularform och dess primärnyckel, till exempel `user_id` för en nyckel som refererar till `id` i `users`-tabellen.

### Tidsangivelser

- **Suffix `_at` för datum och tid:** För kolumner som innehåller tidsstämplar, använd suffixet `_at` för att indikera detta. Till exempel: `created_at`, `updated_at`.
- **Suffix `_on` för datum utan tid:** Om kolumnen bara representerar ett datum utan en specifik tid, kan suffixet `_on` vara lämpligt, till exempel `born_on`.

### Booleska kolumner

- **Predikatnamn:** För booleska kolumner, använd namn som kan besvaras med ja eller nej. Till exempel: `is_active`, `has_completed`.

### Konsistens och konventioner

- **Konsekvent Stil:** Välj en stil för namngivning (till exempel snake_case, camelCase, PascalCase) och håll dig konsekvent till den i hela databasen.
- **Specifika konventioner:** Följ specifika konventioner som är etablerade i din utvecklingsmiljö eller ramverk. Till exempel använder Laravel ofta snake_case för databasnamn.

## Relationer mellan tabeller

Det finns i huvudsak två olika former av relationer i en relationsdatabas.

- **1:N-relationer (en till många):** Enkla relationer där en entitet i en tabell kan relatera till flera entiteter i en annan tabell. Exempel: en användare som skriver flera kommentarer.
- **N:M-relationer (många till många):** Komplexa relationer där entiteter i en tabell kan ha relationer till flera entiteter i en annan tabell och vice versa. Detta kräver en mellantabell för att hantera relationerna.

## Exempel på tabellstrukturer

### 1:N-relationer

#### Användartabell

| id🔑 | username | password |
|------|----------|----------|
| 1    | micke    | 12345    |
| 2    | karim    | hello1   |
| 3    | liv      | PenguinHotdogBonanza |

#### Kommentartabell (med främmande nyckel)

| id🔑 | comment      | user_id |
|------|--------------|---------|
| 1    | Hej          | 1       |
| 2    | Hej själv!   | 2       |
| 3    | Vad händer?  | 2       |

~~~mermaid
erDiagram
    USERS ||--o{ COMMENTS : writes
    USERS {
        int id PK "Primary Key"
        string username
        string password
    }
    COMMENTS {
        int id PK "Primary Key"
        string comment
        int user_id FK "Foreign Key"
    }
~~~

### N:M-relationer

#### Användartabell

| id🔑 | username |
|------|----------|
| 1    | micke    |
| 2    | karim    |
| 3    | liv      |

#### Klubbtabell

| id🔑 | club_name            |
|------|----------------------|
| 1    | Hellhawkz            |
| 2    | Everybody Loves Jazz |
| 3    | The 123s             |

#### Relationstabell (Användare-Klubb)

| id🔑 | user_id | club_id |
|------|---------|---------|
| 1    | 1       | 1       |
| 2    | 1       | 2       |
| 3    | 2       | 2       |

~~~mermaid
erDiagram
    CLUBS ||--o{ CLUB_USER : includes
    USERS ||--o{ CLUB_USER : member_of
    CLUBS {
        int id PK "Primary Key"
        string club_name
    }
    USERS {
        int id PK "Primary Key"
        string username
    }
    CLUB_USER {
        int club_id FK "Foreign Key to CLUBS"
        int user_id FK "Foreign Key to USERS"
    }
~~~

## Indexering

- **Vad är indexering?** Indexering i en databas är processen att skapa en sekundär datastruktur (index) som hjälper till att snabba upp datatillgången. Det är jämförbart med indexet i en bok som leder dig snabbt till den sida du söker.
- **Hur fungerar det?** När ett index skapas på en kolumn eller flera kolumner, kan databasen använda detta index för att snabbt hitta rader med specifika värden istället för att söka igenom varje rad i tabellen.

### Typer av index

1. **Primärnyckelindex:** Skapas automatiskt när en primärnyckel definieras. Den säkerställer att varje rad kan identifieras unikt och förbättrar sökhastigheten.
2. **Sekundärt index:** Skapas på kolumner som inte är primärnycklar för att optimera sökningar som baseras på dessa kolumner.

### Användning och prestandapåverkan

- **När ska index användas?** Indexering är mest effektiv för stora tabeller och för kolumner som ofta används i sökningar (WHERE-klasuler), JOINs, och sorteringar (ORDER BY).
- **Förbättrad läshastighet:** Ett välstrukturerat index kan dramatiskt minska tiden för att hitta data.
- **Påverkan på skrivoperationer:** Indexering kan påverka skrivoperationer negativt eftersom varje gång en rad läggs till, uppdateras eller tas bort, måste indexet uppdateras.

### Bästa praxis för indexering

- **Analysera och välj rätt kolumner:** Använd verktyg som EXPLAIN för att identifiera vilka kolumner som bäst bör indexeras.
- **Undvik överindexering:** Skapa inte för många index, eftersom det kan minska skrivprestanda.
- **Kontinuerlig översyn:** Databasmönster kan förändras över tid, så det är viktigt att regelbundet utvärdera och justera indexeringen.

### Sammanfattning

Indexering är en kritisk komponent för effektiv databashantering. Rätt användning av index kan leda till betydande förbättringar i databasens sökprestanda, särskilt i stora databaser, men det är viktigt att balansera detta med den potentiella påverkan på skrivoperationer.

# Normalisering i relationsdatabaser

Normalisering är en kritisk process i designen av relationsdatabaser. Detta undervisningsmaterial syftar till att förklara normaliseringens koncept och dess viktiga regler, kända som normalformer. Genom att följa dessa principer, kan vi effektivisera databaser, undvika redundant data och underlätta framtida utbyggnationer.

## Vad är normalisering?

Normalisering innebär att justera en databasstruktur så att den följer specifika regler för att öka dess effektivitet och minska redundant data. Dessa regler delas upp i så kallade *normalformer*.

## Varför normalisera?

Syftet med normalisering är att:

- Undvika att samma data lagras på flera ställen om det inte är nödvändigt.
- Göra databasutvidgningar enklare och mer hanterbara.
- Säkerställa databasens integritet och konsistens.

## Första normalformen (1NF)

1NF fokuserar på att varje tabell ska ha en unik identitet och att data ska vara atomisk.

- **Primärnyckel:** Varje rad i en tabell ska kunna identifieras unikt med en primärnyckel.
- **Atomiska kolumner:** Varje kolumn ska innehålla enkla, odelbara värden.

**Exempel på 1NF:**

Brott mot 1NF:
| id🔑 | username | hobbies        |
|------|----------|----------------|
| 1    | alice    | Fotboll, Simning|
| 2    | bob      | Löpning, Cykling|

För att uppfylla 1NF, omstruktureras tabellen så att varje hobby lagras i en separat rad:
| id🔑 | username | hobby   |
|------|----------|---------|
| 1    | alice    | Fotboll |
| 1    | alice    | Simning |
| 2    | bob      | Löpning |
| 2    | bob      | Cykling |

## Andra normalformen (2NF)

2NF bygger på 1NF och kräver att alla icke-nyckelattribut är fullständigt beroende av hela primärnyckeln.

- **Fullständigt beroende:** Alla attribut måste vara beroende av hela primärnyckeln i tabeller med sammansatta primärnycklar.

**Exempel på 2NF:**

Antag en tabell med sammansatt primärnyckel, `student_id` och `course_id`:
| student_id🔑 | course_id🔑 | grade | student_name      |
|--------------|-------------|-------|-------------------|
| 123          | MATH101     | A     | Alice Andersson   |
| 456          | ENG202      | B     | Bob Bergsson      |

`student_name` är bara beroende av `student_id`. För att uppnå 2NF, flyttas `student_name` till en separat tabell:
| student_id🔑 | student_name      |
|--------------|-------------------|
| 123          | Alice Andersson   |
| 456          | Bob Bergsson      |

| student_id🔑 | course_id🔑 | grade |
|--------------|-------------|-------|
| 123          | MATH101     | A     |
| 456          | ENG202      | B     |

~~~mermaid
erDiagram
    STUDENTS ||--o{ GRADES : "has"
    STUDENTS {
        int student_id PK "Primary Key"
        string student_name
    }
    GRADES {
        int student_id PK "Primary Key"
        string course_id PK "Primary Key"
        string grade
    }
~~~

## Tredje normalformen (3NF)

3NF bygger vidare på 2NF och kräver att inga icke-nyckelattribut är beroende av andra icke-nyckelattribut.

- **Transitivt beroende:** Inga icke-nyckelattribut ska vara beroende av andra icke-nyckelattribut.

**Exempel på 3NF:**

Om vi har en tabell:
| student_id🔑 | course_id | grade | professor_name   |
|--------------|-----------|-------|------------------|
| 123          | MATH101   | A     | Dr. Carol Carlsson|
| 456          | ENG202    | B     | Dr. Daniel Danielsson |

`professor_name` är transitivt beroende av `course_id`. För att uppnå 3NF, separerar vi denna information:
| course_id🔑 | professor_name     |
|-------------|--------------------|
| MATH101     | Dr. Carol Carlsson |
| ENG202      | Dr. Daniel Danielsson |

| student_id🔑 | course_id | grade |
|--------------|-----------|-------|
| 123          | MATH101   | A     |
| 456          | ENG202    | B     |

~~~mermaid
erDiagram
    COURSES ||--o{ GRADES : "has"
    COURSES {
        string course_id PK "Primary Key"
        string professor_name
    }
    GRADES {
        int student_id PK "Primary Key"
        string course_id FK "Foreign Key"
        string grade
    }
~~~

Dessa exempel visar hur vi kan strukturera en databas mer effektivt genom att följa normalformerna, vilket minimerar redundans och underlättar underhåll.
