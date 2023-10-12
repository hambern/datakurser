# Git - Uppgift 8

I denna uppgift ska du skapa ett git-repository i mappen `eclipse-workspace` på din dator, med en gitignore-fil som du kan använda för att versionshantera din Java-kod i Programmering 2-kursen. Du kan göra detta på två olika sätt, se nedan. Men läs gärna först följande delar:

- <https://www.w3schools.com/git/git_remote_getstarted.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_push_to_remote.asp?remote=gitlab>

## Använd Visual Studio Code

1. Börja med att öppna din eclipse-mapp i Visual Studio Code (VSC). Antagligen ligger den direkt under dina användare `~`
2. Gå in på git-fliken i VSC där du bör mötas av en blå knapp med texten "Download Git for Windows". För att gitta in din eclipse-mapp till Gitlab behöver du nämligen ha Git även på din dator. Klicka på knappen och öppna länken i din webbläsare.
3. Ladda ner och installera den senaste versionen. Du kommer att få en massa frågor, men klicka bara vidare. Installationen tar en stund.
4. Starta nu om VSC och kika i Git-fliken igen. Nu borde du få alternativet "Initialize Repository". Gör det.
5. Nu är det dags att skapa och lägga in `.gitignore`-filen [du kan hitta här](.gitignore).
6. Skapa en första commit.
7. Anslut dig till ett nyskapat repository på Gitlab och lägg till det som ett remote repository.
8. När du ansluter behöver du fylla i uppgifter om dig själv:
    - `git config --global user.email "din_epost@gmail.com"`
    - `git config --global user.name "Ditt Namn"`
9. Troligen behöver du också skapa och lägga in en ssh-nyckel. Det gör du med kommandot `ssh-keygen`. Tryck sedan bara på enter tills du är klar.
10. Kopiera sedan innehållet i nyckeln, som troligen ligger på `~/.ssh/id_rsa.pub`, och klistra in den bland andra SSH-nycklar på din GitLab-användare.

## Använd Git Bash

1. Börja med att ladda ner och installera [Git för Windows 10](https://gitforwindows.org/)
2. Skapa ett nytt projekt på [Gitlab](https://gitlab.com/) för din Java-kod. Titta gärna på [git_uppgift_2](/webbserverprogrammering_1/git/git_uppgift_2) för tips.
3. Döp projektet till "Prog 2 - ditt_användarnamn" (Prog 2 - mh6802). Som beskrivning av projektet skriver du ditt fullständiga namn
4. Gör Daniel Viström [@danieloeduse](https://gitlab.com/danieloeduse) till "reporter" på ditt projekt
5. Gå till din eclipse-mapp och initiera ett git repository. Använd antingen "Windows PowerShell" eller "Git Bash" för att navigera på din lokala dator.
    1. Initiera ett repository med `git init`
    2. Koppla sedan ditt repository till ditt repository på GitLab med `git remote add origin git@gitlab.com:ditt_användarnamn/namnet_på_ditt_repository.git`
6. Eftersom du inte anslutit till Gitlab från din lokala dator behöver du lägga till din ssh-nyckel. I Git bash gör du detta på följande sätt:
    1. `cat /c/Users/ditt_användarnamn/.ssh/id_rsa.pub | clip` för att kopiera din nuvarande ssh-nyckel till utklippet.
    2. Lägg till din ssh-nyckel på Gitlab under dina användarinställningar genom att klistra in den kod du fick i steget ovan
    3. I Git bash skriver du `eval $(ssh-agent -s)` för att starta ssh-klienten
    4. Lägg till din ssh-nyckel med `ssh-add /c/Users/ditt_användarnamn/.ssh/id_rsa`
    5. Nu bör du kunna ansluta till ditt repository
7. Skapa en `.gitigore`-fil som är identisk med [.gitignore](.gitignore). Du kan antingen kopiera innehållet eller ladda ner och använda filen i denna uppgift
8. Pusha upp den kod du skapat, inkl filen `.gitignore` i Programmering 2 till det nya projektet i GitLab
9. När du testat så att du fått med alla filer kan du meddela Daniel via Teams varpå han kan kontrollera att det fungerar.

## Git Bash-tricks

Om du använder "Git Bash" kan du visserligen använda linux-kommandon på din lokala maskin men du kan också stöta på en del problem:

- Om du vill klistra in text gör du det enklast genom att högerklicka och välja "Paste"
