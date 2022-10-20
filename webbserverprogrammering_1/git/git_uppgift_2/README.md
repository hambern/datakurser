# GIT - Uppgift 2

I denna uppgift ska du skapa din användare på GitLab och synka det med ditt lokala repository. Läs följande sidor på W3Schools:

- <https://www.w3schools.com/git/git_remote_getstarted.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_security_ssh.asp?remote=gitlab>
- <https://www.w3schools.com/git/git_remote_add_ssh.asp?remote=gitlab>

## Instruktioner

1. Fyll i uppgifterna på: https://gitlab.com/users/sign_up/. Ange gärna din privata epost-adress. Du kan exempelvis logga in via Google.
2. Välj "Create project" och döp ditt repository till "Webbserverprogrammering 1" och gör det gärna privat.
3. För att kunna synka till ditt GitLab-repository måste du lägga in din SSH-nyckel
   1. Gå in i terminalen och skapa en ssh-nyckel på din server med kommandot `ssh-keygen`. Du behöver inte göra några förändringar utan tryck bara på enter tills du är tillbaka till prompten igen
   2. Kontrollera så att du har en fungerande SSH-nyckel med kommandot `cat ~/.ssh/id_rsa.pub`. Du bör då få upp en mängd tecken som inleds med "ssh-rsa" och avslutas med ditt användarnamn och server.
   3. Kopiera all den informationen
   4. Gå nu tillbaka till GitLab och lägg till den SSH-nyckeln till ditt repository
   5. Du kan nu krypterat skicka information mellan din server och GitLab
4. För att synka ditt repository på servern med det på GitLab måste du nu köra följande kommandon i terminalen:
    1. Gå in i mappen `webbserverprogrammering_1`
    3. `git remote add origin git@gitlab.com:ditt_användarnamn/webbserverprogrammering_1.git` för att koppla ditt lokala repository till det på GitLab
    6. `git push -u origin main` för att skicka upp din förändring
    7. Nu bör du kunna gå in på ditt repository på GitLab och hitta filen `README.md`


