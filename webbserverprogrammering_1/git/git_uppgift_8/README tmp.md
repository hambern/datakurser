# Git - Uppgift 8

I denna uppgift ska du skapa ett git-repository i mappen `eclipse-workspace` på din dator, med en gitignore-fil som du kan använda för att versionshantera din Java-kod i Programmering 2-kursen. Läs gärna följande delar:

- <https://www.w3schools.com/git/git_remote_getstarted.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_push_to_remote.asp?remote=gitlab>

## Instruktioner

1. Börja med att öppna din eclopse-mapp i Visual Studio Code (VSC). Antagligen ligger den direkt under dina användare `~`
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

