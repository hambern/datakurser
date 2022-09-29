# Git - Uppgift 6

I denna uppgift ska du skapa ett repository du kan dela med med din klass och som ni alla kan "committa" till. Läs gärna följande innan du sätter igång:

- <https://www.w3schools.com/git/git_pull_from_remote.asp?remote=gitlab>

## Instruktioner

Den första som kommer till denna uppgift får i uppgift att skapa ett "bare" repository direkt under din användare `~/` med hjälp av följande kommando: `cd && git init --bare --shared=group shared_bare.git`. Om någon redan har gjort det kan du gå direkt till följande uppgifter:

1. Alla, även personen som har skapat `shared_bare.git`, ska nu hämta ner det tomma repot till en mapp på sin egen användare. När ni står direkt under er användare `~/` ska du klona repot med kommandot: `git clone ~username/shared_bare.git`. "username" är användarnamnet till den som skapade det delade repositoryt. Du bör då få en mapp som heter `shared_bare` direkt under din användare. Gå in i den...
2. Låt nu alla i tur och ordning genomgå följande steg:
   1. Skapa en fil som heter `members` med vim och skriv ditt namn i den filen på en ny rad
   2. Spara filen, lägg till den, commita den och skicka den sen till remote med `git push`
   3. Kör `git pull` och se vad som händer, tex `ls -la` och sen `cat members`
   4. Kör `git tree` (ett git-alias) för att se hur det ser ut
3. Skapa en egen fil med ditt användarnamn och fyll den med ett innehåll. Lägg till den och gitta in den till repositoryt. Glöm inte att "pulla" repositoryt innan du "pushar"!
4. Gör förändringar i någon annans fil, "committa", "pulla" och "pusha" dina förändringar. Om du blir varnad för conflikter, lös dem med hjälp av kommandot `git merge`
5. Skapa en fil som heter `chat` (om den inte redan finns) och försök föra ett samtal i den med dina kamrater

## Uppgift

1. Skapa en fil vid namn `git_uppgift_6.md` i din `git/`-mapp och svara på följande frågor:
2. Vad innebär det att kommandot inleds med `cd &&`?
3. Vad är det för skillnad på `git init` och `git init --bare`?
4. Varför lägger man till `--shared=group` till kommandot?
5. Varför är det viktigt att "pulla" repot innan man "pushar"?
6. När ska man använda kommandot `git merge`?
